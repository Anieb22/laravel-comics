<main class="bg-dark">
    <div class="container">
        <div class="row">
        @foreach($comics as $comic)
        <div class="col-2 my-4" id="comics">
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
        <div class="col-12 d-flex justify-content-center mb-4">
            <button class="btn btn-primary text-uppercase px-5 border border-0 rounded-0">load more</button>
        </div>
        </div>
    </div>
</main>
