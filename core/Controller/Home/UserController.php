<?php

namespace Core\Controller\Home;

use Interaction\BaseController;

class UserController extends BaseController
{
    public function add()
    {
        return [
            'id' => 123,
            'name' => 'test_user',
            'age' => 28,
        ];
    }
}