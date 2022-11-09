<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_create_pegawai()
    {
        $user = User::factory(1)->create(['role'=>'pegawai']);
        $userFind = User::find($user->id);
        if(!is_null($userFind)){
            self::assertTrue(true);
        }

    }


}
