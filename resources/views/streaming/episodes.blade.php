<div class="section-title">
    @if($anime['type']=='Movie')
        <div class="alert alert-danger">Mohon Maaf , tidak ada sumber streaming untuk anime dengan tipe Movie</div>
    @else    
    <h5>List Episode</h5>
    @endif
</div>
@php
    $startAnimeArray = 0;
@endphp
@foreach($episodes['episodes'] as $episode)
<a href="/streaming/anime/{{ encrypt($anime['mal_id']) }}/{{ $startAnimeArray++ }}">Ep {{ $episode['episode_id'] }}</a>
@endforeach