@extends('web.layouts.master')
@section('content')
<div class="dahboardMain">
    <div class="row g-0">
        <div class="col-lg-3 siderCol">
            <div class="sider">
                <ul class="nav nav-pills flex-column justify-content-center gap-1" id="pills-tab" role="tablist">
                    <li class="nav-item" role="BasicInfo">
                        <button class="nav-link active" id="pills-BasicInfo-tab" data-bs-toggle="pill" data-bs-target="#pills-BasicInfo" type="button" role="tab" aria-controls="pills-BasicInfo" aria-selected="true">Basic Info</button>
                    </li>
                    <li class="nav-item" role="Articles">
                        <button class="nav-link" id="pills-Articles-tab" data-bs-toggle="pill" data-bs-target="#pills-Articles" type="button" role="tab" aria-controls="pills-additionalCoaches" aria-selected="false">Aditional Coaches</button>
                    </li>
                    <li class="nav-item" role="Player'sFriends">
                        <button class="nav-link" id="pills-Friends-tab" data-bs-toggle="pill" data-bs-target="#pills-Friends" type="button" role="tab" aria-controls="pills-additionalCoaches" aria-selected="false">Player's Mutual Friends</button>
                    </li>
                    <li class="nav-item" role="ChangePassword">
                        <button class="nav-link" id="pills-ChangePassword-tab" data-bs-toggle="pill" data-bs-target="#pills-ChangePassword" type="button" role="tab" aria-controls="pills-ChangePassword" aria-selected="false">Change Password</button>
                    </li>
                    <li class="nav-item" role="Logout">
                        <button class="nav-link" id="pills-Logout-tab" data-bs-toggle="pill" data-bs-target="#pills-Logout" type="button" role="tab" aria-controls="pills-Logout" aria-selected="false">Logout</button>
                    </li>
                </ul>

            </div>
            <i class="fa fa-indent"></i>
        </div>
        <div class="col-lg-9">
            <div class="tab-content" id="pills-tabContent">

                <!-- profile Common -->
                <!-- <div class="profileSec">
                    <div class="cover">
                        <div class="back" style="background: url(../assets/img/1x/cover-8.png) no-repeat center center / cover;">
                            <img src="../assets/img/1x/greenbg-8.png" alt="">
                        </div>
                        <div class="proPic d-flex gap-2">
                            <div class="img">
                                <img src="../assets/img/1x/coach.jpg" alt="">
                            </div>
                            <div class="btns">
                                <button>Upload New Picture</button>
                                <button>Delete</button>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- tab1 -->
                @include('web.dashboard.coach.tab1')

                <!-- tab2 -->
                @include('web.dashboard.coach.tab2')

                <!-- tab 3 -->
                @include('web.dashboard.coach.tab3')


                <!-- tab4 -->
                @include('web.dashboard.coach.tab4')

                <!-- tab5-->


            </div>
        </div>
    </div>
</div>
@endsection
