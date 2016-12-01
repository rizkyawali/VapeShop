<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Product;

use Image;
use Sentinel;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::all();
        return view('product.index', ['products' => $products]);
        $products = Product::paginate(2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = new Product([
           'title' => $request->get('title'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'image_extension' => $request->file('image')->getClientOriginalExtension()
        ]);

        $pathFolder = '/images/';
        $pathFolderThumb = '/images/thumbnail/';

        $product->image_path = $pathFolder;
        $product->save();

        $file = Input::file('image');

        $productTitle = $product->title;
        $productDesc = $product->description;
        $productPrice = $product->price;
        $extension = $request->file('image')->getClientOriginalExtension();

        $image = Image::make($file->getRealPath());

        $image->save(public_path() .$pathFolder .$productTitle .'.'. $extension)
            ->resize(300,300)
            ->save(public_path() .$pathFolderThumb. 'thumb-' .$productTitle .'.'. $extension);

        flash($product->title .' Successfully Added', 'success');
        return redirect()->route('productList', [$product]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->save();

        $imageProduct = '/images/';
        $pathThumbProduct = '/images/thumbnail/';

        $file = Input::file('image');

        $productTitle = $product->title;
        $extension = $request->file('image')->getClientOriginalExtension();

        $image = Image::make($file->getRealPath());

        $image->save(public_path() . $imageProduct . $productTitle . '.' . $extension)
            ->resize(300, 300)
            ->save(public_path() . $pathThumbProduct . 'thumb-' . $productTitle . '.' . $extension);


        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $thumbPath = $product->image_path. 'thumbnail/';

        File::delete(public_path($product->image_path).
            $product->title. '.'.
            $product->image_extension);

        File::delete(public_path($thumbPath). 'thumb-'.
            $product->title. '.'.
            $product->image_extension);

        Product::destroy($id);

        flash($product->title.' Has Deleted', 'warning');
        return redirect()->route('productList');
    }
}
