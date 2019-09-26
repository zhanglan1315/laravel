<?php

namespace App\Exceptions;

use Exception;
use App\Override\Exceptions\Handler as _Handler;

class Handler extends _Handler
{
	public function report(Exception $exception)
	{
		parent::report($exception);
	}

	public function render($request, Exception $e)
	{
		return parent::render($request, $e);
	}
}
