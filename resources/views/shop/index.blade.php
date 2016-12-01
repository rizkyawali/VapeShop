@extends('layout.frontend')

@section('content')

    <div class="container">
        <div class="section">

            <div class="row">
                <div class="col s12 m4">
                    <div class="card small">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img" alt="">
                        </div>

                        <div class="card-content small">
                            <span class="card-title activator cyan-text text-darken-2">Title<i class="material-icons cyan-text text-darken-2 right">more_vert</i></span>
                        </div>

                        <div class="card-reveal grey lighten-2">
                            <span class="card-title cyan-text text-darken-2">Title<i class="material-icons cyan-text text-darken-2 right">close</i></span>
                            <p>Lorem ipsum dolor</p>
                        </div>

                        <div class="card-action grey">
                            <div class="chip teal-text">
                                Rp.
                            </div>

                            <a class="btn-floating btn-large waves-effect waves-light grey darken-3 right"><i class="material-icons cyan-text">add_shopping_cart</i></a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection