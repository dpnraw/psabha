
<main role="main" class="container midsection_box">
    <div class="row">
      <div class="col-md-4 mb-2">{{-- other downloadstart --}}
        <div class="conatiner" >
          <div class="mb-2" style="background-color: #e60000">
          <h3 class="content_title"><i class="fa fa-folder"></i> <span>&nbsp;&nbsp; @lang('home.other downloads')</span></h3>
          </div>
          {{-- <hr class="mb-0 mt-0" --}}
          <div class="other-download" style="background-color: white">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">@lang('home.annual report')</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">@lang('home.journal')</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">@lang('home.rules & regulations')</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="container" style="border: 1px solid #dee2e6; padding: 5px;">
                  <div class="list-group">

                    @if (App::isLocale('en'))
                    @foreach($annualreports as $annualreport)
                    <li class="list-group-item" style="padding: 2px;">
                      <div class="row">
                        <div class="col-md-11">
                          <a style="font-size: 14px;" href="#"> 
                              {{$annualreport->title_eng}}
                          </a>
                          <br>
                          <p style="display: inline-block; font-size: 14px;">@lang('home.published date'): {{$annualreport->engpub_date}}</p>
                        </div>
                        <div class="col-md-1" style="height: 45px;justify-content: left">
                          <a href="{{route('annualdownload',$annualreport->id)}}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-download"></i></a>
                        </div>  
                      </div>
                    </li>
                    @endforeach
                    
                    @elseif (App::isLocale('nep'))
                      @foreach($annualreports as $annualreport)
                    <li class="list-group-item" style="padding: 2px;">
                      <div class="row">
                        <div class="col-md-11">
                          <a style="font-size: 14px;" href="#"> 
                              {{$annualreport->title_nep}}
                          </a>
                          <br>
                          <p style="display: inline-block; font-size: 14px;">@lang('home.published date'): {{$annualreport->neppub_date}}</p>
                        </div>
                        <div class="col-md-1" style="height: 45px;justify-content: left">
                          <a href="{{route('annualdownload',$annualreport->id)}}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-download"></i></a>
                        </div>  
                      </div>
                    </li>
                    @endforeach
                  
                  @endif
                    


                    <li class="list-group-item">
                      <span class="pull-right">
                        <a href="{{route('annualReport')}}" class="btn btn-primary btn-sm">@lang('home.view more')</a>
                      </span>
                    </li>
                  </div>
                </div>
              </div>
              
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container" style="border: 1px solid #dee2e6; padding: 5px;">
                  <div class="list-group">

                    @if (App::isLocale('nep'))
                    @foreach($journals as $journal)
                    <li class="list-group-item" style="padding: 2px;">
                      <div class="row">
                        <div class="col-md-11">
                          <a style="font-size: 14px;" href="#"> 
                              {{$journal->nep_title}}
                          </a>
                          <br>
                          <p style="display: inline-block; font-size: 14px;">@lang('home.published date'): {{$journal->neppub_date}}</p>
                        </div>
                        <div class="col-md-1" style="height: 45px;justify-content: left">
                          <a href="{{route('journaldownload',$journal->id)}}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-download"></i></a>
                        </div>  
                      </div>
                    </li>
                    @endforeach
                    @elseif (App::isLocale('en'))
                    @foreach($journals as $journal)
                    <li class="list-group-item" style="padding: 2px;">
                      <div class="row">
                        <div class="col-md-11">
                          <a style="font-size: 14px;" href="#"> 
                              {{$journal->nep_title}}
                          </a>
                          <br>
                          <p style="display: inline-block; font-size: 14px;">@lang('home.published date'): {{$journal->neppub_date}}</p>
                        </div>
                        <div class="col-md-1" style="height: 45px;justify-content: left">
                          <a href="{{route('journaldownload',$journal->id)}}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-download"></i></a>
                        </div>  
                      </div>
                    </li>
                    @endforeach
                    @endif
                    <li class="list-group-item">
                      <span class="pull-right">
                        <a href="{{route('journal')}}" class="btn btn-primary btn-sm">@lang('home.view more')</a>
                      </span>
                    </li>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="container" style="border: 1px solid #dee2e6; padding: 5px;">
                  <div class="list-group">

                    @if (App::isLocale('nep'))
                    @foreach($rules as $rule)
                    <li class="list-group-item" style="padding: 2px;">
                      <div class="row">
                        <div class="col-md-11">
                          <a style="font-size: 14px;" href="#"> 
                              {{$rule->nep_title}}
                          </a>
                          <br>
                          <p style="display: inline-block; font-size: 14px;">@lang('home.published date'): {{$rule->neppub_date}}</p>
                        </div>
                        <div class="col-md-1" style="height: 45px;justify-content: left">
                          <a href="{{route('rulesdownload',$rule->id)}}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-download"></i></a>
                        </div>  
                      </div>
                    </li>
                    @endforeach
                    @elseif (App::isLocale('en'))
                      @foreach($rules as $rule)
                        <li class="list-group-item" style="padding: 2px;">
                          <div class="row">
                            <div class="col-md-11">
                              <a style="font-size: 14px;" href="#"> 
                                  {{$rule->en_title}}
                              </a>
                              <br>
                              <p style="display: inline-block; font-size: 14px;">@lang('home.published date'): {{$rule->enpub_date}}</p>
                            </div>
                            <div class="col-md-1" style="height: 45px;justify-content: left">
                              <a href="{{route('rulesdownload',$rule->id)}}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-download"></i></a>
                            </div>  
                          </div>
                        </li>
                        @endforeach
                    @endif
                    
                    <li class="list-group-item">
                      <span class="pull-right">
                        <a href="{{route('rules')}}" class="btn btn-primary btn-sm">@lang('home.view more')</a>
                      </span>
                    </li>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>{{-- otherdownloads ends --}}

      <div class="col-md-4 mb-2 pl-3">{{-- video gallery start --}}
        <div class="container" style="background-color: #e60000">
          <h3 class="content_title"><i class="fa fa-film"></i> <span>&nbsp;&nbsp;@lang('home.video gallery')</span>
            <a href="{{route('allVideo')}}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i>@lang('home.view all')</a>
          </h3>
        </div>
        <div class="container" style="padding: 0">
          <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/F0GYEj_jhWY?rel=0" allowfullscreen></iframe>
          </div>
        </div>
          {{-- start of information officer --}}
        <div class="container mt-4" style="background-color: #053B6F">
          <h3 class="content_title" style="color:white"><i class="fa fa-user"></i> <span>&nbsp;&nbsp;@lang('home.information officer')</span>
          </h3>
        </div>
        <div class="container" style="padding: 0">
          <div class="row" style="background:#ffffff;margin-left:0px; margin-right:0px;border:1px solid #ff7542">
                <div class="col-md-5 p-2">
                 <img class="img-fluid" src="{{asset('blog/images/infoofficer.jpg')}}" style="padding:5px;" width="200" height="180">
                 </div>

                 <div class="col-md-7 pt-2" style="font-family: Helvetica Neue">
                 <p class="m-0">@lang('home.jitendra jung kc')</p>
                 <p class="m-0">@lang('home.officer 8')</p>
                 <p class="m-0">@lang('home.mobile') @lang('home.9856011841')</p>
                 <p class="m-0">@lang('home.email'): jungkcj@gmail.com </p>   
                 </div>          
            </div>

        </div>

      </div>{{-- video galleryends --}}

      <aside class="col-md-4 blog-sidebar">
        <div class="p-0">
          <div class="conatiner" style="background-color: #e60000">
          <h3 class="content_title"><i class="fa fa-link"></i> <span>&nbsp;&nbsp; @lang('home.related links')</span></h3>
          </div>

          <div class="container" style="border:1px solid #ccc; background-color: white; padding: 2px">
            @if(App::isLocale('en'))
            <ul class="list-group related-links">
                  <li class="list-group-item"><a href="https://nepal.gov.np/" target="_blank" title="visit : National Reconstruction Authority"><i class="fa fa-link"></i> The Official Portal of Goverment of Nepal</a></li>
                  <li class="list-group-item"><a href="http://gandaki.gov.np" target="_blank" title="visit : National Planning Commission"><i class="fa fa-link"></i> Gandaki Province Portal</a></li>
                  <li class="list-group-item"><a href="https://hr.parliament.gov.np/np" target="_blank" title="visit : Ministry of Home Affairs"><i class="fa fa-link"></i> House Of Representatives, Nepal</a></li>
                  <li class="list-group-item"><a href="https://na.parliament.gov.np/np" target="_blank" title="visit : Ministry of Finance"><i class="fa fa-link"></i>National Assembly, Nepal</a></li>
                  <li class="list-group-item"><a href="https://assembly.p1.gov.np" target="_blank" title="visit :  Ministry of General Administration"><i class="fa fa-link"></i>Province Assembly, Province No.1</a></li>
                  <li class="list-group-item"><a href="http://provincialassembly.p2.gov.np" target="_blank" title="visit : Office of the Prime Minister and Council of Minister"><i class="fa fa-link"></i>Province Assembly, Province No.2</a></li>
                  <li class="list-group-item"><a href="http://pradeshsabha.p3.gov.np" target="_blank" title="visit : Office of the Chief Minister and the Council of Ministers"><i class="fa fa-link"></i>Province Assembly, Bagmati Province</a></li>
                  <li class="list-group-item"><a href="http://pradeshsabha.p5.gov.np" target="_blank" title="visit : Office of the Chief Minister and the Council of Ministers"><i class="fa fa-link"></i>Province Assembly, Province No.5</a></li>
                  <li class="list-group-item"><a href="http://pga.karnali.gov.np" target="_blank" title="visit : Office of the Chief Minister and the Council of Ministers"><i class="fa fa-link"></i>Province Assembly, Karnali Province</a></li>
                  <li class="list-group-item"><a href="(http://pga.p7.gov.np" target="_blank" title="visit : Office of the Chief Minister and the Council of Ministers"><i class="fa fa-link"></i>Province Assembly, Sudurpashchim Province</a></li>
                  <li class="list-group-item"><a href="https://www.npc.gov.np/np" target="_blank" title="visit : Office of the Chief Minister and the Council of Ministers"><i class="fa fa-link"></i>National Planning Commission</a></li>
                  <li class="list-group-item">
                  <p><a href="#" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i> @lang('home.view all')</a></p>
                  </li>
                </ul>
                @elseif(App::isLocale('nep'))
                <ul class="list-group related-links">
                  <li class="list-group-item"><a href="https://nepal.gov.np/" target="_blank" title="visit : National Reconstruction Authority"><i class="fa fa-link"></i> नेपाल सरकारको आधिकारिक पोर्टल</a></li>
                  <li class="list-group-item"><a href="http://gandaki.gov.np" target="_blank" title="visit : National Planning Commission"><i class="fa fa-link"></i> गण्डकी प्रदेश पोर्टल</a></li>
                  <li class="list-group-item"><a href="https://hr.parliament.gov.np/np" target="_blank" title="visit : Ministry of Home Affairs"><i class="fa fa-link"></i> प्रतिनिधि सभा, नेपाल</a></li>
                  <li class="list-group-item"><a href="https://na.parliament.gov.np/np" target="_blank" title="visit : Ministry of Finance"><i class="fa fa-link"></i>राष्ट्रिय सभा, नेपाल</a></li>
                  <li class="list-group-item"><a href="https://assembly.p1.gov.np" target="_blank" title="visit :  Ministry of General Administration"><i class="fa fa-link"></i>प्रदेश सभा, प्रदेश नं. १</a></li>
                  <li class="list-group-item"><a href="http://provincialassembly.p2.gov.np" target="_blank" title="visit : Office of the Prime Minister and Council of Minister"><i class="fa fa-link"></i>प्रदेश सभा, प्रदेश नं. २</a></li>
                  <li class="list-group-item"><a href="http://pradeshsabha.p3.gov.np" target="_blank" title="visit : Office of the Chief Minister and the Council of Ministers"><i class="fa fa-link"></i>प्रदेश सभा, वाग्मती प्रदेश</a></li>
                  <li class="list-group-item"><a href="http://pradeshsabha.p5.gov.np" target="_blank" title="visit : Office of the Chief Minister and the Council of Ministers"><i class="fa fa-link"></i>प्रदेश सभा, प्रदेश नं. ५</a></li>
                  <li class="list-group-item"><a href="http://pga.karnali.gov.np" target="_blank" title="visit : Office of the Chief Minister and the Council of Ministers"><i class="fa fa-link"></i>प्रदेश सभा, कर्णाली प्रदेश</a></li>
                  <li class="list-group-item"><a href="http://pga.p7.gov.np" target="_blank" title="visit : Office of the Chief Minister and the Council of Ministers"><i class="fa fa-link"></i>प्रदेश सभा, सुदुरपश्चिम प्रदेश</a></li>
                  <li class="list-group-item"><a href="https://www.npc.gov.np/np" target="_blank" title="visit : Office of the Chief Minister and the Council of Ministers"><i class="fa fa-link"></i>राष्ट्रिय योजना आयोग</a></li>
                  <li class="list-group-item">
                  <p><a href="#" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i> @lang('home.view all')</a></p>
                  </li>
                </ul>
                @endif
            
          </div>


        </div>

        <div class="p-4">
          <div class="p-0">
          <div class="conatiner">
          <h3 class="content_title" style="margin-bottom: 0"><i class="fa fa-search"></i> <span>&nbsp;&nbsp;@lang('home.find us'):</span></h3>
            <div class="social-media-icons col-xs-12">
              <ul class="list-inline col-xs-12">
                <a href="https://www.facebook.com/pss.gandaki.98"><i class="fa fa-facebook-square fa-5x"></i></a>
                <a href="https://www.youtube.com/channel/UCe_la7wu3n9EJjlP_UZmtMA"><i class="fa fa-twitter-square fa-5x"></i></a>
                <a href="https://twitter.com/AssemblyGandaki"><i class="fa fa-youtube-square fa-5x"></i></a>              
              </ul>
            </div>
          </div>
          
        </div>
      </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

    {{-- start of publication row --}}
    <div class="row mb-2 mt-2">
      <div class="col-md-12">
      <div class="container" style="background-color: #e60000">
          <h3 class="content_title"><i class="fa fa-book"></i> <span>@lang('home.publications')</span>
            <a href="{{route('allPublications')}}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i>@lang('home.view all')</a>
          </h3>
      </div>
      </div>

      <div class="col-md-12">
        <div class="container pl-0 pr-0">
            <div class="owl-carousel owl-theme publications">

              @if (App::isLocale('nep'))
              @foreach($publications as $publication)
            <div class="item">
              <div class="card" style="border: none;">
                  <img class="card-img-top" src="{{asset('blog/images/nepal_logo.png')}}" alt="Card image" style="width:55px; height: 50px;align-self: center">
                  <div class="card-body">
                    <hr>
                    <p style="font-size: 14px;color: #007bff">{{$publication->tile_nep}}</p>
                    <hr>
                    <a href="{{route('publicationdownload',$publication->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-download"></i></a>
                  </div>
                </div>
            </div>
            @endforeach
            @elseif(App::isLocale('en'))
            @foreach($publications as $publication)
            <div class="item">
              <div class="card" style="border: none;">
                  <img class="card-img-top" src="{{asset('blog/images/nepal_logo.png')}}" alt="Card image" style="width:55px; height: 50px;align-self: center">
                  <div class="card-body">
                    <hr>
                    <p style="font-size: 14px;color: #007bff">{{$publication->title_en}}</p>
                    <hr>
                    <a href="{{route('publicationdownload',$publication->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-download"></i></a>
                  </div>
                </div>
            </div>
            @endforeach
            @endif

            
            </div>
        </div>
        </div>    

    </div>
    {{-- end of publication row --}}


    {{-- start of gallery row --}}
      <div class="row mb-2">
        <div class="col-md-12">
        <div class="container" style="background-color: #e60000">
            <h3 class="content_title"><i class="fa fa-photo"></i> <span>@lang('home.gallery')</span>
              <a href="{{route('allPhoto')}}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i> @lang('home.view all')</a>
            </h3>
        </div>
        </div>

        <div class="col-md-12">
          <div class="container pl-0 pr-0">
              <div class="owl-carousel owl-theme">
                @foreach($galleries as $gallery)
              <div class="item zoom" style="min-height: 147.328px">
                  <div>
                    <img src="{{asset('storage/'.$gallery->file)}}">
                  </div>
                </div>
                @endforeach
              </div>
          </div>
        </div>    

      </div>

    {{-- end of gallery row --}}

  </main>