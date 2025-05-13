<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Site1Controller;

// use Illuminate\Support\Facades\Route;



// Route:get, post, put, patch, delete(URL,Action);

// Route::get('/', function () {
//     $name = "ZAHER";
//     $age = 24;
//     return "Welcome $name , your Age is $age";
// });
// Route::get('/about-us', function () {
//     return "About-Us Page";
// });
// Route::get('/contact-us', function () {
//     return ("Contact Us Page");
// });
// Route::post('/contact-us', function () {
//     return ("Contact Us Page - Form Data");
// });
Route::get('/', function () {
    return 'welcome to the homepage';
})->name('home.index');
Route::match(['put', 'patch'], '/about-us', function () {
    return "About Us Page";
});
Route::view('/privacy', 'privacy');
// Route::get('/privacy', function () {
//     return view('privacy');
// });
Route::get('/user/{name}/{age?}', function ($name, $age = null) {
    if ($age) {
        return "welcome $name , your age is $age";
    }
    return "welcome $name";
})->whereAlpha('name')->whereNumber('age')->name('user');

Route::get('/post/{id}', function ($id) {
    return "Show Post Number # $id";
})->whereNumber('id');

// Route::get('/', function () {
//     $url = route('user', ['ali', 20]);
//     return "<a href='$url'>Go To Page</a>";
// });




// Final Route.
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/courses/{id}/{name?}', [HomeController::class, 'courses'])->name('courses')->where(['id' => '[0-9]+', 'name' => '[A-za-z]+']);


// site1
// site1/about 
// site1/contact
Route::prefix('site1')->name('site1.')->group(function () {
    Route::get('/', [Site1Controller::class, 'index'])->name('index');
    Route::get('/about', [Site1Controller::class, 'about'])->name('about');
    Route::get('/contact', [Site1Controller::class, 'contact'])->name('contact');
    Route::post('/contact', [Site1Controller::class, 'contact_data']);
    // Route::get('/{username}/{age?}', [Site1Controller::class, 'username'])->name('username');
    //الرابط الذي يحتوي على متغير ممنوع ان يكون قبل الروابط التي بها كلمة ثابتة و يجب ان يكون اخر رابط
    Route::get('/{teacher}/students', [Site1Controller::class, 'students'])->name('students');
});
