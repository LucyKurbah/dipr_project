<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Role;
use App\Models\Advertisement;
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
    return view('home/homepage');
});

// Route::get('/admin/home', function () {
//     return view('admin/admin_home');
// });

// Route::get('/login', function () {
//     return view('auth/login');
// });


// Route::get('/', function () {
//     return view('auth.login');
// });

// Auth::routes();
// Route::middleware('auth')->group(function(){
//     Route::get('/', function () {
//     return view('home/homepage');
// });
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user_role',function()  
{  
    $user = User::with('role')->find(1);
    if ($user) {
        $userData = [
            'user_id' => $user->id,
            'user_name' => $user->name,
            'role_name' => $user->role->role_name
        ];
        return $userData;
    }
});  
Route::get('/user',function()  
{  
    $roles = Role::withCount('user')->get();
    $roleUsers = $roles->map(function ($role) {
        return [
            'role_name' => $role->role_name,
            'user_count' => $role->user_count,
            'users' => $role->user->pluck('name'),
        ];
    });

    return $roleUsers;
});  

Route::get('/ad',function()  
{
    $user = User::find(1);
    $ad = $user->advertisements;

    $advertisement = Advertisement::find(1);
    $user = $advertisement->user;
}); 

Route::get('/get_ad_type',function()  
{
    $adData = Advertisement::with('ad_type')
                    ->find(1)
                    ->map(function($ad){
                        return [
                            'user_id' => $ad->user_id,
                            'user_name' => $ad->name,
                            'ad_type' => $ad->ad_type->type_name,
                        ];
                    });
    return $adData;
}); 
