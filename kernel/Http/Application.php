<?php 

namespace Kernel\Http;

class Application
{
	public static function init(array $config)
	{
		$app = new Application();
		$app->config = $config;
		return $app;
	}

	public function run()
	{
		echo 'hello';
	}
}

?>