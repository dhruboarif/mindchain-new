@extends('user.layouts.master')


@section('user_content')
    @php
        $withdraw_icon = '<svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.25391 5.83572C9.39844 5.76932 9.52734 5.6326 9.58203 5.48807C9.60938 5.41775 9.625 4.84744 9.625 3.8865L9.625 2.39822L10.1016 2.87088C10.6172 3.37869 10.7109 3.42947 11.0195 3.37088C11.2109 3.33572 11.4453 3.10135 11.4805 2.90994C11.5469 2.56619 11.543 2.55838 10.375 1.39041C9.20703 0.222442 9.20313 0.218536 8.85156 0.284942C8.72656 0.304473 8.55859 0.456817 7.625 1.39041C6.45703 2.55838 6.45313 2.56619 6.51953 2.90994C6.55469 3.10135 6.78906 3.33572 6.98047 3.37088C7.28906 3.42947 7.38281 3.37869 7.89453 2.87088L8.37109 2.40213L8.38281 3.949C8.39453 5.44119 8.39844 5.49979 8.47656 5.60135C8.51953 5.65994 8.60156 5.74588 8.65625 5.78494C8.78906 5.8826 9.09766 5.90994 9.25391 5.83572Z"
                                                        fill="white" />
                                                    <path
                                                        d="M1.66016 7.1875C1 7.36328 0.484376 7.89063 0.308594 8.55859C0.218751 8.89844 0.222657 15.9805 0.308594 16.3242C0.484376 16.9961 1.00781 17.5156 1.68359 17.6914C2.01953 17.7812 15.9805 17.7812 16.3164 17.6914C16.9922 17.5156 17.5156 16.9961 17.6914 16.3242C17.7812 15.9766 17.7812 8.89844 17.6914 8.55078C17.5156 7.87891 16.9922 7.35938 16.3164 7.18359C15.9844 7.09766 1.98438 7.10156 1.66016 7.1875ZM16.2109 8.47656C16.2695 8.51953 16.3555 8.60547 16.3984 8.66406C16.4805 8.76953 16.4805 8.79688 16.4805 12.4336V16.0977L16.3672 16.2422C16.1562 16.5195 16.7383 16.5 8.94531 16.4922L1.89453 16.4805L1.78906 16.3984C1.73047 16.3555 1.64453 16.2695 1.60156 16.2109C1.51953 16.1055 1.51953 16.0703 1.50781 12.543C1.50391 10.582 1.50781 8.92578 1.51953 8.85547C1.54688 8.69922 1.71094 8.5 1.87109 8.42969C1.96875 8.38672 3.23828 8.37891 9.04688 8.38672L16.1055 8.39453L16.2109 8.47656Z"
                                                        fill="white" />
                                                    <path
                                                        d="M13.3941 10.1537C12.9842 10.6963 12.8701 12.3116 13.1659 13.3211C13.3434 13.9142 13.5209 14.0404 14.0999 13.9899C14.5182 13.9647 14.6112 13.9142 14.7084 13.6871C14.9324 13.1949 15 12.7911 15 11.9961C15 11.2011 14.9324 10.7973 14.7084 10.3052C14.607 10.078 14.5225 10.0402 14.0576 10.0023C13.673 9.98968 13.4829 10.0275 13.3941 10.1537Z"
                                                        fill="white" />
                                                    <path
                                                        d="M8.55078 10.2969C7.94922 10.4102 7.32422 10.8984 7.04297 11.4844C6.62891 12.3359 6.79297 13.3047 7.46094 13.9766C8.32031 14.832 9.67969 14.832 10.5391 13.9766C11.3945 13.1172 11.3945 11.7578 10.5391 10.8984C10.0156 10.375 9.29297 10.1562 8.55078 10.2969ZM9.28906 11.5469C9.50391 11.6094 9.82813 11.9336 9.89063 12.1484C10 12.5156 9.92188 12.8086 9.64453 13.082C9.25 13.4805 8.75 13.4805 8.35547 13.082C7.95703 12.6875 7.95703 12.1875 8.35547 11.793C8.62891 11.5156 8.92188 11.4414 9.28906 11.5469Z"
                                                        fill="white" />
                                                    <path
                                                        d="M3.39351 11.1537C2.98423 11.6963 2.87031 13.3116 3.16566 14.3211C3.34287 14.9142 3.52009 15.0404 4.09813 14.9899C4.62976 14.9521 4.71837 14.8511 4.90824 14.0813C5.0306 13.5892 5.0306 12.403 4.90824 11.9109C4.71415 11.1285 4.63398 11.0402 4.05594 11.0023C3.67198 10.9897 3.48211 11.0275 3.39351 11.1537Z"
                                                        fill="white" />
                                                </svg>';
    @endphp
    <!-- mobile screen mind live price section start
              ============================================ -->
    <div class="mind-live-price text-center">
        <div class="row">
            <div class="col-sm-3">
                <div class="mind-sec text-center" id="mind-sec">
                    <div class="mindp text-white text-center">MIND:</div>
                    <div class="pricemind text-white m-flex">
                        <p class="priceValue"></p> <span class="changeValue"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- mobile screen mind price section end
                        ============================================ -->
    @php
        $token_rate = App\Models\TokenRate::first();

    @endphp
    <div class="section-admin container-fluid">
        <div class="row admin text-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-12">
                          <div class="row align-items-center mb-4">
                             <div class="col-xl-9 d-none d-md-block">
                                <div class="card mb-xl-0">

                                  @if(Session::has('token_sell'))
                                  <div class="alert alert-success d-flex align-items-center" role="alert">
                                  <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                                  <use xlink:href="#check-circle-fill" />
                                  </svg>
                                  <div>
                                  {{Session::get('token_sell')}}
                                  </div>
                                  </div>
                                  @elseif(Session::has('Money_added'))
                                  <div class="alert alert-success d-flex align-items-center" role="alert">
                                  <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                                  <use xlink:href="#check-circle-fill" />
                                  </svg>
                                  <div>
                                  {{Session::get('Money_added')}}
                                  </div>
                                  </div>
                                  @elseif(Session::has('token_buy'))
                                  <div class="alert alert-success d-flex align-items-center" role="alert">
                                  <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                                  <use xlink:href="#check-circle-fill" />
                                  </svg>
                                  <div>
                                  {{Session::get('token_buy')}}
                                  </div>
                                  </div>
                                  @elseif(Session::has('token_sell_error'))
                                  <div class="alert alert-danger d-flex align-items-center" role="alert">
                                  <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                                  <use xlink:href="#check-circle-fill" />
                                  </svg>
                                  <div>
                                  {{Session::get('token_sell_error')}}
                                  </div>
                                  </div>
                                  @elseif(Session::has('balance_error'))
                                  <div class="alert alert-danger d-flex align-items-center" role="alert">
                                  <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                                  <use xlink:href="#check-circle-fill" />
                                  </svg>
                                  <div>
                                  {{Session::get('balance_error')}}
                                  </div>
                                  </div>
                                   @elseif(Session::has('withdraw_added'))
                                     <div class="alert alert-success d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                              <use xlink:href="#check-circle-fill" />
                          </svg>
                          <div>
                              {{Session::get('withdraw_added')}}
                          </div>
                      </div>
                               @elseif(Session::has('withdraw_error'))
                                  <div class="alert alert-danger d-flex align-items-center" role="alert">
                               <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                               <use xlink:href="#check-circle-fill" />
                               </svg>
                               <div>
                               {{Session::get('withdraw_error')}}
                               </div>
                               </div>
                                  @endif


                                </div>
                             </div>

                          </div>
                    </div>
                 </div>
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div
                            class="admin-content analysis-progrebar-ctn res-mg-t-15 d-flex row justify-content-between mind-wp">
                            <!-- body profile section
              ============================================ -->
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 text-left profile-dbsec">
                                <div class="profile-section text-left">
                                    <div class="dp-img">
                                        <img class="img-fluid" src="{{ asset('assetsnew/img/img-icon/profile-icon.jpg') }}"
                                            alt="" height="80px" width="80px">
                                    </div>
                                    <div class="profile-details">
                                        <h4>{{ Auth::user()->user_name }}</h4>
                                        <p class="kyc-cont">KYC <span class="text-red">Unverified</span> </p>
                                    </div>
                                    <div class=" rank-ico">
                                        <img class="" src="{{ asset('assetsnew/img/img-icon/ambassador.png') }}"
                                            alt="">
                                    </div>
                                    <div class="rank-ico">
                                        <img class="" src="{{ asset('assetsnew/img/img-icon/CONSULTANT-01.png') }}"
                                            alt="">
                                    </div>
                                    <div class=" rank-ico">
                                        <img class="" src="{{ asset('assetsnew/img/img-icon/elite.png') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="copy-container prof-url">
                                    <p class="cp-url">Invite: <span class="invt text-lowercase" id="urlText">
                                        https://user.mi....m/register?ref={{ Auth::user()->user_name }}</span></p>
                                    <button class="copy-button" onclick="copyURL()">
                                        <i class="fa-solid fa-copy copy-icon"></i>
                                        <i class="fa-solid fa-clipboard clipboard-icon text-warning"></i>
                                    </button>
                                </div>
                                <input type="text" id="hiddenInput" class="hidden-input"
                                    value="{{ Auth::user()->referral_link }}">

                            </div>
                            <!-- mind wallet section start
              ============================================ -->
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 mind-wallet">
                                <div class="wallet-amount">
                                    <div class="mnd-walet">
                                        <h5 id="mind_balance" class="text-left text-uppercase wlt-amount">
                                            {{ $data['sum_deposit_bonus'] ? number_format((float) $data['sum_deposit_bonus'], 2, '.', '') : '00.00' }}
                                        </h5>
                                        <h2 class="text-left text-capitalize wlt-name">MIND</h2>
                                    </div>
                                    <p class="text-left text-uppercase"><span>Total Portfolio</span> :
                                        ${{ round($data['sum_deposit_bonus'] * $token_rate->token_convert_rate, 2) }}</p>
                                    <div class="button-section text-left">
                                        <!-- mind deposit button
              ============================================ -->
                                        <div class="wallet-btn">
                                            <button type="button" data-toggle="modal" data-target="#mindDeposit"
                                                data-whatever="" class="btn btn-sm deposit text-capitalize"><svg
                                                    width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.74609 0.304658C8.60156 0.371064 8.47266 0.507783 8.41797 0.652314C8.39062 0.722627 8.375 1.29294 8.375 2.25388V3.74216L7.89844 3.2695C7.38281 2.76169 7.28906 2.71091 6.98047 2.7695C6.78906 2.80466 6.55469 3.03903 6.51953 3.23044C6.45312 3.57419 6.45703 3.582 7.625 4.74997C8.79297 5.91794 8.79687 5.92185 9.14844 5.85544C9.27344 5.83591 9.44141 5.68356 10.375 4.74997C11.543 3.582 11.5469 3.57419 11.4805 3.23044C11.4453 3.03903 11.2109 2.80466 11.0195 2.7695C10.7109 2.71091 10.6172 2.76169 10.1055 3.2695L9.62891 3.73825L9.61719 2.19138C9.60547 0.699189 9.60156 0.640595 9.52344 0.539033C9.48047 0.480439 9.39844 0.394502 9.34375 0.355439C9.21094 0.257783 8.90234 0.230439 8.74609 0.304658Z"
                                                        fill="white" />
                                                    <path
                                                        d="M1.66016 7.1875C1 7.36328 0.484376 7.89063 0.308594 8.55859C0.218751 8.89844 0.222657 15.9805 0.308594 16.3242C0.484376 16.9961 1.00781 17.5156 1.68359 17.6914C2.01953 17.7812 15.9805 17.7812 16.3164 17.6914C16.9922 17.5156 17.5156 16.9961 17.6914 16.3242C17.7812 15.9766 17.7812 8.89844 17.6914 8.55078C17.5156 7.87891 16.9922 7.35938 16.3164 7.18359C15.9844 7.09766 1.98438 7.10156 1.66016 7.1875ZM16.2109 8.47656C16.2695 8.51953 16.3555 8.60547 16.3984 8.66406C16.4805 8.76953 16.4805 8.79688 16.4805 12.4336V16.0977L16.3672 16.2422C16.1562 16.5195 16.7383 16.5 8.94531 16.4922L1.89453 16.4805L1.78906 16.3984C1.73047 16.3555 1.64453 16.2695 1.60156 16.2109C1.51953 16.1055 1.51953 16.0703 1.50781 12.543C1.50391 10.582 1.50781 8.92578 1.51953 8.85547C1.54688 8.69922 1.71094 8.5 1.87109 8.42969C1.96875 8.38672 3.23828 8.37891 9.04688 8.38672L16.1055 8.39453L16.2109 8.47656Z"
                                                        fill="white" />
                                                    <path
                                                        d="M13.7461 9.67974C13.3672 9.84771 13.2617 10.3477 13.5352 10.6602C13.6992 10.8438 13.8633 10.8829 14.3984 10.8672C14.7852 10.8594 14.8711 10.8438 14.9609 10.7735C15.168 10.6211 15.2305 10.4961 15.2305 10.2501C15.2305 10.004 15.168 9.87896 14.9609 9.72661C14.8672 9.6563 14.7891 9.64458 14.3594 9.63286C14.0039 9.62896 13.8281 9.64067 13.7461 9.67974Z"
                                                        fill="white" />
                                                    <path
                                                        d="M8.55078 10.2969C7.94922 10.4102 7.32422 10.8984 7.04297 11.4844C6.62891 12.3359 6.79297 13.3047 7.46094 13.9766C8.32031 14.832 9.67969 14.832 10.5391 13.9766C11.3945 13.1172 11.3945 11.7578 10.5391 10.8984C10.0156 10.375 9.29297 10.1562 8.55078 10.2969ZM9.28906 11.5469C9.50391 11.6094 9.82813 11.9336 9.89063 12.1484C10 12.5156 9.92188 12.8086 9.64453 13.082C9.25 13.4805 8.75 13.4805 8.35547 13.082C7.95703 12.6875 7.95703 12.1875 8.35547 11.793C8.62891 11.5156 8.92188 11.4414 9.28906 11.5469Z"
                                                        fill="white" />
                                                    <path
                                                        d="M3.12109 14.0547C2.74219 14.2227 2.63672 14.7227 2.91016 15.0352C3.07422 15.2188 3.23828 15.2579 3.77344 15.2422C4.26562 15.2305 4.34765 15.1993 4.52344 14.961C4.63672 14.8086 4.63672 14.4415 4.52344 14.2891C4.34375 14.0469 4.26953 14.0196 3.73437 14.0079C3.3789 14.004 3.20312 14.0157 3.12109 14.0547Z"
                                                        fill="white" />
                                                </svg>
                                                <span>deposit</span></button>

                                            @include('user.modals.depositmind')

                                        </div>


                                        <div class="wallet-btn">
                                            <a href="/home/withdraw-bonus/{{ Auth::user()->id }}"><button type="button"
                                                    class="btn btn-sm withdraw text-capitalize">{!! $withdraw_icon !!}<span>Withdraw</span></button></a>
                                        </div>
                                        <!--  Mind withdraw button end
              ============================================ -->

                                    </div>
                                </div>
                            </div>
                        </div>

                        @include('user.layouts.mobilemenu')


                        <!-- MUSD USDT BMIND Wallet section start
              ============================================ -->
                        <div class="oth-wallet">
                            <div
                                class="admin-content analysis-progrebar-ctn res-mg-t-15 d-flex row justify-content-between mind-ot">
                                <!-- MUSD Wallet
                        ============================================ -->
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ot-wallet ot-wall1">
                                    <div class="wallet-amount">
                                        <div class="mind-sub-wallet">
                                            <div class="text-left text-uppercase wlt-amount">
                                                {{ $data['sum_deposit'] ? '$' . number_format((float) $data['sum_deposit'], 2, '.', '') : '$00.00' }}
                                            </div>
                                            <div class="musd">MUSD</div>
                                        </div>
                                        <p id="musd_balance" class="text-left text-uppercase"><span>Total Portfolio</span>
                                            :
                                            ${{ round($data['sum_deposit_staking'] * $token_rate->token_convert_rate + $data['sum_deposit_token'] * $token_rate->token_convert_rate + $data['sum_deposit_bonus'] * $token_rate->token_convert_rate + $data['sum_deposit'], 2) }}
                                        </p>
                                        <div class="button-section text-left">
                                            <button type="button" data-toggle="modal" data-target="#addfund2"
                                                data-whatever="" class="btn btn-sm deposit text-capitalize">
                                                <span>deposit</span></button>
                                            @include('user.modals.addfundmodal2')

                                            <a href="/home/withdraw/{{ Auth::user()->id }}"><button type="button"
                                                    class="btn btn-sm withdraw text-capitalize"><span>Withdraw</span></button></a>

                                        </div>
                                        <div class="coin-img">
                                            <img src="{{ asset('assetsnew/img/img-icon/musd-icon.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Musd wallet end
                        ============================================ -->

                                <!-- BMIND wallet
                        ============================================ -->
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ot-wallet">
                                    <div class="wallet-amount">
                                        <div class="mind-sub-wallet">
                                            <div class="text-left text-uppercase wlt-amount">
                                                {{ $data['sum_bmindwallet'] ? number_format((float) $data['sum_bmindwallet'], 2, '.', '') : '00.00' }}
                                            </div>
                                            <div class="bmind">BMIND</div>
                                        </div>
                                        <p class="text-left text-uppercase"><span>Total Portfolio</span> :
                                            ${{ round($data['sum_bmindwallet'] * 0.03, 2) }}</p>
                                        <div class="button-section text-left">
                                            <button type="button" data-toggle="modal" data-target="#bmindDeposit"
                                                data-whatever="" class="btn btn-sm deposit text-capitalize">
                                                <span>deposit</span></button>

                                            <a href="/home/buy-bmind/{{ Auth::user()->id }}">
                                                <button type="button" class="btn btn-sm stake text-capitalize">
                                                    <span>Stake</span></button>
                                            </a>

                                        </div>
                                        <div class="coin-img">
                                            <img src="{{ asset('assetsnew/img/img-icon/bmind-icon-1.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div><!-- BMIND wallet End
                                                    ============================================ -->

                                <!-- USDT Wallet
                        ============================================ -->
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ot-wallet ot-wall2">
                                    <div class="wallet-amount">
                                        <div class="mind-sub-wallet">
                                            <div id="usd_balance" class="text-left text-uppercase wlt-amount">
                                                {{ $data['sum_usdwallet'] ? number_format((float) $data['sum_usdwallet'], 2, '.', '') : '00.00' }}
                                            </div>
                                            <div class="usdt">USDT</div>
                                        </div>
                                        <p class="text-left text-uppercase"><span>Total Portfolio</span> :
                                            ${{ round($data['sum_usdwallet'] * 1.01, 2) }}</p>
                                        <div class="button-section text-left">
                                            <button type="button" data-toggle="modal" data-target="#depositusd"
                                                data-whatever="" class="btn btn-sm deposit text-capitalize">
                                                <span>deposit</span></button>
                                            @include('user.modals.depositusdt')

                                            <a href="/home/send-usdt/{{ Auth::user()->id }}">
                                                <button type="button" class="btn btn-sm stake text-capitalize">
                                                    <span>Transfer</span></button>
                                            </a>
                                        </div>
                                        <div class="coin-img">
                                            <img src="{{ asset('assetsnew/img/img-icon/usdt.png') }}" alt="">
                                        </div>
                                    </div>
                                </div><!-- USDT wallet end
                                                    ============================================ -->

                            </div>
                        </div><!-- MUSD USDT BMIND Wallet section END
                                            ============================================ -->

                        <!-- Staking Wallet Section Start
              ============================================ -->
                        <div class="staking-wallet">
                            <div class="static-table-area mg-t-15">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="sparkline8-list">
                                                <div class="sparkline8-hd">
                                                    <div class="main-sparkline8-hd">
                                                        <h1 class="text-capitalize st-wallet-hed text-left">staking Wallet
                                                        </h1>
                                                    </div>
                                                </div>
                                                <div class="row st-wallet-list">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 st-wallet-titel no-bg">
                                                        <div class="row d-flex justify-content-between">
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st">
                                                                    <p class="text-capitalize text-left">Wallet name</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st">
                                                                    <p class="text-capitalize text-left">Available Balance
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st">
                                                                    <p class="text-capitalize text-left">USDT balance</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st">
                                                                    <p class="text-capitalize text-left">Locked </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st">
                                                                    <p class="text-capitalize text-center">Action</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 st-wallet-titel">
                                                        <div class="row d-flex justify-content-between">
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-single-name d-flex st-com">
                                                                    <img src="{{ asset('assetsnew/img/img-icon/mind.png') }}"
                                                                        alt="">
                                                                    <p class="text-uppercase text-left">mind</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-bal st-com">
                                                                    <p id="mind_balance_display"
                                                                        class="text-capitalize text-left">
                                                                        {{ $data['sum_deposit_bonus'] ? number_format((float) $data['sum_deposit_bonus'], 2, '.', '') : '00.00' }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-usdt-bal st-com">
                                                                    <p class="text-capitalize text-left">
                                                                        ${{ round($data['sum_deposit_bonus'] * $token_rate->token_convert_rate, 2) }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-locked st-com">
                                                                    <p class="text-capitalize text-left">62251 </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-action st-com">
                                                                    <button data-toggle="modal" data-target="#mindStake"
                                                                        data-whatever=""
                                                                        class="text-capitalize text-center text-white"><svg
                                                                            width="18" height="18"
                                                                            viewBox="0 0 20 20" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M9.14062 0.804688C7.37891 1.01562 5.97656 1.53516 4.70703 2.44141C2.71875 3.86328 1.40625 5.87891 0.941406 8.22266C0.691406 9.50781 0.738281 11.0703 1.07422 12.3516C1.74219 14.9102 3.46484 17.0234 5.89844 18.2656L6.26953 18.457L3.62109 18.4766L0.96875 18.4961L0.875 18.6055C0.75 18.75 0.75 18.9453 0.875 19.0898L0.96875 19.1992L5.48438 19.2188C7.96875 19.2305 12.0312 19.2305 14.5156 19.2188L19.0312 19.1992L19.125 19.0898C19.25 18.9453 19.25 18.75 19.125 18.6055L19.0312 18.4961L16.3789 18.4766L13.7305 18.457L14.1797 18.2305C15.8594 17.375 17.2461 16.0117 18.1406 14.3438C18.6406 13.4023 18.9453 12.4922 19.1289 11.3867C19.2305 10.7773 19.2305 9.22266 19.1289 8.61328C18.7969 6.59375 17.9258 4.88281 16.5156 3.47266C15.1172 2.07422 13.3945 1.19531 11.4141 0.875C11.0508 0.816406 9.45703 0.765625 9.14062 0.804688ZM11.1523 1.625C12.0703 1.75 12.8672 1.99609 13.7305 2.42188C15.4297 3.25781 16.7422 4.57031 17.5781 6.26953C18.1836 7.5 18.4453 8.62109 18.4453 10C18.4453 11.3828 18.1836 12.5117 17.5781 13.7305C16.7344 15.4414 15.4297 16.7422 13.7305 17.5781C12.4922 18.1875 11.4102 18.4375 10 18.4375C8.58984 18.4375 7.51172 18.1875 6.26953 17.5781C4.57031 16.7422 3.25391 15.4258 2.42188 13.7305C1.81641 12.5 1.55469 11.3789 1.55469 10C1.55469 8.62109 1.81641 7.5 2.42188 6.26953C3.25391 4.57422 4.57031 3.25781 6.26953 2.42188C7.82422 1.65625 9.44141 1.39453 11.1523 1.625Z"
                                                                                fill="white" />
                                                                            <path
                                                                                d="M9.16013 2.74226C7.41794 2.93758 5.68747 3.84383 4.52732 5.16805C3.17185 6.71492 2.5195 8.7618 2.73825 10.7735C3.207 15.1095 7.33591 18.0665 11.5976 17.1251C13.0703 16.797 14.4609 15.9766 15.4609 14.8438C17.0234 13.0704 17.6367 10.7071 17.125 8.40242C16.3828 5.05867 13.3593 2.66414 9.93357 2.6993C9.67966 2.7032 9.332 2.72273 9.16013 2.74226ZM11.3086 3.59383C13.8984 4.14851 15.8437 6.10555 16.414 8.72273C16.4883 9.07039 16.5 9.23836 16.5 10.0001C16.5 10.7618 16.4883 10.9298 16.414 11.2774C16.2187 12.1759 15.8242 13.0821 15.3242 13.7891C14.9843 14.2657 14.2656 14.9845 13.789 15.3243C13.082 15.8243 12.1758 16.2188 11.2773 16.4141C10.9297 16.4884 10.7617 16.5001 9.99997 16.5001C9.24216 16.5001 9.06638 16.4884 8.72654 16.4141C8.12107 16.2813 7.6445 16.1134 7.08982 15.8399C5.2695 14.9298 4.03122 13.3165 3.58591 11.2774C3.51169 10.9298 3.49997 10.7618 3.49997 10.0001C3.49997 9.23836 3.51169 9.07039 3.58591 8.72273C4.18357 5.98055 6.27732 3.98055 9.00779 3.53523C9.53122 3.4493 10.7929 3.48055 11.3086 3.59383Z"
                                                                                fill="white" />
                                                                            <path
                                                                                d="M9.875 5.59756C9.6836 5.67959 6.9961 7.71084 6.95313 7.80459C6.83204 8.07022 6.91016 8.17959 7.55079 8.65225C7.78125 8.82412 7.96875 8.97256 7.96875 8.98818C7.96875 9.00381 7.75 9.17959 7.48438 9.37881C6.71485 9.95303 6.71485 10.0468 7.48438 10.621C7.75 10.8202 7.96875 10.996 7.96875 11.0116C7.96875 11.0272 7.75 11.203 7.48047 11.4022C7.21094 11.6015 6.97266 11.8007 6.95313 11.8397C6.90235 11.9296 6.90235 12.0819 6.95313 12.1952C7 12.2929 9.69532 14.3241 9.88672 14.4062C9.99219 14.4491 10.0273 14.4491 10.1523 14.3866C10.3945 14.2655 13 12.2968 13.043 12.1991C13.1602 11.9452 13.0664 11.8085 12.5039 11.3866C12.2422 11.1952 12.0313 11.0272 12.0313 11.0116C12.0313 10.996 12.25 10.8202 12.5156 10.621C13.2852 10.0468 13.2852 9.95303 12.5156 9.37881C12.25 9.17959 12.0313 9.00381 12.0313 8.98818C12.0313 8.97256 12.2422 8.80459 12.5039 8.61318C13.0664 8.19131 13.1602 8.05459 13.043 7.80068C13.0078 7.72647 10.5781 5.871 10.2344 5.65615C10.0859 5.5624 9.99219 5.54678 9.875 5.59756ZM11.0195 7.19131C11.5664 7.59756 12.0156 7.94912 12.0234 7.96475C12.0352 7.9999 10.0586 9.49209 10 9.49209C9.94141 9.49209 7.96485 7.9999 7.97657 7.96475C7.99219 7.92568 9.96485 6.44522 10 6.44522C10.0156 6.44522 10.4727 6.78115 11.0195 7.19131ZM9.25391 9.91787C9.56641 10.1522 9.86719 10.3554 9.92188 10.371C10.0742 10.4062 10.168 10.3554 10.7773 9.90225C11.0859 9.67178 11.3594 9.496 11.3906 9.50772C11.4766 9.53897 12.0313 9.96865 12.0313 9.9999C12.0313 10.0312 10.1016 11.4765 10.0195 11.5077C9.96875 11.5272 7.98829 10.0546 7.98829 9.996C7.98829 9.95303 8.58985 9.496 8.64844 9.49209C8.66797 9.49209 8.94141 9.6835 9.25391 9.91787ZM10 12.4022C10.125 12.4022 10.2305 12.3358 10.75 11.9452L11.3516 11.4921L11.6836 11.7421C11.8633 11.8749 12.0117 12.0038 12.0117 12.0272C12.0117 12.0663 10.0508 13.5546 10 13.5546C9.94922 13.5546 7.98829 12.0663 7.98829 12.0272C7.98829 12.0038 8.13672 11.8749 8.31641 11.7421L8.64844 11.4921L9.25 11.9452C9.76954 12.3358 9.875 12.4022 10 12.4022Z"
                                                                                fill="white" />
                                                                        </svg>
                                                                        Buy</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 st-wallet-titel">
                                                        <div class="row d-flex justify-content-between">
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-single-name d-flex st-com">
                                                                    <img src="{{ asset('assetsnew/img/img-icon/musd-icon.png') }}"
                                                                        alt="">
                                                                    <p class="text-uppercase text-left">MUSD</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-bal st-com">
                                                                    <p class="text-capitalize text-left">
                                                                        {{ $data['sum_deposit'] ? '$' . number_format((float) $data['sum_deposit'], 2, '.', '') : '$00.00' }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-usdt-bal st-com">
                                                                    <p class="text-capitalize text-left">
                                                                        ${{ round($data['sum_deposit_staking'] * $token_rate->token_convert_rate + $data['sum_deposit_token'] * $token_rate->token_convert_rate + $data['sum_deposit_bonus'] * $token_rate->token_convert_rate + $data['sum_deposit'], 2) }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-locked st-com">
                                                                    <p class="text-capitalize text-left">62251 </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-action st-com">
                                                                    <button data-toggle="modal" data-target="#musdStake"
                                                                        data-whatever=""
                                                                        class="text-capitalize text-center text-white"><svg
                                                                            width="18" height="18"
                                                                            viewBox="0 0 20 20" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M9.14062 0.804688C7.37891 1.01562 5.97656 1.53516 4.70703 2.44141C2.71875 3.86328 1.40625 5.87891 0.941406 8.22266C0.691406 9.50781 0.738281 11.0703 1.07422 12.3516C1.74219 14.9102 3.46484 17.0234 5.89844 18.2656L6.26953 18.457L3.62109 18.4766L0.96875 18.4961L0.875 18.6055C0.75 18.75 0.75 18.9453 0.875 19.0898L0.96875 19.1992L5.48438 19.2188C7.96875 19.2305 12.0312 19.2305 14.5156 19.2188L19.0312 19.1992L19.125 19.0898C19.25 18.9453 19.25 18.75 19.125 18.6055L19.0312 18.4961L16.3789 18.4766L13.7305 18.457L14.1797 18.2305C15.8594 17.375 17.2461 16.0117 18.1406 14.3438C18.6406 13.4023 18.9453 12.4922 19.1289 11.3867C19.2305 10.7773 19.2305 9.22266 19.1289 8.61328C18.7969 6.59375 17.9258 4.88281 16.5156 3.47266C15.1172 2.07422 13.3945 1.19531 11.4141 0.875C11.0508 0.816406 9.45703 0.765625 9.14062 0.804688ZM11.1523 1.625C12.0703 1.75 12.8672 1.99609 13.7305 2.42188C15.4297 3.25781 16.7422 4.57031 17.5781 6.26953C18.1836 7.5 18.4453 8.62109 18.4453 10C18.4453 11.3828 18.1836 12.5117 17.5781 13.7305C16.7344 15.4414 15.4297 16.7422 13.7305 17.5781C12.4922 18.1875 11.4102 18.4375 10 18.4375C8.58984 18.4375 7.51172 18.1875 6.26953 17.5781C4.57031 16.7422 3.25391 15.4258 2.42188 13.7305C1.81641 12.5 1.55469 11.3789 1.55469 10C1.55469 8.62109 1.81641 7.5 2.42188 6.26953C3.25391 4.57422 4.57031 3.25781 6.26953 2.42188C7.82422 1.65625 9.44141 1.39453 11.1523 1.625Z"
                                                                                fill="white" />
                                                                            <path
                                                                                d="M9.16013 2.74226C7.41794 2.93758 5.68747 3.84383 4.52732 5.16805C3.17185 6.71492 2.5195 8.7618 2.73825 10.7735C3.207 15.1095 7.33591 18.0665 11.5976 17.1251C13.0703 16.797 14.4609 15.9766 15.4609 14.8438C17.0234 13.0704 17.6367 10.7071 17.125 8.40242C16.3828 5.05867 13.3593 2.66414 9.93357 2.6993C9.67966 2.7032 9.332 2.72273 9.16013 2.74226ZM11.3086 3.59383C13.8984 4.14851 15.8437 6.10555 16.414 8.72273C16.4883 9.07039 16.5 9.23836 16.5 10.0001C16.5 10.7618 16.4883 10.9298 16.414 11.2774C16.2187 12.1759 15.8242 13.0821 15.3242 13.7891C14.9843 14.2657 14.2656 14.9845 13.789 15.3243C13.082 15.8243 12.1758 16.2188 11.2773 16.4141C10.9297 16.4884 10.7617 16.5001 9.99997 16.5001C9.24216 16.5001 9.06638 16.4884 8.72654 16.4141C8.12107 16.2813 7.6445 16.1134 7.08982 15.8399C5.2695 14.9298 4.03122 13.3165 3.58591 11.2774C3.51169 10.9298 3.49997 10.7618 3.49997 10.0001C3.49997 9.23836 3.51169 9.07039 3.58591 8.72273C4.18357 5.98055 6.27732 3.98055 9.00779 3.53523C9.53122 3.4493 10.7929 3.48055 11.3086 3.59383Z"
                                                                                fill="white" />
                                                                            <path
                                                                                d="M9.875 5.59756C9.6836 5.67959 6.9961 7.71084 6.95313 7.80459C6.83204 8.07022 6.91016 8.17959 7.55079 8.65225C7.78125 8.82412 7.96875 8.97256 7.96875 8.98818C7.96875 9.00381 7.75 9.17959 7.48438 9.37881C6.71485 9.95303 6.71485 10.0468 7.48438 10.621C7.75 10.8202 7.96875 10.996 7.96875 11.0116C7.96875 11.0272 7.75 11.203 7.48047 11.4022C7.21094 11.6015 6.97266 11.8007 6.95313 11.8397C6.90235 11.9296 6.90235 12.0819 6.95313 12.1952C7 12.2929 9.69532 14.3241 9.88672 14.4062C9.99219 14.4491 10.0273 14.4491 10.1523 14.3866C10.3945 14.2655 13 12.2968 13.043 12.1991C13.1602 11.9452 13.0664 11.8085 12.5039 11.3866C12.2422 11.1952 12.0313 11.0272 12.0313 11.0116C12.0313 10.996 12.25 10.8202 12.5156 10.621C13.2852 10.0468 13.2852 9.95303 12.5156 9.37881C12.25 9.17959 12.0313 9.00381 12.0313 8.98818C12.0313 8.97256 12.2422 8.80459 12.5039 8.61318C13.0664 8.19131 13.1602 8.05459 13.043 7.80068C13.0078 7.72647 10.5781 5.871 10.2344 5.65615C10.0859 5.5624 9.99219 5.54678 9.875 5.59756ZM11.0195 7.19131C11.5664 7.59756 12.0156 7.94912 12.0234 7.96475C12.0352 7.9999 10.0586 9.49209 10 9.49209C9.94141 9.49209 7.96485 7.9999 7.97657 7.96475C7.99219 7.92568 9.96485 6.44522 10 6.44522C10.0156 6.44522 10.4727 6.78115 11.0195 7.19131ZM9.25391 9.91787C9.56641 10.1522 9.86719 10.3554 9.92188 10.371C10.0742 10.4062 10.168 10.3554 10.7773 9.90225C11.0859 9.67178 11.3594 9.496 11.3906 9.50772C11.4766 9.53897 12.0313 9.96865 12.0313 9.9999C12.0313 10.0312 10.1016 11.4765 10.0195 11.5077C9.96875 11.5272 7.98829 10.0546 7.98829 9.996C7.98829 9.95303 8.58985 9.496 8.64844 9.49209C8.66797 9.49209 8.94141 9.6835 9.25391 9.91787ZM10 12.4022C10.125 12.4022 10.2305 12.3358 10.75 11.9452L11.3516 11.4921L11.6836 11.7421C11.8633 11.8749 12.0117 12.0038 12.0117 12.0272C12.0117 12.0663 10.0508 13.5546 10 13.5546C9.94922 13.5546 7.98829 12.0663 7.98829 12.0272C7.98829 12.0038 8.13672 11.8749 8.31641 11.7421L8.64844 11.4921L9.25 11.9452C9.76954 12.3358 9.875 12.4022 10 12.4022Z"
                                                                                fill="white" />
                                                                        </svg> stake</button>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>


                                                    <div class="col-lg-12 col-md-12 col-sm-12 st-wallet-titel">
                                                        <div class="row d-flex justify-content-between">
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-single-name d-flex st-com">
                                                                    <img src="{{ asset('assetsnew/img/img-icon/bmind-icon.png') }}"
                                                                        alt="">
                                                                    <p class="text-uppercase text-left">bmind</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-bal st-com">
                                                                    <p class="text-capitalize text-left">
                                                                        {{ $data['sum_bmindwallet'] ? number_format((float) $data['sum_bmindwallet'], 2, '.', '') : '00.00' }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-usdt-bal st-com">
                                                                    <p class="text-capitalize text-left">
                                                                        ${{ round($data['sum_bmindwallet'] * 0.03, 2) }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-locked st-com">
                                                                    <p class="text-capitalize text-left">62251 </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-action st-com">
                                                                    <button data-toggle="modal" data-target="#bmindStake"
                                                                        data-whatever=""
                                                                        class="text-capitalize text-center text-white"><svg
                                                                            width="18" height="18"
                                                                            viewBox="0 0 20 20" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M9.14062 0.804688C7.37891 1.01562 5.97656 1.53516 4.70703 2.44141C2.71875 3.86328 1.40625 5.87891 0.941406 8.22266C0.691406 9.50781 0.738281 11.0703 1.07422 12.3516C1.74219 14.9102 3.46484 17.0234 5.89844 18.2656L6.26953 18.457L3.62109 18.4766L0.96875 18.4961L0.875 18.6055C0.75 18.75 0.75 18.9453 0.875 19.0898L0.96875 19.1992L5.48438 19.2188C7.96875 19.2305 12.0312 19.2305 14.5156 19.2188L19.0312 19.1992L19.125 19.0898C19.25 18.9453 19.25 18.75 19.125 18.6055L19.0312 18.4961L16.3789 18.4766L13.7305 18.457L14.1797 18.2305C15.8594 17.375 17.2461 16.0117 18.1406 14.3438C18.6406 13.4023 18.9453 12.4922 19.1289 11.3867C19.2305 10.7773 19.2305 9.22266 19.1289 8.61328C18.7969 6.59375 17.9258 4.88281 16.5156 3.47266C15.1172 2.07422 13.3945 1.19531 11.4141 0.875C11.0508 0.816406 9.45703 0.765625 9.14062 0.804688ZM11.1523 1.625C12.0703 1.75 12.8672 1.99609 13.7305 2.42188C15.4297 3.25781 16.7422 4.57031 17.5781 6.26953C18.1836 7.5 18.4453 8.62109 18.4453 10C18.4453 11.3828 18.1836 12.5117 17.5781 13.7305C16.7344 15.4414 15.4297 16.7422 13.7305 17.5781C12.4922 18.1875 11.4102 18.4375 10 18.4375C8.58984 18.4375 7.51172 18.1875 6.26953 17.5781C4.57031 16.7422 3.25391 15.4258 2.42188 13.7305C1.81641 12.5 1.55469 11.3789 1.55469 10C1.55469 8.62109 1.81641 7.5 2.42188 6.26953C3.25391 4.57422 4.57031 3.25781 6.26953 2.42188C7.82422 1.65625 9.44141 1.39453 11.1523 1.625Z"
                                                                                fill="white" />
                                                                            <path
                                                                                d="M9.16013 2.74226C7.41794 2.93758 5.68747 3.84383 4.52732 5.16805C3.17185 6.71492 2.5195 8.7618 2.73825 10.7735C3.207 15.1095 7.33591 18.0665 11.5976 17.1251C13.0703 16.797 14.4609 15.9766 15.4609 14.8438C17.0234 13.0704 17.6367 10.7071 17.125 8.40242C16.3828 5.05867 13.3593 2.66414 9.93357 2.6993C9.67966 2.7032 9.332 2.72273 9.16013 2.74226ZM11.3086 3.59383C13.8984 4.14851 15.8437 6.10555 16.414 8.72273C16.4883 9.07039 16.5 9.23836 16.5 10.0001C16.5 10.7618 16.4883 10.9298 16.414 11.2774C16.2187 12.1759 15.8242 13.0821 15.3242 13.7891C14.9843 14.2657 14.2656 14.9845 13.789 15.3243C13.082 15.8243 12.1758 16.2188 11.2773 16.4141C10.9297 16.4884 10.7617 16.5001 9.99997 16.5001C9.24216 16.5001 9.06638 16.4884 8.72654 16.4141C8.12107 16.2813 7.6445 16.1134 7.08982 15.8399C5.2695 14.9298 4.03122 13.3165 3.58591 11.2774C3.51169 10.9298 3.49997 10.7618 3.49997 10.0001C3.49997 9.23836 3.51169 9.07039 3.58591 8.72273C4.18357 5.98055 6.27732 3.98055 9.00779 3.53523C9.53122 3.4493 10.7929 3.48055 11.3086 3.59383Z"
                                                                                fill="white" />
                                                                            <path
                                                                                d="M9.875 5.59756C9.6836 5.67959 6.9961 7.71084 6.95313 7.80459C6.83204 8.07022 6.91016 8.17959 7.55079 8.65225C7.78125 8.82412 7.96875 8.97256 7.96875 8.98818C7.96875 9.00381 7.75 9.17959 7.48438 9.37881C6.71485 9.95303 6.71485 10.0468 7.48438 10.621C7.75 10.8202 7.96875 10.996 7.96875 11.0116C7.96875 11.0272 7.75 11.203 7.48047 11.4022C7.21094 11.6015 6.97266 11.8007 6.95313 11.8397C6.90235 11.9296 6.90235 12.0819 6.95313 12.1952C7 12.2929 9.69532 14.3241 9.88672 14.4062C9.99219 14.4491 10.0273 14.4491 10.1523 14.3866C10.3945 14.2655 13 12.2968 13.043 12.1991C13.1602 11.9452 13.0664 11.8085 12.5039 11.3866C12.2422 11.1952 12.0313 11.0272 12.0313 11.0116C12.0313 10.996 12.25 10.8202 12.5156 10.621C13.2852 10.0468 13.2852 9.95303 12.5156 9.37881C12.25 9.17959 12.0313 9.00381 12.0313 8.98818C12.0313 8.97256 12.2422 8.80459 12.5039 8.61318C13.0664 8.19131 13.1602 8.05459 13.043 7.80068C13.0078 7.72647 10.5781 5.871 10.2344 5.65615C10.0859 5.5624 9.99219 5.54678 9.875 5.59756ZM11.0195 7.19131C11.5664 7.59756 12.0156 7.94912 12.0234 7.96475C12.0352 7.9999 10.0586 9.49209 10 9.49209C9.94141 9.49209 7.96485 7.9999 7.97657 7.96475C7.99219 7.92568 9.96485 6.44522 10 6.44522C10.0156 6.44522 10.4727 6.78115 11.0195 7.19131ZM9.25391 9.91787C9.56641 10.1522 9.86719 10.3554 9.92188 10.371C10.0742 10.4062 10.168 10.3554 10.7773 9.90225C11.0859 9.67178 11.3594 9.496 11.3906 9.50772C11.4766 9.53897 12.0313 9.96865 12.0313 9.9999C12.0313 10.0312 10.1016 11.4765 10.0195 11.5077C9.96875 11.5272 7.98829 10.0546 7.98829 9.996C7.98829 9.95303 8.58985 9.496 8.64844 9.49209C8.66797 9.49209 8.94141 9.6835 9.25391 9.91787ZM10 12.4022C10.125 12.4022 10.2305 12.3358 10.75 11.9452L11.3516 11.4921L11.6836 11.7421C11.8633 11.8749 12.0117 12.0038 12.0117 12.0272C12.0117 12.0663 10.0508 13.5546 10 13.5546C9.94922 13.5546 7.98829 12.0663 7.98829 12.0272C7.98829 12.0038 8.13672 11.8749 8.31641 11.7421L8.64844 11.4921L9.25 11.9452C9.76954 12.3358 9.875 12.4022 10 12.4022Z"
                                                                                fill="white" />
                                                                        </svg> stake</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 st-wallet-titel">
                                                        <div class="row d-flex justify-content-between">
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-single-name d-flex st-com">
                                                                    <img src="{{ asset('assetsnew/img/img-icon/kids-icon.png') }}"
                                                                        alt="">
                                                                    <p class="text-uppercase text-left">Kids P.</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-bal st-com">
                                                                    <p class="text-capitalize text-left">
                                                                        {{ $data['sum_bmindwallet'] ? number_format((float) $data['sum_bmindwallet'], 2, '.', '') : '00.00' }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-usdt-bal st-com">
                                                                    <p class="text-capitalize text-left">
                                                                        ${{ round($data['sum_bmindwallet'] * 0.03, 2) }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-locked st-com">
                                                                    <p class="text-capitalize text-left">62251 </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-action st-com">
                                                                    <button data-toggle="modal" data-target="#bmindStake"
                                                                        data-whatever=""
                                                                        class="text-capitalize text-center text-white"><svg
                                                                            width="18" height="18"
                                                                            viewBox="0 0 20 20" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M9.14062 0.804688C7.37891 1.01562 5.97656 1.53516 4.70703 2.44141C2.71875 3.86328 1.40625 5.87891 0.941406 8.22266C0.691406 9.50781 0.738281 11.0703 1.07422 12.3516C1.74219 14.9102 3.46484 17.0234 5.89844 18.2656L6.26953 18.457L3.62109 18.4766L0.96875 18.4961L0.875 18.6055C0.75 18.75 0.75 18.9453 0.875 19.0898L0.96875 19.1992L5.48438 19.2188C7.96875 19.2305 12.0312 19.2305 14.5156 19.2188L19.0312 19.1992L19.125 19.0898C19.25 18.9453 19.25 18.75 19.125 18.6055L19.0312 18.4961L16.3789 18.4766L13.7305 18.457L14.1797 18.2305C15.8594 17.375 17.2461 16.0117 18.1406 14.3438C18.6406 13.4023 18.9453 12.4922 19.1289 11.3867C19.2305 10.7773 19.2305 9.22266 19.1289 8.61328C18.7969 6.59375 17.9258 4.88281 16.5156 3.47266C15.1172 2.07422 13.3945 1.19531 11.4141 0.875C11.0508 0.816406 9.45703 0.765625 9.14062 0.804688ZM11.1523 1.625C12.0703 1.75 12.8672 1.99609 13.7305 2.42188C15.4297 3.25781 16.7422 4.57031 17.5781 6.26953C18.1836 7.5 18.4453 8.62109 18.4453 10C18.4453 11.3828 18.1836 12.5117 17.5781 13.7305C16.7344 15.4414 15.4297 16.7422 13.7305 17.5781C12.4922 18.1875 11.4102 18.4375 10 18.4375C8.58984 18.4375 7.51172 18.1875 6.26953 17.5781C4.57031 16.7422 3.25391 15.4258 2.42188 13.7305C1.81641 12.5 1.55469 11.3789 1.55469 10C1.55469 8.62109 1.81641 7.5 2.42188 6.26953C3.25391 4.57422 4.57031 3.25781 6.26953 2.42188C7.82422 1.65625 9.44141 1.39453 11.1523 1.625Z"
                                                                                fill="white" />
                                                                            <path
                                                                                d="M9.16013 2.74226C7.41794 2.93758 5.68747 3.84383 4.52732 5.16805C3.17185 6.71492 2.5195 8.7618 2.73825 10.7735C3.207 15.1095 7.33591 18.0665 11.5976 17.1251C13.0703 16.797 14.4609 15.9766 15.4609 14.8438C17.0234 13.0704 17.6367 10.7071 17.125 8.40242C16.3828 5.05867 13.3593 2.66414 9.93357 2.6993C9.67966 2.7032 9.332 2.72273 9.16013 2.74226ZM11.3086 3.59383C13.8984 4.14851 15.8437 6.10555 16.414 8.72273C16.4883 9.07039 16.5 9.23836 16.5 10.0001C16.5 10.7618 16.4883 10.9298 16.414 11.2774C16.2187 12.1759 15.8242 13.0821 15.3242 13.7891C14.9843 14.2657 14.2656 14.9845 13.789 15.3243C13.082 15.8243 12.1758 16.2188 11.2773 16.4141C10.9297 16.4884 10.7617 16.5001 9.99997 16.5001C9.24216 16.5001 9.06638 16.4884 8.72654 16.4141C8.12107 16.2813 7.6445 16.1134 7.08982 15.8399C5.2695 14.9298 4.03122 13.3165 3.58591 11.2774C3.51169 10.9298 3.49997 10.7618 3.49997 10.0001C3.49997 9.23836 3.51169 9.07039 3.58591 8.72273C4.18357 5.98055 6.27732 3.98055 9.00779 3.53523C9.53122 3.4493 10.7929 3.48055 11.3086 3.59383Z"
                                                                                fill="white" />
                                                                            <path
                                                                                d="M9.875 5.59756C9.6836 5.67959 6.9961 7.71084 6.95313 7.80459C6.83204 8.07022 6.91016 8.17959 7.55079 8.65225C7.78125 8.82412 7.96875 8.97256 7.96875 8.98818C7.96875 9.00381 7.75 9.17959 7.48438 9.37881C6.71485 9.95303 6.71485 10.0468 7.48438 10.621C7.75 10.8202 7.96875 10.996 7.96875 11.0116C7.96875 11.0272 7.75 11.203 7.48047 11.4022C7.21094 11.6015 6.97266 11.8007 6.95313 11.8397C6.90235 11.9296 6.90235 12.0819 6.95313 12.1952C7 12.2929 9.69532 14.3241 9.88672 14.4062C9.99219 14.4491 10.0273 14.4491 10.1523 14.3866C10.3945 14.2655 13 12.2968 13.043 12.1991C13.1602 11.9452 13.0664 11.8085 12.5039 11.3866C12.2422 11.1952 12.0313 11.0272 12.0313 11.0116C12.0313 10.996 12.25 10.8202 12.5156 10.621C13.2852 10.0468 13.2852 9.95303 12.5156 9.37881C12.25 9.17959 12.0313 9.00381 12.0313 8.98818C12.0313 8.97256 12.2422 8.80459 12.5039 8.61318C13.0664 8.19131 13.1602 8.05459 13.043 7.80068C13.0078 7.72647 10.5781 5.871 10.2344 5.65615C10.0859 5.5624 9.99219 5.54678 9.875 5.59756ZM11.0195 7.19131C11.5664 7.59756 12.0156 7.94912 12.0234 7.96475C12.0352 7.9999 10.0586 9.49209 10 9.49209C9.94141 9.49209 7.96485 7.9999 7.97657 7.96475C7.99219 7.92568 9.96485 6.44522 10 6.44522C10.0156 6.44522 10.4727 6.78115 11.0195 7.19131ZM9.25391 9.91787C9.56641 10.1522 9.86719 10.3554 9.92188 10.371C10.0742 10.4062 10.168 10.3554 10.7773 9.90225C11.0859 9.67178 11.3594 9.496 11.3906 9.50772C11.4766 9.53897 12.0313 9.96865 12.0313 9.9999C12.0313 10.0312 10.1016 11.4765 10.0195 11.5077C9.96875 11.5272 7.98829 10.0546 7.98829 9.996C7.98829 9.95303 8.58985 9.496 8.64844 9.49209C8.66797 9.49209 8.94141 9.6835 9.25391 9.91787ZM10 12.4022C10.125 12.4022 10.2305 12.3358 10.75 11.9452L11.3516 11.4921L11.6836 11.7421C11.8633 11.8749 12.0117 12.0038 12.0117 12.0272C12.0117 12.0663 10.0508 13.5546 10 13.5546C9.94922 13.5546 7.98829 12.0663 7.98829 12.0272C7.98829 12.0038 8.13672 11.8749 8.31641 11.7421L8.64844 11.4921L9.25 11.9452C9.76954 12.3358 9.875 12.4022 10 12.4022Z"
                                                                                fill="white" />
                                                                        </svg> Buy</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 st-wallet-titel">
                                                        <div class="row d-flex justify-content-between">
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-single-name d-flex st-com">
                                                                    <img src="{{ asset('assetsnew/img/img-icon/elite.png') }}"
                                                                        alt="">
                                                                    <p class="text-capitalize text-left">elite</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-bal st-com">
                                                                    <p class="text-capitalize text-left">
                                                                        {{ $data['sum_usdwallet'] ? number_format((float) $data['sum_usdwallet'], 2, '.', '') : '00.00' }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-usdt-bal st-com">
                                                                    <p class="text-capitalize text-left">
                                                                        ${{ round($data['sum_usdwallet'] * 1.01, 2) }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-locked st-com">
                                                                    <p class="text-capitalize text-left">62251 </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-action st-com">
                                                                    <button data-toggle="modal" data-target="#joinElite"
                                                                        data-whatever=""
                                                                        class="text-capitalize text-center text-white joinNow">
                                                                        <svg width="20px" height="20px"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M13.3 8.10998L14.62 10.75C14.8 11.11 15.28 11.47 15.68 11.53L18.07 11.93C19.6 12.19 19.96 13.29 18.86 14.39L17 16.25C16.69 16.56 16.51 17.17 16.61 17.61L17.14 19.92C17.56 21.74 16.59 22.45 14.98 21.5L12.74 20.17C12.33 19.93 11.67 19.93 11.26 20.17L9.01996 21.5C7.40996 22.45 6.43995 21.74 6.85995 19.92L7.38998 17.61C7.48998 17.18 7.30997 16.57 6.99997 16.25L5.13998 14.39C4.03998 13.29 4.39996 12.18 5.92996 11.93L8.31997 11.53C8.71997 11.46 9.19997 11.11 9.37997 10.75L10.7 8.10998C11.41 6.67998 12.59 6.67998 13.3 8.10998Z"
                                                                                stroke="white" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M6 9V2" stroke="white"
                                                                                stroke-width="1.5" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M18 9V2" stroke="white"
                                                                                stroke-width="1.5" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M12 4V2" stroke="white"
                                                                                stroke-width="1.5" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        Join</button>
                                                                    <div class="modal withdraw-modal fade " id="joinElite"
                                                                        tabindex="-1" role="dialog"
                                                                        aria-labelledby="exampleModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="exampleModalLabel">Join Elite
                                                                                        Club Member</h5>
                                                                                    <button type="button" class="close"
                                                                                        data-dismiss="modal"
                                                                                        aria-label="Close">
                                                                                        <span
                                                                                            aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form>
                                                                                        <div class="form-group">
                                                                                            <label for="membershipFee"
                                                                                                class="col-form-label">Membership
                                                                                                Fee</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="membershipFee"
                                                                                                value="1250" disabled>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="usdAvailableBalance"
                                                                                                class="col-form-label">USD
                                                                                                Available Balance</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="usdAvailableBalance"
                                                                                                value="500.45300" disabled>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-danger"
                                                                                        data-dismiss="modal">Cancel</button>
                                                                                    <button type="button"
                                                                                        class="btn btn-primary">Join</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 st-wallet-titel">
                                                        <div class="row d-flex justify-content-between">
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-single-name d-flex st-com">
                                                                    <img src="{{ asset('assetsnew/img/img-icon/CONSULTANT-01.png') }}"
                                                                        alt="">
                                                                    <p class="text-capitalize text-left">marchent</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-bal st-com">
                                                                    <p class="text-capitalize text-left">
                                                                        {{ $data['sum_deposit_coupon'] ? number_format((float) $data['sum_deposit_coupon'], 2, '.', '') : '00.00' }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-usdt-bal st-com">
                                                                    <p class="text-capitalize text-left">
                                                                        {{ $data['sum_deposit_coupon'] ? number_format((float) $data['sum_deposit_coupon'], 2, '.', '') : '00.00' }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-locked st-com">
                                                                    <p class="text-capitalize text-left">62251 </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-action st-com">
                                                                    <button
                                                                        class="text-capitalize text-center text-white coupon">
                                                                        <svg fill="#ffffff" width="27px" height="20px"
                                                                            viewBox="0 0 512.00 512.00"
                                                                            enable-background="new 0 0 512 512"
                                                                            id="Ticket" version="1.1"
                                                                            xml:space="preserve"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            stroke="#ffffff" stroke-width="0.00512">

                                                                            <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                                                            <g id="SVGRepo_tracerCarrier"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />

                                                                            <g id="SVGRepo_iconCarrier">
                                                                                <g>
                                                                                    <g>
                                                                                        <path
                                                                                            d="M445.084,139.6H65.368c0,21.996-17.34,39.84-39.06,39.84v153.121c21.72,0,39.06,17.844,39.06,39.84h379.716 c0-21.996,17.328-39.84,40.607-39.84V179.439C462.412,179.439,445.084,161.596,445.084,139.6z M445.168,311.596 c-16.896,0-29.484,12.948-29.484,28.92H95.188c0-15.972-12.588-28.92-28.356-28.92V200.403c15.768,0,28.356-12.947,28.356-28.92 h320.496c0,15.973,12.588,28.92,29.484,28.92V311.596z" />
                                                                                        <path
                                                                                            d="M397.064,248.666l-9.622-1.398c-0.731-0.106-1.364-0.565-1.692-1.229l-4.305-8.722c-0.824-1.671-3.207-1.671-4.031,0 l-4.305,8.722c-0.328,0.664-0.961,1.123-1.693,1.229l-9.624,1.398c-1.844,0.269-2.58,2.534-1.246,3.835l6.962,6.786 c0.529,0.518,0.771,1.261,0.646,1.99l-1.644,9.588c-0.314,1.837,1.612,3.236,3.262,2.37l8.61-4.526 c0.655-0.345,1.438-0.345,2.093,0l8.608,4.525c1.649,0.867,3.577-0.534,3.262-2.371l-1.647-9.586 c-0.125-0.729,0.116-1.474,0.647-1.99l6.965-6.786C399.645,251.2,398.909,248.934,397.064,248.666z" />
                                                                                        <path
                                                                                            d="M331.407,248.666l-9.628-1.398c-0.733-0.106-1.367-0.566-1.693-1.23l-4.299-8.718c-0.824-1.671-3.207-1.672-4.032-0.001 l-4.304,8.72c-0.327,0.664-0.961,1.123-1.693,1.229l-9.629,1.398c-1.844,0.269-2.58,2.534-1.245,3.835l6.966,6.786 c0.529,0.518,0.771,1.262,0.646,1.99l-1.643,9.588c-0.314,1.837,1.612,3.236,3.262,2.37l8.611-4.526 c0.654-0.345,1.437-0.345,2.092,0l8.607,4.525c1.65,0.867,3.578-0.534,3.262-2.371l-1.646-9.586 c-0.125-0.729,0.116-1.474,0.646-1.99l6.965-6.786C333.987,251.2,333.251,248.935,331.407,248.666z" />
                                                                                        <path
                                                                                            d="M265.747,248.666l-9.62-1.398c-0.732-0.106-1.365-0.565-1.692-1.229l-4.307-8.723c-0.825-1.67-3.207-1.67-4.032,0.001 l-4.305,8.722c-0.328,0.664-0.96,1.123-1.693,1.229l-9.623,1.398c-1.844,0.268-2.58,2.534-1.246,3.835l6.963,6.786 c0.53,0.517,0.772,1.262,0.646,1.99l-1.645,9.588c-0.315,1.836,1.612,3.236,3.261,2.369l8.61-4.525 c0.655-0.345,1.437-0.345,2.092,0l8.611,4.525c1.648,0.867,3.576-0.534,3.261-2.371l-1.647-9.586 c-0.125-0.729,0.117-1.474,0.646-1.99l6.963-6.786C268.327,251.2,267.592,248.934,265.747,248.666z" />
                                                                                        <rect height="20.23"
                                                                                            width="18" x="167.737"
                                                                                            y="305.355" />
                                                                                        <rect height="20.23"
                                                                                            width="18" x="167.737"
                                                                                            y="264.896" />
                                                                                        <rect height="20.229"
                                                                                            width="18" x="167.737"
                                                                                            y="224.436" />
                                                                                        <rect height="20.229"
                                                                                            width="18" x="167.737"
                                                                                            y="183.976" />
                                                                                        <rect height="18"
                                                                                            width="41.549" x="96.59"
                                                                                            y="245.782" />
                                                                                        <rect height="18"
                                                                                            width="41.549" x="96.59"
                                                                                            y="279.632" />
                                                                                        <rect height="18"
                                                                                            width="41.549" x="96.59"
                                                                                            y="211.932" />
                                                                                    </g>
                                                                                </g>
                                                                            </g>

                                                                        </svg>Coupon</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 st-wallet-titel">
                                                        <div class="row d-flex justify-content-between">
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-single-name d-flex st-com">
                                                                    <img src="{{ asset('assetsnew/img/img-icon/ambassador.png') }}"
                                                                        alt="">
                                                                    <p class="text-capitalize text-left">Ambassador</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-bal st-com">
                                                                    <p class="text-capitalize text-left">
                                                                        {{ $data['sum_deposit_ambassador'] ? number_format((float) $data['sum_deposit_ambassador'], 2, '.', '') : '00.00' }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-usdt-bal st-com">
                                                                    <p class="text-capitalize text-left">
                                                                        ${{ round($data['sum_deposit_ambassador'] * $token_rate->token_convert_rate, 2) }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-locked st-com">
                                                                    <p class="text-capitalize text-left">62251 </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <div class="wallet-st-action st-com">
                                                                    <button
                                                                        class="text-capitalize text-center text-white transfer">
                                                                        <!-- <svg width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <path d="M9.14062 0.804688C7.37891 1.01562 5.97656 1.53516 4.70703 2.44141C2.71875 3.86328 1.40625 5.87891 0.941406 8.22266C0.691406 9.50781 0.738281 11.0703 1.07422 12.3516C1.74219 14.9102 3.46484 17.0234 5.89844 18.2656L6.26953 18.457L3.62109 18.4766L0.96875 18.4961L0.875 18.6055C0.75 18.75 0.75 18.9453 0.875 19.0898L0.96875 19.1992L5.48438 19.2188C7.96875 19.2305 12.0312 19.2305 14.5156 19.2188L19.0312 19.1992L19.125 19.0898C19.25 18.9453 19.25 18.75 19.125 18.6055L19.0312 18.4961L16.3789 18.4766L13.7305 18.457L14.1797 18.2305C15.8594 17.375 17.2461 16.0117 18.1406 14.3438C18.6406 13.4023 18.9453 12.4922 19.1289 11.3867C19.2305 10.7773 19.2305 9.22266 19.1289 8.61328C18.7969 6.59375 17.9258 4.88281 16.5156 3.47266C15.1172 2.07422 13.3945 1.19531 11.4141 0.875C11.0508 0.816406 9.45703 0.765625 9.14062 0.804688ZM11.1523 1.625C12.0703 1.75 12.8672 1.99609 13.7305 2.42188C15.4297 3.25781 16.7422 4.57031 17.5781 6.26953C18.1836 7.5 18.4453 8.62109 18.4453 10C18.4453 11.3828 18.1836 12.5117 17.5781 13.7305C16.7344 15.4414 15.4297 16.7422 13.7305 17.5781C12.4922 18.1875 11.4102 18.4375 10 18.4375C8.58984 18.4375 7.51172 18.1875 6.26953 17.5781C4.57031 16.7422 3.25391 15.4258 2.42188 13.7305C1.81641 12.5 1.55469 11.3789 1.55469 10C1.55469 8.62109 1.81641 7.5 2.42188 6.26953C3.25391 4.57422 4.57031 3.25781 6.26953 2.42188C7.82422 1.65625 9.44141 1.39453 11.1523 1.625Z" fill="white"/>
                                                                                        <path d="M9.16013 2.74226C7.41794 2.93758 5.68747 3.84383 4.52732 5.16805C3.17185 6.71492 2.5195 8.7618 2.73825 10.7735C3.207 15.1095 7.33591 18.0665 11.5976 17.1251C13.0703 16.797 14.4609 15.9766 15.4609 14.8438C17.0234 13.0704 17.6367 10.7071 17.125 8.40242C16.3828 5.05867 13.3593 2.66414 9.93357 2.6993C9.67966 2.7032 9.332 2.72273 9.16013 2.74226ZM11.3086 3.59383C13.8984 4.14851 15.8437 6.10555 16.414 8.72273C16.4883 9.07039 16.5 9.23836 16.5 10.0001C16.5 10.7618 16.4883 10.9298 16.414 11.2774C16.2187 12.1759 15.8242 13.0821 15.3242 13.7891C14.9843 14.2657 14.2656 14.9845 13.789 15.3243C13.082 15.8243 12.1758 16.2188 11.2773 16.4141C10.9297 16.4884 10.7617 16.5001 9.99997 16.5001C9.24216 16.5001 9.06638 16.4884 8.72654 16.4141C8.12107 16.2813 7.6445 16.1134 7.08982 15.8399C5.2695 14.9298 4.03122 13.3165 3.58591 11.2774C3.51169 10.9298 3.49997 10.7618 3.49997 10.0001C3.49997 9.23836 3.51169 9.07039 3.58591 8.72273C4.18357 5.98055 6.27732 3.98055 9.00779 3.53523C9.53122 3.4493 10.7929 3.48055 11.3086 3.59383Z" fill="white"/>
                                                                                        <path d="M9.875 5.59756C9.6836 5.67959 6.9961 7.71084 6.95313 7.80459C6.83204 8.07022 6.91016 8.17959 7.55079 8.65225C7.78125 8.82412 7.96875 8.97256 7.96875 8.98818C7.96875 9.00381 7.75 9.17959 7.48438 9.37881C6.71485 9.95303 6.71485 10.0468 7.48438 10.621C7.75 10.8202 7.96875 10.996 7.96875 11.0116C7.96875 11.0272 7.75 11.203 7.48047 11.4022C7.21094 11.6015 6.97266 11.8007 6.95313 11.8397C6.90235 11.9296 6.90235 12.0819 6.95313 12.1952C7 12.2929 9.69532 14.3241 9.88672 14.4062C9.99219 14.4491 10.0273 14.4491 10.1523 14.3866C10.3945 14.2655 13 12.2968 13.043 12.1991C13.1602 11.9452 13.0664 11.8085 12.5039 11.3866C12.2422 11.1952 12.0313 11.0272 12.0313 11.0116C12.0313 10.996 12.25 10.8202 12.5156 10.621C13.2852 10.0468 13.2852 9.95303 12.5156 9.37881C12.25 9.17959 12.0313 9.00381 12.0313 8.98818C12.0313 8.97256 12.2422 8.80459 12.5039 8.61318C13.0664 8.19131 13.1602 8.05459 13.043 7.80068C13.0078 7.72647 10.5781 5.871 10.2344 5.65615C10.0859 5.5624 9.99219 5.54678 9.875 5.59756ZM11.0195 7.19131C11.5664 7.59756 12.0156 7.94912 12.0234 7.96475C12.0352 7.9999 10.0586 9.49209 10 9.49209C9.94141 9.49209 7.96485 7.9999 7.97657 7.96475C7.99219 7.92568 9.96485 6.44522 10 6.44522C10.0156 6.44522 10.4727 6.78115 11.0195 7.19131ZM9.25391 9.91787C9.56641 10.1522 9.86719 10.3554 9.92188 10.371C10.0742 10.4062 10.168 10.3554 10.7773 9.90225C11.0859 9.67178 11.3594 9.496 11.3906 9.50772C11.4766 9.53897 12.0313 9.96865 12.0313 9.9999C12.0313 10.0312 10.1016 11.4765 10.0195 11.5077C9.96875 11.5272 7.98829 10.0546 7.98829 9.996C7.98829 9.95303 8.58985 9.496 8.64844 9.49209C8.66797 9.49209 8.94141 9.6835 9.25391 9.91787ZM10 12.4022C10.125 12.4022 10.2305 12.3358 10.75 11.9452L11.3516 11.4921L11.6836 11.7421C11.8633 11.8749 12.0117 12.0038 12.0117 12.0272C12.0117 12.0663 10.0508 13.5546 10 13.5546C9.94922 13.5546 7.98829 12.0663 7.98829 12.0272C7.98829 12.0038 8.13672 11.8749 8.31641 11.7421L8.64844 11.4921L9.25 11.9452C9.76954 12.3358 9.875 12.4022 10 12.4022Z" fill="white"/>
                                                                                        </svg>  -->
                                                                        Transfer</button>
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
                        </div>
                        <!-- Staking Wallet Section End
              ============================================ -->

                        <!-- buy Mind  start
      ============================================  -->
                        <div class="buyMindWallet">
                            <div class="static-table-area mg-t-15">
                                <div class="buyMindHeader row mg-b-15">
                                    <div class="col-sm-6">
                                        <h4 class="text-left">Buy MIND</h4>
                                    </div>
                                    <div class="col-sm-6 d-flex text-right mind-price">
                                        <p class="text-right">Available Balance ($)</p>
                                        <p class="text-right mind-priceAmount">
                                            {{ $data['sum_deposit'] ? '$' . number_format((float) $data['sum_deposit'], 2, '.', '') : '$00.00' }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <form method="post" action="{{ route('buy-token') }}">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <div class="form-group">
                                            <label for="selectBuyMindAddress" class="col-form-label text-left">Select
                                                Wallet</label>
                                            <select class="form-select form-control" id="wallet_type" name="wallet_type"
                                                aria-label="Default select example">
                                                <option value="musd">MUSD Wallet</option>
                                                <option value="usd">USD Wallet</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="buyMindQuantity" class="col-form-label text-left">Available
                                                Balance ($):</label>
                                            <input type="text" disabled class="form-control col-lg-8"
                                                id="balance_display">
                                        </div>
                                        <div class="form-group">
                                            <label for="buyMindQuantity" class="col-form-label text-left">Quantity MIND
                                                ($):</label>
                                            <input type="text" class="form-control" onchange="calculate()"
                                                id="amount1" name="quantity" required pattern="[0-9]*" min="1"
                                                max="5000">
                                        </div>
                                </div>

                                <div class="row valueSec">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <p class="totalValue">Total Value ($):</p>
                                            <input type="text" id="total_value" readonly class="totalAmount"
                                                name="total_value" required>
                                        </div>
                                        <div class="form-group">
                                            <p class="payable">Payable ($):</p>
                                            <input type="text" readonly id="payable" name="payable"
                                                class="payableAmount" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="form-group">
                                            <p class="mindPrice">Mind Price ($):</p>
                                            <input type="text" readonly class="priceValue mindPriceAmount"
                                                value="{{ $data['settings']->token_convert_rate }}">
                                        </div>
                                        <div class="form-group">
                                            <p class="buyingFee">Buying Fee(%):</p>
                                            <input type="text" readonly class="buyingFee"
                                                value="{{ $data['settings']->buying_commission }}">
                                        </div>
                                    </div>
                                </div>
                                <button>Buy <svg width="26" height="16" viewBox="0 0 26 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M25.7071 8.7071C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.92893C18.9526 0.538406 18.3195 0.538406 17.9289 0.928931C17.5384 1.31946 17.5384 1.95262 17.9289 2.34314L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.7071ZM8.74228e-08 9L25 9L25 7L-8.74228e-08 7L8.74228e-08 9Z"
                                            fill="white" />
                                    </svg>
                                </button>
                                </form>

                            </div>


                        </div>

                        <!-- buy Mind  end section
    ============================================ -->
                    </div>



                    <!-- Price and Offer Section
              ============================================ -->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                        <div class="admin-content dbprice analysis-progrebar-ctn res-mg-t-30">
                            <div class="price-title">
                                <h4 class="text-left text-uppercase"><b>Price & Offer</b></h4>
                            </div>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div>
                                    <div class="mind-sec">
                                        <div class="mindn np">MIND Price:</div>
                                        <div class="pricem m-flex np">
                                            <p class="priceValue"></p>
                                            <p class="changeValue"></p>
                                        </div>
                                    </div>
                                    <div class="mind-sec">
                                        <div class="mindn bmind">BMIND Price:</div>
                                        <div class="pricem bmind-price">$0.0350</div>
                                    </div>
                                    <div class="mind-sec">
                                        <div class="mindn m-cap">Market Cap:</div>
                                        <div class="pricem m-num ">27465364</div>
                                    </div>
                                    <div class="mind-sec">
                                        <div class="mindn bmind">Total Elit Member:</div>
                                        <div class="pricem bmind-price">115</div>
                                    </div>
                                    <div class="mind-sec">
                                        <div class="mindn bmind">Next Price:</div>
                                        <div class="pricem bmind-price">$0.056</div>
                                    </div>
                                    <div class="counter">
                                        <h5 class="">Extended Time</h5>
                                        <div class="pricem bmind-price" id="countdown"></div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- Price and Offer Section END
                                            ============================================ -->
                        <?php

                        $User = App\Models\User::where('id', Auth::id())->first();

                        ?>
                        <!-- BMIND Target
              ============================================ -->
                        <div class="admin-content dbprice analysis-progrebar-ctn res-mg-t-30 bmind-tar">
                            <div class="price-title">
                                <h4 class="text-left text-uppercase"><b>BIMD target</b></h4>
                            </div>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div>
                                    <div class="mind-sec">
                                        <div class="mindn text-capitalize">target BMIND:</div>
                                        <div class="pricem text-capitalize">
                                            {{ $data['bmindTarget']->target_amount ?? 'No Target' }}</div>
                                    </div>
                                    <div class="mind-sec">
                                        <div class="mindn bmind text-capitalize">BMIND own purchase:</div>
                                        <div class="pricem bmind-price">
                                            {{ $data['sum_bmind_staking'] ? number_format((float) $data['sum_bmind_staking'], 2, '.', '') : '00.00' }}
                                        </div>
                                    </div>
                                    <div class="mind-sec">
                                        <div class="mindn m-cap text-capitalize">team sales(BMIND):</div>
                                        <div class="pricem m-num ">{{ $User->bmind_team_invest }}</div>
                                    </div>
                                    <div class="mind-sec">
                                        <div class="mindn bmind text-capitalize">Timeline:</div>
                                        <div class="pricem bmind-price">{{ $data['enddate'] ?? '' }}</div>
                                    </div>
                                    <div class="mind-sec status">
                                        <div class="mindn bmind text-capitalize">status:</div>
                                        <div class="pricem bmind-price text-capitalize">
                                            {{ isset($data['bmindTarget']) && $User->bmind_team_invest > $data['bmindTarget']->target_amount ? 'Achieved' : '' }}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- BMIND Target END
              ============================================ -->


              <!-- twitter section start
              ============================================ -->
              <div class="admin-content dbprice analysis-progrebar-ctn res-mg-t-30 bmind-tar" style="border-radius: 10px">
                <div class="price-title">
                    <h4 class="text-left text-uppercase"><b>Twitter</b></h4>
                </div>
                <div class="row vertical-center-box vertical-center-box-tablet">
                    <div class="col-lg 12 col-md-12 col-sm col xs">
                        <a class="twitter-timeline" data-height="560" data-dnt="true" data-theme="dark" href="https://twitter.com/MindChain1?ref_src=twsrc%5Etfw">Tweets by MindChain Ecosystem</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>

                </div>
            </div>
            <!-- Twitter section END
  ============================================ -->
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- transection Cash Wallet section
                 ============================================  -->
                    <div class="transection-staus mg-t-30  mg-b-30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="transaction-status-wrap">
                                        <h4 class="text-left">Recent Transaction Cash Wallet</h4>
                                        <div class="transaction-table">
                                            <table id="myTable" class="">
                                                <thead>
                                                    <tr>
                                                        <th>SL</th>
                                                        <th>Method</th>
                                                        <th>Amount</th>
                                                        <th>Type</th>
                                                        <th>Description</th>
                                                    </tr>
                                                </thead>

                                                <?php
                                                $cashwallet_tr = App\Models\AddMoney::where('user_id', Auth::id())->latest()->take(10)->get();

                                                ?>
                                                <tbody>
                                                    @foreach ($cashwallet_tr as $cr)
                                                        <tr class="white-space-no-wrap">
                                                            <td>{{ $loop->index + 1 }} </td>
                                                            <td>{{ $cr->method }}</td>
                                                            <td>{{ $cr->amount }}$</td>
                                                            <td>{{ $cr->type }}</td>
                                                            <td>
                                                                @if ($cr->description != null)
                                                                    {{ $cr->description }}
                                                                @else
                                                                @endif

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
                    <!-- transection Token Wallet section
                            ============================================  -->

                    <div class="transection-staus">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="transaction-status-wrap">
                                        <h4 class="text-left">Recent Transaction Token Wallet</h4>
                                        <div class="transaction-table">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>SL</th>
                                                        <th>Method</th>
                                                        <th>Amount</th>
                                                        <th>Type</th>
                                                        <th>Description</th>
                                                    </tr>
                                                </thead>
                                                <?php
                                                $cashwallet_tr = App\Models\AddMoney::where('user_id', Auth::id())->latest()->take(10)->get();

                                                ?>
                                                <tbody>
                                                    @foreach ($cashwallet_tr as $cr)
                                                        <tr class="white-space-no-wrap">
                                                            <td>{{ $loop->index + 1 }} </td>
                                                            <td>{{ $cr->method }}</td>
                                                            <td>{{ $cr->amount }}$</td>
                                                            <td>{{ $cr->type }}</td>
                                                            <td>
                                                                @if ($cr->description != null)
                                                                    {{ $cr->description }}
                                                                @else
                                                                @endif

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
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            function calculate() {



                var amount = document.getElementById('amount1').value;
                var value = amount * <?php echo $data['settings']->token_convert_rate; ?>;


                document.getElementById('total_value').value = value;
                var payable = value * (<?php echo $data['settings']->buying_commission; ?> / 100) + value;
                document.getElementById('payable').value = payable;

            }

            function calculate2() {



                var amount2 = document.getElementById('amount2').value;
                var value2 = amount2 * <?php echo $data['settings']->token_convert_rate; ?>;


                document.getElementById('total_value2').value = value2;
                var payable2 = value2 - (value2 * (<?php echo $data['settings']->selling_commission; ?> / 100));
                document.getElementById('payable2').value = payable2;

            }
        </script>
        <script type="text/javascript">
            document.getElementById('DestinationOptions').addEventListener('change', function(e) {
                var wallet2 = e.target.options[e.target.selectedIndex].getAttribute('id');
                //console.log(wallet2);
                var wallet = document.getElementById("wallet_id").value = wallet2;

            });

            document.getElementById('musddeposit').addEventListener('change', function(e) {
                var wallet2 = e.target.options[e.target.selectedIndex].getAttribute('id');
                //console.log(wallet2);
                var wallet = document.getElementById("musd_wallet_id").value = wallet2;

            });

            document.getElementById('usdt_deposit').addEventListener('change', function(e) {
                var wallet2 = e.target.options[e.target.selectedIndex].getAttribute('id');
                //console.log(wallet2);
                var wallet = document.getElementById("usdt_wallet_id").value = wallet2;
            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            $(document).ready(function() {
                var clipboard = new ClipboardJS('#copyButton', {
                    text: function() {
                        return $('#sourceInput').val();
                    }
                });

                clipboard.on('success', function(e) {
                    toastr.success('Value copied to clipboard!');
                    e.clearSelection();
                });

                clipboard.on('error', function(e) {
                    alert('Failed to copy value to clipboard.');
                });
            });




            $("#fundTransferForm").submit(function(event) {
                if ($("#fundTransferForm").attr('data-user-not-found') === 'true') {
                    event.preventDefault(); // Prevent form submission
                    alert('User not found. Please enter a valid receiver ID.');
                }
            });


            // Get the input element
            var amountInput = document.querySelector('input[name="amount amount2"]');

            // Add an event listener to restrict input values
            document.addEventListener("DOMContentLoaded", function() {
                let amountInput = document.getElementById("amount");
                let form = document.querySelector("form");

                form.addEventListener("submit", function(event) {
                    let amountValue = amountInput.value;

                    if (!/^\d+$/.test(amountValue)) {
                        event.preventDefault();
                        alert("Please enter a valid numeric amount.");
                    }
                });
            });
        </script>
        <script src="{{ asset('js/Metamask.js') }}"></script>
        <script>
            const ethereumAddress = await web3.eth.getCoinbase();
            console.log('Ethereum Address:', ethereumAddress);
        </script>

        <script>
            document.getElementById('DestinationOptions').addEventListener('change', function(e) {
                var wallet2 = e.target.options[e.target.selectedIndex].getAttribute('id');
                console.log(wallet2);
                var wallet = document.getElementById("wallet_id").value = wallet2;
                //console.log(wallet);
                //wallet.innerHTML= wallet2;
            });
        </script>
    @endpush
@endsection
