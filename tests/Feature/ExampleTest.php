<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_header_includes_the_packaging_list_downloads(): void
    {
        $header = $this->view('partials.header');

        $header->assertSee('Packagin list');
        $header->assertSee(asset('assets/downloads/safari-packing-list.pdf'));
        $header->assertSee(asset('assets/downloads/kilimanjaro-packing-list.pdf'));
    }
}
