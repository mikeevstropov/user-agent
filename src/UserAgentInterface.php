<?php

namespace Mikeevstropov\UserAgent;

interface UserAgentInterface
{
    /**
     * Get a random desktop user agent
     *
     * @return string
     */
    static function getDesktopRand();

    /**
     * Get a random mobile user agent
     *
     * @return string
     */
    static function getMobileRand();
}