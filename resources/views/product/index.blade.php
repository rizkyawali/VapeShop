@extends('layout.backend')

@section('content')

    <table class="highlights">
        <thead>
        <tr>
            <th data-field="id">Title</th>
            <th data-field="name">Image</th>
            <th data-field="price">Price</th>
            <th data-field="desc">Description</th>
        </tr>
        </thead>

        <tbody>

            @foreach($products as $product)
            <tr>
                <td>{{ $product->title }}</td>
                <td><img width="20%" class="img-responsive" minimal-lightbox class="b-link-fade b-animate-go" src="/images/{{ $product->title .'.'. $product->image_extension . '?' . 'time='. time() }}"></td>
                <td>{{ $product->price }}</td>
                <td>{!! str_limit($product->description, 50) !!}</td>
                <td>
                    <i class="material-icons">
                    {{ link_to(route('products.edit', $product->id), 'Edit', ['class' => 'btn-floating btn-large waves-effect waves-light grey darken-2 ']) }}
                        add</i>
                </td>

                {!! Form::model($product, ['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
                    <td>
                        {!! Form::submit('Delete', array('class' => 'btn btn-raised btn-danger', 'Onclick' => 'return confirmDelete();')) !!}
                    </td>
                {!! Form::close() !!}

            </tr>
            @endforeach

        </tbody>

    </table>
    <script src="js/minimal.lightbox.js"></script>

@endsection