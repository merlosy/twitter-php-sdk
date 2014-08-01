<?php namespace Merlosy\TwitterPhpSdk;

use Illuminate\Support\ServiceProvider;

class TwitterPhpSdkServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('merlosy/twitter-php-sdk');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// $this->app['twitter-php-sdk'] = $this->app->share( function($app){
		// 	return new TwitterSession();
		// })
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
