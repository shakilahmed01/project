<?php





use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/test', [App\Http\Controllers\TestController::class, 'index'])->name('index');
Route::post('/create', [App\Http\Controllers\TestController::class, 'create'])->name('create');
Route::get('/list', [App\Http\Controllers\TestController::class, 'test_list'])->name('list');



Route::get('/duplicate', [App\Http\Controllers\TestController::class, 'dup'])->name('duplicate');
Route::post('/duplicate/create', [App\Http\Controllers\TestController::class, 'dup_create'])->name('dup_create');
Route::get('/duplist', [App\Http\Controllers\TestController::class, 'dup_list'])->name('duplist');
//botman
Route::get('/', function () {
    return view('welcome');
});
Route::match(['get', 'post'], '/botman', [App\Http\Controllers\BotManController::class, 'handle']);

//botman end


Route::get('/flight', [App\Http\Controllers\FlightController::class, 'flight'])->name('flight');
Route::post('/flight/create', [App\Http\Controllers\FlightController::class, 'flight_create'])->name('flight_create');
Route::get('/flight/list', [App\Http\Controllers\FlightController::class, 'flight_list'])->name('flight_list');


Route::get('/information', [App\Http\Controllers\InformationController::class, 'index'])->name('information');

Route::get('/conferences/create', [App\Http\Controllers\ConferenceController::class, 'conference'])->name('conference');
Route::get('/jumbortan', [App\Http\Controllers\ConferenceController::class, 'jumbortan'])->name('jumbortan');
Route::get('/peraa', [App\Http\Controllers\ConferenceController::class, 'peraa'])->name('peraa');
Route::get('/relux', [App\Http\Controllers\ConferenceController::class, 'relux'])->name('relux');
