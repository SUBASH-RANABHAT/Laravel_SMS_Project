<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogInfoRequest;
use App\Models\About;
use App\Models\Abouts;
use App\Models\Notice;
use Illuminate\Http\Request;
use App\Models\Pages;
use Facade\FlareClient\Stacktrace\File as StacktraceFile;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Support\Facades\File;


class PageController extends Controller
{

    public function __construct(Pages $model)
    {
        $this->model = $model;
    }

    public function AddPage(Request $request)
    {
        $b_post = Pages::find(1);
        return view('Backend.addpage', compact('b_post'));
    }

    // public function store(StoreBlogInfoRequest $request)
    // {
    //     $b_post = $this->model->create([
    //         'page_title' => $request->page_title,
    //         'slogan' => $request->slogan,
    //         'content' => $request->content,
    //     ]);

    //     if ($request->hasFile('image')) {
    //         $file = $request->file('image');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = time() . '.' . $extension;
    //         $file->move('uploads/student/', $filename);
    //         $b_post->image =  $filename;
    //         $b_post->save();
    //     }

    //     return view('Backend.edited_home')->with('status', "Data entered Successfully.");
    // }

    public function blog_post(Request $request)
    {
        $b_post = $this->model->get();
        return view('frontend.f_layouts.index', ['b_post' => $b_post]);
    }

    public function savedata(Request $request)
    {

        $b_post = Pages::where('id', '1')->first();

        if ($b_post) {
            $b_post->page_title = $request->page_title;
            $b_post->slogan = $request->slogan;
            $b_post->content = $request->content;

            if ($request->hasFile('image')) {

                $destination = 'uploads/b_post/' . $b_post->image;
                if (FacadesFile::exists($destination)) {
                    FacadesFile::delete($destination);
                }

                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/blog_post/', $filename);
                $b_post->image =  $filename;
            }
            $b_post->save();

            return redirect('admin/page-add')->with('message', 'Blog updated');
        } else { //creating 

            $b_post = new Pages;
            $b_post->page_title = $request->page_title;
            $b_post->slogan = $request->slogan;
            $b_post->content = $request->content;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/blog_post/', $filename);
                $b_post->image =  $filename;
            }
            $b_post->save();

            return redirect('admin/page-add')->with('message', 'Blog Added');
        }
    }


    public function AboutAdd(Request $request)
    {
        $a_post = Abouts::find(1);
        return view('Backend.about_add', ['a_post' => $a_post]);
    }

    public function about_post(Request $request)
    {
        $a_post = $this->model->get();
        return view('frontend.f_layouts.index', ['a_post' => $a_post]);
    }

    public function aboutsave(Request $req)
    {

        $a_post = Abouts::where('id', '1')->first();

        if ($a_post) {
            $a_post->about_title = $req->about_title;
            $a_post->content = $req->content;

            if ($req->hasFile('image')) {

                $destination = 'uploads/student/' . $a_post->image;
                if (FacadesFile::exists($destination)) {
                    FacadesFile::delete($destination);
                }

                $file = $req->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/blog_post/', $filename);
                $a_post->image =  $filename;
            }
            $a_post->save();

            return redirect('admin/about-add')->with('message', 'Blog updated');
        } else { //creating 

            $a_post = new Abouts();
            $a_post->about_title = $req->about_title;
            $a_post->content = $req->content;
            if ($req->hasFile('image')) {
                $file = $req->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/blog_post/', $filename);
                $a_post->image =  $filename;
            }
            $a_post->save();

            return redirect('admin/about-add')->with('message', 'Blog Added');
        }
    }



    public function NoticeAdd(Request $request)
    {
        $n_post = Notice::find(1);
        return view('Backend.notice_add', ['n_post' => $n_post]);
    }

    public function notice_post(Request $request)
    {
        $n_post = $this->model->get();
        return view('frontend.f_layouts.index', ['n_post' => $n_post]);
    }

    public function noticesave(Request $req)
    {

        $n_post = Notice::where('id', '1')->first();

        if ($n_post) {
            $n_post->notice1_title = $req->notice1_title;
            $n_post->content1 = $req->content1;
            $n_post->notice2_title = $req->notice2_title;
            $n_post->content2 = $req->content2;
            $n_post->notice3_title = $req->notice3_title;
            $n_post->content3 = $req->content3;
            $n_post->notice4_title = $req->notice4_title;
            $n_post->content4 = $req->content4;
            $n_post->notice5_title = $req->notice5_title;
            $n_post->content5 = $req->content5;
            $n_post->notice6_title = $req->notice6_title;
            $n_post->content6 = $req->content6;
            $n_post->save();

            return redirect('admin/notice-add')->with('message', 'Blog updated');
        } else { //creating 

            $n_post = new Notice();
            $n_post->notice1_title = $req->notice1_title;
            $n_post->content1 = $req->content1;
            $n_post->notice2_title = $req->notice2_title;
            $n_post->content2 = $req->content2;
            $n_post->notice3_title = $req->notice3_title;
            $n_post->content3 = $req->content3;
            $n_post->notice4_title = $req->notice4_title;
            $n_post->content4 = $req->content4;
            $n_post->notice5_title = $req->notice5_title;
            $n_post->content5 = $req->content5;
            $n_post->notice6_title = $req->notice6_title;
            $n_post->content6 = $req->content6;
            $n_post->save();

            return redirect('admin/notice-add')->with('message', 'Blog Added');
        }
    }
}
