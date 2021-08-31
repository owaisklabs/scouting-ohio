<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config('app.name')}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php
        $url = $_SERVER['REQUEST_URI'];
        $path;$dash ;
        if(strpos($url,"dashboard")){
            $path = '../';
            $dash = 'dashboard';
        }else{
            $path = null;
            $dash = null;
        }
    ?>

    <!-- <script>
        var head = document.getElementsByTagName('head')[0];
        var css = document.createElement("link");
        css.rel = "stylesheet";
        const url = window.location.href;
        if(url.includes('dashboard')){
            css.href = '../assets/css/main.css'
        }else{
            css.href = 'assets/css/main.css'
        }
        head.appendChild(css);
    </script> -->
    {{-- assets/css/main.css --}}
    <script src="https://www.paypal.com/sdk/js?client-id=AV1x3Rq6Ao-Z9G-FBTOrS9neOeRHH5M_mvFd4I3332n8w3luqDNhwNwfFS53AX24zcM85r8dzfSjGi4W"></script>
    <!-- fab -->
    <link rel="shortcut icon" href="{{get_favicon_logo()}}" type="image/x-icon">
    <!-- styles -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- font-awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- wow -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    {{-- sweet Aleart --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <!-- owl -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>

{{-- Nav --}}

<nav class="navbar navbar-expand-lg sticky-top" id="navbar">
    <div class="container-fluid <?php echo $dash?> green">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{get_main_logo()}}" height="" width="" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="togglerNav">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php if (stripos($_SERVER['REQUEST_URI'],'home') !== false) {echo 'active';} ?>"
                        aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <!-- <li class="nav-item">
            <a class="nav-link" href="<?php echo $path?>feeds.php">Feeds</a>
          </li> -->
                <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php if (stripos($_SERVER['REQUEST_URI'],'feeds.php') !== false) {echo 'active';} ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Feeds
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo $path?>feeds.php">Articles</a>
              <a class="dropdown-item" href="<?php echo $path?>feeds.php">News</a>
              <a class="dropdown-item" href="<?php echo $path?>feeds.php">HeadLines</a>
            </div>
          </li> -->
                <!-- <li class="nav-item">
            <a class="nav-link" href="#">Registration</a>
          </li> -->
                <li class="nav-item">
                    <a class="nav-link " href="#" data-bs-toggle="modal" data-bs-target="#searchmodal">Search</a>
                </li>
                <!-- Collage Private Search -->
                @auth
                @if (Auth::user()->type=="college coach")
                <li class="nav-item">
                    <a class="nav-link " href="#" data-bs-toggle="modal" data-bs-target="#privateSearch">Private
                        Search</a>
                </li>
                @endif
                @endauth

                <li class="nav-item">
                    <a class="nav-link <?php if (stripos($_SERVER['REQUEST_URI'],'players') !== false) {echo 'active';} ?>"
                        href="{{route('players')}}">Players</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if (stripos($_SERVER['REQUEST_URI'],'coaches') !== false) {echo 'active';} ?>"
                        href="{{route('coaches')}}">Coaches</a>
                </li>

            </ul>
            @auth
            @if (auth()->user()->type =="Player"||auth()->user()->type =="high school coach" || auth()->user()->type =="college coach" )
            <div class="extras d-flex">
                <form method="POST" action="{{route('logout')}}">
                    @csrf

                    <button type="submit" style="font-family: bebuseRegular;
            color: #3c3c3c;
            padding: 9px 30px 5px 30px;
            background-color: #55d729;
            border: none;">Log Out</button>
                </form>
                <a href="{{url('/')}}">
                    <button>My Profile</button>
                </a>
            </div>
            @else
            <div class="extras d-flex">
                <a href="{{route('web_register')}}">
                    <button>Registration</button>
                </a>
                <a href="{{route('web_login')}}">
                    <button>Login</button>
                </a>
            </div>

            @endauth
            @else
            <div class="extras d-flex">
                <a href="{{route('web_register')}}">
                    <button>Registration</button>
                </a>
                <a href="{{route('web_login')}}">
                    <button>Login</button>
                </a>
            </div>

            @endif




            <div class="d-flex socialead">
                @auth
                @if (Auth::user()->type=="Player")
                <a  href="javascript:void(0)" class="gotoNotif seenNotification"><i class="fa fa-bell bell-not"><span class="badge not-badge">{{notificationCount()}}</span></i></a>
                @endif
                @endauth

                <a href="{{get_setting_by_key('Instagram')}}" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="{{get_setting_by_key('Facebook')}}" target="_blank"><i class="fa fa-facebook-f"></i></a>
                <a href="{{get_setting_by_key('Twitter')}}" target="_blank"><i class="fa fa-twitter"></i></a>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid my-scrollbar" data-scrollbar>
    @yield('content')

    <div class="whiteDiv <?php echo $dash?>">

    </div>
    <footer>
        <div class="roundLogo">
            <a href="{{route('home')}}">
                <img src="{{get_footer_logo()}}" height="100%" width="100%" alt="">
            </a>
        </div>
        <div class="row g-0">
            <div class="col-lg-4">
                <div class="fHead">
                    Main
                </div>
                <div class="Fsub">
                    <a href="{{route('home')}}">Home</a>
                </div>
                <!-- <div class="Fsub">
                    <a href="<?php echo $path?>feeds.php">Feeds</a>
                </div> -->
                <div class="Fsub">
                    <a href="{{route('web_register')}}">Registration</a>
                </div>
                <div class="Fsub">
                    <a href="javascript:void()" data-bs-toggle="modal" data-bs-target="#searchmodal">Seacrh</a>
                </div>
                <div class="Fsub">
                    <a href="{{route('players')}}">Player Page</a>
                </div>
            </div>
            {{-- <div class="col-lg-3 aboutCol">
                <div class="fHead">
                    About
                </div>
                <div class="Fsub">
                    <a href="{{route('home')}}">Home</a>
                </div>
                <div class="Fsub">
                    <a href="{{route('web_register')}}">Registration</a>
                </div>
                <div class="Fsub">
                    <a href="javascript:void()"data-bs-toggle="modal" data-bs-target="#searchmodal">Seacrh</a>
                </div>
                <div class="Fsub">
                    <a href="{{route('players')}}">Player Page</a>
                </div>
            </div> --}}
            <div class="col-lg-2">
                <div class="fHead">
                    Social
                </div>
                <div class="Fsub pld">
                    <a href="{{get_setting_by_key('Facebook')}}"><i class="fa fa-facebook-f"></i></a>
                </div>
                <div class="Fsub pld">
                    <a href="{{get_setting_by_key('Instagram')}}"><i class="fa fa-instagram"></i></a>
                </div>
                <div class="Fsub pld">
                    <a href="{{get_setting_by_key('Twitter')}}"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="Fsub pld">
                    <a href="{{get_setting_by_key('Youtube')}}"><i class="fa fa-youtube-play"></i></a>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <div class="fHead">
                    Subscribe our Newsletter
                </div>
                <div class="sybH">
                    {{get_setting_by_key('Footer')}}
                </div>
                <input type="email" name="email" id="email" placeholder="Email Address">
                <button class="allBtn btn-submit" id="btn-submit">Send</button>
            </div>
        </div>
        <div class="col-lg-12 text-center allright mt2">
            All copyrights reserved 2021 by <a href="https://scoutingohio.com" target="_blank">{{config('app.name');}}</a>  Develop By <a href="http://designprosca.com/" target="_blank">design pros usa</a>
        </div>
    </footer>
</div>


{{-- footer --}}



<div class="modal fade" id="exampleModalVideo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <i class="fa fa-times" data-bs-dismiss="modal" aria-label="Close"></i>
                <iframe width="100%" height="430" src="https://www.youtube.com/embed/fey4tGWYFHU"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div class="modal fade exampleModal" id="exampleModalArrr" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex flex-wrap">
                    <div class="imga">
                        <form action="{{route('player-article')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="">Upload Image</label>
                            {{-- <div class="uploadAble image article">
                                <i class="fa fa-plus"></i>
                                <input type="file" class="articleInp" hidden name="article_img">
                                <img src="" alt="" height="100%" width="100%" id="output" class=""
                                    hidden>
                                <input type="hidden" name="hidden_id">
                                <input type="hidden" name="img_name">
                            </div> --}}
                            <div class="uploadAble image ">
                                <i class="fa fa-plus"></i>
                                <input type="file" required class="articleInp imageInput2" hidden name="hudl_thumbnail">
                                <img src="" alt="" height="100%" width="100%" id="output" class="hudl_img"
                                    hidden>
                                <input type="hidden" name="hidden_id">
                                <input type="hidden" name="img_name">
                            </div>
                    </div>
                    <div class="content">
                        <div class="d-flex flex-column">
                            <label for="">Title</label>
                            <input type="text" name="title">
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="mt0p">Article Link</label>
                            <input type="text" name="aticle_link">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt2">
                    <button type="button" class="closeModal">Cancel</button>
                    <button type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade exampleModal" id="exampleModalCOAH" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex flex-wrap">
                    <!-- <div class="imga">
                            <label for="">Upload Image</label>
                            <div class="uploadAble image article" >
                                <i class="fa fa-plus"></i>
                                <input type="file" class="articleInp" hidden>
                                <img src="" alt="" height="100%" width="100%" id="output" class="uploadAble nn article" hidden>
                            </div>
                        </div> -->
                    <form action="{{route('addtional-coach')}}" method="POST" class="w-100">
                        @csrf
                        <div class="content" style="margin: 0;">
                            <div class="d-flex flex-column">
                                <label for="">Name</label>
                                <input type="text" name="name">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="" class="mt0p">Email Address</label>
                                <input type="email" name="email">
                            </div>
                        </div>
                </div>
                <div class="d-flex justify-content-end mt2">
                    <button type="button" class="closeModal" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade exampleModal" id="editexampleModalCOAH" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex flex-wrap">
                    <!-- <div class="imga">
                            <label for="">Upload Image</label>
                            <div class="uploadAble image article" >
                                <i class="fa fa-plus"></i>
                                <input type="file" class="articleInp" hidden>
                                <img src="" alt="" height="100%" width="100%" id="output" class="uploadAble nn article" hidden>
                            </div>
                        </div> -->
                    <form action="{{route('addtional-coach-update')}}" method="POST" class="w-100">
                        @csrf
                        <div class="content" style="margin: 0;">
                            <div class="d-flex flex-column">
                                <label for="">Name</label>
                                <input type="text" name="name">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="" class="mt0p">Email Address</label>
                                <input type="hidden" name="id" id="">
                                <input type="email" name="email">
                            </div>
                        </div>
                </div>
                <div class="d-flex justify-content-end mt2">
                    <button type="button" class="closeModal" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- add videos -->
<div class="modal fade exampleModal" id="exampleModaVideos" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            {{-- <div class="modal-body">
                <div class="d-flex flex-wrap">
                    <div class="content" style="margin: 0px;">
                        <div class="d-flex flex-column">
                            <form action="{{route("user-video")}}" method="POST">
                                @csrf
                                <div class="img you">
                                    <img src="{{asset('img/SVG/hudl.svg')}}" height="44px" width="80px" alt="">
                                </div>
                                <input type="text" name="hudl_link">
                                <input type="hidden" name="hidden_id">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt2">
                    <button type="button" class="closeModal">Cancel</button>
                    <button type="submit"> Save</button>
                </div>
                </form>
            </div> --}}
            <form action="{{route("user-video")}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="modal-body">
                <div class="d-flex flex-wrap">
                    <div class="imga">
                        <label for="">Upload Image</label>
                        <div class="uploadAble image ">
                            <i class="fa fa-plus"></i>
                            <input type="file" class="articleInp imageInput" hidden name="hudl_thumbnail">
                            <img src="" alt="" height="100%" width="100%" id="output" class="hudl_img"
                                hidden>
                            <input type="hidden" name="hidden_id">
                            <input type="hidden" name="img_name">
                        </div>
                    </div>
                    <div class="content">
                        <div class="d-flex flex-column">
                            <div class="img you">
                                <img src="{{asset('img/SVG/hudl.svg')}}" height="44px" width="80px" alt="">
                            </div>
                            <input type="text" name="hudl_link" required class="hudl_link">
                            <input type="hidden" name="hidden_id">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt2">
                    <button type="button" class="closeModal">Cancel</button>
                    <button type="submit">Save</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalDetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->
            <div class="modal-body">

                <div class="d-flex offers flex-column">
                    <div class="img">
                        <img src="{{asset('img/1x/user4.png')}}" alt="">
                    </div>
                    <div class="pName">
                        <label for="">Player Name:</label>
                        <div class="namePl">Chandler Bing</div>
                    </div>
                </div>
                <label for="" class="mt3 ">Offers:</label>
                <div class="row">
                    <!-- <div class="col-lg-6 namePl mt1">Southlake,TX</div> -->
                    <p class='namePl mt1'>
                        Southlake,TX
                    </p>
                </div>

            </div>
            <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
@extends('web.common.searchmodel')
@extends('web.common.scripts')

</body>
<style>
    .swal-button {

        background-color: #63BB46
    }

    .swal-button:not([disabled]):hover {
        background-color: #338119;
    }

</style>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $('.seenNotification').click(function(){
        // debugger
        var url = '{{ route('test') }}';
        $.ajax({
        url: url,
        type: 'POST',
        data: {id: "{{ Auth::user()->id ?? ""}}"},
        datatype: 'json',
        success: function (data) {
            console.log(data);
            window.location.href = "{{route('player-dashboard')}}"
        },
        error: function (errorThrown) { console.log(errorThrown); }
    });

    })
     @if(Session::has('notVerified'))
    // console.log('kdkdkdk')
    swal({
        icon: "error",
        text: "Your Profile is not approve yet, Please try later"
    });
    @endif
     @if(Session::has('credentialsnot'))
    // console.log('kdkdkdk')
    swal({
        icon: "error",
        title:"error",
        text: "The provided credentials do not match our records"
    });
    @endif

    var imgBtn = document.getElementById('updateImages')
    $("#coverPic").change(function () {
        imgBtn.click();
    });
    $("#profilePic").change(function () {
        imgBtn.click();
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit").click(function (e) {
        if ($('#email').val() == '') {
            swal({
                icon: "warning",
                text: "Email filed is required"
            });
        } else {
            // console.log('Working fine')

            e.preventDefault();
            var email = $("input[name=email]").val();
            // console.log(email)
            var url = '{{ url('subscription-store') }}';
            console.log(url)
            $.ajax({
                url: url,
                method: "POST",
                data: {
                    email: email
                },
                success: function (response) {
                    if (response.status === "success") {
                        swal({
                            icon: "success",
                            text: "Successfully Subscribed"
                        });
                    }
                    if (response.status === "already") {
                        swal({
                            icon: "warning",
                            text: "Your Already Subscribed"
                        });
                    }

                },
            });
        }
    });
    $(function () {
        $('.selectpicker').selectpicker();
    });

</script>

</html>
