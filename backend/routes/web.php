<?php


use App\Http\Controllers\ManagerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Arr;
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
        1 => ['title' => 'Spagetti carbonara', 'ingredients' => ['Pasta', 'Eggs', 'Cheese', 'Bacon']],
        2 => ['title' => 'Chicken Curry', 'ingredients' => ['Chicken', 'Coconut Milk', 'Curry Powder']],
        3 => ['title' => 'Vegetable  Stir Fry', 'ingredients' => ['Broccoli', 'Carrot', 'Soy Sauce', 'Garlic']]
    ];

    // $firstname = "Rajao";
    // $lastname = "Fetra";

    return view('recipes.index', compact('recipes'));
    
})->name('recipes.index');


Route::get('/recipes/{id}', function (int $id) {

         $recipes = [  
        1 => ['title' => 'Spagetti carbonara', 'ingredients' => ['Pasta', 'Eggs', 'Cheese', 'Bacon']],
        2 => ['title' => 'Chicken Curry', 'ingredients' => ['Chicken', 'Coconut Milk', 'Curry Powder']],
        3 => ['title' => 'Vegetable  Stir Fry', 'ingredients' => ['Broccoli', 'Carrot', 'Soy Sauce', 'Garlic']]
    ];

    
    // @dd(Arr::get($recipes, $id, ['title' => 'Recipes not found', 'Ingredients' => [] ]));

    // Dot(.) Notation
    // @dd(Arr::get($recipes,'1.ingredients', ['title' => 'Recipes not found', 'Ingredients' => [] ]));

    $recipe = Arr::get($recipes, $id, ['title' => 'Recipes not found', 'Ingredients' => [] ]);

    return view('recipes.show', compact('recipe'));
    
})->name('recipes.show');