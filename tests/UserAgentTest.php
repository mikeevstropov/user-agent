<?php

namespace Mikeevstropov\UserAgent;

use PHPUnit\Framework\TestCase;
use Webmozart\Assert\Assert;

class UserAgentTest extends TestCase
{
    public function testCanGetDesktopRand()
    {
        $string = UserAgent::getDesktopRand();

        Assert::stringNotEmpty(
            $string
        );
    }

    public function testCanGetMobileRand()
    {
        $string = UserAgent::getMobileRand();

        Assert::stringNotEmpty(
            $string
        );
    }
}