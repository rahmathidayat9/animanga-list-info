@extends('errors::illustrated-layout')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
@section('image')
<div style="background-image: url('/img/errors/sora-ginko.jpg');" class="absolute pin bg-no-repeat md:bg-left lg:bg-center">
</div>
@stop