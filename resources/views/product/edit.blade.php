@extends('layout.backend')

@section('content')

    @include('flash::message')

    {!! Form::model($product, ['route' => ['products.update', $product->id],
        'method' => 'PATCH',
        'class' => 'form',
        'files' => 'true']) !!}

    <div class="row">
        <div class="col s12">

            <div class="row">
                <div class="input-field col s5">
                    <i class="material-icons prefix">label</i>
                    {!! Form::text('title', null, ['class' => 'validate']) !!}
                    <label for="icon_prefix1">Title</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s4">
                    <i class="material-icons prefix">attach_money</i>
                    {!! Form::text('price', null, ['class' => 'validate']) !!}
                    <label for="icon_prefix2">Price</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">mode_edit</i>
                            {!! Form::textarea('description', null, ['class' => 'materialize-textarea', 'rows' => '3']) !!}
                            <label for="icon_prefix3">Description</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {!! Form::file('image', null, array('required', 'class' => 'form-control btn grey darken-2')) !!}
                </div>
            </div>
            <br>


            <div class="row">
                <div class="input-field col s12">
                    {!! Form::submit('Confirm', array('class' => 'grey darken-2 waves-effect waves-light btn')) !!}
                </div>
            </div>

        </div>
    </div>

    {!! Form::close() !!}
@endsection