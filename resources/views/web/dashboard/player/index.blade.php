@extends('web.layouts.master')

@section('content')
    <div class="dahboardMain">
        <div class="row g-0">
            <div class="col-lg-3 siderCol">
                <div class="sider">
                    <ul class="nav nav-pills flex-column justify-content-center gap-1" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-notification-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-notification" type="button" role="tab"
                                aria-controls="pills-notification" aria-selected="false">Notifications</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-BasicInfo-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-BasicInfo" type="button" role="tab" aria-controls="pills-BasicInfo"
                                aria-selected="true">Basic Info</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-CombineResult-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-CombineResult" type="button" role="tab"
                                aria-controls="pills-CombineResult" aria-selected="false">Combine Result</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Scholarship-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Scholarship" type="button" role="tab"
                                aria-controls="pills-Scholarship" aria-selected="false"> Honors - Awards</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="pills-Academic-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Academic" type="button" role="tab" aria-controls="pills-Academic"
                                aria-selected="true">Academic Info</button>
                        </li>
                        <!-- <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-OfficialAcademic-tab" data-bs-toggle="pill" data-bs-target="#pills-OfficialAcademic" type="button" role="tab" aria-controls="pills-OfficialAcademic" aria-selected="false">Official Academic</button>
                        </li> -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-PersonalInfo-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-PersonalInfo" type="button" role="tab"
                                aria-controls="pills-PersonalInfo" aria-selected="false">Personal Info</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-ScholarshipOffers-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-ScholarshipOffers" type="button" role="tab"
                                aria-controls="pills-ScholarshipOffers" aria-selected="false">Scholarship Offers</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="pills-PEvaluation-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-PEvaluation" type="button" role="tab"
                                aria-controls="pills-PEvaluation" aria-selected="true">Player Evaluation</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-MyLinks-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-MyLinks" type="button" role="tab" aria-controls="pills-MyLinks"
                                aria-selected="false">My Links</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Videos-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Videos" type="button" role="tab" aria-controls="pills-Videos"
                                aria-selected="false">Videos</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Articles-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Articles" type="button" role="tab" aria-controls="pills-Articles"
                                aria-selected="false">News Articles</button>
                        </li>
                        {{-- <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-friendeq-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-friendeq" type="button" role="tab" aria-controls="pills-friendeq"
                            aria-selected="false">Friends Request</button>
                    </li> --}}

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Friends-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Friends" type="button" role="tab" aria-controls="pills-Friends"
                                aria-selected="false">Friends</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-ChangePassword-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-ChangePassword" type="button" role="tab"
                                aria-controls="pills-ChangePassword" aria-selected="false">Change Password</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                {{ csrf_field() }}
                                <button type="submit" class="nav-link" id="pills-Logout-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-Logout" type="button" role="tab" aria-controls="pills-Logout"
                                    aria-selected="false">Logout</button>
                            </form>
                        </li>
                    </ul>

                </div>
                <i class="fa fa-indent"></i>
            </div>
            <div class="col-lg-9">
                <div class="tab-content" id="pills-tabContent">

                    <!-- profile Common -->
                    <div class="profileSec">
                        <div class="cover">
                            <form action="{{ route('user-profile-upload') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="back"
                                    style="background: url('{{ asset('user_image') . '/' . $user->user_cover }}') no-repeat center center / cover;">
                                    <img src="{{ asset('img/1x/greenbg-8.png') }}" alt="">
                                </div>
                                <div class="proPic d-flex gap-2">
                                    <div class="img">
                                        @if ($user->user_profile)
                                            <img src="{{ asset('user_image') . '/' . $user->user_profile }}" alt="">
                                        @else
                                            <img src="{{ asset('user_image/noimg.jpg') }}" alt="">
                                        @endif

                                    </div>
                                    <div class="btns">
                                        <label for="profilePic">
                                            <div class="btno uploaded" type="button">Upload New Picture</div>
                                            <input type="file" id="profilePic" name="profileImage" hidden>
                                        </label>
                                        <label for="coverPic">
                                            <div class="btno uploaded grey" type="button">Upload Cover Picture</div>
                                            <input type="file" id="coverPic" name="covetImage" hidden>
                                        </label>
                                        <a href=""><button type="submit" id="updateImages" hidden>Update</button></a>
                                        @if ($errors->has('profileImage'))
                                            <div class="error">{{ $errors->first('profileImage') }}</div>
                                        @endif
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <!-- tab1 -->
            @include("web.dashboard.player.tab1")

            <!-- tab2 -->
            @include("web.dashboard.player.tab2")

            <!-- tab3 -->
            @include("web.dashboard.player.tab3")
            <!-- tab4 -->
            @include("web.dashboard.player.tab4")

            <!-- tab5 -->
            @include("web.dashboard.player.tab5")
            <!-- tab6 -->
            @include("web.dashboard.player.tab6")

            <!-- tab7 -->
            @include("web.dashboard.player.tab7")

            <!-- tab8 -->
            @include("web.dashboard.player.tab8")

            <!-- tab9 -->
            @include("web.dashboard.player.tab9")
            {{-- notifaction tab --}}
            @include("web.dashboard.player.tab15")


            <!-- tab 12 -->
            @include("web.dashboard.player.tab12")

            <!-- tab910 -->
            @include("web.dashboard.player.tab10")

            <!-- tab11 -->
            @include("web.dashboard.player.tab11")

            <!-- tab13 -->
            @include("web.dashboard.player.tab13")

            {{-- ScholarshipOffers --}}
            @include("web.dashboard.player.tab14")


            <!-- tab12-->
            <div class="tab-pane fade" id="pills-Logout" role="tabpanel" aria-labelledby="pills-Logout-tab">...
            </div>


        </div>
    </div>
    </div>
    </div>
@endsection
<div class="modal pckg-modal  fade" id="subs-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="row mt1">
                    <div class="col-lg-4 mb1">
                        <div class="premium-card">
                            <div class="premium-pckg">
                                <div class="buy-pckg text-center">
                                    <a href="{{ route('premium-payment') }}">
                                        <p>Players Premium Package (1 Months)</p>
                                    </a>
                                </div>
                                <ul class="content-premium">
                                    <li>Stand out and get in touch with hiring managers</li>
                                </ul>
                                <h1>$9.00</h1>
                                <a href="{{ route('premium-payment') }}">

                                    <button class="premium-btn">Buy Now</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb1">
                        <div class="premium-card">
                            <div class="premium-pckg">
                                <div class="buy-pckg text-center">
                                    <a href="">
                                        <p>Players Premium Package (3 Months)</p>
                                    </a>
                                </div>
                                <ul class="content-premium">
                                    <li>Stand out and get in touch with hiring managers</li>
                                </ul>
                                <h1>$20.00</h1>
                                <a href="{{ route('premium-payment') }}">
                                    <button class="premium-btn">Buy Now</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb1">
                        <div class="premium-card">
                            <div class="premium-pckg">
                                <div class="buy-pckg text-center">
                                    <a href="">
                                        <p>Players Premium Package (1 year)</p>
                                    </a>
                                </div>
                                <ul class="content-premium">
                                    <li>Stand out and get in touch with hiring managers</li>

                                </ul>
                                <h1>$65.00</h1>
                                <a href="{{ route('premium-payment') }}">
                                    <button class="premium-btn">Buy Now</button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
