<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MindChain Wallet</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
  ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
  ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- font awsome cdn icon
  ============================================ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css')}}" />
    <!-- Bootstrap CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assetsnew/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
  ============================================ -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- nalika Icon CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assetsnew/css/nalika-icon.css') }}">
    <!-- owl.carousel CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assetsnew/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsnew/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsnew/css/owl.transitions.css') }}">
    <!-- animate CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assetsnew/css/animate.css') }}">
    <!-- normalize CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assetsnew/css/normalize.css') }}">
    <!-- meanmenu icon CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assetsnew/css/meanmenu.min.css') }}">
    <!-- main CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assetsnew/css/main.css') }}">
    <!-- morrisjs CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assetsnew/css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assetsnew/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assetsnew/css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsnew/css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assetsnew/css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsnew/css/calendar/fullcalendar.print.min.css') }}">
    <!-- style CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assetsnew/style.css') }}">
    <!-- responsive CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('assetsnew/css/responsive.css') }}">
    <!-- modernizr JS
  ============================================ -->
    <script src="{{ asset('assetsnew/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="authinatication">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 auth-left-side">
                    <div class="auth-img-sec">
                        <div class="side-image">
                            <img src="assetsnew/img/background/bg-image.png" alt="">
                        </div>
                        <div class="social-icons">
                            <ul>
                                <li><a href="https://www.facebook.com/mindchain.info"><i class="fab fa-facebook"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="https://twitter.com/MindChain1"><i class="fab fa-twitter"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCogQYyfu7ista6L1X8SQluw"><i
                                            class="fab fa-youtube" aria-hidden="true"></i></a></li>
                                <li><a href="https://t.me/mindchainMIND"><i class="fab fa-telegram-plane"
                                            aria-hidden="true"></i></a></li>

                                <li><a href="https://discord.com/channels/910149384858136587/910149385302720513"><i
                                            class="fab fa-discord" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.reddit.com/user/Mindchainswap"><i class="fab fa-reddit-alien"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="https://medium.com/@mindchain"><i class="fab fa-medium-m"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="auth-data">
                        <div class="auth-logo-sec">
                            <img src="assetsnew/img/logo/logo.png" alt="">
                        </div>
                        <div class="auth-heading mg-b-30">
                            <h5>Welcome To Mindchain</h5>
                        </div>
                        <form method="POST" action="{{ route('registration') }}">
                          @csrf

                            <div class="form-group">
                                <label for="userName" class="col-form-label">Username <span>*</span></label>
                                <input type="text" class="form-control" name="user_name"
                                    class="form-style @error('user_name') is-invalid @enderror" placeholder="User Name"
                                    id="logname" autocomplete="off">
                                <svg width="18" height="20" viewBox="0 0 20 23" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    @error('user_name')
                                        <span class="alert alert-danger" role="alert" >
                                            {{ $message }}
                                        </span>
                                    @enderror
                                    <path
                                        d="M9.625 11.75C7.64844 11.75 5.84375 10.7188 4.85547 9C3.86719 7.32422 3.86719 5.21875 4.85547 3.5C5.84375 1.82422 7.64844 0.75 9.625 0.75C11.5586 0.75 13.3633 1.82422 14.3516 3.5C15.3398 5.21875 15.3398 7.32422 14.3516 9C13.3633 10.7188 11.5586 11.75 9.625 11.75ZM7.64844 13.8125H11.5586C15.8125 13.8125 19.25 17.25 19.25 21.5039C19.25 22.1914 18.6484 22.75 17.9609 22.75H1.24609C0.558594 22.75 0 22.1914 0 21.5039C0 17.25 3.39453 13.8125 7.64844 13.8125Z"
                                        fill="white" />
                                </svg>

                            </div>
                            <div class="form-group">
                                <label for="email" class="col-form-label">Your Email <span>*</span></label>
                                <input type="email" class="form-control" name="email"
                                    class="form-style @error('email') is-invalid @enderror" placeholder="Your Email"
                                    id="logemail" autocomplete="off" required>
                                <svg width="18" height="20" viewBox="0 0 22 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.0625 0.5H19.9375C21.0547 0.5 22 1.44531 22 2.5625C22 3.25 21.6562 3.85156 21.1406 4.23828L11.8164 11.2422C11.3008 11.6289 10.6562 11.6289 10.1406 11.2422L0.816406 4.23828C0.300781 3.85156 0 3.25 0 2.5625C0 1.44531 0.902344 0.5 2.0625 0.5ZM0 5.3125L9.32422 12.3594C10.3125 13.0898 11.6445 13.0898 12.6328 12.3594L22 5.3125V14.25C22 15.7969 20.7539 17 19.25 17H2.75C1.20312 17 0 15.7969 0 14.25V5.3125Z"
                                        fill="white" />
                                </svg>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-form-label">Password <span>*</span></label>
                                <input type="password" class="form-control" name="password" class="form-style @error('password') is-invalid @enderror" placeholder="Your Password" id="password4" autocomplete="off" required>
                                <svg width="18" height="20" viewBox="0 0 20 23" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.1875 6.9375V9H13.0625V6.9375C13.0625 5.04688 11.5156 3.5 9.625 3.5C7.69141 3.5 6.1875 5.04688 6.1875 6.9375ZM3.4375 9V6.9375C3.4375 3.54297 6.1875 0.75 9.625 0.75C13.0195 0.75 15.8125 3.54297 15.8125 6.9375V9H16.5C18.0039 9 19.25 10.2461 19.25 11.75V20C19.25 21.5469 18.0039 22.75 16.5 22.75H2.75C1.20312 22.75 0 21.5469 0 20V11.75C0 10.2461 1.20312 9 2.75 9H3.4375Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword" class="col-form-label">Confirm Password
                                    <span>*</span></label>
                                <input type="password" class="form-control" id="password5" type="password" name="password_confirmation" class="form-style" placeholder="Password Confirm" autocomplete="off" required>
                                <svg width="18" height="20" viewBox="0 0 20 23" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.1875 6.9375V9H13.0625V6.9375C13.0625 5.04688 11.5156 3.5 9.625 3.5C7.69141 3.5 6.1875 5.04688 6.1875 6.9375ZM3.4375 9V6.9375C3.4375 3.54297 6.1875 0.75 9.625 0.75C13.0195 0.75 15.8125 3.54297 15.8125 6.9375V9H16.5C18.0039 9 19.25 10.2461 19.25 11.75V20C19.25 21.5469 18.0039 22.75 16.5 22.75H2.75C1.20312 22.75 0 21.5469 0 20V11.75C0 10.2461 1.20312 9 2.75 9H3.4375Z"
                                        fill="white" />
                                </svg>
                            </div>

                            @error('email')
                                <span class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror

                            @if (isset($_GET['ref']))
                                @php
                                    $key = App\Models\User::where('key_id', $_GET['ref'])->first();
                                    if ($key == null) {
                                        $key_id = $_GET['ref'];
                                    } else {
                                        $key_id = $key->user_name;
                                    }
                                @endphp
                                <div class="form-group">
                                    <label for="sponsor" class="col-form-label">Sponsor</label>
                                    <input type="text" class="form-control" value="{{ $key_id }}"
                                        name="sponsor" id="sponsor" class="form-style" placeholder="Sponsor"
                                        autocomplete="off">
                                    <i class="input-icon uil uil-game-structure"></i>

                                    <svg width="23" height="20" viewBox="0 0 30 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.25 10.25H15.75H16.25ZM20.25 14.25L20.25 14.75L20.25 14.25ZM29.8536 14.6036C30.0488 14.4083 30.0488 14.0917 29.8536 13.8964L26.6716 10.7145C26.4763 10.5192 26.1597 10.5192 25.9645 10.7145C25.7692 10.9097 25.7692 11.2263 25.9645 11.4216L28.7929 14.25L25.9645 17.0784C25.7692 17.2737 25.7692 17.5903 25.9645 17.7855C26.1597 17.9808 26.4763 17.9808 26.6716 17.7855L29.8536 14.6036ZM15.75 3.75L15.75 10.25H16.75L16.75 3.75L15.75 3.75ZM20.25 14.75L29.5 14.75L29.5 13.75L20.25 13.75L20.25 14.75ZM15.75 10.25C15.75 12.7353 17.7647 14.75 20.25 14.75L20.25 13.75C18.317 13.75 16.75 12.183 16.75 10.25H15.75Z"
                                            fill="white" />
                                        <path
                                            d="M9.625 11.75C7.64844 11.75 5.84375 10.7188 4.85547 9C3.86719 7.32422 3.86719 5.21875 4.85547 3.5C5.84375 1.82422 7.64844 0.75 9.625 0.75C11.5586 0.75 13.3633 1.82422 14.3516 3.5C15.3398 5.21875 15.3398 7.32422 14.3516 9C13.3633 10.7188 11.5586 11.75 9.625 11.75ZM7.64844 13.8125H11.5586C15.8125 13.8125 19.25 17.25 19.25 21.5039C19.25 22.1914 18.6484 22.75 17.9609 22.75H1.24609C0.558594 22.75 0 22.1914 0 21.5039C0 17.25 3.39453 13.8125 7.64844 13.8125Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                @else
                                <div class="form-group">
                                  <label for="sponsor" class="col-form-label">Sponsor</label>
                                  <input type="text" class="form-control" value=""
                                      name="sponsor" id="sponsor" class="form-style" placeholder="Sponsor"
                                      autocomplete="off">
                                  <i class="input-icon uil uil-game-structure"></i>

                                  <svg width="23" height="20" viewBox="0 0 30 24" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M16.25 10.25H15.75H16.25ZM20.25 14.25L20.25 14.75L20.25 14.25ZM29.8536 14.6036C30.0488 14.4083 30.0488 14.0917 29.8536 13.8964L26.6716 10.7145C26.4763 10.5192 26.1597 10.5192 25.9645 10.7145C25.7692 10.9097 25.7692 11.2263 25.9645 11.4216L28.7929 14.25L25.9645 17.0784C25.7692 17.2737 25.7692 17.5903 25.9645 17.7855C26.1597 17.9808 26.4763 17.9808 26.6716 17.7855L29.8536 14.6036ZM15.75 3.75L15.75 10.25H16.75L16.75 3.75L15.75 3.75ZM20.25 14.75L29.5 14.75L29.5 13.75L20.25 13.75L20.25 14.75ZM15.75 10.25C15.75 12.7353 17.7647 14.75 20.25 14.75L20.25 13.75C18.317 13.75 16.75 12.183 16.75 10.25H15.75Z"
                                          fill="white" />
                                      <path
                                          d="M9.625 11.75C7.64844 11.75 5.84375 10.7188 4.85547 9C3.86719 7.32422 3.86719 5.21875 4.85547 3.5C5.84375 1.82422 7.64844 0.75 9.625 0.75C11.5586 0.75 13.3633 1.82422 14.3516 3.5C15.3398 5.21875 15.3398 7.32422 14.3516 9C13.3633 10.7188 11.5586 11.75 9.625 11.75ZM7.64844 13.8125H11.5586C15.8125 13.8125 19.25 17.25 19.25 21.5039C19.25 22.1914 18.6484 22.75 17.9609 22.75H1.24609C0.558594 22.75 0 22.1914 0 21.5039C0 17.25 3.39453 13.8125 7.64844 13.8125Z"
                                          fill="white" />
                                  </svg>
                              </div>
                                @endif
                                <div id="suggestUser"></div>


                                <div class="form-group d-flex">
                                    <input type="checkbox" class="checkbox" id="checkbox" checked>
                                    <p>I Agree To All <a href="">Terms & Conditions</a></p>
                                </div>
                                <button type="submit">Sign Up</button>

                        </form>
                        <p class="mg-t-15">Already have an account? <a href="{{route('login')}}">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <!-- jquery
  ============================================ -->
    <script src="{{ asset('assetsnew/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
  ============================================ -->
    <script src="{{ asset('assetsnew/js/bootstrap.min.js') }}"></script>
    <!-- wow JS
  ============================================ -->
    <script src="{{ asset('assetsnew/js/wow.min.js') }}"></script>
    <!-- price-slider JS
  ============================================ -->

    <script src="{{ asset('assetsnew/js/countdown-timer.js') }}"></script>
    <!-- Timer counter js file
    ============================================ -->
    <script src="{{ asset('assetsnew/js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
  ============================================ -->
    <script src="{{ asset('assetsnew/js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
  ============================================ -->
    <script src="{{ asset('assetsnew/js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
  ============================================ -->
    <script src="{{ asset('assetsnew/js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
  ============================================ -->
    <script src="{{ asset('assetsnew/js/jquery.scrollUp.min.js') }}"></script>
    <!-- mCustomScrollbar JS
  ============================================ -->
    <script src="{{ asset('assetsnew/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assetsnew/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
  ============================================ -->
    <script src="{{ asset('assetsnew/js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assetsnew/js/metisMenu/metisMenu-active.js') }}"></script>
    <!-- sparkline JS
  ============================================ -->
    <script src="{{ asset('assetsnew/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assetsnew/js/sparkline/jquery.charts-sparkline.js') }}"></script>
    <!-- calendar JS
  ============================================ -->
    <script src="{{ asset('assetsnew/js/calendar/moment.min.js') }}"></script>
    <script src="{{ asset('assetsnew/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assetsnew/js/calendar/fullcalendar-active.js') }}"></script>
    <!-- float JS
  ============================================ -->
    <script src="{{ asset('assetsnew/js/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assetsnew/js/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assetsnew/js/flot/curvedLines.js') }}"></script>
    <script src="{{ asset('assetsnew/js/flot/flot-active.js') }}"></script>
    <!-- plugins JS
  ============================================ -->
    <script src="{{ asset('assetsnew/js/plugins.js') }}"></script>
    <!-- main JS
  ============================================ -->
    <script src="{{ asset('assetsnew/js/main.js') }}"></script>

    <script>
        $('.moreless-button').click(function() {
            $('.moretext').slideToggle();
            if ($('.moreless-button').text() == "Load more") {
                $(this).text("Load less")
            } else {
                $(this).text("Load more")
            }
        });
    </script>

