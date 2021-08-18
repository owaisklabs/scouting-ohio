<div class="tab-pane fade " id="pills-friendeq" role="tabpanel" aria-labelledby="pills-friendeq-tab">
    <div class="userTableCustom mt6">
        <h1 class="mb4 d-flex justify-content-between align-items-center">
            Friend Requests
        </h1>
        @if ($user->friends)
        @foreach ( $user->friends as $friend )


        <div class="linkName mt-4">Request # {{$loop->iteration}}</div>
        <div class="tableRow d-flex mt1">
            <div class="img">
                <img src="{{asset('user_image').'/'.$friend->user_profile}}" height="100%" width="100%" alt="">
            </div>
            <div class="title d-flex flex-column justify-content-center">
                <label>Coach Name</label>
                <span>{{$friend->name}}</span>
            </div>
            <div class="actions d-flex saveADmin align-items-center">
                <form action="{{route('req-accept')}}" method="POST">
                    @csrf

                    <button class="btn-accept" type="submit">Accept</button>
                    <input id="bacon" type="hidden" class="bacon" value="{{$friend->id}}" name="accept">
                </form>
                <form action="{{route('req-decline')}}" method="POST">
                    @csrf
                    <input  type="hidden"  value="{{$friend->id}}" name="decline">
                    <button class="btn-accept" type="submit">Decline</button>
                </form>
            </div>
        </div>
        @endforeach
        @else
        <h1>No friend Request ...</h1>
        @endif

    </div>
</div>
