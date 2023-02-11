<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Schoolyear;
use App\Models\Event;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $events = DB::table('events')
            ->orderBy('date_posted')
            ->get();

        $articles = DB::table('articles')
            ->orderBy('date_posted')
            ->get();

        return view('admin.events.index', compact('events', 'articles'));
    }

    public function create(User $user)
    {
        return view('admin.events.create');
    }

    public function store(Request $request, User $user)
    {

        //dd(request()->all());
        // Validation of input
        $data = request()->validate([
            'title' => ['required', 'string'],
            'category' => ['required'],
            'event_date' => ['required'],
            'content' => ['required'],
            'thumbnail' => ['image']
        ]);

        $userId = Auth::user()->id;
        //dd($userId);

        $new_event = \App\Models\Event::create([
            'title' => $data['title'],
            'category' => $data['category'],
            'event_date' => $data['event_date'],
            'date_posted' => $data['event_date'],
            'content' => $data['content'],
            'thumbnail' => $data['thumbnail'],
            'admin_id' => $userId
        ]);

        //dd($new_event);
        return redirect()->back()->with("success","New Event Created!");
    }

    public function articles_create(User $user)
    {
        return view('admin.articles.create');
    }

    public function articles_store(Request $request, User $user)
    {
        // Validation of input
        $data = request()->validate([
            'title' => ['required', 'string'],
            'category' => ['required'],
            'content' => ['required'],
            'author' => ['required'],
            'thumbnail' => ['image']
        ]);

        $userId = Auth::user()->id;
        $date = date("Y/m/d");
        //dd($userId);
        //dd($date);

        if (isset($data['thumbnail'])){
            $new_article = \App\Models\Article::create([
                'title' => $data['title'],
                'category' => $data['category'],
                'author' => $data['author'],
                'thumbnail' => $data['thumbnail'],
                'content' => $data['content'],
                'date_posted' => $date,
                'admin_id' => $userId
            ]);
        }
        else{
            // if elective is not set, assign with 0
            $new_article = \App\Models\Article::create([
                'title' => $data['title'],
                'category' => $data['category'],
                'author' => $data['author'],
                'content' => $data['content'],
                'date_posted' => $date,
                'admin_id' => $userId
            ]);
        }
        

        //dd($new_event);
        return redirect()->back()->with("success","New Article Created!");
    }
}