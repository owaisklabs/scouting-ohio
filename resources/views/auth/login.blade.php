<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="National Specialist Database">
    <meta name="robots" content="index, follow" />
    <title>{{env('APP_NAME') . ' | Login'}}</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body >

    <div class="loginMain admin csAdmino" style="background:url({{asset('img/1x/footballbac.jpg')}}) no-repeat 0px / cover;">
        <div class="row">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="col-lg-3 col-md-8 col-sm-10 col-xs-10 text-center signupDin">
                    <div class=" text-center  fadeInRight"  >
                        <a href="{{route('home')}}">
                            <img src="{{asset('img/1x/logo.png')}}" height="" width="" alt="">
                        </a>
                    </div>
                    <h1 class=" mt-40 mb2 flipInX" >
                        ADMIN PANEL
                    </h1>
                    <!-- <div class="useEmail mt-40   flipInY" >
                        Use your email to sign up or login
                    </div> -->
                    <div class="nameInp mt-40">
                        <input type="text" placeholder="Email" name="email" class=" zoomIn">
                    </div>
                    <div class="nameInp mt-50 text-left">
                        <input type="password" placeholder="Password" name="password" class=" zoomIn">
                        <br/>
                        <!-- @if (Route::has('password.request'))
                            <label class=" fadeInDown" >
                                <a href="{{ route('password.request') }}">Forgot password?</a>
                            </label>
                        @endif -->
                    </div>
                    <div>
                        <div class="col-lg-12 text-center">
                            <button type="submit" class=" fadeInUp mt2" >Sign in</button>
                        </div>
                        <!-- <div class="col-lg-12 mt-20  bounceIn" >
                            <div class="orLine"><span>Or</span></div>
                        </div>
                        <div class="col-lg-12 text-center  fadeInDown"  >
                            <a href="signup.html" class="" >
                                <button >Sign up</button>
                            </a>
                        </div> -->
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- owl carosal -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" integrity="sha512-Rd5Gf5A6chsunOJte+gKWyECMqkG8MgBYD1u80LOOJBfl6ka9CtatRrD4P0P5Q5V/z/ecvOCSYC8tLoWNrCpPg==" crossorigin="anonymous"></script>
   <script>
   new WOW().init();
   </script>
   <script src="{{asset('js/main.js')}}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"></script>
   <script>
       $('.owl-carousel').owlCarousel({
           loop:true,
           margin:20,
           nav:true,
           dots: false,
           responsive:{
               0:{
                   items:1
               },
               600:{
                   items:1
               },
               1000:{
                   items:3
               },
               2000:{
                   items:5
               }
           }
       })
   </script>
   <noscript>Your browser does not support JavaScript!</noscript>
</body>
</html>
