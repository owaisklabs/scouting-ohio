<div class="tab-pane fade " id="pills-Videos" role="tabpanel" aria-labelledby="pills-videos-tab">
    <div class="userTableCustom mt6">
        <h1 class="mb4 d-flex justify-content-between align-items-center">
            Videos
            <i class="fa fa-plus addVideo" data-bs-toggle="modal" data-bs-target="#exampleModaVideos"></i>
        </h1>
        @foreach ($playerVideos as $playerVideo)
        <div class="linkName">Link # {{$loop->iteration}}</div>
        <div class="tableRow d-flex mt1 mb-4" style="padding: 20px;">
            <div class="img" style="height: 80px;width: 80px;">
                @if ($playerVideo->hudl_thumbnail)
                <img src="{{asset('img/videos').'/'.$playerVideo->hudl_thumbnail}}" height="100%" width="100%" alt="">
                @else
                <img src="{{asset('img/noimg.jpg')}}" height="100%" width="100%" alt="">
                @endif

            </div>
            <div class="link d-flex flex-column justify-content-center p-3">
                <label>Link</label>
                <span>{{$playerVideo->hudl_link}}</span>
            </div>
            <div class="actions d-flex saveADmin align-items-center">
                <button data-bs-toggle="modal" data-id="{{$playerVideo->id}}" data-key="update" class="editButton"
                    data-bs-target="#exampleModaVideos">EDIT</button>
                <button class="deleteButton" data-id="{{$playerVideo->id}}">Delete</button>
            </div>
        </div>
        @endforeach



    </div>
    <div class="userTableCustom mt3 saveBtnMain">
        <div class="col-lg-12 saveADmin d-flex justify-content-end">
            <button>Save</button>
        </div>
    </div>
</div>
<script>
    function fetch_video(id, type) {
        $.ajax({
            url: '<?php echo(route("show-video-by-id")); ?>',
            type: 'GET',
            data: {
                id: id,
                type: type,
            },
            dataType: 'JSON',
            success: function (data) {
                console.log(data.hudl_thumbnail)
                displayData(data)
            }
        });
    }
    $('.editButton').on('click', function () {
        var id = $(this).attr("data-id");
        var type = $(this).attr("data-key");
        console.log(id)
        // console.log(type)
        fetch_video(id, type);
    });
    $('.fa-plus.addVideo').on('click', function () {
        displayData(null)
    })
    const displayData = (data) => {
        if(data != null){
            $('#exampleModaVideos .modal-body .imga .fa.fa-plus').attr("hidden",true);
            $('#exampleModaVideos .modal-body [name=hudl_link]').val(data.hudl_link)
            $('#exampleModaVideos .modal-body .imga .uploadAble img').removeAttr('hidden');
            $('#exampleModaVideos .modal-body [name=hidden_id]').val(data.id)
            if(data.hudl_thumbnail != null){
                $('#exampleModaVideos .modal-body .imga .uploadAble img').attr('src',`{{asset('img/videos')}}/${data.hudl_thumbnail}`);
            }
            else{
                $('#exampleModaVideos .modal-body .imga .uploadAble img').attr('src',`{{asset('img/noimg.jpg')}}`);
            }

        }else{
            $('#exampleModaVideos .modal-body .imga .uploadAble img').attr("hidden",true);
            $('#exampleModaVideos .modal-body .imga .fa.fa-plus').removeAttr('hidden');
            $('#exampleModaVideos .modal-body [name=hudl_link]').val(null)
        }

    }
    $('.deleteButton').on('click', function () {
        var id = $(this).attr("data-id");
        alert("Are You sure to delete !")
        var token = $("meta[name='csrf-token']").attr("content");

        $.ajax({
            url: '<?php echo(route("delete-video-by-id")); ?>',
            type: 'GET',
            data: {
                "id": id,
                "_token": token,
            },
            success: function (data) {
                location.reload();
                console.log(data);
            }
        });
    });

</script>
