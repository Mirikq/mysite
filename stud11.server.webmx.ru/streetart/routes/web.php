<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// сработает на http://muzei-mira/
Route::get ('/', [MainController::class, "acMain"]);

// сработает на http://muzei-mira/velikie-muzei
Route::get ('/mybio', [MainController::class, "amybio"]);

// сработает на http://muzei-mira/novosti
Route::get ('/novosti', [MainController::class, "acNovosti"]);

// сработает на http://muzei-mira/zhivopis
Route::get ('/contacts', [MainController::class, "acontacts"]);

// сработает на http://muzei-mira/skulptura
//Route::get ('/skulptura', [MainController::class, "acSkulptura"]);
Route::get ('/ekb', [MainController::class, "ekb"]);

Route::get ('/peter', [MainController::class, "peter"]);

// сработает на http://muzei-mira/goroda
Route::get ('/meaning', [MainController::class, "ameaning"]);



// сработает на http://muzei-mira/neobychnye-muzei-mira
Route::get ('/neobychnye-muzei-mira', [MainController::class, "acNeobychnyeMuzei"]);

// сработает на http://muzei-mira/console
Route::get ('/console', [AdminController::class, "acConsole"]);

// сработает на http://muzei-mira/console/update/{параметр}
// запрос на вывод страницы обновления записи
Route::get ('/console/update/{id}', [AdminController::class, "acConsoleFormUpdate"]);

// сработает на http://muzei-mira/console/add
// запрос на вывод страницы добавления записи
// обратите внимание - исползуется POST-запрос
Route::post ('/console/add', [AdminController::class, "acConsoleFormAdd"]);

// сработает на http://muzei-mira/admin/modification
// обратите внимание - исползуется POST-запрос
// передаем данные формы на обновление / добавление данных
Route::post ('/admin/modification',  [AdminController::class, "acDataModification"]);

// сработает на http://muzei-mira/admin/delete/{параметр}
// выполняем запрос на удаление данных
Route::get ('/admin/delete/{id}',  [AdminController::class, "acDataDelete"]);
