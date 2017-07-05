<?php

namespace Core\Http\Controllers;
use Interaction\CommonController as BaseController;

class IndexController extends BaseController
{
	public function __construct()
	{

	}

	public function index()
	{
		echo 'hello world';
	}
}