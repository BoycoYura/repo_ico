@extends('layouts.app')

@section('content')
<section class="contact-section contact-bg" id="contact" style="background-image: url({{asset('assets/images/section/bg-login.png')}});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="contact-form-wrapper ">
                    <div class="log-reg-toogle-block">
                        <a href="{{route('register')}}"  class="log-reg-toogle ">Sign up</a>
                        <span class="delimetr"> / </span>
                        <a href="{{route('login')}}"  class="log-reg-toogle login active">Login</a>
                    </div>
                <div class="flex-login-body">
                    <div class="left-login-part">
                        <span class="login-text">We will need...</span>
                        <form  method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="field">
                                        <input id="username" class="login-field" type="text" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus>
                                        <svg class="field-ico" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><circle cx="15.5" cy="9.5" r="1.5"/><circle cx="8.5" cy="9.5" r="1.5"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm0-4c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.7 1.19-1.97 2-3.45 2z"/></svg>
                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="field">
                                        <input id="password" class="login-field" type="password" placeholder="Password" name="password" required>
                                        <svg class="field-ico" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 17c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm6-9h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM8.9 6c0-1.71 1.39-3.1 3.1-3.1s3.1 1.39 3.1 3.1v2H8.9V6zM18 20H6V10h12v10z"/></svg>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="forgot-wrap">
                                        <a class="forgot-link" href="{{route('password.request')}}">Forgot Password?</a>
                                    </div>

                                </div>
                            </div>
                            <div class="field-submit">
                                <input type="submit" value="Log In">
                            </div>

                        </form>
                    </div>

                    <div class="or-line">
                        <div class="or-body">
                            <p class="text">or</p>
                        </div>
                    </div>

                    <div class="right-login-part">
                        <h4 class="social-login-text">Also, you can...</h4>
                        <div class="social-button-block">
                            <button class="button telegram">Telegram <img class="soc-ico" src="{{asset('assets/images/social/telegram-logo.png') }}" alt=""> </button>
                            <button class="button facebook">Facebook <img class="soc-ico" src="{{asset('assets/images/social/facebook-logo.png') }}" alt=""> </button>
                            <button class="button wechat">WeChat <img class="soc-ico" src="{{asset('assets/images/social/wechat-logo.png') }}" alt=""> </button>
                        </div>

                    </div>
                </div>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection
