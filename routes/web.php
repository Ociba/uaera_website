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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/blog', function (){ return view('pages.blog');});
Route::get('/team', function (){ return view('pages.team');});
Route::get('/career', function (){ return view('pages.career');});
Route::get('/members', function (){ return view('pages.members');});
Route::get('/jobs', function (){ return view('pages.jobs');});
Route::get('/online-application', function (){ return view('pages.online-application');});
Route::get('/more-on-remarks', function (){ return view('pages.remarks');});
Route::get('/gender-labour-social-development', function () { return view('pages.gender-labour');});
Route::get('unemployed-ugandans', function () { return view('pages.unemployed-ugandans');});
Route::get('/statement', function (){ return view('pages.statement');});
Route::get('/memorandum-of-understanding', function (){ return view('pages.memorandum');});
Route::get('/achievement', function (){ return view('pages.achievement');});
Route::get('/workers-issues', function (){ return view('pages.workers');});
Route::get('/uaera-meeting', function (){ return view('pages.meeting');});
Route::get('/uaera-board-meets-economy-department', function (){ return view('pages.board-meeting');});
Route::get('/economy-department-uaera-board-meets', function (){ return view('pages.ministry-meeting');});
Route::get('/licensed-recruitment-companies', function (){ return view('pages.companies');});
Route::get('/labour-recruitment-problems', function (){ return view('pages.recruitment-problems');});
Route::get('/consultancy-finance-auditor', function (){ return view('pages.finance-auditor');});
Route::get('/transport-update', function () { return view('pages.transport');});
Route::get('/airport', function (){ return view('pages.airport');});
Route::get('/lockdown', function () { return view('pages.lockdown');});
Route::get('/sops', function () { return view('pages.sop');});
Route::get('/press-release', function () { return view('pages.press');});
Route::get('/concern-on-recruitment', function () { return view('pages.concerns-on-recruitment');});
Route::get('/articles', function () { return view('pages.article');});
Route::get('/blog-concerns',function () { return view('pages.blog-concerns');});
Route::get('/publications', function (){ return view('pages.publication');});
Route::get('/testimony', function () { return view('pages.testimony');});