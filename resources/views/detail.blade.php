<x-main>
    <div class="container">
        <div class="card mb-3 d-flex mx-auto mt-5 shadow" style="max-width: 840px;">
            <div class="row g-0">
                <div class="col-md-4 d-flex align-items-center justify-content-center">
                    <img src="{{$data['images']['jpg']['image_url']}}" alt="">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title">{{$data['title']}}</h2>
                        <p class="card-text">{{$data['synopsis']}}</p>
                        <p class="card-text"><small class="text-muted">Episode: {{$data['episodes']}}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main>