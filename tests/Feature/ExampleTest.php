<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Auth\User;
use App\Models\User;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/')->assertStatus(200);

        // $response->assertStatus(200);
    }

    // public function test_sex()
    // {
    //     $response = $this->get('/sex');

    //     $response->assertStatus(200);
    // }

    
    public function test_if_data_does_not_exists_in_database()
    {
        $user1 = User::make([
            'name' => 'amir',
            'email' => 'amir@gmail.com'
        ]);

        $user2 = User::make([
            'name' => 'amir',
            'email' => 'sadegh@gmail.com'
        ]);


        $this->assertTrue($user1->email != $user2->email);
    }
}
