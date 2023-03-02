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

    <div class="profile-section">
        <div class="container">
            @foreach($users as $user)
                <div class="col-lg-3">
                    <div class="img-profile">
                        <img class="rounded-circle" data-toggle="tooltip"
                             title="Avatar" data-placement="bottom"
                             src="front/img/avatar/{{ $user->avatar ?? 'default-user.png' }}" alt="Avatar">
                    </div>
                    <div class="text-profile">
                        <h5>{{ $user->name }}</h5>
                        <p>{{ $user->email }}</p>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="form-profile">
                        <h3>Profile detail</h3>
                        <a href="./login/my-account/{{ $user->id }}" class="btn "><i class="fa fa-pencil-square-o"
                                                                    aria-hidden="true"></i>
                            Edit</a>
                        <table class="tbl-profile">
                            <tr>
                                <th>Name</th>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{ $user->phone }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $user->email }}</td>
                            </tr>

                            <tr>
                                <th>Postcode Zip</th>
                                <td>{{ $user->postcode_zip }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $user->street_address }}</td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td>{{ $user->country }}</td>
                            </tr>
                            <tr>
                                <th>Company</th>
                                <td>{{ $user->company_name }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

            @endforeach
        </div>

    </div>

@endsection
