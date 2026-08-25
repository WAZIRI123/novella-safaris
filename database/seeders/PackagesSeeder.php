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
            ['ngorongoro', 'Ngorongoro Crater', "The world's largest intact caldera  an unbroken ecosystem home to black rhino, lion prides and 30,000 animals.", ['Big 5', 'UNESCO', 'Day trip'], 1950, 'UNESCO', 'https://images.unsplash.com/photo-1549366021-9f761d040a94?auto=format&fit=crop&w=1600&q=80'],
            ['tarangire', 'Tarangire National Park', "Ancient baobabs, epic herds of elephant, and the least-crowded of Tanzania's northern circuit parks.", ['Elephants', 'Baobabs', 'Quiet'], 1420, 'Elephants', 'https://images.unsplash.com/photo-1547721064-da6cfb341d50?auto=format&fit=crop&w=1600&q=80'],
            ['manyara', 'Lake Manyara', 'Groundwater forest, pink flamingos on the lake, and famous tree-climbing lions.', ['Tree lions', 'Birds', 'Half-day'], 980, 'Flamingos', 'https://images.unsplash.com/photo-1523805009345-7448845a9e53?auto=format&fit=crop&w=1600&q=80'],
            ['ruaha', 'Ruaha National Park', "Tanzania's largest park  remote southern wilderness with wild dog, greater kudu and huge lion prides.", ['Fly-in only', 'Wild dogs'], 4180, 'Remote', 'https://images.unsplash.com/photo-1568393691622-c7ba131d63b4?auto=format&fit=crop&w=1600&q=80'],
            ['nyerere-selous', 'Nyerere / Selous', "Africa's largest game reserve  boat safaris on the Rufiji, walking safaris and no crowds.", ['Boat safaris', 'Walking'], 3650, 'Southern', 'https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=1600&q=80'],
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
            ['machame', 'Machame Route', 'The Whiskey Route  steeper, more scenic, and the most popular route on the mountain.', ['Moderate', 'Best success', 'Scenic'], 1969, 7, 'Moderate', 'images/kilimanjaro images/machame-route-6-days-2.jpeg'],
            ['7-day-machame-route', '7 Days Machame Route', 'Classic 7-day Machame itinerary  balanced acclimatisation and scenic sections.', ['Moderate', 'Popular'], 1969, 7, 'Moderate', 'images/kilimanjaro images/machame-group.jpg'],
            ['6-day-machame-route', '6 Days Machame Route', 'The Whiskey Route Challenge  scenic Machame route with a shorter, high-adventure summit push.', ['Popular', 'Scenic', 'Challenge'], 2100, 6, 'Challenging', 'images/25.jpeg'],
            ['5-day-machame-express', '5 Days Machame Express', 'Shorter Machame option for experienced trekkers who want a quicker summit push.', ['Express', 'Fitness required'], 1599, 5, 'Strenuous', 'images/26.jpeg'],
            ['lemosho', 'Lemosho Route', 'Approach from the west  remote, quiet, and the best acclimatisation profile of any route.', ['Best acclimatisation', 'Remote'], 2251, 8, 'Moderate', 'images/kilimanjaro images/Kilimanjaro-Lemosho-Route-8-days.jpeg'],
            ['marangu', 'Marangu Route', 'The Coca-Cola Route  the only route with mountain huts. Gentler, and comfortable for first-timers.', ['Huts', 'Beginner-friendly'], 1556, 6, 'Easy', 'images/kilimanjaro images/Marangu3.jpg'],
            ['6-day-marangu-huts', '6 Days Marangu Route (Huts)', 'Marangu 6-day with hut stays for a comfortable ascent.', ['Huts', 'Beginner-friendly'], 1556, 6, 'Easy', 'images/kilimanjaro images/marangu-5.jpg'],
            ['rongai', 'Rongai Route', 'The only northern approach. Drier, quieter, and the go-to route during the rainy season.', ['Quiet', 'Rainy-season option'], 1870, 7, 'Moderate', 'images/kilimanjaro images/kili2.jpg'],
            ['rongai-6-day', '6 Days Rongai Route', 'Shorter Rongai itinerary with good acclimatisation profile.', ['Quiet', 'Less-crowded'], 1720, 6, 'Moderate', 'images/23.jpeg'],
            ['umbwe', 'Umbwe Route', 'Steep, direct, and highly adventurous  one of the most demanding and less-crowded routes on Kilimanjaro.', ['Steep ascent', 'Less crowded', 'Experienced climbers'], 1890, 6, 'Very Challenging', 'images/kilimanjaro images/Kilimanjaro.jpeg'],
            ['6-day-umbwe-route-climb', '6 Day Umbwe Route Climb', 'A direct and demanding Kilimanjaro ascent through rainforest, steep ridges, and the southern circuit to the summit.', ['Steep', 'Direct ascent', 'Experienced route'], 2100, 6, 'Very Challenging', 'images/24.jpeg'],
            ['northern-circuit', 'Northern Circuit Route', 'The longest route on the mountain  highest summit success, and stunning 360Â° panoramas.', ['Longest route', 'Highest success'], 2590, 9, 'Strenuous', 'images/kilimanjaro images/kilimanjaro-routes-7-best-routes-to-climb-mount-kilimanjaro.jpg'],
            ['9-days-northern-circuit-route', '9 Days Northern Circuit Route', 'Longer and highly scenic Kilimanjaro climb with excellent acclimatisation and quieter northern slopes.', ['Longer route', 'Quieter', 'Excellent acclimatisation'], 2550, 9, 'Moderate to Challenging', 'images/21.jpeg'],
            ['8-days-northern-circuit-route', '8 Days Northern Circuit Route', 'A scenic and quieter Kilimanjaro climb with excellent panoramic views, remote northern-slope trails, and strong acclimatisation.', ['Quieter', 'Panoramic views', 'Strong acclimatisation'], 2400, 8, 'Moderate to Challenging', 'images/22.jpeg'],
            ['meru', 'Mount Meru Trek', "Kilimanjaro's little sister at 4,566m  a perfect warm-up climb, wildlife-filled and dramatic.", ['Warm-up climb', 'Wildlife'], 1120, 4, 'Moderate', 'images/kilimanjaro images/Kilimanjaro.jpeg'],
            ['mount-meru-3-day', '3 Days Mount Meru Trek', 'Short Mount Meru option for tighter schedules.', ['Warm-up', 'Wildlife'], 920, 3, 'Moderate', 'images/16.jpeg'],
            ['7-day-lemosho-route-climb', '7 Days Lemosho Route Climb', 'The 7-day Lemosho Route is one of Kilimanjaro most scenic routes  rainforest, Shira Plateau and the southern circuit to the summit.', ['Scenic', 'Great acclimatisation'], 2300, 7, 'Moderate to Challenging', 'images/kilimanjaro images/Kilimanjaro-Lemosho-Route-8-days.jpeg'],
            ['6-day-lemosho-route-climb', '6 Days Lemosho Route Climb   Novella Tanzanian Safaris & Trekking', 'The 6 Days Lemosho Route is a scenic and adventurous Kilimanjaro trek starting from the western side of the mountain.', ['Strong fitness', 'Less crowded', 'Summit push'], 2150, 6, 'Challenging', 'images/20.jpeg'],
            ['8-day-lemosho-route-climb-kosovo-camp', '8 Days Lemosho Route Climb   Kosovo Camp', 'The 8 Days Lemosho Kosovo Route is designed for trekkers seeking the scenery and acclimatisation profile of the Lemosho Route with the advantage of Kosovo Camp before the summit push.', ['Kosovo Camp', 'Shorter summit night', 'Excellent acclimatisation'], 2600, 8, 'Moderate to Challenging', 'images/15.jpeg'],
        ];

        foreach ($data as $i => [$slug, $name, $desc, $features, $price, $days, $difficulty, $img]) {
            $route = TrekkingRoute::updateOrCreate(['slug' => $slug], [
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

            if ($slug === '8-day-lemosho-route-climb-kosovo-camp') {
                $route->update([
                    'overview' => "The 8 Days Lemosho Route is a scenic and well-paced Kilimanjaro climb that starts on the quieter western side of the mountain and offers excellent acclimatisation, dramatic views of the Shira Plateau, and a stronger summit profile before the final push to Uhuru Peak. This itinerary is ideal for trekkers who want a more comfortable pace, less crowded start, and a rewarding summit journey with a shorter final climb from the higher Kosovo Camp.\n\nQuick facts: 8 days / 7 nights, Londorossi Gate to Mweka Gate, moderate to challenging, approx. 70 km, best for trekkers wanting better acclimatisation and a slower, safer ascent, mountain camping, and a summit at Uhuru Peak (5,895 m / 19,341 ft).",
                    'duration_days' => 8,
                    'duration_nights' => 7,
                    'theme' => 'Slow & steady summit',
                    'skill_level' => 'Moderate to Challenging',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 2500],
                        ['persons' => 2, 'price' => 2450],
                        ['persons' => 5, 'price' => 2350],
                        ['persons' => 10, 'price' => 2300],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Lemosho Gate to Mti Mkubwa Camp', 'description' => 'Drive from Moshi to Londorossi Gate, complete park formalities, and trek through rainforest to Mti Mkubwa Camp.', 'accommodation' => 'Rainforest camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 2, 'title' => 'Mti Mkubwa Camp to Shira I Camp', 'description' => 'Walk across moorland and volcanic landscapes, with views of Kibo and the Shira Plateau as you settle into camp.', 'accommodation' => 'Shira I camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Shira I Camp to Shira II Camp', 'description' => 'Enjoy a shorter day on the plateau, with extra time for acclimatisation and views of the northern ice fields.', 'accommodation' => 'Shira II camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Shira II Camp to Barranco Camp', 'description' => 'Ascend high toward Lava Tower before descending into the Barranco Valley below the Great Barranco Wall.', 'accommodation' => 'Barranco camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Barranco Camp to Karanga Camp', 'description' => 'Climb the Barranco Wall and continue through the Karanga Valley, taking a steady acclimatisation pace.', 'accommodation' => 'Karanga camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Karanga Camp to Kosovo Camp', 'description' => 'Continue the climb to Kosovo Camp, which sits higher on the mountain and allows a shorter and more direct summit push the next night.', 'accommodation' => 'Kosovo Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 7, 'title' => 'Kosovo Camp to Uhuru Peak, then to Mweka Camp', 'description' => 'Begin the summit push at midnight over scree and rock to Stella Point and then Uhuru Peak. After the summit, descend to Mweka Camp for rest and recovery.', 'accommodation' => 'Mweka camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 8, 'title' => 'Mweka Camp to Mweka Gate', 'description' => 'Descend through rainforest to Mweka Gate, complete the exit formalities, and transfer back to Moshi for a celebration evening.', 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => [
                        '2 nights hotel accommodation in Moshi (bed & breakfast)',
                        'Private airport transfers',
                        'Qualified guides and mountain crew',
                        'National Park fees and rescue fees',
                        '18% VAT on tour fees and services',
                        'All camping accommodations and mountain tents',
                        'Sleeping mats and sleeping bags',
                        'All meals on the mountain',
                        'Treated water',
                        'Pulse oximeter, first aid kit, and emergency oxygen',
                        'Fair wages for guides and porters approved by Kilimanjaro National Park Authority',
                    ],
                    'excludes' => [
                        'Flights and visa fees',
                        'Tips for the mountain crew',
                        'Private toilet tent ($120 per group)',
                        'Laundry services',
                        'Travel and medical insurance',
                        'Personal expenses',
                    ],
                    'accommodations' => [
                        ['name' => 'Mountain Camping', 'description' => 'All nights are spent in comfortable mountain tents with a dedicated support crew, hot meals, and full camp setup throughout the route.', 'image' => 'images/kilimanjaro images/machame-group.jpg'],
                    ],
                    'gallery' => [
                        'images/kilimanjaro images/machame-group.jpg',
                        'images/kilimanjaro images/Kilimanjaro.jpeg',
                        'images/kilimanjaro images/kilimanjaro-routes-7-best-routes-to-climb-mount-kilimanjaro.jpg',
                    ],
                ]);
            }

            if ($slug === '6-day-marangu-huts') {
                $route->update([
                    'overview' => "Marangu or 'Coca-Cola' route is the most popular of the available Kilimanjaro routes today. It is the only route where overnight stays are in huts. This makes Marangu a good option for hiking during the rainy season.\n\nThe Kilimanjaro 'Coca-Cola' route features a well-trodden trail running through all the climate zones - from tropical rainforest to eternal ice and offers scenic African landscapes.\n\nThe 6 Days Marangu Route is a classic Kilimanjaro climb that offers a more comfortable hut-based trekking experience, gradual trails, and a direct summit approach to Uhuru Peak. Known as the 'Coca-Cola Route,' it is ideal for trekkers who prefer sleeping in mountain huts instead of camping.\n\nQuick facts: Duration 6 Days / 5 Nights; Starting point Marangu Gate; Ending point Marangu Gate; Difficulty Moderate to challenging; Distance Approx. 72 km / 45 miles; Best for trekkers who prefer hut accommodation instead of camping; Scenery rainforest, moorland, alpine desert, Kibo views, summit glaciers; Accommodation mountain huts; Summit Uhuru Peak - 5,895m / 19,341ft; Best time January-March and June-October; Route style classic direct route with hut-based accommodation and gradual trekking trails.",
                    'duration_days' => 6,
                    'duration_nights' => 5,
                    'theme' => 'Classic hut-based route',
                    'skill_level' => 'Moderate to challenging',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 2150],
                        ['persons' => 2, 'price' => 2100],
                        ['persons' => 5, 'price' => 2000],
                        ['persons' => 10, 'price' => 1950],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Marangu Gate (1860m) to Mandara Hut (2700m)', 'description' => 'After breakfast you will be picked up at the hotel around 8:00 am and driven to Marangu Gate. After registration formalities, you begin the 5-hour hike to Mandara Hut covering 8 km through dense rainforest. In the forest you may spot blue monkeys and Colobus monkeys as you head to the hut.', 'accommodation' => 'Mandara Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 2, 'title' => 'Mandara Hut (2700m) to Horombo Hut (3720m)', 'description' => 'After breakfast, start the trek to Horombo Hut. Approximately 4-6 hours later, the hut comes into sight at an altitude of 3700m. From the hut you can enjoy fantastic views of Kibo and Mawenzi.', 'accommodation' => 'Horombo Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Horombo Acclimatisation', 'description' => 'You spend a second night at Horombo, with an extra acclimatisation day added to improve your chances of reaching the peak. In the morning, walk for about 3 hours up to Zebra Rock before descending back to base for lunch. After lunch, relax and enjoy a gentle walk in the valley before dinner and overnight at Horombo Hut.', 'accommodation' => 'Horombo Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Horombo Hut (3720m) to Kibo Hut (4700m)', 'description' => 'After breakfast, begin another beautiful day. The first part of the hike passes through dwindling heathland and then into a moonlike alpine desert as you enter the sweeping saddle connecting Mawenzi and Kibo. After lunch and crossing this large saddle, you can examine the summit climb up Kibo that you will start in just a few hours. Have an early dinner and then get a long rest before the summit.', 'accommodation' => 'Kibo Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Kibo Hut (4700m) to Uhuru Peak (5895m) and down to Horombo Hut (3720m)', 'description' => 'Wake up at 1:00 am to begin the summit push. It takes about 4-5 hours to reach Gilman Point at 5681m on the crater rim of Kilimanjaro, where the first light begins to warm the land. After a further hike of around 1 hour and 30 minutes, you reach Uhuru Peak at 5895m, spend time taking photos and watching the African sunrise, then descend to Kibo Hut for a warm lunch and short rest. Continue back to Horombo Hut for your last overnight on the mountain.', 'accommodation' => 'Horombo Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Horombo Hut (3720m) to Marangu Gate (1860m)', 'description' => 'Wake up as usual and descend through the moorland to Mandara Hut. Enjoy a hot lunch there and continue down through the tropical rainforest to the park gate. A vehicle will take you to the hotel in Moshi where it is time to celebrate.', 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => [
                        'Hotel in Moshi; bed & breakfast',
                        'Private transport to / from Kilimanjaro International Airport to your hotel in Moshi',
                        'Qualified guides with mountain crew',
                        'National Park fees',
                        '18% VAT on tour fees and services',
                        'All huts accommodations',
                        'Hut fees',
                        'Transport',
                        'Rescue fees',
                        'All needs on the mountain (breakfast, lunch and dinner)',
                        'Guides and porters accommodations and their entry fees on the mountain',
                        'Pulse oximeter',
                        'First aid kit',
                        'Emergency oxygen',
                        'Treated water through the trek',
                        'Fair wages to guides and porters as approved by Kilimanjaro National Park authority',
                    ],
                    'excludes' => [
                        'Flights',
                        'Visa',
                        'Tips to mountain crew',
                        'Private toilet ($120 per group)',
                        'Laundry services',
                    ],
                    'accommodations' => [
                        ['name' => 'Mountain Huts', 'description' => 'Stay in shared mountain huts along the route, offering a more comfortable and sheltered overnight experience compared to camping routes.', 'image' => 'images/kilimanjaro images/marangu-5.jpg'],
                    ],
                    'gallery' => [
                        'images/kilimanjaro images/Marangu3.jpg',
                        'images/kilimanjaro images/marangu-5.jpg',
                        'images/kilimanjaro images/Mount-Kilimanjaro-Mauly-Tours.jpg',
                    ],
                ]);
            }

            if ($slug === 'rongai-6-day') {
                $route->update([
                    'overview' => "Rongai is the only Kilimanjaro route starting on the northern slope of the mountain. This route begins from the Kenya side, climbs up the flanks of Mawenzi, crosses the barren saddle between Mawenzi and Kibo, and finally reaches the summit via the Marangu route.\n\nThe 6 Days Rongai Route is a quieter Kilimanjaro climb from the northern side, offering a steady ascent, remote landscapes, and beautiful Kibo views. It is ideal for fit trekkers who want a less crowded route with a shorter, more direct summit journey to Uhuru Peak.\n\nQuick facts: Duration 6 Days / 5 Nights; Starting point Rongai Gate; Ending point Marangu Gate; Difficulty Moderate to challenging; Distance Approx. 73 km / 45 miles; Best for fit trekkers who want a quieter northern-side route; Scenery farmland, forest, moorland, alpine desert, Kibo views, summit glaciers; Accommodation mountain camping; Summit Uhuru Peak - 5,895m / 19,341ft; Best time January-March and June-October; Route style less crowded northern approach with a steady ascent and faster 6-day pace.",
                    'duration_days' => 6,
                    'duration_nights' => 5,
                    'theme' => 'Quieter northern route',
                    'skill_level' => 'Moderate to challenging',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 2100],
                        ['persons' => 2, 'price' => 2000],
                        ['persons' => 5, 'price' => 1950],
                        ['persons' => 10, 'price' => 1900],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Nalemoru Gate (1990m) to Simba Camp (2570m)', 'description' => 'A guide and mountain support crew will meet you at the hotel in the morning for a briefing before driving to the northern entrance: Nalemuru Gate (2,020m / 6627ft). After permits and rescue registration, the group starts trekking up to Simba Camp (2,671m / 8612ft). The trail is moderate and passes through coniferous forest on Kilimanjaro northern slope. By the time you reach camp, the crew will have set up tents and started preparing dinner.', 'accommodation' => 'Simba Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 2, 'title' => 'Simba Camp (2570m) to Kikelelwa Camp (3700m)', 'description' => 'Another beautiful day with superb views of the eastern ice field on the crater rims of Kibo. It takes around 3 hours to cross the moorland zone on a smaller path toward the jagged peaks of Mawenzi to reach Kikelelwa for lunch and overnight.', 'accommodation' => 'Kikelelwa Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Kikelelwa Camp (3630m) to Mawenzi Tarn Hut (4330m)', 'description' => 'This is a short but steep day on grassy slopes, rewarding you with stunning all-round views and a strong sense of wilderness. The camp is spectacularly located in a cirque beneath the towering spires of Mawenzi. You have free time in the afternoon to rest or explore the surrounding area for acclimatisation.', 'accommodation' => 'Mawenzi Tarn Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Mawenzi Tarn Hut (4330m) to Kibo Hut (4700m)', 'description' => 'Today you cross the lunar desert of the saddle between Kibo and Mawenzi to reach Kibo Hut. Spend the afternoon resting and preparing for the final ascent at midnight.', 'accommodation' => 'Kibo Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Summit Day: Kibo Hut to Uhuru Peak and down to Horombo Hut', 'description' => 'The final ascent begins around 00:00. This is the steepest and most demanding section, and your guide will set a slow, steady pace. In darkness, it takes about 5 hours to reach the crater rim at Gilman Point (5685m), where you take a short rest and enjoy the sunrise over Mawenzi. After a further hour, you reach Uhuru Peak (5895m). After photos on the summit, descend to Kibo Hut for a short rest and hot lunch before continuing down to Horombo Hut for the overnight.', 'accommodation' => 'Horombo Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Horombo Hut (3720m) to Marangu Gate (1860m)', 'description' => 'On the last day, pass through heath and moorland to Mandara Hut (2700m) and enjoy a hot lunch there. Continue descending through the tropical rainforest to the Kilimanjaro National Park gate, collect your certificates, and transfer back to your hotel in Moshi for a well-earned celebration.', 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => [
                        '2 Nights hotel in Moshi: bed & breakfast',
                        'Private transport to / from Kilimanjaro International Airport to your hotel in Moshi',
                        'Qualified guides with mountain crew',
                        'National Park fees',
                        '18% VAT on tour fees and services',
                        'All camping accommodations',
                        'Mountain tents',
                        'Transport',
                        'Rescue fees',
                        'All needs on the mountain (breakfast, lunch and dinner)',
                        'Guides and portersaccommodations and their entry fees on the mountain',
                        'Pulse oximeter',
                        'First aid kit',
                        'Emergency oxygen',
                        'Sleeping mats and sleeping bags',
                        'Treated water through the trek',
                        'Fair wages to guides and porters as approved by Kilimanjaro National Park authority',
                    ],
                    'excludes' => [
                        'Flights',
                        'Visa',
                        'Tips to mountain crew',
                        'Private toilet ($120 per group)',
                        'Laundry services',
                    ],
                    'accommodations' => [
                        ['name' => 'Mountain Camping', 'description' => 'Sleep in quality mountain tents while trekking through varied landscapes, with a dedicated crew handling camp setup, meals, and support throughout the route.', 'image' => 'images/kilimanjaro images/kili2.jpg'],
                    ],
                    'gallery' => [
                        'images/kilimanjaro images/kili2.jpg',
                        'images/kilimanjaro images/Kilimanjaro.jpeg',
                        'images/kilimanjaro images/kilimanjaro-routes-7-best-routes-to-climb-mount-kilimanjaro.jpg',
                    ],
                ]);
            }

            if ($slug === 'meru') {
                $route->update([
                    'overview' => "The 4 Days Mount Meru Climb is a scenic and well-paced trek through Arusha National Park, offering lush forests, wildlife encounters, volcanic ridges, and stunning summit views. With an extra day for better acclimatisation, this route gives trekkers a more comfortable and rewarding way to experience Tanzania second-highest mountain.\n\nThis route is ideal for trekkers who want an excellent pre-Kilimanjaro acclimatisation climb, quieter trails, and a strong mountain adventure with hut-based accommodation. It combines forest scenery, wildlife, crater views, and a memorable sunrise at Socialist Peak.\n\nQuick facts: Duration 4 Days / 3 Nights; Starting point Momella Gate; Ending point Momella Gate; Difficulty Moderate to challenging; Summit Socialist Peak - 4,566m / 14,980ft; Best for trekkers wanting better acclimatisation and a scenic pre-Kilimanjaro climb; Scenery forest, wildlife zones, crater rim, alpine landscapes, and summit views; Accommodation mountain huts; Location Arusha National Park, Tanzania; Best time January-March and June-October; Route style scenic ridge climb with strong acclimatisation and unforgettable sunrise views.",
                    'duration_days' => 4,
                    'duration_nights' => 3,
                    'theme' => 'Scenic acclimatisation climb',
                    'skill_level' => 'Moderate to challenging',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 1400],
                        ['persons' => 2, 'price' => 1350],
                        ['persons' => 5, 'price' => 1300],
                        ['persons' => 10, 'price' => 1150],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Momella Gate to Miriakamba Hut', 'description' => 'After breakfast, depart for Momella Gate and begin the first walking day through Arusha National Park. Expect rainforest trails, wildlife sightings, and a gentle but steady climb to Miriakamba Hut for dinner and overnight.', 'accommodation' => 'Miriakamba Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 2, 'title' => 'Miriakamba Hut to Saddle Hut', 'description' => 'The route continues through the forest and ridge lines, with dramatic views of the Meru crater and the ash cone. After arriving at Saddle Hut, you have lunch, rest, and an acclimatisation walk before dinner.', 'accommodation' => 'Saddle Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Saddle Hut to Socialist Peak and back to Miriakamba Hut', 'description' => 'Wake around midnight for the summit push. The climb is steep and demanding, but the reward is a sunrise at Socialist Peak with breathtaking views over the crater and across to Kilimanjaro before descending to Miriakamba Hut.', 'accommodation' => 'Miriakamba Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Miriakamba Hut to Momella Gate', 'description' => 'The final descent follows the rainforest trail back to Momella Gate, where you sign out and transfer back to Moshi for celebration and rest.', 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => [
                        'Hotel in Moshi: bed & breakfast',
                        'Private transport to / from Kilimanjaro International Airport to your hotel in Moshi',
                        'Qualified guides with mountain crew',
                        'National Park fees',
                        '18% VAT on tour fees and services',
                        'All hut accommodations',
                        'Hut fees',
                        'Transport',
                        'Rescue fees',
                        'All needs on the mountain (breakfast, lunch and dinner)',
                        'Guides and porters accommodations and their entry fees on the mountain',
                        'Pulse oximeter',
                        'First aid kit',
                        'Emergency oxygen',
                        'Treated water through the trek',
                        'Fair wages to guides and porters as approved by Kilimanjaro National Park authority',
                    ],
                    'excludes' => [
                        'Flights',
                        'Visa',
                        'Tips to mountain crew',
                        'Private toilet ($120 per group)',
                        'Laundry services',
                    ],
                    'accommodations' => [
                        ['name' => 'Mountain Huts', 'description' => 'Stay in mountain huts instead of tents for a more sheltered and comfortable overnight experience while trekking through Arusha National Park.', 'image' => 'images/kilimanjaro images/Kilimanjaro.jpeg'],
                    ],
                    'gallery' => [
                        'images/kilimanjaro images/Kilimanjaro.jpeg',
                        'images/kilimanjaro images/denis-digital-77.jpg',
                        'images/kilimanjaro images/Mount-Kilimanjaro-Mauly-Tours.jpg',
                    ],
                ]);
            }

            if ($slug === 'mount-meru-3-day') {
                $route->update([
                    'overview' => "The 3 Days Mount Meru Climb is a scenic and adventurous trek through Arusha National Park, combining forest trails, wildlife encounters, dramatic crater landscapes, and a rewarding sunrise summit at Socialist Peak. It is ideal for trekkers seeking a shorter mountain adventure or a quick acclimatisation climb before Kilimanjaro.\n\nThis route is perfect for travelers with limited time, while still delivering a complete mountain trekking experience. With hut accommodation, fewer crowds, and incredible views of Kilimanjaro, Mount Meru offers a peaceful and adventurous experience in one of Tanzania most scenic parks.\n\nQuick facts: Duration 3 Days / 2 Nights; Starting point Momella Gate; Ending point Momella Gate; Difficulty Moderate to challenging; Summit Socialist Peak - 4,566m / 14,980ft; Best for trekkers wanting a shorter mountain adventure or Kilimanjaro acclimatisation trek; Scenery forest, wildlife zones, crater rim, alpine landscapes, and summit views; Accommodation mountain huts; Location Arusha National Park, Tanzania; Best time January-March and June-October; Route style short, scenic, and highly rewarding summit climb with strong wildlife appeal.",
                    'duration_days' => 3,
                    'duration_nights' => 2,
                    'theme' => 'Short but rewarding adventure',
                    'skill_level' => 'Moderate to challenging',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 1100],
                        ['persons' => 2, 'price' => 1050],
                        ['persons' => 5, 'price' => 1000],
                        ['persons' => 10, 'price' => 950],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Momella Gate to Miriakamba Hut', 'description' => 'After breakfast, transfer to Momella Gate and begin the first hiking section through the rainforest and wildlife-rich lower slopes of Arusha National Park. Overnight at Miriakamba Hut.', 'accommodation' => 'Miriakamba Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 2, 'title' => 'Miriakamba Hut to Saddle Hut', 'description' => 'Continue uphill through the forest and ridge trails to Saddle Hut, enjoying views of the Meru crater and Ash Cone before resting and preparing for the summit push.', 'accommodation' => 'Saddle Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Saddle Hut to Socialist Peak and down to Momella Gate', 'description' => 'Wake before midnight and climb to Socialist Peak for sunrise. After taking in panoramic views of the crater and Mount Kilimanjaro, descend back down to Miriakamba and then continue to Momella Gate for your finish.', 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => [
                        'Hotel in Moshi: bed & breakfast',
                        'Private transport to / from Kilimanjaro International Airport to your hotel in Moshi',
                        'Qualified guides with mountain crew',
                        'National Park fees',
                        '18% VAT on tour fees and services',
                        'All hut accommodations',
                        'Hut fees',
                        'Transport',
                        'Rescue fees',
                        'All needs on the mountain (breakfast, lunch and dinner)',
                        'Guides and porters accommodations and their entry fees on the mountain',
                        'Pulse oximeter',
                        'First aid kit',
                        'Emergency oxygen',
                        'Treated water through the trek',
                        'Fair wages to guides and porters as approved by Kilimanjaro National Park authority',
                    ],
                    'excludes' => [
                        'Flights',
                        'Visa',
                        'Tips to mountain crew',
                        'Private toilet ($120 per group)',
                        'Laundry services',
                    ],
                    'accommodations' => [
                        ['name' => 'Mountain Huts', 'description' => 'Enjoy a comfortable hut-based overnight experience with warm shelter and scenic surroundings in Arusha National Park.', 'image' => 'images/kilimanjaro images/Kilimanjaro-Lemosho-Route-8-days.jpeg'],
                    ],
                    'gallery' => [
                        'images/kilimanjaro images/Kilimanjaro-Lemosho-Route-8-days.jpeg',
                        'images/kilimanjaro images/kilimanjaro-routes-7-best-routes-to-climb-mount-kilimanjaro.jpg',
                        'images/kilimanjaro images/Mount-Kilimanjaro-Mauly-Tours.jpg',
                    ],
                ]);
            }

            if ($slug === 'umbwe') {
                $route->update([
                    'overview' => "The 6 Day Umbwe Route is a steep, direct, and highly adventurous Kilimanjaro climb designed for experienced trekkers who want a demanding route with fewer crowds and a stronger wilderness feel. Starting from Umbwe Gate, the trail climbs quickly through dense rainforest and steep ridges before joining the southern circuit toward the summit. This route offers dramatic scenery, a rapid elevation gain, and a very rewarding summit journey to Uhuru Peak.\n\nQuick facts: Duration 6 Days / 5 Nights; Starting point Umbwe Gate; Ending point Mweka Gate; Difficulty Very challenging; Distance Approx. 53 km / 33 miles; Best for experienced and very fit trekkers; Scenery dense rainforest, steep ridges, Barranco Valley, alpine desert, summit glaciers; Accommodation mountain camping; Summit Uhuru Peak - 5,895m / 19,341ft; Best time January-March and June-October; Route style steep, direct, less crowded route with a demanding ascent profile.",
                    'duration_days' => 6,
                    'duration_nights' => 5,
                    'theme' => 'Steep and adventurous',
                    'skill_level' => 'Very challenging',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 2100],
                        ['persons' => 2, 'price' => 2000],
                        ['persons' => 5, 'price' => 1950],
                        ['persons' => 10, 'price' => 1900],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Umbwe Gate to Umbwe Cave Camp', 'description' => 'Begin your climb from Umbwe Gate and head through dense rainforest on a steep, demanding trail toward Umbwe Cave Camp. The route is physically demanding from the start and sets the tone for the rest of the ascent.', 'accommodation' => 'Umbwe Cave Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 2, 'title' => 'Umbwe Cave Camp to Barranco Camp', 'description' => 'Continue climbing through moorland and ridge lines with increasingly dramatic views. By mid-afternoon you reach Barranco Camp, where the scenery opens up and the acclimatisation process begins.', 'accommodation' => 'Barranco Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Barranco Camp to Karanga Camp', 'description' => 'The group ascends the Barranco Wall and continues across rugged terrain to Karanga Camp. This day is steep but rewarding, with strong views of Kibo and the surrounding volcanic landscape.', 'accommodation' => 'Karanga Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Karanga Camp to Barafu Camp', 'description' => 'A short but demanding push carries you into the alpine desert and final camp before summit night. Rest well, hydrate, and prepare for the early mountain push ahead.', 'accommodation' => 'Barafu Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Summit day to Uhuru Peak and down to Millennium Camp', 'description' => 'Set off before midnight in one of the most demanding summit pushes on the mountain. Climb over scree and rock to Stella Point and finally Uhuru Peak, then descend to Millennium Camp for a well-earned rest.', 'accommodation' => 'Millennium Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Millennium Camp to Mweka Gate', 'description' => 'The final descent follows the forested trail back to Mweka Gate, where the trek ends and the group transfers back to Moshi for a celebratory finish.', 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => [
                        '2 nights hotel in Moshi: bed & breakfast',
                        'Private transport to / from Kilimanjaro International Airport to your hotel in Moshi',
                        'Qualified guides with mountain crew',
                        'National Park fees',
                        '18% VAT on tour fees and services',
                        'All camping accommodations',
                        'Mountain tents',
                        'Transport',
                        'Rescue fees',
                        'All needs on the mountain (breakfast, lunch and dinner)',
                        'Guides and porters accommodations and their entry fees on the mountain',
                        'Pulse oximeter',
                        'First aid kit',
                        'Emergency oxygen',
                        'Sleeping mats and sleeping bags',
                        'Treated water through the trek',
                        'Fair wages to guides and porters as approved by Kilimanjaro National Park authority',
                    ],
                    'excludes' => [
                        'Flights',
                        'Visa',
                        'Tips to mountain crew',
                        'Private toilet ($120 per group)',
                        'Laundry services',
                    ],
                    'accommodations' => [
                        ['name' => 'Mountain Camping', 'description' => 'Camp under the high-altitude sky in mountain tents while your support crew handles the equipment, meals, and route logistics.', 'image' => 'images/kilimanjaro images/machame-group.jpg'],
                    ],
                    'gallery' => [
                        'images/kilimanjaro images/machame-group.jpg',
                        'images/kilimanjaro images/Kilimanjaro.jpeg',
                        'images/kilimanjaro images/Mount-Kilimanjaro-Mauly-Tours.jpg',
                    ],
                ]);
            }

            if ($slug === '6-day-umbwe-route-climb') {
                $route->update([
                    'overview' => "The 6 Day Umbwe Route is a steep, fast-paced Kilimanjaro climb designed for adventurous trekkers seeking a more demanding route. It follows a direct trail through dense rainforest, narrow ridges, and dramatic high-altitude scenery before joining the southern circuit toward the summit. This route is best for fit climbers with previous trekking experience.\n\nThe route begins at Umbwe Gate and quickly gains altitude, making it one of the mountain's most direct and challenging climbs. It is ideal for experienced, fit trekkers wanting a quieter route, dramatic forest scenery, and a tough but rewarding summit journey to Uhuru Peak.\n\nQuick facts: Duration 6 Days / 5 Nights; Starting point Umbwe Gate; Ending point Mweka Gate; Difficulty Very challenging; Distance Approx. 53 km / 33 miles; Best for experienced and very fit trekkers; Scenery dense rainforest, steep ridges, Barranco Valley, alpine desert, summit glaciers; Accommodation mountain camping; Summit Uhuru Peak - 5,895m / 19,341ft; Best time January-March and June-October; Route style steep, direct, less crowded route with a demanding ascent profile.",
                    'duration_days' => 6,
                    'duration_nights' => 5,
                    'theme' => 'Steepest and most adventurous',
                    'skill_level' => 'Very challenging',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 2100],
                        ['persons' => 2, 'price' => 2000],
                        ['persons' => 5, 'price' => 1950],
                        ['persons' => 10, 'price' => 1900],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Umbwe Gate to Umbwe Cave Camp', 'description' => 'Your guide and support crew will meet you at the hotel before driving to Umbwe Gate. After registration, the trek begins through forested slopes and steep trails toward Umbwe Cave Camp, where your first night on the mountain begins.', 'accommodation' => 'Umbwe Cave Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 2, 'title' => 'Umbwe Cave Camp to Barranco Camp', 'description' => 'The rainforest gives way to moorland and a tougher ascent as the trail climbs toward Barranco Camp. This day is demanding but scenic, with beautiful views and a strong acclimatisation rhythm.', 'accommodation' => 'Barranco Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Barranco Camp to Karanga Camp', 'description' => 'After climbing the Barranco Wall, the route continues over rocky ridges and uneven ground toward Karanga Camp. This stage helps the body acclimatise and readies you for the final ascent section.', 'accommodation' => 'Karanga Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Karanga Camp to Barafu Camp', 'description' => 'The route continues through alpine desert terrain to Barafu Camp, where you rest and prepare for the summit push. A shorter day helps you recover and stay strong for the final challenge.', 'accommodation' => 'Barafu Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Barafu Camp to Uhuru Peak and down to Millennium Camp', 'description' => 'Wake around midnight for the summit attempt. The climb is steep and demanding, but the route eventually reaches Stella Point before moving on to Uhuru Peak. After taking in the sunrise, descend to Millennium Camp for recovery.', 'accommodation' => 'Millennium Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Millennium Camp to Mweka Gate', 'description' => 'The final descent follows the rainforested trail back to Mweka Gate, where you collect your certificates, sign out of the park, and return to Moshi for a celebration.', 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => [
                        '2 nights hotel in Moshi: bed & breakfast',
                        'Private transport to / from Kilimanjaro International Airport to your hotel in Moshi',
                        'Qualified guides with mountain crew',
                        'National Park fees',
                        '18% VAT on tour fees and services',
                        'All camping accommodations',
                        'Mountain tents',
                        'Transport',
                        'Rescue fees',
                        'All needs on the mountain (breakfast, lunch and dinner)',
                        'Guides and porters accommodation and their entry fees on the mountain',
                        'Pulse oximeter',
                        'First aid kit',
                        'Emergency oxygen',
                        'Sleeping mats and sleeping bags',
                        'Treated water through the trek',
                        'Fair wages to guides and porters as approved by Kilimanjaro National Park authority',
                    ],
                    'excludes' => [
                        'Flights',
                        'Visa',
                        'Tips to mountain crew',
                        'Private toilet ($120 per group)',
                        'Laundry services',
                    ],
                    'accommodations' => [
                        ['name' => 'Mountain Camping', 'description' => 'Spend your nights in quality mountain tents with a dedicated crew managing camp setup, meals, and route support.', 'image' => 'images/kilimanjaro images/machame-route-6-days-2.jpeg'],
                    ],
                    'gallery' => [
                        'images/kilimanjaro images/machame-route-6-days-2.jpeg',
                        'images/kilimanjaro images/Kilimanjaro.jpeg',
                        'images/kilimanjaro images/kilimanjaro-routes-7-best-routes-to-climb-mount-kilimanjaro.jpg',
                    ],
                ]);
            }

            if ($slug === 'machame') {
                $route->update([
                    'overview' => "A popular and scenic Kilimanjaro climb, the 7 Days Machame Route offers excellent acclimatisation, varied landscapes, and a rewarding summit approach. Known as the 'Whiskey Route', it is ideal for trekkers seeking a challenging but well-paced adventure to Uhuru Peak.\n\nThis 7-day itinerary gives better acclimatisation than the shorter 6-day Machame option, making the climb more manageable and improving the overall summit experience. It is ideal for adventurous hikers who want a classic Kilimanjaro route with strong scenery, good pacing, and a rewarding journey to Uhuru Peak.\n\nThe route follows a strong acclimatisation pattern, especially around Lava Tower and Barranco Camp, helping prepare you for summit night. With good pacing, proper preparation, and the 7-day schedule, the Machame Route offers a solid chance of reaching Uhuru Peak.\n\nQuick Facts: Duration 7 Days / 6 Nights; Starting Point Machame Gate; Ending Point Mweka Gate; Difficulty Challenging; Distance Approx. 62 km / 39 miles; Best For Adventurous trekkers with good fitness; Scenery Rainforest, moorland, Shira Plateau, Lava Tower, Barranco Wall, alpine desert, summit glaciers; Accommodation Mountain camping; Summit Uhuru Peak   5,895m / 19,341ft; Best Time January March and June October; Route Style Scenic 'climb high, sleep low' route with strong acclimatisation profile.",
                    'duration_days' => 7,
                    'duration_nights' => 6,
                    'theme' => 'Most popular and busiest route',
                    'skill_level' => 'Challenging',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 2250],
                        ['persons' => 2, 'price' => 2200],
                        ['persons' => 5, 'price' => 2150],
                        ['persons' => 10, 'price' => 2100],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Machame Gate (1800m) to Machame Camp (2835m)', 'description' => 'After breakfast you will be picked up at the hotel and transferred to Machame Gate. After park registration, you start your Mount Kilimanjaro climb through tropical rainforest to Machame Camp (2835m). On the route you will have a picnic lunch and overnight at Machame camp.', 'accommodation' => 'Machame camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 2, 'title' => 'Machame Camp (2835m) to Shira Cave Camp (3750m)', 'description' => 'You start hiking around 8:00 am and climb through the forest before continuing on a gentler gradient through the moorland zone. After a short lunch and break, you continue up a rocky ridge to the Shira Plateau, where you can enjoy eastern views and the stunning glacier area before overnighting at Shira Cave Camp.', 'accommodation' => 'Shira cave camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Shira Cave Camp (3750m) to Barranco Camp (3900m)', 'description' => 'To take advantage of acclimatisation, we hike to high altitude and then descend to a lower altitude. The trek climbs up to Lava Tower (4600m) before descending to Barranco Camp (3900m). This descent offers great photo opportunities of the Western Breach and Barranco Wall and the valley below the wall provides a memorable sunset.', 'accommodation' => 'Barranco camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Barranco Camp (3900m) to Karanga Camp (4000m)', 'description' => 'After breakfast we continue up a steep ridge to the Great Barranco Wall, then climb this imposing obstacle. Topping out just below the item 6 lacer, you can appreciate the beauty of Kilimanjaro as Kibo glaciers soar overhead. You then descend into the lush Karanga Valley and camp for the evening, with afternoon rest for acclimatisation.', 'accommodation' => 'Karanga camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Karanga Camp (4000m) to Barafu Camp (4640m)', 'description' => 'After breakfast you start hiking to Barafu Camp (4640m), with good views of the Kibo and Mawenzi peaks. After arriving at camp, you have lunch and a long rest before a long night and summit day. Dinner is early and then you try to get some sleep before the midnight climb.', 'accommodation' => 'Barafu camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Barafu Camp (4637m) to Uhuru Peak (5895m) then down to Millennium Camp (3950m)', 'description' => 'Wake very early around 00:00 for tea and cookies. You climb scree for 4 to 5 hours, gaining incredible height over a short distance. The view is spectacular. We should be on the crater rim at Stella Point (5756m) as the first rays of sun hit us. Then it takes about 1 hour from Stella Point to Uhuru Peak (5895m), where you take photos before descending to Barafu Camp for lunch and then to Millennium Camp for dinner and overnight.', 'accommodation' => 'Millennium camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 7, 'title' => 'Millennium Camp (3950m) to Mweka Gate (1630m)', 'description' => 'After breakfast you continue the final descent from Millennium Camp to Mweka Gate, where you collect your certificates and complete park formalities. A private car then takes you back to your hotel in Moshi where you can enjoy a warm shower and celebrate this achievement.', 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => [
                        '2 nights hotel in Moshi: bed & breakfast',
                        'Private transport to / from Kilimanjaro International Airport to your hotel in Moshi',
                        'Qualified guides with mountain crew',
                        'National Park fees',
                        '18% VAT on tour fees and services',
                        'All camping accommodations',
                        'Mountain tents',
                        'Transport',
                        'Rescue fees',
                        'All meals on the mountain',
                        'Guides and porters accommodation and entry fees',
                        'Pulse oximeter',
                        'First aid kit',
                        'Emergency oxygen',
                        'Sleeping mats and sleeping bags',
                        'Treated water through the trek',
                        'Fair wages to guides and porters as approved by Kilimanjaro National Park authority',
                    ],
                    'excludes' => [
                        'Flights',
                        'Visa',
                        'Tips to mountain crew',
                        'Private toilet ($120 per group)',
                        'Laundry services',
                    ],
                    'accommodations' => [
                        ['name' => 'Mountain Camping', 'description' => 'Enjoy a classic mountain camping experience throughout the route, surrounded by dramatic volcanic landscapes, hot meals, and a dedicated climbing crew.', 'image' => 'images/kilimanjaro images/machame-group.jpg'],
                    ],
                    'gallery' => [
                        'images/kilimanjaro images/machame-group.jpg',
                        'images/kilimanjaro images/Kilimanjaro.jpeg',
                        'images/kilimanjaro images/machame-route-6-days-2.jpeg',
                    ],
                ]);
            }

            if ($slug === '7-day-machame-route') {
                $route->update([
                    'overview' => "A popular and scenic Kilimanjaro climb, the 7 Days Machame Route offers excellent acclimatisation, varied landscapes, and a rewarding summit approach. Known as the 'Whiskey Route', it is ideal for trekkers seeking a challenging but well-paced adventure to Uhuru Peak.\n\nThis 7-day itinerary gives better acclimatisation than the shorter 6-day Machame option, making the climb more manageable and improving the overall summit experience. It is ideal for adventurous hikers who want a classic Kilimanjaro route with strong scenery, good pacing, and a rewarding journey to Uhuru Peak.\n\nThe route follows a strong acclimatisation pattern, especially around Lava Tower and Barranco Camp, helping prepare you for summit night. With good pacing, proper preparation, and the 7-day schedule, the Machame Route offers a solid chance of reaching Uhuru Peak.\n\nQuick Facts: Duration 7 Days / 6 Nights; Starting Point Machame Gate; Ending Point Mweka Gate; Difficulty Challenging; Distance Approx. 62 km / 39 miles; Best For Adventurous trekkers with good fitness; Scenery Rainforest, moorland, Shira Plateau, Lava Tower, Barranco Wall, alpine desert, summit glaciers; Accommodation Mountain camping; Summit Uhuru Peak   5,895m / 19,341ft; Best Time January March and June October; Route Style Scenic 'climb high, sleep low' route with strong acclimatisation profile.",
                    'duration_days' => 7,
                    'duration_nights' => 6,
                    'theme' => 'Most popular and busiest route',
                    'skill_level' => 'Challenging',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 2250],
                        ['persons' => 2, 'price' => 2200],
                        ['persons' => 5, 'price' => 2150],
                        ['persons' => 10, 'price' => 2100],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Machame Gate (1800m) to Machame Camp (2835m)', 'description' => 'After breakfast you will be picked up at the hotel and transferred to Machame Gate. After park registration, you start your Mount Kilimanjaro climb through tropical rainforest to Machame Camp (2835m). On the route you will have a picnic lunch and overnight at Machame camp.', 'accommodation' => 'Machame camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 2, 'title' => 'Machame Camp (2835m) to Shira Cave Camp (3750m)', 'description' => 'You start hiking around 8:00 am and climb through the forest before continuing on a gentler gradient through the moorland zone. After a short lunch and break, you continue up a rocky ridge to the Shira Plateau, where you can enjoy eastern views and the stunning glacier area before overnighting at Shira Cave Camp.', 'accommodation' => 'Shira cave camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Shira Cave Camp (3750m) to Barranco Camp (3900m)', 'description' => 'To take advantage of acclimatisation, we hike to high altitude and then descend to a lower altitude. The trek climbs up to Lava Tower (4600m) before descending to Barranco Camp (3900m). This descent offers great photo opportunities of the Western Breach and Barranco Wall and the valley below the wall provides a memorable sunset.', 'accommodation' => 'Barranco camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Barranco Camp (3900m) to Karanga Camp (4000m)', 'description' => 'After breakfast we continue up a steep ridge to the Great Barranco Wall, then climb this imposing obstacle. Topping out just below the item 6 lacer, you can appreciate the beauty of Kilimanjaro as Kibo glaciers soar overhead. You then descend into the lush Karanga Valley and camp for the evening, with afternoon rest for acclimatisation.', 'accommodation' => 'Karanga camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Karanga Camp (4000m) to Barafu Camp (4640m)', 'description' => 'After breakfast you start hiking to Barafu Camp (4640m), with good views of the Kibo and Mawenzi peaks. After arriving at camp, you have lunch and a long rest before a long night and summit day. Dinner is early and then you try to get some sleep before the midnight climb.', 'accommodation' => 'Barafu camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Barafu Camp (4637m) to Uhuru Peak (5895m) then down to Millennium Camp (3950m)', 'description' => 'Wake very early around 00:00 for tea and cookies. You climb scree for 4 to 5 hours, gaining incredible height over a short distance. The view is spectacular. We should be on the crater rim at Stella Point (5756m) as the first rays of sun hit us. Then it takes about 1 hour from Stella Point to Uhuru Peak (5895m), where you take photos before descending to Barafu Camp for lunch and then to Millennium Camp for dinner and overnight.', 'accommodation' => 'Millennium camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 7, 'title' => 'Millennium Camp (3950m) to Mweka Gate (1630m)', 'description' => 'After breakfast you continue the final descent from Millennium Camp to Mweka Gate, where you collect your certificates and complete park formalities. A private car then takes you back to your hotel in Moshi where you can enjoy a warm shower and celebrate this achievement.', 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => [
                        '2 nights hotel in Moshi: bed & breakfast',
                        'Private transport to / from Kilimanjaro International Airport to your hotel in Moshi',
                        'Qualified guides with mountain crew',
                        'National Park fees',
                        '18% VAT on tour fees and services',
                        'All camping accommodations',
                        'Mountain tents',
                        'Transport',
                        'Rescue fees',
                        'All meals on the mountain',
                        'Guides and porters accommodation and entry fees',
                        'Pulse oximeter',
                        'First aid kit',
                        'Emergency oxygen',
                        'Sleeping mats and sleeping bags',
                        'Treated water through the trek',
                        'Fair wages to guides and porters as approved by Kilimanjaro National Park authority',
                    ],
                    'excludes' => [
                        'Flights',
                        'Visa',
                        'Tips to mountain crew',
                        'Private toilet ($120 per group)',
                        'Laundry services',
                    ],
                    'accommodations' => [
                        ['name' => 'Mountain Camping', 'description' => 'Enjoy a classic mountain camping experience throughout the route, surrounded by dramatic volcanic landscapes, hot meals, and a dedicated climbing crew.', 'image' => 'images/kilimanjaro images/machame-group.jpg'],
                    ],
                    'gallery' => [
                        'images/kilimanjaro images/machame-group.jpg',
                        'images/kilimanjaro images/Kilimanjaro.jpeg',
                        'images/kilimanjaro images/machame-route-6-days-2.jpeg',
                    ],
                ]);
            }

            if ($slug === '6-day-machame-route') {
                $route->update([
                    'overview' => "The 6 Days Machame Route is one of the most scenic and popular trails on Mount Kilimanjaro, offering a challenging but rewarding ascent through diverse landscapes including rainforest, moorland, and alpine desert. Known as the 'Whiskey Route,' it provides excellent acclimatisation opportunities and a high summit success rate.\n\nThis route is a great choice for climbers who want a scenic, adventurous, and rewarding Kilimanjaro experience within a shorter timeframe. Known as the 'Whiskey Route,' Machame is one of the most popular routes on Mount Kilimanjaro because of its beautiful landscapes, varied terrain, and exciting trail experience.\n\nThe route takes you through lush rainforest, open moorland, the dramatic Lava Tower, the famous Barranco Wall, and the high alpine desert before the final summit push to Uhuru Peak. It is ideal for fit and determined climbers who want a classic Kilimanjaro route with strong adventure value.\n\nQuick Facts: Duration 6 Days / 5 Nights; Starting Point Machame Gate; Ending Point Mweka Gate; Difficulty Challenging; Distance Approx. 62 km / 38 miles; Best For Fit trekkers seeking a scenic and popular Kilimanjaro ascent; Scenery Rainforest, moorland, alpine desert, Barranco Valley, glaciers, and summit views; Accommodation Mountain camping; Summit Uhuru Peak   5,895m / 19,341ft; Best Time January March and June October; Route Style Scenic and varied southern circuit with good acclimatisation and high summit success rate.",
                    'duration_days' => 6,
                    'duration_nights' => 5,
                    'theme' => 'The Whiskey Route Challenge',
                    'skill_level' => 'Challenging',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 2100],
                        ['persons' => 2, 'price' => 2000],
                        ['persons' => 5, 'price' => 1950],
                        ['persons' => 10, 'price' => 1900],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Machame Gate (1800m) to Machame Camp (2835m)', 'description' => 'After breakfast you will be picked up at the hotel around 8:00 am and transferred to Machame Gate. On the way you will see coffee and banana plantations grown by Chagga people. After arriving at Machame Gate you will go through park formalities such as registration, then start your Mount Kilimanjaro climb through tropical rainforest to Machame Camp (2835m). On the route you will have a picnic lunch and overnight at Machame Camp.', 'accommodation' => 'Machame camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 2, 'title' => 'Machame Camp (2835m) to Shira Cave Camp (3750m)', 'description' => 'You start to hike around 8:00 am. You will climb for an hour to the top of the forest and then continue at a gentler gradient through the moorland zone. After a short lunch and break, you continue up a rocky ridge to the Shira Plateau. At this point you will be able to see the eastern direction and the western breach with its stunning glacier. Overnight at Shira Campsite (3750m).', 'accommodation' => 'Shira camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Shira Cave Camp (3750m) to Barranco Camp (3900m)', 'description' => 'To take advantage of acclimatisation, we hike to high altitude and then descend to a lower altitude. The trek takes us into the alpine desert up to Lava Tower (4600m) before descending to Barranco Camp (3900m). This descent offers great opportunities to take beautiful photos of the Western Breach and Barranco Wall. The campsite is situated in a valley below the Barranco Wall, providing a memorable sunset while waiting for dinner.', 'accommodation' => 'Barranco camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Barranco Camp (3900m) to Barafu Camp (4640m)', 'description' => 'Today our Kilimanjaro trek takes us from Barranco Camp, famous for its giant groundsels. We ascend the Great Barranco Wall, which divides us from the southern slopes of Kibo. Climbing the Barranco Wall is a climb over rocks. The route is not technical, but long and tiring, and it will take us to Karanga Camp where we have lunch and our last stop for water before the summit. Afterwards we continue through the alpine desert toward Barafu Camp (base camp, 4640m).', 'accommodation' => 'Barafu camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Barafu Camp (4637m) to Uhuru Peak (5895m) then down to Millennium Camp (3950m)', 'description' => 'We wake very early, around 00:00, for tea and cookies. We climb scree for 4 to 5 hours but gain incredible height over a short distance. The view is spectacular. We should be on the crater rim at Stella Point (5756m) as the first rays of sun hit us. Then it takes us 1 hour from Stella Point to Uhuru Peak (5895m), where you take photos for a few minutes before descending to Barafu Camp for lunch and then walking down to Millennium Camp (3950m) for dinner and overnight.', 'accommodation' => 'Millennium camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Millennium Camp (3950m) to Mweka Gate (1630m)', 'description' => 'After breakfast you continue the final descent from Millennium Campsite to Mweka Gate, where you collect your certificates. After completing park formalities and receiving the certificates, a private car takes you back to your hotel where you can have a warm shower and celebrate the achievement.', 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => [
                        '2 nights hotel in Moshi: bed & breakfast',
                        'Private transport to / from Kilimanjaro International Airport to your hotel in Moshi',
                        'Qualified guides with mountain crew',
                        'National Park fees',
                        '18% VAT on tour fees and services',
                        'All camping accommodations',
                        'Mountain tents',
                        'Transport',
                        'Rescue fees',
                        'All needs on the mountain (breakfast, lunch and dinner)',
                        'Guides and porters accommodation and their entry fees on the mountain',
                        'Pulse oximeter',
                        'First aid kit',
                        'Emergency oxygen',
                        'Sleeping mats and sleeping bags',
                        'Treated water through the trek',
                        'Fair wages to guides and porters as approved by Kilimanjaro National Park authority',
                    ],
                    'excludes' => [
                        'Flights',
                        'Visa',
                        'Tips to mountain crew',
                        'Private toilet ($120 per group)',
                        'Laundry services',
                    ],
                    'accommodations' => [
                        ['name' => 'Mountain Camping', 'description' => 'Enjoy a classic mountain camping experience throughout the route, surrounded by dramatic volcanic landscapes, hot meals, and a dedicated climbing crew.', 'image' => 'images/kilimanjaro images/kilimanjaro-routes-7-best-routes-to-climb-mount-kilimanjaro.jpg'],
                    ],
                    'gallery' => [
                        'images/kilimanjaro images/kilimanjaro-routes-7-best-routes-to-climb-mount-kilimanjaro.jpg',
                        'images/kilimanjaro images/Kilimanjaro.jpeg',
                        'images/kilimanjaro images/Mount-Kilimanjaro-Mauly-Tours.jpg',
                    ],
                ]);
            }

            if ($slug === '9-days-northern-circuit-route') {
                $route->update([
                    'overview' => "A longer and highly scenic Kilimanjaro climb, the 9 Days Northern Circuit Route offers excellent acclimatisation, quieter trails, panoramic mountain views, and a full wilderness-style journey around Kilimanjaro before the final summit push to Uhuru Peak.\n\nThis route follows Kilimanjaro quieter northern slopes, offering a more remote wilderness feel compared to the busier southern trails. Along the way, you will experience rainforest, the Shira Plateau, open alpine desert, peaceful valleys, wide mountain views, and a rewarding final ascent to Uhuru Peak.\n\nIt is ideal for climbers who want a premium, less crowded Kilimanjaro adventure with strong acclimatisation and some of the most panoramic views on the mountain.\n\nQuick Facts: Duration 9 Days / 8 Nights; Starting Point Londorossi Gate; Ending Point Mweka Gate; Difficulty Moderate to Challenging; Distance Approx. 90 km / 56 miles; Best For Trekkers who want excellent acclimatisation, quieter trails, and a longer scenic climb; Scenery Rainforest, Shira Plateau, northern slopes, alpine desert, remote valleys, summit glaciers; Accommodation Mountain camping; Summit Uhuru Peak   5,895m / 19,341ft; Best Time January March and June October; Route Style Long, scenic, low-traffic route with one of the best acclimatisation profiles on Kilimanjaro.",
                    'duration_days' => 9,
                    'duration_nights' => 8,
                    'theme' => 'Longest Route',
                    'skill_level' => 'Moderate to Challenging',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 2750],
                        ['persons' => 2, 'price' => 2650],
                        ['persons' => 5, 'price' => 2600],
                        ['persons' => 10, 'price' => 2550],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Lemosho Gate (2100m) to Mti Mkubwa Camp (2650m)', 'description' => 'The Northern Circuit Route begins at Londorossi Gate (2100m), the same start point as the Lemosho Route. Registration is completed at the gate and then you are driven further up the mountain to the trailhead. You may spot wildlife such as elephants, giraffes and buffaloes as you trek towards your first camp. Dinner and overnight at Mti Mkubwa Camp (2650m).', 'accommodation' => 'Mti Mkubwa camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 2, 'title' => 'Mti Mkubwa Camp (2650m) to Shira I Camp (3600m)', 'description' => 'Today you spend the first hour trekking through the last section of the rainforest before entering the low alpine moorland zone that follows up onto the Shira Plateau. The trek is relatively short and gradual, ending at Shira Camp I (3600m).', 'accommodation' => 'Shira I camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Shira I Camp (3600m) to Shira II Camp (3900m)', 'description' => 'On day three the trek crosses the Shira Plateau from Shira Camp I to Shira Camp II. We continue east up to the Shira Plateau ridge for lunch, dinner and overnight.', 'accommodation' => 'Shira II camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Shira II Camp (3900m) to Moir Hut Camp (4200m)', 'description' => 'This is a short day with excellent acclimatisation as we trek close to Lava Tower and then descend to Moir Hut Camp for lunch and overnight.', 'accommodation' => 'Moir Hut camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Moir Camp (4200m) to Pofu Camp (4000m)', 'description' => 'The route follows a series of inclines and declines, skirting around the northern slopes of Kibo to Pofu (Buffalo) Camp (4000m). The trek gives great vistas out across the plains north of Kilimanjaro and you arrive at Pofu Camp after midday for lunch, dinner and overnight.', 'accommodation' => 'Pofu camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Pofu Camp (4000m) to Rongai Third Cave Camp (3800m)', 'description' => 'Day six starts with a climb up the Buffalo ridge and then continues east along the northern slopes to the Rongai Third Cave at 3800m. The trek is shorter than the day before and by now you should feel well acclimatised to the altitude.', 'accommodation' => 'Rongai Third Cave camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 7, 'title' => 'Rongai Third Cave Camp (3800m) to School Hut (4800m)', 'description' => 'This day involves a steady incline up and over the Saddle between the peaks of Kibo and Mawenzi. Trekkers continue walking southwest up to School Hut (4800m). After arriving, you have an early dinner and then try to sleep before the summit attempt.', 'accommodation' => 'School Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 8, 'title' => 'School Hut (4800m) to Uhuru Peak (5895m) then down to Millennium Camp (3950m)', 'description' => 'You are awoken before midnight and have breakfast before starting the summit around 6am. The climb steepens as you approach Gilman Point (5681m); from there you continue to Uhuru Peak (5895m), then descend around the crater rim to Stella Point and down to Millennium Camp for your final night on the mountain.', 'accommodation' => 'Millennium camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 9, 'title' => 'Millennium Camp (3900m) to Mweka Gate (1630m)', 'description' => 'The final day is a short hike through the dense montane rainforest from Millennium Camp to Mweka Gate. At the gate you sign out, collect your certificate and then transfer back to your hotel in Moshi.', 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => [
                        '2 nights hotel in Moshi: bed & breakfast',
                        'Private transport to / from Kilimanjaro International Airport to your hotel in Moshi',
                        'Qualified guides with mountain crew',
                        'National Park fees',
                        '18% VAT on tour fees and services',
                        'All camping accommodations',
                        'Mountain tents',
                        'Transport',
                        'Rescue fees',
                        'All meals on the mountain',
                        'Guides and porters accommodation and their entry fees on the mountain',
                        'Pulse oximeter',
                        'First aid kit',
                        'Emergency oxygen',
                        'Sleeping mats and sleeping bags',
                        'Treated water through the trek',
                        'Fair wages to guides and porters as approved by Kilimanjaro National Park authority',
                    ],
                    'excludes' => [
                        'Flights',
                        'Visa',
                        'Tips to mountain crew',
                        'Private toilet ($120 per group)',
                        'Laundry services',
                    ],
                    'accommodations' => [
                        ['name' => 'Mountain Camping', 'description' => 'Enjoy a classic mountain camping experience throughout the route, surrounded by dramatic volcanic landscapes, hot meals, and a dedicated climbing crew.', 'image' => 'images/kilimanjaro images/kilimanjaro-routes-7-best-routes-to-climb-mount-kilimanjaro.jpg'],
                    ],
                    'gallery' => [
                        'images/kilimanjaro images/kilimanjaro-routes-7-best-routes-to-climb-mount-kilimanjaro.jpg',
                        'images/kilimanjaro images/Kilimanjaro.jpeg',
                        'images/kilimanjaro images/denis-digital-77.jpg',
                    ],
                ]);
            }

            if ($slug === '8-days-northern-circuit-route') {
                $route->update([
                    'overview' => "A scenic and quieter Kilimanjaro climb, the 8 Days Northern Circuit Route offers excellent panoramic views, remote northern-slope trails, and strong acclimatisation. It is ideal for trekkers who want a less crowded, wilderness-style route with a rewarding summit journey to Uhuru Peak.\n\nThis route follows the remote northern side of the mountain, offering wide panoramic views, peaceful trails, and a strong sense of wilderness. With 8 days on the mountain, the itinerary provides good acclimatisation and a more balanced climbing pace than shorter routes. It is ideal for adventurous trekkers who want beautiful landscapes, fewer crowds, and a rewarding summit journey to Uhuru Peak.\n\nQuick Facts: Duration 8 Days / 7 Nights; Starting Point Londorossi Gate; Ending Point Mweka Gate; Difficulty Moderate to Challenging; Distance Approx. 90 km / 56 miles; Best For Trekkers who want quieter trails, panoramic views, and strong acclimatisation; Scenery Rainforest, Shira Plateau, northern slopes, alpine desert, remote valleys, summit glaciers; Accommodation Mountain camping; Summit Uhuru Peak   5,895m / 19,341ft; Best Time January March and June October; Route Style Scenic northern circuit route with fewer crowds and a wilderness trekking feel.",
                    'duration_days' => 8,
                    'duration_nights' => 7,
                    'theme' => 'Best alternate route to Lemosho',
                    'skill_level' => 'Moderate to Challenging',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 2600],
                        ['persons' => 2, 'price' => 2550],
                        ['persons' => 5, 'price' => 2400],
                        ['persons' => 10, 'price' => 2350],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Lemosho Gate (2100m) to Mti Mkubwa Camp (2650m)', 'description' => 'The Northern Circuit Route begins at Londorossi Gate (2100m), the same start point as the Lemosho Route. Registration is completed at the gate and then you are driven further up the mountain to the trailhead starting point. You may get lucky and spot large wildlife like elephants, giraffes and buffaloes that sometimes emerge from the rainforest onto the path as you trek towards your first camp. Dinner and overnight at Mti Mkubwa Camp (2650m).', 'accommodation' => 'Mti Mkubwa camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 2, 'title' => 'Mti Mkubwa Camp (2650m) to Shira I Camp (3600m)', 'description' => 'Today you will spend the first hour trekking through the last section of the rainforest path before entering the low alpine moorland zone which follows up onto the Shira Plateau. The trek is relatively short and gradual, ending at Shira Camp I (3600m).', 'accommodation' => 'Shira I camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Shira 1 Camp (3900m) to Moir Hut Camp (4200m)', 'description' => 'On day three the trek crosses the Shira Plateau and heads directly to Moir Hut camp. Today is a short day with strong acclimatisation as we trek close to the plateau and descend to Moir Hut camp for lunch and overnight.', 'accommodation' => 'Moir Hut camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Moir Camp (4200m) to Pofu Camp (4000m)', 'description' => 'Today it is a moderately steep climb out of Moir Valley. Trekkers can take a small detour to climb Little Lent Hill at 4375m before returning to the Grand Traverse trail. From here the route follows a series of inclines and declines, skirting around the northern slopes of Kibo to Pofu (Buffalo) Camp (4000m).', 'accommodation' => 'Pofu camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Pofu Camp (4000m) to Rongai Third Cave Camp (3800m)', 'description' => 'Day five starts with a climb up the Buffalo ridge and then continues east along the northern slopes to the Rongai Third Cave at 3800m. The trek is shorter than the day before and by now you should be feeling well acclimatised to the altitude.', 'accommodation' => 'Rongai Third Cave camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Rongai Third Cave Camp (3800m) to School Hut (4800m)', 'description' => 'This day involves a steady incline up and over the Saddle between the peaks of Kibo and Mawenzi. Trekkers continue walking southwest up to School Hut (4800m). After arriving, you are served an early dinner and then you should sleep before the summit attempt.', 'accommodation' => 'School Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 7, 'title' => 'School Hut (4800m) to Uhuru Peak (5895m) and then down to Millennium Camp (3950m)', 'description' => 'You are awoken at 5am and have a full breakfast before starting the summit around 6am. The climb steepens as you approach Gilman Point (5681m). From here you gather all your energy and determination to reach Uhuru Peak (5895m). After summiting, you descend around the crater rim to Stella Point and then down to Millennium Camp for the final night on the mountain.', 'accommodation' => 'Millennium camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 8, 'title' => 'Millennium Camp (3900m) to Mweka Gate (1630m)', 'description' => 'The final day is a short hike through the dense montane rainforest from Millennium Camp to Mweka Gate. At the gate you sign out, collect your official certificate, and are transferred back to Moshi.', 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => [
                        '2 nights hotel in Moshi: bed & breakfast',
                        'Private transport to / from Kilimanjaro International Airport to your hotel in Moshi',
                        'Qualified guides with mountain crew',
                        'National Park fees',
                        '18% VAT on tour fees and services',
                        'All camping accommodations',
                        'Mountain tents',
                        'Transport',
                        'Rescue fees',
                        'All needs on the mountain (breakfast, lunch and dinner)',
                        'Guides and porters accommodation and their entry fees on the mountain',
                        'Pulse oximeter',
                        'First aid kit',
                        'Emergency oxygen',
                        'Sleeping mats and sleeping bags',
                        'Treated water through the trek',
                        'Fair wages to guides and porters as approved by Kilimanjaro National Park authority',
                    ],
                    'excludes' => [
                        'Flights',
                        'Visa',
                        'Tips to mountain crew',
                        'Private toilet ($120 per group)',
                        'Laundry services',
                    ],
                    'accommodations' => [
                        ['name' => 'Mountain Camping', 'description' => 'Enjoy a classic mountain camping experience throughout the route, surrounded by dramatic volcanic landscapes, hot meals, and a dedicated climbing crew.', 'image' => 'https://images.unsplash.com/photo-1547721064-da6cfb341d50?auto=format&fit=crop&w=1200&q=80'],
                    ],
                    'gallery' => [
                        'https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?auto=format&fit=crop&w=1200&q=80',
                        'https://images.unsplash.com/photo-1489392191049-fc10c97e64b6?auto=format&fit=crop&w=1200&q=80',
                        'https://images.unsplash.com/photo-1523805009345-7448845a9e53?auto=format&fit=crop&w=1200&q=80',
                    ],
                ]);
            }


            if ($slug === '6-day-lemosho-route-climb') {
                $route->update([
                    'overview' => "The 6 Days Lemosho Route is a scenic and adventurous Kilimanjaro trek starting from the western side of the mountain. It offers beautiful rainforest trails, wide views across the Shira Plateau, and a rewarding summit push to Uhuru Peak. This shorter Lemosho itinerary is best suited for fit trekkers who want a less crowded and visually impressive route with a faster climbing pace.\n\nQuick facts: 6 days / 5 nights, Londorossi Gate to Mweka Gate, challenging, approximately 70 km, best for strong trekkers with good fitness, mountain camping, and a summit at Uhuru Peak (5,895m / 19,341ft).\n\nWhy choose this route: The quieter western side, less crowded trail experience, stunning Shira Plateau views, varied landscapes, and rewarding summit journey make it a great choice for fit climbers who want a scenic and efficient Kilimanjaro climb.",
                    'duration_days' => 6,
                    'duration_nights' => 5,
                    'theme' => 'Fast-paced Lemosho climb',
                    'skill_level' => 'Challenging',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 2150],
                        ['persons' => 2, 'price' => 2050],
                        ['persons' => 5, 'price' => 2000],
                        ['persons' => 10, 'price' => 1950],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Lemosho Gate to Mti Mkubwa Camp', 'description' => "Drive from Moshi to Londorossi Gate for registration and park formalities. Begin trekking through the lush rainforest of Kilimanjaro's western slopes to Mti Mkubwa Camp.", 'accommodation' => 'Rainforest camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 2, 'title' => 'Mti Mkubwa Camp to Shira II Camp', 'description' => 'Leave the forest zone behind, climb along Shira Ridge, and cross the vast Shira Plateau with views of Kibo.', 'accommodation' => 'Shira II camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Shira II Camp to Barranco Camp', 'description' => 'An important acclimatisation day as you climb high to Lava Tower before descending into Barranco Valley beneath the Great Barranco Wall.', 'accommodation' => 'Barranco camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Barranco Camp to Barafu Camp', 'description' => 'Scramble up the steep Barranco Wall for views across the mountain, then continue toward Karanga Camp for lunch before trekking to Barafu Camp for the summit prep.', 'accommodation' => 'Barafu camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Barafu Camp to Uhuru Peak, then down to Mweka Camp', 'description' => 'Begin the summit push around midnight over scree to Stella Point for sunrise, then continue to Uhuru Peak (5,895 m). Descend back to Barafu Camp for lunch and rest, then continue down to Mweka Camp.', 'accommodation' => 'Mweka camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Mweka Camp to Mweka Gate', 'description' => 'Descend through the Mweka rainforest to the park gate, complete formalities, receive summit certificates, and transfer back to hotel in Moshi.', 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => [
                        '2 nights hotel accommodation in Moshi (bed & breakfast)',
                        'Private airport transfers',
                        'Qualified mountain guides and mountain crew',
                        'National Park entry and rescue fees',
                        '18% VAT on tour fees and services',
                        'All camping accommodations and mountain tents',
                        'Sleeping mats and sleeping bags',
                        'All meals on the mountain',
                        'Treated water',
                        'Pulse oximeter, first aid kit, and emergency oxygen',
                        'Fair wages for guides and porters approved by Kilimanjaro National Park Authority',
                    ],
                    'excludes' => [
                        'Flights and visa fees',
                        'Tips for the mountain crew',
                        'Private toilet tent ($120 per group)',
                        'Laundry services',
                    ],
                    'accommodations' => [
                        ['name' => 'Mountain Camping', 'description' => 'All nights are spent in mountain tents with full camp setup, cooked meals, and a dedicated support crew across the route.', 'image' => 'images/kilimanjaro images/Kilimanjaro-Lemosho-Route-8-days.jpeg'],
                    ],
                    'gallery' => [
                        'images/kilimanjaro images/Kilimanjaro-Lemosho-Route-8-days.jpeg',
                        'images/kilimanjaro images/kilimanjaro-routes-7-best-routes-to-climb-mount-kilimanjaro.jpg',
                        'images/kilimanjaro images/Mount-Kilimanjaro-Mauly-Tours.jpg',
                    ],
                ]);
            }
        }
    }

    private function zanzibarPackages(): void
    {
        $data = [
            ['stone-town-getaway', 'Stone Town Getaway', 'Wander UNESCO-listed alleys of coral stone, spice markets and ornate wooden doors  history at every turn.', ['UNESCO', 'History'], 890, 3, 'https://images.unsplash.com/photo-1589197331516-4d84b72ebde3?auto=format&fit=crop&w=1600&q=80'],
            ['nungwi-beach-escape', 'Nungwi Beach Escape', 'Powdery white sand, warm shallow water and Zanzibar\'s best sunsets  the northern tip is home to the finest beach hotels.', ['Beach', 'Boutique'], 1240, 5, 'https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=1600&q=80'],
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
            ['ngorongoro-day-trip', 'Ngorongoro Crater Day Trip', "Descend into the world's largest intact caldera for a full-day game drive  Big 5 possible in a single day.", ['Big 5', 'Guided'], 420, 'Full day', 'https://images.unsplash.com/photo-1549366021-9f761d040a94?auto=format&fit=crop&w=1600&q=80'],
            ['lake-manyara-day-trip', 'Lake Manyara Day Trip', 'Tree-climbing lions, hippo pools, flocks of pink flamingos and a groundwater forest.', ['Tree lions', 'Birds'], 280, 'Full day', 'https://images.unsplash.com/photo-1523805009345-7448845a9e53?auto=format&fit=crop&w=1600&q=80'],
            ['tarangire-day-trip', 'Tarangire Day Trip', "Elephants under the baobabs  one of Africa's most photogenic elephant destinations.", ['Elephants', 'Baobabs'], 260, 'Full day', 'https://images.unsplash.com/photo-1547721064-da6cfb341d50?auto=format&fit=crop&w=1600&q=80'],
            ['materuni-waterfalls-coffee', 'Materuni Waterfalls & Coffee Tour', 'Hike through banana plantations to a hidden waterfall, then roast your own coffee with a Chagga family.', ['Coffee', 'Waterfall'], 90, 'Half day', 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1600&q=80'],
            ['maasai-village-cultural', 'Maasai Village Cultural Day', 'Learn ceremonial dance, jump with the warriors, share a meal  an unstaged cultural exchange.', ['Culture', 'Community'], 140, 'Full day', 'https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=1600&q=80'],
            ['arusha-national-park', 'Arusha National Park', "Overlooked gem right on Arusha's doorstep  giraffe, buffalo, colobus monkeys and canoe safaris.", ['Canoe safari', 'Giraffe'], 180, 'Half day', 'https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?auto=format&fit=crop&w=1600&q=80'],
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
            ['safari-zanzibar-combo', 'Safari & Zanzibar Combo', 'Five days on safari  Serengeti, Ngorongoro, Tarangire  then a flight straight to a Nungwi beach villa.', 4780, '10 Days', 10, 9, 'https://images.unsplash.com/photo-1534177616072-ef7dc120449d?auto=format&fit=crop&w=1600&q=80'],
            ['luxury-fly-in-safari', 'Luxury Fly-In Safari', 'Private aircraft between the Serengeti, Ruaha and Nyerere  tented luxury under a canopy of stars.', 8450, '12 Days', 12, 11, 'https://images.unsplash.com/photo-1547721064-da6cfb341d50?auto=format&fit=crop&w=1600&q=80'],
            ['family-adventure-safari', 'Family Adventure Safari', 'Slower pace, kid-friendly lodges, junior ranger badges and Maasai visits designed for families.', 2340, '8 Days', 8, 7, 'https://images.unsplash.com/photo-1568393691622-c7ba131d63b4?auto=format&fit=crop&w=1600&q=80'],
            ['honeymoon-journey', 'Honeymoon Journey', 'Private plunge-pool suites, champagne dinners under the stars, and a barefoot beach finale on Mnemba.', 6890, '11 Days', 11, 10, 'https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=1600&q=80'],
            ['pro-photography-expedition', 'Pro Photography Expedition', 'Private vehicles, beanbags, off-road permits, golden-hour drives  led by a wildlife photographer.', 7890, '14 Days', 14, 13, 'https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=1600&q=80'],
            ['kili-safari-zanzibar', 'Kilimanjaro + Safari + Zanzibar', 'The full Tanzania experience  summit Uhuru, then safari, then unwind on the beach.', 5890, '15 Days', 15, 14, 'https://images.unsplash.com/photo-1589182373726-e4f658ab50f0?auto=format&fit=crop&w=1600&q=80'],
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
            ['kenya-maasai-mara', 'Kenya', 'Kenya  Maasai Mara', 'The northern extension of the Serengeti  Mara River crossings, big cat drama and open plains.', 3290, '7 Days', 7, 'https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=1600&q=80'],
            ['rwanda-gorilla-trekking', 'Rwanda', 'Rwanda  Gorilla Trekking', 'Come face-to-face with mountain gorillas in Volcanoes National Park  a once-in-a-lifetime encounter.', 4180, '4 Days', 4, 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1600&q=80'],
            ['uganda-bwindi-nile', 'Uganda', 'Uganda  Bwindi & the Nile', "Half of the world's remaining mountain gorillas live here. Combine with chimp trekking in Kibale and the source of the Nile.", 3890, '8 Days', 8, 'https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?auto=format&fit=crop&w=1600&q=80'],
            ['amboseli-tsavo', 'Kenya', 'Amboseli & Tsavo', 'Elephants against the backdrop of Kilimanjaro  Amboseli is the classic African postcard.', 2180, '6 Days', 6, 'https://images.unsplash.com/photo-1547721064-da6cfb341d50?auto=format&fit=crop&w=1600&q=80'],
            ['queen-elizabeth-np', 'Uganda', 'Queen Elizabeth NP', 'Tree-climbing lions in the Ishasha sector, boat cruises on the Kazinga Channel, and volcanic craters.', 1890, '5 Days', 5, 'https://images.unsplash.com/photo-1523805009345-7448845a9e53?auto=format&fit=crop&w=1600&q=80'],
            ['three-country-combo', 'Multi-country', '3-Country Combo', 'Tanzania safari + Rwanda gorillas + Zanzibar beach  the ultimate East African journey.', 8290, '12 Days', 12, 'https://images.unsplash.com/photo-1568393691622-c7ba131d63b4?auto=format&fit=crop&w=1600&q=80'],
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

