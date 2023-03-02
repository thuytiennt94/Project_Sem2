@extends('front.layout.master')

@section('title', 'Profile')

@section('body')

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./"><i class="fa fa-home"></i> Home</a>
                        <span>Profile</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
    <div class="edit-profile-section">
        <div class="container">

            <div class="col-lg-3" style="
                display: flex;
                justify-content: center;
                flex-direction: column;
            ">
                <div class="img-profile">
                    <label for="image"
                           class=" text-md-right col-form-label"></label>
                    <img class="thumbnail rounded-circle" data-toggle="tooltip"
                         title="Click to change the image" data-placement="bottom"
                         src="front/img/avatar/{{ $user->avatar ?? 'default-user.png' }}" alt="Avatar">


                    <input name="image" type="file" onchange="changeImg(this)"
                           class="image form-control-file" style="display: none;" value="">
                    <input type="hidden" name="image_old" value="{{ $user->avatar }}">
                </div>
                <div class="text-profile">
                    <h5>{{ $user->name }}</h5>
                    <p>{{ $user->email }}</p>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="form-profile-setting">
                    <h3>Profile Settings</h3>

                    <!-- <table class="tbl-profile-setting">
                        <tr>
                            <th>Name </th>
                            <td><input type="text" id="txtName"> </td>
                        </tr>
                        <tr>
                            <th>Phone </th>
                            <td><input type="texttext" id="txtPhone"> </td>
                        </tr>
                        <tr>
                            <th>Email </th>
                            <td><input type="email" id="email"></td>
                        </tr>
                        <tr>
                            <th>Address </th>
                            <td><input type="text" id="txtAddress"></td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td><input type="text" id="txtCountry"></td>
                        </tr>
                        <tr>
                            <th>Company</th>
                            <td><input type="text" id="txtCompany"></td>
                        </tr>
                    </table> -->
                    <form action="/login/my-account/user/{{ $user->id }}" method="post">
                        @csrf
                        @method('POST')

                        @if(session('notification'))
                            <div class="alert alert-warning" role="alert" style="font-size: 16px">
                                {{ session('notification') }}
                            </div>
                        @endif

                        <div class="form-setting">

                            <div class="group-setting row">
                                <div class="container container-form">
                                    <div class="col-md-6 col-xl-6">
                                        <label for="name">Name</label>
                                        <input required name="name" id="name" placeholder="Name" type="text"
                                               class="form-control" value="{{ $user->name }}">

                                        <label for="phone">Phone</label>
                                        <input required name="phone" id="phone" placeholder="Phone" type="tel"
                                               class="form-control" value="{{ $user->phone }}">

                                        <label for="password">Password</label>
                                        <input required name="password" id="password" placeholder="Password"
                                               type="password"
                                               class="form-control">

                                        <label for="confirm_password">Confirm Password</label>
                                        <input required name="confirm_password" id="confirm_password"
                                               placeholder="Confirm Password" type="password"
                                               class="form-control">
                                    </div>


                                    <div class="col-md-6 col-xl-6">
                                        <label for="email">Email</label>
                                        <input required name="email" id="email" placeholder="Email" type="email"
                                               class="form-control" value="{{ $user->email }}">

                                        <label for="postcode">Postcode Zip</label>
                                        <input name="postcode_zip" id="postcode_zip"
                                               placeholder="Postcode Zip" type="text" class="form-control"
                                               value="{{ $user->postcode_zip }}">

                                        <label for="address">Address</label>
                                        <input name="street_address" id="street_address"
                                               placeholder="Street Address" type="text" class="form-control"
                                               value="{{ $user->street_address }}">

                                        <label for="country">Country</label>
                                        <input name="country" id="country" placeholder="Country"
                                               type="text" class="form-control" value="{{ $user->country }}">
                                    </div>


                                </div>
                                <div class="container container-form">
                                    <div class="col-md-12 col-xl-12">
                                        <label for="company">Company</label>
                                        <input name="company_name" id="company_name"
                                               placeholder="Company Name" type="text" class="form-control"
                                               value="{{ $user->company_name }}">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn-save">Save Profile</button>
                    </form>

                </div>
            </div>


        </div>
    </div>
@endsection