<script>
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>
      <script>
$("body").on("keyup", "#sponsor", function () {
//alert('success');
   let searchData = $("#sponsor").val();
   if (searchData.length > 0) {
       $.ajax({
           method: 'POST',
           url: '{{route("get-sponsor")}}',
           data: {search: searchData,
            _token: '{{ csrf_token() }}'
          },
           headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
           success: function (result) {
               $('#suggestUser').html(result.success)
               console.log(result.data)
               // if (result.data) {
               //     $("#position").val("");
               //     $("#placement_id").val("");
               //     $("#position").removeAttr('disabled');
               // } else {
               //     $("#position").val("");
               //     $("#placement_id").val("");
               //     $('#position').prop('disabled', true);
               // }
           }
       });
   }
   if (searchData.length < 1) $('#suggestUser').html("")
})


//Check from frontend your name and email is already taken or not
$(document).ready(function() {
$('#logname, #logemail').on('blur', function() {
    var username = $('#logname').val();
    var email = $('#logemail').val();

    $.ajax({
        url: '{{ route('checkDuplicate') }}', // Replace with your route to check duplicates
        method: 'POST',
        data: {
            username: username,
            email: email,
            _token: '{{ csrf_token() }}'
        },
        success: function(response) {
            console.log(response.username_taken); // Log the response to the browser console
            if (response.username_taken) {
                $('#errorMessages').html('Username already taken.').show();
            } else if (response.email_taken) {
                $('#errorMessages').html('Email already taken.').show();
            } else {
                $('#errorMessages').hide().empty();
            }
        },
        error: function() {
            $('#errorMessages').html('Error occurred. Please try again.').show();
        }
    });
});
});




</script>
</body>

</html>
