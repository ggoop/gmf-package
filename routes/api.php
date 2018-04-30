<?php
$ns = 'DummyRootNamespace\Http\Controllers';

Route::middleware(['api', 'auth:api'])->prefix('api')->namespace($ns)->group(function () {
	Route::resource('samples', 'SampleController', ['only' => ['index', 'show', 'store', 'destroy']]);
});