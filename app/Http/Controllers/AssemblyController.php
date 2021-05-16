<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Post;
use App;

class AssemblyController extends Controller
{
    public function introduction(){
    	$locale = App::getLocale();
    	$news = News::take(5)->latest()->get();
    	if($locale == "nep"){
    		$post = Post::where('slug', '=', 'assembly-introduciton-nepali')->firstOrFail();
    	}
    	else{
    		$post = Post::where('slug', '=', 'assembly-introduciton-english')->firstOrFail();
    	}
    	
    	return view('frontend.partials.assemblyIntroduction',compact('news','post'));
    }

    public function majorFunctions(){
        $news = News::take(5)->latest()->get();
        return view('frontend.partials.assemblyMajorFunction',compact('news'));
    }

    public function officials(){
        $news = News::take(5)->latest()->get();
        return view('frontend.partials.assemblyOfficials',compact('news'));
    }

    public function politicalParties(){
        $news = News::take(5)->latest()->get();
        return view('frontend.partials.assemblyPoliticalParties',compact('news'));
    }

    public function assemblyMembers(){
        $news = News::take(5)->latest()->get();
        return view('frontend.partials.assemblyMembers',compact('news'));
    }

    public function personalSecretary(){
        $news = News::take(5)->latest()->get();
        return view('frontend.partials.assemblyPersonalSecretary',compact('news'));
    }
}
