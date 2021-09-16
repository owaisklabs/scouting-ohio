@extends('admin.layouts.master')

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="nav-icon fas fa-cogs"></i>Terms and Conditions</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <!-- <li class="breadcrumb-item"><a href="#">Admin</a></li>
          <li class="breadcrumb-item active">Zones</li> -->
            </ol>
        </div>
        <!-- /.col -->
    </div>

@endsection

@section('content_body')

    <div class="container ">
        <div class="d-flex     flex-column">
            <!-- wallet -->
            <form action="{{ route('terms-conditions.store') }}" method="post" class="row signup_wallet d-flex flex-column"
                style="background-color:white;" enctype="multipart/form-data ">
                @csrf
                <!-- main_logo -->
                <div>
                    <textarea class="ckeditor form-control" id="bericht"
                        name="texteditor">{{ $termsCondtion->terms_conditons ?? '' }}</textarea>
                </div>
                <!-- submit button -->
                {{-- <div class="col-md-10"></div> --}}
                <div class="form-group d-flex text-center justify-content-end">
                    <button type="submit" class="btn btn-primary form-control-sm"><small>Save Changes</small></button>
                </div>
            </form>
        </div>

        <hr>
    </div>


    <script>

    </script>

@endsection
