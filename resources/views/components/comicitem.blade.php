<div class="single-comic">
    <a href="{{ route('comic_details', ['id' => $comic['id']]) }}">
        <img class="comic-img" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }} image">
        <h3 class="comic-title"> {{ $comic['title'] }} </h3>
    </a>
</div>