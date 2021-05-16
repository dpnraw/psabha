<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Registeredbill;
use App\Remainedbill;
use App\Passedbill;
use App\Certifiedbill;


class BillsController extends Controller
{
    public function registeredBills(){
    	$news = News::take(5)->latest()->get();
        $bills = Registeredbill::all();
    	return view('frontend.partials.bills.registeredBills',compact('news','bills'));
    }
    public function registeredDownload($id){
        $bills=Registeredbill::find($id);
        $path = storage_path().'/app/public/'.(json_decode($bills->file))[0]->download_link;
        $original_name = json_decode($bills->file)[0]->original_name;
        return response()->download($path,$original_name);
    }

    public function remainedBills(){
    	$news = News::take(5)->latest()->get();
        $bills = Remainedbill::all();
    	return view('frontend.partials.bills.remainedBills',compact('news','bills'));
    }
    public function remainedDownload($id){
        $bills=Remainedbill::find($id);
        $path = storage_path().'/app/public/'.(json_decode($bills->file))[0]->download_link;
        $original_name = json_decode($bills->file)[0]->original_name;
        return response()->download($path,$original_name);
    }

    public function passedBills(){
    	$news = News::take(5)->latest()->get();
        $bills = Passedbill::all();
    	return view('frontend.partials.bills.passedBills',compact('news','bills'));
    }

    public function passedDownload($id){
        $bills=Passedbill::find($id);
        $path = storage_path().'/app/public/'.(json_decode($bills->file))[0]->download_link;
        $original_name = json_decode($bills->file)[0]->original_name;
        return response()->download($path,$original_name);
    }

    public function certifiedBills(){
    	$news = News::take(5)->latest()->get();
        $bills = Certifiedbill::all();
        
    	return view('frontend.partials.bills.certifiedBills',compact('news','bills'));
    }

    public function certifiedDownload($id){
        $bills=Certifiedbill::find($id);
        $path = storage_path().'/app/public/'.(json_decode($bills->file))[0]->download_link;
        $original_name = json_decode($bills->file)[0]->original_name;
        return response()->download($path,$original_name);
    }
}
