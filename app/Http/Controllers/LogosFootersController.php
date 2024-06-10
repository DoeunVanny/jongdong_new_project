<?php

namespace App\Http\Controllers;

use App\Models\Logos_Footers;
use Illuminate\Http\Request;

class LogosFootersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logofooter = Logos_Footers::all();
        return view('admin.news.logo_footer.index',compact('logofooter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.logo_footer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'type' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
          ]);
  
          if($request->hasFile('image')){
              // generate a unique file name
              $filename = time().$request->file('image')->getClientOriginalName();
              // move the uploand file to public/images directory
              $request->file('image')->move(public_path('images_logo_footer'),$filename);
              // sava the product with the file name
              $validateData['image'] = $filename;
          }
  
          Logos_Footers::create($validateData);
          return redirect()->route('logoFooter.index')->with('success', 'LogoFooter insert successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Logos_Footers $logos_Footers)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Logos_Footers $logos_Footers ,$id)
    {
        $logofooter =Logos_Footers::find($id);
        return view('admin.news.logo_footer.edit',compact('logofooter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $logofooter = Logos_Footers::find($id);
        $validateData = $request->validate([
            'type' => 'required',
            'image' => 'nullable|image|mimes:jpeg,pang,jpg,gif,png|max:2048',
          ]);
  
          if($request->hasFile('image')){
              // generate a unique file name
              $filename = time().$request->file('image')->getClientOriginalName();
              // move the uploand file to public/images directory
              $request->file('image')->move(public_path('images_logo_footer'),$filename);
              // sava the product with the file name
              $validateData['image'] = $filename;
          }
  
          $logofooter->update($validateData);
          return redirect()->route('logoFooter.index')->with('success', 'LogoFooter Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logos_Footers $logos_Footers , $id)
    {
        $logofooter =Logos_Footers::find($id);
        $logofooter->delete();
        return redirect()->route('logoFooter.index')->with('success', 'LogoFooter Deleted successfully.');
    }
}
