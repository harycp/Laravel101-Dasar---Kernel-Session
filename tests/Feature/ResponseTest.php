<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ResponseTest extends TestCase
{
    public function testResponse(): void
    {
        $this->get('/response')
        ->assertStatus(200)
        ->assertSeeText('Hello World!');
    }

    public function testHeaderResponse(): void
    {   
        $this->get('/response/header')
        ->assertStatus(200)
        // asalnya dari json encode body
        ->assertSeeText('Hary')->assertSeeText('Capri')
        ->assertHeader('Author', 'Hary Capri')
        ->assertHeader('App', 'App Laravel');
    }
}
