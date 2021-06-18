@extends('admin.layouts.app')
@section('content')

<!-- Breadcome start-->
<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="breadcome-heading">
                                <form role="search" class="">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="breadcome-menu">
                                <li><a href="{{route('admin.home')}}">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Profile</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcome End-->

@include('flash_messages')

@if (request('a') == 'general-info')
<!-- Basic Form Start -->
<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline8-list basic-res-b-30 shadow-reset">
                    <div class="sparkline8-hd">
                        <div class="main-sparkline8-hd">
                            <h1>Profile Form</h1>
                        </div>
                    </div>
                    <div class="sparkline8-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="basic-login-inner">
                                        <form action="{{route('admin.generalInfo')}}" id="generalInfo" method="POST">
                                            @csrf
                                            <input type="hidden" name="a" value="general-info" /> 
                                            <div class="form-group-inner">
                                                <label>Username</label>
                                                <input type="text" name="name" class="form-control" placeholder="Enter Username" value="{{Auth::user()->name}}"/>
                                            </div>
                                            <div class="form-group-inner">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="Enter Email" value="{{Auth::user()->email}}" />
                                            </div>
                                            <div class="login-btn-inner">
                                                <div class="inline-remember-me">
                                                    <button class="btn btn-sm btn-primary pull-right login-submit-cs" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Basic Form End-->
@endif

@if (request('a') == 'change-password')
<!-- Basic Form Start -->
<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline8-list basic-res-b-30 shadow-reset">
                    <div class="sparkline8-hd">
                        <div class="main-sparkline8-hd">
                            <h1>Password Form</h1>
                        </div>
                    </div>
                    <div class="sparkline8-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="basic-login-inner">
                                        <form action="{{route('admin.changePassword')}}" id="changePassword" method="POST">
                                            @csrf
                                            <input type="hidden" name="a" value="change-password" /> 
                                            <div class="form-group-inner">
                                                <label>Old Password</label>
                                                <input type="password" name="old_password" class="form-control"  placeholder="Password" placeholder="password" />
                                            </div>
                                            <div class="form-group-inner">
                                                <label>New Password</label>
                                                <input type="password" name="password" class="form-control"  placeholder="Password" placeholder="password" />
                                            </div>
                                            <div class="form-group-inner">
                                                <label>Confirm Password</label>
                                                <input type="password" name="password_confirmation" class="form-control"  placeholder="Confirm Password" placeholder="password" />
                                            </div>
                                            <div class="login-btn-inner">
                                                <div class="inline-remember-me">
                                                    <button class="btn btn-sm btn-primary pull-right login-submit-cs" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Basic Form End-->
@endif

@endsection