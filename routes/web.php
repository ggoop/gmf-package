<?php
$ns = 'DummyRootNamespace\Http\Controllers\Web';
Route::middleware(['web'])->prefix('site')->namespace($ns)->group(function () {
	//Route::get('samples', 'SamplesController@getConfigs');
});