@extends('layouts.app')
@section('content')
<main class="bg-dark">
    <div class="container">
        <div class="row">
        @foreach($comics as $id => $comic)
        <div class="col-2 my-4" id="comics-list">
            <a href="{{ route('comic.show', $id)}}">
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
    <div class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-12 justify-content-between d-flex" id="mid-bar">
                    <div class="col-2 d-flex flex-row align-items-center">
                        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
                        <p class="text-uppercase m-2">Digital Comics</p>
                    </div>
                    <div class="col-2 d-flex flex-row align-items-center">
                        <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
                        <p class="text-uppercase m-2">DC merchandise</p>
                    </div>
                    <div class="col-2 d-flex flex-row align-items-center">
                        <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
                        <p class="text-uppercase m-2">Subscription</p>
                    </div>
                    <div class="col-2 d-flex flex-row align-items-center">
                        <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                        <p class="text-uppercase m-2">Comic shop locator</p>
                    </div>
                    <div class="col-2 d-flex flex-row align-items-center">
                        <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
                        <p class="text-uppercase m-2">DC power visa</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection
