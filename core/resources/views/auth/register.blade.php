@extends('layouts.app')

@section('content')
<section class="contact-section contact-bg" id="contact" style="background-image: url({{asset('assets/images/section/bg-login.png')}});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="contact-form-wrapper ">
                    <div class="log-reg-toogle-block">
                        <a href="{{route('register')}}"  class="log-reg-toogle active">Sign up</a>
                        <span class="delimetr"> / </span>
                        <a href="{{route('login')}}"  class="log-reg-toogle login ">Login</a>
                    </div>
                    <div class="flex-login-body">
                        <div class="left-login-part">
                            <span class="login-text">We will need...</span>
                            <form method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                @if(isset($reference))
                                    <input type="hidden" name="refer" value="{{$reference}}">
                                @endif
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="field">
                                            <input id="name" class="login-field" type="text" placeholder="Full name" name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                            @endif
                                        </div>

                                        <div class="field">
                                            <input id="email" class="login-field" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>

                                        <div class="field">
                                            <input id="username" class="login-field" type="text" placeholder="Your Address" name="username" value="{{ old('username') }}" required>

                                            @if ($errors->has('username'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                            @endif
                                        </div>

                                        <div class="field">
                                            <input id="mobile" class="login-field" type="text" placeholder="ETH Wallet" name="mobile" value="{{ old('mobile') }}" required>

                                            @if($errors->has('mobile'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                            @endif
                                        </div>

                                        <div class="field">
                                                <input type="file" name="file-7[]" id="file-7" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
                                                <label for="file-7"><span></span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Choose a file&hellip;</strong></label>
                                        </div>

                                        <div class="field">

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                    I accept <a href="" class="terms-link">the terms</a> and conditions and grant the right to process personal data without their distribution
                                                </label>
                                            </div>
                                        </div>

                                        {{--<div class="field">--}}
                                            {{--<input id="password" class="login-field" type="password" placeholder="Password" name="password" required>--}}

                                            {{--@if ($errors->has('password'))--}}
                                                {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                            {{--@endif--}}
                                        {{--</div>--}}

                                        {{--<div class="field">--}}
                                            {{--<input id="password-confirm" class="login-field" type="password" placeholder="Confirm Password" name="password_confirmation" required>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                                <div class="field-submit">
                                    <input type="submit" value="Register">
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
