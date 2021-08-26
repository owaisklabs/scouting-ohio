<div class="tab-pane fade " id="pills-notification" role="tabpanel" aria-labelledby="pills-notification-tab">
    <div class="userTableCustom mt6">
        <h1 class="d-flex justify-content-between align-items-center">
            Profile Stalkers
        </h1>
        <div class="row">
            <div class="col-lg-7 mt2">
                <div class="notification-content">
                    <h4>Players And Fans</h4>
                    <div class="players-and-fans-noti">
                        @foreach ( $viewer as $item)
                        <div class="fans-noti me-3">
                            {{-- <p>{{\App\Models\User::where('id',$item->visiter_id)->first()->type;}}</p> --}}
                            <span class="tooltiptext">
                                {{\App\Models\User::where('id',$item->visiter_id)->pluck('name')->first();}}: Last
                                visit: {{$item->updated_at}} Total visits: {{$item->count}}:Online Status :
                                @if (Cache::has('user-is-online-' . $item->visiter_id))
                                <Span>
                                    online
                                </Span>
                                @else
                                <span>offline</span>
                                @endif
                                friends:
                                @if (\App\Models\User::where('id',$item->visiter_id)->first()->type ==="Player")
                                <span>{{count(\App\Models\User::where('id',$item->visiter_id)->first()->friends);}}</span>
                                @else
                                <span>{{count(\App\Models\User::where('id',$item->visiter_id)->first()->coachFriend);}}</span>
                                @endif
                            </span>
                            @if (\App\Models\User::where('id',$item->visiter_id)->pluck('user_profile')->first())
                            <img src="{{asset('user_image').'/'.\App\Models\User::where('id',$item->visiter_id)->pluck('user_profile')->first();}}"
                                alt="" style="width:100%; height:100%;" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="">
                            @else
                            <img src="{{asset('img/noimg.jpg')}}" alt="" style="width:100%; height:100%;"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="">
                            @endif
                        </div>
                        @endforeach
                    </div>

                    {{-- <ul class="not-list">
                        <li>
                            <p>John Tivut</p>
                            <p>Reshared a post: A job title reveals nothing about where someone's headed</p>
                        </li>
                        <li>
                            <p>Ahmed and 2 others liked your Profile</p>
                        </li>
                        <li>
                            <p>2 people view your profile to see</p>


                        </li>
                    </ul> --}}

                </div>
            </div>
            <div class="col-lg-5 mt2 text-center">
                <div class="notification-content">
                    <h4>College Coaches</h4>
                    @if (Auth::user()->is_premium=== 0)
                    <div>
                        <p class="college-viewer">Viewed by {{count($collegeCoach)}} College Coaches</p>
                        <p>You need a premium subscription to see college stalkers</p>
                        <p>purchase a subscription</p>
                        <button data-bs-toggle="modal" data-bs-target="#subs-modal" class="subscribe-link">Click here to
                            subscribe</button>
                    </div>
                    @endif

                    {{-- <ul class="not-list">
                        <li>
                            <p>John Tivut</p>
                            <p>Reshared a post: A job title reveals nothing about where someone's headed</p>
                        </li>
                        <li>
                            <p>Ahmed and 2 others liked your Profile</p>
                        </li>
                        <li>
                            <p>2 people view your profile to see</p>


                        </li>
                    </ul> --}}
                    @if (Auth::user()->is_premium=== 1 )
                    <div class="players-and-fans-noti">
                        @foreach ($collegeCoach as $item )
                        <div class="fans-noti">
                            <span class="tooltiptext">
                                Ethan siders: Last visit: Thursday, 27 May 2021 16:08 Total visits: 1:Online Status
                                53:Offline friends
                            </span>
                            <img src="https://cdn.dribbble.com/users/458522/screenshots/4697060/ironman.jpg?compress=1&resize=400x300"
                                alt="" style="width:100%; height:100%;" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="">
                        </div>
                        @endforeach
                    </div>
                    @endif

                </div>
            </div>
        </div>

        {{-- <div class="list">
            <div class="item1">
                <p for="">john tivut</p>
                <label for="">Notification</label>
            </div>
            <div class="item2">
                <p for="">john tivut</p>
                <label for="">See your profile</label>
            </div>
            <div class="item3">
                <p for="">Click to subscribe premium package</p>
            </div>
        </div> --}}
    </div>
</div>




<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

</script>
