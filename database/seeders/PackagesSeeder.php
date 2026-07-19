<?php

namespace Database\Seeders;

use App\Models\DayTrip;
use App\Models\OtherCountryTrip;
use App\Models\Safari;
use App\Models\SpecialPackage;
use App\Models\TrekkingRoute;
use App\Models\ZanzibarPackage;
use Illuminate\Database\Seeder;

class PackagesSeeder extends Seeder
{
    public function run(): void
    {
        $this->safaris();
        $this->trekkingRoutes();
        $this->zanzibarPackages();
        $this->dayTrips();
        $this->specialPackages();
        $this->otherCountryTrips();
    }

    private function safaris(): void
    {
        $data = [
            ['serengeti', 'Serengeti National Park', "Home to the Great Migration and one of the highest concentrations of lion, leopard and cheetah anywhere on earth.", ['Big Cats', 'Migration', 'Balloon safaris'], 2890, 'Best seller', 'https://images.unsplash.com/photo-1534177616072-ef7dc120449d?auto=format&fit=crop&w=1600&q=80'],
            ['ngorongoro', 'Ngorongoro Crater', "The world's largest intact caldera — an unbroken ecosystem home to black rhino, lion prides and 30,000 animals.", ['Big 5', 'UNESCO', 'Day trip'], 1950, 'UNESCO', 'https://images.unsplash.com/photo-1549366021-9f761d040a94?auto=format&fit=crop&w=1600&q=80'],
            ['tarangire', 'Tarangire National Park', "Ancient baobabs, epic herds of elephant, and the least-crowded of Tanzania's northern circuit parks.", ['Elephants', 'Baobabs', 'Quiet'], 1420, 'Elephants', 'https://images.unsplash.com/photo-1547721064-da6cfb341d50?auto=format&fit=crop&w=1600&q=80'],
            ['manyara', 'Lake Manyara', 'Groundwater forest, pink flamingos on the lake, and famous tree-climbing lions.', ['Tree lions', 'Birds', 'Half-day'], 980, 'Flamingos', 'https://images.unsplash.com/photo-1523805009345-7448845a9e53?auto=format&fit=crop&w=1600&q=80'],
            ['ruaha', 'Ruaha National Park', "Tanzania's largest park — remote southern wilderness with wild dog, greater kudu and huge lion prides.", ['Fly-in only', 'Wild dogs'], 4180, 'Remote', 'https://images.unsplash.com/photo-1568393691622-c7ba131d63b4?auto=format&fit=crop&w=1600&q=80'],
            ['nyerere-selous', 'Nyerere / Selous', "Africa's largest game reserve — boat safaris on the Rufiji, walking safaris and no crowds.", ['Boat safaris', 'Walking'], 3650, 'Southern', 'https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=1600&q=80'],
        ];

        foreach ($data as $i => [$slug, $name, $desc, $features, $price, $badge, $img]) {
            Safari::updateOrCreate(['slug' => $slug], [
                'name' => $name,
                'description' => $desc,
                'features' => $features,
                'price_from' => $price,
                'badge' => $badge,
                'image' => $img,
                'category' => 'Safari',
                'sort_order' => $i,
                'is_published' => true,
            ]);
        }
    }

    private function trekkingRoutes(): void
    {
        $data = [
            ['machame', 'Machame Route', 'The Whiskey Route — steeper, more scenic, and the most popular route on the mountain.', ['Moderate', 'Best success', 'Scenic'], 1969, 7, 'Moderate', 'https://images.unsplash.com/photo-1589182373726-e4f658ab50f0?auto=format&fit=crop&w=1600&q=80'],
            ['lemosho', 'Lemosho Route', 'Approach from the west — remote, quiet, and the best acclimatisation profile of any route.', ['Best acclimatisation', 'Remote'], 2251, 8, 'Moderate', 'https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?auto=format&fit=crop&w=1600&q=80'],
            ['marangu', 'Marangu Route', 'The Coca-Cola Route — the only route with mountain huts. Gentler, and comfortable for first-timers.', ['Huts', 'Beginner-friendly'], 1556, 6, 'Easy', 'https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=1600&q=80'],
            ['rongai', 'Rongai Route', 'The only northern approach. Drier, quieter, and the go-to route during the rainy season.', ['Quiet', 'Rainy-season option'], 1870, 7, 'Moderate', 'https://images.unsplash.com/photo-1523805009345-7448845a9e53?auto=format&fit=crop&w=1600&q=80'],
            ['northern-circuit', 'Northern Circuit', 'The longest route on the mountain — highest summit success, and stunning 360° panoramas.', ['Longest route', 'Highest success'], 2590, 9, 'Strenuous', 'https://images.unsplash.com/photo-1489392191049-fc10c97e64b6?auto=format&fit=crop&w=1600&q=80'],
            ['meru', 'Mount Meru Trek', "Kilimanjaro's little sister at 4,566m — a perfect warm-up climb, wildlife-filled and dramatic.", ['Warm-up climb', 'Wildlife'], 1120, 4, 'Moderate', 'https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?auto=format&fit=crop&w=1600&q=80'],
        ];

        foreach ($data as $i => [$slug, $name, $desc, $features, $price, $days, $difficulty, $img]) {
            TrekkingRoute::updateOrCreate(['slug' => $slug], [
                'name' => $name,
                'description' => $desc,
                'features' => $features,
                'price' => $price,
                'days' => $days,
                'duration_days' => $days,
                'difficulty' => $difficulty,
                'image' => $img,
                'category' => 'Trekking',
                'sort_order' => $i,
                'is_published' => true,
            ]);
        }
    }

