<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\PermanentStaff;
class SecretariatController extends Controller
{
    public function staffs(){
    	$news = News::take(5)->latest()->get();
        $pstaffs = PermanentStaff::orderBy('order_no')->get();
    	return view ('frontend.partials.secretariatSatffs',compact('news','pstaffs'));
    }

    public function orgStructure(){
    	$news = News::take(5)->latest()->get();
    	return view ('frontend.partials.orgStructure',compact('news'));
    }

    public function detailsOfPosts(){
    	$news = News::take(5)->latest()->get();
    	return view ('frontend.partials.detailsOfPosts',compact('news'));
    }
}
