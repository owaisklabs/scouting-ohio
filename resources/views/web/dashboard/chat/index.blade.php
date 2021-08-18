@extends('web.layouts.master')
@section('content')

<div class="dahboardMain">
    <div class="row g-0">
        <div class="col-lg-3 siderCol">
            <div class="sider">
                @auth
                    @if (auth()->user()->type != "Player")
                    <form action="{{route('coach-dashboard')}}" method="GET">
                        <ul class="nav nav-pills flex-column justify-content-center gap-1" id="pills-tab" role="tablist">
                            <li class="nav-item" role="BasicInfo">
                                <button class="nav-link" id="pills-BasicInfo-tab" type="submit" >Basic Info</button>
                            </li>
                            <li class="nav-item" role="Articles">
                                <button class="nav-link" id="pills-Articles-tab" type="submit" >Aditional Coaches</button>
                            </li>
                            <li class="nav-item" role="Player'sFriends">
                                <button class="nav-link" id="pills-Friends-tab" type="submit">Player's Mutual Friends</button>
                            </li>
                            <li class="nav-item" role="ChangePassword">
                                <button class="nav-link" id="pills-ChangePassword-tab" type="submit" >Change Password</button>
                            </li>
                            <li class="nav-item" role="Logout">
                                <button class="nav-link" id="pills-Logout-tab" type="submit" >Logout</button>
                            </li>
                        </ul>
                    </form>
                    @else
                    <form action="{{route('player-dashboard')}}" method="GET">
                        <ul class="nav nav-pills flex-column justify-content-center gap-1" id="pills-tab" role="tablist">
                            <li class="nav-item" role="BasicInfo">
                                <button class="nav-link" id="pills-BasicInfo-tab" type="submit" >Basic Info</button>
                            </li>
                            <li class="nav-item" role="Articles">
                                <button class="nav-link" id="pills-Articles-tab" type="submit" >Combine Result</button>
                            </li>
                            <li class="nav-item" role="Player'sFriends">
                                <button class="nav-link" id="pills-Friends-tab" type="submit">Honors - Awards</button>
                            </li>
                            <li class="nav-item" role="Player'sFriends">
                                <button class="nav-link" id="pills-Friends-tab" type="submit">Academic Info</button>
                            </li>
                            <li class="nav-item" role="Player'sFriends">
                                <button class="nav-link" id="pills-Friends-tab" type="submit">Personal Info</button>
                            </li>
                            <li class="nav-item" role="Player'sFriends">
                                <button class="nav-link" id="pills-Friends-tab" type="submit">Player Evaluation</button>
                            </li>
                            <li class="nav-item" role="Player'sFriends">
                                <button class="nav-link" id="pills-Friends-tab" type="submit">My Links</button>
                            </li>
                            <li class="nav-item" role="Player'sFriends">
                                <button class="nav-link" id="pills-Friends-tab" type="submit">Videos</button>
                            </li>
                            <li class="nav-item" role="ChangePassword">
                                <button class="nav-link" id="pills-ChangePassword-tab" type="submit" >News Articles</button>
                            </li>
                            <li class="nav-item" role="ChangePassword">
                                <button class="nav-link" id="pills-ChangePassword-tab" type="submit" >Friends Request</button>
                            </li>
                            <li class="nav-item" role="ChangePassword">
                                <button class="nav-link" id="pills-ChangePassword-tab" type="submit" >Friends</button>
                            </li>
                            <li class="nav-item" role="ChangePassword">
                                <button class="nav-link" id="pills-ChangePassword-tab" type="submit" >Change Password</button>
                            </li>
                            <li class="nav-item" role="Logout">
                                <button class="nav-link" id="pills-Logout-tab" type="submit" >Logout</button>
                            </li>
                        </ul>
                    </form>

                    @endif
                @endauth

            </div>
            <i class="fa fa-indent"></i>
        </div>
        <div class="col-lg-9">

            <div class="container chaty">
                <div class="chatScreen">
                    <div class="chatHeader">
                        <div class="ppic">
                            @if ($user->user_profile)
                            <img src="{{asset('user_image').'/'.$user->user_profile}}" alt="">
                            @else
                            <img src="{{asset('img/noimg.jpg')}}" alt="">
                            @endif

                        </div>
                        <div class="name">
                            <a href="{{route('user-profile',$user->id)}}">
                            {{$user->name}}
                        </a>
                        </div>
                    </div>
                    <div class="chattBody">
                        <div class="chatting">
                            <div class="col-lg-12">
                                <div class="row chatPushing">
                                    {{-- <div class="col-lg-9 opponent">
                                        <div class="chatMessage">
                                            <div class="messg">
                                                <img src="https://designprosca.com/scoutingOhio/static/assets/img/1x/user1.png" alt="">
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sit exercitationem pariatur doloremque quam vero. Totam harum tempora voluptatem expedita facere provident ullam impedit? Veritatis ut ab reprehenderit vero illo!</p>
                                            </div>
                                            <div class="dateTime">
                                                12-12-2021 05:08 Am
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="col-lg-9 offset-lg-3 me">
                                        <div class="chatMessage">
                                            <div class="messg">

                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sit exercitationem pariatur doloremque quam vero. Totam harum tempora voluptatem expedita facere provident ullam impedit? Veritatis ut ab reprehenderit vero illo!</p>
                                                <img src="https://designprosca.com/scoutingOhio/static/assets/img/1x/user1.png" alt="">
                                            </div>
                                            <div class="dateTime">
                                                12-12-2021 05:08 Am
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="message w-100">
                            <input type="text" placeholder="Message ..." id="message">
                            <i class="fa fa-send butsave">
                            </i>
                            <input type="hidden" value={{$user->id}} name="id" id='reciver_id'>
                            <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script>
    $('.butsave').on('click', function() {
        var msg = $('#message').val();
        var id = $('#reciver_id').val();
        $.ajax({
             url: '<?php echo(route("chat-store")); ?>',
             type: "POST",
             data: {
                 _token: $("#csrf").val(),
                 msg: msg,
                 id: id
             },
             cache: false,
             success: function(dataResult){
                 console.log(dataResult);
                $('#message').val('');
                 $('.chatPushing').append(

        `<div class="col-lg-9 offset-lg-3 me">
                <div class="chatMessage">
                    <div class="messg">

                        <p> ${dataResult.message}</p>
                        <img src="https://designprosca.com/scoutingOhio/static/assets/img/1x/user1.png" alt="">
                    </div>
                    <div class="dateTime">
                        ${dataResult.created_at}
                    </div>
                </div>
        </div>

`
)
             }
         });
})
var me = 'John Marshall'

var arr ={!! json_encode($data) !!};
console.log(arr);
var user = {!! auth()->user()->id !!}

const myChat = (val)=>{
    $('.chatPushing').append(

        `<div class="col-lg-9 offset-lg-3 me">
                <div class="chatMessage">
                    <div class="messg">

                        <p> ${val.message}</p>
                        <img src="https://designprosca.com/scoutingOhio/static/assets/img/1x/user1.png" alt="">
                    </div>
                    <div class="dateTime">
                        ${val.created_at}
                    </div>
                </div>
        </div>

`
)
}

const otherChat = (val)=>{
    $('.chatPushing').append(
        `
    <div class="col-lg-9 opponent">
        <div class="chatMessage">
            <div class="messg">
                <img src="https://designprosca.com/scoutingOhio/static/assets/img/1x/user1.png" alt="">
                <p>${val.message}</p>
            </div>
            <div class="dateTime">
                ${val.created_at}
            </div>
        </div>
    </div>
    `
    )

}


arr.sort(function(a, b) {
  var keyA = new Date(a.created_at),
    keyB = new Date(b.created_at);
  // Compare the 2 dates
  if (keyA < keyB) return -1;
  if (keyA > keyB) return 1;
  return 0;
});

console.log(arr);

arr.forEach(val=>{
    if(val.sender_id == user){
        myChat(val)
    }else{
        otherChat(val)
    }
})




// $('.chatPushing').append(otherChat())


</script>

@endsection
