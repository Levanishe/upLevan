<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use App\Models\Rubric;
use App\Models\Tag;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home Page';
        $posts = Post::orderBy('id', 'desc')->get();
        return view('home', compact('title', 'posts'));
    }

    public function car()
    {
        $title = 'Car Page';
        $posts = Post::orderBy('id', 'desc')->get();
        return view('post/car', compact('title', 'posts'));
    }
    // public function home()
    // {
    //     $title = 'HomeC Page';
    //     $posts = Post::orderBy('id', 'desc')->get();
    //     return view('homeC', compact('title', 'posts'));
    // }
    // public function services()
    // {
    //     $title = 'Services Page';
    //     $posts = Post::orderBy('id', 'desc')->get();
    //     return view('servicesC', compact('title', 'posts'));
    // }

    public function show()
    {
        $title = 'About Page';
        return view('about', compact('title'));
    }

    public function create()
    {
        $title = 'Create Page';
        $rubrics = Rubric::pluck('title', 'id')->all();
        return view('create', compact('title','rubrics'));
    }

    public function store(Request $request)
    {

        $this->validate($request, 
        [
            'title' => 'required|min:5|max:100',
            'content' => 'required',
            'rubric_id' => 'required|integer',
        ],
        [
            'title.required' => 'Заполните поле название',
            'title.min:5' => 'Минимум 5 символов',
            'title.max:100' => 'Максимум 100 символов',
            'content.required' => 'Заполните поле контент',
            'rubric_id.required' => 'Заполните поле рубрика',
            'rubric_id.integer' => 'Поле является числом',
            
        ]
    );

        Post::create($request->all());
        return redirect()->route('home');
    }

}
