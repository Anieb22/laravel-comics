<main class="bg-dark">
    <div class="container">
        <div class="row">
        @foreach($comics as $comic)
        <div class="col-2 my-4">
            <a href="#">
                <div class="card border border-0 text-uppercase bg-transparent" style="width: 13rem;">
                    <img src="{{ $comic['thumb'] }}"  class="card-img-top">
                    <div class="card-body">
                        <p class="card-text text-white">{{$comic['series']}}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        </div>
    </div>
</main>
