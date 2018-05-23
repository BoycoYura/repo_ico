@extends('admin.layout.master')

@section('content')
@php
   $totalusers = \App\User::where('status',1)->count();
   $banusers = \App\User::where('status',0)->count();
   $sell = \App\Sell::where('status',1)->sum('amount');
   $icos = \App\Ico::where('status','!=',3)->get();
@endphp

<div class="row">
    <div class="top-right-admin-part">
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-user"></i>
                        <span class="username username-hide-on-mobile">{{Auth::guard('admin')->user()->email}}</span>
                        <i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="{{route('admin.register')}}">
                                <i class="icon-user"></i>Add New Admin </a>
                        </li>
                        <li>
                            <a href="{{route('change.password')}}">
                                <i class="icon-lock"></i>Change Password</a>
                        </li>

                        <li class="divider"> </li>

                        <li>
                            <a href="{{ route('admin.logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>

                <li class="dropdown dropdown-user drop-settings">
                    <a class="drop-link">
                        <i class="icon-settings"></i>
                        <span>Customizer</span>
                    </a>
                    <div class=" drop-settings-inner close-drop">
                        <div>
                            <p class="scheme-title">Color scheme</p>
                            <div class="customize-items">
                                <div class="item-body">
                                    <div class="item">
                                        <img src="{{asset('assets/images/background-scheme/scheme-1.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="item-body">
                                    <div class="item">
                                        <img src="{{asset('assets/images/background-scheme/scheme-2.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="item-body">
                                     <div class="item">
                                         <img src="{{asset('assets/images/background-scheme/scheme-1.jpg') }}" alt="">
                                     </div>
                                </div>
                                <div class="item-body">
                                    <div class="item">
                                        <img src="{{asset('assets/images/background-scheme/scheme-2.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="item-body">
                                    <div class="item">
                                        <img src="{{asset('assets/images/background-scheme/scheme-1.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="item-body">
                                    <div class="item">
                                        <img src="{{asset('assets/images/background-scheme/scheme-2.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-md-12">
        <!-- END TOP NAVIGATION MENU -->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-users"></i> USERS STATISTICS </div>
                </div>
                <div class="portlet-body text-center">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="dashboard-stat blue">
                                <div class="visual">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="{{$totalusers}}">{{$totalusers}}</span>
                                    </div>
                                    <div class="desc"> Total User </div>
                                </div>
                                <a class="more" href="{{route('users')}}"> View more
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                       
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="dashboard-stat red">
                                <div class="visual">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="{{$banusers}}">{{$banusers}}</span>
                                    </div>
                                    <div class="desc"> Banned Users </div>
                                </div>
                                <a class="more" href="{{route('users')}}"> View more
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="dashboard-stat purple">
                                <div class="visual">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="{{$sell}}">{{$sell}}</span>
                                    </div>
                                    <div class="desc"> Total Sell </div>
                                </div>
                                <a class="more" href="{{route('sellLog')}}"> View more
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<div class="row">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-calendar"></i>ICO Calendar</div>
                </div>
 
               <div class="portlet-body text-center">
                        <div class="row">
        @foreach($icos as $ico)
            <div class="col-md-4">
                <div class="panel panel-{{$ico->status == 1? 'success': 'warning'}}">
                        <div class="panel-heading">
                           <h4 class="panel-title">{{$ico->status == 1? 'Runing': 'Upcoming'}} ICO
                           </h4>
                        </div>
                        <div class="panel-body text-center">
                            <ul class="list-group">
                                <li class="list-group-item">Price: <strong>{{$ico->price}} USD</strong></li>
                                <li class="list-group-item">Start At: <strong>{{$ico->start}}</strong></li>
                                <li class="list-group-item">End At: <strong>{{$ico->end}}</strong></li>
                                <li class="list-group-item">Total Quantity: <strong>{{$ico->quant}} {{$gnl->cur}}</strong></li>
                                <li class="list-group-item">Sold: <strong>{{$ico->sold}} {{$gnl->cur}}</strong></li>
                                <div class="sold-li">
                                    <span class="sold-text">{{round(($ico->sold/$ico->quant)*100,2)}}% SOLD</span>
                                    <li class="list-group-item progres-item">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{round(($ico->sold/$ico->quant)*100,2)}}"
                                                 aria-valuemin="0" aria-valuemax="100" style="width:{{round(($ico->sold/$ico->quant)*100,2)}}%">
                                                <span class="progreess-circle"></span>
                                            </div>
                                        </div>
                                    </li>
                                </div>


                            </ul>
                        </div>
                    </div>
            </div>
        @endforeach
                             
        </div>   
                </div>

        </div>
    </div>
</div>

<script>

    $(".customize-items .item img").click(function () {
        var bg_code;

        bg_code = $(this).attr('src');

        $(".page-content-wrapper").css("background",'url('+bg_code+')');
    });

    $( ".page-sidebar-menu" ).after( "<span class='mobile-menu-btn'>&#8251</span>" );


    $(".drop-link").click(function () {
        $(".drop-settings-inner").toggleClass("open-drop");
        $(".drop-settings-inner").toggleClass("close-drop");

        $(".drop-settings").toggleClass("active-cast");



        $(".open-drop").animate({right: 0}, 1000);
        $(".close-drop").animate({right: -350}, 1000);
    });

    $(".mobile-menu-btn").click(function () {
        $(".page-sidebar.navbar-collapse.collapse").toggleClass("open-menu");
        $(".page-sidebar.navbar-collapse.collapse").toggleClass("close-menu");

        $(".open-menu").animate({left: 0}, 1000);
        $(".close-menu").animate({left: -450}, 1000);
    });



</script>

@endsection





