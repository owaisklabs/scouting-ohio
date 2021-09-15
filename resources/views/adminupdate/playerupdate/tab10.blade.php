<div class="tab-pane fade " id="pills-Articles" role="tabpanel" aria-labelledby="pills-Articles-tab">
    <div class="userTableCustom mt6">
        <h1 class="mb4 d-flex justify-content-between align-items-center">
            News Articles
            <i class="fa fa-plus fdgdfg" data-bs-toggle="modal" data-bs-target="#exampleModalArrr"></i>
        </h1>
        @foreach ( $playerArticles as $playerArticle )


        <div class="linkName mt-4">Link # {{$loop->iteration}}</div>
        <div class="tableRow d-flex mt1">
            <div class="img">
                <img src="{{asset('academic_info').'/'.$playerArticle->upload_image}}" height="100%" width="100%" alt="">
            </div>
            <div class="title d-flex flex-column justify-content-center">
                <label>Tittle</label>
                <span>{{$playerArticle->title}}</span>
            </div>
            <div class="link d-flex flex-column justify-content-center">
                <label>Link</label>
                <span>{{$playerArticle->article_link}}</span>
            </div>
            <div class="actions d-flex saveADmin align-items-center">
                <button data-id={{$playerArticle->id}} data-key="update" class="editButtonArr" >EDIT</button>
                <button class="showModalAfter" data-bs-toggle="modal" data-bs-target="#exampleModalArrr" hidden></button>
                <button class="deleteArticleButton" data-id={{$playerArticle->id}} >Delete</button>
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
    function fetch_article(id,type){
        $.ajax({
            url: '<?php echo(route("show-article-by-id")); ?>',
            type: 'GET',
            data: {id: id,
                type:type,
            },
            dataType: 'JSON',
            success: function (data) {
                console.log(data)
                print(data)
            }
        });
    }
    $('.editButtonArr').on('click',function(){
        var id = $(this).attr("data-id");
        var type = $(this).attr("data-key");
        console.log(type)
        fetch_article(id,type);
    });
    $('.fa-plus.fdgdfg').on('click',function(){
        print(null)
    })
    const print = (data)=>{
        if(data != null){
            $('#exampleModalArrr .modal-body .imga .fa.fa-plus').attr("hidden",true);
            $('#exampleModalArrr .modal-body .imga .uploadAble img').removeAttr('hidden');
            $('#exampleModalArrr .modal-body .imga .uploadAble img').attr('src',`{{asset('academic_info')}}/${data.upload_image}`);
            $('#exampleModalArrr .modal-body [name=title]').val(data.title);
            $('#exampleModalArrr .modal-body [name=aticle_link]').val(data.article_link)
            $('#exampleModalArrr .modal-body [name=img_name]').val(data.upload_image)
            $('#exampleModalArrr .modal-body [name=hidden_id]').val(data.id)
        }else{
            // $('#exampleModalArrr .modal-body .imga .fa.fa-plus').attr("hidden",false);
            $('#exampleModalArrr .modal-body .imga .uploadAble img').attr("hidden",true);
            $('#exampleModalArrr .modal-body .imga .fa.fa-plus').removeAttr('hidden');
            $('#exampleModalArrr .modal-body [name=title]').val(null);
            $('#exampleModalArrr .modal-body [name=aticle_link]').val(null)
        }


        $('.showModalAfter').trigger( "click" )
    }
    $('.deleteArticleButton').on('click',function(){
        var id = $(this).attr("data-id");
        alert("Are You sure to delete !")
        var token = $("meta[name='csrf-token']").attr("content");

    $.ajax({
        url: '<?php echo(route("delete-article-by-id")); ?>',
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
