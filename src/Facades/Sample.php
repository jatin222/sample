<?php

namespace Jatin\Sample\Facades;

use Illuminate\Support\Facades\Facade;

/**
* 
*/
class Sample extends Facade
{
	
	protected static function getFacadeAccessor()
	{
		return 'jatin-sample';
	}
}

