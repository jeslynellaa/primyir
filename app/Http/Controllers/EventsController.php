<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Schoolyear;
use App\Models\Event;
use App\Models\Article;
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
            ->get()->paginate(10);

        $articles = DB::table('articles')
            ->orderBy('date_posted')
            ->get()->paginate(10);

        return view('admin.events.index', compact('events', 'articles'));
    }

    public function create(User $user)
    {
        return view('admin.events.create');
    }

    public function store(Request $request, User $user)
    {

        //dd(request()->thumbnail);
        // $filename = request()->thumbnail->getClientOriginalName();
        // dd($file);
        // Validation of input
        $data = request()->validate([
            'title' => ['required', 'string'],
            'category' => ['required'],
            'event_date' => ['required'],
            'content' => ['required'],
            'thumbnail' => ['image']
        ]);

        $filename = $data['thumbnail']->getClientOriginalName();
        
        Storage::putFileAs( 'public', $data['thumbnail'], $filename);
        //dd($filename);

        $userId = Auth::user()->id;
        //dd($userId);

        $new_event = \App\Models\Event::create([
            'title' => $data['title'],
            'category' => $data['category'],
            'event_date' => $data['event_date'],
            'date_posted' => date("Y-m-d"),
            'content' => $data['content'],
            'thumbnail' => $data['thumbnail'],
            'img' => $filename,
            'admin_id' => $userId
        ]);

        //dd($new_event);
        return redirect()->back()->with("success","New Event Created!");
    }
    
    public function edit(User $user, $id){
        $event = Event::find($id);
        return view('admin.events.edit', compact('event'));
    }

    public function update(User $user, Request $request, $id){
        
        if(isset($request->thumbnail)){
            $data = request()->validate([
                'title' => ['required', 'string'],
                'category' => ['required'],
                'event_date' => ['required'],
                'content' => ['required'],
                'thumbnail' => ['image']
            ]);
            $filename = $data['thumbnail']->getClientOriginalName();
            Storage::putFileAs( 'public', $data['thumbnail'], $filename);
            $userId = Auth::user()->id;
            
            $event = \App\Models\Event::find($id);
            $event->title = $data['title'];
            $event->category = $data['category'];
            $event->event_date = $data['event_date'];
            $event->content = $data['content'];
            $event->thumbnail = $data['thumbnail'];
            $event->img = $filename;
            $event->admin_id = $userId;
            $event->update();
        }
        else{
            $data = request()->validate([
                'title' => ['required', 'string'],
                'category' => ['required'],
                'event_date' => ['required'],
                'content' => ['required'],
                'thumbnail' => ''
            ]);
            $userId = Auth::user()->id;

            $event = \App\Models\Event::find($id);
            $event->title = $data['title'];
            $event->category = $data['category'];
            $event->event_date = $data['event_date'];
            $event->content = $data['content'];
            $event->admin_id = $userId;
            $event->update();
        }

        //dd($new_event);
        return redirect()->back()->with("success","Changes Saved Successfully!");
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
                'date_posted' => date("Y-m-d"),
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
                'date_posted' => date("Y-m-d"),
                'admin_id' => $userId
            ]);
        }
        
        //dd($new_event);
        return redirect()->back()->with("success","New Article Created!");
    }

    public function articles_edit(User $user, $id){
        $article = Article::find($id);
        return view('admin.articles.edit', compact('article'));
    }

    public function articles_update(User $user, Request $request, $id){
        
        if(isset($request->thumbnail)){
            $data = request()->validate([
                'title' => ['required', 'string'],
                'category' => ['required'],
                'event_date' => ['required'],
                'content' => ['required'],
                'thumbnail' => ['image']
            ]);
            $filename = $data['thumbnail']->getClientOriginalName();
            Storage::putFileAs( 'public', $data['thumbnail'], $filename);
            $userId = Auth::user()->id;
            
            $event = \App\Models\Event::find($id);
            $event->title = $data['title'];
            $event->category = $data['category'];
            $event->event_date = $data['event_date'];
            $event->content = $data['content'];
            $event->thumbnail = $data['thumbnail'];
            $event->img = $filename;
            $event->admin_id = $userId;
            $event->update();
        }
        else{
            $data = request()->validate([
                'title' => ['required', 'string'],
                'category' => ['required'],
                'event_date' => ['required'],
                'content' => ['required'],
                'thumbnail' => ''
            ]);
            $userId = Auth::user()->id;

            $event = \App\Models\Event::find($id);
            $event->title = $data['title'];
            $event->category = $data['category'];
            $event->event_date = $data['event_date'];
            $event->content = $data['content'];
            $event->admin_id = $userId;
            $event->update();
        }

        //dd($new_event);
        return redirect()->back()->with("success","Changes Saved Successfully!");
    }
}
