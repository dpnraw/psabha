<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Gallery;
use App\Video;
use App\LiveStream;

class GalleryController extends Controller
{
    public function photoGallery(){
    	$news = News::take(5)->latest()->get();
    	$photos = Gallery::all();
    	return view('frontend.gallery.allPhoto',compact('news','photos'));
    }

    public function videoGallery(){
    	$news = News::take(5)->latest()->get();
    	$videos = Video::all();
    	return view('frontend.gallery.videoGallery',compact('news','videos'));
    }

    public function liveStream(){
    	$news = News::take(5)->latest()->get();
    	$links = LiveStream::all();
    	return view ('frontend.gallery.liveStream',compact('news','links'));
    }

}