    private function zanzibarPackages(): void
    {
        $data = [
            ['stone-town-getaway', 'Stone Town Getaway', 'Wander UNESCO-listed alleys of coral stone, spice markets and ornate wooden doors — history at every turn.', ['UNESCO', 'History'], 890, 3, 'https://images.unsplash.com/photo-1589197331516-4d84b72ebde3?auto=format&fit=crop&w=1600&q=80'],
            ['nungwi-beach-escape', 'Nungwi Beach Escape', 'Powdery white sand, warm shallow water and Zanzibar\'s best sunsets — the northern tip is home to the finest beach hotels.', ['Beach', 'Boutique'], 1240, 5, 'https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=1600&q=80'],
            ['spice-and-sea', 'Spice Tours & Sea Life', 'A half-day plantation walk, Prison Island tortoises and the famous Safari Blue snorkel & seafood cruise.', ['Culture', 'Snorkel'], 1080, 4, 'https://images.unsplash.com/photo-1580060839134-75a5edca2e99?auto=format&fit=crop&w=1600&q=80'],
        ];

        foreach ($data as $i => [$slug, $name, $desc, $features, $price, $days, $img]) {
            ZanzibarPackage::updateOrCreate(['slug' => $slug], [
                'name' => $name,
                'description' => $desc,
                'features' => $features,
                'price' => $price,
                'days' => $days,
                'duration_days' => $days,
                'image' => $img,
                'category' => 'Zanzibar',
                'sort_order' => $i,
                'is_published' => true,
            ]);
        }
    }

