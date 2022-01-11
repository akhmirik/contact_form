<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use function Symfony\Component\Translation\t;

class FormTest extends TestCase
{
    use WithFaker;

    public function test_user_can_a_post()
    {
        $data = [
            'first_name'  => $this->faker->firstName,
            'last_name'   => $this->faker->lastName,
            'age'         => $this->faker->numberBetween(18, 70),
            'city'        => $this->faker->city,
            'phone'       => $this->faker->phoneNumber,
            'email'       => $this->faker->email,
            'description' => $this->faker->text,
            'comment'     => $this->faker->text
        ];

        $this->postJson(route('form.store'), $data)->assertCreated();

        $this->assertDatabaseHas('forms', $data);
    }
}
