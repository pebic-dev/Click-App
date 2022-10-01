<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use Inertia\Inertia;
use Redirect;
use App\Models\User;

class AdController extends Controller
{
    public function showVip_1(Request $request){
        $ads = Ad::all();
        $user = $request->user();
        if($user->deposit + $user->balance >= 30){
        return Inertia::render('Vip-Group',[
            'ads' => $ads,
            'tier' => 1,
        ]);
    }
    else{
        return Redirect::route('dashboard');
    }
    }

    public function logicVip_1(Request $request){
        $user = $request->user();
        if($user->deposit + $user->balance >= 30 && $user->clicks > 0){
            $user->clicks = $user->clicks - 1;
            $user->balance = $user->balance + ($user->balance + $user->deposit) * 0.04/30;
            $user->save();
            return response('success',200);
        }else{
            return response('unauthorized', 401);
        }
    }

    public function showVip_2(Request $request){
        $ads = Ad::all();
        $user = $request->user();
        if($user->deposit + $user->balance >= 500 && $user->reffs > 5){
        return Inertia::render('Vip-Group',[
            'ads' => $ads,
            'tier' => 2,
        ]);
    }
    else{
        return Redirect::route('dashboard');
    }
    }

    public function logicVip_2(Request $request){
        $user = $request->user();
        if($user->deposit + $user->balance >= 500 && $user->reffs > 5){
            $user->clicks = $user->clicks - 1;
            $user->balance = $user->balance + ($user->balance + $user->deposit) * 0.05/30;
            $user->save();
            return response('success',200);
        }
    }

    public function showVip_3(Request $request){
        $ads = Ad::all();
        $user = $request->user();
        if($user->deposit + $user->balance >= 500 && $user->reffs > 10){
            
        return Inertia::render('Vip-Group',[
            'ads' => $ads,
            'tier' => 3,
        ]);
    }
    else{
        return Redirect::route('dashboard');
    }
    }

    public function logicVip_3(Request $request){
        $user = $request->user();
        if($user->deposit + $user->balance >= 500 && $user->reffs > 10){
            $user->clicks = $user->clicks - 1;
            $user->balance = $user->balance + ($user->balance + $user->deposit) * 0.06/30;
            $user->save();
            return response('success',200);
        }
    }

    public function showVip_4(Request $request){
        $ads = Ad::all();
        $user = $request->user();
        if($user->deposit + $user->balance >= 5000 && $user->reffs > 10){
        return Inertia::render('Vip-Group',[
            'ads' => $ads,
            'tier' => 4,
        ]);
    }
    else{
        return Redirect::route('dashboard');
    }
    }

    public function logicVip_4(Request $request){
        $user = $request->user();
        if($user->deposit + $user->balance >= 5000){
            $user->clicks = $user->clicks - 1;
            $user->balance = $user->balance + ($user->balance + $user->deposit) * 0.065/30;
            $user->save();
            return response('success',200);
        }
    }


    public function showRefferals(Request $request){
        $user = $request->user();
        $refferals = User::where('referrer', $user->name)->get();
        return Inertia::render('Refs',[
            'refs' => $refferals
        ]);
    }
    
}
