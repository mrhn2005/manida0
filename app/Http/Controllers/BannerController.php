<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Img;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners=Banner::all();
        return view('admin.banner.images',compact('banners'));
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
        $image=new Banner;
        
        $image->path='images/slider/'.$name;
        Img::make($request->file('file'))->save('images/slider/'.$name,60);

        // $img = Img::make($image->path)->resize(300, 200)->encode('jpg')->save('thumbnails/'.$image->path);
        
        
        $image->save();
        // $img = Image::make('public'.$image->path)->resize(300, 200);
        
        $img = Img::make($image->path)->resize(300, 200)->save('thumbnails/'.$image->path);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $images=Banner::all();
        foreach($images as $photo){
            
            $photo->main_banner=0;
            $photo->update();
        }
        $banner->main_banner=1;
        $banner->update();
         return redirect()->back()->with(['success'=>'
       تصویر اصلی تغییر پیدا کرد.
        ']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        if(!is_null($banner)){
            if(file_exists(public_path() .'/'. $banner->path)){
                unlink(public_path() .'/'. $banner->path);}
        }
        $banner->delete();
        return redirect()->back()->with(['success'=>'
        تصویر مورد نظر حذف شد
        ']);
    }
}
