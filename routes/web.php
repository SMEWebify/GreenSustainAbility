<?php

use Illuminate\Http\Request;

use App\Http\Livewire\License;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;
use App\Http\Livewire\DataManagement;

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\AuditManagement;

use App\Http\Livewire\CarbonFootprint;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\IncidentManagement;
use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\IndicatorMonitoring;
use App\Http\Livewire\IncidentManagementShow;
use App\Http\Livewire\IndicatorMonitoringShow;
use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\LaravelExamples\UserManagement;

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

Route::get('/', function() {
    return redirect('/login');
});

Route::get('/sign-up', SignUp::class)->name('sign-up');
Route::get('/login', Login::class)->name('login');

Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}',ResetPassword::class)->name('reset-password')->middleware('signed');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/Incident-Management', IncidentManagement::class)->name('incident-management');
    Route::get('/Incident-Management-{incidentInformation}', IncidentManagementShow::class)->name('incident-management-show');
    Route::get('/Indicator-Monitoring', IndicatorMonitoring::class)->name('indicator-monitoring');
    Route::get('/Indicator-Monitoring-{indicator}', IndicatorMonitoringShow::class)->name('indicator-monitoring-show');
    Route::get('/Audit-Management', AuditManagement::class)->name('audit-management');
    Route::get('/Data-Management', DataManagement::class)->name('data-management');
    Route::get('/Carbon-Footprint', CarbonFootprint::class)->name('carbon-footprint');




    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/license', License::class)->name('license');
    
    Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
    Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
    Route::get('/laravel-user-management', UserManagement::class)->name('user-management');
});

