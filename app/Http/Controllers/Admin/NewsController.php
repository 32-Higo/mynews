<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    // 以下を追記
    public function add()
    {
        return view('admin.news.create');
    }

        // 以下を追記
    public function create(Request $request)
    {
        
        $this->validate($request, News::$rules);
        
        $neews = new News;
        $form = $request->all();
        
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $news->image_path = null;
        }
        
        unset($form['_token']);
        unset($form['image']);
        
        $news->fill($form);
        $news->save();
        // admin/news/createにリダイレクトする
        return redirect('admin/news/create');
    }  
}

