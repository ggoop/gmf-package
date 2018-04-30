<?php

namespace DummyRootNamespace;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Packager;

class ServiceProvider extends BaseServiceProvider {
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot() {
		$this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
		$this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
		if ($this->app->runningInConsole()) {
			Packager::loadDatabasesFrom(__DIR__ . '/../database/');

			$publishes = config('gmf.publishes', 'gmf');

			$this->publishes([
				__DIR__ . '/../resources/assets/js' => base_path('resources/assets/js/vendor/DummyPackageName'),
				__DIR__ . '/../resources/public' => public_path('assets/vendor/DummyPackageName'),
			], $publishes);
		}
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register() {

	}
}
