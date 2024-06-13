<x-main>
    <div class="container div_genre">
        <ul class="list-group">
            @foreach ($data as $item)
            <li class="list-group-item section_genre"> <a href="{{route('anime.detail', ['id' => $item['mal_id']])}}" class="link_genre">{{ $item['title']}}</a></li>
            @endforeach
        </ul>
    </div>
</x-main>
