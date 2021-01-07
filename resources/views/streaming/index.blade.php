@extends('layouts.frontend.app',[
'title' => 'Anime Streaming'
])
@section('content')

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="/"><i class="fa fa-home"></i> Home</a>
                    <a href="javascript:void(0)">Anime</a>
                    <a href="javascript:void(0)">Streaming</a>
                    <span>{{ $anime['title'] }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Anime Section Begin -->
<section class="anime-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="anime__details__episodes">
                    @include('streaming.episodes')
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Anime Section End -->

@stop