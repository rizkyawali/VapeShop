@extends('layout.backend')

@section('content')

    <table class="responsive-table highlights">
        <thead>
        <tr>
            <th data-field="title">Title</th>
            <th data-field="image">Image</th>
            <th data-field="price">Price</th>
            <th data-field="desc">Description</th>
        </tr>
        </thead>

        <tbody>

            @foreach($products as $product)
            <tr>
                <td data-field="title">{{ $product->title }}</td>
                <td data-field="image"><img width="20%" class="img-responsive" minimal-lightbox class="b-link-fade b-animate-go" src="/images/{{ $product->title .'.'. $product->image_extension . '?' . 'time='. time() }}"></td>
                <td data-field="price">{{ $product->price }}</td>
                <td data-field="desc">{!! str_limit($product->description, 50) !!}</td>
                <td>
                    {{ link_to(route('products.edit', $product->id), 'border_color', ['class' => 'btn-floating btn-large waves-effect waves-light grey darken-2 material-icons']) }}
                </td>

                {!! Form::model($product, ['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
                    <td>
                        {!! Form::submit('delete', array('class' => 'btn-floating btn-large waves-effect waves-light red material-icons ', 'Onclick' => 'return confirmDelete();')) !!}
                    </td>
                {!! Form::close() !!}

            </tr>
            @endforeach

        </tbody>

    </table>
    <script src="js/minimal.lightbox.js"></script>

@endsection