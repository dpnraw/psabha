<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Publication;
use App\Notice;
use App\DailyInformation;
use App\MeetingBreifDetail;

class PublicationController extends Controller
{
	public function information(){
		$news = News::take(5)->latest()->get();
    	$publications = Notice::all();;
    	return view('frontend.publications.information',compact('news','publications'));
	}

    public function noticeDownload($id){
       $news=Notice::find($id);
        $path = storage_path().'/app/public/'.(json_decode($news->file))[0]->download_link;
        $original_name = json_decode($news->file)[0]->original_name;
        return response()->download($path,$original_name);
    }

	public function dailyInformation(){
		$news = News::take(5)->latest()->get();
    	$publications = DailyInformation::all();
    	return view('frontend.publications.dailyInformation',compact('news','publications'));
	}
    public function dailyInformationDownload($id){
       $news=DailyInformation::find($id);
        $path = storage_path().'/app/public/'.(json_decode($news->file))[0]->download_link;
        $original_name = json_decode($news->file)[0]->original_name;
        return response()->download($path,$original_name);
    }

	public function meetingsBriefDetails(){
		$news = News::take(5)->latest()->get();
    	$publications = MeetingBreifDetail::all();
    	return view('frontend.publications.meetingsBriefDetails',compact('news','publications'));
	}

    public function breifDownload($id){
       $news=MeetingBreifDetail::find($id);
        $path = storage_path().'/app/public/'.(json_decode($news->file))[0]->download_link;
        $original_name = json_decode($news->file)[0]->original_name;
        return response()->download($path,$original_name);
    }
    public function publications(){
    	$news = News::take(5)->latest()->get();
    	$publications = Publication::all();
    	return view('frontend.publications.allPublications',compact('news','publications'));
    }
    public function publicationsDownload($id){
       $news=Publication::find($id);
       dd($news);
        $path = storage_path().'/app/public/'.(json_decode($news->file))[0]->download_link;
        $original_name = json_decode($news->file)[0]->original_name;
        return response()->download($path,$original_name);
    }
}
