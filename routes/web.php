<?php
$ns = 'DummyRootNamespace\Http\Controllers';
Route::middleware(['web'])->prefix('site')->namespace($ns)->group(function () {
	Route::get('DummyPackageName', 'SamplesController@getSample');
});