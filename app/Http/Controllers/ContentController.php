<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locales=config('translatable.locales');
        $contents=Content::all();
        // return $contents[0];
        // return $locales;
        return view('admin.content.content',compact('locales','contents'));
        
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
        // return $request->locale;
        $contents=Content::find($request->content_id);
        $i=0;
        
        foreach($request->locales as $locale){
            $content=Content::where('locale',$locale)->first();
            if(empty($content)){
                $content=new Content();
                $content->locale=$locale;
            }
            $content->aboutus=$request->aboutus[$i];
            $content->address=$request->address[$i];
            $content->save();
            $i++;
        } 
        
        
        // if(count($contents)==0){
        //     foreach($request->locales as $locale){
        //         $content=new Content();
        //         $content->locale=$locale;
        //         $content->aboutus=$request->aboutus[$i];
        //         $content->address=$request->address[$i];
        //         $content->save();
        //         $i++;
        //     }  
        // }else{
        //     foreach($contents as $content){
        //         $content->aboutus=$request->aboutus[$i];
        //         $content->address=$request->address[$i];
        //         $content->save();
        //         $i++;
        //     }
        // }
        
        return redirect()->back()->with(['success'=>
        'با موفقیت به روز شد.'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        //
    }
}
