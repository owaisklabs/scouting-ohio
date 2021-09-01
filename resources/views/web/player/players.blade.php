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
                    {{-- <a href="{{route('players-profile')}}">{{$user->basicInfo->offer ?? " - "}}</a> --}}
                    <div class="ratings">
                    <button class='offerEditbtn fetchuserData'data-key ="{{$user->id}}" >Click to see</button>
                    <button data-bs-toggle="modal" data-bs-target="#exampleModalDetails" class="showDModal" hidden></button>
                    </div>
                </div>
                <div class="dataG1">{{$user->personalInfo->player_state ?? " - "}}</div>
            </div>
        </div>
        @endforeach
    </div>

</div>
<script>

    const AppendedData = (d)=>{
        console.log(d)
        $('#exampleModalDetails .modalDataDB').append(
            `
            <label for="" class="mt1 ">${d.type}Offers:</label>
            <div class="row">
                <p class='namePl mt1'>
                    ${d.data.toString()}
                </p>
            </div>
            `
        )
        $('.showDModal').trigger('click')
    }
    const modalShowdFunction = (data)=>{
        console.log(data)
        var fbs = [{'type':'FBS division 1 colleges','data':[]}]
        ,fcs = [{'type':'FCS division 1aa 2 and 3 colleges','data':[]}],
        walkin = [{'type':'List walk wn offers','data':[]}]
        data.forEach(element => {
            if(element.FBS_division_1_colleges != null){
                fbs[0].data.push(element.FBS_division_1_colleges)
            } if(element.FCS_division_1aa_2_and_3_colleges != null){
                fcs[0].data.push(element.FCS_division_1aa_2_and_3_colleges)
            }if(element.list_walk_wn_offers != null){
                walkin[0].data.push(element.list_walk_wn_offers)
            }
        });

        fbs.map((val,i)=>{
            AppendedData(val)
        })
        fcs.map((val,i)=>{
            AppendedData(val)
        })
        walkin.map((val,i)=>{
            AppendedData(val)
        })
        // console.log(fbs,fcs,walkin)



    }
        function fetch_article(id){
            console.log(id)
        $.ajax({
            url: '<?php echo(route("player-for-players-page")); ?>',
            type: 'GET',
            data: {id: id,
            },
            dataType: 'JSON',
            success: function (data) {
                console.log('data',data.user)
                $('#exampleModalDetails .modalDataDB').empty()
                // console.log($('#exampleModalDetails .modal-body .pName'))
                $('#exampleModalDetails .modal-body .pName .namePl').text(data.user.name)
                if (data.user.user_profile)
                    $('#exampleModalDetails .modal-body .img img').attr('src','{{asset("user_image")}}'+'/'+data.user.user_profile);
                else
                $('#exampleModalDetails .modal-body .img img').attr('src','{{asset("img/noimg.jpg")}}');
                modalShowdFunction(data.offers)
            }
        });
    }
    $('.fetchuserData').click(function() {
        var id = $(this).attr("data-key");
        fetch_article(id);
});
</script>
@endsection
