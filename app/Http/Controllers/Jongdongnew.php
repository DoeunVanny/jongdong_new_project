<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Logos_Footers;
use App\Models\News;
use Illuminate\Http\Request;

class Jongdongnew extends Controller
{
    public function Index (){
        return view('jongdong_news.index');
    }

    public function NewsDetails(Request $request , $id ){

          $id = $request->id;
          $new_detail  = News::where("id" ,"=" ,"$id")->get();
          $new_related = News::where("id" ,">" ,"$id")->limit(2)->get();
        return view('jongdong_news.news-detail',compact('new_detail','new_related'));
    }

    public function Search(Request $request){

        $search = $request->input('search');
        $new_search = News::where('title','LIKE', "%{$search}%")->get();
        // ->orWhere('description', 'LIKE', "%{$search}%") // Example for multiple fields
        // ->get();
        return view('jongdong_news.search',compact('new_search','search'));
    }

    public function Contact(){
        return view("jongdong_news.contact");
    }
    public function LatestNews(){
        return view("jongdong_news.LatestNews");
    }
    public function Finance(){
        return view("jongdong_news.Finance");
    }
    public function StartBusiness(){
        return view("jongdong_news.StartBusiness");
    }

    




}
