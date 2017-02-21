<?php

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

// Iniciar dados padrão do sistema
Route::get('/start', function () {
    try {
        \App\User::create([
            'name' => 'Admin #1',
            'email' => 'admin@mail.com',
            'password' => bcrypt('testeteste'),
            'status' => USER_STATUS_ACTIVE,
            'role' => USER_ROLE_ADMIN,
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => USER_STATUS_ACTIVE,
        ]);
        
        exit('Ocorreu com sucesso.');
        
    } catch(\Exception $e) {
        
        exit('Error: ' . $e->getMessage() .'.');
        
    }
});

Route::get('/', function () {
    // ToDo apresentação de nossa plataforma
    // ToDo valorizar o design responsivo aqui
    return view('welcome');
});

Auth::routes();

// Groupo para usuários
Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', function () {
        // redirecionar usuário para panel correspondente
        return redirect(Auth::user()->role . '/dashboard');
    });

    // admin
    Route::group([
        
        'middleware' => 'auth.role:' . USER_ROLE_ADMIN,
        'prefix' => USER_ROLE_ADMIN . '/dashboard'
        
    ], function () {
        
        Route::get('/', 'Admin\DashboardController@index');

    });
    
    
    // TODO adicionar usuário comum aqui

});
