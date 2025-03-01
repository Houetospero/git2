<?php

use Illuminate\Support\Facades\Route;

// route pour admin
Route::get('/admin', function () {
    return view("admin.home");
});

Route::get('/admin/articles/list', function () {
    return view("admin.article.list");
});

Route::get('/admin/articles/ajouter', function () {
    return view("admin.article.create");
});

Route::get('/admin/articles/modifier', function () {
    return view("admin.article.edit");
});

Route::get('/admin/articles/detail', function () {
    return view("admin.article.show");
});

Route::get('/admin/contacts/list', function () {
    return view("admin.contact.list");
});

Route::get('/admin/contacts/details', function () {
    return view ("admin.contact.show");
});

// route pour client
Route::get('/', function () {
    return view ("client.home");
});

Route::get('/articles', function () {
    return view( "client.article");
});

Route::get('/articles/{slug}', function () {
    return view ("client.article-show");
});

Route::get('/contact', function () {
    return view("client.contact");
});
