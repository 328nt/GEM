<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    function __construct()
    {
    }

    public function home()
    {
        $news = News::orderBy('id', 'DESC')->paginate(4);
        return view('frontend.pages.home', ['news'=>$news]);
    }
    
    public function getlist()
    {
        $news = News::All();
        return view('admin.news.list',['news'=>$news]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function getadd()
    {
        $news = News::All();
        return view('admin/news/add', ['news'=>$news]);
    }
    public function postadd(Request $rq)
    {
        $this->validate($rq, [
            'title' => 'required|max:255',
            'des' => 'required',
            'content' => 'required',
        ],
        [
            'title.required' =>'chua nhap tieu de',
            'des.required' =>'chua nhap tom tat',
            'content.required' =>'chua nhap noidung',

        ]);
        $news = new News;
        $news->title = $rq->title;
        $news->titlenone = str_slug($rq->title);
        $news->description = $rq->des;
        $news->content = $rq->content;
            if($rq->hasFile('image'))
            {
                $file = $rq->file('image');
                $name = $file->getClientOriginalName();
                $image = str_random(4).'-'.$name;
                while (file_exists("upload/news/".$image)) {
                    $image = str_random(4).'-'.$name;
                }
                $file->move("upload/news", $image);
                $news->image = $image;
            }
        else
        {
            $news->image = "";
        }
        $news->save();
        return redirect('admin/news/add')->with('msg','thêm tin tức thành công');
    }

    public function getedit($id)
    {	
        $news = News::find($id);
        return view('admin/news/edit', ['news'=> $news]);
    }
    public function postedit(Request $rq, $id)
    {
        $news = News::find($id);
        $this->validate($rq, [
            'title' => 'required|max:255',
            'des' => 'required',
            'content' => 'required',
        ],
        [
            'title.required' =>'chua nhap tieu de',
            'des.required' =>'chua nhap tom tat',
            'content.required' =>'chua nhap noidung',

        ]);
        $news->title = $rq->title;
        $news->titlenone = str_slug($rq->title);
        $news->description = $rq->des;
        $news->content = $rq->content;
            if($rq->hasFile('image'))
            {
                $file = $rq->file('image');
                $name = $file->getClientOriginalName();
                $image = str_random(4).'-'.$name;
                while (file_exists("upload/news/".$image)) {
                    $image = str_random(4).'-'.$name;
                }
                $file->move("upload/news", $image);
                $news->image = $image;
            }
            $news->save();
            return redirect('admin/news/edit/'.$id)->with('msg', 'sửa Tin tức thành công');
    }

    public function getdelete($id)
    {
        $news = News::find($id);
        $news->delete();

        return redirect('admin/news/list')->with('msg', 'xóa tin tức thành công');
    }



    public function news($id)
    {
        $news = News::find($id);
        $allnews = News::All();
        $hightlight = News::Where('hightlight', 1)->take(4)->get();
    return view('frontend.pages.contentnews', ['news'=>$news, 'allnews'=>$allnews, 'hightlight'=>$hightlight]);
    }
}
