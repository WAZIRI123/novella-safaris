<?php

namespace Tests\Feature;

use App\Models\TrekkingRoute;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TrekkingRouteGroupingTest extends TestCase
{
    use RefreshDatabase;

    public function test_current_route_is_excluded_from_grouped_related_cards(): void
    {
        TrekkingRoute::create([
            'name' => 'Machame Route',
            'slug' => 'machame',
            'description' => 'Canonical Machame route',
            'features' => ['Popular'],
            'price' => 1969,
            'days' => 7,
            'difficulty' => 'Moderate',
            'image' => 'https://example.com/machame.jpg',
            'category' => 'Trekking',
            'sort_order' => 1,
            'is_published' => true,
        ]);

        TrekkingRoute::create([
            'name' => '7 Days Machame Route',
            'slug' => '7-day-machame-route',
            'description' => 'Related Machame route',
            'features' => ['Popular'],
            'price' => 2100,
            'days' => 7,
            'difficulty' => 'Moderate',
            'image' => 'https://example.com/machame-7.jpg',
            'category' => 'Trekking',
            'sort_order' => 2,
            'is_published' => true,
        ]);

        $response = $this->get('/trekking/machame');

        $response->assertStatus(200);
        $response->assertSee(route('trekking.show', '7-day-machame-route'));
        $response->assertDontSee('href="' . route('trekking.show', 'machame') . '" class="btn btn-outline btn-sm"');
    }
}
