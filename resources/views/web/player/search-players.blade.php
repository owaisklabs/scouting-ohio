@extends('web.layouts.master')
@section('content')

<div class="userTableCustom mainDiv search">
    <div class="inner">
        @if ($result)
        <div class="userRow d-flex">
            <div class="img">
                <!-- <img src="assets/img/1x/user1.png" height="100%" width="100%" alt=""> -->
            </div>
            <div class="userData">
                <div class="dataG1">Player name</div>
                <div class="dataG1">High School</div>
                <div class="dataG1">Height</div>
                <div class="dataG1">Weight</div>
                <div class="dataG1">Position</div>
                <div class="dataG1">Location</div>
                <div class="dataG1">Commit Status</div>
            </div>
        </div>
        @foreach ($result as $item )
        <div class="userRow d-flex">
            <div class="img">
                <img src="{{asset('user_image').'/'.$item->user_profile}}" height="100%" width="100%" alt="">
            </div>
            <div class="userData">
                <div class="dataG1">
                    <a href="{{route('user-profile',$item->id)}}">{{$item->name}}</a>
                </div>
                <div class="dataG1">{{$item->basicInfo->high_school?? " - "}}</div>
                <div class="dataG1">{{$item->basicInfo->height ?? " - "}}</div>
                <div class="dataG1">{{$item->basicInfo->weight?? " - "}} KG</div>
                <div class="dataG1">{{$item->basicInfo->best_college_poition ?? " - "}}</div>
                <div class="dataG1">{{$item->personalInfo->player_city ?? "-"}},{{$item->personalInfo->player_country  ?? " - "}}</div>
                <div class="dataG1">{{$item->personalInfo->player_state  ?? " - "}} State</div>
            </div>
        </div>
        @endforeach
        @else
        <h1 class="text-center mt-5 pt-5"> No result Found</h1>
        @endif

    </div>

</div>
@endsection
