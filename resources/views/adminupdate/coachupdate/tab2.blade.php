<div class="tab-pane fade " id="pills-Articles" role="tabpanel" aria-labelledby="pills-Articles-tab">
    <div class="userTableCustom mt6">
        <h1 class="mb4 d-flex justify-content-between align-items-center">
            Aditional Coaches
            <i class="fa fa-plus" data-bs-toggle="modal" data-bs-target="#exampleModalCOAH2"></i>
        </h1>
        @foreach ($addtionalCoachs as $addtionalCoach )
        <div class="linkName">Coach # {{$loop->index+1}}</div>
        <div class="tableRow d-flex mt1 mb2" style="padding: 20px;">
            <!-- <div class="img">
                <img src="../assets/img/1x/coach.jpg" height="100%" width="100%" alt="">
            </div> -->
            <div class="title d-flex flex-column justify-content-center">
                <label>Name</label>
                <span>{{$addtionalCoach->name}}</span>
            </div>
            <div class="link d-flex flex-column justify-content-center">
                <label>Email</label>
                <span>{{$addtionalCoach->email}}</span>
            </div>
            <div class="actions d-flex saveADmin align-items-center">
                <button  class="editButton" data-id="{{$addtionalCoach->id}}"  data-bs-toggle="modal" data-bs-target="#editexampleModalCOAH2">EDIT</button>
                <button class="deleteButton" data-id="{{$addtionalCoach->id}}">Delete</button>
            </div>
        </div>
        @endforeach

        {{-- <div class="userTableCustom mt3 saveBtnMain">
            <div class="col-lg-12 saveADmin d-flex justify-content-end">
                <button>Save</button>
            </div>
        </div> --}}

    </div>

</div>
<script>
    function fetch_video(id){
        $.ajax({
            url: '<?php echo(route("show-addtional-coach-by-id")); ?>',
            type: 'GET',
            data: {id: id
            },
            dataType: 'JSON',
            success: function (data) {
                console.log(data)
                displayData(data)
            }
        });
    }
    const displayData = (data)=>{
            $('#editexampleModalCOAH2 .modal-body [name=name]').val(data.name)
            $('#editexampleModalCOAH2 .modal-body [name=email]').val(data.email)
            $('#editexampleModalCOAH2 .modal-body [name=id]').val(data.id)
    }
    $('.editButton').on('click',function(){
        var id = $(this).attr("data-id");
        console.log(id);
        fetch_video(id);
    });
    $('.deleteButton').on('click',function(){
        var id = $(this).attr("data-id");
        alert("Are You sure to delete !")
        // console.log(id);
        var token = $("meta[name='csrf-token']").attr("content");

    $.ajax({
        url: '<?php echo(route("adminupdatescoach_delete_additionalcoaches")); ?>',
        type: 'GET',
        data: {
            "id": id,
            "_token": token,
        },
        success: function (data){
            location.reload();
            console.log(data);
        }
    });
    });
</script>
