<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testUserSave()
    {
        $user = factory(\App\User::class)->make();
        $this->assertInstanceOf(\App\User::class, $user);
        $this->assertTrue($user->save());
    }


    public function testUserUpdate()
    {
        $user = factory(\App\User::class)->create();
        $user = \App\User::find($user->id);
        $user->name = 'Steve Smith';
        $this->assertEquals('Steve Smith', $user->name);
        $user->save();
    }

}
