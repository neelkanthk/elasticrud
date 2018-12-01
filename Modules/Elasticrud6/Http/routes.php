<?php

Route::group(['middleware' => 'web', 'prefix' => 'elasticrud6', 'namespace' => 'Modules\Elasticrud6\Http\Controllers'], function()
{
    Route::get('/', 'Elasticrud6Controller@index');
});
