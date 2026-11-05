<?php
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/',[SiteController::class, 'index']);


//mvc
// model -> db, banco de dados
// view -> forntend, UI, interface q o usuario vê html;
// controller -> cerebro da operacao, entende qual rota é chamada, 
// conversa com o db e e devolve ao view;