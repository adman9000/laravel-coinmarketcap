<?php namespace adman9000\coinmarketcap;

/**
 * @author  adman9000
 */
use Illuminate\Support\ServiceProvider;

class CoinmarketcapServiceProvider extends ServiceProvider {

	public function boot() 
	{
		$this->publishes([
			__DIR__.'/../config/coinmarketcap.php' => config_path('coinmarketcap.php')
		]);
	} // boot

	public function register() 
	{
		$this->mergeConfigFrom(__DIR__.'/../config/coinmarketcap.php', 'coinmarketcap');
		$this->app->bind('coinmarketcap', function() {
			return new BinanceAPI(config('coinmarketcap'));
		});

		

	} // register
}