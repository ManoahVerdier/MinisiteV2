<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Attribute;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        Attribute::create(["name"=>"TEst", "displayName"=>"test", "type"=>"number"]);

        $this->assertTrue(true);
    }
}
