<?php

namespace Core\Http\Controllers;
use Interface\CommonController as BaseController;

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