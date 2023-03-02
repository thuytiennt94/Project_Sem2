<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Order\OrderServiceInterface;
use App\Services\User\UserServiceInterface;
use App\Utilities\Common;
use App\Utilities\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    private $userService;
    private $orderService;

    public function __construct(UserServiceInterface $userService,
                                OrderServiceInterface $orderService)
    {
        $this->userService = $userService;
        $this->orderService = $orderService;
    }

    public function index(){
        return view('front.login.index');
    }

    public function register(){
        return view('front.login.register');
    }

    public function checkLogin(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => Constant::user_level_client,
        ];

        $remember = $request->remember;

        if (Auth::attempt($credentials, $remember)) {
           // return redirect('');
            return redirect()->intended('');
        }
        else {
            return back()->with('notification', 'ERROR: Email or password is wrong.');
        }
    }

    public function logout(){
        Auth::logout();

        return back();
    }

    public function postRegister(Request $request){
        if ($request->password != $request->password_confirmation){
            return back()->with('notification', 'ERROR: Confirm password does not match');
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => Constant::user_level_client,
        ];

        $this->userService->create($data);

        return redirect('/login')->with('notification', 'Register Success! Please login.');
    }

    public function myOrderIndex() {
        $orders = $this->orderService->getOrderByUserId(Auth::id());

        return view('front.login.my-order.index', compact('orders'));
    }

    public function myOrderShow($id){
        $order = $this->orderService->find($id);

        return view('front.login.my-order.show', compact('order'));
    }

    public function myAccountIndex(){
        $users = $this->userService->getUserById(Auth::id());

        return view('front.login.my-account.profile',compact('users'));
    }

    public function myAccountEdit($id){
        $user = $this->userService->find($id);

        return view('front.login.my-account.edit-profile', compact('user'));
    }

    public function myAccountUpdate(Request $request, $id) {
        $data = $request->all();

        if ($request->get('password') != null) {
            if ($request->get('password') != $request->get('confirm_password')){
                return back()
                    ->with('notification', 'Error: Confirm password does not match');
            }
            $data['password'] = bcrypt($request->get('password'));
        } else {
            unset($data['password']);
        }

        if ($request->hasFile('image')){
            $data['avatar'] = Common::uploadFile($request->file('image'), 'front/img/avatar');

            $file_name_old = $request->get('image_old');
            if ($file_name_old != '') {
                unlink('front/img/avatar/' .$file_name_old);
            }
        }

        $this->userService->update($data, $id);



        return redirect('login/my-account/'. $id)->with('notification', 'Success: Your information has change');
    }
}
