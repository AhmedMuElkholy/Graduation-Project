@extends('admin.layouts.app')
@section('page-title') Role Index @endsection
@section('content')

<!-- Breadcome start-->
<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list shadow-reset">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="breadcome-menu">
                                <li><a href="{{route('admin.dashboards.index')}}">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Role</span>
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

<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Role <span class="table-project-n">Data</span> Table @can('roles.create')<a href="{{route('admin.roles.create')}}" class="btn btn-success">Create</a>@endcan</h1>  
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="name">Name</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ucfirst($role->name)}}</td>
                                        <td>
                                            @can('roles.edit')
                                                <a href="{{route('admin.roles.edit',$role->id)}}"><i class="fa fa-pencil"></i></a>
                                            @endcan
                                            @can('roles.destroy')
                                            <a href="#deModal{{$role->id}}" data-toggle="modal"><i class="fa fa-trash"></i></a>
                                            <div class="modal fade" id="deModal{{$role->id}}" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Delete Confirmation
                                                                 <a class="close" data-dismiss="modal" href="#">
                                                                    <i class="fa fa-close"></i>
                                                                </a>
                                                            </h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to delete this record?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form method="POST"  action="{{route('admin.roles.destroy',$role->id)}}">
                                                                @csrf
                                                                @method('Delete')
                                                                <button type="submit" class="btn btn-danger">Confirm</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             @endcan
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table End -->

@endsection