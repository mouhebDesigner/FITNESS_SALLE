<?php

use App\Models\Seance;
use App\Models\Abonnement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SalleController;
use App\Http\Controllers\Admin\SeanceController;
use App\Http\Controllers\Admin\ConseilController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AbonnementController;
use App\Http\Controllers\Admin\CompetitionController;
use App\Http\Controllers\ContactController as ContactClientController; 
use App\Http\Controllers\ActivityController as ActivityClientController; 
use App\Http\Controllers\AbonnementController as AbonnementClientController;

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

Route::prefix('entraineur')->name('entraineur.')->group(function () {
    Route::get('seances', [SeanceController::class, "index"])->name('seances.index');
    Route::put('seances/{seance}/annuler', [SeanceController::class, "annuler"])->name('seances.annuler');
    Route::get('activities', [ActivityController::class, 'index'])->name('activities.index');
    Route::resource('conseils', ConseilController::class);
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resources([
        "users" => UserController::class,
        "salles" => SalleController::class,
        "activities" => ActivityController::class,
        "categories" => CategoryController::class,
        "seances" => SeanceController::class,
        "abonnements" => AbonnementController::class,
        "competitions" => CompetitionController::class,
        'contacts' => ContactController::class
    ]);
});


Route::get('/', function () {
    return view('welcome');
});

Route::resource('abonnements', AbonnementClientController::class);
Route::get('entraineurs', function(){
    return view('entraineurs.index');
})->name('entraineurs.index');

Route::get('schedule', function(){
    $jours = ['lundi', 'mardi','mercredi', 'jeudi','vendredi','samedi','dimanche'];
    $seanceIds = [];
    foreach(Auth::user()->abonnements()->get() as $abonnement){
        foreach($abonnement->activities()->get() as $activity){
            foreach($activity->seances()->get() as $seance){
                $seanceIds[] = $seance->id;
            }
        }
    }

    $seances =  Seance::whereIn('id', $seanceIds)->get();

    return view('schedule.index', compact('jours', 'seances'));
})->name('schedule.index');

Route::resource('activities', ActivityClientController::class);

Route::resource('contact', ContactClientController::class);

Route::get('/home/dashboard', function(){
    return view('admin.home');
});

Route::get('competition', function(){
    return view('competition.index');
})->name('competitions.index');

Route::get('abonnement/{abonnement}/participer', [AbonnementClientController::class, 'participer'])->name('abonnement.participer')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('abonnement/{abonnement}/}paiement', function(Abonnement $abonnement) {
    return view('abonnements.paiement', compact('abonnement'));
})->name('abonnement.paiement.index')->middleware('auth');

Route::post('paiement', [PaymentController::class, 'store'])->name('paiement.store');

// PROFILE 

Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');


Route::get('abonnement/{abonnement}/schedule', 
    [AbonnementClientController::class, 'schedule']
)->name('abonnements.schedule')->middleware('auth');

Route::get('competitions', function(){
    return view('competitions.index');
})->name('competitions.index');