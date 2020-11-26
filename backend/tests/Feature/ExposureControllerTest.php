<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExposureControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testGuestList()
    {
        $response = $this->get(route('RD.list'));

        $response->assertRedirect(route('login'));

    }

    public function testAuthList()
    {
        // 初期データをテーブルに追加 job,positionデータなど
        $this->seed();

        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->get(route('RD.list'));

        $response->assertStatus(200)
            ->assertViewIs('RD.list');
    }
}
