@extends('web.layouts.master')
@section('content')
<div class="PprofileMain mainDiv container customheadingClass007">
    <h1>Terms and Conditions</h1>
   <div class="mt-4">
    {!! $termsConditions->terms_conditons?? " " !!}
   </div>
</div>
@endsection
