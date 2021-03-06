<?php
/**
 * Laravel service provider for registering the routes and publishing the configuration.
 */

namespace ArieTimmerman\Laravel\URLShortener;

class ServiceProvider extends \Illuminate\Support\ServiceProvider{
	
	public function boot() {
		
		$this->publishes([
				__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'urlshortener.php' => config_path('urlshortener.php'),
		]);
				
		$this->loadMigrationsFrom(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . 'migrations');
		
		$this->loadViewsFrom(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'views','urlshortener');
		
		$this->loadRoutesFrom(__DIR__.'/../routes/routes.php');
		
		$this->publishes([
				__DIR__.'/../views' => resource_path('views/vendor/urlshortener'),
		]);
		
	}
	
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register() {
		
	}
	
}