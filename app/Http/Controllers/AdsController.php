<?php

namespace PublicaSalta\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use PublicaSalta\Ad;
use PublicaSalta\Category;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
      //  return $ads;
        //dd($categories);
        //$title="Título del anuncio";
        //return view("home",['ads'=>$ads]);
        return view ("ads.create",["categories" => $categories]);
        //  return view("home",['ads'=>$ads]);
    }

    public function my_ads()
    {
        //
        $user=Auth::user();
        $my_ads = Ad::where("user_id",$user->id)->get();
      //  return $ads;
        //dd($ads);
        //$title="Título del anuncio";
        //return view("home",['ads'=>$ads]);
        return view ("ads.myAds",["my_ads" => $my_ads]);
        //  return view("home",['ads'=>$ads]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
          "title" => "required",
          "content" => "required",
        ]);

        if($validator->fails()){
          return redirect()
          ->route("ad_create_path")
          ->withErrors($validator)
          ->withInput();
        }

        $ad = new Ad;
        $ad->title= $request->get("title");
        $ad->content= $request->get("content");
        $ad->user_id = Auth::id();
        $ad->category_id = $request->get("category_id");
        $ad->save();

        return redirect()->route("ad_show_path",$ad->id);
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
        $ad = Ad::findOrFail($id);
        return view ('ad',['ad'=>$ad]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ad::findOrFail($id);
        $categories = Category::all();
        //$category_id = Category::get($ad->category_id);
        return view ("ads.edit",[
          "ad"=>$ad,
          "categories" => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ad = Ad::findOrFail($id);
        $ad->title= $request->get("title");
        $ad->content= $request->get("content");
        $ad->user_id = Auth::id();
        $ad->category_id = $request->get("category_id");
        $ad->save();
        return redirect()->route("ad_show_path",$ad->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
