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
                <span>About</span>
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
            <div class="col-lg-8 col-md-8">
                <div class="anime__details__review">
                    <div class="section-title">
                        <h5>About Me</h5>
                    </div>
                    <div class="text-light">
                    Halo , nama asli saya Rahmat Hidayatullah ,dari Tasikmalaya , saya adalah pelajar SMK YPC TASIKMALAYA jurusan RPL dan
                    bercita-cita menjadi programmer , hobby saya ngoding, nonton anime dan mendengar music
                    .
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="anime__details__sidebar">
                    <div class="section-title">
                        <h5>Contact Me On</h5>
                    </div>
                    <div class="card">
                        <div class="card-body"><a href="javascript:void(0)" onclick="window.open('https://web.facebook.com/profile.php?id=100050205264012')" class="btn btn-primary"> <i class="fa fa-facebook fa-2x"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Anime Section End -->

@stop