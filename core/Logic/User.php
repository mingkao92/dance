<?php

namespace Core\Logic;

use Interaction\BaseLogic;

class User extends BaseLogic
{

    /**
     * store self
     * @var BaseLogic
     */
    protected $user;

    /**
     * must be overidded
     * @var boolean
     */
    protected $has_login;

    /**
     * must be overidded
     * @var boolean
     */
    protected $is_adult;

    /**
     * action
     * @var string
     */
    protected $accessed;

    /**
     * action
     * @var [type]
     */
    protected $forbidden;


    public function __construct()
    {
        $this->user = new self();
    }

    public function access()
    {
        if ($this->user->has_login) {
            return true;
        }

        return false;
    }
}
