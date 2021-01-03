@extends('layouts.frontend.app',[
    'title' => 'Anime Details'
])
@section('content')

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb__links">
                <a href="/"><i class="fa fa-home"></i> Home</a>
                <a href="">Anime</a>
                <span>Details</span>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Breadcrumb End -->

<!-- Anime Section Begin -->
<section class="anime-details spad">
<div class="container">
    <div class="anime__details__content">
        <div class="row">
            <div class="col-lg-3">
                <div class="anime__details__pic set-bg" data-setbg="{{ $anime['image_url'] }}">
                </div>
            </div>
            <div class="col-lg-9">
                <div class="anime__details__text">
                    <div class="anime__details__title">
                        <h3>{{ $anime['title'] }}</h3>
                        @foreach($anime['title_synonyms'] as $title)
                        <span><i class="fa fa-circle"></i> {{ $title }}</span>
                        @endforeach
                    </div>
                    
                    <p>{!! $anime['synopsis'] !!}</p>
                    <div class="anime__details__widget">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <ul>
                                    <li><span>Type:</span> {{ $anime['type'] }}</li>
                                    <li><span>Studios:</span> 
                                    @foreach($anime['studios'] as $studio)
                                        {{ $studio['name'] }}
                                    @endforeach
                                    </li>

                                    <li><span>Date aired:</span> {{ $anime['aired']['string'] }}</li>
                                    <li><span>Status:</span> {{ $anime['status'] }}</li>
                                    <li><span>Genre:</span> 
                                        @foreach($anime['genres'] as $genre)
                                            {{ $genre['name']."," }}
                                        @endforeach
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <ul>
                                    <li><span>Scores:</span> {{ $anime['score'] }}</li>
                                    <li><span>Duration:</span> {{ $anime['duration'] }}</li>
                                    <li><span>Rank:</span> {{ $anime['rank'] }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="anime__details__btn">
                    <a href="/characters/anime/{{ encrypt($anime['mal_id']) }}" class="watch-btn"><span>Caracter & Staff </span> <i
                        class="fa fa-angle-right"></i></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="anime__details__review">
                    <div class="section-title">
                        <h5>Trailer</h5>
                    </div>
                    <iframe width="700" height="450" src="{{ $anime['trailer_url'] }}" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Anime Section End -->

@stop