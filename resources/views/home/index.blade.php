@extends('layouts.app')

@section('title', 'home page | shop beta')

@section('content')
    <div class="row">
        @for ($i = 1; $i < 5; $i++)
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title {{ $i }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        @if ($i % 2 == 0)
                            <a href="#" class="btn btn-danger">Go somewhere</a>
                        @else
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        @endif
                        `
                    </div>
                </div>
            </div>
        @endfor
    </div>


@endsection
