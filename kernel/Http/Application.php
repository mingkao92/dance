<?php

namespace Kernel\Http;

use Exception;
use Core\Exceptions\RuntimeException;

class Application
{
    private $config;

    private $container;

    public static function init(array $config)
    {
        $app = new Application();
        $app->config = $config;
        return $app;
    }

    public function run()
    {
        $this->setUp();

        $this->handle();

        $this->tearDown();
    }

    private function setUp()
    {
        foreach ($this->config['route'] as $path => $item) {
            foreach ($item as $method => $callback) {
                $this->container['route'][$path][$method] = function ($request) use ($callback) {
                    list($controller, $action) = explode('->', $callback);
                    return (new $controller)->{$action}($request);
                };
            }
        }
    }

    private function handle()
    {
        try {
            $request = array_merge($_GET, $_POST, $_SERVER);
            $process = $this->container['route'][$request['REQUEST_URI']][$request['REQUEST_METHOD']] ?? null;
            if ($process && is_callable($process)) {
                $response = $process($request);
            } else {
                throw new RuntimeException('no route matched');
            }
        } catch (Exception $e) {
            $response = "handle error: " . $e->getMessage();
        }

        echo self::renderResponse($response);
    }

    private static function renderResponse($response)
    {
        if (is_array($response)) {
            header('Content-Type: application/json; charset=utf-8');
            return json_encode($response);
        }
        return $response;
    }

    private function tearDown()
    {

    }
}
