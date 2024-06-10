<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::all();
        return view('admin.news.banner.index',compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
          ]);
  
          if($request->hasFile('image')){
              // generate a unique file name
              $filename = time().$request->file('image')->getClientOriginalName();
              // move the uploand file to public/images directory
              $request->file('image')->move(public_path('images_banner'),$filename);
              // sava the product with the file name
              $validateData['image'] = $filename;
          }
  
          Banner::create($validateData);
          return redirect()->route('banner.index')->with('success', 'Banner insert successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('admin.news.banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $banner = Banner::find($id);
        $validateData = $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
          ]);
  
          if($request->hasFile('image')){
              // generate a unique file name
              $filename = time().$request->file('image')->getClientOriginalName();
              // move the uploand file to public/images directory
              $request->file('image')->move(public_path('images_banner'),$filename);
              // sava the product with the file name
              $validateData['image'] = $filename;
          }
  
          $banner->update($validateData);
          return redirect()->route('banner.index')->with('success', 'Banner Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(  $id)
    {
        $banner = Banner::find($id);
        $banner->delete();
        return redirect()->route('banner.index')->with('success', 'Banner Deleted successfully.');
    }
}