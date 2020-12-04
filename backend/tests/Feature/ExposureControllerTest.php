<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExposureControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        $response = $this->get(route('RD.index'));

        $response->assertStatus(200)
            ->assertViewIs('Rd.index');
    }

    public function testGuestList()
    {
        $response = $this->get(route('RD.list'));

        $response->assertRedirect(route('login'));

    }

    public function testAuthIndex()
    {
        // 初期データをテーブルに追加 job,positionデータなど
        // $this->seed();

        $auth_user = factory(User::class)->create();

        $response = $this->actingAs($auth_user)
            ->get(route('RD.index'));

        $response->assertStatus(200)
            ->assertViewIs('Rd.index');
    }

    public function testAuthList()
    {
        // 初期データをテーブルに追加 job,positionデータなど
        // $this->seed();

        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->get(route('RD.list'));

        $response->assertStatus(200)
            ->assertViewIs('RD.list');
    }
}
