<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/foo', function () {
//     Artisan::call('storage:link');
// });
Route::get('/localization/{locale}','LocalizationController@index');

Route::get('/', 'HomeController@index');
Route::get('newsdownload/{id}','NewsController@download')->name('newsdownload');
Route::get('pressrelease/{id}','HomeController@pressDownload')->name('pressdownload');
Route::get('annualreport/{id}','HomeController@annualDownload')->name('annualdownload');
Route::get('journal/{id}','HomeController@journalDownload')->name('journaldownload');
Route::get('rules/{id}','HomeController@rulesDownload')->name('rulesdownload');
Route::get('publications/{id}','HomeController@publicationsDownload')->name('publicationdownload');
// new routes
Route::get('notices/{id}','PublicationController@noticeDownload')->name('noticedownload');
Route::get('daily-information/{id}','PublicationController@dailyInformationDownload')->name('dailyInformationdownload');
Route::get('breifdetails/{id}','PublicationController@breifDownload')->name('breifdownload');

// end of new routes
Route::get('busnessadvisory/download/{id}','CommitteeController@advisoryDownload')->name('businessadvisorydownload');
Route::get('legislation/download/{id}','CommitteeController@legislationDownload')->name('legislationdownload');
Route::get('publicaccounts/download/{id}','CommitteeController@publicAccountDownload')->name('publicaccountdownload');
Route::get('finance/download/{id}','CommitteeController@financeDownload')->name('financedownload');
Route::get('justice/download/{id}','CommitteeController@justiceDownload')->name('justicedownload');

Route::get('/activity/download/{id}','CommitteeController@activityDownload')->name('activityDownload');


Route::get('assembly/introduction','AssemblyController@introduction')->name('assemblyIntroduction');
Route::get('assembly/majorfunctions','AssemblyController@majorFunctions')->name('majorFunctions');
Route::get('assembly/officials','AssemblyController@officials')->name('officials');
Route::get('assembly/politicalParties','AssemblyController@politicalParties')->name('politicalParties');
Route::get('assembly/members','AssemblyController@assemblyMembers')->name('assemblyMembers');
Route::get('assembly/personal-secretary','AssemblyController@personalSecretary')->name('personalSecretary');

Route::post('/feedback','HomeController@feedback')->name('feedback');
// Route::get('/staffs','HomeController@provinceAssemblyStaffs')->name('provinceStaffs');

Route::get('/committess/business-advisory-committee','CommitteeController@businessAdvisoryCommittee')->name('businessAdvisoryCommittee');
Route::get('/committeess/legislation-committee','CommitteeController@legislationCommittee')->name('legislationCommittee');
Route::get('/committeess/public-account-committee','CommitteeController@publicAccountCommittee')->name('publicAccountCommittee');
Route::get('/committeess/finance-development-committee','CommitteeController@financeCommittee')->name('financeCommittee');
Route::get('/committeess/justice-committee','CommitteeController@justiceCommittee')->name('justiceCommittee');

Route::get('/bills/registered-bills','BillsController@registeredBills')->name('registeredBills');
Route::get('/registered-bills/download/{id}','BillsController@registeredDownload')->name('registeredDownload');
Route::get('/bills/remained-bills','BillsController@remainedBills')->name('remainedBills');
Route::get('/remained-bills/download/{id}','BillsController@remainedDownload')->name('remainedDownload');
Route::get('/bills/passed-bills','BillsController@passedBills')->name('passedBills');
Route::get('/passed-bills/download/{id}','BillsController@passedDownload')->name('passedDownload');
Route::get('/bills/certified-bills','BillsController@certifiedBills')->name('certifiedBills');
Route::get('/certified-bills/download/{id}','BillsController@certifiedDownload')->name('certifiedDownload');


Route::get('/publications','PublicationController@publications')->name('allPublications');
Route::get('/information','PublicationController@information')->name('information');
Route::get('/daily-information','PublicationController@dailyInformation')->name('dailyInformation');
Route::get('/meetings-brief-details','PublicationController@meetingsBriefDetails')->name('meetingsBriefDetails');



Route::get('/gallery','GalleryController@photoGallery')->name('allPhoto');
Route::get('/gallery/videos','GalleryController@videoGallery')->name('allVideo');
Route::get('/gallery/liveStream','GalleryController@liveStream')->name('liveStream');


Route::get('/secretariat/orgstructure','SecretariatController@orgStructure')->name('orgStructure');
Route::get('/secretariat/detailsofposts','SecretariatController@detailsOfPosts')->name('detailsOfPosts');
Route::get('/secretrait/staffs','SecretariatController@staffs')->name('secretariatStaffs');

Route::get('othersdownload/pressrelease','HomeController@pressRelease')->name('pressRelease');
Route::get('othersdownload/annual-report','HomeController@annualReport')->name('annualReport');
Route::get('othersdownload/journal','HomeController@journal')->name('journal');
Route::get('othersdownload/rules&regulations','HomeController@rules')->name('rules');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