    private function dayTrips(): void
    {
        $data = [
            ['ngorongoro-day-trip', 'Ngorongoro Crater Day Trip', "Descend into the world's largest intact caldera for a full-day game drive — Big 5 possible in a single day.", ['Big 5', 'Guided'], 420, 'Full day', 'https://images.unsplash.com/photo-1549366021-9f761d040a94?auto=format&fit=crop&w=1600&q=80'],
            ['lake-manyara-day-trip', 'Lake Manyara Day Trip', 'Tree-climbing lions, hippo pools, flocks of pink flamingos and a groundwater forest.', ['Tree lions', 'Birds'], 280, 'Full day', 'https://images.unsplash.com/photo-1523805009345-7448845a9e53?auto=format&fit=crop&w=1600&q=80'],
            ['tarangire-day-trip', 'Tarangire Day Trip', "Elephants under the baobabs — one of Africa's most photogenic elephant destinations.", ['Elephants', 'Baobabs'], 260, 'Full day', 'https://images.unsplash.com/photo-1547721064-da6cfb341d50?auto=format&fit=crop&w=1600&q=80'],
            ['materuni-waterfalls-coffee', 'Materuni Waterfalls & Coffee Tour', 'Hike through banana plantations to a hidden waterfall, then roast your own coffee with a Chagga family.', ['Coffee', 'Waterfall'], 90, 'Half day', 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1600&q=80'],
            ['maasai-village-cultural', 'Maasai Village Cultural Day', 'Learn ceremonial dance, jump with the warriors, share a meal — an unstaged cultural exchange.', ['Culture', 'Community'], 140, 'Full day', 'https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=1600&q=80'],
            ['arusha-national-park', 'Arusha National Park', "Overlooked gem right on Arusha's doorstep — giraffe, buffalo, colobus monkeys and canoe safaris.", ['Canoe safari', 'Giraffe'], 180, 'Half day', 'https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?auto=format&fit=crop&w=1600&q=80'],
        ];

        foreach ($data as $i => [$slug, $name, $desc, $features, $price, $duration, $img]) {
            DayTrip::updateOrCreate(['slug' => $slug], [
                'name' => $name,
                'description' => $desc,
                'features' => $features,
                'price' => $price,
                'duration' => $duration,
                'image' => $img,
                'category' => 'Day Trip',
                'sort_order' => $i,
                'is_published' => true,
            ]);
        }
    }

    private function specialPackages(): void
    {
        $data = [
            ['safari-zanzibar-combo', 'Safari & Zanzibar Combo', 'Five days on safari — Serengeti, Ngorongoro, Tarangire — then a flight straight to a Nungwi beach villa.', 4780, '10 Days', 10, 9, 'https://images.unsplash.com/photo-1534177616072-ef7dc120449d?auto=format&fit=crop&w=1600&q=80'],
            ['luxury-fly-in-safari', 'Luxury Fly-In Safari', 'Private aircraft between the Serengeti, Ruaha and Nyerere — tented luxury under a canopy of stars.', 8450, '12 Days', 12, 11, 'https://images.unsplash.com/photo-1547721064-da6cfb341d50?auto=format&fit=crop&w=1600&q=80'],
            ['family-adventure-safari', 'Family Adventure Safari', 'Slower pace, kid-friendly lodges, junior ranger badges and Maasai visits designed for families.', 2340, '8 Days', 8, 7, 'https://images.unsplash.com/photo-1568393691622-c7ba131d63b4?auto=format&fit=crop&w=1600&q=80'],
            ['honeymoon-journey', 'Honeymoon Journey', 'Private plunge-pool suites, champagne dinners under the stars, and a barefoot beach finale on Mnemba.', 6890, '11 Days', 11, 10, 'https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=1600&q=80'],
            ['pro-photography-expedition', 'Pro Photography Expedition', 'Private vehicles, beanbags, off-road permits, golden-hour drives — led by a wildlife photographer.', 7890, '14 Days', 14, 13, 'https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=1600&q=80'],
            ['kili-safari-zanzibar', 'Kilimanjaro + Safari + Zanzibar', 'The full Tanzania experience — summit Uhuru, then safari, then unwind on the beach.', 5890, '15 Days', 15, 14, 'https://images.unsplash.com/photo-1589182373726-e4f658ab50f0?auto=format&fit=crop&w=1600&q=80'],
        ];

        foreach ($data as $i => [$slug, $name, $desc, $price, $duration, $days, $nights, $img]) {
            SpecialPackage::updateOrCreate(['slug' => $slug], [
                'name' => $name,
                'description' => $desc,
                'price_from' => $price,
                'duration' => $duration,
                'duration_days' => $days,
                'duration_nights' => $nights,
                'image' => $img,
                'category' => 'Special Package',
                'sort_order' => $i,
                'is_published' => true,
            ]);
        }
    }

    private function otherCountryTrips(): void
    {
        $data = [
            ['kenya-maasai-mara', 'Kenya', 'Kenya — Maasai Mara', 'The northern extension of the Serengeti — Mara River crossings, big cat drama and open plains.', 3290, '7 Days', 7, 'https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=1600&q=80'],
            ['rwanda-gorilla-trekking', 'Rwanda', 'Rwanda — Gorilla Trekking', 'Come face-to-face with mountain gorillas in Volcanoes National Park — a once-in-a-lifetime encounter.', 4180, '4 Days', 4, 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1600&q=80'],
            ['uganda-bwindi-nile', 'Uganda', 'Uganda — Bwindi & the Nile', "Half of the world's remaining mountain gorillas live here. Combine with chimp trekking in Kibale and the source of the Nile.", 3890, '8 Days', 8, 'https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?auto=format&fit=crop&w=1600&q=80'],
            ['amboseli-tsavo', 'Kenya', 'Amboseli & Tsavo', 'Elephants against the backdrop of Kilimanjaro — Amboseli is the classic African postcard.', 2180, '6 Days', 6, 'https://images.unsplash.com/photo-1547721064-da6cfb341d50?auto=format&fit=crop&w=1600&q=80'],
            ['queen-elizabeth-np', 'Uganda', 'Queen Elizabeth NP', 'Tree-climbing lions in the Ishasha sector, boat cruises on the Kazinga Channel, and volcanic craters.', 1890, '5 Days', 5, 'https://images.unsplash.com/photo-1523805009345-7448845a9e53?auto=format&fit=crop&w=1600&q=80'],
            ['three-country-combo', 'Multi-country', '3-Country Combo', 'Tanzania safari + Rwanda gorillas + Zanzibar beach — the ultimate East African journey.', 8290, '12 Days', 12, 'https://images.unsplash.com/photo-1568393691622-c7ba131d63b4?auto=format&fit=crop&w=1600&q=80'],
        ];

        foreach ($data as $i => [$slug, $country, $name, $desc, $price, $duration, $days, $img]) {
            OtherCountryTrip::updateOrCreate(['slug' => $slug], [
                'name' => $name,
                'country' => $country,
                'description' => $desc,
                'price_from' => $price,
                'duration' => $duration,
                'duration_days' => $days,
                'image' => $img,
                'category' => 'East Africa',
                'sort_order' => $i,
                'is_published' => true,
            ]);
        }
    }
}
