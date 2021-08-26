@extends('web.layouts.master')

@section('content')
<div class="userTableCustom mainDiv search">
    <div class="inner">
        <div class="userRow d-flex playerRow userR1 mt1">
            <div class="img">
                <!-- <img src="assets/img/1x/user1.png" height="100%" width="100%" alt=""> -->
            </div>
            <div class="userData">
                <div class="dataG1">Player name</div>
                <div class="dataG1">High School</div>
                <div class="dataG1">HT</div>
                <div class="dataG1">WT</div>
                <div class="dataG1">Position</div>
                <div class="dataG1">Offers</div>
                <div class="dataG1">Commit Status</div>
            </div>
        </div>
        @foreach ($users as $user )
        <div class="userRow d-flex">
            <div class="img">
                @if ($user->user_profile)
                <img src="{{asset('user_image').'/'.$user->user_profile}}" height="100%" width="100%" alt="">
                @else
                <img src="{{asset('img/noplayerimage.png')}}" height="100%" width="100%" alt="">
                @endif
            </div>
            <div class="userData">
                <div class="dataG1">
                    <a href="{{route('user-profile',$user->id)}}">{{$user->name}}</a>
                    {{-- <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div> --}}
                </div>
                <div class="dataG1">{{$user->basicInfo->high_school ?? " - "}}</div>
                <div class="dataG1">{{$user->basicInfo->height ?? " - "}}</div>
                <div class="dataG1">{{$user->basicInfo->weight ?? " - "}} KG</div>
                <div class="dataG1">{{$user->basicInfo->best_college_poition ?? " - "}}</div>
                <!-- <div class="dataG1">Southlake,TX Carrol
                    <br>
                 <button class='offerEditbtn' data-bs-toggle="modal" data-bs-target="#exampleModalDetails">Read More</button>
                </div> -->
                <div class="dataG1">
                    <a href="{{route('players-profile')}}">{{$user->basicInfo->offer ?? " - "}}</a>
                    <div class="ratings">
                    <button class='offerEditbtn' data-bs-toggle="modal" data-bs-target="#exampleModalDetails">Read More</button>
                    </div>
                </div>
                <div class="dataG1">{{$user->personalInfo->player_state ?? " - "}}</div>
            </div>
        </div>
        @endforeach



    </div>

</div>
@endsection
