<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Info;
use App\Models\Description;
use App\Models\History;
use App\Models\Curriculum;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class KioskController extends Controller
{
    public function index()
    {
        $info = DB::table('info')
        ->where('id', 1)
        ->first();
    
        $description = DB::table('description')->get();

        $history = DB::table('history')->get();

        //dd($info);
        return view('admin.kiosk.index', compact('info', 'description', 'history'));
    }

    public function update(Request $request, User $user)
    {
        $this->authorize('create', $user);
        //dd($request->all());
        
        //============ INFO ============
        $info = Info::where('id', 1)->first();

        $info_data = request()->validate([
            'schoolName' => ['string', 'max:255'],
            'gen_desc' =>''
        ]);

        $info->name = $info_data['schoolName'];
        $info->details = $info_data['gen_desc'];
        $info->update();

        //============ DESCRIPTION ============
        $count = Description::all()->count();
        //dd($count);

        for($i=1; $i<=$count; $i++){
            $description = Description::where('id', $i)->first();
            //dd($description);

            $desc_data = request()->validate([
                'desc_title'.$i => ['string', 'max:255'],
                'description'.$i =>''
            ]);
            //dd($desc_data);

            $description->title = $desc_data['desc_title'.$i];
            $description->description = $desc_data['description'.$i];
            $description->update();
        }

        //========== HISTORY ============
        $count = History::all()->count();
        //dd($count);

        for($i=1; $i<=$count; $i++){
            $history = History::where('id', $i)->first();
            //dd($history);

            $hist_data = request()->validate([
                'history_title'.$i => ['string', 'max:255'],
                'history_desc'.$i =>''
            ]);
            //dd($hist_data);

            $history->title = $hist_data['history_title'.$i];
            $history->description = $hist_data['history_desc'.$i];
            $history->update();
        }

        return redirect()->back()->with("success","Changes Saved Successfully!");
    }
}
