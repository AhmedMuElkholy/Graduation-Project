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
                                <li><a href="{{route('admin.contactuses.index')}}">Contact Us</a> /</li>
                                <li><span class="bread-blod">Show</span></li>
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

<!-- Basic Form Start -->
<div class="basic-form-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline8-list basic-res-b-30 shadow-reset">
                    <div class="sparkline8-hd">
                        <div class="main-sparkline8-hd">
                            <h1>Show Contact Us Form <a href="{{route('admin.contactuses.index')}}" class="btn btn-primary">Back</a></h1>
                        </div>
                    </div>
                    <div class="sparkline8-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="basic-login-inner">
                                        <p><strong>Name: </strong> {{$contactus->name}}</p>
                                        <p><strong>Message: </strong> 
                                        <a href="#deModal{{$contactus->id}}" data-toggle="modal" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                            <div class="modal fade" id="deModal{{$contactus->id}}" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Show Message
                                                                <a class="close" data-dismiss="modal" href="#">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="paragraph">
                                                                <div class="paragraph__column">        
                                                                   <p style="word-wrap: break-word">{{$contactus->message}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="col-xs-6">
                                    <div class="basic-login-inner">
                                        <p><strong>Email: </strong> {{$contactus->email}}</p>
                                        <p><strong>Subject: </strong> {{$contactus->subject}}</p>
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

@endsection