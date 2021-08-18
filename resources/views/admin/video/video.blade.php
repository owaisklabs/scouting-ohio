@extends('admin.layouts.master')

@section('content_header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0 text-dark"><i class="nav-icon fas fa-text-width"></i> Videos</h1>
  </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<!-- fancybox styles -->
<style>
  /* The switch - the box around the slider */
  .switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
  }
  /* Hide default HTML checkbox */
  .switch input {
    opacity: 0;
    width: 0;
    height: 0;
  }
  /* The slider */
  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
  }
  .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
  }
  input:checked + .slider {
    background-color: #2196F3;
  }
  input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
  }
  input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
  }
</style>

<!-- see more (description) -->
<style>
  div.text-container {
      margin: 0 auto;
      width: 75%;
  }
  .hideContent {
      overflow: hidden;
      line-height: 1em;
      height: 2em;
  }
  .showContent {
      line-height: 1em;
      height: auto;
  }
  .showContent{
    height: auto;
  }
  h1 {
    font-size: 24px;
  }
  p {
      padding: 10px 0;
  }

  .show-more {
      padding: 10px 0;
      text-align: center;
  }
</style>

@endsection

@section('content_body')
<!-- Index view -->
<div class="row">
  <div class="col-md-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <div class="card-tools">
            <button class="btn btn-success" id="add_item" data-toggle="modal" data-target="#addArticleModal">
                <i class="fas fa-plus"></i>
            </button>
        </div>
        <!-- search bar -->
        <form action="" class="form-wrapper">
          <div class="row">
              <!-- search bar -->
              <div class="topnav col-md-4 col-sm-4">
                <input name="query" class="form-control" id="search_content" type="text" placeholder="Search..">
              </div>
              <!-- search button-->
              <button type="submit" class="btn btn-primary col-md-0 col-sm-0 justify-content-start" id="search_button">
                <i class="fas fa-search"></i>
              </button>
          </div>
        </form>
      </div>

      <!-- /.card-header -->
      <div class="card-body">
        <div class="col-md-12 col-sm-12" style="overflow-x:auto;">
          <table id="example1" class="table table-bordered table-striped dataTable dtr-inline " role="grid" aria-describedby="example1_info">
            <thead>
              <tr role="row">
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Image</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Video Link</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Actions</th>
              </tr>
            </thead>
            <tbody>
              @if(count($videos) > 0)
                @foreach($videos as $video)
                  <tr role="row" class="odd">
                    <!-- image (fancybox) -->
                    <td class="{{'image'.$video->id}}" width="140">
                        <a class="fancybox" href="{{($video->thumbnil) ? (asset('img/videos') . '/' . $video->thumbnil) : (asset('img/noimg.jpg'))}}">
                            <img src="{{($video->thumbnil) ? (asset('img/videos') . '/' . $video->thumbnil) : (asset('img/noimg.jpg'))}}" width="60%" alt="">
                        </a>
                    </td>

                    <!-- content (with see more collapse) -->
                    <td class="{{'content'.$video->id}}" width="500">
                      <div class="link hideContent">
                        <a href="{{$video->video_link}} ">{{$video->video_link}}</a>
                      </div>
                    </td>

                    <!-- link -->
                    {{-- <td class="{{'link'.$article->id}}">{{$article->link}}</td> --}}


                    <!-- actions -->
                    <td width="100">
                        <!-- Detail -->
                          <!-- <a href="#" class="detailButton" data-id="{{$video->id}}">
                            <i class="fas fa-eye green ml-1"></i>
                          </a> -->
                        <!-- Edit -->
                        <a href="#" class="editButton" data-id="{{$video->id}}">
                          <i class="fas fa-edit blue ml-1"></i>
                        </a>
                        <!-- Delete -->
                        <a href="#" class="deleteButton" data-id="{{$video->id}}">
                          <i class="fas fa-trash red ml-1"></i>
                        </a>
                    </td>
                  </tr>
                @endforeach
              @else
                <tr><td colspan="4"><h6 align="center">No article(s) found</h6></td></tr>
              @endif
            </tbody>
            <tfoot>

            </tfoot>
          </table>
        </div>
      <!-- /.card-body -->
      {{-- <div class="card-footer">
        @if(count($videos) > 0)
        {{$videos->appends(request()->except('page'))->links()}}
        @endif
      </div> --}}
    </div>
  </div>
