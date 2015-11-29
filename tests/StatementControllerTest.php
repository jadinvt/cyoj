<?php

namespace Tests\Controllers;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class StatementControllerTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('html');
    }

    public function testIndex()
    {
        $response = $this->get('statement');
        $this->assertResponseOk();
        $this->assertViewHas('statements');
        // getData() returns all vars attached to the response.
        $statement = $response->response->original->getData()['statements'];
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $statement);
        $this->assertInstanceOf('\App\Statement', $statement->first());
    }

    public function testCreate()
    {
        $this->get('statement/create');
        $this->assertResponseOk();
    }

    public function testShow()
    {
        $this->get('statement/1');
        $this->assertResponseOk();
        $this->assertViewHas('statement');
    }

    public function testEdit()
    {
        $this->get('statement/1');
        $this->assertResponseOk();
        $this->assertViewHas('statement');
    }
}
