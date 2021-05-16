<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Post;
use App\Busniessadvisory;
use App\Justice;
use App\Legislation;
use App\Publicaccount;
use App\Finance;
use App;
use App\Activity;

class CommitteeController extends Controller
{
    public function businessAdvisoryCommittee(){
    	$news = News::take(5)->latest()->get();
        $advisories = Busniessadvisory::all();
        $activities = Activity::all()->where('type','option1');
    	return view('frontend.partials.businessAdvisoryCommittee',compact('news','advisories','activities'));
    }

    public function activityDownload($id){
        $files=Activity::find($id);
        $path = storage_path().'/app/public/'.(json_decode($files->file))[0]->download_link;
        $original_name = json_decode($files->file)[0]->original_name;
        return response()->download($path,$original_name);
    }

    public function advisoryDownload($id){
        $files=Busniessadvisory::find($id);
        if (App::isLocale('en')) {
                $length = strlen($files->file_en);
            if ($length > 10) {
                $path = storage_path().'/app/public/'.(json_decode($files->file_en))[0]->download_link;
                    $original_name = json_decode($files->file_en)[0]->original_name;
            }else{
                $path = storage_path().'/app/public/'.(json_decode($files->file_nep))[0]->download_link;
                $original_name = json_decode($files->file_nep)[0]->original_name;
            }
            } else{
                $path = storage_path().'/app/public/'.(json_decode($files->file_nep))[0]->download_link;
                $original_name = json_decode($files->file_nep)[0]->original_name;
            }
        
        
        return response()->download($path,$original_name);
    }

    public function legislationCommittee(){
    	$news = News::take(5)->latest()->get();
        $legislations = Legislation::all();
        $activities = Activity::all()->where('type','option2');
    	return view('frontend.partials.legislationCommittee',compact('news','legislations','activities'));
    }
    public function legislationDownload($id){
        $files=Legislation::find($id);
        if (App::isLocale('en')) {
                $length = strlen($files->file_en);
            if ($length > 10) {
                $path = storage_path().'/app/public/'.(json_decode($files->file_en))[0]->download_link;
                    $original_name = json_decode($files->file_en)[0]->original_name;
            }else{
                $path = storage_path().'/app/public/'.(json_decode($files->file_nep))[0]->download_link;
                $original_name = json_decode($files->file_nep)[0]->original_name;
            }
            } else{
                $path = storage_path().'/app/public/'.(json_decode($files->file_nep))[0]->download_link;
                $original_name = json_decode($files->file_nep)[0]->original_name;
            }
        
        
        return response()->download($path,$original_name);
    }

    public function publicAccountCommittee(){
    	$news = News::take(5)->latest()->get();
        $publicaccounts = Publicaccount::all();
        $activities = Activity::all()->where('type','option3');
    	return view('frontend.partials.publicAccountCommittee',compact('news','publicaccounts','activities'));
    }
    public function publicAccountDownload($id){
        $files=Publicaccount::find($id);
        if (App::isLocale('en')) {
                $length = strlen($files->file_en);
            if ($length > 10) {
                $path = storage_path().'/app/public/'.(json_decode($files->file_en))[0]->download_link;
                    $original_name = json_decode($files->file_en)[0]->original_name;
            }else{
                $path = storage_path().'/app/public/'.(json_decode($files->file_nep))[0]->download_link;
                $original_name = json_decode($files->file_nep)[0]->original_name;
            }
            } else{
                $path = storage_path().'/app/public/'.(json_decode($files->file_nep))[0]->download_link;
                $original_name = json_decode($files->file_nep)[0]->original_name;
            }
        
        
        return response()->download($path,$original_name);
    }

    public function financeCommittee(){
    	$news = News::take(5)->latest()->get();
        $finances = Finance::all();
        $activities = Activity::all()->where('type','option4');
    	return view('frontend.partials.financeCommittee',compact('news','finances','activities'));
    }
    public function financeDownload($id){
        $files=Finance::find($id);
        if (App::isLocale('en')) {
                $length = strlen($files->file_en);
            if ($length > 10) {
                $path = storage_path().'/app/public/'.(json_decode($files->file_en))[0]->download_link;
                    $original_name = json_decode($files->file_en)[0]->original_name;
            }else{
                $path = storage_path().'/app/public/'.(json_decode($files->file_nep))[0]->download_link;
                $original_name = json_decode($files->file_nep)[0]->original_name;
            }
            } else{
                $path = storage_path().'/app/public/'.(json_decode($files->file_nep))[0]->download_link;
                $original_name = json_decode($files->file_nep)[0]->original_name;
            }
        
        
        return response()->download($path,$original_name);
    }

    public function justiceCommittee(){
    	$news = News::take(5)->latest()->get();
        $justices = Justice::all();
        $activities = Activity::all()->where('type','option5');
    	return view('frontend.partials.justiceCommittee',compact('news','justices','activities'));
    }
    public function justiceDownload($id){
        $files=Justice::find($id);
        if (App::isLocale('en')) {
                $length = strlen($files->file_en);
            if ($length > 10) {
                $path = storage_path().'/app/public/'.(json_decode($files->file_en))[0]->download_link;
                    $original_name = json_decode($files->file_en)[0]->original_name;
            }else{
                $path = storage_path().'/app/public/'.(json_decode($files->file_nep))[0]->download_link;
                $original_name = json_decode($files->file_nep)[0]->original_name;
            }
            } else{
                $path = storage_path().'/app/public/'.(json_decode($files->file_nep))[0]->download_link;
                $original_name = json_decode($files->file_nep)[0]->original_name;
            }
        
        
        return response()->download($path,$original_name);
    }

}
