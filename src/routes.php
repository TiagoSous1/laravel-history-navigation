<?php

\Route::get('/navigate/back', [
    'uses' => 'FranciscoTSousa\\HistoryNavigation\\Http\\Controllers\\HistoryNavigationController@back',
    'as' => 'navigate.back',
]);
