<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use Inertia\Inertia;

class AdController extends Controller
{
    public function showVip_1(){
        $ads = Ad::all();
        $count = count($ads);
        $index = rand(0,$count-1);
        return Inertia::render('Vip-Group',[
            'ads' => $ads,
            'tier' => 1,
        ]);
    }
    
}
