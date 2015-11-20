@extends('mainlayout.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control Panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Start Top Box -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>5</h3>
                            <p>Projects In-Progress</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-filing"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-info-circle"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>239.00</h3>
                            <p>Total Claim</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-cash"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-info-circle"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>2</h3>
                            <p>Completed Projects</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-checkmark-round"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-info-circle"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>34<sup style="font-size: 20px">%</sup></h3>
                            <p>Project Milestone</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-info-circle"></i></a>
                    </div>
                </div>
            </div>
            <!-- End Top Box -->
        </section><!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@stop

@section('sidebarMenu')
    <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active"><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="{{url('/projects')}}"><i class="fa fa-briefcase"></i> <span>Projects</span></a></li>
        <li><a href="{{url('/documents')}}"><i class="fa fa-archive"></i> <span>Documents</span></a></li>
        <li class="header">UTILITIES</li>
        <li><a href="{{url('/tasks')}}"><i class="fa fa-tasks"></i> <span>Tasks</span></a></li>
        <li><a href="{{url('/message')}}"><i class="fa fa-envelope"></i> <span>Message</span></a></li>
        <li><a href="{{url('/announcement')}}"><i class="fa fa-feed"></i> <span>Announcement</span></a></li>
        <li class="header">PREFERENCES</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="{{url('/users')}}"><i class="fa fa-group"></i> <span>Users</span></a></li>
        <li><a href="{{url('/company')}}"><i class="fa fa-bank"></i> <span>Company Details</span></a></li>
        <li class="treeview">
            <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="#">Link in level 2</a></li>
                <li><a href="#">Link in level 2</a></li>
            </ul>
        </li>
    </ul>
@stop