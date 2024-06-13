<x-main>
    <div class="container">
        <ul class="list-group">
            @foreach ($data as $item)
            <li class="list-group-item section_genre"> <a href="{{route('anime.genre.list', ['id' => $item['mal_id']])}}" class="link_genre">{{ $item['name']}}</a></li>
            @endforeach
            
        </ul>
    </div>
</x-main>