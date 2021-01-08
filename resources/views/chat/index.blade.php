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
                <span>Group Chat</span>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Breadcrumb End -->

<!-- Anime Section Begin -->
<section class="anime-details spad">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">Komentar</div>
            <div class="card-body">
                <div class="alert alert-info">Coming Soon Feature</div>
            </div>
            <div class="card-footer">
                <div class="input-group mb-3">
                  <!-- <textarea class="form-control" placeholder="Komentar" aria-label="Komentar" aria-describedby="basic-addon2"></textarea>
                  <div class="input-group-append btn btn-primary">
                    <button class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                  </div> -->
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Anime Section End -->

@stop