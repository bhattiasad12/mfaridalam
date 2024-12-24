@foreach ($data as $video)
    <div class="custom-video-card" data-video-id="{{ $video['url'] }}">
        <img src="http://img.youtube.com/vi/{{ $video['url'] }}/hqdefault.jpg" alt="Video Thumbnail">
        <div class="custom-info">
            <h3>{{ $video['name'] }}</h3>
        </div>
    </div>
@endforeach