</div>

 <!-- Create view -->
<div class="modal fade" id="addArticleModal" tabindex="-1" role="dialog" aria-labelledby="addArticleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addArticleModalLabel">Add New Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="{{route('video.store')}}" enctype="multipart/form-data">
        @csrf
        @include('admin.video.video_master')
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit view -->
<div class="modal fade" id="editArticleModal" tabindex="-1" role="dialog" aria-labelledby="editArticleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editArticleModalLabel">Edit Article</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="editForm" method="POST" action="{{route('video.update', 1)}}" enctype="multipart/form-data">
        <!-- hidden input -->
        @method('PUT')
        <input id="hidden" type="hidden" name="hidden">
        @csrf
        @include('admin.video.video_master')
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Detail view -->
<

<!-- Delete view -->
<div class="modal fade" id="deleteArticleModal" tabindex="-1" role="dialog" aria-labelledby="deleteArticleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteArticleModalLabel">Delete Article</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="deleteForm" method="POST" action="{{route('article.destroy', 1)}}">
        <!-- hidden input -->
        @method('DELETE')
        @csrf
        <input class="hidden" type="hidden" name="hidden">
        <div class="modal-footer">
          <button class="btn btn-primary" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-danger" id="deleteButton">Yes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
    // $('#area_id').select2();
    // $('#market_id').select2();
    // datatable
    // $('#example1').DataTable();
    // $('#example1').dataTable({
    //   "bPaginate": false,
    //   "bLengthChange": false,
    //   "bFilter": true,
    //   "bInfo": false,
    //   "searching":false
    // });
    // get url params
    $.urlParam = function(name){
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results==null) {
            return null;
        }
        return decodeURI(results[1]) || 0;
    }

    // persistent active sidebar
    var element = $('li a[href*="'+ window.location.pathname +'"]');
    element.parent().parent().parent().addClass('menu-open');
    element.addClass('active');

    // fancybox init
    $(".fancybox").fancybox({
        helpers: {
            title : {
                type : 'float'
            }
        }
    });
    // global vars
    var article = "";
    // fetch article
    function fetch_article(id){
        $.ajax({
            url: '<?php echo(route("video.show", 0)); ?>',
            type: 'GET',
            data: {id: id},
            dataType: 'JSON',
            async: false,
            success: function (data) {
                console.log(data)
                article = data;
            }
        });
    }
    // create
    $('#add_article').on('click', function(){

    });
    // edit
    $('.editButton').on('click', function(){
        var id = $(this).data('id');
        fetch_article(id);
        $('#hidden').val(id);

        // image
        // un hide preview div
        $('#editForm .preview_wrapper').prop('hidden', false);
        // update preview image
        if(article.thumbnil){
          var src = `<?php echo(asset('img/videos') . '/temp'); ?>`;
          src = src.replace('temp', article.thumbnil);
        }
        else{
          var src = `<?php echo(asset('img/noimg.jpg')); ?>`;
        }
        $('#editForm .preview_image').prop('src', src);

        // content
        $('#editForm .video_url').val(article.video_link ? article.video_link : '');


        $('#editArticleModal').modal('show');
    });

    $('.deleteButton').on('click', function(){
      var id = $(this).data('id');
      console.log(id)
      $('#deleteForm').attr('action', "{{route('video.destroy', 1)}}");
      $('#deleteForm .hidden').val(id);
      $('#deleteArticleModalLabel').text('Delete Article: ' + $('.name' + id).html() + "?");
      $('#deleteArticleModal').modal('show');
    });



    // on show-more click (see more collapse)
    $(".show-more a").on("click", function() {
      var $this = $(this);
      var $content = $this.parent().prev("div.content");
      var linkText = $this.text().toUpperCase();

      if(linkText === "SHOW MORE"){
          linkText = "Show less";
          $content.switchClass("hideContent", "showContent", 100);
      } else {
          linkText = "Show more";
          $content.switchClass("showContent", "hideContent", 100);
      };
      $this.text(linkText);
    });
    // on image click (preview)
    $('#editForm .image').on('change', function(){
      // console.log($(this)[0]);
      // console.log($(this).parent().find('img'));
      var input = ($(this))[0];
      var preview_target = $(this).parent().find('img');
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              preview_target
                      .attr('src', e.target.result);
          };

          reader.readAsDataURL(input.files[0]);
      }
    });
});
</script>
@endsection('content_body')
