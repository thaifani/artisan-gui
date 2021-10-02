<?php

use Infureal\Http\Controllers\GuiController;

\Route::get('/gui', [GuiController::class, 'index'])
    ->name('gui.index');
\Route::get('/challenge', [GuiController::class, 'challenge'])
    ->name('gui.challenge');


\Route::post('gui/{command}', [GuiController::class, 'run'])
    ->name('gui.run');
\Route::post('challenge/{command}', [GuiController::class, 'run'])
    ->name('gui.run_ch');
