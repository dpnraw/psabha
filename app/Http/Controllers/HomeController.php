<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\News;
use App\Slider;
use App\Feedback;
use App\Gallery;
use App\Annualreport;
use App\Pressrelease;
use App\Publication;
use App\Journal;
use App\Rule;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $news = News::take(5)->latest()->get();
        $galleries = Gallery::all();
        $publications = Publication::take(5)->latest()->get();
        $pressreleases = Pressrelease::take(5)->latest()->get();
        $annualreports = Annualreport::take(5)->latest()->get();
        $journals = Journal::take(5)->latest()->get();
        $rules = Rule::take(5)->latest()->get();
        return view('frontend.home',compact('news','sliders','galleries','publications','annualreports','pressreleases','journals','rules'));
    }

    public function provinceAssemblyStaffs(){
        $news = News::take(5)->latest()->get();
        return view('frontend.partials.provinceStaffs',compact('news'));
    }

    public function feedback(){
        $feedback = new Feedback();
        $feedback->name = request('name');
        $feedback->email = request('email');
        $feedback->subject = request('subject');
        $feedback->body = request('body');
        $feedback->save();


        return back()->with('success','Your feedback has been taken.');
    }

    public function pressDownload($id){
        $files=Pressrelease::find($id);
        if (App::isLocale('en')) {
                $length = strlen($files->en_file);
            if ($length > 10) {
                $path = storage_path().'/app/public/'.(json_decode($files->en_file))[0]->download_link;
                    $original_name = json_decode($files->en_file)[0]->original_name;
            }else{
                $path = storage_path().'/app/public/'.(json_decode($files->nep_file))[0]->download_link;
                $original_name = json_decode($files->nep_file)[0]->original_name;
            }
            } else{
                $path = storage_path().'/app/public/'.(json_decode($files->nep_file))[0]->download_link;
                $original_name = json_decode($files->nep_file)[0]->original_name;
            }
            return response()->download($path,$original_name);
    }

    public function publicationsDownload($id){
        $files=Publication::find($id);
        if (App::isLocale('en')) {
            $length = strlen($files->en_file);
            if ($length > 10) {
                $path = storage_path().'/app/public/'.(json_decode($files->en_file))[0]->download_link;
                    $original_name = json_decode($files->en_file)[0]->original_name;
            }else{
                $path = storage_path().'/app/public/'.(json_decode($files->nep_file))[0]->download_link;
                $original_name = json_decode($files->nep_file)[0]->original_name;
            }
                    
                            
                              
                
            } else{
                $path = storage_path().'/app/public/'.(json_decode($files->nep_file))[0]->download_link;
                $original_name = json_decode($files->nep_file)[0]->original_name;
            }
            return response()->download($path,$original_name);
    }


    public function annualDownload($id){
        $files=Annualreport::find($id);
        if (App::isLocale('en')) {
                $length = strlen($files->en_file);
            if ($length > 10) {
                $path = storage_path().'/app/public/'.(json_decode($files->en_file))[0]->download_link;
                    $original_name = json_decode($files->en_file)[0]->original_name;
            }else{
                $path = storage_path().'/app/public/'.(json_decode($files->nep_file))[0]->download_link;
                $original_name = json_decode($files->nep_file)[0]->original_name;
            }
            } else{
                $path = storage_path().'/app/public/'.(json_decode($files->nep_file))[0]->download_link;
                $original_name = json_decode($files->nep_file)[0]->original_name;
            }
        
        
        return response()->download($path,$original_name);
    }

    public function journalDownload($id){
        $files=Journal::find($id);
        if (App::isLocale('en')) {
                $length = strlen($files->en_file);
            if ($length > 10) {
                $path = storage_path().'/app/public/'.(json_decode($files->en_file))[0]->download_link;
                    $original_name = json_decode($files->en_file)[0]->original_name;
            }else{
                $path = storage_path().'/app/public/'.(json_decode($files->nep_file))[0]->download_link;
                $original_name = json_decode($files->nep_file)[0]->original_name;
            }
            } else{
                $path = storage_path().'/app/public/'.(json_decode($files->nep_file))[0]->download_link;
                $original_name = json_decode($files->nep_file)[0]->original_name;
            }
            return response()->download($path,$original_name);

    }

    public function rulesDownload($id){
        $files=Rule::find($id);
        if (App::isLocale('en')) {
                $length = strlen($files->en_file);
            if ($length > 10) {
                $path = storage_path().'/app/public/'.(json_decode($files->en_file))[0]->download_link;
                    $original_name = json_decode($files->en_file)[0]->original_name;
            }else{
                $path = storage_path().'/app/public/'.(json_decode($files->nep_file))[0]->download_link;
                $original_name = json_decode($files->nep_file)[0]->original_name;
            }
            } else{
                $path = storage_path().'/app/public/'.(json_decode($files->nep_file))[0]->download_link;
                $original_name = json_decode($files->nep_file)[0]->original_name;
            }
            return response()->download($path,$original_name);

    }

    public function pressRelease(){
        $news = News::take(5)->latest()->get();
        $pressreleases = Pressrelease::all();
        return view('frontend.othersdownload.pressRelease',compact('news','pressreleases'));

    }

    public function annualReport(){
        $news = News::take(5)->latest()->get();
        $annualreports = Annualreport::all();
        return view('frontend.othersdownload.annualReport',compact('news','annualreports'));
    }

    public function journal(){
        $news = News::take(5)->latest()->get();
        $journals = Journal::all();
        return view('frontend.othersdownload.journal',compact('news','journals'));

    }

    public function rules(){
        $news = News::take(5)->latest()->get();
        $rules = Rule::all();
        return view('frontend.othersdownload.rules',compact('news','rules'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
