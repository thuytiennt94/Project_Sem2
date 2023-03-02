<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Group4',
                'email' => 'G4@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 2,
                'description' => null,

                'company_name' => 'Group4 - T2109A',
                'country' => 'Viet Nam',
                'street_address' => 'So 8 Ton That Thuyet',
                'postcode_zip' => '10000',
                'town_city' => 'Ha Noi',
                'phone' => '0123456789',
            ],
        ]);

        DB::table('users')->insert([

            [
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 3,
                'name' => 'Shane Lynch',
                'email' => 'ShaneLynch@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-2.png',
                'level' => 1,
                'description' => 'Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud amodo'
            ],
            [
                'id' => 4,
                'name' => 'Brandon Kelley',
                'email' => 'BrandonKelley@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-2.png',
                'level' => 1,
                'description' => null,
            ],
            [
                'id' => 5,
                'name' => 'Roy Banks',
                'email' => 'RoyBanks@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-1.png',
                'level' => 1,
                'description' => null,
            ],
            [
                'id' => 6,
                'name' => 'Nguyễn Việt Anh',
                'email' => 'vietanh@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'vietanh.jpg',
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 7,
                'name' => 'Thủy Tiên',
                'email' => 'thuytien@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'default-user.png',
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 7,
                'name' => 'Thúy',
                'email' => 'thuy@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'default-user.png',
                'level' => 0,
                'description' => null,
            ],
        ]);

        DB::table('blogs')->insert([
            [
                'user_id' => 3,
                'title' => 'Therapy And Treatment No Longer',
                'subtitle' => '',
                'image' => 'single-blog-1.jpg',
                'category' => 'DOCTOR',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'The best Pharmacy WordPress theme',
                'subtitle' => '',
                'image' => 'single-blog-2.jpg',
                'category' => 'DOCTOR',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Mirum est notare quam littera gothica',
                'subtitle' => '',
                'image' => 'single-blog-3.jpg',
                'category' => 'DOCTOR',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Therapy And Treatment No Longer',
                'subtitle' => '',
                'image' => 'single-blog-4.jpg',
                'category' => 'MEDICAL',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'The best Pharmacy WordPress theme',
                'subtitle' => '',
                'image' => 'single-blog-5.jpg',
                'category' => 'MEDICAL',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Mirum est notare quam littera gothica',
                'subtitle' => '',
                'image' => 'single-blog-6.jpg',
                'category' => 'MEDICAL',
                'content' => '',
            ],
        ]);

        DB::table('product_categories')->insert([
            [
                'name' => 'Capsule',
            ],
            [
                'name' => 'Injection',
            ],
            [
                'name' => 'Medication',
            ],
            [
                'name' => 'Ointment',
            ],
            [
                'name' => 'Spray',
            ],
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'product_category_id' => 2,
                'name' => 'Blood Inhaler',
                'description' => '<div class="row"> <div class="col-lg-7"> <h5>Introduction</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> <h5>Features</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> </div> <div class="col-lg-5"> <img src="front/img/tab-desc.jpg" alt=""> </div> </div>',
                'content' => '',
                'price' => 30.00,
                'qty' => 20,
                'discount' => 18.68,
                'sku' => '00012',
                'featured' => true,
                'tag' => 'Inhaler',
            ],
            [
                'id' => 2,
                'product_category_id' => 1,
                'name' => 'Brain Medication',
                'description' => '<div class="row"> <div class="col-lg-7"> <h5>Introduction</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> <h5>Features</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> </div> <div class="col-lg-5"> <img src="front/img/tab-desc.jpg" alt=""> </div> </div>',
                'content' => null,
                'price' => 35.00,
                'qty' => 20,
                'discount' => 13.68,
                'sku' => null,
                'featured' => true,
                'tag' => 'Capsule',
            ],
            [
                'id' => 3,
                'product_category_id' => 5,
                'name' => 'Cancer Medicine',
                'description' => '<div class="row"> <div class="col-lg-7"> <h5>Introduction</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> <h5>Features</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> </div> <div class="col-lg-5"> <img src="front/img/tab-desc.jpg" alt=""> </div> </div>',
                'content' => null,
                'price' => 16.00,
                'qty' => 20,
                'discount' => 12.00,
                'sku' => null,
                'featured' => true,
                'tag' => 'Capsule',
            ],
            [
                'id' => 4,
                'product_category_id' => 3,
                'name' => 'Forehead Vitamin',
                'description' => '<div class="row"> <div class="col-lg-7"> <h5>Introduction</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> <h5>Features</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> </div> <div class="col-lg-5"> <img src="front/img/tab-desc.jpg" alt=""> </div> </div>',
                'content' => null,
                'price' => 32.00,
                'qty' => 0,
                'discount' => 14.69,
                'sku' => null,
                'featured' => true,
                'tag' => 'Capsule',
            ],
            [
                'id' => 5,
                'product_category_id' => 2,
                'name' => "Freckles Treatment",
                'description' => '<div class="row"> <div class="col-lg-7"> <h5>Introduction</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> <h5>Features</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> </div> <div class="col-lg-5"> <img src="front/img/tab-desc.jpg" alt=""> </div> </div>',
                'content' => null,
                'price' => 20.00,
                'qty' => 20,
                'discount' => 11.89,
                'sku' => null,
                'featured' => false,
                'tag' => 'Capsule',
            ],
            [
                'id' => 6,
                'product_category_id' => 5,
                'name' => 'Heart Tablet',
                'description' => '<div class="row"> <div class="col-lg-7"> <h5>Introduction</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> <h5>Features</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> </div> <div class="col-lg-5"> <img src="front/img/tab-desc.jpg" alt=""> </div> </div>',
                'content' => null,
                'price' => 40.00,
                'qty' => 20,
                'discount' => 18.65,
                'sku' => null,
                'featured' => true,
                'tag' => 'Capsule',
            ],
            [
                'id' => 7,
                'product_category_id' => 4,
                'name' => 'Mouth Spray',
                'description' => '<div class="row"> <div class="col-lg-7"> <h5>Introduction</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> <h5>Features</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> </div> <div class="col-lg-5"> <img src="front/img/tab-desc.jpg" alt=""> </div> </div>',
                'content' => null,
                'price' => 20.00,
                'qty' => 20,
                'discount' => 13.00,
                'sku' => null,
                'featured' => true,
                'tag' => 'Spray',
            ],
            [
                'id' => 8,
                'product_category_id' => 1,
                'name' => 'Multivitamin fresh liquid',
                'description' => '<div class="row"> <div class="col-lg-7"> <h5>Introduction</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> <h5>Features</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> </div> <div class="col-lg-5"> <img src="front/img/tab-desc.jpg" alt=""> </div> </div>',
                'content' => null,
                'price' => 30.00,
                'qty' => 20,
                'discount' => 16.45,
                'sku' => null,
                'featured' => true,
                'tag' => 'Capsule',
            ],
            [
                'id' => 9,
                'product_category_id' => 1,
                'name' => 'Multivitamin fresh liquid',
                'description' => '<div class="row"> <div class="col-lg-7"> <h5>Introduction</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> <h5>Features</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> </div> <div class="col-lg-5"> <img src="front/img/tab-desc.jpg" alt=""> </div> </div>',
                'content' => null,
                'price' => 30.00,
                'qty' => 20,
                'discount' => 16.45,
                'sku' => null,
                'featured' => true,
                'tag' => 'Capsule',
            ],
            [
                'id' => 10,
                'product_category_id' => 1,
                'name' => 'Paraxetal 150ml liquid',
                'description' => '<div class="row"> <div class="col-lg-7"> <h5>Introduction</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> <h5>Features</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> </div> <div class="col-lg-5"> <img src="front/img/tab-desc.jpg" alt=""> </div> </div>',
                'content' => null,
                'price' => 32.00,
                'qty' => 20,
                'discount' => 17.42,
                'sku' => null,
                'featured' => true,
                'tag' => 'Capsule',
            ],
            [
                'id' => 11,
                'product_category_id' => 1,
                'name' => 'Thorne Gallipot',
                'description' => '<div class="row"> <div class="col-lg-7"> <h5>Introduction</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> <h5>Features</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> </div> <div class="col-lg-5"> <img src="front/img/tab-desc.jpg" alt=""> </div> </div>',
                'content' => null,
                'price' => 26.00,
                'qty' => 20,
                'discount' => 16.45,
                'sku' => null,
                'featured' => true,
                'tag' => 'Capsule',
            ],
            [
                'id' => 12,
                'product_category_id' => 1,
                'name' => 'Tongue aspirin',
                'description' => '<div class="row"> <div class="col-lg-7"> <h5>Introduction</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> <h5>Features</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> </div> <div class="col-lg-5"> <img src="front/img/tab-desc.jpg" alt=""> </div> </div>',
                'content' => null,
                'price' => 29.00,
                'qty' => 20,
                'discount' => 17.45,
                'sku' => null,
                'featured' => true,
                'tag' => 'Capsule',
            ],
            [
                'id' => 13,
                'product_category_id' => 1,
                'name' => 'Tongue sore capsule',
                'description' => '<div class="row"> <div class="col-lg-7"> <h5>Introduction</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> <h5>Features</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> </div> <div class="col-lg-5"> <img src="front/img/tab-desc.jpg" alt=""> </div> </div>',
                'content' => null,
                'price' => 26.50,
                'qty' => 20,
                'discount' => 15.55,
                'sku' => null,
                'featured' => true,
                'tag' => 'Capsule',
            ],
            [
                'id' => 14,
                'product_category_id' => 1,
                'name' => 'White tooth scream',
                'description' => '<div class="row"> <div class="col-lg-7"> <h5>Introduction</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> <h5>Features</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p> </div> <div class="col-lg-5"> <img src="front/img/tab-desc.jpg" alt=""> </div> </div>',
                'content' => null,
                'price' => 22.00,
                'qty' => 20,
                'discount' => 13.45,
                'sku' => null,
                'featured' => true,
                'tag' => 'Capsule',
            ],
        ]);


        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => 'product-1.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6.jpg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9.jpg',
            ],
            [
                'product_id' => 10,
                'path' => 'product-10.jpg',
            ],
            [
                'product_id' => 11,
                'path' => 'product-11.jpg',
            ],
            [
                'product_id' => 12,
                'path' => 'product-12.jpg',
            ],
            [
                'product_id' => 13,
                'path' => 'product-13.jpg',
            ],
            [
                'product_id' => 14,
                'path' => 'product-14.jpg',
            ],
        ]);

        DB::table('product_details')->insert([
            [
                'product_id' => 1,
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 2,
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 3,
                'size' => 'S',
                'qty' => 10,
            ],
            [
                'product_id' => 3,
                'size' => 'M',
                'qty' => 0,
            ],
            [
                'product_id' => 4,
                'size' => 'S',
                'qty' => 10,
            ],
            [
                'product_id' => 4,
                'size' => 'M',
                'qty' => 0,
            ],
            [
                'product_id' => 5,
                'size' => 'S',
                'qty' => 10,
            ],

            [
                'product_id' => 7,
                'size' => 'S',
                'qty' => 10,
            ],
            [
                'product_id' => 7,
                'size' => 'M',
                'qty' => 0,
            ],

        ]);

        DB::table('product_comments')->insert([
            [
                'product_id' => 1,
                'user_id' => 4,
                'email' => 'BrandonKelley@gmail.com',
                'name' => 'Brandon Kelley',
                'messages' => 'Nice!',
                'rating' => 4,
            ],
            [
                'product_id' => 1,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice!',
                'rating' => 4,
            ],
        ]);
    }
}

