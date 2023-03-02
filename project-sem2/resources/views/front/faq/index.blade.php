@extends('front.layout.master')

@section('title', 'Faq')

@section('body')

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="./"><i class="fa fa-home"></i> Home</a>
                    <span>FAQ</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Faq Section Begin -->
<div class="faq-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="faq-accordin">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-heading active">
                                <a class="active" data-toggle="collapse" data-target="#collapseOne">
                                    Is There Anything I Should Bring?
                                </a>
                            </div>
                            <div class="collapse show" id="collapseOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerciation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseTwo">
                                    Is There Anything I Should Bring?
                                </a>
                            </div>
                            <div class="collapse" id="collapseTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerciation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseThree">
                                    Is There Anything I Should Bring?
                                </a>
                            </div>
                            <div class="collapse" id="collapseThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerciation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Faq Section End -->

@endsection
