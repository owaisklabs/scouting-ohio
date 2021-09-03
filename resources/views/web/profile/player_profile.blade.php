@extends('web.layouts.master')

@section('content')

<div class="PprofileMain mainDiv">
    <div class="sliderDiv ">
        <div class="row g-0 flwx-wrape">
            <div class="col-lg-9">

                <div class="profileM">
                    <div class="back"
                        style="background: url({{asset('user_image').'/'.$user->user_cover}}) no-repeat center center / contain;">
                        <img src="{{asset('img/1x/greenbg-8.png')}}" alt="">
                    </div>
                    <div class="proDetails">
                        <div class="d-flex ty">
                            <div class="img">
                                @if ($user->user_profile)
                                <img src="{{asset('user_image').'/'.$user->user_profile}}" height="" width="" alt="">
                                @else
                                <img src="{{asset('img/noplayerimage.png')}}" height="" width="" alt="">
                                @endif
                            </div>
                            <div class="nameD d-flex">
                                <div class="d-flex flex-column w100  justify-content-end">
                                    <h1 class="forMobile">{{$user->name ?? " "}}</h1>
                                    @auth
                                    @if (auth()->user()->type ==='college coach'||auth()->user()->type ==='Caoch')
                                    <div class="btns d-flex gap-2">
                                        @if ($check)
                                        <form action="{{route('remove-friend')}}" method="POST">
                                            @csrf
                                            <button class="unfollow-btn" type="submit">Un Follow</button>
                                            {{-- <button class="msg-btn">Message</button> --}}
                                            <input type="text" name="player_id" value="{{$user->id}}" hidden>
                                        </form>
                                        @else
                                        <form action="{{route('add-friend')}}" method="POST">
                                            @csrf
                                            <button class="add-frnd-btn add-btn" type="submit">Follow</button>
                                            <input type="text" name="player_id" value="{{$user->id}}" hidden>
                                        </form>
                                        @endif


                                        <div class="dots d-flex flex-column">
                                            <i class="fa fa-square"></i>
                                            <i class="fa fa-square"></i>
                                            <i class="fa fa-square"></i>
                                        </div>
                                    </div>
                                    @else
                                    @endauth
                                    @endif
                                    <div class="deta d-flex justify-content-between">
                                        <h1 class="forDesktop">{{$user->name ?? " "}}</h1>
                                        <div class="imgs d-flex">
                                            <div class="forDesktop">
                                                <div class="tfour d-flex justify-content-end ">
                                                   <a href="{{$user->userLink->database_rivals ?? "https://n.rivals.com/" }}" target="_blank"> <img src="{{asset('img/1x/rivals-8.png')}}" height="" width=""
                                                    alt="">
                                                </a>
                                                    <a href="{{$user->userLink->database_24_7 ?? "https://247sports.com/"}}"target="_blank">
                                                        <img src="{{asset('img/1x/24sports-8.png')}}" height="" width=""
                                                        alt="">
                                                    </a>
                                                    <div class="line"></div>
                                                    <a href="{{$user->userLink->youtube ?? "https://www.youtube.com/"}}" target="_blank">
                                                        <img src="{{asset('img/1x/youtube-8.png')}}" height="" width=""
                                                        alt="">
                                                    </a>
                                                    <a href="{{$user->userLink->hudle ?? "https://www.hudl.com/"}}" target="_blank">
                                                    <img src="{{asset('img/1x/hudl-8.png')}}" height="" width="" alt="">
                                                </a>
                                                </div>
                                            </div>
                                            <div class="forMobile mt1">
                                                <div class="tfour d-flex flex-column justify-content-end ">
                                                    <div class="text-center">
                                                        <a href="" target="_blank"> <img src="{{asset('img/1x/rivals-8.png')}}" height="" width=""
                                                            alt="">
                                                        </a>
                                                            <a href=" "target="_blank">
                                                                <img src="{{asset('img/1x/24sports-8.png')}}" height="" width=""
                                                                alt="">
                                                            </a>
                                                    </div>
                                                    <!-- <div class="line"></div> -->
                                                    <div class="text-center">
                                                        <img src="{{asset('img/1x/youtube-8.png')}}" height="" width=""
                                                            alt="">
                                                        <img src="{{asset('img/1x/hudl-8.png')}}" height="" width=""
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="videoTf d-flex gap-3 justify-content-end">
                                                <img src="assets/img/1x/youtube-8.png" height="" width="" alt="">
                                                <img src="assets/img/1x/hudl-8.png" height=""" width="" alt="">
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="basicInfo mt2 ">
                            <div class="col-lg-12 d-flex socialead">
                                <a href="{{$user->userLink->instagram ?? "https://www.instagram.com/"}}" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="{{$user->userLink->facebook ?? "https://www.facebook.com"}}" target="_blank"><i class="fa fa-facebook-f"></i></a>
                                <a href="{{$user->userLink->twitter ?? "https://twitter.com/"}}" target="_blank"><i class="fa fa-twitter"></i></a>
                            </div>

                            <!-- basic info -->
                            <div class="col-lg-12 mt2 mb2">
                                <h4>Basic Info</h4>
                            </div>
                            <div class="row g-0 infosRow">
                                <div class="col-lg-6 col-xxl-4 d-flex align-items-center mb15">
                                    <label for="">Full name:</label> <span>{{$user->name ?? "N/A"}}</span>
                                </div>
                                <div class="col-lg-6 col-xxl-4 d-flex align-items-center mb15">
                                    <label for="">Best College Poition:</label>
                                    <span>{{$user->basicInfo->best_college_poition ?? "N/A"}}</span>
                                </div>

                                <div class="col-lg-6 col-xxl-4 d-flex align-items-center mb15">
                                    <label for="">High School:</label>
                                    <span>{{$user->basicInfo->high_school ?? "N/A"}}</span>
                                </div>
                                <div class="col-lg-6 col-xxl-4 d-flex align-items-center mb15">
                                    <label for="">Offensive:</label>
                                    <span>{{$user->basicInfo->high_school_defensive ?? "N/A"}}</span>
                                </div>

                                <div class="col-lg-6 col-xxl-4 d-flex align-items-center mb15">
                                    <label for="">Class of:</label>
                                    <span>{{$user->basicInfo->class_off ?? "N/A"}}</span>
                                </div>
                                <div class="col-lg-6 col-xxl-4 d-flex align-items-center mb15">
                                    <label for="">Secondary Offensive:</label>
                                    <span>{{$user->basicInfo->secondry_offensive ?? "N/A"}}</span>
                                </div>

                                <div class="col-lg-6 col-xxl-4 d-flex align-items-center mb15">
                                    <label for="">Jersey Number:</label>
                                    <span>{{$user->basicInfo->jersey_number ?? "N/A"}}</span>
                                </div>
                                <div class="col-lg-6 col-xxl-4 d-flex align-items-center mb15">
                                    <label for="">DEFENSIVE:</label>
                                    <span>{{$user->basicInfo->jersey_defensive ?? "N/A"}}</span>
                                </div>

                                <div class="col-lg-6 col-xxl-4 d-flex align-items-center mb15">
                                    <label for="">Height:</label> <span>{{$user->basicInfo->height ?? "N/A"}}</span>
                                </div>
                                <div class="col-lg-6 col-xxl-4 d-flex align-items-center mb15">
                                    <label for="">Secondary DEFENSIVE:</label>
                                    <span>{{$user->basicInfo->secondry_defensive ?? "N/A"}}</span>
                                </div>

                                <div class="col-lg-6 col-xxl-4 d-flex align-items-center mb15">
                                    <label for="">Weight (lbs):</label>
                                    <span>{{$user->basicInfo->weight ?? "N/A"}}</span>
                                </div>
                                <!-- <div class="col-lg-6 col-xxl-4 d-flex align-items-center mb15">
                                    <label for="">Offers:</label> <span>School1, School2, School3, School4, School5, School4, School5 </span>
                                </div> -->
                                <div class="col-lg-6 col-xxl-4 d-flex align-items-center mb15">
                                    <label for="">Special Team Position:</label>
                                    <span>{{$user->basicInfo->special_team_position ?? "N/A"}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="twittercard">
                    <div class="head">Twitter</div>
                    <div class="twwetBy">
                        <span>Tweets By</span> <span>@mark_porter</span>
                    </div>
                    <div class="twwet">
                        <img src="{{asset('img/1x/twitter-8.png')}}" height="" width="" alt="" />
                    </div>
                    <div class="twwetBy two"></div>
                </div>
            </div>
        </div>
        <!-- tabs -->
        <div class="tabsMain">
            <div class="fakeTabs">
                <ul class="nav nav-tabs justify-content-start gap-3" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="CombineResults-tab" data-bs-toggle="tab"
                            data-bs-target="#CombineResults" type="button" role="tab" aria-controls="CombineResults"
                            aria-selected="true">Combine Results</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ScholarshipOffers-tab" data-bs-toggle="tab"
                            data-bs-target="#ScholarshipOffers" type="button" role="tab"
                            aria-controls="ScholarshipOffers" aria-selected="false"> Honors Awards</button>
                    </li>
                    @auth
                    @if (auth()->user()->type === "college coach")
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="AcademicInfo-tab" data-bs-toggle="tab"
                            data-bs-target="#AcademicInfo" type="button" role="tab" aria-controls="AcademicInfo"
                            aria-selected="false">Academic Info</button>
                    </li>
                    @endif
                    @endauth

                    @auth
                    @if (auth()->user()->type === "college coach")
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="PersonalInfo-tab" data-bs-toggle="tab"
                            data-bs-target="#PersonalInfo" type="button" role="tab" aria-controls="PersonalInfo"
                            aria-selected="false">Personal Info</button>
                    </li>
                    @endif
                    @endauth
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="PlayerOffer-tab" data-bs-toggle="tab"
                            data-bs-target="#PlayerOffer" type="button" role="tab" aria-controls="PlayerOffer"
                            aria-selected="false">Offers/Verbals</button>
                    </li>
                    @auth
                    @if (auth()->user()->type === "college coach")

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="PlayerEvaluation-tab" data-bs-toggle="tab"
                            data-bs-target="#PlayerEvaluation" type="button" role="tab" aria-controls="PlayerEvaluation"
                            aria-selected="false">Player Evaluation</button>
                    </li>
                    @endif
                    @endauth

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Videos-tab" data-bs-toggle="tab" data-bs-target="#Videos"
                            type="button" role="tab" aria-controls="Videos" aria-selected="false">Videos</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content mt5" id="myTabContentProfile">
                <!-- tab1 -->
                <div class="tab-pane fade show active" id="CombineResults" role="tabpanel"
                    aria-labelledby="CombineResults-tab">
                    <div class="row g-0 infosRow">

                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">40 yd dash:</label>
                            <span>{{$user->combineResult->ft_40_yard_dash?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Bench Max 1 rep:</label>
                            <span>{{$user->combineResult->bench_max_1_rep?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Bench Reps at 225:</label>
                            <span>{{$user->combineResult->bench_reps_at_225?? "N/A"}}</span>
                        </div>

                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Timed by:</label> <span>{{$user->combineResult->timed_by?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Bench Reps at 185:</label>
                            <span>{{$user->combineResult->bench_reps_at_185?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Squat:</label> <span>{{$user->combineResult->squat?? "N/A"}}</span>
                        </div>

                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">20 yd Shuttle:</label>
                            <span>{{$user->combineResult->ft_20_yd_shuttle?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Vertical Jump:</label>
                            <span>{{$user->combineResult->vertical_jump?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Powerclean:</label> <span>{{$user->combineResult->power_clean?? "N/A"}}</span>
                        </div>

                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">100 Meter Dash:</label>
                            <span>{{$user->combineResult->ft_100_meter_dash?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Broad Jump:</label> <span>{{$user->combineResult->broad_jump?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Deadlift:</label> <span>{{$user->combineResult->dead_lift?? "N/A"}}</span>
                        </div>

                    </div>
                </div>

                <!-- tab2 -->
                <div class="tab-pane fade show " id="ScholarshipOffers" role="tabpanel"
                    aria-labelledby="ScholarshipOffers-tab">
                    <div class="infosRow2">
                        <div class="col-lg-12  mt2">
                            <span>Football post season honors:</span>
                        </div>
                        <p>
                            {{$user->combineResult->football_post_season_honors?? "N/A"}}
                        </p>
                        <div class="col-lg-12  mt2">
                            <span>Football statistics:</span>
                        </div>
                        <p>
                            {{$user->combineResult->football_statics?? "N/A"}}
                        </p>
                        <div class="col-lg-12  mt2">
                            <span>Other Sports and Athletic Honors:</span>
                        </div>
                        <p>
                            {{$user->combineResult->other_sports_and_athletic_honors?? "N/A"}}
                        </p>
                        <div class="col-lg-12  mt2">
                            <span>Hobbies, Extracurricular activities:</span>
                        </div>
                        <p>
                            {{$user->combineResult->Hobbies_extracurricular_activities?? "N/A"}}
                        </p>
                        <div class="col-lg-12  mt2">
                            <span>Camp & combines:</span>
                        </div>
                        <p>
                            {{$user->combineResult->Camp_combines?? "N/A"}}
                        </p>
                        <div class="col-lg-12  mt2">
                            <span>List College recruiting you:</span>
                        </div>
                        <p>
                            {{$user->combineResult->list_college_recruiting_you?? "N/A"}}
                        </p>
                        <div class="col-lg-12  mt2">
                            <span>List official college visits you will tak,/ have taken?:</span>
                        </div>
                        <p>
                            {{$user->combineResult->list_official_college_visits_you_will_tak_have_taken?? "N/A"}}
                        </p>
                    </div>
                </div>

                <!-- tab3 -->
                <div class="tab-pane fade show " id="AcademicInfo" role="tabpanel" aria-labelledby="AcademicInfo-tab">
                    <div class="row g-0 infosRow">
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">GPA:</label> <span>{{$user->academicInfo->gpa?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Transcript:</label> <a href="{{asset('academic_info/1JpZc.pdf')?? "N/A"}}"
                                target="_blank" download><span>dOWNLOAD</span></a>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">dESIRED MAJOR IN COLLEGE:</label>
                            <span>{{$user->academicInfo->desire_majro_in_college?? "N/A"}}</span>
                        </div>


                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">ACT:</label> <span>{{$user->academicInfo->act?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">aTTACH act, sat rESULTS:</label> <a
                                href="{{asset('academic_info/1JpnxiywZc.pdf')?? "N/A"}}" target="_blank"
                                download><span>dOWNLOAD</span></a>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">sat:</label> <span>{{$user->academicInfo->sat?? "N/A"}}/span>
                        </div>


                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Class Rank:</label> <span>{{$user->academicInfo->class_rank?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">fOOTbALL bIO:</label> <a
                                href="{{asset('academic_info/1JpnxiywZc.pdf')?? "N/A"}}" target="_blank"
                                download><span>dOWNLOAD</span></a>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Clearing House Id:</label>
                            <span>{{$user->academicInfo->clearing_house_id?? "N/A"}}</span>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show " id="PlayerOffer" role="tabpanel" aria-labelledby="PlayerOffer-tab">
                    <div class="infosRow2 font-size-18">
                        <div class="col-lg-12  mt2">
                            <span>FBS Division 1 Offers :</span>
                        </div>
                        <p>
                            {{$user->scholarshipOffer[0]->fbs_offers_json ?? "N/A"}}.
                        </p>
                        <div class="col-lg-12  mt3">
                            <span>FBS Division 1 Verbals :</span>
                        </div>
                        <p>
                            {{$user->scholarshipOffer[0]->FBS_division_1_college ?? "N/A"}}.
                        </p>
                        <div class="col-lg-12  mt3">
                            <span>FCS Division 1aa, 2 & 3 Offers :</span>
                        </div>
                        <p>
                            {{$user->scholarshipOffer[0]->fcs_offer_json?? "N/A"}}.
                        </p>
                        <div class="col-lg-12  mt3">
                            <span>FCS Division 1aa, 2 & 3 Verbals:</span>
                        </div>
                        <p>
                            {{$user->scholarshipOffer[0]->division_FCS_division_1aa_2_and_3_college ?? "N/A"}}.
                        </p>
                        <div class="col-lg-12  mt3">
                            <span>List Walk On Offers :</span>
                        </div>
                        <p>
                            {{$user->scholarshipOffer[0]->walkin_offer_json ?? "N/A"}}.
                        </p>
                        <div class="col-lg-12  mt3">
                            <span>Walk On Committment :</span>
                        </div>
                        <p>
                            {{$user->scholarshipOffer[0]->walk_on_committment ?? "N/A"}}.
                        </p>
                    </div>
                </div>

                <!-- tab4 -->
                <div class="tab-pane fade show " id="PersonalInfo" role="tabpanel" aria-labelledby="PersonalInfo-tab">
                    <div class="col-lg-12 mt3">
                        <h6 class="recuri">Personal Info:</h6>
                    </div>
                    <div class="row g-0 infosRow">
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Email Address:</label> <span>{{$user->email ?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Home Adress:</label>
                            <span>{{$user->personalInfo->player_home_address ?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">City:</label> <span>{{$user->personalInfo->player_city ?? "N/A"}}</span>
                        </div>


                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">State:</label> <span>{{$user->personalInfo->player_state ?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">zIP cODE:</label>
                            <span>{{$user->personalInfo->player_zipcode ?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">cOUNTRY:</label> <span>{{$user->personalInfo->player_country ?? "N/A"}}</span>
                        </div>


                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">cELL pHONE nuMBER:</label>
                            <span>{{$user->personalInfo->player_phone_number ?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">sECONDARY nUMBER:</label>
                            <span>{{$user->personalInfo->player_secondry_number ?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">dATE oF bIRTH:</label>
                            <span>{{$user->personalInfo->player_dob ?? "N/A"}}</span>
                        </div>
                    </div>

                    <div class="col-lg-12 mt3">
                        <h6 class="recuri">mALE pARENTS OR gUARDIANS:</h6>
                    </div>
                    <div class="row g-0 infosRow">
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">nAME:</label> <span> {{$user->personalInfo->male_parent_name ?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">pHONE:</label>
                            <span>{{$user->personalInfo->male_parent_phone ?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">EMAIL:</label>
                            <span>{{$user->personalInfo->male_parent_email ?? "N/A"}}</span>
                        </div>


                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Occupation:</label>
                            <span>{{$user->personalInfo->male_parent_occupation ?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">ALMA Mater:</label>
                            <span>{{$user->personalInfo->male_parent_alma_mater ?? "N/A"}}</span>
                        </div>
                    </div>


                    <div class="col-lg-12 mt3">
                        <h6 class="recuri">FemALE pARENTS OR gUARDIANS:</h6>
                    </div>
                    <div class="row g-0 infosRow">
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">nAME:</label> <span>{{$user->personalInfo->female_parent_name ?? "N/A"}}
                            </span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">pHONE:</label>
                            <span>{{$user->personalInfo->female_parent_phone ?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">EMAIL:</label>
                            <span>{{$user->personalInfo->female_parent_email ?? "N/A"}}</span>
                        </div>


                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Occupation:</label>
                            <span>{{$user->personalInfo->female_parent_occupation ?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">ALMA Mater:</label>
                            <span>{{$user->personalInfo->female_parent_alma_mater ?? "N/A"}}</span>
                        </div>
                    </div>

                    <div class="col-lg-12 infosRow mt1">
                        <label for="">Family Member Played</label>
                    </div>
                    <p>
                        {{$user->personalInfo->list_official_college_visits_you_will_tak ?? "N/A"}}
                    </p>
                </div>

                <!-- tab5 -->
                <div class="tab-pane fade show " id="PlayerEvaluation" role="tabpanel"
                    aria-labelledby="PlayerEvaluation-tab">

                    <div class="row g-0 infosRow">
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Player Grade Evaluation:</label>
                            <span>{{$user->playerEvaluation->player_grade_evaluation?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Premium Top Position:</label>
                            <span>{{$user->playerEvaluation->premium_top_position?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Premium Rank:</label>
                            <span>{{$user->playerEvaluation->premium_rank?? "N/A"}}</span>
                        </div>
                    </div>
                    <div class="row g-0 infosRow">
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Head Coach Name:</label>
                            <span>{{$user->playerEvaluation->head_coach_name?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Head Coach Phone (SC or Co) Landline:</label>
                            <span>{{$user->playerEvaluation->head_coach_phone_landline?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Head Coach Phone Cell:</label>
                            <span>{{$user->playerEvaluation->head_coach_phone_cell?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Head COach Email:</label>
                            <span>E{{$user->playerEvaluation->head_coach_email?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Head coach or team Twitter Link:</label>
                            <span>{{$user->playerEvaluation->head_coach_or_team_twitter_link?? "N/A"}}</span>
                        </div>
                    </div>
                    <div class="col-lg-12 mt3">
                        <h6 class="recuri">Recruiting Cordinator or assistant coach:</h6>
                    </div>
                    <div class="row g-0 infosRow">
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Name:</label> <span>{{$user->playerEvaluation->name?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Phone Number:</label>
                            <span>{{$user->playerEvaluation->phone_mumber?? "N/A"}}</span>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center mb15">
                            <label for="">Email:</label>
                            <span>{{$user->playerEvaluation->email?? "N/A"}}</span>
                        </div>
                    </div>
                    <div class="col-lg-12 infosRow">
                        <label for="">Evaluation:</label>
                    </div>
                    <p class="rowI1P">
                        {{$user->playerEvaluation->evaluation?? "N/A"}}
                    </p>

                    <div class="infosRow2 mt3">
                        <div class="col-lg-12  mt2">
                            <span>Best Game film from past season and why?</span>
                        </div>
                        <p>
                            {{$user->playerEvaluation->best_game_film_from_past_season_and_why?? "N/A"}}
                        </p>

                        <div class="col-lg-12  mt2">
                            <span>Best Players on your Team? ( name & Class of):</span>
                        </div>
                        <p>
                            {{$user->playerEvaluation->best_players_on_your_team?? "N/A"}}
                        </p>

                        <div class="col-lg-12  mt2">
                            <span>Best Player You Faced last season?(name & class Of):</span>
                        </div>
                        <p>
                            {{$user->playerEvaluation->best_player_you_faced_last_season?? "N/A"}}
                        </p>

                        <div class="col-lg-12  mt2">
                            <span>Why do you want to play college football? what should college coaches know?</span>
                        </div>
                        <p>
                            {{$user->playerEvaluation->why_do_you_want_to_play_college_football?? "N/A"}}
                        </p>
                    </div>
                </div>

                <!-- tab6 -->
                <div class="tab-pane fade show " id="Videos" role="tabpanel" aria-labelledby="Videos-tab">
                    <div class="videoTabs">
                        <div class="vidos">
                            @foreach ( $user->playervideos as $video)
                            <div class="videoPlay">
                                <!-- <video width="100%" height="100%" controls>
                                    <source src="assets/videos/mov_bbb.mp4" type="video/mp4">
                                    Your browser does not support HTML video.
                                </video> -->
                                <iframe src='{{$video->hudl_link}}' width="100%" height="100%" frameborder='0'
                                    allowfullscreen></iframe>
                            </div>
                            @endforeach
                        </div>
                        <div class="btnso">
                            <i class="fa fa-caret-up"></i>
                            <i class="fa fa-caret-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- player new feed -->
        <div class="playerFeed">
            <div class="col-lg-12 mt3 mb1">
                <h2>Player News Feed</h2>
            </div>
            {{-- @foreach ( $data as $item)

            @endforeach --}}
            <div class="playerFRow forEachData d-flex flex-column" style="height: auto">
                {{-- <span>April 23, 2021 - (3:32PM) player updated height to 6’3</span>
                <span>April 23, 2021 - (3:32PM) player updated height to 6’3</span> --}}
            </div>
        </div>

        <!-- articles -->
        <div class="articlesFeed">
            <div class="col-lg-12 mt2 mb2 text-center">
                <h2 class="Heavitas">Articles</h2>
            </div>
            @if ($user->playerArticles->count() > 0)
            <div class="col-lg-12">
                <div class="owl-carousel owl-theme artivle">
                    @foreach ($user->playerArticles as $article)
                    <div class="item">
                        <div class="arGitem">
                            <div class="img">
                                <img src="{{asset('academic_info').'/'.$article->upload_image}}" height="" weight=""
                                    alt="">
                            </div>
                            <div class="subH">
                                <a href="{{$article->article_link}}" target="_blank">
                                    {{$article->title}}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @else
            <h2 class="text-center">Not Found</h2>
            @endif
        </div>

    </div>
</div>
<script>
    var sites = {!!json_encode($data) !!},
        arr;
    console.log(sites)
    sites.forEach((value, key) => {
        if (value != null) {
            $('.playerFRow.forEachData').append(`
                <span>${conversion(value)}</span>
            `)
        }
    });

    function conversion(data) {
        var arr = [];
        var date;
        var mainData = JSON.stringify(data)
        for (const property in data) {
            // console.log(`${property}: ${data[property]}`);
            if (property == 'updated_at') {
                // arr.push(`${data[property]}`)
                date = data[property]
            } else {
                if(property.includes('_')){
                    var ty = property.replace(/_/g,' ');
                    arr.push(ty)
                }
                else{
                    arr.push(`${ property }    `)
                }
            }

        }
        var cnvrt = arr.toString().replace(/,/g, ', ')
        console.log(cnvrt)
        return `<span>${date} PLAYER UPDATED : ${cnvrt}</span>`
    }

</script>
<style>
    .font-size-18 p{
        font-size: 18px !important;
        font-family: bebuseRegular !important;
    }
    .msg-btn {
        color: #55d729;
        background-color: #3c3c3c;
    }

    .add-btn {
        color: #3c3c3c !important;
        background-color: #55d729 !important;
    }

    .unfollow-btn {
        color: #3c3c3c !important;
        background-color: #55d729 !important;
    }

</style>
@endsection
