<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries=Gallery::with('translations')->get();
        return view('admin.gallery.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery=new Gallery();
        $gallery->save();
        $i=0;
        foreach($request->locales as $lcoale){
            $gallery->translateOrNew($lcoale)->title = $request->title[$i];
            $i++;
        }
        $gallery->save();
        return redirect()->route('galleries.index')->with(['success'=>'
        دسته بندی با موفقیت اضافه گریدید.
        ']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
         $i=0;
        foreach($request->locales as $lcoale){
            $gallery->translateOrNew($lcoale)->title = $request->title[$i];
            $i++;
        }
        $gallery->save();
        return redirect()->route('galleries.index')->with([
            'success'=>'
            تغییرات با موفقیت ذخیره شد.
            '
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        
        return redirect()->back()->with(['success'=>'
        دسته بندی مورد نظر حذف شد.
        ']);
    }
}
