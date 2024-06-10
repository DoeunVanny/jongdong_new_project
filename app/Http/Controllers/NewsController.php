<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $new = News::paginate(4); ;
        return view('admin.news.new.index',compact('new'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.new.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'title_detail' => 'required',
            'type' => 'required',
            'description' => 'required',
            'image' => 'required|nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image_detail' => 'required|nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);
    
        $input = $request->all();
    
        // Handle the 'image' file upload
        if ($image = $request->file('image')) {
            $ImageNews = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images_new'),$ImageNews);
            $input['image'] = $ImageNews;
        }
    
        // Handle the 'image_detail' file upload
        if ($imageDetail = $request->file('image_detail')) {
            $ImageNewsDetail = time(). '.' . $imageDetail->getClientOriginalExtension();
            $imageDetail->move(public_path('images_new'),$ImageNewsDetail);
            $input['image_detail'] = $ImageNewsDetail;
        }
    
        News::create($input);
        return redirect()->route('new.index')->with('success', 'News inserted successfully.');
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
        $new = News::find($id);
        return view('admin.news.new.edit',compact('new'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $new = News::find($id);
        
        $validateData = $request->validate([
            'title' => 'required',
            'title_detail' => 'required',
            'type' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image_detail' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);
    
        $input = $request->all();
    
        // Handle the 'image' file upload
        if ($image = $request->file('image')) {
            $ImageNews = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images_new'),$ImageNews);
            $input['image'] = $ImageNews;
        }
    
        // Handle the 'image_detail' file upload
        if ($imageDetail = $request->file('image_detail')) {
            $ImageNewsDetail = time(). '.' . $imageDetail->getClientOriginalExtension();
            $imageDetail->move(public_path('images_new'),$ImageNewsDetail);
            $input['image_detail'] = $ImageNewsDetail;
        }
    
          $new->update($input);
          return redirect()->route('new.index')->with('success', 'News Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(  $id)
    {
        $new = News::find($id);
        $new->delete();
        return redirect()->route('new.index')->with('success', 'News Deleted successfully.');
    }
}
