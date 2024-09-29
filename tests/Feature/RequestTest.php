<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RequestTest extends TestCase
{
    public function testPostRequest(){
    $this->post('/request/hello', [
            'name' => 'John'
        ])->assertSeeText('Hello John!');
    }
    public function testGetRequest(){
    $this->get("/request/hello?name=hary")->assertSeeText('Hello hary!');
    }
}
