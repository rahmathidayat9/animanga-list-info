@extends('layouts.frontend.app',[
    'title' => 'Anime Watching'
])
@section('content')

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="/"><i class="fa fa-home"></i> Home</a>
                    <a href="javascript:void(0)">Streaming</a>
                    <a href="javascript:void(0)">{{ $anime['title'] }}</a>
                    <span>Eps {{ $animeChoosed['episode_id'] }}</span>
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
                <div class="anime__video__player">
                    <iframe src="{{ $anime_link_src }}" width="100%" height="500" allowfullscreen allow="encrypted-media"> 
                    </iframe>
                </div>
                <div class="anime__details__episodes">
                    <div class="section-title">
                        <h5>Menu</h5>
                    </div>
                    <a href="/streaming/anime/{{ encrypt($anime['mal_id']) }}">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Anime Section End -->

@stop