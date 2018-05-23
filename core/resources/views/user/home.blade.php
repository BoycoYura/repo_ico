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
    <div class="col-md-12">
       <div class="main-page-panel">
               <div class="step-half first-step-info">
                    <h2 class="info-header">Welocme  to your account!</h2>
                    <p class="info-text">Here you will be able to deposit funds and purchase Smart Valley Tokens</p>
                    <div class="flex-info">
                        <a class="info-item" href="#">How to buy tokens?</a>
                        <a class="info-item" href="#">Как купить токены?</a>
                    </div>
                </div>

               <div class="step-half second-step-info">
               <p class="step-number">STEP 1</p>
               <h2 class="info-header">Plan your Smart Valley tokens purchase</h2>
               <p class="info-text">You can buy Smart Valley tokens using BTC or ETH.</p>
               <p class="info-text">The calculator is provided for your convenience.
                   You can enter a number of Smart Valley tokens you want to buy and calculate the amount
                   you would need to have in your account wallets.</p>
               <p class="info-text">Please note that the price of the tokens will be calculated at the time
                   of the actual token purchase and not at the time of the funds deposit.</p>
               <div class="flex-buy">
                   <div class="buy-item">
                       <input type="text" placeholder="10" class="input-buy">
                       <p class="under-input" >Smart Valley</p>

                       <div class="buy-foot">
                           <p class="foot-text">0% BONUS:</p>
                           <p class="foot-text">0</p>
                       </div>
                   </div>

                   <div class="buy-line">
                       <span class="glyphicon glyphicon-arrow-right"></span>
                   </div>
                   
                   <div class="buy-item">
                       <input type="text" placeholder="1.00" class="input-buy">
                       {{--<img src="../../../../assets/images/icons/" alt="">--}}
                       <div class="select-body">
                           <select name="" id="">
                               <option value="">USD</option>
                               <option value="">Bitcoin</option>
                               <option value="">Ethereum</option>
                           </select>
                       </div>

                       <div class="buy-foot">
                           <p class="foot-text">TOTAL:</p>
                           <p class="foot-text">10</p>
                       </div>
                   </div>
               </div>
           </div>

               <div class="step-half three-step-info">
                   <p class="step-number">STEP 2</p>
                   <h2 class="info-header">Make a deposit</h2>
                   <p class="info-text">Please enter ETH wallet in your profile. After SVT tokens will be released,
                       they will be sent to this wallet. It is not necessary to deposit ETH from this address.
                       You can send ETH directly from stock exchange wallet to the address indicated below.</p>
                   <p class="info-text">You need to follow the KYC to receive tokens after the end of sales.
                       Please enter your First Name and Last Name and press ‘Submit’ button to start the KYC process.
                       Note, that all fields must be filled in English.
                   </p>

                   <div class="deposit-foot">
                       <input class="deposit-input"  type="text" placeholder="Firstname">
                       <input class="deposit-input" type="text" placeholder="Lastname">
                       <input class="deposit-submit" value="Submit" type="submit">
                   </div>
               </div>

               <div class="step-half four-step-info">
                   <p class="step-number">STEP 3</p>
                   <h2 class="info-header">Buy SVT tokens</h2>
                   <div class="flex-amount">
                       <p class="info-title">Amount:</p>
                       <p class="coin-amount">10</p>
                   </div>

                   <div class="checkbox">
                       <label>
                           <input type="checkbox" value="">
                           I hereby confirm that I have completely read, fully understood and accepted this Token <a
                                   href="">Sale Agreement</a>.
                       </label>
                   </div>

                   <div class="checkbox">
                       <label>
                           <input type="checkbox" value="">
                           I understand that for the purpose of securing of my funds, the payment for SVT tokens will be sent via the independent agent.
                       </label>
                   </div>
               </div>

               <div class="step-half footer-steps">
                   <input class="deposit-submit" value="BUY NOW" type="submit">
               </div>
        </div>
    </div>
</div>
@endsection
