<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Http\Requests\StorenewsRequest;
use App\Http\Requests\UpdatenewsRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class NewsController extends Controller
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
    public function getNewsHomePage(){
        $links = [];
        $fourNews = DB::table('tin')->limit(4)->get();
        $twoNews = DB::table('tin')->limit(2)->orderBy('ngayDang','desc')->get();
        $singleNews =  DB::table('tin')->first();
        $categories = DB::table('loaitin')->select('id','ten')->orderBy('id')->get();
        
        return view('news.homePage',[
            'data4news' =>$fourNews,
            'data2news' =>$twoNews,
            'links'=>$links,
            'singleNews' =>$singleNews,
            'categories'=>$categories]);
    }
    public function getDetails($slug){
        $data = DB::table('tin')->where('slug',$slug)->first();
        return view('news.newsDetails',['data'=>$data]);
    }
    public function getCategories(){
        $categories = DB::table('loaitin')->limit(5)->get();
        return view('blocks.header',[
                   'categories'=>$categories
                ]);
    }
    public function getFlcategory($id){
        $latestNews = DB::table('tin')->where('idLT',$id)->orderBy('ngayDang', 'asc')->limit(3)->get();
        $trendNews = DB::table('tin')->where('idLT',$id)->orderBy('xem', 'asc')->limit(3)->get();
        return view('news.flcategory',[
            'data' =>DB::table('tin')->where('idLT',$id)->simplePaginate(15),
            'latestNews' => $latestNews,
            'trendNews' => $trendNews,
        ]);
    }
    public function handlesearch(){
        $valuesearch = $_POST['valuesearch'];
        $data = DB::table('tin')->where('tieuDe', 'like', "%{$valuesearch}%")->get();        
        return view('news.flcategory',[
            'data'=>$data
         ]);
    }
    
}
