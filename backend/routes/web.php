<?php


use App\Http\Controllers\ManagerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonController;
use App\Http\Controllers\OrderController;


// Route::get('/products', [MonController::class, 'index']);
// Route::get('/products/{id}', [MonController::class, 'show']);

// Route::controller(OrderController::class)->group(function () {
//     Route::get('/products', 'index')->name('products.index');
//     Route::get('/products', 'store')->name('products.store');
//     Route::get('/products/{id}', 'show')->whereNumber('id')->name('products.show');
// });

// Route::get('/', [UserController::class, 'index'])->name('users.index');
// Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
// Route::post('/users', [UserController::class, 'store'])->name('users.store');
// Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
// Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
// Route::delete('/users/{id}', [UserController::class, 'delete'])->name('users.delete');

// Laravel Mindest project
Route::view('/', 'homepage')->name('homepage'); 
Route::view('/projects', 'project')->name('projects'); 
Route::get('/recipes', function (){
    $recipes = [
        1 => 'Spagetti carbonara', 'ingredients' => ['Pasta', 'Eggs', 'Cheese', 'Bacon'],
        2 => 'Chicken Curry', 'ingredients' => ['Chicken', 'Coconut Milk', 'Curry Powder'],
        3 => 'Vegetable  Stir Fry', 'ingredients' => ['Broccoli', 'Carrot', 'Soy Sauce', 'Garlic'],
    ];

    $firstname = "Rajao";

    return view('recipes.index', [
        'name' => $firstname
    ]);
    
})->name('recipes.index');