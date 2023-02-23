<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

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
    // dd(Auth::user());
    return view('welcome');
});

Route::get('give-permission-to-role', function () {
    // $role = Role::findOrFail(1); // author
    // $permission = Permission::findOrFail(1); // create article

    // $role = Role::findOrFail(2); // editor
    // $permission = Permission::findOrFail(2); // edit article

    // $role->givePermissionTo($permission);

    // $role = Role::findOrFail(3); // editor
    // $permission1 = Permission::findOrFail(1); // edit article
    // $permission2 = Permission::findOrFail(2); // edit article
    // $permission3 = Permission::findOrFail(3); // edit article

    // $role->givePermissionTo([$permission1, $permission2, $permission3]);
});

Route::get('assign-role-to-user', function () {
    // $user = User::findOrFail(1); // tony
    // $role = Role::findOrFail(1); // author

    // $user = User::findOrFail(2); // andy
    // $role = Role::findOrFail(2); // editor

    // $user = User::findOrFail(3); // ben
    // $role = Role::findOrFail(3); // moderator

    // $user->assignRole($role);

    // $user = User::create([
    //     'name' => 'jamal',
    //     'email' => 'jamal@email.com',
    //     'password' => '$2y$10$GIm.Rya7cjacqEZDyF25tuLkw36eDMp7tqqB4g9lsRQ0LhYWUbZk2',
    // ]);
    // $role1 = Role::findOrFail(1); // author
    // $role2 = Role::findOrFail(2); // editor
    // $role3 = Role::findOrFail(3); // moderator

    // $user->assignRole([$role1, $role2, $role3]);
});

Route::get('spatie-method', function () {
    // $user = User::findOrFail(1); // tony
    // $user = User::findOrFail(4); // jamal

    // dd($user->getPermissionNames()); // collection of name strings | gk ada krn bkn direct permission
    // dd($user->permissions); // collection of permission objects | gk ada krn bkn direct permission

    // dd($user->getDirectPermissions()); // sama kyk yg atas gk ada krn bkn direct
    // dd($user->getPermissionsViaRoles()); // get permission lewat role
    // dd($user->getAllPermissions()); // get semua permission (inherited or directly)

    // dd($user->getRoleNames()); // Returns a collection

    // $users = User::role('author')->get(); // Returns only users with the role 'author'
    // $users = User::permission('edit article')->get(); // Returns only users with the permission 'edit article' (inherited or directly)
    // dd($users);
});

// $user = User::findOrFail(1); // tony = author
// $user = User::findOrFail(2); // andy = editor
// $user = User::findOrFail(3); // ben = moderator
// Auth::login($user);
Auth::logout();

// Route::get('create-article', function () {
//     dd('ini create-article hanya bisa di akses oleh author dan moderator');
// })->middleware('can:create article');

// Route::get('edit-article', function () {
//     dd('ini edit-article hanya bisa di akses oleh editor dan moderator');
// })->middleware('can:edit article');

// Route::get('delete-article', function () {
//     dd('ini delete-article hanya bisa di akses oleh moderator');
// })->middleware('can:delete article');

// Route::get('create-article', function () {
//     dd('ini create-article hanya bisa di akses oleh author dan moderator');
// })->middleware('role:author|moderator');

// Route::get('edit-article', function () {
//     dd('ini edit-article hanya bisa di akses oleh editor dan moderator');
// })->middleware('role:editor|moderator');

// Route::get('delete-article', function () {
//     dd('ini delete-article hanya bisa di akses oleh moderator');
// })->middleware('role:moderator');

Route::get('create-article', function () {
    // Auth::logout();
    // dd(Auth::user());
    dd('ini create-article hanya bisa di akses oleh author dan moderator');
})->middleware('permission:create article');

Route::get('edit-article', function () {
    dd('ini edit-article hanya bisa di akses oleh editor dan moderator');
})->middleware('permission:edit article');

Route::get('delete-article', function () {
    dd('ini delete-article hanya bisa di akses oleh moderator');
})->middleware('permission:delete article');
