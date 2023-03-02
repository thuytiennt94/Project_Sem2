<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Order\OrderServiceInterface;
use App\Services\OrderDetail\OrderDetailServiceInterface;
use App\Utilities\Constant;
use App\Utilities\VNPay;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckOutController extends Controller
{
    private $orderService;
    private $orderDetailService;

    public function __construct(OrderServiceInterface $orderService,
                                OrderDetailServiceInterface $orderDetailService)
    {
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;
    }

    public function index(){
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        return view('front.checkout.index', compact('carts','total','subtotal'));
    }

    public function addOrder(Request $request){
        //01. Thêm đơn hàng
        $data = $request->all();
        $data['status'] = Constant::order_status_ReceiveOrders;
        $order = $this->orderService->create($data);

        //02. Thêm chi tiết ơn hàng
        $carts = Cart::content();

        foreach ($carts as $cart){
            $data = [
                'order_id' => $order->id,
                'product_id' => $cart->id,
                'qty' => $cart->qty,
                'amount' => $cart->price,
                'total' => $cart->price * $cart->qty,
            ];

            $this->orderDetailService->create($data);
        }

        if ($request->payment_type == 'pay_later'){
            $total = Cart::total();
            $subtotal = Cart::subtotal();
            $this->sendEmail($order, $total, $subtotal);

            //03. Xóa giỏ hàng
            Cart::destroy();

            //04. Trả về kết quả thông báo
            return redirect('checkout/result')
                ->with('notification', 'Success! You will pay on delivery. Please check your email.');
        }
        if ($request->payment_type == 'online_payment'){
            //01. Lấy URL thanh toán VNPay
            $data_url = VNPAY::vnpay_create_payment([
                'vnp_TxnRef' => $order->id,
                'vnp_OrderInfo' => 'Đơn hàng của bạn đang được chuẩn bị!',
                'vnp_Amount' => Cart::total(0, '', '') * 23070,
            ]);

            //02. Chuyển hướng tới URL lấy được
            return redirect()->to($data_url);
        }
    }

    public function vnPayCheck(Request $request){
        //01. Lấy data từ URL
        $vnp_ResponseCode = $request->get('vnp_ResponseCode');
        $vnp_TxnRef = $request->get('vnp_TxnRef');
        $vnp_Amount = $request->get('vnp_Amount');

        //02. Kiểm tra data, xem ết quả giao địch trả về từ VNPay
        if ($vnp_ResponseCode != null) {
            if ($vnp_ResponseCode == 00){
                //Cập nhật trạng thái order
                $this->orderService->update(['status' => Constant::order_status_Paid], $vnp_TxnRef);

                //Gửi email
                $order = $this->orderService->find($vnp_TxnRef);
                $total = Cart::total();
                $subtotal = Cart::subtotal();
                $this->sendEmail($order, $total, $subtotal);

                // Xóa giỏ hàng
                Cart::destroy();

                return redirect('checkout/result')
                    ->with('notification', 'Success! Has paid online. Please check your email.');
            } else {
                // Xóa đơn hàng đã thêm vào database
                $this->orderService->delete($vnp_TxnRef);

                // Thông báo lỗi
                return redirect('checkout/result')
                    ->with('notification', 'ERROR! Payment failed or canceled.');
            }
        }
    }

    public function result(){
        $notification = session('notification');

        return view('front.checkout.result', compact('notification'));
    }

    private function sendEmail($order, $total, $subtotal){
        $email_to = $order->email;

        Mail::send('front.checkout.email', compact('order','total','subtotal'),
            function ($message) use ($email_to) {
                $message->from('anhnvth2109032@fpt.edu.vn', 'Clarivo');
                $message->to($email_to, $email_to);
                $message->subject('Order Notification');
        });
    }
}
