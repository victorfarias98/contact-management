<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactValidationTest extends TestCase
{
    use RefreshDatabase;

    public function test_invalid_data_fails_validation()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->post('/contacts', [
            'name' => 'abc',
            'contact' => '123',
            'email' => 'not-an-email',
        ]);

        $response->assertSessionHasErrors(['name', 'contact', 'email']);
    }
}
