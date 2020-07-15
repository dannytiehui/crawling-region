<?php

namespace Dannytiehui\CrawlingRegion\Tests;

use Dannytiehui\CrawlingRegion\Md5Hasher;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestCase;

class Md5HasherTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $md5Hasher = new Md5Hasher();
        $md5Hasher->index();

        $this->assertTrue(1 ? true:false);
    }
}
