<?php 

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class ComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{

     view()->composer('empleado/form', 'App\Http\ViewComposers\EmpleadoComposer');
	 view()->composer('empleado/formCreate', 'App\Http\ViewComposers\EmpleadoComposer');
	 view()->composer('editable/index', 'App\Http\ViewComposers\EditableComposer');

	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
