<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Product;
use App\Models\Gallery;
use Intervention\Image\Facades\Image as Img;
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function add_photos(Product $product){
        
        return view('admin.product.images',compact('product'));
    } 
    
    public function gallery_photos(Gallery $gallery){
        
        return view('admin.gallery.images',compact('gallery'));
    }
     
    public function index()
    {
        // $img = Img::make('images/product/1534357908زعفران.jpg')->resize(300, 200)->save('thumbnails/'.'images/product/1534357908زعفران.jpg');
        // $img = Img::make('1.jpg')->resize(300, 200)->save('bar.jpg');
        // $image=Image::first();
        // $product=Product::find(27);
        return 'hi';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $file=$request->file('file');
        $name=time().$file ->getClientOriginalName();
        $name = preg_replace('/\s+/', '-', $name);
        
        // $file->move('images/product/',$name);
        $image=new Image;
        if(isset($request->product_id)){
           $image->path='images/product/'.$name;
           $product=Product::where('product_id',$request->product_id);
           $image->imageable_id=$request->product_id;
           $image->imageable_type='App\Models\Product';
           Img::make($request->file('file'))->resize(368, 341)->save('images/product/'.$name,80);
        }
        if(isset($request->gallery_id)){
           $image->path='images/gallery/'.$name;
           $product=Gallery::where('gallery_id',$request->gallery_id);
           $image->imageable_id=$request->gallery_id;
           $image->imageable_type='App\Models\Gallery';
           Img::make($request->file('file'))->save('images/gallery/'.$name,80);
        }
        // $img = Img::make($image->path)->resize(300, 200)->encode('jpg')->save('thumbnails/'.$image->path);
        
        
        $image->save();
        // $img = Image::make('public'.$image->path)->resize(300, 200);
        
        $img = Img::make($image->path)->resize(270, 250)->save('thumbnails/'.$image->path,60);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        // $product=Product::where('product_id',$request->product_id)->get();
        $product=$image->imageable;
        $images=$product->images;
        
        foreach($images as $photo){
            
            $photo->main_image=0;
            $photo->update();
        }
        $image->main_image=1;
        $image->update();
         return redirect()->back()->with(['success'=>'
       تصویر اصلی تغییر پیدا کرد.
        ']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
         if(!is_null($image)){
            if(file_exists(public_path() .'/'. $image->path)){
                unlink(public_path() .'/'. $image->path);}
        }
        $image->delete();
        return redirect()->back()->with(['success'=>'
        تصویر مورد نظر حذف شد
        ']);
    }
}
