<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::orderBy('id','desc')->with(['category.translations','translations'])->paginate(10);
        $categories=Category::with('translations')->get();
        return view('admin.product.index',compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::with('translations')->get();
        return view('admin.product.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=new Product();
        $product->subject=$request->name[0];
        $product->category_id=$request->category_id;
        $product->save();
        // $product->translate('en');
        $i=0;
        foreach($request->locales as $lcoale){
            $product->translateOrNew($lcoale)->name = $request->name[$i];
            $product->translateOrNew($lcoale)->desc_short = $request->desc_short[$i];
            $product->translateOrNew($lcoale)->description = $request->description[$i];
            $i++;
        }
        $product->save();
        return redirect()->route('product.images',$product);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        
        $categories=Category::with('translations')->get();
        return view('admin.product.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
         
        $product->subject=$request->name[0];
        $product->category_id=$request->category_id;
        $product->save();
        // $product->translate('en');
        $i=0;
        foreach($request->locales as $lcoale){
            $product->translateOrNew($lcoale)->name = $request->name[$i];
            $product->translateOrNew($lcoale)->desc_short = $request->desc_short[$i];
            $product->translateOrNew($lcoale)->description = $request->description[$i];
            $i++;
        }
        $product->save();
        return redirect()->route('products.index')->with([
            'success'=>'
            تغییرات با موفقیت ذخیره شد.
            '
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        foreach($product->images as $photo){
            if(!is_null($photo)){
                if(file_exists(public_path() .'/'. $photo->path)){
                    unlink(public_path() .'/'. $photo->path);}
            }
            
             $photo->delete();
        }
        $product->delete();
        
        return redirect()->back()->with(['success'=>'
        محصول مورد نظر حذف شد.
        ']);
    }
    
    
    public function product_search(Request $request)
    {
        $term=$request->term;

    	$products = Product::whereHas('category', function ($query) use ( $term ) {
            $query->where('_lft', 'like', '%'.$term.'%');
        })->orWhere('subject', 'LIKE', '%'.$term.'%')->get();

    	return view('admin.product.search',compact('products'));
        
    }
    
    public function single_category($id){
        $categories=Category::with('translations')->get();
        $products=Product::where('category_id',$id)->get();
        return view('admin.product.index',compact('products','categories'));   
    }
}
