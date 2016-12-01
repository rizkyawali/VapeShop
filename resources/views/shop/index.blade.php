@extends('layout.frontend')

@section('content')

    <div class="section">
        <div class="row">

            @foreach($products as $product)
                <div class="col s12 m4">

                    <div class="card large">

                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="/images/{{ $product->title .'.'. $product->image_extension . '?' . 'time='. time() }}">
                        </div>

                        <div class="card-content">
                            <span class="activator grey-text text-darken-4">{{ $product->title }}</span>
                            <p><a href="#">Review This Product</a></p>
                            <div class="card-action">
                                <div class="chip">
                                    Rp. {{ $product->price }}
                                </div>
                                <a class="btn-floating btn-large waves-effect waves-light grey darken-3 right"><i class="material-icons cyan-text">add_shopping_cart</i></a>
                            </div>
                        </div>

                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{{ $product->title }}<i class="material-icons right">close</i></span>
                            <hr>
                            <p><small>{{ $product->description }}</small></p>
                        </div>

                    </div>

                </div>
            @endforeach

        </div>
    </div>

@endsection