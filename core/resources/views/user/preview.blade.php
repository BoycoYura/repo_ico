@extends('layouts.user')

@section('content')
<div class="row">
    <div class="top-right-admin-part">
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle drop-link" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <span class="icon-settings-first">
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path d="M9 1C4.58 1 1 4.58 1 9s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm0 2.75c1.24 0 2.25 1.01 2.25 2.25S10.24 8.25 9 8.25 6.75 7.24 6.75 6 7.76 3.75 9 3.75zM9 14.5c-1.86 0-3.49-.92-4.49-2.33C4.62 10.72 7.53 10 9 10c1.47 0 4.38.72 4.49 2.17-1 1.41-2.63 2.33-4.49 2.33z"/></svg>
                        </span>
                        <span class="username username-hide-on-mobile">{{Auth::guard('admin')->user()->email}}</span>
                        <i class="fa fa-angle-down"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-default">
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
                    <a class="drop-link open-link">
                        <span class="icon-settings">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"/></svg>
                        </span>
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
<div class="col-md-8 col-md-offset-2">
  <div class="panel">
    <div class="panel-heading">
      <h4 class="panel-title">Preview of Buying ICO</h4>
    </div>
    <div class="panel-body table-responsive text-center">
       <ul class="list-group">
       		<li class="list-group-item"><span class="fixer">{{$gnl->cur}} Amount:</span> <strong class="fixer-three">{{$amount}}</strong> <span class="fixer-two">{{$gnl->cursym}}</span></li>
       		<li class="list-group-item"><span class="fixer">{{$gnl->cur}} Price:</span> <strong class="fixer-three">{{$ico->price}}</strong><span class="fixer-two"> USD</span></li>
       		@if ($gate->id == 3 || $gate->id == 6 || $gate->id == 7 || $gate->id == 8) 
               <li class="list-group-item"><span class="fixer">Total Payable: </span><strong class="fixer-three">{{$btc}}</strong><span class="fixer-two"> BTC</span></li>
       		<li class="list-group-item"><span class="fixer">Payment Gateway:</span> <strong class="fixer-three">{{$gate->name}}</strong></li>
           @else
               <li class="list-group-item"><span class="fixer">Total Payable:</span> <strong class="fixer-three">{{$usd}}</strong><span class="fixer-two"> USD</span></li>
       		<li class="list-group-item"><span class="fixer">Payment Gateway:</span> <strong class="fixer-three gateway">{{$gate->name}}</strong></li>
       		@endif
       </ul>
   </div>
   <div class="panel-footer">
   	<a class="btn btn-success btn-lg btn-block pay-btn" href="{{route('buy.confirm')}}">
   		Pay Now
   	</a>
   </div>
 </div>
</div> 
</div>
@endsection
