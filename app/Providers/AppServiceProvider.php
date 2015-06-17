<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 * @remark 如果生成了 config/compile.php 那么再修改 AppServiceProvider就会不起作用
	 * 需要运行 php artisan clear-compiled 清除掉compiled.php
	 * 具体参考 http://stackoverflow.com/questions/28676365/laravel-appserviceprovider-is-not-called
	 */
	public function boot()
	{
		
		View::share('static', Config('app.static'));
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		


		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar',
			'App\Http\Helper'
		);
	}

}
