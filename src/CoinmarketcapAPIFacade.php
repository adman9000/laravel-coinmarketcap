<?php namespace adman9000\coinmarketcap;

use Illuminate\Support\Facades\Facade;

class CoinmarketcapAPIFacade extends Facade {

	protected static function getFacadeAccessor() {
		return 'coinmarketcap';
	}
}