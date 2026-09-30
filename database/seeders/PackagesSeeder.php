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
            ['2-days-safari-adventure', '2 Days Tarangire & Ngorongoro Safari', 'A short, unforgettable private safari through Tarangire National Park and the Ngorongoro Crater - elephant herds, ancient baobabs and the wildlife-packed crater floor in just two days.', ['Tarangire', 'Ngorongoro Crater', 'Private safari'], 900, '2 Days', 'images/safaris/0dm0ar81eyposgb2jehzwuyus6cx82zr.webp'],
            ['3-days-safari-adventure', '3 Days Serengeti & Ngorongoro Safari', 'Discover the legendary Serengeti plains and the spectacular Ngorongoro Crater on an unforgettable 3 day private wildlife journey.', ['Serengeti', 'Seronera Valley', 'Ngorongoro Crater'], 990, '3 Days', 'images/safaris/elephant.jpg'],
            ['4-days-wildlife-safari', '4 Days Tarangire, Serengeti & Ngorongoro Safari', 'Four days of wildlife, adventure and iconic landscapes - Tarangire elephants and baobabs, the Serengeti plains and the Ngorongoro Crater.', ['Tarangire', 'Serengeti', 'Ngorongoro Crater'], 1200, '4 Days', 'images/safaris/serengeti-migration.jpg'],
            ['5-days-safari-expedition', '5 Days Tarangire, Serengeti & Ngorongoro Safari', 'An immersive journey through Tanzania\'s wildlife heartland - Tarangire, two nights in the Serengeti, a Maasai cultural visit and the Ngorongoro Crater.', ['2 nights Serengeti', 'Maasai culture', 'Ngorongoro Crater'], 1600, '5 Days', 'images/safaris/zebra-with-baby-dust-against-setting-sun-kenya-tanzania-national-park-serengeti-maasai-mara-1780114075090-760945481.jpg'],
            ['6-days-safari-discovery', '6 Days Safari Discovery', 'A 6 Day safari with two nights in Central Serengeti and two nights in North Serengeti, home of the Mara River migration crossings, plus Tarangire and the Ngorongoro Crater.', ['2 nights North Serengeti', 'Mara River', 'Ngorongoro Crater'], 1850, '6 Days', 'images/safaris/wildbeet.jpg'],
            ['7-days-safari-journey', '7 Days Safari Journey', 'A 7 Day safari with two nights in Central Serengeti, three nights in North Serengeti and a night on the Ngorongoro Crater rim, starting in Tarangire.', ['3 nights North Serengeti', 'Crater rim night', 'Migration'], 2200, '7 Days', 'images/safaris/elephant.jpg'],
            ['8-days-safari-expedition', '8 Days Safari Expedition', 'An 8 Day safari through Tarangire, Central and North Serengeti, the Ngorongoro Crater and Lake Manyara, with time to explore each.', ['Five destinations', 'North Serengeti', 'Lake Manyara'], 2550, '8 Days', 'images/safaris/IMG-4419-1780110169806-65108106.jpg'],
        ];

        foreach ($data as $i => [$slug, $name, $desc, $features, $price, $badge, $img]) {
            $safari = Safari::updateOrCreate(['slug' => $slug], [
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

            if ($slug === '2-days-safari-adventure') {
                $safari->update([
                    'overview' => "A Short, Unforgettable Tanzania Wildlife Adventure\n\nExperience the magic of Tanzania with Novella Tanzania Safaris and Trekking on a memorable 2-day safari through Tarangire National Park and the Ngorongoro Crater.\n\nDesigned for travelers with limited time, this private safari combines spectacular landscapes, incredible wildlife, and exciting game drives into one unforgettable adventure. From the impressive elephant herds and ancient baobab trees of Tarangire to the breathtaking scenery and abundant wildlife of the Ngorongoro Crater, every day offers something special.\n\nWhether you are visiting Tanzania before or after a Kilimanjaro adventure, planning a Zanzibar holiday, or simply looking for a short wildlife escape, this safari is an excellent way to experience the highlights of northern Tanzania.\n\nSafari at a Glance\nDuration: 2 Days / 1 Night\nDestinations: Tarangire National Park & Ngorongoro Crater\nSafari Type: Private Safari\nTransport: 4x4 safari vehicle with pop-up roof\nAccommodation: Camping, mid-range, or luxury lodge options\nIdeal For: Couples, families, friends, solo travelers, and travelers with limited time\n\nSafari Highlights\n• Discover the wildlife-rich landscapes of Tarangire National Park\n• See large herds of elephants in their natural habitat\n• Admire Tarangire's iconic baobab trees and beautiful scenery\n• Explore the spectacular Ngorongoro Crater\n• Look out for lions, elephants, buffaloes, zebras, giraffes, hyenas, hippos, and flamingos\n• Have the opportunity to spot the endangered black rhinoceros\n• Enjoy private game drives with an experienced safari guide\n• Experience two of Tanzania's most famous wildlife destinations in just two days\n\nWhy Travel with Novella Tanzania Safaris and Trekking?\nAt Novella Tanzania Safaris and Trekking, we believe that a safari should be more than simply seeing wildlife. It should be an experience that allows you to connect with Tanzania's nature, landscapes, people, and culture.\n\nOur 2-day safari is carefully arranged to make the most of your limited time while providing a comfortable and enjoyable travel experience. With a private safari vehicle, knowledgeable guide, flexible arrangements, and a choice of accommodation, we can tailor the experience to suit your travel style and budget.\n\nWhether you are starting your Tanzanian adventure in Moshi or Arusha, or combining your safari with a Kilimanjaro climb or Zanzibar beach holiday, our team is ready to help you create an unforgettable journey.",
                    'duration_days' => 2,
                    'duration_nights' => 1,
                    'theme' => 'Short Safari Adventure',
                    'skill_level' => 'Easy',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 1200],
                        ['persons' => 4, 'price' => 900],
                        ['persons' => 9, 'price' => 650],
                        ['persons' => 10, 'price' => 500],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Moshi/Arusha - Tarangire National Park', 'description' => "Main Destination: Tarangire National Park\nDriving Time: Approximately 3-4 hours, depending on your departure location\nGame Drive: Approximately 7-8 hours\n\nYour adventure begins with an early morning pickup from your hotel in Moshi or Arusha. From there, you will travel toward Tarangire National Park, enjoying views of the Tanzanian countryside along the way.\n\nTarangire is famous for its large elephant population, spectacular baobab trees, and diverse wildlife. During your game drive, keep your eyes open for elephants, giraffes, zebras, buffaloes, antelopes, lions, and a variety of bird species.\n\nAfter enjoying lunch, you will continue exploring the park and its beautiful landscapes. As the afternoon comes to an end, you will exit the park and continue to your accommodation for dinner and an overnight stay.", 'accommodation' => 'Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 2, 'title' => 'Ngorongoro Crater - Moshi/Arusha', 'description' => "Main Destination: Ngorongoro Crater\nDriving Time: Approximately 1-2 hours from your accommodation area\nGame Drive: Approximately 6-7 hours\n\nAfter an early breakfast, you will depart for the Ngorongoro Conservation Area and descend into the spectacular Ngorongoro Crater.\n\nOften described as one of Tanzania's most remarkable wildlife areas, the crater offers an extraordinary combination of scenery and wildlife. During your game drive, you may encounter lions, elephants, buffaloes, zebras, wildebeest, hyenas, hippos, and flamingos. With some luck, you may also spot the endangered black rhinoceros.\n\nAfter your game drive and lunch, you will begin your journey back to Moshi or Arusha. Depending on your travel plans, we can also arrange a transfer to the airport for your onward journey.\n\nYour 2-day safari ends with wonderful memories of Tanzania's wildlife, landscapes, and the unforgettable experience of exploring Tarangire and Ngorongoro with Novella Tanzania Safaris and Trekking.", 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => [
                        'Transport 4x4 safari land cruiser',
                        'Transfer to and from the airport',
                        'Professional guide/driver',
                        'All parks and entrance fees',
                        'Lodges/Hotel/Camping accommodation',
                        'Camping equipments and accommodation',
                        'Fruits',
                        'Bottled water in safari vehicle',
                        '24 hours support',
                        'Current government taxes and levies',
                        'Salaries',
                    ],
                    'excludes' => [
                        'Entry visa to Tanzania',
                        'Laundry services',
                        'Tips to safari guides',
                    ],
                    'accommodations' => [
                        ['name' => 'Safari Lodges & Tented Camps', 'description' => 'Comfortable lodge or tented camp accommodation with full board meals throughout the safari.', 'image' => 'images/safaris/IMG-4419-1780110169806-65108106.jpg'],
                    ],
                    'gallery' => [
                        'images/safaris/0dm0ar81eyposgb2jehzwuyus6cx82zr.webp',
                        'images/safaris/elephant.jpg',
                        'images/safaris/wildbeet.jpg',
                    ],
                ]);
            }

            if ($slug === '3-days-safari-adventure') {
                $safari->update([
                    'overview' => "Discover the Serengeti and Ngorongoro on an Unforgettable Wildlife Journey\n\nJoin Novella Tanzania Safaris and Trekking for an exciting 3-day safari through two of Tanzania's most remarkable wildlife destinations - the legendary Serengeti National Park and the spectacular Ngorongoro Crater.\n\nThis carefully designed safari is ideal for travelers who want to experience Tanzania's incredible wildlife within a limited amount of time. From the endless Serengeti plains and its abundant wildlife to the dramatic landscape of the Ngorongoro Crater, the journey combines exceptional game viewing with beautiful scenery and comfortable accommodation.\n\nOver three days, you will have opportunities to encounter lions, elephants, buffaloes, giraffes, zebras, hippos, wildebeest, hyenas, and, with some luck, cheetahs, leopards, and the endangered black rhinoceros.\n\nSafari at a Glance\nDuration: 3 Days / 2 Nights\nDestinations: Serengeti National Park & Ngorongoro Crater\nSafari Style: Private Safari\nAccommodation: Camping, mid-range lodges, or luxury lodges\nTransport: 4x4 safari vehicle with pop-up roof\nStarting Point: Moshi or Arusha\nEnding Point: Moshi, Arusha, or airport, depending on your travel plans\n\nSafari Highlights\n• Explore the world-famous Serengeti National Park\n• Enjoy extensive game drives across the Serengeti plains\n• Discover the wildlife-rich Seronera Valley\n• Search for the Big Five and other African wildlife\n• Experience the spectacular Ngorongoro Crater\n• Enjoy diverse landscapes ranging from open savannah to crater scenery\n• Travel with an experienced private safari guide\n• Stay in carefully selected camps or lodges\n• Enjoy a short but rewarding safari experience with Novella Tanzania Safaris and Trekking\n\nWhy Choose This 3-Day Safari?\nThree days gives you more time to experience Tanzania's wildlife without committing to a long safari. The itinerary combines the open plains of the Serengeti with the unique ecosystem of the Ngorongoro Crater, giving you two very different wildlife experiences in one journey.\n\nThe Serengeti is famous for its vast grasslands and abundant wildlife, while Ngorongoro offers spectacular scenery and a remarkable concentration of animals within the crater.\n\nThis safari is particularly suitable for travelers who are visiting Tanzania for the first time or those combining their wildlife adventure with a Kilimanjaro trekking experience or a Zanzibar beach holiday.\n\nAt Novella Tanzania Safaris and Trekking, we focus on creating comfortable, flexible, and memorable safari experiences. Your safari can be adjusted according to your preferred accommodation level, travel dates, pickup location, and onward travel arrangements.",
                    'duration_days' => 3,
                    'duration_nights' => 2,
                    'theme' => 'Safari Adventure',
                    'skill_level' => 'Easy',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 1300],
                        ['persons' => 4, 'price' => 990],
                        ['persons' => 9, 'price' => 890],
                        ['persons' => 10, 'price' => 800],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Moshi/Arusha - Serengeti National Park', 'description' => "Main Destination: Serengeti National Park\nDriving Time: Approximately 6-7 hours\nGame Drive: Afternoon game drive\n\nYour safari begins early in the morning with pickup from your hotel in Moshi or Arusha. The journey takes you through the beautiful landscapes of northern Tanzania before continuing toward the Serengeti National Park. Along the way, you will experience changing scenery as the highlands give way to the vast open plains of the Serengeti.\n\nUpon entering the park, the adventure begins with your first game drive. You will make your way toward the Seronera area, located in the central Serengeti and known for its rich wildlife and permanent water sources.\n\nAs you explore the plains and river valleys, keep watch for lions, elephants, buffaloes, giraffes, zebras, hippos, antelopes, and numerous bird species. Depending on the season and location, you may also have opportunities to spot cheetahs and leopards. Later in the afternoon, you will continue to your campsite or lodge for dinner and an overnight stay.", 'accommodation' => 'Serengeti - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 2, 'title' => 'Full-Day Serengeti Wildlife Experience', 'description' => "Main Destination: Serengeti National Park\nGame Drive: Approximately 7-8 hours\n\nWake up early for another exciting day in the Serengeti. An early morning game drive offers the chance to see wildlife when animals are particularly active. As the morning progresses, your guide will take you through different areas of the park in search of wildlife and the best available sightings.\n\nThe Serengeti is home to an extraordinary variety of animals, and today's exploration may bring encounters with large herds of wildebeest and zebras, buffaloes, elephants, giraffes, lions, hyenas, hippos, and many other species.\n\nYou will enjoy lunch during the day before continuing with further exploration of the park. In the afternoon, depending on the season, wildlife movements, and your travel arrangements, you will begin your journey toward the Ngorongoro area.\n\nArrive at your accommodation in the evening, where you can relax, enjoy dinner, and prepare for the next day's crater adventure.", 'accommodation' => 'Ngorongoro area - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Ngorongoro Crater - Moshi/Arusha', 'description' => "Main Destination: Ngorongoro Crater\nTime in the Crater: Approximately 6-8 hours\n\nAfter an early breakfast, you will make your way to the Ngorongoro Crater for one of the highlights of your safari. Descending into the crater, you will enter a spectacular natural environment surrounded by dramatic walls and diverse habitats. The crater floor supports a wide range of wildlife, making it an excellent place for game viewing.\n\nDuring your game drive, you may encounter lions, elephants, buffaloes, zebras, wildebeest, giraffes, hyenas, hippos, and flamingos. The crater is also one of the places where you may have the opportunity to see the endangered black rhinoceros.\n\nYour experienced Novella safari guide will help you discover the wildlife and scenery while sharing information about the animals, ecosystem, and local environment. After your game drive, enjoy lunch before beginning your journey out of the Ngorongoro Conservation Area. Depending on your onward plans, we will transfer you to Moshi, Arusha, or the airport.\n\nEnd of Safari\nYour 3-day Serengeti and Ngorongoro adventure with Novella Tanzania Safaris and Trekking comes to an end. We hope you leave Tanzania with unforgettable memories, incredible wildlife photographs, and a deeper appreciation for the country's remarkable natural landscapes.\n\nKaribu Tanzania - your adventure with Novella starts here.", 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => [
                        'Transport 4x4 safari land cruiser',
                        'Transfer to and from the airport',
                        'Professional guide/driver',
                        'All parks and entrance fees',
                        'Lodges/Hotel/Camping accommodation',
                        'Camping equipments and accommodation',
                        'Fruits',
                        'Bottled water in safari vehicle',
                        '24 hours support',
                        'Current government taxes and levies',
                        'Salaries',
                    ],
                    'excludes' => [
                        'Entry visa to Tanzania',
                        'Laundry services',
                        'Tips to safari guides',
                    ],
                    'accommodations' => [
                        ['name' => 'Safari Lodges & Tented Camps', 'description' => 'Comfortable lodge or tented camp accommodation with full board meals throughout the safari.', 'image' => 'images/safaris/IMG-4419-1780110169806-65108106.jpg'],
                    ],
                    'gallery' => [
                        'images/safaris/elephant.jpg',
                        'images/safaris/serengeti-migration.jpg',
                        'images/safaris/wildbeet.jpg',
                    ],
                ]);
            }

            if ($slug === '4-days-wildlife-safari') {
                $safari->update([
                    'overview' => "Four Days of Wildlife, Adventure & Tanzania's Iconic Landscapes\n\nDiscover the remarkable wildlife and scenery of northern Tanzania on a 4-day private safari with Novella Tanzania Safaris and Trekking.\n\nThis carefully planned journey takes you from the elephant-filled landscapes of Tarangire National Park, across the spectacular plains of the Serengeti, and into the extraordinary ecosystem of the Ngorongoro Crater.\n\nWith four days on safari, you have more time to enjoy game drives without making the experience feel overly rushed. Each destination offers something different - from ancient baobab trees and large elephant herds to vast grasslands, big cats, and the unique wildlife environment of the Ngorongoro Crater.\n\nWhether you are visiting Tanzania for the first time, traveling as a couple or family, or combining your safari with a Kilimanjaro trek or Zanzibar holiday, this itinerary offers an exciting introduction to northern Tanzania's wildlife.\n\nSafari at a Glance\nDuration: 4 Days / 3 Nights\nDestinations: Tarangire National Park, Serengeti National Park & Ngorongoro Crater\nSafari Type: Private Guided Safari\nStarting Point: Moshi or Arusha\nEnding Point: Moshi, Arusha, or Airport\nAccommodation: Camping, mid-range lodges, or luxury lodges\nTransport: 4x4 safari vehicle with pop-up roof\nMeals: Breakfast, Lunch & Dinner as indicated\nIdeal For: Couples, families, friends, solo travelers, and first-time safari visitors\n\nWhat Makes This 4-Day Safari Special?\nA four-day safari gives you the opportunity to experience several different sides of Tanzania's northern safari circuit.\n\nTarangire introduces you to a landscape shaped by giant baobabs and large elephant herds. The Serengeti then opens into vast savannah plains where predators and herbivores move through one of Africa's most famous ecosystems. Your journey finishes in the Ngorongoro Crater, where spectacular scenery and a high concentration of wildlife create a memorable final game drive.\n\nWith Novella Tanzania Safaris and Trekking, the focus is on creating a safari that is comfortable, flexible, and enjoyable from the moment you leave your hotel until the end of your adventure.\n\nSafari Highlights\n• Explore the elephant-rich Tarangire National Park\n• See the impressive baobab landscapes of Tarangire\n• Enter the legendary Serengeti National Park\n• Enjoy extended game drives in the Serengeti\n• Explore areas around the wildlife-rich Seronera region\n• Search for lions, elephants, buffaloes, giraffes, zebras, wildebeest, hyenas and other wildlife\n• Look for cheetahs and leopards where conditions allow\n• Experience the dramatic scenery of the Ngorongoro Crater\n• Have the opportunity to search for black rhinoceros\n• Choose accommodation to suit your preferred comfort level and budget\n\nWhy Choose a 4-Day Safari With Novella?\nMore Time to Explore - Four days provide additional time for game drives and wildlife exploration compared with a very short safari. You can spend more time in the parks while still maintaining a manageable travel schedule.\n\nExperience Three Iconic Destinations - This itinerary combines Tarangire, Serengeti, and Ngorongoro, giving you three different wildlife experiences within one safari.\n\nA Variety of Wildlife - The parks are home to an impressive range of animals. Depending on the season and location, you may encounter lions, elephants, buffaloes, giraffes, zebras, wildebeest, hippos, hyenas, cheetahs, leopards, and many other species.\n\nChanging Landscapes - The journey takes you through very different environments, including woodland, baobab-studded landscapes, open savannah, highland areas, and the spectacular crater floor.\n\nA Comfortable Pace - Compared with shorter itineraries, four days allow you to enjoy the safari with more breathing room while still making good use of your time in Tanzania.\n\nFlexible Accommodation - Novella can arrange camping, mid-range, or luxury accommodation depending on your preferred safari experience and budget.",
                    'duration_days' => 4,
                    'duration_nights' => 3,
                    'theme' => 'Wildlife Safari Adventure',
                    'skill_level' => 'Easy',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 1700],
                        ['persons' => 4, 'price' => 1200],
                        ['persons' => 9, 'price' => 1050],
                        ['persons' => 10, 'price' => 990],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Moshi/Arusha - Tarangire National Park', 'description' => "Main Destination: Tarangire National Park\nTravel Time: Approximately 3-4 hours\nGame Drive: Approximately 7-8 hours\n\nYour safari begins with an early morning pickup from your hotel in Moshi or Arusha. We travel toward Tarangire National Park, passing through the countryside and enjoying views of the changing Tanzanian landscape along the way. Once inside Tarangire, your first game drive begins. The park is particularly known for its large elephant herds, ancient baobab trees, and diverse wildlife.\n\nAs you explore the park with your Novella safari guide, you may encounter elephants, giraffes, zebras, buffaloes, antelopes, lions, and a variety of bird species. Depending on the season and wildlife movements, other predators and animals may also be spotted. After a full day of exploration, you will leave the park and continue to your accommodation for dinner and overnight.", 'accommodation' => 'Tarangire/Karatu area - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 2, 'title' => 'Tarangire Area - Serengeti National Park', 'description' => "Main Destination: Serengeti National Park\nTravel: Scenic transfer with game viewing\nGame Drive: Afternoon/arrival game drive\n\nAfter breakfast, we continue toward the Serengeti. The route takes you through the Ngorongoro highlands and surrounding landscapes before descending toward the vast plains of the Serengeti. As you approach the park, the scenery gradually opens into expansive grasslands stretching toward the horizon.\n\nDepending on your arrival time and wildlife conditions, you will begin your first Serengeti game drive. The Seronera area in central Serengeti is particularly known for its wildlife and water sources, which attract animals throughout the year.\n\nKeep an eye out for lions, elephants, buffaloes, giraffes, zebras, wildebeest, hippos, hyenas, and other wildlife. With favorable conditions, you may also have opportunities to see cheetahs or leopards. After your game drive, continue to your campsite or lodge for dinner and overnight.", 'accommodation' => 'Serengeti National Park - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Full-Day Serengeti Safari - Ngorongoro Area', 'description' => "Main Destination: Serengeti National Park\nGame Drive: Full day\n\nToday is dedicated to exploring more of the Serengeti. After breakfast, set out with your guide for an extended game drive. Because the Serengeti covers a huge area, your guide will select suitable areas based on the season, recent wildlife activity, and your interests.\n\nThe day may bring encounters with large herds of wildebeest and zebras as well as buffaloes, elephants, giraffes, lions, hyenas, hippos, and other animals. The Serengeti is also famous for its big cats. With patience and favorable conditions, you may have the opportunity to see lions, cheetahs, or leopards.\n\nAfter your wildlife exploration, begin the journey toward the Ngorongoro Conservation Area. The evening temperatures in the highlands can be cool, so we recommend carrying a warm layer for the overnight stay.", 'accommodation' => 'Ngorongoro area - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Ngorongoro Crater - Moshi/Arusha/Airport', 'description' => "Main Destination: Ngorongoro Crater\nTime in the Crater: Approximately 6-8 hours\n\nRise early and enjoy breakfast before heading toward the Ngorongoro Crater. Today you descend into one of Tanzania's most extraordinary wildlife environments. Surrounded by the dramatic walls of the ancient volcanic caldera, the crater floor contains a variety of habitats that support abundant wildlife.\n\nDuring your game drive, you may encounter lions, elephants, buffaloes, zebras, wildebeest, giraffes, hyenas, hippos, and flamingos. The crater is also one of the places where you may have the opportunity to spot the endangered black rhinoceros.\n\nYour Novella guide will help you make the most of the game drive while sharing information about the wildlife, landscape, and ecosystem. After lunch, you will begin your journey out of the Ngorongoro Conservation Area. Depending on your onward travel arrangements, we can transfer you to Moshi, Arusha, or the airport.\n\nEnd of Safari", 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => [
                        'Transport 4x4 safari land cruiser',
                        'Transfer to and from the airport',
                        'Professional guide/driver',
                        'All parks and entrance fees',
                        'Lodges/Hotel/Camping accommodation',
                        'Camping equipments and accommodation',
                        'Fruits',
                        'Bottled water in safari vehicle',
                        '24 hours support',
                        'Current government taxes and levies',
                        'Salaries',
                    ],
                    'excludes' => [
                        'Entry visa to Tanzania',
                        'Laundry services',
                        'Tips to safari guides',
                    ],
                    'accommodations' => [
                        ['name' => 'Safari Lodges & Tented Camps', 'description' => 'Comfortable lodge or tented camp accommodation with full board meals throughout the safari.', 'image' => 'images/safaris/IMG-4419-1780110169806-65108106.jpg'],
                    ],
                    'gallery' => [
                        'images/safaris/serengeti-migration.jpg',
                        'images/safaris/elephant.jpg',
                        'images/safaris/wildbeet.jpg',
                    ],
                ]);
            }

            if ($slug === '5-days-safari-expedition') {
                $safari->update([
                    'overview' => "An Immersive Journey Through Tanzania's Wildlife Heartland\n\nSpend five unforgettable days exploring some of northern Tanzania's most remarkable wildlife areas with Novella Tanzania Safaris and Trekking. This private safari takes you from the elephant-rich landscapes of Tarangire National Park into the endless plains of the Serengeti, before finishing with an exciting game drive inside the spectacular Ngorongoro Crater.\n\nWith more time on safari, you can enjoy longer game drives, explore different wildlife areas, and experience Tanzania at a more comfortable pace. The itinerary also includes an opportunity to learn about the traditions and way of life of the Maasai people, adding a cultural dimension to your wildlife adventure.\n\nWhether your dream is to photograph big cats, watch large herds crossing the plains, experience the Great Migration season, or simply enjoy Tanzania's incredible landscapes, this five-day safari offers plenty of opportunities for unforgettable moments.\n\nSafari at a Glance\nDuration: 5 Days / 4 Nights\nDestinations: Tarangire National Park, Serengeti National Park & Ngorongoro Crater\nSafari Type: Private Guided Safari\nStarting Point: Moshi or Arusha\nEnding Point: Moshi, Arusha, or another agreed location\nAccommodation: Camping, mid-range lodge, or luxury lodge\nTransport: 4x4 safari vehicle with pop-up roof\nMeals: Breakfast, Lunch & Dinner as indicated\n\nWhy Choose a 5-Day Safari With Novella?\nFive days gives you the freedom to experience Tanzania's northern safari circuit without having to rush from one destination to another.\n\nInstead of spending most of your safari traveling between parks, this itinerary gives you valuable time inside the Serengeti, allowing you to enjoy multiple game drives and explore different areas of the park.\n\nAt Novella Tanzania Safaris and Trekking, we believe that a great safari is about more than ticking animals off a list. It is about enjoying the landscapes, understanding the ecosystem, learning from your guide, meeting local people, and creating memories that stay with you long after you leave Tanzania.\n\nSafari Highlights\n• Discover the elephant-filled Tarangire National Park\n• Admire Tarangire's spectacular baobab landscapes\n• Spend several days exploring the Serengeti\n• Enjoy full-day wildlife viewing in the Serengeti\n• Experience the Serengeti during the Great Migration or calving season when your travel dates coincide\n• Search for lions, elephants, buffaloes, giraffes, zebras, wildebeest, hippos, hyenas, cheetahs, and leopards\n• Enjoy an opportunity to experience Maasai culture\n• Explore the spectacular Ngorongoro Crater\n• Search for the endangered black rhinoceros\n• Enjoy a private safari with an experienced local guide\n• Choose accommodation according to your comfort level and budget\n\nWhat Makes This Safari Special?\nMore Time in the Serengeti - The extra time allows you to explore the Serengeti more extensively rather than simply passing through. Different game-drive routes can be selected according to wildlife activity, season, and your interests.\n\nWildlife Throughout the Journey - Each destination offers a different wildlife experience. Tarangire is particularly known for elephants and baobabs, while Serengeti provides vast open plains and excellent opportunities for predator and herbivore sightings.\n\nExperience Seasonal Wildlife Events - Depending on your travel dates and the location of the herds, the itinerary can offer opportunities to experience parts of the Great Wildebeest Migration or calving season. Wildlife movements are seasonal and cannot be guaranteed, but our guides can adjust the route according to current conditions.\n\nA Cultural Experience - The safari includes an opportunity to visit a Maasai community and learn about aspects of Maasai culture, traditions, and daily life.\n\nFinish With Ngorongoro - The safari concludes with a game drive in the Ngorongoro Crater, where dramatic scenery and abundant wildlife create a memorable final day.",
                    'duration_days' => 5,
                    'duration_nights' => 4,
                    'theme' => 'Immersive Wildlife Adventure',
                    'skill_level' => 'Easy',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 2200],
                        ['persons' => 4, 'price' => 1600],
                        ['persons' => 9, 'price' => 1400],
                        ['persons' => 10, 'price' => 1250],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Moshi/Arusha - Tarangire National Park', 'description' => "Main Destination: Tarangire National Park\nTravel Time: Approximately 3-4 hours\nGame Drive: Approximately 7-8 hours\n\nYour five-day adventure starts with an early morning pickup from your hotel in Moshi or Arusha. We travel toward Tarangire National Park, enjoying views of Tanzania's countryside as we make our way to the park.\n\nTarangire is known for its large elephant population, impressive baobab trees, seasonal wetlands, and diverse wildlife. Once inside the park, your game drive begins.\n\nKeep your eyes open for elephants, giraffes, zebras, buffaloes, antelopes, lions, and numerous bird species. Depending on the season and wildlife activity, you may also encounter other predators and smaller animals.\n\nAfter a rewarding day of wildlife viewing, leave the park and continue to your accommodation for dinner and overnight.", 'accommodation' => 'Tarangire/Karatu area - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 2, 'title' => 'Tarangire/Karatu - Serengeti National Park', 'description' => "Main Destination: Serengeti National Park\nTravel Time: Approximately 4-6 hours depending on the route and starting point\nGame Drive: Afternoon/arrival game drive\n\nAfter breakfast, continue toward the legendary Serengeti. The journey takes you through the Ngorongoro highlands before descending toward the vast plains of the Serengeti. Along the way, the landscape gradually changes from highland scenery to open grasslands.\n\nOnce inside Serengeti National Park, you will begin exploring the park with your Novella guide.\n\nThe central Serengeti, particularly the Seronera area, is an important wildlife region because of its water sources and diverse habitats. Depending on the time of arrival and current wildlife activity, you may see lions, elephants, buffaloes, giraffes, zebras, wildebeest, hippos, hyenas, and other animals.\n\nContinue to your selected campsite or lodge for dinner and overnight.", 'accommodation' => 'Serengeti National Park - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Full-Day Serengeti Wildlife Adventure', 'description' => "Main Destination: Serengeti National Park\nGame Drive: Full day\n\nToday is dedicated entirely to the Serengeti. After an early breakfast, head out for a full-day game drive with your experienced guide. Having a full day in the park gives you more flexibility to explore different areas and spend time observing wildlife rather than rushing between destinations.\n\nThe Serengeti supports an extraordinary range of wildlife. You may encounter large herds of wildebeest and zebras, buffaloes, elephants, giraffes, hippos, hyenas, and a variety of antelope species.\n\nThe park is also renowned for its big cats. With favorable conditions, you may have opportunities to see lions, cheetahs, or leopards.\n\nIf your travel dates coincide with the seasonal movement of the wildebeest, your guide will consider current herd locations when planning the day's route. During the calving period, the plains can also provide opportunities to witness young wildebeest and increased predator activity.\n\nAfter your game drive, return to your accommodation for dinner and a well-earned rest.", 'accommodation' => 'Serengeti National Park - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Serengeti Game Drive - Maasai Cultural Experience - Ngorongoro Area', 'description' => "Main Destination: Serengeti National Park\nGame Drive: Approximately 7-8 hours\n\nBegin the morning with another game drive in the Serengeti. The early hours are often a rewarding time for wildlife viewing, and your guide will choose the route according to recent wildlife activity and your interests.\n\nAfter exploring the park and enjoying lunch, begin your journey toward the Ngorongoro area.\n\nAlong the way, there will be an opportunity to visit a Maasai community, where you can learn about local traditions, cultural practices, homes, livelihoods, and aspects of everyday life. The visit provides a chance to interact respectfully with members of the community and gain a broader understanding of the people who have lived alongside Tanzania's wildlife landscapes for generations.\n\nContinue to your accommodation in the Ngorongoro area for dinner and overnight.", 'accommodation' => 'Ngorongoro area - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Ngorongoro Crater - Moshi/Arusha', 'description' => "Main Destination: Ngorongoro Crater\nTime in the Crater: Approximately 6-8 hours\n\nWake up early and enjoy breakfast before heading to the Ngorongoro Crater. Today you descend into the crater for your final major game drive of the safari.\n\nThe crater is surrounded by dramatic volcanic walls and contains a variety of habitats that support a remarkable concentration of wildlife. As you explore the crater floor, you may encounter lions, elephants, buffaloes, zebras, wildebeest, giraffes, hyenas, hippos, and flamingos.\n\nThe Ngorongoro Crater is also one of the places where you may have the opportunity to spot the endangered black rhinoceros.\n\nEnjoy your game drive and a picnic lunch before beginning the journey out of the crater. After leaving the Ngorongoro Conservation Area, continue toward Moshi, Arusha, or the airport, depending on your onward travel arrangements.\n\nEnd of Safari", 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => [
                        'Transport 4x4 safari land cruiser',
                        'Transfer to and from the airport',
                        'Professional guide/driver',
                        'All parks and entrance fees',
                        'Lodges/Hotel/Camping accommodation',
                        'Camping equipments and accommodation',
                        'Fruits',
                        'Bottled water in safari vehicle',
                        '24 hours support',
                        'Current government taxes and levies',
                        'Salaries',
                    ],
                    'excludes' => [
                        'Entry visa to Tanzania',
                        'Laundry services',
                        'Tips to safari guides',
                    ],
                    'accommodations' => [
                        ['name' => 'Safari Lodges & Tented Camps', 'description' => 'Comfortable lodge or tented camp accommodation with full board meals throughout the safari.', 'image' => 'images/safaris/IMG-4419-1780110169806-65108106.jpg'],
                    ],
                    'gallery' => [
                        'images/safaris/zebra-with-baby-dust-against-setting-sun-kenya-tanzania-national-park-serengeti-maasai-mara-1780114075090-760945481.jpg',
                        'images/safaris/serengeti-migration.jpg',
                        'images/safaris/elephant.jpg',
                    ],
                ]);
            }

            if ($slug === '6-days-safari-discovery') {
                $safari->update([
                    'overview' => "Route: Tarangire, Central Serengeti (2 nights), North Serengeti (2 nights) and Ngorongoro Crater.\n\nA 6 Days Tanzania Safari with two nights in Central Serengeti and two nights in North Serengeti, giving you a full day in each. North Serengeti is quieter and more remote, and from about July to October it is home to the Great Migration's dramatic Mara River crossings.\n\nThe safari starts with a game drive in Tarangire and ends with a night on the Ngorongoro Crater rim and a game drive on the crater floor.",
                    'duration_days' => 6,
                    'duration_nights' => 5,
                    'theme' => 'Northern Circuit Discovery',
                    'skill_level' => 'Easy',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 2450],
                        ['persons' => 4, 'price' => 1850],
                        ['persons' => 9, 'price' => 1600],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Tarangire National Park to Central Serengeti', 'description' => 'You will be picked up from your hotel in Arusha or Moshi at around 06:00 and driven to Tarangire National Park for a morning game drive among its large elephant herds and giant baobab trees. After a picnic lunch, continue through Karatu and the green Ngorongoro highlands, with views over the crater, before descending onto the endless Serengeti plains. Game drive on the way to Central Serengeti (Seronera), arriving in the evening for dinner and overnight. This is a long but rewarding travel day.', 'accommodation' => 'Central Serengeti - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 2, 'title' => 'Central Serengeti - Full Day Game Drive', 'description' => 'Spend a full day exploring Central Serengeti with morning and afternoon game drives. The Seronera River valley has resident wildlife all year round - lions, leopards, cheetahs, elephants, giraffes, hippos and large herds of zebra and wildebeest - making it one of the best areas in Africa to see big cats. Dinner and overnight in Central Serengeti.', 'accommodation' => 'Central Serengeti - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Central Serengeti to North Serengeti', 'description' => 'After breakfast, game drive north through the Serengeti towards North Serengeti (Kogatende / Mara River area), a quieter and more remote part of the park with open plains, rocky kopjes and very few vehicles. Enjoy a picnic lunch on the way and game viewing throughout the day. Dinner and overnight in North Serengeti.', 'accommodation' => 'North Serengeti - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'North Serengeti - Full Day Game Drive', 'description' => 'Spend a full day exploring North Serengeti. From about July to October the Great Migration herds gather here and cross the Mara River, one of the most dramatic wildlife spectacles in the world. Outside the migration season the area offers resident wildlife, wide open landscapes and a true wilderness feel. Dinner and overnight in North Serengeti.', 'accommodation' => 'North Serengeti - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'North Serengeti to Ngorongoro Crater rim', 'description' => 'After an early breakfast, begin the drive south through the Serengeti, with game viewing along the way and a picnic lunch in Central Serengeti. Leave the park via Naabi Hill Gate and drive up to the Ngorongoro Crater rim for dinner and overnight, with beautiful views over the crater.', 'accommodation' => 'Ngorongoro Crater rim - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Ngorongoro Crater to Arusha / Moshi', 'description' => 'After an early breakfast, descend into the Ngorongoro Crater for a game drive of about 6 hours on the crater floor. The crater is home to black rhino, lions, elephants, buffalo, hippos, hyenas and flamingos, making it one of the best places in Tanzania to see the Big Five. After a picnic lunch, ascend the crater wall and drive back to Arusha / Moshi or the airport, arriving in the evening.', 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => ['4x4 safari Land Cruiser with pop-up roof', 'Professional guide/driver', 'Park and entrance fees', 'Lodge, hotel, or camping accommodation', 'All meals during the safari', 'Bottled water and fruit', 'Government taxes and levies', '24-hour support'],
                    'excludes' => ['International flights and visa fees', 'Travel insurance', 'Laundry services', 'Tips to safari guides', 'Personal expenses'],
                    'accommodations' => [['name' => 'Safari Lodges & Tented Camps', 'description' => 'Comfortable lodge or tented camp accommodation with full-board meals throughout the safari.', 'image' => 'images/safaris/wildbeet.jpg']],
                    'gallery' => ['images/safaris/wildbeet.jpg', 'images/safaris/serengeti-migration.jpg', 'images/safaris/elephant.jpg'],
                ]);
            }

            if ($slug === '7-days-safari-journey') {
                $safari->update([
                    'overview' => "Route: Tarangire, Central Serengeti (2 nights), North Serengeti (3 nights) and Ngorongoro Crater (1 night).\n\nA 7 Days Safari Journey with plenty of time in the Serengeti: two nights in Central Serengeti and three nights in the remote North Serengeti, where the Great Migration crosses the Mara River from about July to October.\n\nThe journey begins with a game drive in Tarangire and ends with a night on the Ngorongoro Crater rim followed by a game drive on the crater floor, one of the best places in Tanzania to see the Big Five.",
                    'duration_days' => 7,
                    'duration_nights' => 6,
                    'theme' => 'Complete Northern Circuit',
                    'skill_level' => 'Easy',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 2850],
                        ['persons' => 4, 'price' => 2200],
                        ['persons' => 9, 'price' => 1900],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Tarangire National Park to Central Serengeti', 'description' => 'You will be picked up from your hotel in Arusha or Moshi at around 06:00 and driven to Tarangire National Park for a morning game drive among its large elephant herds and giant baobab trees. After a picnic lunch, continue through Karatu and the green Ngorongoro highlands, with views over the crater, before descending onto the endless Serengeti plains. Game drive on the way to Central Serengeti (Seronera), arriving in the evening for dinner and overnight. This is a long but rewarding travel day.', 'accommodation' => 'Central Serengeti - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 2, 'title' => 'Central Serengeti - Full Day Game Drive', 'description' => 'Spend a full day exploring Central Serengeti with morning and afternoon game drives. The Seronera River valley has resident wildlife all year round - lions, leopards, cheetahs, elephants, giraffes, hippos and large herds of zebra and wildebeest - making it one of the best areas in Africa to see big cats. Dinner and overnight in Central Serengeti.', 'accommodation' => 'Central Serengeti - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Central Serengeti to North Serengeti', 'description' => 'After breakfast, game drive north through the Serengeti towards North Serengeti (Kogatende / Mara River area), a quieter and more remote part of the park with open plains, rocky kopjes and very few vehicles. Enjoy a picnic lunch on the way and game viewing throughout the day. Dinner and overnight in North Serengeti.', 'accommodation' => 'North Serengeti - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'North Serengeti - Full Day Game Drive', 'description' => 'Spend a full day exploring North Serengeti. From about July to October the Great Migration herds gather here and cross the Mara River, one of the most dramatic wildlife spectacles in the world. Outside the migration season the area offers resident wildlife, wide open landscapes and a true wilderness feel. Dinner and overnight in North Serengeti.', 'accommodation' => 'North Serengeti - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'North Serengeti - Full Day Game Drive', 'description' => 'Spend a full day exploring North Serengeti. From about July to October the Great Migration herds gather here and cross the Mara River, one of the most dramatic wildlife spectacles in the world. Outside the migration season the area offers resident wildlife, wide open landscapes and a true wilderness feel. Dinner and overnight in North Serengeti.', 'accommodation' => 'North Serengeti - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'North Serengeti to Ngorongoro Crater rim', 'description' => 'After an early breakfast, begin the drive south through the Serengeti, with game viewing along the way and a picnic lunch in Central Serengeti. Leave the park via Naabi Hill Gate and drive up to the Ngorongoro Crater rim for dinner and overnight, with beautiful views over the crater.', 'accommodation' => 'Ngorongoro Crater rim - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 7, 'title' => 'Ngorongoro Crater to Arusha / Moshi', 'description' => 'After an early breakfast, descend into the Ngorongoro Crater for a game drive of about 6 hours on the crater floor. The crater is home to black rhino, lions, elephants, buffalo, hippos, hyenas and flamingos, making it one of the best places in Tanzania to see the Big Five. After a picnic lunch, ascend the crater wall and drive back to Arusha / Moshi or the airport, arriving in the evening.', 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => ['4x4 safari Land Cruiser with pop-up roof', 'Professional guide/driver', 'Park and entrance fees', 'Lodge, hotel, or camping accommodation', 'All meals during the safari', 'Bottled water and fruit', 'Government taxes and levies', '24-hour support'],
                    'excludes' => ['International flights and visa fees', 'Travel insurance', 'Laundry services', 'Tips to safari guides', 'Personal expenses'],
                    'accommodations' => [['name' => 'Safari Lodges & Tented Camps', 'description' => 'Comfortable lodge or tented camp accommodation with full-board meals throughout the safari.', 'image' => 'images/safaris/elephant.jpg']],
                    'gallery' => ['images/safaris/elephant.jpg', 'images/safaris/zebra-with-baby-dust-against-setting-sun-kenya-tanzania-national-park-serengeti-maasai-mara-1780114075090-760945481.jpg', 'images/safaris/serengeti-migration.jpg'],
                ]);
            }

            if ($slug === '8-days-safari-expedition') {
                $safari->update([
                    'overview' => "Route: Tarangire, Central Serengeti (2 nights), North Serengeti (3 nights), Ngorongoro Crater (1 night) and Lake Manyara (1 night).\n\nAn immersive 8 Days Safari Expedition through five of northern Tanzania's finest wildlife areas. Spend two nights in Central Serengeti and three nights in the remote North Serengeti, where the Great Migration crosses the Mara River from about July to October.\n\nAfter a night on the Ngorongoro Crater rim and a game drive on the crater floor, the safari finishes at Lake Manyara, with its groundwater forest, flamingos and tree-climbing lions.",
                    'duration_days' => 8,
                    'duration_nights' => 7,
                    'theme' => 'Immersive Wildlife Expedition',
                    'skill_level' => 'Easy',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 3200],
                        ['persons' => 4, 'price' => 2550],
                        ['persons' => 9, 'price' => 2200],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Tarangire National Park to Central Serengeti', 'description' => 'You will be picked up from your hotel in Arusha or Moshi at around 06:00 and driven to Tarangire National Park for a morning game drive among its large elephant herds and giant baobab trees. After a picnic lunch, continue through Karatu and the green Ngorongoro highlands, with views over the crater, before descending onto the endless Serengeti plains. Game drive on the way to Central Serengeti (Seronera), arriving in the evening for dinner and overnight. This is a long but rewarding travel day.', 'accommodation' => 'Central Serengeti - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 2, 'title' => 'Central Serengeti - Full Day Game Drive', 'description' => 'Spend a full day exploring Central Serengeti with morning and afternoon game drives. The Seronera River valley has resident wildlife all year round - lions, leopards, cheetahs, elephants, giraffes, hippos and large herds of zebra and wildebeest - making it one of the best areas in Africa to see big cats. Dinner and overnight in Central Serengeti.', 'accommodation' => 'Central Serengeti - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Central Serengeti to North Serengeti', 'description' => 'After breakfast, game drive north through the Serengeti towards North Serengeti (Kogatende / Mara River area), a quieter and more remote part of the park with open plains, rocky kopjes and very few vehicles. Enjoy a picnic lunch on the way and game viewing throughout the day. Dinner and overnight in North Serengeti.', 'accommodation' => 'North Serengeti - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'North Serengeti - Full Day Game Drive', 'description' => 'Spend a full day exploring North Serengeti. From about July to October the Great Migration herds gather here and cross the Mara River, one of the most dramatic wildlife spectacles in the world. Outside the migration season the area offers resident wildlife, wide open landscapes and a true wilderness feel. Dinner and overnight in North Serengeti.', 'accommodation' => 'North Serengeti - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'North Serengeti - Full Day Game Drive', 'description' => 'Spend a full day exploring North Serengeti. From about July to October the Great Migration herds gather here and cross the Mara River, one of the most dramatic wildlife spectacles in the world. Outside the migration season the area offers resident wildlife, wide open landscapes and a true wilderness feel. Dinner and overnight in North Serengeti.', 'accommodation' => 'North Serengeti - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'North Serengeti to Ngorongoro Crater rim', 'description' => 'After an early breakfast, begin the drive south through the Serengeti, with game viewing along the way and a picnic lunch in Central Serengeti. Leave the park via Naabi Hill Gate and drive up to the Ngorongoro Crater rim for dinner and overnight, with beautiful views over the crater.', 'accommodation' => 'Ngorongoro Crater rim - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 7, 'title' => 'Ngorongoro Crater to Lake Manyara', 'description' => 'After breakfast, descend into the Ngorongoro Crater for a game drive of about 6 hours on the crater floor, searching for black rhino, lions, elephants, buffalo, hippos, hyenas and flamingos. After a picnic lunch, ascend the crater wall and drive to Mto wa Mbu near Lake Manyara for dinner and overnight.', 'accommodation' => 'Lake Manyara (Mto wa Mbu) - Camping/Mid-range/Luxury lodge', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 8, 'title' => 'Lake Manyara National Park to Arusha / Moshi', 'description' => 'After breakfast, enter Lake Manyara National Park for a game drive. The park\'s groundwater forest, open floodplains and soda lake support elephants, giraffes, buffalo, baboons, blue monkeys, hippos and flamingos, along with hundreds of bird species, and it is known for its tree-climbing lions. After a picnic lunch, drive back to Arusha / Moshi or the airport.', 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => ['4x4 safari Land Cruiser with pop-up roof', 'Professional guide/driver', 'Park and entrance fees', 'Lodge, hotel, or camping accommodation', 'All meals during the safari', 'Bottled water and fruit', 'Government taxes and levies', '24-hour support'],
                    'excludes' => ['International flights and visa fees', 'Travel insurance', 'Laundry services', 'Tips to safari guides', 'Personal expenses'],
                    'accommodations' => [['name' => 'Safari Lodges & Tented Camps', 'description' => 'Comfortable lodge or tented camp accommodation with full-board meals throughout the expedition.', 'image' => 'images/safaris/IMG-4419-1780110169806-65108106.jpg']],
                    'gallery' => ['images/safaris/IMG-4419-1780110169806-65108106.jpg', 'images/safaris/wildbeet.jpg', 'images/safaris/zebra-with-baby-dust-against-setting-sun-kenya-tanzania-national-park-serengeti-maasai-mara-1780114075090-760945481.jpg'],
                ]);
            }
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
            ['7-day-umbwe-route-climb', '7 Days Umbwe Route Climb', 'The steep, direct Umbwe ascent with an extra acclimatisation day at Barranco Camp before the summit push.', ['Steep', 'Extra acclimatisation day', 'Less crowded'], 2100, 7, 'Very Challenging', 'images/kilimanjaro images/Kilimanjaro.jpeg'],
            ['northern-circuit', 'Northern Circuit Route', 'The longest route on the mountain  highest summit success, and stunning 360Â° panoramas.', ['Longest route', 'Highest success'], 2590, 9, 'Strenuous', 'images/kilimanjaro images/kilimanjaro-routes-7-best-routes-to-climb-mount-kilimanjaro.jpg'],
            ['9-days-northern-circuit-route', '9 Days Northern Circuit Route', 'Longer and highly scenic Kilimanjaro climb with excellent acclimatisation and quieter northern slopes.', ['Longer route', 'Quieter', 'Excellent acclimatisation'], 2550, 9, 'Moderate to Challenging', 'images/21.jpeg'],
            ['8-days-northern-circuit-route', '8 Days Northern Circuit Route', 'A scenic and quieter Kilimanjaro climb with excellent panoramic views, remote northern-slope trails, and strong acclimatisation.', ['Quieter', 'Panoramic views', 'Strong acclimatisation'], 2400, 8, 'Moderate to Challenging', 'images/22.jpeg'],
            ['meru', 'Mount Meru Trek', "Kilimanjaro's little sister at 4,566m  a perfect warm-up climb, wildlife-filled and dramatic.", ['Warm-up climb', 'Wildlife'], 1120, 4, 'Moderate', 'images/kilimanjaro images/Kilimanjaro.jpeg'],
            ['4-day-mount-meru-trek', '4 Days Mount Meru Trek', 'A well-paced Mount Meru climb with an extra day for acclimatisation and a sunrise summit on Socialist Peak.', ['Warm-up climb', 'Wildlife', 'Sunrise summit'], 1120, 4, 'Moderate', 'images/kilimanjaro images/Kilimanjaro.jpeg'],
            ['mount-meru-3-day', '3 Days Mount Meru Trek', 'Short Mount Meru option for tighter schedules.', ['Warm-up', 'Wildlife'], 920, 3, 'Moderate', 'images/16.jpeg'],
            ['6-day-lemosho-route-climb', '6 Days Lemosho Route Climb   Novella Tanzanian Safaris & Trekking', 'The 6 Days Lemosho Route is a scenic and adventurous Kilimanjaro trek starting from the western side of the mountain.', ['Strong fitness', 'Less crowded', 'Summit push'], 2150, 6, 'Challenging', 'images/20.jpeg'],
            ['7-day-lemosho-route-climb', '7 Days Lemosho Route Climb', 'The 7-day Lemosho Route is one of Kilimanjaro most scenic routes  rainforest, Shira Plateau and the southern circuit to the summit.', ['Scenic', 'Great acclimatisation'], 2300, 7, 'Moderate to Challenging', 'images/kilimanjaro images/Kilimanjaro-Lemosho-Route-8-days.jpeg'],
            ['8-day-lemosho-route-climb', '8 Days Lemosho Route Climb', 'The classic 8-day Lemosho itinerary with an extra night at Shira I Camp — a slower pace and more time to acclimatise.', ['Best acclimatisation', 'Scenic', 'Less crowded'], 2251, 8, 'Moderate', 'images/kilimanjaro images/Kilimanjaro-Lemosho-Route-8-days.jpeg'],
            ['8-day-lemosho-route-climb-kosovo-camp', '8 Days Lemosho Route Climb   Kosovo Camp', 'The 8 Days Lemosho Kosovo Route is designed for trekkers seeking the scenery and acclimatisation profile of the Lemosho Route with the advantage of Kosovo Camp before the summit push.', ['Kosovo Camp', 'Shorter summit night', 'Excellent acclimatisation'], 2600, 8, 'Moderate to Challenging', 'images/kilimanjaro images/Kili-2024.webp'],
            ['8-day-lemosho-route-crater-camp', '8 Days Lemosho Route with Crater Camp', "The Lemosho Route with a rare night at Crater Camp inside Kilimanjaro's summit crater, near the Furtwängler Glacier.", ['Crater Camp', 'Rare experience', 'Adventurous'], 2600, 8, 'Challenging', 'images/kilimanjaro images/Kili-2024.webp'],
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
                    'overview' => "Trip outline: Day 1: arrival day · Days 2–9: to be spent on the mountain · Day 10: departure day.\n\nThe Lemosho Route is one of the most scenic and rewarding trails on Mount Kilimanjaro. It is particularly known for its spectacular landscapes, panoramic mountain views, diverse vegetation, and relatively gradual approach to the summit. The route offers a quieter and more scenic start compared to some of the other popular trails, making it a great choice for climbers who want to experience the beauty and diversity of Kilimanjaro. The climb begins at Londorossi Gate on the western side of the mountain and starts with a beautiful trek through the lush rainforest. As you gain altitude, the vegetation changes gradually into open moorland, with expansive views of the surrounding landscape. The trail then continues across the Shira Plateau, one of the most beautiful areas of the route, before joining the southern circuit around the mountain.\n\nThe 8 Days Lemosho Kosovo Route offers a scenic and gradual climb through Kilimanjaro’s western side, featuring rainforest, the Shira Plateau, Lava Tower, Barranco Wall, alpine desert, and impressive glacier views. With an overnight stay at Kosovo Camp before the summit, trekkers benefit from a higher and more conveniently positioned base, making the final ascent to Uhuru Peak shorter and more direct. This itinerary is ideal for climbers seeking good acclimatization, beautiful landscapes, and a comfortable approach to the summit.\n\nCamping at Kosovo Camp places you at a higher elevation and closer to Uhuru Peak, reducing the distance of the final summit ascent. This helps create a more direct summit push, allowing you to conserve energy during the most demanding stage of the climb. It also provides a strategic and comfortable base for resting before your final attempt on the summit.",
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
                        ['day' => 1, 'title' => 'Arrive in Tanzania', 'description' => "Upon arrival at Kilimanjaro International Airport, you will be welcomed by our team and transferred to your hotel in Moshi. Later, you will meet your mountain guide for a detailed briefing about the upcoming trek, followed by an equipment check to ensure you have all the essential gear. Any missing equipment can be rented before the climb.\n\nIn the evening, you will enjoy dinner and relax at the hotel as you prepare for your Kilimanjaro adventure. Overnight at your hotel in Moshi.", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast']],
                        ['day' => 2, 'title' => 'Lemosho Glades (2385m) to Big Tree Camp (2780m)', 'description' => "After breakfast at your hotel, you will be picked up at around 8:00 AM and driven to Londorossi Gate, located on the western side of Mount Kilimanjaro. Upon arrival, you will complete the necessary registration and park formalities while your guides and porters prepare the equipment and supplies for the trek.\n\nThe hike begins with a gentle ascent through the lush rainforest of the Lemosho Glades. The trail offers a peaceful atmosphere and opportunities to spot wildlife along the way. After a steady walk through the forest, you will arrive at Mti Mkubwa (Big Tree) Camp, where you will enjoy dinner and spend the night.\n\nDistance covered: 7km / 4.3mi | Approx. time taken: 4 hours", 'accommodation' => 'Big Tree Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Big Tree Camp (2780m) to Shira 1 Camp (3600m)', 'description' => "After breakfast, you will begin your trek across the scenic Shira Plateau, passing through open moorland and heath dotted with unique volcanic rock formations. The trail gradually gains altitude, with some sections becoming moderately steep as you make your way toward Shira I Camp (3,600 m).\n\nAlong the route, you will enjoy beautiful panoramic views of the surrounding landscape, including Kibo Peak, which often appears above the clouds. Upon reaching Shira I Camp, you will have time to relax, enjoy dinner, and prepare for the next day’s adventure. Overnight at Shira I Camp.\n\nDistance covered: 8.5km / 5.3mi | Approx. time taken: 7 hrs", 'accommodation' => 'Shira 1 Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Shira 1 Camp (3600m) to Shira 2 Camp (3900m)', 'description' => "After breakfast, you will continue your trek across the open moorland of the Shira Plateau toward Shira II Camp. This is a relatively short and gentle hiking day, allowing you to enjoy the spectacular scenery while gradually gaining altitude for acclimatization. Along the way, you will have impressive views of Kibo Peak and the Northern Ice Fields from the western side of Mount Kilimanjaro.\n\nUpon arrival at camp, you will enjoy a hot lunch and have time to relax. Around 4:00 PM, you will take tea before heading out for a short acclimatization walk to a higher altitude. You will then return to camp for dinner and an overnight stay.\n\nDistance covered: 8km / 5mi | Approx. time taken: 5 hours", 'accommodation' => 'Shira 2 Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Shira 2 Camp (3900m) to Barranco Camp (3960m)', 'description' => "After breakfast, you will leave the moorland behind and continue into the high-altitude alpine desert. The trail gradually ascends toward Lava Tower (4,600 m), passing across rocky lava ridges beneath the glaciers of the Western Breach. This is the highest point of the day and a perfect place to stop for lunch while enjoying the spectacular panoramic mountain views.\n\nIn the afternoon, you will make a steep descent of approximately 3 hrs to Barranco Camp (3,960 m). The trail provides excellent opportunities to capture stunning views of the Western Breach and the impressive Barranco Wall. The campsite is beautifully situated in a valley beneath the wall, offering a memorable setting for sunset, dinner, and overnight rest.\n\nDistance covered: 10km / 6.2mi | Approx. time taken: 7 hrs", 'accommodation' => 'Barranco Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Barranco Camp (3960m) to Karanga Camp (3963m)', 'description' => "After breakfast, you will leave the campsite and begin the ascent of the impressive Barranco Wall, reaching around 4,200 m. The climb involves navigating rocky terrain and offers spectacular views of the surrounding landscape and the Heim Glacier.\n\nFrom the top of the Barranco Wall, you will continue toward Karanga Camp (3,963 m). The trek takes about 4 hrs, with the trail passing through the scenic Karanga Valley before reaching camp, where you will have time to rest and prepare for the next stage of your climb.\n\nDistance covered: 5.5km / 3.4mi | Approx. time taken: 5 hours", 'accommodation' => 'Karanga Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 7, 'title' => 'Karanga Camp (3963m) to Kosovo Camp (4800m)', 'description' => "After breakfast, you will begin the trek toward Kosovo Camp (4,800m), enjoying impressive views of Kibo and Mawenzi Peaks along the way. Upon arrival, you will have lunch and spend the afternoon resting and preparing for the demanding summit attempt. Dinner will be served early, followed by a short rest before waking around midnight to begin the final ascent to Uhuru Peak.\n\nDistance covered: 3km / 1.9mi | Approx. time taken: 3 hours", 'accommodation' => 'Kosovo Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 8, 'title' => 'Kosovo Camp (4800m) to Uhuru Peak (5895m) & down to Millennium Camp (3790m)', 'description' => "We will wake up very early, at around 11:30 pm; some light tea with cookies will be ready for you. We will climb scree for 4 to 5 hours but gain incredible height over a short distance. The view is spectacular. We should be on the crater rim at Stella Point (5756m) as the first rays of the sun hit us. Then it will take us 1 hour from Stella Point to Uhuru Peak (5895m), where you take some photos for a few minutes before we start descending to Kosovo Camp for lunch and some rest, and then walk down to Millennium Camp (3790m) for dinner and overnight.\n\nDistance covered: 11km | Approx. time taken: 10 hours", 'accommodation' => 'Millennium Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 9, 'title' => 'Trek Millennium Camp (3790m) to Mweka Gate (1630m)', 'description' => "After breakfast, you will begin your final descent through the lush Mweka rainforest toward Mweka Gate. Upon arrival, you will complete the remaining park formalities and receive your official Kilimanjaro summit certificate to commemorate your achievement.\n\nYou will then be met by your private vehicle and transferred back to your hotel in Moshi. After the long trek, you can enjoy a well-deserved hot shower, relax, and celebrate the successful completion of your Kilimanjaro adventure.\n\nDistance covered: 12.1km / 7.5mi | Approx. time taken: 6 hours", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast', 'Lunch']],
                        ['day' => 10, 'title' => 'Depart Tanzania', 'description' => "After completing your Kilimanjaro adventure, you will be transferred to Kilimanjaro International Airport for your onward flight, according to your travel arrangements.\n\nIf you wish to extend your stay in Tanzania, we can arrange a cultural experience, a relaxing Zanzibar beach getaway, or an exciting wildlife safari. You can explore iconic destinations such as Tarangire National Park, the Ngorongoro Crater, or Serengeti National Park.", 'accommodation' => 'Departure day', 'meals' => ['Breakfast']],
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
                    'overview' => "Trip outline: Day 1: arrival day · Days 2–7: to be spent on the mountain · Day 8: departure day.\n\nThe Marangu Route, popularly known as the “Coca-Cola Route,” is one of the oldest and most established trails on Mount Kilimanjaro. It is unique because it is the only Kilimanjaro route that offers overnight accommodation in mountain huts, making it a popular choice for climbers who prefer sleeping in huts rather than camping. The route begins at Marangu Gate on the southeastern side of the mountain and follows a well-established trail through Kilimanjaro’s different climatic zones. The trek starts in the lush tropical rainforest before continuing through open moorland and alpine desert towards Kibo, the summit area of Kilimanjaro.\n\nOne of the main advantages of the Marangu Route is its relatively gradual trail, making the hiking experience less rugged compared to some other routes. The hut accommodation also provides more shelter and comfort, particularly during periods of rain. The route follows the same trail for both the ascent and descent, giving it a more direct route style. The Marangu Route can be completed in 5 or 6 days:\n\n5 Days: Suitable for experienced climbers who are well acclimatized and comfortable with a faster itinerary.\n\n6 Days: Recommended for climbers who prefer a more gradual pace, with an additional day to support altitude acclimatization.\n\nAlthough the Marangu Route has a more gradual trail and hut accommodation, reaching the summit still requires good preparation, fitness, and determination. It is a suitable option for trekkers who value hut accommodation, a classic route, and a more direct approach to Uhuru Peak.",
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
                        ['day' => 1, 'title' => 'Arrive in Tanzania', 'description' => "Upon arrival at Kilimanjaro International Airport, you will be welcomed by our team and transferred to your hotel in Moshi. Later, you will meet your mountain guide for a detailed briefing about the upcoming trek, followed by an equipment check to ensure you have all the essential gear. Any missing equipment can be rented before the climb.\n\nIn the evening, you will enjoy dinner and relax at the hotel as you prepare for your Kilimanjaro adventure. Overnight at your hotel in Moshi.", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast']],
                        ['day' => 2, 'title' => 'Marangu Gate (1860m) to Mandara Hut (2700m)', 'description' => "After breakfast, you will be picked up from your hotel in Moshi at around 8:00 AM and driven to Marangu Gate. Once the park registration and necessary formalities are completed, you will begin your approximately 5-hr hike to Mandara Hut, covering about 8 km. The trail leads through the lush and dense rainforest, where you may spot wildlife, including blue monkeys and black-and-white colobus monkeys.\n\nUpon reaching Mandara Hut, you will have time to rest and enjoy the peaceful surroundings. If time and energy allow, your guide can take you on a short excursion to Maundi Crater, where you can enjoy beautiful views stretching toward the Kenyan side of the mountain. Overnight at Mandara Hut\n\nDistance covered: 8.3km / 5.2mi | Approx. time taken: 5 hours", 'accommodation' => 'Mandara Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Mandara Hut (2700m) to Horombo Hut (3700m)', 'description' => "After an early breakfast, you will leave Mandara Hut and continue your ascent toward Horombo Hut (3,700 m). The trail gradually leaves the rainforest behind as you cross into the heath and moorland zone. The hike takes approximately 4–6 hrs, with the changing landscape offering beautiful views along the way.\n\nUpon reaching Horombo Hut, you will have time to relax and enjoy the spectacular scenery surrounding the campsite. From here, you can admire impressive views of Kibo and Mawenzi Peaks, as well as the vast plains of the Masai Steppe in the distance. Overnight at Horombo Hut.\n\nDistance covered: 12.5km / 7.8mi | Approx. time taken: 4 – 6 hours", 'accommodation' => 'Horombo Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Acclimatization trek to Zebra Rocks (4020m) then back to Horombo Hut (3700m)', 'description' => "Today is dedicated to acclimatization, giving your body extra time to adjust to the increasing altitude. After breakfast, you will take a gradual hike toward Zebra Rocks (4,020 m), a distinctive rock formation named for its natural black-and-white striped appearance. The trek takes around 3–4 hrs before returning to Horombo Hut.\n\nAfter arriving back at camp, you will enjoy a warm lunch and have the afternoon to rest and recover. Later, you may take a gentle walk around the surrounding valley before dinner. This additional day is an important part of the trek, helping you prepare for the higher altitudes ahead. Overnight at Horombo Hut.\n\nDistance covered: 5km / 3.1mi", 'accommodation' => 'Horombo Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Horombo Hut (3700m) to Kibo Hut (4700m)', 'description' => "After breakfast, you will begin a long and challenging trek toward Kibo Hut (4,700 m). The trail gradually leaves the heath and moorland behind, leading into the vast and barren Saddle, a high-altitude desert plateau connecting the peaks of Kibo and Mawenzi. After crossing this impressive landscape, you will continue toward Kibo Hut, which usually takes around 5–6 hrs.\n\nUpon arrival, you will have lunch and time to rest while preparing for the summit attempt. An early dinner will be served, followed by an early night, as you will wake up around midnight to begin the final ascent to Uhuru Peak.\n\nDistance covered: 9.5km / 5.9mi", 'accommodation' => 'Kibo Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Kibo Hut (4700m) to Uhuru Peak (5895m) & down to Horombo Hut (3700m)', 'description' => "Today is the highlight of your Kilimanjaro adventure. You will wake up around 1:00 AM and begin the challenging final ascent toward the summit. The trail climbs steadily over rocky terrain, passing Hans Meyer Cave (5,220 m) before continuing toward Gilman’s Point (5,681 m) on the crater rim. After reaching Gilman’s Point around sunrise, you will continue for approximately 1 hr 30 min along the crater rim to Uhuru Peak (5,895 m), the highest point in Africa. Here, you will have time to take photos and enjoy the breathtaking sunrise before beginning your descent.\n\nYou will descend back to Kibo Hut for a warm lunch and a well-deserved 1–2 hr rest. After recovering, you will continue the descent toward Horombo Hut, passing through the changing mountain landscapes along the way. Upon arrival, you will have dinner and spend your final night on Mount Kilimanjaro.\n\nDistance covered: 22km / 13.7mi", 'accommodation' => 'Horombo Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 7, 'title' => 'Horombo Hut (3700m) to Marangu Gate (1860m)', 'description' => "After breakfast, you will begin your final descent from Horombo Hut, passing through the beautiful heath and moorland zone toward Mandara Hut (2,700 m). Here, you will stop for a hot lunch and a short rest before continuing downhill through the lush tropical rainforest toward Marangu Gate (1,860 m). The descent takes approximately 6 hrs in total.\n\nAt the park gate, you will complete the final formalities and say goodbye to your mountain crew. You will then be transferred by vehicle back to your hotel in Moshi, where you can enjoy a well-deserved hot shower, relax, and celebrate your successful Kilimanjaro summit.\n\nDistance covered: 20.8km / 12.9mi | Approx. time taken: 8 hours", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast', 'Lunch']],
                        ['day' => 8, 'title' => 'Depart Tanzania', 'description' => "After completing your Kilimanjaro adventure, you will be transferred to Kilimanjaro International Airport for your onward flight, according to your travel arrangements.\n\nIf you wish to extend your stay in Tanzania, we can arrange a cultural experience, a relaxing Zanzibar beach getaway, or an exciting wildlife safari. You can explore iconic destinations such as Tarangire National Park, the Ngorongoro Crater, or Serengeti National Park.", 'accommodation' => 'Departure day', 'meals' => ['Breakfast']],
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
                    'overview' => "Trip outline: Day 1: arrival day · Days 2–7: to be spent on the mountain · Day 8: departure day.\n\nThe Rongai Route is the only Kilimanjaro route that approaches the mountain from the northern side, close to the Kenyan border. It is known for its quieter trails, remote wilderness, and gradual ascent, making it a suitable choice for trekkers who prefer a peaceful experience away from the busier routes. Along the way, you will enjoy views of Kibo and Mawenzi, open moorlands, and the unique landscapes of Kilimanjaro’s northern slopes. The route is available in 6-day and 7-day itineraries. The 6-day option is more suitable for experienced trekkers who are comfortable with a faster pace and longer trekking days, while the 7-day itinerary is recommended for those who prefer a more gradual climb with additional time for acclimatization before the summit attempt.\n\nThe trek begins at Nalemuru Gate, approximately 3–4 hrs from Moshi, and continues through the remote northern side of the mountain before joining the Marangu Route near Kibo. After reaching Uhuru Peak (5,895 m), the descent follows the Marangu side, allowing you to experience two different sides of Kilimanjaro. Although the scenery is generally less varied than on some western routes, Rongai offers several days of peaceful wilderness trekking and impressive mountain views. With its moderate difficulty, low traffic, gradual ascent, and flexible 6- or 7-day options, the Rongai Route provides a memorable Kilimanjaro experience for both experienced hikers and trekkers who prefer a more comfortable pace.",
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
                        ['day' => 1, 'title' => 'Arrive in Tanzania', 'description' => "Upon arrival at Kilimanjaro International Airport, you will be welcomed by our team and transferred to your hotel in Moshi. Later, you will meet your mountain guide for a detailed briefing about the upcoming trek, followed by an equipment check to ensure you have all the essential gear. Any missing equipment can be rented before the climb.\n\nIn the evening, you will enjoy dinner and relax at the hotel as you prepare for your Kilimanjaro adventure. Overnight at your hotel in Moshi.", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast']],
                        ['day' => 2, 'title' => 'Nalemoru Gate (1,990 m) to Simba Camp (2,625 m)', 'description' => "After breakfast, you will drive to Nale Moru Village, the starting point of the Rongai Route. The trek begins through cultivated farmland and beautiful pine forests, where you may have the opportunity to spot wildlife such as Colobus monkeys and, with some luck, elephants or buffaloes. The trail gradually ascends toward Simba Camp (2,625 m), located at the edge of the moorland zone, where you will have dinner and spend the night.\n\nDistance: 8 km / 5 mi | Hiking time: 4–5 hrs", 'accommodation' => 'Simba Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Simba Camp (2,625 m) to Kikelewa Camp (3,630 m)', 'description' => "Today, you will continue with a steady climb through the changing landscape passing Second Cave (3,480 m) on the way to Kikelewa Camp (3,630 m). As you gain altitude, the vegetation becomes more open and you enter the moorland zone. Along the way, you will enjoy spectacular views of Kibo Peak and the Eastern Ice Fields along the crater rim. After reaching camp, you will have time to rest and enjoy the surrounding mountain scenery.\n\nDistance: 10 km / 6.2 mi | Hiking time: 6–7 hrs", 'accommodation' => 'Kikelewa Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Kikelewa Camp (3,630 m) to Mawenzi Tarn Hut (4,310 m)', 'description' => "After breakfast, you will leave Kikelewa Camp and begin a relatively short but steep climb across grassy slopes toward Mawenzi Tarn Hut. As you gain altitude, the vegetation gradually becomes sparse, while beautiful views open across the Kenyan plains. The trail eventually leads to the impressive Mawenzi area, where the camp is situated beneath the dramatic cliffs of Mawenzi Peak. The afternoon will be reserved for relaxation or a short walk around the area to support acclimatization.\n\nDistance: 4 km / 2.5 mi | Hiking time: 3–4 hrs", 'accommodation' => 'Mawenzi Tarn Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Mawenzi Tarn Hut (4,310 m) to Kibo Hut (4,700 m)', 'description' => "Today, you will cross the vast Saddle, the high-altitude desert lying between Mawenzi and Kibo Peaks. The landscape becomes increasingly barren as you make your way across this impressive lunar-like terrain toward Kibo Hut. Along the way, you will have excellent views of Kilimanjaro’s main summit and the route ahead. Upon reaching Kibo Hut, you will have lunch and spend the rest of the day resting and preparing for the final summit climb. An early dinner and early bedtime will be arranged before the midnight start.\n\nDistance: 8 km / 5 mi | Hiking time: 5–6 hrs", 'accommodation' => 'Kibo Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Kibo Hut (4,700 m) to Uhuru Peak (5,895 m) & Horombo Hut (3,700 m)', 'description' => "This is the most challenging and rewarding day of your Kilimanjaro trek. You will wake around midnight and begin the steep ascent toward the summit. The trail passes Hans Meyer Cave (5,220 m) before continuing upward to Gilman’s Point (5,681 m) on the crater rim, where you may arrive around sunrise. From there, you will continue along the crater rim for approximately 1–2 hrs to reach Uhuru Peak (5,895 m), the highest point in Africa. After celebrating at the summit and taking photos, you will descend to Kibo Hut for a warm meal and a short rest before continuing down to Horombo Hut, where you will spend the night.\n\nDistance: 22 km / 13.7 mi | Hiking time: 12–15 hrs", 'accommodation' => 'Horombo Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 7, 'title' => 'Horombo Hut (3,700 m) to Marangu Gate (1,860 m)', 'description' => "After breakfast, you will begin your final descent through the heath and moorland toward Mandara Hut (2,700 m), where you will stop for lunch and a short break. The trail then continues downhill through the lush tropical rainforest until you reach Marangu Gate (1,860 m). After completing the final park formalities and saying goodbye to your mountain crew, you will be transferred back to your hotel in Moshi. Take time to enjoy a hot shower, relax, and celebrate the successful completion of your Kilimanjaro climb.\n\nDistance: 20.8 km / 12.9 mi | Hiking time: 8 hrs", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast', 'Lunch']],
                        ['day' => 8, 'title' => 'Departure from Tanzania', 'description' => "After completing your Kilimanjaro adventure, you will be transferred to Kilimanjaro International Airport for your onward flight, according to your travel arrangements.\n\nIf you wish to extend your stay in Tanzania, we can arrange a cultural experience, a relaxing Zanzibar beach getaway, or an exciting wildlife safari. You can explore iconic destinations such as Tarangire National Park, the Ngorongoro Crater, or Serengeti National Park.", 'accommodation' => 'Departure day', 'meals' => ['Breakfast']],
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
                    'overview' => "Trip outline: Day 1: arrival day · Days 2–5: to be spent on the mountain · Day 6: departure day.\n\nMount Meru, standing at 4,566 m, is Tanzania’s second-highest mountain and is located within Arusha National Park. The mountain combines challenging steep climbs with beautiful scenery, diverse wildlife, lush forests, and dramatic volcanic landscapes. Because of the wildlife found along the lower slopes, trekkers are accompanied by an armed ranger for safety. Its demanding terrain also makes Meru a valuable acclimatization trek for those preparing for Mount Kilimanjaro, while offering a rewarding alternative for hikers who want a serious mountain experience without committing to Kilimanjaro.\n\nThe 4 Days Mount Meru Trek provides a well-paced journey through Tanzania’s scenic landscapes, featuring rainforest trails, wildlife encounters, volcanic ridges, crater views, and spectacular mountain scenery. The additional day allows more time for acclimatization, making the climb more comfortable and enjoyable. The trek culminates at Socialist Peak, where trekkers can experience an unforgettable sunrise and panoramic views, making Mount Meru an excellent adventure before or after a Kilimanjaro climb.",
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
                        ['day' => 1, 'title' => 'Arrive in Tanzania', 'description' => "Upon arrival at Kilimanjaro International Airport, you will be welcomed by our team and transferred to your hotel in Moshi. Later, you will meet your mountain guide for a detailed briefing about the upcoming trek, followed by an equipment check to ensure you have all the essential gear. Any missing equipment can be rented before the climb.\n\nIn the evening, you will enjoy dinner and relax at the hotel as you prepare for your Mount Meru adventure. Overnight at your hotel in Moshi.", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast']],
                        ['day' => 2, 'title' => 'Momella Gate (1500m) to Miriakamba Hut (2500m)', 'description' => "After breakfast, you will leave your hotel at around 0800hrs and drive to Momella Gate, the starting point of your Mount Meru adventure. The journey takes approximately one and a half hours. Once registration and park formalities are completed, you will begin hiking under the guidance of an armed ranger. The trail passes through beautiful landscapes with views of the Momella Lakes and, on clear days, distant views of Mount Kilimanjaro. Wildlife such as giraffes, buffaloes, warthogs, and bushbucks may be spotted along the way. You will continue through the scenic surroundings until reaching Miriakamba Hut, where you will have dinner and spend the night.\n\nDistance covered: 6km / 3.5mi | Approx. time taken: 4 – 5 hours", 'accommodation' => 'Miriakamba Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Miriakamba Hut (2500m) to Saddle Hut (3500m)', 'description' => "TToday you will continue climbing through the forest along a steadily rising trail toward Saddle Hut. As you gain elevation, the vegetation begins to change and the views become more impressive, with opportunities to see Meru Crater, the Ash Cone, and Little Meru. Keep an eye out for wildlife and colorful mountain vegetation along the trail, including possible sightings of buffaloes and black-and-white colobus monkeys. After arriving at Saddle Hut, you will have some time to rest before taking a short acclimatization hike to Little Meru (3810m). You will then return to Saddle Hut for dinner and overnight.\n\nDistance covered: 6.5km / 4mi | Approx. time taken: 3 – 4 hours", 'accommodation' => 'Saddle Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Saddle Hut (3500m) to Socialist Peak (4566m) to Miriakamba Hut (2500m)', 'description' => "You will wake up shortly after midnight and have a light meal before beginning the final ascent toward Socialist Peak, the highest point of Mount Meru. The climb is steep and follows rocky terrain, gravel sections, and narrow ridges as you make your way toward the summit. Once at the top, you will be rewarded with spectacular views of the Meru Crater, Ash Cone, and the surrounding landscapes. Depending on conditions, you may also spot mountain wildlife such as klipspringers and mountain reedbucks. After spending some time at the summit, you will begin the long descent back to Miriakamba Hut for dinner and overnight rest.\n\nDistance covered: 19km / 12mi | Approx. time taken: 10 – 12 hours", 'accommodation' => 'Miriakamba Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Miriakamba Hut (2500m) to Momella Gate (1500m)', 'description' => "After breakfast, you will begin the final section of your Mount Meru trek, descending toward Momella Gate via the southern route. The trail passes through beautiful montane forest, offering a final opportunity to enjoy the natural scenery of Arusha National Park. Along the way, you will pass the impressive Fig Tree Arch, a natural landmark created by the surrounding vegetation. Once you arrive at Momella Gate, you will complete the necessary park formalities before being picked up and transferred back to your hotel in Moshi.\n\nDistance covered: 14km / 8.5mi | Approx. time taken: 4 – 5 hours", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast', 'Lunch']],
                        ['day' => 6, 'title' => 'Depart Tanzania', 'description' => "After completing your Mount Meru adventure, you will be transferred to Kilimanjaro International Airport for your onward flight, according to your travel arrangements.\n\nIf you wish to extend your stay in Tanzania, we can arrange a cultural experience, a relaxing Zanzibar beach getaway, or an exciting wildlife safari. You can explore iconic destinations such as Tarangire National Park, the Ngorongoro Crater, or Serengeti National Park.", 'accommodation' => 'Departure day', 'meals' => ['Breakfast']],
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
                    'overview' => "Trip outline: Day 1: arrival day · Days 2–4: to be spent on the mountain · Day 5: departure day.\n\nMount Meru, standing at 4,566 m, is Tanzania’s second-highest mountain and is located within Arusha National Park. The mountain combines challenging steep climbs with beautiful scenery, diverse wildlife, lush forests, and dramatic volcanic landscapes. Because of the wildlife found along the lower slopes, trekkers are accompanied by an armed ranger for safety. Its demanding terrain also makes Meru a valuable acclimatization trek for those preparing for Mount Kilimanjaro, while offering a rewarding alternative for hikers who want a serious mountain experience without committing to Kilimanjaro.\n\nA scenic and exciting 3 Days Mount Meru Climb combining lush forest trails, wildlife sightings, dramatic crater scenery, and an unforgettable sunrise at Socialist Peak. This shorter itinerary is well suited for trekkers looking for a compact mountain experience or those seeking a quick acclimatization hike before taking on Mount Kilimanjaro.",
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
                        ['day' => 1, 'title' => 'Arrive in Tanzania', 'description' => "Upon arrival at Kilimanjaro International Airport, you will be welcomed by our team and transferred to your hotel in Moshi. Later, you will meet your mountain guide for a detailed briefing about the upcoming trek, followed by an equipment check to ensure you have all the essential gear. Any missing equipment can be rented before the climb.\n\nIn the evening, you will enjoy dinner and relax at the hotel as you prepare for your Mount Meru adventure. Overnight at your hotel in Moshi.", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast']],
                        ['day' => 2, 'title' => 'Momella Gate (1500m) to Miriakamba Hut (2500m)', 'description' => "After breakfast, you will leave your hotel at around 0800hrs and drive to Momella Gate, the starting point of your Mount Meru adventure. The journey takes approximately one and a half hours. Once registration and park formalities are completed, you will begin hiking under the guidance of an armed ranger. The trail passes through beautiful landscapes with views of the Momella Lakes and, on clear days, distant views of Mount Kilimanjaro. Wildlife such as giraffes, buffaloes, warthogs, and bushbucks may be spotted along the way. You will continue through the scenic surroundings until reaching Miriakamba Hut, where you will have dinner and spend the night.\n\nDistance covered: 6km / 3.5mi | Approx. time taken: 4 – 5 hours", 'accommodation' => 'Miriakamba Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Miriakamba Hut (2500m) to Saddle Hut (3500m)', 'description' => "TToday you will continue climbing through the forest along a steadily rising trail toward Saddle Hut. As you gain elevation, the vegetation begins to change and the views become more impressive, with opportunities to see Meru Crater, the Ash Cone, and Little Meru. Keep an eye out for wildlife and colorful mountain vegetation along the trail, including possible sightings of buffaloes and black-and-white colobus monkeys. After arriving at Saddle Hut, you will have some time to rest before taking a short acclimatization hike to Little Meru (3810m). You will then return to Saddle Hut for dinner and overnight.\n\nDistance covered: 6.5km / 4mi | Approx. time taken: 3 – 4 hours", 'accommodation' => 'Saddle Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Saddle Hut - Summit - Miriakamba Hut - Momella Gate', 'description' => "You will begin the summit attempt early at around 1:30 a.m., climbing steadily toward Rhino Point (3,800 m) before continuing to Cobra Point (4,350 m). The trail becomes more challenging as you approach the summit, but the effort is rewarded with a spectacular sunrise from Socialist Peak (4,566 m). On a clear morning, you may also enjoy views of Mount Kilimanjaro rising above the clouds. The final section follows a dramatic narrow ridge between the crater’s steep inner cliffs and the outer slopes, creating an unforgettable summit experience.\n\nAfter spending some time at the summit, you will begin the descent and return to Saddle Hut for a short rest and brunch. You will then continue downhill to Miriakamba Hut before completing the final section to Momella Gate. Your transfer vehicle will be waiting at the gate to take you back to your accommodation in Moshi.\n\nApprox. time taken: 13-14 hours | Distance covered: 28km", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast', 'Lunch']],
                        ['day' => 5, 'title' => 'Depart Tanzania', 'description' => "After completing your Mount Meru adventure, you will be transferred to Kilimanjaro International Airport for your onward flight, according to your travel arrangements.\n\nIf you wish to extend your stay in Tanzania, we can arrange a cultural experience, a relaxing Zanzibar beach getaway, or an exciting wildlife safari. You can explore iconic destinations such as Tarangire National Park, the Ngorongoro Crater, or Serengeti National Park.", 'accommodation' => 'Departure day', 'meals' => ['Breakfast']],
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
                    'overview' => "Trip outline: Day 1: arrival day · Days 2–7: to be spent on the mountain · Day 8: departure day.\n\nThe Umbwe Route is one of the shortest, steepest, and most direct routes to the summit of Mount Kilimanjaro. It is known for its demanding terrain and rapid elevation gain, making it one of the more challenging routes on the mountain. Because the ascent is so quick, there is limited time for gradual altitude acclimatization, which can make the climb particularly demanding. The route usually takes a minimum of 6 days, although a 7-day itinerary provides more time for acclimatization and preparation for the summit. Due to its steep profile and challenging conditions, Umbwe is best suited to experienced and physically strong trekkers who are comfortable with high-altitude hiking and demanding mountain terrain.\n\nDespite being less crowded, the Umbwe Route offers a more rugged and adventurous trekking experience, with steep forest trails and dramatic mountain scenery as the route progresses toward the southern side of Kilimanjaro. Trekkers should be prepared for a challenging ascent and changing conditions throughout the journey. For those with suitable experience, fitness, and confidence at altitude, Umbwe provides a demanding and memorable approach to the summit of Mount Kilimanjaro.",
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
                        ['day' => 1, 'title' => 'Arrive in Tanzania', 'description' => "Upon arrival at Kilimanjaro International Airport, you will be welcomed by our team and transferred to your hotel in Moshi. Later, you will meet your mountain guide for a detailed briefing about the upcoming trek, followed by an equipment check to ensure you have all the essential gear. Any missing equipment can be rented before the climb.\n\nIn the evening, you will enjoy dinner and relax at the hotel as you prepare for your Kilimanjaro adventure. Overnight at your hotel in Moshi.", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast']],
                        ['day' => 2, 'title' => 'Umbwe Gate (1,800m/5,905ft) to Cave Bivouac Camp (2,850m/9,350ft)', 'description' => "After breakfast, you will depart from Moshi at around 8:00 AM and drive to Umbwe Gate, where you will meet your mountain crew of guides, porters, and cooks. While the climbing permits and registration are completed, the team will organize the equipment and supplies for the trek. Once ready, you will begin the climb toward Cave Bivouac Camp, following a steep trail through the lush rainforest. The path can be slippery in certain sections, so careful walking is required. As you gain altitude, the dense forest gradually opens into an area of heather, tall grasses, and wildflowers. Your crew will move ahead to prepare the campsite before your arrival.\n\nElevation Gain: 1,050 meters, 3,445 feet | Hiking time: 4 to 6 hours", 'accommodation' => 'Cave Bivouac Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Cave Bivouac (2,850m/9,350ft) to Barranco Camp (3,950m/12,960ft)', 'description' => "After breakfast, you will continue along the mountain ridge, gradually leaving the forest behind as the trail enters the open moorland zone. The route continues upward toward Barranco Camp, surrounded by spectacular mountain scenery and unique vegetation. The campsite is known for its giant senecios and lobelias and is located in a scenic valley, where the surrounding cliffs create an impressive atmosphere. You will arrive at camp with time to rest and enjoy the beautiful surroundings.\n\nTotal Elevation Gain: 1,100 meters, 3,610 feet | Hiking time: 5 to 7 hours", 'accommodation' => 'Barranco Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Barranco Camp (3,950m/12,960ft) to Karanga Valley (4,200m/13,780ft)', 'description' => "After breakfast, you will leave Barranco Camp and begin the climb toward Karanga Valley. The day starts with the famous Barranco Wall, which takes approximately 1.5 hrs to climb. Some sections are steep and may require the use of your hands, making this the most challenging part of the day. Once you reach the top, the trail becomes more moderate before descending briefly into the green Karanga River Valley. The surrounding scenery provides excellent views and a rewarding experience as you approach the next campsite.\n\nElevation Gain: 250 meters, 820 feet | Distance: 7 Kilometers | Hiking time: 3 to 5 hours", 'accommodation' => 'Karanga Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Karanga Valley (4,200m/13,780ft) to Barafu Camp (4,600m/15,100ft)', 'description' => "After breakfast, you will continue your ascent toward Barafu Camp, passing through the high-altitude alpine desert. Along the route, you will have views of several glaciers on Kibo and pass the junction connecting the Mweka descent route with the Machame trail. The landscape becomes increasingly barren as vegetation becomes scarce, but the views of Kibo and Mawenzi Peaks remain spectacular. Once you reach Barafu Camp, you will have time to eat, rest, and prepare for the summit attempt. Dinner will be served early before you get some sleep ahead of the midnight ascent.\n\nElevation Gain: 400 meters, 1,320 feet | Hiking time: 3 to 5 hours", 'accommodation' => 'Barafu Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Barafu Camp (4,600m/15,100ft) to Uhuru Peak (5,895m/19,340ft) to Mweka Camp (3,100m/10,170ft)', 'description' => "Your summit attempt begins around midnight, when you will leave Barafu Camp and start climbing under the light of your headlamp. The ascent toward the crater rim is steep and demanding, making this the most challenging section of the trek. After several hours, you will reach Stella Point, located on the crater rim. From here, the trail becomes more gradual as you continue for approximately one hour toward Uhuru Peak (5,895m/19,340ft). At the summit, you will have time to take photos, appreciate the spectacular views, and celebrate your achievement before beginning the descent.\n\nYou will then descend toward Barafu Camp, where breakfast and a short rest will be provided. The journey continues downhill toward Mweka Camp, passing through changing mountain landscapes with views of glaciers, clouds, and the surrounding slopes. After a long and demanding day, you will arrive at camp for dinner and overnight rest.\n\nElevation Gain: 1,295 meters, 4,240 feet | Elevation Loss: 2,795 meters, 9,170 feet | Hiking time: 6 hours to the rim, 1 hour to Uhuru, 3 to 4 hours back to Barafu, 4 hours to Mweka", 'accommodation' => 'Mweka Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 7, 'title' => 'Mweka Camp (3,100m/10,170ft) to Mweka Gate (1,500m/4,920ft)', 'description' => "After breakfast, you will begin the final descent from Mweka Camp through the beautiful montane rainforest toward Mweka Gate. The trail gradually loses elevation as you make your way through the lush vegetation, although some sections can become slippery, especially after rainfall. Upon reaching the gate, you will complete the necessary park formalities and meet your vehicle for the transfer back to Moshi. This marks the end of your Umbwe Route adventure and a well-earned opportunity to relax after the climb.\n\nElevation Loss: 1,600 meters, 5,250 feet | Hiking time: 4 hours", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast', 'Lunch']],
                        ['day' => 8, 'title' => 'Depart Tanzania', 'description' => "After completing your Kilimanjaro adventure, you will be transferred to Kilimanjaro International Airport for your onward flight, according to your travel arrangements.\n\nIf you wish to extend your stay in Tanzania, we can arrange a cultural experience, a relaxing Zanzibar beach getaway, or an exciting wildlife safari. You can explore iconic destinations such as Tarangire National Park, the Ngorongoro Crater, or Serengeti National Park.", 'accommodation' => 'Departure day', 'meals' => ['Breakfast']],
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
                    'overview' => "Trip outline: Day 1: arrival day · Days 2–7: to be spent on the mountain · Day 8: departure day.\n\nThe Umbwe Route is one of the shortest, steepest, and most direct routes to the summit of Mount Kilimanjaro. It is known for its demanding terrain and rapid elevation gain, making it one of the more challenging routes on the mountain. Because the ascent is so quick, there is limited time for gradual altitude acclimatization, which can make the climb particularly demanding. The route usually takes a minimum of 6 days, although a 7-day itinerary provides more time for acclimatization and preparation for the summit. Due to its steep profile and challenging conditions, Umbwe is best suited to experienced and physically strong trekkers who are comfortable with high-altitude hiking and demanding mountain terrain.\n\nDespite being less crowded, the Umbwe Route offers a more rugged and adventurous trekking experience, with steep forest trails and dramatic mountain scenery as the route progresses toward the southern side of Kilimanjaro. Trekkers should be prepared for a challenging ascent and changing conditions throughout the journey. For those with suitable experience, fitness, and confidence at altitude, Umbwe provides a demanding and memorable approach to the summit of Mount Kilimanjaro.",
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
                        ['day' => 1, 'title' => 'Arrive in Tanzania', 'description' => "Upon arrival at Kilimanjaro International Airport, you will be welcomed by our team and transferred to your hotel in Moshi. Later, you will meet your mountain guide for a detailed briefing about the upcoming trek, followed by an equipment check to ensure you have all the essential gear. Any missing equipment can be rented before the climb.\n\nIn the evening, you will enjoy dinner and relax at the hotel as you prepare for your Kilimanjaro adventure. Overnight at your hotel in Moshi.", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast']],
                        ['day' => 2, 'title' => 'Umbwe Gate (1,800m/5,905ft) to Cave Bivouac Camp (2,850m/9,350ft)', 'description' => "After breakfast, you will depart from Moshi at around 8:00 AM and drive to Umbwe Gate, where you will meet your mountain crew of guides, porters, and cooks. While the climbing permits and registration are completed, the team will organize the equipment and supplies for the trek. Once ready, you will begin the climb toward Cave Bivouac Camp, following a steep trail through the lush rainforest. The path can be slippery in certain sections, so careful walking is required. As you gain altitude, the dense forest gradually opens into an area of heather, tall grasses, and wildflowers. Your crew will move ahead to prepare the campsite before your arrival.\n\nElevation Gain: 1,050 meters, 3,445 feet | Hiking time: 4 to 6 hours", 'accommodation' => 'Cave Bivouac Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Cave Bivouac (2,850m/9,350ft) to Barranco Camp (3,950m/12,960ft)', 'description' => "After breakfast, you will continue along the mountain ridge, gradually leaving the forest behind as the trail enters the open moorland zone. The route continues upward toward Barranco Camp, surrounded by spectacular mountain scenery and unique vegetation. The campsite is known for its giant senecios and lobelias and is located in a scenic valley, where the surrounding cliffs create an impressive atmosphere. You will arrive at camp with time to rest and enjoy the beautiful surroundings.\n\nTotal Elevation Gain: 1,100 meters, 3,610 feet | Hiking time: 5 to 7 hours", 'accommodation' => 'Barranco Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Barranco Camp (3,950m/12,960ft) to Karanga Valley (4,200m/13,780ft)', 'description' => "After breakfast, you will leave Barranco Camp and begin the climb toward Karanga Valley. The day starts with the famous Barranco Wall, which takes approximately 1.5 hrs to climb. Some sections are steep and may require the use of your hands, making this the most challenging part of the day. Once you reach the top, the trail becomes more moderate before descending briefly into the green Karanga River Valley. The surrounding scenery provides excellent views and a rewarding experience as you approach the next campsite.\n\nElevation Gain: 250 meters, 820 feet | Distance: 7 Kilometers | Hiking time: 3 to 5 hours", 'accommodation' => 'Karanga Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Karanga Valley (4,200m/13,780ft) to Barafu Camp (4,600m/15,100ft)', 'description' => "After breakfast, you will continue your ascent toward Barafu Camp, passing through the high-altitude alpine desert. Along the route, you will have views of several glaciers on Kibo and pass the junction connecting the Mweka descent route with the Machame trail. The landscape becomes increasingly barren as vegetation becomes scarce, but the views of Kibo and Mawenzi Peaks remain spectacular. Once you reach Barafu Camp, you will have time to eat, rest, and prepare for the summit attempt. Dinner will be served early before you get some sleep ahead of the midnight ascent.\n\nElevation Gain: 400 meters, 1,320 feet | Hiking time: 3 to 5 hours", 'accommodation' => 'Barafu Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Barafu Camp (4,600m/15,100ft) to Uhuru Peak (5,895m/19,340ft) to Mweka Camp (3,100m/10,170ft)', 'description' => "Your summit attempt begins around midnight, when you will leave Barafu Camp and start climbing under the light of your headlamp. The ascent toward the crater rim is steep and demanding, making this the most challenging section of the trek. After several hours, you will reach Stella Point, located on the crater rim. From here, the trail becomes more gradual as you continue for approximately one hour toward Uhuru Peak (5,895m/19,340ft). At the summit, you will have time to take photos, appreciate the spectacular views, and celebrate your achievement before beginning the descent.\n\nYou will then descend toward Barafu Camp, where breakfast and a short rest will be provided. The journey continues downhill toward Mweka Camp, passing through changing mountain landscapes with views of glaciers, clouds, and the surrounding slopes. After a long and demanding day, you will arrive at camp for dinner and overnight rest.\n\nElevation Gain: 1,295 meters, 4,240 feet | Elevation Loss: 2,795 meters, 9,170 feet | Hiking time: 6 hours to the rim, 1 hour to Uhuru, 3 to 4 hours back to Barafu, 4 hours to Mweka", 'accommodation' => 'Mweka Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 7, 'title' => 'Mweka Camp (3,100m/10,170ft) to Mweka Gate (1,500m/4,920ft)', 'description' => "After breakfast, you will begin the final descent from Mweka Camp through the beautiful montane rainforest toward Mweka Gate. The trail gradually loses elevation as you make your way through the lush vegetation, although some sections can become slippery, especially after rainfall. Upon reaching the gate, you will complete the necessary park formalities and meet your vehicle for the transfer back to Moshi. This marks the end of your Umbwe Route adventure and a well-earned opportunity to relax after the climb.\n\nElevation Loss: 1,600 meters, 5,250 feet | Hiking time: 4 hours", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast', 'Lunch']],
                        ['day' => 8, 'title' => 'Depart Tanzania', 'description' => "After completing your Kilimanjaro adventure, you will be transferred to Kilimanjaro International Airport for your onward flight, according to your travel arrangements.\n\nIf you wish to extend your stay in Tanzania, we can arrange a cultural experience, a relaxing Zanzibar beach getaway, or an exciting wildlife safari. You can explore iconic destinations such as Tarangire National Park, the Ngorongoro Crater, or Serengeti National Park.", 'accommodation' => 'Departure day', 'meals' => ['Breakfast']],
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
                    'overview' => "Trip outline: Day 1: arrival day · Days 2–8: to be spent on the mountain · Day 9: departure day.\n\nThe Machame Route, also known as the “Whiskey Route,” is one of the most popular and scenic trails on Mount Kilimanjaro. It is well known for its beautiful landscapes, varied terrain, and adventurous hiking experience. The trek begins at Machame Gate on the southern side of Mount Kilimanjaro, where the trail leads through the lush tropical rainforest. As you gain altitude, the landscape gradually shifts to open moorland, then to the dramatic alpine desert and high-altitude volcanic terrain.\n\nOne of the highlights of the route is the Shira Plateau, where trekkers enjoy expansive views of the mountain and surrounding landscapes. The trail then follows the southern circuit, providing different perspectives of Kilimanjaro while allowing climbers to gradually acclimatize to the increasing altitude. Along the way, trekkers encounter the impressive Lava Tower, the famous Barranco Wall, and unique high-altitude vegetation, including the distinctive giant senecio plants. The final approach to the summit is made from the east, leading to Uhuru Peak, the highest point in Africa. After reaching the summit, the descent follows the Mweka Route, bringing trekkers back through the mountain's diverse landscapes.\n\nThe Machame Route can be completed in 6 or 7 days on the mountain. While the 6-day option is suitable for those with limited time and good hiking experience, the 7-day itinerary provides a more gradual acclimatization schedule, giving trekkers more time to adjust to the altitude.",
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
                        ['day' => 1, 'title' => 'Arrive in Tanzania at Kilimanjaro International Airport (JRO)', 'description' => "Upon arrival at Kilimanjaro International Airport, you will be met by our representative and transferred to your hotel in Moshi. Later, you will meet your mountain guide for a detailed briefing about the upcoming trek. The guide will also conduct an equipment check to ensure you have all the essential mountain gear, with any missing items available for rent before the climb.", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast']],
                        ['day' => 2, 'title' => 'Moshi to Machame Gate (1790m) to Machame Camp (3010m)', 'description' => "After breakfast, you will be picked up from your hotel at around 8:00 AM and driven for approximately 1 hr to Machame Gate. Along the way, you will pass through beautiful coffee and banana plantations cultivated by the Chagga people. At the gate, you will complete the necessary park registration and formalities before meeting the porters and beginning your Kilimanjaro trek.\n\nThe hike starts with a steady ascent through the magnificent tropical rainforest. Some sections of the trail can be wet and muddy underfoot, especially after rain. You will enjoy a picnic lunch along the way before continuing to Machame Camp, where you will have dinner and spend the night.\n\nDistance covered: 10.8km / 6.7mi | Approx. time taken: 6 hours", 'accommodation' => 'Machame Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Machame Camp (3010m) to Shira Camp (3845m)', 'description' => "You will start hiking at around 8:00 AM, continuing through the forest for about 1 hr before reaching the upper forest and entering the moorland zone. After another 1 hr of gradual hiking, you will stop for a short lunch break before continuing along a rocky ridge toward the Shira Plateau.\n\nAs you reach the Shira Plateau, you will enjoy spectacular views of Mount Kilimanjaro and, on a clear day, Mount Meru rising in the distance above Arusha. You may also have views toward the Western Breach and its impressive glaciers. Overnight at Shira Campsite.\n\nDistance covered: 5.4km / 3.4mi | Approx. time taken: 5 hours", 'accommodation' => 'Shira Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Shira Camp (3845m) to Barranco Camp (3960m)', 'description' => "After breakfast, you will trek across the high moorland and alpine desert landscape toward Lava Tower at 4,600 m. This section takes you across the southwestern slopes of Mount Kilimanjaro, passing beneath Lava Tower and the Western Breach. Hiking to a higher altitude before descending helps your body acclimatize following the “walk high, sleep low” principle.\n\nFrom Lava Tower, you will descend for about 3 hrs to Barranco Camp at 3,960 m. Along the way, you will enjoy spectacular views of the Western Breach and the impressive Barranco Wall, with plenty of opportunities for photos. Barranco Camp is beautifully located in a valley beneath the wall, offering stunning sunset views before dinner. Overnight at Barranco Camp.\n\nDistance covered: 10.8km / 6.7mi | Approx. time taken: 8 hrs", 'accommodation' => 'Barranco Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Barranco Camp (3960m) to Karanga Camp (3963m)', 'description' => "After breakfast, you will descend into the Great Barranco before beginning the ascent of the impressive Barranco Wall. Although the climb involves scrambling over rocks and looks challenging, it is not technical, though it can be long and tiring. From the top, you will continue beneath the Heim and Kersten Glaciers before descending into the beautiful Karanga Valley. You will then make a final steep ascent to Karanga Camp (3,963 m).\n\nAfter arriving at camp, you will enjoy a hot lunch and have time to relax. For those feeling strong, an optional afternoon acclimatization hike will take you to around 4,200 m before descending back to camp. The afternoon is mainly dedicated to rest and acclimatization as you prepare for the upcoming summit attempt.\n\nDistance covered: 5.5km / 3.4mi | Approx. time taken: 5 hours", 'accommodation' => 'Karanga Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Karanga Camp (3963m) to Barafu Camp (4640m)', 'description' => "After breakfast, you will begin the trek to Barafu Camp (4,640 m), following a steep and challenging trail across a barren alpine desert with little to no vegetation. Along the way, you will enjoy impressive views of the Kibo and Mawenzi peaks. Due to the increasing altitude, the hike can be demanding, so a steady pace and proper hydration are important.\n\nUpon reaching Barafu Camp, you will have lunch followed by a long period of rest as you prepare for the summit attempt. An early dinner will be served, after which you will try to get some sleep. You will wake up around midnight to begin the final ascent to Uhuru Peak.\n\nDistance covered: 3km / 1.9mi | Approx. time taken: 3 hours", 'accommodation' => 'Barafu Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 7, 'title' => 'Barafu Camp (4640m) to Uhuru Peak (5895m) & down to Millennium Camp (3790m)', 'description' => "You will wake up at around 11:30 PM, and after a light tea and some cookies, you will begin your summit attempt around midnight. The climb starts with a steep ascent over scree toward the summit glaciers and takes approximately 4–5 hrs. As you gain altitude, the views become increasingly spectacular. You will aim to reach Stella Point (5,756 m) around sunrise, where you can enjoy breathtaking views of the crater, ice cliffs, and Mawenzi Peak.\n\nFrom Stella Point, you will continue for about 1 hr along the crater rim to Uhuru Peak (5,895 m), the highest point in Africa. After celebrating and taking photos at the summit, you will begin your descent back to Barafu Camp for lunch and a short rest. You will then continue downhill through the alpine desert to Millennium Camp (3,790 m), where you will have dinner and spend the night.\n\nDistance covered: 13.4km / 8.3mi | Approx. time taken: 12 – 15 hours", 'accommodation' => 'Millennium Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 8, 'title' => 'Trek Millennium Camp (3790m) to Mweka Gate (1630m) to Moshi', 'description' => "After breakfast, you will begin your final descent from Millennium Camp through the lush rainforest toward Mweka Gate. The hike takes a couple of hours, and upon arrival, you will complete the necessary park formalities and receive your Kilimanjaro summit certificate as a memorable achievement.\n\nYou will then be met by a private vehicle and transferred back to your hotel in Moshi. After the trek, you can enjoy a well-deserved hot shower, relax, and celebrate the successful completion of your Kilimanjaro adventure.\n\nDistance covered: 12.1km / 7.5mi | Approx. time taken: 6 hours", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast', 'Lunch']],
                        ['day' => 9, 'title' => 'Depart Tanzania', 'description' => "Later in the evening or the following day, you will be transferred to Kilimanjaro International Airport for your home-bound flight. If you have more time, we can also arrange an affordable safari experience to some of Tanzania’s renowned wildlife destinations, including Tarangire National Park, the Ngorongoro Crater, or Serengeti National Park.", 'accommodation' => 'Departure day', 'meals' => ['Breakfast']],
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
                    'overview' => "Trip outline: Day 1: arrival day · Days 2–8: to be spent on the mountain · Day 9: departure day.\n\nThe Machame Route, also known as the “Whiskey Route,” is one of the most popular and scenic trails on Mount Kilimanjaro. It is well known for its beautiful landscapes, varied terrain, and adventurous hiking experience. The trek begins at Machame Gate on the southern side of Mount Kilimanjaro, where the trail leads through the lush tropical rainforest. As you gain altitude, the landscape gradually shifts to open moorland, then to the dramatic alpine desert and high-altitude volcanic terrain.\n\nOne of the highlights of the route is the Shira Plateau, where trekkers enjoy expansive views of the mountain and surrounding landscapes. The trail then follows the southern circuit, providing different perspectives of Kilimanjaro while allowing climbers to gradually acclimatize to the increasing altitude. Along the way, trekkers encounter the impressive Lava Tower, the famous Barranco Wall, and unique high-altitude vegetation, including the distinctive giant senecio plants. The final approach to the summit is made from the east, leading to Uhuru Peak, the highest point in Africa. After reaching the summit, the descent follows the Mweka Route, bringing trekkers back through the mountain's diverse landscapes.\n\nThe Machame Route can be completed in 6 or 7 days on the mountain. While the 6-day option is suitable for those with limited time and good hiking experience, the 7-day itinerary provides a more gradual acclimatization schedule, giving trekkers more time to adjust to the altitude.",
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
                        ['day' => 1, 'title' => 'Arrive in Tanzania at Kilimanjaro International Airport (JRO)', 'description' => "Upon arrival at Kilimanjaro International Airport, you will be met by our representative and transferred to your hotel in Moshi. Later, you will meet your mountain guide for a detailed briefing about the upcoming trek. The guide will also conduct an equipment check to ensure you have all the essential mountain gear, with any missing items available for rent before the climb.", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast']],
                        ['day' => 2, 'title' => 'Moshi to Machame Gate (1790m) to Machame Camp (3010m)', 'description' => "After breakfast, you will be picked up from your hotel at around 8:00 AM and driven for approximately 1 hr to Machame Gate. Along the way, you will pass through beautiful coffee and banana plantations cultivated by the Chagga people. At the gate, you will complete the necessary park registration and formalities before meeting the porters and beginning your Kilimanjaro trek.\n\nThe hike starts with a steady ascent through the magnificent tropical rainforest. Some sections of the trail can be wet and muddy underfoot, especially after rain. You will enjoy a picnic lunch along the way before continuing to Machame Camp, where you will have dinner and spend the night.\n\nDistance covered: 10.8km / 6.7mi | Approx. time taken: 6 hours", 'accommodation' => 'Machame Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Machame Camp (3010m) to Shira Camp (3845m)', 'description' => "You will start hiking at around 8:00 AM, continuing through the forest for about 1 hr before reaching the upper forest and entering the moorland zone. After another 1 hr of gradual hiking, you will stop for a short lunch break before continuing along a rocky ridge toward the Shira Plateau.\n\nAs you reach the Shira Plateau, you will enjoy spectacular views of Mount Kilimanjaro and, on a clear day, Mount Meru rising in the distance above Arusha. You may also have views toward the Western Breach and its impressive glaciers. Overnight at Shira Campsite.\n\nDistance covered: 5.4km / 3.4mi | Approx. time taken: 5 hours", 'accommodation' => 'Shira Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Shira Camp (3845m) to Barranco Camp (3960m)', 'description' => "After breakfast, you will trek across the high moorland and alpine desert landscape toward Lava Tower at 4,600 m. This section takes you across the southwestern slopes of Mount Kilimanjaro, passing beneath Lava Tower and the Western Breach. Hiking to a higher altitude before descending helps your body acclimatize following the “walk high, sleep low” principle.\n\nFrom Lava Tower, you will descend for about 3 hrs to Barranco Camp at 3,960 m. Along the way, you will enjoy spectacular views of the Western Breach and the impressive Barranco Wall, with plenty of opportunities for photos. Barranco Camp is beautifully located in a valley beneath the wall, offering stunning sunset views before dinner. Overnight at Barranco Camp.\n\nDistance covered: 10.8km / 6.7mi | Approx. time taken: 8 hrs", 'accommodation' => 'Barranco Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Barranco Camp (3960m) to Karanga Camp (3963m)', 'description' => "After breakfast, you will descend into the Great Barranco before beginning the ascent of the impressive Barranco Wall. Although the climb involves scrambling over rocks and looks challenging, it is not technical, though it can be long and tiring. From the top, you will continue beneath the Heim and Kersten Glaciers before descending into the beautiful Karanga Valley. You will then make a final steep ascent to Karanga Camp (3,963 m).\n\nAfter arriving at camp, you will enjoy a hot lunch and have time to relax. For those feeling strong, an optional afternoon acclimatization hike will take you to around 4,200 m before descending back to camp. The afternoon is mainly dedicated to rest and acclimatization as you prepare for the upcoming summit attempt.\n\nDistance covered: 5.5km / 3.4mi | Approx. time taken: 5 hours", 'accommodation' => 'Karanga Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Karanga Camp (3963m) to Barafu Camp (4640m)', 'description' => "After breakfast, you will begin the trek to Barafu Camp (4,640 m), following a steep and challenging trail across a barren alpine desert with little to no vegetation. Along the way, you will enjoy impressive views of the Kibo and Mawenzi peaks. Due to the increasing altitude, the hike can be demanding, so a steady pace and proper hydration are important.\n\nUpon reaching Barafu Camp, you will have lunch followed by a long period of rest as you prepare for the summit attempt. An early dinner will be served, after which you will try to get some sleep. You will wake up around midnight to begin the final ascent to Uhuru Peak.\n\nDistance covered: 3km / 1.9mi | Approx. time taken: 3 hours", 'accommodation' => 'Barafu Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 7, 'title' => 'Barafu Camp (4640m) to Uhuru Peak (5895m) & down to Millennium Camp (3790m)', 'description' => "You will wake up at around 11:30 PM, and after a light tea and some cookies, you will begin your summit attempt around midnight. The climb starts with a steep ascent over scree toward the summit glaciers and takes approximately 4–5 hrs. As you gain altitude, the views become increasingly spectacular. You will aim to reach Stella Point (5,756 m) around sunrise, where you can enjoy breathtaking views of the crater, ice cliffs, and Mawenzi Peak.\n\nFrom Stella Point, you will continue for about 1 hr along the crater rim to Uhuru Peak (5,895 m), the highest point in Africa. After celebrating and taking photos at the summit, you will begin your descent back to Barafu Camp for lunch and a short rest. You will then continue downhill through the alpine desert to Millennium Camp (3,790 m), where you will have dinner and spend the night.\n\nDistance covered: 13.4km / 8.3mi | Approx. time taken: 12 – 15 hours", 'accommodation' => 'Millennium Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 8, 'title' => 'Trek Millennium Camp (3790m) to Mweka Gate (1630m) to Moshi', 'description' => "After breakfast, you will begin your final descent from Millennium Camp through the lush rainforest toward Mweka Gate. The hike takes a couple of hours, and upon arrival, you will complete the necessary park formalities and receive your Kilimanjaro summit certificate as a memorable achievement.\n\nYou will then be met by a private vehicle and transferred back to your hotel in Moshi. After the trek, you can enjoy a well-deserved hot shower, relax, and celebrate the successful completion of your Kilimanjaro adventure.\n\nDistance covered: 12.1km / 7.5mi | Approx. time taken: 6 hours", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast', 'Lunch']],
                        ['day' => 9, 'title' => 'Depart Tanzania', 'description' => "Later in the evening or the following day, you will be transferred to Kilimanjaro International Airport for your home-bound flight. If you have more time, we can also arrange an affordable safari experience to some of Tanzania’s renowned wildlife destinations, including Tarangire National Park, the Ngorongoro Crater, or Serengeti National Park.", 'accommodation' => 'Departure day', 'meals' => ['Breakfast']],
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
                        ['day' => 5, 'title' => 'Barafu Camp (4637m) to Uhuru Peak (5895m) then down to Millennium Camp (3790m)', 'description' => 'We wake very early, around 00:00, for tea and cookies. We climb scree for 4 to 5 hours but gain incredible height over a short distance. The view is spectacular. We should be on the crater rim at Stella Point (5756m) as the first rays of sun hit us. Then it takes us 1 hour from Stella Point to Uhuru Peak (5895m), where you take photos for a few minutes before descending to Barafu Camp for lunch and then walking down to Millennium Camp (3790m) for dinner and overnight.', 'accommodation' => 'Millennium camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Millennium Camp (3790m) to Mweka Gate (1630m)', 'description' => 'After breakfast you continue the final descent from Millennium Campsite to Mweka Gate, where you collect your certificates. After completing park formalities and receiving the certificates, a private car takes you back to your hotel where you can have a warm shower and celebrate the achievement.', 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
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
                    'overview' => "Trip outline: Day 1: arrival day · Days 2–10: to be spent on the mountain · Day 11: departure day.\n\nThe Northern Circuit Route is the longest and one of the newest routes on Mount Kilimanjaro. It is known for its excellent acclimatization profile, breathtaking scenery, and quieter trails along the northern slopes of the mountain.\n\nThe route begins on the western side of Kilimanjaro, following the same initial trail as the Lemosho Route before crossing the beautiful Shira Plateau. From there, it continues around the quieter northern slopes, offering a more remote wilderness experience and spectacular views across the northern plains towards Kenya and Tanzania.\n\nThe extended 9-day itinerary allows climbers to spend more time on the mountain and adjust gradually to the increasing altitude. The route passes through several of Kilimanjaro's climatic zones, from rainforest and moorland to alpine desert and the high-altitude summit zone. With fewer trekkers along the northern section, it also provides a peaceful and immersive mountain experience.\n\nThe Northern Circuit is ideal for climbers who enjoy longer trekking adventures, quieter trails, diverse scenery, and a gradual approach to the summit. No technical climbing skills are required, but good physical preparation and determination are essential.",
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
                        ['day' => 1, 'title' => 'Arrive in Tanzania', 'description' => "Upon arrival at Kilimanjaro International Airport, you will be welcomed by our team and transferred to your hotel in Moshi. Later, you will meet your mountain guide for a detailed briefing about the upcoming trek, followed by an equipment check to ensure you have all the essential gear. Any missing equipment can be rented before the climb.\n\nIn the evening, you will enjoy dinner and relax at the hotel as you prepare for your Kilimanjaro adventure. Overnight at your hotel in Moshi.", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast']],
                        ['day' => 2, 'title' => 'Londorossi Gate (2,100 m) – Mti Mkubwa Camp (2,650 m)', 'description' => "Your Northern Circuit adventure begins with a drive of approximately 2 hrs from Moshi to Londorossi Gate (2,100 m) on the western side of Mount Kilimanjaro. After completing park registration and entry formalities, you will continue by vehicle to the trailhead, where the trek begins through the lush rainforest. Along the way, you may be lucky enough to spot wildlife such as elephants, giraffes, or buffaloes in the forest.\n\nThe trail gradually ascends through the peaceful rainforest toward Mti Mkubwa Camp (2,650 m). After reaching camp, you will have time to relax, enjoy dinner, and prepare for the days ahead. Overnight at Mti Mkubwa Camp.\n\nDistance: 7 km | Hiking time: 3–4 hours | Habitat: Rainforest", 'accommodation' => 'Mti Mkubwa Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Mti Mkubwa Camp (2,650 m) – Shira I Camp (3,600 m)', 'description' => "After breakfast, you will continue trekking through the final section of the rainforest for about 1 hr before gradually entering the low alpine moorland zone. As you gain altitude, the vegetation becomes more sparse and the landscape opens up, offering wider views of the surrounding mountain scenery.\n\nThe trail continues steadily toward the Shira Plateau, with its beautiful high-altitude landscape and volcanic formations. This is a relatively short and gentle trekking day, ending at Shira I Camp (3,600 m), where you will have dinner and spend the night.\n\nDistance: 8 km | Hiking time: About 5 hours | Habitat: Rainforest / Moorland", 'accommodation' => 'Shira I Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Shira I Camp (3,600 m) – Shira II Camp (3,900 m)', 'description' => "Today you will continue across the beautiful Shira Plateau, trekking from Shira I Camp to Shira II Camp. The route is relatively short and gradual, giving you plenty of time to enjoy the spectacular high-altitude scenery while allowing your body to continue adapting to the increasing elevation.\n\nYou will follow the trail eastward along the Shira Plateau ridge, with opportunities to admire panoramic views of the surrounding landscape. After reaching Shira II Camp, you will enjoy lunch, followed by dinner and an overnight stay at camp.\n\nDistance: 10 km | Hiking time: About 3 hours | Habitat: Low Alpine Zone", 'accommodation' => 'Shira II Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Shira II Camp (3,900 m) – Moir Camp (4,200 m)', 'description' => "Today, you will leave Shira II Camp and continue across the northern side of the Shira Plateau toward Moir Hut Camp. This is a relatively short trekking day, designed to support acclimatization as you gradually gain altitude while taking in the spectacular volcanic scenery surrounding Mount Kilimanjaro.\n\nThe trail takes you toward the Lava Tower area, providing an opportunity to hike at a higher elevation before descending to Moir Hut Camp. After reaching camp, you will have lunch and time to relax, allowing your body to adjust to the altitude. Dinner and overnight at Moir Hut Camp.\n\nDistance: 4 km | Hiking time: About 2 hours | Habitat: Low Alpine Zone", 'accommodation' => 'Moir Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Moir Camp (4,200 m) – Pofu Camp (4,000 m)', 'description' => "Today, you will begin with a moderately steep climb out of Moir Valley before joining the trail along the northern slopes of Kibo. For those who are feeling strong, an optional short detour to Little Lent Hill (4,375 m) can be taken before rejoining the main trail.\n\nThe route then follows a series of gentle ascents and descents through the remote northern landscape, offering spectacular views across the plains toward the Kenya–Tanzania border. You will continue to Pofu (Buffalo) Camp (4,000 m), arriving around midday for lunch, followed by time to relax. Dinner and overnight at Pofu Camp.\n\nDistance: 10 km | Hiking time: 5–7 hours | Habitat: High Alpine Zone", 'accommodation' => 'Pofu Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 7, 'title' => 'Pofu Camp (4,000 m) – Third Cave Camp (3,800 m)', 'description' => "After breakfast, you will begin the day with a steady climb over Buffalo Ridge before continuing eastward along the northern slopes of Mount Kilimanjaro. As you progress, the landscape becomes more rugged and open, offering beautiful views across the surrounding plains. The trail gradually descends toward Rongai Third Cave (3,800 m).\n\nThis is a relatively short and less demanding trekking day, giving you more time to rest and allow your body to adjust to the altitude. You will reach Third Cave around mid-afternoon, where you can relax and enjoy the peaceful surroundings before dinner and overnight.\n\nDistance: 7 km | Hiking time: About 4 hours | Habitat: Alpine Zone", 'accommodation' => 'Third Cave Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 8, 'title' => 'Third Cave Camp (3,800 m) – School Hut (4,800 m)', 'description' => "After breakfast, you will begin a steady ascent across the Saddle, the high-altitude desert plateau located between Kibo and Mawenzi Peaks. The trail continues through the rugged alpine landscape as you gradually make your way toward School Hut (4,800 m).\n\nUpon arrival at School Hut, you will have time to settle in and prepare for the summit attempt. An early dinner will be served, followed by a short rest. You will wake up before midnight to begin the final ascent toward Uhuru Peak.\n\nDistance: 7 km | Hiking time: 4–5 hours | Habitat: High Alpine Zone", 'accommodation' => 'School Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 9, 'title' => 'School Hut (4,800 m) – Uhuru Peak (5,895 m) – Millennium Camp (3,790 m)', 'description' => "You will wake up around 11:30 PM for hot tea and a light snack before beginning your summit ascent at around midnight. The trail climbs steadily toward the crater rim, with a short break at Hans Meyer Cave before the route becomes steeper as you approach Gilman’s Point (5,681 m). After about 4–5 hrs of climbing, you will reach Gilman’s Point, where you can enjoy the beautiful sunrise and spectacular views toward Mawenzi Peak.\n\nFrom Gilman’s Point, you will continue along the crater rim toward Uhuru Peak (5,895 m), the highest point in Africa. After spending some time at the summit, you will descend via Stella Point (5,756 m) and continue down the scree slopes toward Barafu Camp (4,640 m) for a short rest. You will then proceed to Millennium Camp (3,790 m), where you will have dinner and spend your final night on Mount Kilimanjaro.\n\nDistance: 16 km | Hiking time: About 12 hours | Habitat: Glacial / Alpine Zones", 'accommodation' => 'Millennium Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 10, 'title' => 'Millennium Camp (3,790 m) – Mweka Gate (1,630 m)', 'description' => "After breakfast, you will begin your final descent from Millennium Camp (3,790 m) through the lush montane rainforest toward Mweka Gate (1,630 m). The trail is relatively short and offers a refreshing change of scenery as you make your way down the mountain.\n\nUpon reaching Mweka Gate, you will complete the final park sign-out procedures and receive your official Kilimanjaro summit certificate. Trekkers who reach Gilman’s Point receive a green certificate, while those who successfully reach Uhuru Peak receive a gold certificate. You will then be transferred back to your hotel in Moshi for a well-deserved rest and celebration.\n\nDistance: 14 km | Hiking time: About 5 hours | Habitat: Rainforest", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast', 'Lunch']],
                        ['day' => 11, 'title' => 'Depart Tanzania', 'description' => "After completing your Kilimanjaro adventure, you will be transferred to Kilimanjaro International Airport for your onward flight, according to your travel arrangements.\n\nIf you wish to extend your stay in Tanzania, we can arrange a cultural experience, a relaxing Zanzibar beach getaway, or an exciting wildlife safari. You can explore iconic destinations such as Tarangire National Park, the Ngorongoro Crater, or Serengeti National Park.", 'accommodation' => 'Departure day', 'meals' => ['Breakfast']],
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
                    'overview' => "Trip outline: Day 1: arrival day · Days 2–9: to be spent on the mountain · Day 10: departure day.\n\nThe 8-day Northern Circuit Route is one of the most scenic and quieter ways to climb Mount Kilimanjaro, offering excellent acclimatization and a true wilderness trekking experience. The route begins at Londorossi Gate on the western side of the mountain, following the same initial trail as the Lemosho Route before crossing the Shira Plateau and continuing around the remote northern slopes of Kilimanjaro. From the northern side, the route gradually approaches Kibo before ascending to Uhuru Peak (5,895m) from the eastern side of the mountain. After reaching the summit, trekkers descend through the southern slopes and finish the climb at Mweka Gate. With fewer trekkers, panoramic mountain views, varied landscapes, and eight days on the mountain, the Northern Circuit is an excellent alternative to Lemosho for those looking for a scenic, less crowded, and well-paced Kilimanjaro adventure.\n\nQuick facts: The 8 Days Northern Circuit Route takes 8 days / 7 nights, starting at Londorossi Gate on the western side of Kilimanjaro and ending at Mweka Gate on the southern side. The route covers approximately 90 km (56 miles) and is rated moderate to challenging. Accommodation is provided in mountain camps, with the trek reaching Uhuru Peak at 5,895m (19,341ft). Trekkers can expect diverse scenery, including rainforest, the Shira Plateau, moorland, northern slopes, alpine desert, remote valleys, and summit glaciers. The route is best suited to trekkers seeking quieter trails, panoramic views, strong acclimatization, and a wilderness-style trekking experience. The best climbing seasons are generally January–March and June–October.\n\nWhy Choose the Northern Circuit Route?\n\nExcellent Acclimatization: The 8-day itinerary allows for a gradual ascent and more time for your body to adjust to the increasing altitude, creating a more balanced approach to the summit.\n\nPanoramic Mountain Views: Enjoy spectacular views across Kilimanjaro’s northern slopes, surrounding valleys, and dramatic high-altitude landscapes.\n\nAn Alternative to Busier Routes: The Northern Circuit is an excellent alternative for trekkers who prefer a quieter experience than the more popular Machame and Marangu routes.",
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
                        ['day' => 1, 'title' => 'Arrive in Tanzania', 'description' => "Upon arrival at Kilimanjaro International Airport, you will be welcomed by our team and transferred to your hotel in Moshi. Later, you will meet your mountain guide for a detailed briefing about the upcoming trek, followed by an equipment check to ensure you have all the essential gear. Any missing equipment can be rented before the climb.\n\nIn the evening, you will enjoy dinner and relax at the hotel as you prepare for your Kilimanjaro adventure. Overnight at your hotel in Moshi.", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast']],
                        ['day' => 2, 'title' => 'Londorossi Gate (2,100 m) – Mti Mkubwa Camp (2,650 m)', 'description' => "Your Northern Circuit adventure begins with a drive of approximately 2 hrs from Moshi to Londorossi Gate (2,100 m) on the western side of Mount Kilimanjaro. After completing park registration and entry formalities, you will continue by vehicle to the trailhead, where the trek begins through the lush rainforest. Along the way, you may be lucky enough to spot wildlife such as elephants, giraffes, or buffaloes in the forest.\n\nThe trail gradually ascends through the peaceful rainforest toward Mti Mkubwa Camp (2,650 m). After reaching camp, you will have time to relax, enjoy dinner, and prepare for the days ahead. Overnight at Mti Mkubwa Camp.\n\nDistance: 7 km | Hiking time: 3–4 hours | Habitat: Rainforest", 'accommodation' => 'Mti Mkubwa Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Mti Mkubwa Camp (2,650 m) – Shira I Camp (3,600 m)', 'description' => "After breakfast, you will continue trekking through the final section of the rainforest for about 1 hr before gradually entering the low alpine moorland zone. As you gain altitude, the vegetation becomes more sparse and the landscape opens up, offering wider views of the surrounding mountain scenery.\n\nThe trail continues steadily toward the Shira Plateau, with its beautiful high-altitude landscape and volcanic formations. This is a relatively short and gentle trekking day, ending at Shira I Camp (3,600 m), where you will have dinner and spend the night.\n\nDistance: 8 km | Hiking time: About 5 hours | Habitat: Rainforest / Moorland", 'accommodation' => 'Shira I Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Shira I Camp (3,600m) to Moir Camp (4,200m)', 'description' => "Today, you cross the Shira Plateau and continue toward Moir Camp, located on the northern side of the mountain. This is an important acclimatization day as you climb to a higher elevation before descending slightly to the camp.\n\nThe route offers beautiful views across the Shira Plateau and surrounding high-altitude landscapes. After reaching Moir Camp, you will have dinner and spend the night.\n\nDistance: 8 km | Hiking time: 4–5 hours | Habitat: Low Alpine Zone", 'accommodation' => 'Moir Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Moir Camp (4,200 m) – Pofu Camp (4,000 m)', 'description' => "Today, you will begin with a moderately steep climb out of Moir Valley before joining the trail along the northern slopes of Kibo. For those who are feeling strong, an optional short detour to Little Lent Hill (4,375 m) can be taken before rejoining the main trail.\n\nThe route then follows a series of gentle ascents and descents through the remote northern landscape, offering spectacular views across the plains toward the Kenya–Tanzania border. You will continue to Pofu (Buffalo) Camp (4,000 m), arriving around midday for lunch, followed by time to relax. Dinner and overnight at Pofu Camp.\n\nDistance: 10 km | Hiking time: 5–7 hours | Habitat: High Alpine Zone", 'accommodation' => 'Pofu Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Pofu Camp (4,000 m) – Third Cave Camp (3,800 m)', 'description' => "After breakfast, you will begin the day with a steady climb over Buffalo Ridge before continuing eastward along the northern slopes of Mount Kilimanjaro. As you progress, the landscape becomes more rugged and open, offering beautiful views across the surrounding plains. The trail gradually descends toward Rongai Third Cave (3,800 m).\n\nThis is a relatively short and less demanding trekking day, giving you more time to rest and allow your body to adjust to the altitude. You will reach Third Cave around mid-afternoon, where you can relax and enjoy the peaceful surroundings before dinner and overnight.\n\nDistance: 7 km | Hiking time: About 4 hours | Habitat: Alpine Zone", 'accommodation' => 'Third Cave Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 7, 'title' => 'Third Cave Camp (3,800 m) – School Hut (4,800 m)', 'description' => "After breakfast, you will begin a steady ascent across the Saddle, the high-altitude desert plateau located between Kibo and Mawenzi Peaks. The trail continues through the rugged alpine landscape as you gradually make your way toward School Hut (4,800 m).\n\nUpon arrival at School Hut, you will have time to settle in and prepare for the summit attempt. An early dinner will be served, followed by a short rest. You will wake up before midnight to begin the final ascent toward Uhuru Peak.\n\nDistance: 7 km | Hiking time: 4–5 hours | Habitat: High Alpine Zone", 'accommodation' => 'School Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 8, 'title' => 'School Hut (4,800 m) – Uhuru Peak (5,895 m) – Millennium Camp (3,790 m)', 'description' => "You will wake up around 11:30 PM for hot tea and a light snack before beginning your summit ascent at around midnight. The trail climbs steadily toward the crater rim, with a short break at Hans Meyer Cave before the route becomes steeper as you approach Gilman’s Point (5,681 m). After about 4–5 hrs of climbing, you will reach Gilman’s Point, where you can enjoy the beautiful sunrise and spectacular views toward Mawenzi Peak.\n\nFrom Gilman’s Point, you will continue along the crater rim toward Uhuru Peak (5,895 m), the highest point in Africa. After spending some time at the summit, you will descend via Stella Point (5,756 m) and continue down the scree slopes toward Barafu Camp (4,640 m) for a short rest. You will then proceed to Millennium Camp (3,790 m), where you will have dinner and spend your final night on Mount Kilimanjaro.\n\nDistance: 16 km | Hiking time: About 12 hours | Habitat: Glacial / Alpine Zones", 'accommodation' => 'Millennium Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 9, 'title' => 'Millennium Camp (3,790 m) – Mweka Gate (1,630 m)', 'description' => "After breakfast, you will begin your final descent from Millennium Camp (3,790 m) through the lush montane rainforest toward Mweka Gate (1,630 m). The trail is relatively short and offers a refreshing change of scenery as you make your way down the mountain.\n\nUpon reaching Mweka Gate, you will complete the final park sign-out procedures and receive your official Kilimanjaro summit certificate. Trekkers who reach Gilman’s Point receive a green certificate, while those who successfully reach Uhuru Peak receive a gold certificate. You will then be transferred back to your hotel in Moshi for a well-deserved rest and celebration.\n\nDistance: 14 km | Hiking time: About 5 hours | Habitat: Rainforest", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast', 'Lunch']],
                        ['day' => 10, 'title' => 'Depart Tanzania', 'description' => "After completing your Kilimanjaro adventure, you will be transferred to Kilimanjaro International Airport for your onward flight, according to your travel arrangements.\n\nIf you wish to extend your stay in Tanzania, we can arrange a cultural experience, a relaxing Zanzibar beach getaway, or an exciting wildlife safari. You can explore iconic destinations such as Tarangire National Park, the Ngorongoro Crater, or Serengeti National Park.", 'accommodation' => 'Departure day', 'meals' => ['Breakfast']],
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
                    'overview' => "Trip outline: Day 1: arrival day · Days 2–7: to be spent on the mountain · Day 8: departure day.\n\nThe Lemosho Route is one of the most scenic and rewarding trails on Mount Kilimanjaro. It is particularly known for its spectacular landscapes, panoramic mountain views, diverse vegetation, and relatively gradual approach to the summit. The route offers a quieter and more scenic start compared to some of the other popular trails, making it a great choice for climbers who want to experience the beauty and diversity of Kilimanjaro. The climb begins at Londorossi Gate on the western side of the mountain and starts with a beautiful trek through the lush rainforest. As you gain altitude, the vegetation changes gradually into open moorland, with expansive views of the surrounding landscape. The trail then continues across the Shira Plateau, one of the most beautiful areas of the route, before joining the southern circuit around the mountain.\n\nAs the trek progresses, climbers experience different landscapes and climatic zones, from dense rainforest and moorland to rocky alpine terrain and the high-altitude desert. The route provides impressive views of Kilimanjaro from different angles and includes opportunities for gradual altitude acclimatization before the final ascent to Uhuru Peak, the highest point in Africa.\n\nThe Lemosho Route is available in 6, 7, and 8-day itineraries:\n\n6 Days: Recommended for experienced hikers and mountaineers who are already well acclimatized.\n\n7 Days: Suitable for moderately experienced climbers seeking a good balance of trekking and acclimatization.\n\n8 Days: Recommended for less experienced climbers who prefer a slower pace and more time for acclimatization.\n\nNo technical climbing skills are required to complete the Lemosho Route, but a good level of fitness, preparation, and determination are recommended. With its stunning scenery, varied terrain, and gradual approach to the summit, Lemosho offers a truly memorable Kilimanjaro experience.",
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
                        ['day' => 1, 'title' => 'Arrive in Tanzania', 'description' => "Upon arrival at Kilimanjaro International Airport, you will be welcomed by our team and transferred to your hotel in Moshi. Later, you will meet your mountain guide for a detailed briefing about the upcoming trek, followed by an equipment check to ensure you have all the essential gear. Any missing equipment can be rented before the climb.\n\nIn the evening, you will enjoy dinner and relax at the hotel as you prepare for your Kilimanjaro adventure. Overnight at your hotel in Moshi.", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast']],
                        ['day' => 2, 'title' => 'Lemosho Glades (2385m) to Big Tree Camp (2780m)', 'description' => "After breakfast at your hotel, you will be picked up at around 8:00 AM and driven to Londorossi Gate, located on the western side of Mount Kilimanjaro. Upon arrival, you will complete the necessary registration and park formalities while your guides and porters prepare the equipment and supplies for the trek.\n\nThe hike begins with a gentle ascent through the lush rainforest of the Lemosho Glades. The trail offers a peaceful atmosphere and opportunities to spot wildlife along the way. After a steady walk through the forest, you will arrive at Mti Mkubwa (Big Tree) Camp, where you will enjoy dinner and spend the night.\n\nDistance covered: 7km / 4.3mi | Approx. time taken: 4 hours", 'accommodation' => 'Big Tree Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Big Tree Camp (2780m) to Shira 2 Camp (3900m)', 'description' => "Today is a long and rewarding trekking day as you leave Mti Mkubwa Camp and continue toward Shira II Camp, passing through the beautiful heath and moorland zone. The trail gradually leaves the rainforest behind as you ascend across the Shira Ridge and enter the vast Shira Plateau, with sections of the route becoming steeper as you gain altitude.\n\nAs you cross the plateau, you will enjoy panoramic views of Kibo Peak, often appearing above the clouds, as well as unique views of the Northern Ice Fields from the western side of the mountain. The steady ascent provides excellent opportunities for acclimatization while taking in the spectacular volcanic landscape. You will arrive at Shira II Camp for dinner and an overnight stay.\n\nDistance covered: 16.5km / 10.3mi | Approx. time taken: 9 - 11 hrs", 'accommodation' => 'Shira 2 Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Shira 2 Camp (3900m) to Barranco Camp (3960m)', 'description' => "After breakfast, you will continue your ascent across the open alpine desert toward Lava Tower (4,600 m). The trail offers spectacular panoramic views as you enter the high-altitude desert zone, with the route passing along rocky ridges beneath the Western Breach glaciers. Lava Tower will be the highest point of the day and an ideal place to stop for lunch. This climb also provides an important acclimatization opportunity by following the “walk high, sleep low” principle.\n\nIn the afternoon, you will make a steep descent toward Barranco Camp (3,960 m), located in a scenic valley beneath the impressive Barranco Wall. Along the way, you will enjoy magnificent views of the Western Breach and surrounding plains. After arriving at camp, you will have time to relax, enjoy the dramatic mountain scenery, and watch the sunset before dinner and overnight rest.\n\nDistance covered: 10km / 6.2mi | Approx. time taken: 7 hrs", 'accommodation' => 'Barranco Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Barranco Camp (3960m) to Barafu Camp (4640m)', 'description' => "After breakfast, you will begin one of the most exciting sections of the trek by climbing the impressive Barranco Wall. Although steep, the ascent is manageable and rewards you with spectacular views of the surrounding mountain landscape. From the top, you will continue toward Karanga Camp, where you will stop for a hot lunch before continuing the trek.\n\nFrom Karanga, the trail climbs gradually for approximately 3 hrs through the barren alpine desert toward Barafu Camp (4,640 m), the base camp for your summit attempt. Upon arrival, you will have dinner and plenty of time to rest, stay warm, and hydrate as you prepare for the long summit night. You will wake around midnight to begin the final ascent to Uhuru Peak.\n\nDistance covered: 8.5km / 5.3mi | Approx. time taken: 7 – 8 hours", 'accommodation' => 'Barafu Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Barafu Camp (4640m) to Uhuru Peak (5895m) & down to Millennium Camp (3790m)', 'description' => "Your summit attempt begins around midnight, with hot tea and light snacks before setting off. You will ascend steadily over steep scree slopes toward the summit glaciers, gaining significant altitude over a relatively short distance. After approximately 4–5 hrs, you will reach Stella Point (5,756 m) on the crater rim, where you may witness the spectacular sunrise and enjoy views of the crater’s ice formations and the rugged peaks of Mawenzi.\n\nFrom Stella Point, you will continue for about 1 hr along the crater rim to Uhuru Peak (5,895 m), the highest point in Africa. After taking photos and celebrating your achievement, you will begin the descent to Barafu Camp for lunch and a short rest. You will then continue downhill toward Millennium Camp, where you will have dinner and enjoy a well-earned overnight rest after this long and memorable day.\n\nDistance covered: 13.4km / 8.3mi | Approx. time taken: 12 – 15 hours", 'accommodation' => 'Millennium Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 7, 'title' => 'Trek Millennium Camp (3790m) to Mweka Gate (1630m)', 'description' => "After breakfast, you will begin your final descent through the lush Mweka rainforest toward Mweka Gate. Upon arrival, you will complete the remaining park formalities and receive your official Kilimanjaro summit certificate to commemorate your achievement.\n\nYou will then be met by your private vehicle and transferred back to your hotel in Moshi. After the long trek, you can enjoy a well-deserved hot shower, relax, and celebrate the successful completion of your Kilimanjaro adventure.\n\nDistance covered: 12.1km / 7.5mi | Approx. time taken: 6 hours", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast', 'Lunch']],
                        ['day' => 8, 'title' => 'Depart Tanzania', 'description' => "After completing your Kilimanjaro adventure, you will be transferred to Kilimanjaro International Airport for your onward flight, according to your travel arrangements.\n\nIf you wish to extend your stay in Tanzania, we can arrange a cultural experience, a relaxing Zanzibar beach getaway, or an exciting wildlife safari. You can explore iconic destinations such as Tarangire National Park, the Ngorongoro Crater, or Serengeti National Park.", 'accommodation' => 'Departure day', 'meals' => ['Breakfast']],
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

            if ($slug === '7-day-lemosho-route-climb') {
                $route->update([
                    'overview' => "Trip outline: Day 1: arrival day · Days 2–8: to be spent on the mountain · Day 9: departure day.\n\nThe Lemosho Route is one of the most scenic and rewarding trails on Mount Kilimanjaro. It is particularly known for its spectacular landscapes, panoramic mountain views, diverse vegetation, and relatively gradual approach to the summit. The route offers a quieter and more scenic start compared to some of the other popular trails, making it a great choice for climbers who want to experience the beauty and diversity of Kilimanjaro. The climb begins at Londorossi Gate on the western side of the mountain and starts with a beautiful trek through the lush rainforest. As you gain altitude, the vegetation changes gradually into open moorland, with expansive views of the surrounding landscape. The trail then continues across the Shira Plateau, one of the most beautiful areas of the route, before joining the southern circuit around the mountain.\n\nAs the trek progresses, climbers experience different landscapes and climatic zones, from dense rainforest and moorland to rocky alpine terrain and the high-altitude desert. The route provides impressive views of Kilimanjaro from different angles and includes opportunities for gradual altitude acclimatization before the final ascent to Uhuru Peak, the highest point in Africa.\n\nThe Lemosho Route is available in 6, 7, and 8-day itineraries:\n\n6 Days: Recommended for experienced hikers and mountaineers who are already well acclimatized.\n\n7 Days: Suitable for moderately experienced climbers seeking a good balance of trekking and acclimatization.\n\n8 Days: Recommended for less experienced climbers who prefer a slower pace and more time for acclimatization.\n\nNo technical climbing skills are required to complete the Lemosho Route, but a good level of fitness, preparation, and determination are recommended. With its stunning scenery, varied terrain, and gradual approach to the summit, Lemosho offers a truly memorable Kilimanjaro experience.",
                    'duration_days' => 7,
                    'duration_nights' => 6,
                    'theme' => 'Balanced Lemosho climb',
                    'skill_level' => 'Moderate to Challenging',
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Arrive in Tanzania', 'description' => "Upon arrival at Kilimanjaro International Airport, you will be welcomed by our team and transferred to your hotel in Moshi. Later, you will meet your mountain guide for a detailed briefing about the upcoming trek, followed by an equipment check to ensure you have all the essential gear. Any missing equipment can be rented before the climb.\n\nIn the evening, you will enjoy dinner and relax at the hotel as you prepare for your Kilimanjaro adventure. Overnight at your hotel in Moshi.", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast']],
                        ['day' => 2, 'title' => 'Lemosho Glades (2385m) to Big Tree Camp (2780m)', 'description' => "After breakfast at your hotel, you will be picked up at around 8:00 AM and driven to Londorossi Gate, located on the western side of Mount Kilimanjaro. Upon arrival, you will complete the necessary registration and park formalities while your guides and porters prepare the equipment and supplies for the trek.\n\nThe hike begins with a gentle ascent through the lush rainforest of the Lemosho Glades. The trail offers a peaceful atmosphere and opportunities to spot wildlife along the way. After a steady walk through the forest, you will arrive at Mti Mkubwa (Big Tree) Camp, where you will enjoy dinner and spend the night.\n\nDistance covered: 7km / 4.3mi | Approx. time taken: 4 hours", 'accommodation' => 'Big Tree Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Big Tree Camp (2780m) to Shira 2 Camp (3900m)', 'description' => "Today is a long and rewarding trekking day as you leave Mti Mkubwa Camp and continue toward Shira II Camp, passing through the beautiful heath and moorland zone. The trail gradually leaves the rainforest behind as you ascend across the Shira Ridge and enter the vast Shira Plateau, with sections of the route becoming steeper as you gain altitude.\n\nAs you cross the plateau, you will enjoy panoramic views of Kibo Peak, often appearing above the clouds, as well as unique views of the Northern Ice Fields from the western side of the mountain. The steady ascent provides excellent opportunities for acclimatization while taking in the spectacular volcanic landscape. You will arrive at Shira II Camp for dinner and an overnight stay.\n\nDistance covered: 16.5km / 10.3mi | Approx. time taken: 9 - 11 hrs", 'accommodation' => 'Shira 2 Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Shira 2 Camp (3900m) to Barranco Camp (3960m)', 'description' => "After breakfast, you will continue your ascent across the open alpine desert toward Lava Tower (4,600 m). The trail offers spectacular panoramic views as you enter the high-altitude desert zone, with the route passing along rocky ridges beneath the Western Breach glaciers. Lava Tower will be the highest point of the day and an ideal place to stop for lunch. This climb also provides an important acclimatization opportunity by following the “walk high, sleep low” principle.\n\nIn the afternoon, you will make a steep descent toward Barranco Camp (3,960 m), located in a scenic valley beneath the impressive Barranco Wall. Along the way, you will enjoy magnificent views of the Western Breach and surrounding plains. After arriving at camp, you will have time to relax, enjoy the dramatic mountain scenery, and watch the sunset before dinner and overnight rest.\n\nDistance covered: 10km / 6.2mi | Approx. time taken: 7 hrs", 'accommodation' => 'Barranco Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Barranco Camp (3960m) to Karanga Camp (3963m)', 'description' => "After breakfast, you will leave the campsite and begin the ascent of the impressive Barranco Wall, reaching around 4,200 m. The climb involves navigating rocky terrain and offers spectacular views of the surrounding landscape and the Heim Glacier.\n\nFrom the top of the Barranco Wall, you will continue toward Karanga Camp (3,963 m). The trek takes about 4 hrs, with the trail passing through the scenic Karanga Valley before reaching camp, where you will have time to rest and prepare for the next stage of your climb.\n\nDistance covered: 5.5km / 3.4mi | Approx. time taken: 5 hours", 'accommodation' => 'Karanga Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Karanga Camp (3963m) to Barafu Camp (4640m)', 'description' => "After breakfast, you will begin your hike toward Barafu Camp (4,640 m), passing through a dry and barren alpine landscape with rocky scree slopes and little vegetation. Along the way, you will enjoy impressive views of the Kibo and Mawenzi Peaks as you gradually gain altitude. The trail is steep and challenging, but the scenery makes the journey rewarding.\n\nUpon arrival at Barafu Camp, you will have lunch followed by a long period of rest as you prepare for the demanding summit attempt. An early dinner will be served, and you will then settle in for some sleep. You will wake around midnight to begin the final ascent toward Uhuru Peak.\n\nDistance covered: 3km / 1.9mi | Approx. time taken: 3 hours", 'accommodation' => 'Barafu Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 7, 'title' => 'Barafu Camp (4640m) to Uhuru Peak (5895m) & down to Millennium Camp (3790m)', 'description' => "Your summit attempt begins around midnight, with hot tea and light snacks before setting off. You will ascend steadily over steep scree slopes toward the summit glaciers, gaining significant altitude over a relatively short distance. After approximately 4–5 hrs, you will reach Stella Point (5,756 m) on the crater rim, where you may witness the spectacular sunrise and enjoy views of the crater’s ice formations and the rugged peaks of Mawenzi.\n\nFrom Stella Point, you will continue for about 1 hr along the crater rim to Uhuru Peak (5,895 m), the highest point in Africa. After taking photos and celebrating your achievement, you will begin the descent to Barafu Camp for lunch and a short rest. You will then continue downhill toward Millennium Camp, where you will have dinner and enjoy a well-earned overnight rest after this long and memorable day.\n\nDistance covered: 13.4km / 8.3mi | Approx. time taken: 12 – 15 hours", 'accommodation' => 'Millennium Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 8, 'title' => 'Trek Millennium Camp (3790m) to Mweka Gate (1630m)', 'description' => "After breakfast, you will begin your final descent through the lush Mweka rainforest toward Mweka Gate. Upon arrival, you will complete the remaining park formalities and receive your official Kilimanjaro summit certificate to commemorate your achievement.\n\nYou will then be met by your private vehicle and transferred back to your hotel in Moshi. After the long trek, you can enjoy a well-deserved hot shower, relax, and celebrate the successful completion of your Kilimanjaro adventure.\n\nDistance covered: 12.1km / 7.5mi | Approx. time taken: 6 hours", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast', 'Lunch']],
                        ['day' => 9, 'title' => 'Depart Tanzania', 'description' => "After completing your Kilimanjaro adventure, you will be transferred to Kilimanjaro International Airport for your onward flight, according to your travel arrangements.\n\nIf you wish to extend your stay in Tanzania, we can arrange a cultural experience, a relaxing Zanzibar beach getaway, or an exciting wildlife safari. You can explore iconic destinations such as Tarangire National Park, the Ngorongoro Crater, or Serengeti National Park.", 'accommodation' => 'Departure day', 'meals' => ['Breakfast']],
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

            if ($slug === '8-day-lemosho-route-climb') {
                $route->update([
                    'overview' => "Trip outline: Day 1: arrival day · Days 2–9: to be spent on the mountain · Day 10: departure day.\n\nThe Lemosho Route is one of the most scenic and rewarding trails on Mount Kilimanjaro. It is particularly known for its spectacular landscapes, panoramic mountain views, diverse vegetation, and relatively gradual approach to the summit. The route offers a quieter and more scenic start compared to some of the other popular trails, making it a great choice for climbers who want to experience the beauty and diversity of Kilimanjaro. The climb begins at Londorossi Gate on the western side of the mountain and starts with a beautiful trek through the lush rainforest. As you gain altitude, the vegetation changes gradually into open moorland, with expansive views of the surrounding landscape. The trail then continues across the Shira Plateau, one of the most beautiful areas of the route, before joining the southern circuit around the mountain.\n\nAs the trek progresses, climbers experience different landscapes and climatic zones, from dense rainforest and moorland to rocky alpine terrain and the high-altitude desert. The route provides impressive views of Kilimanjaro from different angles and includes opportunities for gradual altitude acclimatization before the final ascent to Uhuru Peak, the highest point in Africa.\n\nThe Lemosho Route is available in 6, 7, and 8-day itineraries:\n\n6 Days: Recommended for experienced hikers and mountaineers who are already well acclimatized.\n\n7 Days: Suitable for moderately experienced climbers seeking a good balance of trekking and acclimatization.\n\n8 Days: Recommended for less experienced climbers who prefer a slower pace and more time for acclimatization.\n\nNo technical climbing skills are required to complete the Lemosho Route, but a good level of fitness, preparation, and determination are recommended. With its stunning scenery, varied terrain, and gradual approach to the summit, Lemosho offers a truly memorable Kilimanjaro experience.",
                    'duration_days' => 8,
                    'duration_nights' => 7,
                    'theme' => 'Slow & steady summit',
                    'skill_level' => 'Moderate',
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Arrive in Tanzania', 'description' => "Upon arrival at Kilimanjaro International Airport, you will be welcomed by our team and transferred to your hotel in Moshi. Later, you will meet your mountain guide for a detailed briefing about the upcoming trek, followed by an equipment check to ensure you have all the essential gear. Any missing equipment can be rented before the climb.\n\nIn the evening, you will enjoy dinner and relax at the hotel as you prepare for your Kilimanjaro adventure. Overnight at your hotel in Moshi.", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast']],
                        ['day' => 2, 'title' => 'Lemosho Glades (2385m) to Big Tree Camp (2780m)', 'description' => "After breakfast at your hotel, you will be picked up at around 8:00 AM and driven to Londorossi Gate, located on the western side of Mount Kilimanjaro. Upon arrival, you will complete the necessary registration and park formalities while your guides and porters prepare the equipment and supplies for the trek.\n\nThe hike begins with a gentle ascent through the lush rainforest of the Lemosho Glades. The trail offers a peaceful atmosphere and opportunities to spot wildlife along the way. After a steady walk through the forest, you will arrive at Mti Mkubwa (Big Tree) Camp, where you will enjoy dinner and spend the night.\n\nDistance covered: 7km / 4.3mi | Approx. time taken: 4 hours", 'accommodation' => 'Big Tree Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Big Tree Camp (2780m) to Shira 1 Camp (3600m)', 'description' => "After breakfast, you will begin your trek across the scenic Shira Plateau, passing through open moorland and heath dotted with unique volcanic rock formations. The trail gradually gains altitude, with some sections becoming moderately steep as you make your way toward Shira I Camp (3,600 m).\n\nAlong the route, you will enjoy beautiful panoramic views of the surrounding landscape, including Kibo Peak, which often appears above the clouds. Upon reaching Shira I Camp, you will have time to relax, enjoy dinner, and prepare for the next day’s adventure. Overnight at Shira I Camp.\n\nDistance covered: 8.5km / 5.3mi | Approx. time taken: 7 hrs", 'accommodation' => 'Shira 1 Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Shira 1 Camp (3600m) to Shira 2 Camp (3900m)', 'description' => "After breakfast, you will continue your trek across the open moorland of the Shira Plateau toward Shira II Camp. This is a relatively short and gentle hiking day, allowing you to enjoy the spectacular scenery while gradually gaining altitude for acclimatization. Along the way, you will have impressive views of Kibo Peak and the Northern Ice Fields from the western side of Mount Kilimanjaro.\n\nUpon arrival at camp, you will enjoy a hot lunch and have time to relax. Around 4:00 PM, you will take tea before heading out for a short acclimatization walk to a higher altitude. You will then return to camp for dinner and an overnight stay.\n\nDistance covered: 8km / 5mi | Approx. time taken: 5 hours", 'accommodation' => 'Shira 2 Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Shira 2 Camp (3900m) to Barranco Camp (3960m)', 'description' => "After breakfast, you will leave the moorland behind and continue into the high-altitude alpine desert. The trail gradually ascends toward Lava Tower (4,600 m), passing across rocky lava ridges beneath the glaciers of the Western Breach. This is the highest point of the day and a perfect place to stop for lunch while enjoying the spectacular panoramic mountain views.\n\nIn the afternoon, you will make a steep descent of approximately 3 hrs to Barranco Camp (3,960 m). The trail provides excellent opportunities to capture stunning views of the Western Breach and the impressive Barranco Wall. The campsite is beautifully situated in a valley beneath the wall, offering a memorable setting for sunset, dinner, and overnight rest.\n\nDistance covered: 10km / 6.2mi | Approx. time taken: 7 hrs", 'accommodation' => 'Barranco Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Barranco Camp (3960m) to Karanga Camp (3963m)', 'description' => "After breakfast, you will leave the campsite and begin the ascent of the impressive Barranco Wall, reaching around 4,200 m. The climb involves navigating rocky terrain and offers spectacular views of the surrounding landscape and the Heim Glacier.\n\nFrom the top of the Barranco Wall, you will continue toward Karanga Camp (3,963 m). The trek takes about 4 hrs, with the trail passing through the scenic Karanga Valley before reaching camp, where you will have time to rest and prepare for the next stage of your climb.\n\nDistance covered: 5.5km / 3.4mi | Approx. time taken: 5 hours", 'accommodation' => 'Karanga Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 7, 'title' => 'Karanga Camp (3963m) to Barafu Camp (4640m)', 'description' => "After breakfast, you will begin your hike toward Barafu Camp (4,640 m), passing through a dry and barren alpine landscape with rocky scree slopes and little vegetation. Along the way, you will enjoy impressive views of the Kibo and Mawenzi Peaks as you gradually gain altitude. The trail is steep and challenging, but the scenery makes the journey rewarding.\n\nUpon arrival at Barafu Camp, you will have lunch followed by a long period of rest as you prepare for the demanding summit attempt. An early dinner will be served, and you will then settle in for some sleep. You will wake around midnight to begin the final ascent toward Uhuru Peak.\n\nDistance covered: 3km / 1.9mi | Approx. time taken: 3 hours", 'accommodation' => 'Barafu Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 8, 'title' => 'Barafu Camp (4640m) to Uhuru Peak (5895m) & down to Millennium Camp (3790m)', 'description' => "Your summit attempt begins around midnight, with hot tea and light snacks before setting off. You will ascend steadily over steep scree slopes toward the summit glaciers, gaining significant altitude over a relatively short distance. After approximately 4–5 hrs, you will reach Stella Point (5,756 m) on the crater rim, where you may witness the spectacular sunrise and enjoy views of the crater’s ice formations and the rugged peaks of Mawenzi.\n\nFrom Stella Point, you will continue for about 1 hr along the crater rim to Uhuru Peak (5,895 m), the highest point in Africa. After taking photos and celebrating your achievement, you will begin the descent to Barafu Camp for lunch and a short rest. You will then continue downhill toward Millennium Camp, where you will have dinner and enjoy a well-earned overnight rest after this long and memorable day.\n\nDistance covered: 13.4km / 8.3mi | Approx. time taken: 12 – 15 hours", 'accommodation' => 'Millennium Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 9, 'title' => 'Trek Millennium Camp (3790m) to Mweka Gate (1630m)', 'description' => "After breakfast, you will begin your final descent through the lush Mweka rainforest toward Mweka Gate. Upon arrival, you will complete the remaining park formalities and receive your official Kilimanjaro summit certificate to commemorate your achievement.\n\nYou will then be met by your private vehicle and transferred back to your hotel in Moshi. After the long trek, you can enjoy a well-deserved hot shower, relax, and celebrate the successful completion of your Kilimanjaro adventure.\n\nDistance covered: 12.1km / 7.5mi | Approx. time taken: 6 hours", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast', 'Lunch']],
                        ['day' => 10, 'title' => 'Depart Tanzania', 'description' => "After completing your Kilimanjaro adventure, you will be transferred to Kilimanjaro International Airport for your onward flight, according to your travel arrangements.\n\nIf you wish to extend your stay in Tanzania, we can arrange a cultural experience, a relaxing Zanzibar beach getaway, or an exciting wildlife safari. You can explore iconic destinations such as Tarangire National Park, the Ngorongoro Crater, or Serengeti National Park.", 'accommodation' => 'Departure day', 'meals' => ['Breakfast']],
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

            if ($slug === '8-day-lemosho-route-crater-camp') {
                $route->update([
                    'overview' => "Trip outline: Day 1: arrival day · Days 2–9: to be spent on the mountain · Day 10: departure day.\n\nThe Lemosho Route is one of the most scenic and rewarding trails on Mount Kilimanjaro. It is particularly known for its spectacular landscapes, panoramic mountain views, diverse vegetation, and relatively gradual approach to the summit. The route offers a quieter and more scenic start compared to some of the other popular trails, making it a great choice for climbers who want to experience the beauty and diversity of Kilimanjaro. The climb begins at Londorossi Gate on the western side of the mountain and starts with a beautiful trek through the lush rainforest. As you gain altitude, the vegetation changes gradually into open moorland, with expansive views of the surrounding landscape. The trail then continues across the Shira Plateau, one of the most beautiful areas of the route, before joining the southern circuit around the mountain.\n\nAs the trek progresses, climbers experience different landscapes and climatic zones, from dense rainforest and moorland to rocky alpine terrain and the high-altitude desert. The route provides impressive views of Kilimanjaro from different angles and includes opportunities for gradual altitude acclimatization before the final ascent to Uhuru Peak, the highest point in Africa.\n\nAbout Crater Camp\n\nCrater Camp is not a separate Kilimanjaro route but an adventurous extension that can be added to selected routes, allowing trekkers to spend a night inside the spectacular crater of Mount Kilimanjaro. It offers a rare and unforgettable experience for adventurous climbers, surrounded by dramatic volcanic scenery and the unique atmosphere of the crater. The duration depends on the route selected, while additional costs apply due to extra park fees and crew arrangements required for camping inside the crater.",
                    'duration_days' => 8,
                    'duration_nights' => 7,
                    'theme' => 'Night inside the summit crater',
                    'skill_level' => 'Challenging',
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Arrive in Tanzania', 'description' => "Upon arrival at Kilimanjaro International Airport, you will be welcomed by our team and transferred to your hotel in Moshi. Later, you will meet your mountain guide for a detailed briefing about the upcoming trek, followed by an equipment check to ensure you have all the essential gear. Any missing equipment can be rented before the climb.\n\nIn the evening, you will enjoy dinner and relax at the hotel as you prepare for your Kilimanjaro adventure. Overnight at your hotel in Moshi.", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast']],
                        ['day' => 2, 'title' => 'Lemosho Glades (2385m) to Big Tree Camp (2780m)', 'description' => "After breakfast at your hotel, you will be picked up at around 8:00 AM and driven to Londorossi Gate, located on the western side of Mount Kilimanjaro. Upon arrival, you will complete the necessary registration and park formalities while your guides and porters prepare the equipment and supplies for the trek.\n\nThe hike begins with a gentle ascent through the lush rainforest of the Lemosho Glades. The trail offers a peaceful atmosphere and opportunities to spot wildlife along the way. After a steady walk through the forest, you will arrive at Mti Mkubwa (Big Tree) Camp, where you will enjoy dinner and spend the night.\n\nDistance covered: 7km / 4.3mi | Approx. time taken: 4 hours", 'accommodation' => 'Big Tree Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Big Tree Camp (2780m) to Shira 2 Camp (3900m)', 'description' => "After breakfast, you will leave Big Tree Camp and continue your trek toward Shira 2 Camp. The trail gradually leaves the forest behind and enters the open moorland, where you will cross the scenic Shira Plateau surrounded by volcanic rock formations and high-altitude vegetation. You will pass through Shira 1 Camp before continuing across the plateau, with beautiful views of Kibo Peak and, weather permitting, the Northern Ice Fields. Some sections of the trail are moderately steep, providing a good opportunity to gain altitude gradually while enjoying wide panoramic views of Kilimanjaro. You will arrive at Shira 2 Camp for dinner and overnight rest.\n\nDistance covered: 16.5km / 10.3mi | Approx. time taken: 9 - 10hrs", 'accommodation' => 'Shira 2 Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Shira 2 Camp (3900m) to Barranco Camp (3960m)', 'description' => "After breakfast, you will leave the moorland behind and continue into the high-altitude alpine desert. The trail gradually ascends toward Lava Tower (4,600 m), passing across rocky lava ridges beneath the glaciers of the Western Breach. This is the highest point of the day and a perfect place to stop for lunch while enjoying the spectacular panoramic mountain views.\n\nIn the afternoon, you will make a steep descent of approximately 3 hrs to Barranco Camp (3,960 m). The trail provides excellent opportunities to capture stunning views of the Western Breach and the impressive Barranco Wall. The campsite is beautifully situated in a valley beneath the wall, offering a memorable setting for sunset, dinner, and overnight rest.\n\nDistance covered: 10km / 6.2mi | Approx. time taken: 7 hrs", 'accommodation' => 'Barranco Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Barranco Camp (3960m) to Karanga Camp (3963m)', 'description' => "After breakfast, you will leave the campsite and begin the ascent of the impressive Barranco Wall, reaching around 4,200 m. The climb involves navigating rocky terrain and offers spectacular views of the surrounding landscape and the Heim Glacier.\n\nFrom the top of the Barranco Wall, you will continue toward Karanga Camp (3,963 m). The trek takes about 4 hrs, with the trail passing through the scenic Karanga Valley before reaching camp, where you will have time to rest and prepare for the next stage of your climb.\n\nDistance covered: 5.5km / 3.4mi | Approx. time taken: 5 hours", 'accommodation' => 'Karanga Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Karanga Camp (3963m) to Barafu Camp (4640m)', 'description' => "After breakfast, you will begin your hike toward Barafu Camp (4,640 m), passing through a dry and barren alpine landscape with rocky scree slopes and little vegetation. Along the way, you will enjoy impressive views of the Kibo and Mawenzi Peaks as you gradually gain altitude. The trail is steep and challenging, but the scenery makes the journey rewarding.\n\nUpon arrival at Barafu Camp, you will have lunch followed by a long period of rest as you prepare for the demanding summit attempt. An early dinner will be served, and you will then settle in for some sleep. You will wake around midnight to begin the final ascent toward Uhuru Peak.\n\nDistance covered: 3km / 1.9mi | Approx. time taken: 3 hours", 'accommodation' => 'Barafu Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 7, 'title' => 'Barafu Camp (4640m) to Uhuru Peak (5895m) to Crater Camp (5,790m)', 'description' => "You will begin the summit attempt before sunrise, leaving Barafu Camp for the challenging ascent toward Uhuru Peak. The climb takes you across steep scree terrain toward the crater rim before continuing to the highest point of Mount Kilimanjaro at 5,895m. After reaching the summit and spending some time enjoying the incredible views, you will descend for approximately 1–2 hours to Crater Camp (5,790m). The campsite is located within the crater near the impressive Furtwängler Glacier, offering a rare opportunity to spend the night inside Kilimanjaro’s crater.\n\nDistance covered: 6km / 3.7mi | Approx. time taken: 6 – 7 hours to Uhuru Peak, then 1 – 2 hours to Crater Camp", 'accommodation' => 'Crater Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 8, 'title' => 'Crater Camp (5,790m) to Millennium Camp (3790m)', 'description' => "After an early breakfast, you will leave Crater Camp and begin the descent by returning toward Stella Point. From there, the trail continues down the scree slopes toward Barafu Camp, where you will have a short break before continuing the long descent to Millennium Camp. The route offers changing views as you move from the high alpine environment toward lower elevations. Upon reaching Millennium Camp, you can relax and enjoy a well-deserved rest after the demanding summit and crater experience.\n\nDistance covered: 11km / 6.8mi | Approx. time taken: 6 – 8 hours", 'accommodation' => 'Millennium Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 9, 'title' => 'Trek Millennium Camp (3790m) to Mweka Gate (1630m)', 'description' => "After breakfast, you will begin your final descent through the lush Mweka rainforest toward Mweka Gate. Upon arrival, you will complete the remaining park formalities and receive your official Kilimanjaro summit certificate to commemorate your achievement.\n\nYou will then be met by your private vehicle and transferred back to your hotel in Moshi. After the long trek, you can enjoy a well-deserved hot shower, relax, and celebrate the successful completion of your Kilimanjaro adventure.\n\nDistance covered: 12.1km / 7.5mi | Approx. time taken: 6 hours", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast', 'Lunch']],
                        ['day' => 10, 'title' => 'Depart Tanzania', 'description' => "After completing your Kilimanjaro adventure, you will be transferred to Kilimanjaro International Airport for your onward flight, according to your travel arrangements.\n\nIf you wish to extend your stay in Tanzania, we can arrange a cultural experience, a relaxing Zanzibar beach getaway, or an exciting wildlife safari. You can explore iconic destinations such as Tarangire National Park, the Ngorongoro Crater, or Serengeti National Park.", 'accommodation' => 'Departure day', 'meals' => ['Breakfast']],
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

            if ($slug === '7-day-umbwe-route-climb') {
                $route->update([
                    'overview' => "Trip outline: Day 1: arrival day · Days 2–8: to be spent on the mountain · Day 9: departure day.\n\nThe Umbwe Route is one of the shortest, steepest, and most direct routes to the summit of Mount Kilimanjaro. It is known for its demanding terrain and rapid elevation gain, making it one of the more challenging routes on the mountain. Because the ascent is so quick, there is limited time for gradual altitude acclimatization, which can make the climb particularly demanding. The route usually takes a minimum of 6 days, although a 7-day itinerary provides more time for acclimatization and preparation for the summit. Due to its steep profile and challenging conditions, Umbwe is best suited to experienced and physically strong trekkers who are comfortable with high-altitude hiking and demanding mountain terrain.\n\nDespite being less crowded, the Umbwe Route offers a more rugged and adventurous trekking experience, with steep forest trails and dramatic mountain scenery as the route progresses toward the southern side of Kilimanjaro. Trekkers should be prepared for a challenging ascent and changing conditions throughout the journey. For those with suitable experience, fitness, and confidence at altitude, Umbwe provides a demanding and memorable approach to the summit of Mount Kilimanjaro.",
                    'duration_days' => 7,
                    'duration_nights' => 6,
                    'theme' => 'Steep route with an extra acclimatisation day',
                    'skill_level' => 'Very Challenging',
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Arrive in Tanzania', 'description' => "Upon arrival at Kilimanjaro International Airport, you will be welcomed by our team and transferred to your hotel in Moshi. Later, you will meet your mountain guide for a detailed briefing about the upcoming trek, followed by an equipment check to ensure you have all the essential gear. Any missing equipment can be rented before the climb.\n\nIn the evening, you will enjoy dinner and relax at the hotel as you prepare for your Kilimanjaro adventure. Overnight at your hotel in Moshi.", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast']],
                        ['day' => 2, 'title' => 'Umbwe Gate (1,800m/5,905ft) to Cave Bivouac Camp (2,850m/9,350ft)', 'description' => "After breakfast, you will depart from Moshi at around 8:00 AM and drive to Umbwe Gate, where you will meet your mountain crew of guides, porters, and cooks. While the climbing permits and registration are completed, the team will organize the equipment and supplies for the trek. Once ready, you will begin the climb toward Cave Bivouac Camp, following a steep trail through the lush rainforest. The path can be slippery in certain sections, so careful walking is required. As you gain altitude, the dense forest gradually opens into an area of heather, tall grasses, and wildflowers. Your crew will move ahead to prepare the campsite before your arrival.\n\nElevation Gain: 1,050 meters, 3,445 feet | Hiking time: 4 to 6 hours", 'accommodation' => 'Cave Bivouac Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Cave Bivouac (2,850m/9,350ft) to Barranco Camp (3,950m/12,960ft)', 'description' => "After breakfast, you will continue along the mountain ridge, gradually leaving the forest behind as the trail enters the open moorland zone. The route continues upward toward Barranco Camp, surrounded by spectacular mountain scenery and unique vegetation. The campsite is known for its giant senecios and lobelias and is located in a scenic valley, where the surrounding cliffs create an impressive atmosphere. You will arrive at camp with time to rest and enjoy the beautiful surroundings.\n\nTotal Elevation Gain: 1,100 meters, 3,610 feet | Hiking time: 5 to 7 hours", 'accommodation' => 'Barranco Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Barranco Camp (3,950m/12,960ft)', 'description' => "Today is an additional acclimatization day at Barranco Camp. Taking an extra day at this altitude gives your body more time to adjust before continuing to higher elevations. You can spend the day relaxing at camp or taking a short walk around the surrounding area while enjoying views of the mountain. This rest day helps prepare you physically for the demanding sections ahead.", 'accommodation' => 'Barranco Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Barranco Camp (3,950m/12,960ft) to Karanga Valley (4,200m/13,780ft)', 'description' => "After breakfast, you will leave Barranco Camp and begin the climb toward Karanga Valley. The day starts with the famous Barranco Wall, which takes approximately 1.5 hrs to climb. Some sections are steep and may require the use of your hands, making this the most challenging part of the day. Once you reach the top, the trail becomes more moderate before descending briefly into the green Karanga River Valley. The surrounding scenery provides excellent views and a rewarding experience as you approach the next campsite.\n\nElevation Gain: 250 meters, 820 feet | Distance: 7 Kilometers | Hiking time: 3 to 5 hours", 'accommodation' => 'Karanga Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 6, 'title' => 'Karanga Valley (4,200m/13,780ft) to Barafu Camp (4,600m/15,100ft)', 'description' => "After breakfast, you will continue your ascent toward Barafu Camp, passing through the high-altitude alpine desert. Along the route, you will have views of several glaciers on Kibo and pass the junction connecting the Mweka descent route with the Machame trail. The landscape becomes increasingly barren as vegetation becomes scarce, but the views of Kibo and Mawenzi Peaks remain spectacular. Once you reach Barafu Camp, you will have time to eat, rest, and prepare for the summit attempt. Dinner will be served early before you get some sleep ahead of the midnight ascent.\n\nElevation Gain: 400 meters, 1,320 feet | Hiking time: 3 to 5 hours", 'accommodation' => 'Barafu Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 7, 'title' => 'Barafu Camp (4,600m/15,100ft) to Uhuru Peak (5,895m/19,340ft) to Mweka Camp (3,100m/10,170ft)', 'description' => "Your summit attempt begins around midnight, when you will leave Barafu Camp and start climbing under the light of your headlamp. The ascent toward the crater rim is steep and demanding, making this the most challenging section of the trek. After several hours, you will reach Stella Point, located on the crater rim. From here, the trail becomes more gradual as you continue for approximately one hour toward Uhuru Peak (5,895m/19,340ft). At the summit, you will have time to take photos, appreciate the spectacular views, and celebrate your achievement before beginning the descent.\n\nYou will then descend toward Barafu Camp, where breakfast and a short rest will be provided. The journey continues downhill toward Mweka Camp, passing through changing mountain landscapes with views of glaciers, clouds, and the surrounding slopes. After a long and demanding day, you will arrive at camp for dinner and overnight rest.\n\nElevation Gain: 1,295 meters, 4,240 feet | Elevation Loss: 2,795 meters, 9,170 feet | Hiking time: 6 hours to the rim, 1 hour to Uhuru, 3 to 4 hours back to Barafu, 4 hours to Mweka", 'accommodation' => 'Mweka Camp', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 8, 'title' => 'Mweka Camp (3,100m/10,170ft) to Mweka Gate (1,500m/4,920ft)', 'description' => "After breakfast, you will begin the final descent from Mweka Camp through the beautiful montane rainforest toward Mweka Gate. The trail gradually loses elevation as you make your way through the lush vegetation, although some sections can become slippery, especially after rainfall. Upon reaching the gate, you will complete the necessary park formalities and meet your vehicle for the transfer back to Moshi. This marks the end of your Umbwe Route adventure and a well-earned opportunity to relax after the climb.\n\nElevation Loss: 1,600 meters, 5,250 feet | Hiking time: 4 hours", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast', 'Lunch']],
                        ['day' => 9, 'title' => 'Depart Tanzania', 'description' => "After completing your Kilimanjaro adventure, you will be transferred to Kilimanjaro International Airport for your onward flight, according to your travel arrangements.\n\nIf you wish to extend your stay in Tanzania, we can arrange a cultural experience, a relaxing Zanzibar beach getaway, or an exciting wildlife safari. You can explore iconic destinations such as Tarangire National Park, the Ngorongoro Crater, or Serengeti National Park.", 'accommodation' => 'Departure day', 'meals' => ['Breakfast']],
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

            if ($slug === '4-day-mount-meru-trek') {
                $route->update([
                    'overview' => "Trip outline: Day 1: arrival day · Days 2–5: to be spent on the mountain · Day 6: departure day.\n\nMount Meru, standing at 4,566 m, is Tanzania’s second-highest mountain and is located within Arusha National Park. The mountain combines challenging steep climbs with beautiful scenery, diverse wildlife, lush forests, and dramatic volcanic landscapes. Because of the wildlife found along the lower slopes, trekkers are accompanied by an armed ranger for safety. Its demanding terrain also makes Meru a valuable acclimatization trek for those preparing for Mount Kilimanjaro, while offering a rewarding alternative for hikers who want a serious mountain experience without committing to Kilimanjaro.\n\nThe 4 Days Mount Meru Trek provides a well-paced journey through Tanzania’s scenic landscapes, featuring rainforest trails, wildlife encounters, volcanic ridges, crater views, and spectacular mountain scenery. The additional day allows more time for acclimatization, making the climb more comfortable and enjoyable. The trek culminates at Socialist Peak, where trekkers can experience an unforgettable sunrise and panoramic views, making Mount Meru an excellent adventure before or after a Kilimanjaro climb.",
                    'duration_days' => 4,
                    'duration_nights' => 3,
                    'theme' => 'Scenic acclimatisation climb',
                    'skill_level' => 'Moderate',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 1400],
                        ['persons' => 2, 'price' => 1350],
                        ['persons' => 5, 'price' => 1300],
                        ['persons' => 10, 'price' => 1150],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Arrive in Tanzania', 'description' => "Upon arrival at Kilimanjaro International Airport, you will be welcomed by our team and transferred to your hotel in Moshi. Later, you will meet your mountain guide for a detailed briefing about the upcoming trek, followed by an equipment check to ensure you have all the essential gear. Any missing equipment can be rented before the climb.\n\nIn the evening, you will enjoy dinner and relax at the hotel as you prepare for your Mount Meru adventure. Overnight at your hotel in Moshi.", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast']],
                        ['day' => 2, 'title' => 'Momella Gate (1500m) to Miriakamba Hut (2500m)', 'description' => "After breakfast, you will leave your hotel at around 0800hrs and drive to Momella Gate, the starting point of your Mount Meru adventure. The journey takes approximately one and a half hours. Once registration and park formalities are completed, you will begin hiking under the guidance of an armed ranger. The trail passes through beautiful landscapes with views of the Momella Lakes and, on clear days, distant views of Mount Kilimanjaro. Wildlife such as giraffes, buffaloes, warthogs, and bushbucks may be spotted along the way. You will continue through the scenic surroundings until reaching Miriakamba Hut, where you will have dinner and spend the night.\n\nDistance covered: 6km / 3.5mi | Approx. time taken: 4 – 5 hours", 'accommodation' => 'Miriakamba Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 3, 'title' => 'Miriakamba Hut (2500m) to Saddle Hut (3500m)', 'description' => "TToday you will continue climbing through the forest along a steadily rising trail toward Saddle Hut. As you gain elevation, the vegetation begins to change and the views become more impressive, with opportunities to see Meru Crater, the Ash Cone, and Little Meru. Keep an eye out for wildlife and colorful mountain vegetation along the trail, including possible sightings of buffaloes and black-and-white colobus monkeys. After arriving at Saddle Hut, you will have some time to rest before taking a short acclimatization hike to Little Meru (3810m). You will then return to Saddle Hut for dinner and overnight.\n\nDistance covered: 6.5km / 4mi | Approx. time taken: 3 – 4 hours", 'accommodation' => 'Saddle Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Saddle Hut (3500m) to Socialist Peak (4566m) to Miriakamba Hut (2500m)', 'description' => "You will wake up shortly after midnight and have a light meal before beginning the final ascent toward Socialist Peak, the highest point of Mount Meru. The climb is steep and follows rocky terrain, gravel sections, and narrow ridges as you make your way toward the summit. Once at the top, you will be rewarded with spectacular views of the Meru Crater, Ash Cone, and the surrounding landscapes. Depending on conditions, you may also spot mountain wildlife such as klipspringers and mountain reedbucks. After spending some time at the summit, you will begin the long descent back to Miriakamba Hut for dinner and overnight rest.\n\nDistance covered: 19km / 12mi | Approx. time taken: 10 – 12 hours", 'accommodation' => 'Miriakamba Hut', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 5, 'title' => 'Miriakamba Hut (2500m) to Momella Gate (1500m)', 'description' => "After breakfast, you will begin the final section of your Mount Meru trek, descending toward Momella Gate via the southern route. The trail passes through beautiful montane forest, offering a final opportunity to enjoy the natural scenery of Arusha National Park. Along the way, you will pass the impressive Fig Tree Arch, a natural landmark created by the surrounding vegetation. Once you arrive at Momella Gate, you will complete the necessary park formalities before being picked up and transferred back to your hotel in Moshi.\n\nDistance covered: 14km / 8.5mi | Approx. time taken: 4 – 5 hours", 'accommodation' => 'Hotel in Moshi', 'meals' => ['Breakfast', 'Lunch']],
                        ['day' => 6, 'title' => 'Depart Tanzania', 'description' => "After completing your Mount Meru adventure, you will be transferred to Kilimanjaro International Airport for your onward flight, according to your travel arrangements.\n\nIf you wish to extend your stay in Tanzania, we can arrange a cultural experience, a relaxing Zanzibar beach getaway, or an exciting wildlife safari. You can explore iconic destinations such as Tarangire National Park, the Ngorongoro Crater, or Serengeti National Park.", 'accommodation' => 'Departure day', 'meals' => ['Breakfast']],
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
        }
    }

    private function zanzibarPackages(): void
    {
        $data = [
            ['2-day-zanzibar-escape', '2 Day Zanzibar Escape', 'A quick Zanzibar getaway combining beach relaxation with a taste of the island’s culture and coastal beauty.', ['Beach', 'Relaxation', 'Culture'], 450, 2, 'images/zanzibar images/beach12.png'],
            ['3-day-zanzibar-getaway', '3 Day Zanzibar Getaway', 'A compact island holiday with beach time, Stone Town culture, and a memorable ocean experience.', ['Beach', 'Stone Town', 'Ocean'], 600, 3, 'images/zanzibar images/Nungi kendwa.jpg'],
            ['4-day-zanzibar-escape', '4 Day Zanzibar Escape', 'Discover Zanzibar in 4 Days. A short yet unforgettable tropical getaway featuring white sandy beaches, crystal-clear waters, cultural experiences, and relaxing island vibes.', ['Beach', 'Relaxation', 'Culture'], 750, 4, 'images/zanzibar images/beach1.png'],
            ['5-day-zanzibar-holiday', '5 Day Zanzibar Holiday', 'Luxury Zanzibar Experience. A relaxing tropical escape with beautiful beaches, ocean adventures, and unforgettable island experiences.', ['Beach', 'Relaxation', 'Culture'], 1100, 5, 'images/zanzibar images/beach4.png'],
            ['7-day-zanzibar-beach-vacation', '7 Day Zanzibar Beach Vacation', 'Sun, Sand & Ocean Views. A relaxing tropical escape featuring white sandy beaches, crystal-clear waters, vibrant culture, and unforgettable island experiences.', ['Beach', 'Relaxation', 'Culture'], 1450, 7, 'images/zanzibar images/beach6.png'],
        ];

        foreach ($data as $i => [$slug, $name, $desc, $features, $price, $days, $img]) {
            $zanzibar = ZanzibarPackage::updateOrCreate(['slug' => $slug], [
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

            if ($slug === '2-day-zanzibar-escape') {
                $zanzibar->update([
                    'overview' => "A quick 2 Day Zanzibar Escape combining white-sand beaches, warm turquoise waters, and a taste of the island’s culture. It is ideal for travelers adding a short beach break after a safari or Kilimanjaro climb.\n\nEnjoy time by the ocean, then discover the character of Stone Town before your departure.",
                    'duration_days' => 2,
                    'duration_nights' => 1,
                    'theme' => 'Quick Beach Escape',
                    'skill_level' => 'Easy',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 550],
                        ['persons' => 4, 'price' => 450],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Arrival & Beach Relaxation', 'description' => 'Arrive at Zanzibar airport or seaport, meet your representative, and transfer to your beach hotel. Spend the rest of the day relaxing beside the ocean.', 'accommodation' => 'Beach hotel', 'meals' => ['Breakfast']],
                        ['day' => 2, 'title' => 'Stone Town Tour & Departure', 'description' => 'Explore Stone Town and its historic streets before enjoying lunch and transferring to the airport or seaport for departure.', 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => ['Hotel accommodation with breakfast', 'Airport or seaport transfers', 'Stone Town tour', 'All government taxes'],
                    'excludes' => ['Flights', 'Tips', 'Personal expenses'],
                    'accommodations' => [['name' => 'Beach Hotel', 'description' => 'Comfortable beach accommodation for a short island escape.', 'image' => 'images/zanzibar images/beach12.png']],
                    'gallery' => ['images/zanzibar images/beach12.png', 'images/zanzibar images/stone town.webp'],
                ]);
            }

            if ($slug === '3-day-zanzibar-getaway') {
                $zanzibar->update([
                    'overview' => "A compact 3 Day Zanzibar Getaway combining beach relaxation, historic Stone Town, and an unforgettable ocean experience. This package is made for travelers who want a short but varied island holiday.\n\nEnjoy Zanzibar’s beaches, explore its culture, and spend a day on the water before departure.",
                    'duration_days' => 3,
                    'duration_nights' => 2,
                    'theme' => 'Beach & Culture',
                    'skill_level' => 'Easy',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 700],
                        ['persons' => 4, 'price' => 600],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Arrival & Beach Relaxation', 'description' => 'Arrive at Zanzibar airport or seaport, meet your representative, and transfer to your hotel. Relax on the beach for the afternoon.', 'accommodation' => 'Beach hotel', 'meals' => ['Breakfast']],
                        ['day' => 2, 'title' => 'Stone Town & Spice Experience', 'description' => 'Visit a spice farm and explore the historic streets of Stone Town, including the market, Old Fort, and other landmarks.', 'accommodation' => 'Beach hotel', 'meals' => ['Breakfast', 'Lunch']],
                        ['day' => 3, 'title' => 'Ocean Experience & Departure', 'description' => 'Enjoy a morning snorkeling or aquarium experience, then have lunch before your transfer to the airport or seaport for departure.', 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => ['Hotel accommodation with breakfast', 'Airport or seaport transfers', 'Stone Town and spice tour', 'Snorkeling or aquarium experience', 'All government taxes'],
                    'excludes' => ['Flights', 'Tips', 'Personal expenses'],
                    'accommodations' => [['name' => 'Beach Hotel', 'description' => 'Comfortable accommodation close to Zanzibar’s beaches.', 'image' => 'images/zanzibar images/Nungi kendwa.jpg']],
                    'gallery' => ['images/zanzibar images/Nungi kendwa.jpg', 'images/zanzibar images/spice.jpg', 'images/zanzibar images/stone town.webp'],
                ]);
            }

            if ($slug === '4-day-zanzibar-escape') {
                $zanzibar->update([
                    'overview' => "A refreshing 4 Day Zanzibar Escape featuring white-sand beaches, turquoise waters, tropical island scenery, and relaxing ocean experiences. Perfect for travelers seeking a short yet unforgettable beach getaway filled with relaxation, culture, and island adventure.\n\nTravelers can relax on white-sand beaches, swim in warm turquoise waters, explore the historic streets of Stone Town, enjoy snorkeling or diving, and experience Zanzibar famous sunset dhow cruises and spice tours.\n\nWhether added after a Tanzania safari, Kilimanjaro climb, or enjoyed as a standalone beach holiday, this vacation delivers a relaxing and refreshing island experience filled with tropical beauty and coastal charm.",
                    'duration_days' => 4,
                    'duration_nights' => 3,
                    'theme' => 'Beach Escape',
                    'skill_level' => 'Easy',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 900],
                        ['persons' => 4, 'price' => 750],
                        ['persons' => 9, 'price' => 750],
                        ['persons' => 10, 'price' => 750],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Arrival in Zanzibar', 'description' => 'Arrive at Zanzibar airport or seaport then, you will meet Habari adventure representative and transfer you to the hotel for relaxation.', 'accommodation' => 'Mahali Zanzibar Hotel / Smile Beach hotel', 'meals' => ['Breakfast']],
                        ['day' => 2, 'title' => 'Aquarium Tour & Beach Relaxation', 'description' => 'Today you will be picked up for aquarium tour and swimming with tortoise then relaxation on the Paje or Nungwi Beach.', 'accommodation' => 'Mahali Zanzibar Hotel / Smile Beach hotel', 'meals' => ['Breakfast']],
                        ['day' => 3, 'title' => 'Safari Blue Tour', 'description' => 'Around 9 am you will be picked for the safari blue. This will be the full day safari blue tour after tour we will drive back to the hotel for dinner.', 'accommodation' => 'Mahali Zanzibar Hotel / Smile Beach hotel', 'meals' => ['Breakfast', 'Lunch', 'Dinner']],
                        ['day' => 4, 'title' => 'Stone Town Tour & Prison Island', 'description' => 'Another beautiful day you will be picked from the Hotel to for stone town tour, prison Island and Nakupernda Island visit. After the tour will take you to the restaurant for the hot lunch before drop you at airport for departure.', 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => [
                        'All Park fees',
                        'Hotel, Bed & Breakfast',
                        'All Transfers',
                        'All government taxes',
                        'Tour cost and fruits',
                    ],
                    'excludes' => [
                        'Flights',
                        'Tipping (10$ per day to the local guide)',
                    ],
                    'accommodations' => [
                        ['name' => 'Beach Resorts & Hotels', 'description' => 'Comfortable beachfront accommodation with breakfast included throughout the escape.', 'image' => 'images/zanzibar images/beach3.png'],
                    ],
                    'gallery' => [
                        'images/zanzibar images/beach1.png',
                        'images/zanzibar images/beach3.png',
                        'images/zanzibar images/beach5.png',
                    ],
                ]);
            }

            if ($slug === '5-day-zanzibar-holiday') {
                $zanzibar->update([
                    'overview' => "A relaxing 5 Day Zanzibar Holiday featuring beautiful white-sand beaches, turquoise Indian Ocean waters, tropical island scenery, and unforgettable cultural and ocean experiences. Perfect for travelers seeking a balanced mix of relaxation, adventure, and island luxury in Zanzibar.\n\nThis itinerary offers a balanced mix of beach relaxation, adventure, and cultural experiences. Travelers can unwind on white-sand beaches, swim in turquoise Indian Ocean waters, explore the historic streets of Stone Town, enjoy snorkeling or diving, and experience Zanzibar famous spice tours and sunset dhow cruises.\n\nWhether as a romantic getaway, honeymoon, family holiday, or post-safari beach extension, this vacation provides the perfect combination of comfort, island beauty, and unforgettable coastal experiences.",
                    'duration_days' => 5,
                    'duration_nights' => 4,
                    'theme' => 'Beach Holiday',
                    'skill_level' => 'Easy',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 1200],
                        ['persons' => 4, 'price' => 1100],
                        ['persons' => 9, 'price' => 1100],
                        ['persons' => 10, 'price' => 1100],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Arrival in Zanzibar', 'description' => 'Arrive at Zanzibar airport or seaport then, you will meet Habari adventure representative and transfer you to the hotel for relaxation.', 'accommodation' => 'Mahali Zanzibar Hotel / Smile Beach hotel', 'meals' => ['Breakfast']],
                        ['day' => 2, 'title' => 'Diving Tour', 'description' => 'Today you will be picked up for half day diving tour and around afternoon you will be dropped at the hotel for relaxation on the Beach.', 'accommodation' => 'Mahali Zanzibar Hotel / Smile Beach hotel', 'meals' => ['Breakfast']],
                        ['day' => 3, 'title' => 'Spice Farm & Stone Town Tour', 'description' => 'Morning after breakfast pick up at 9:30 to spice farm where you can see different types of spice and how they grow up plus tasting the seasonal fruits and to experience the normal life of the local people in the village then will have lunch at spice farm. After meal will have town tour where you can have amazing history of the heart of the Zanzibar island as known as stone town, whereby you have chance to see the slave market site, daily market, house of wonder, old fort, palace museum and narrow street then will have chance to do shopping.', 'accommodation' => 'Mahali Zanzibar Hotel / Smile Beach hotel', 'meals' => ['Breakfast', 'Lunch']],
                        ['day' => 4, 'title' => 'Snorkeling / Aquarium Tour', 'description' => 'Another beautiful day - you will be picked from the Hotel and go for snorkeling / aquarium tour.', 'accommodation' => 'Zanzibar Serena Hotel / Tembo Hotel', 'meals' => ['Breakfast']],
                        ['day' => 5, 'title' => 'Stone Town Tour & Prison Island', 'description' => 'Another beautiful day you will be picked from the Hotel to for stone town tour and prison Island. After the tour will take you to the restaurant for the hot lunch before drop you at airport for departure.', 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => [
                        'All Park fees',
                        'Hotel, Bed & Breakfast',
                        'All Transfers',
                        'All government taxes',
                        'Tour cost and fruits',
                    ],
                    'excludes' => [
                        'Flights',
                        'Tipping (10$ per day to the local guide)',
                    ],
                    'accommodations' => [
                        ['name' => 'Beach Resorts & Hotels', 'description' => 'Comfortable beachfront accommodation with breakfast included throughout the holiday.', 'image' => 'images/zanzibar images/beach7.png'],
                    ],
                    'gallery' => [
                        'images/zanzibar images/beach4.png',
                        'images/zanzibar images/beach7.png',
                        'images/zanzibar images/beach8.png',
                    ],
                ]);
            }

            if ($slug === '7-day-zanzibar-beach-vacation') {
                $zanzibar->update([
                    'overview' => "A relaxing 7 Day Zanzibar Beach Vacation featuring white-sand beaches, turquoise waters, tropical island scenery, and unforgettable ocean experiences. Perfect for travelers seeking a peaceful getaway with a mix of relaxation, culture, adventure, and luxury on the beautiful island of Zanzibar.\n\nFrom the historic streets of Stone Town to the white-sand beaches and turquoise waters of the Indian Ocean, Zanzibar offers a unique mix of culture, nature, and luxury. Travelers can enjoy snorkeling, diving, dhow cruises, spice tours, beach relaxation, and unforgettable sunset views.\n\nThis vacation is ideal as a romantic getaway, honeymoon, family beach holiday, or relaxing extension after a safari or Kilimanjaro climb.",
                    'duration_days' => 7,
                    'duration_nights' => 6,
                    'theme' => 'Beach Vacation',
                    'skill_level' => 'Easy',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 1700],
                        ['persons' => 4, 'price' => 1450],
                        ['persons' => 9, 'price' => 1450],
                        ['persons' => 10, 'price' => 1450],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Arrival in Zanzibar', 'description' => 'Arrive at Zanzibar airport or seaport then, you will meet Habari adventure representative and transfer you to the hotel for relaxation.', 'accommodation' => 'Mahali Zanzibar Hotel / Smile Beach hotel', 'meals' => ['Breakfast']],
                        ['day' => 2, 'title' => 'Beach Relaxation', 'description' => 'Today you will have full day relaxation on the Beach.', 'accommodation' => 'Mahali Zanzibar Hotel / Smile Beach hotel', 'meals' => ['Breakfast']],
                        ['day' => 3, 'title' => 'Diving Tour', 'description' => 'Today you will be picked up for half day diving tour and around afternoon you will be dropped at the hotel for relaxation on the Beach.', 'accommodation' => 'Mahali Zanzibar Hotel / Smile Beach hotel', 'meals' => ['Breakfast']],
                        ['day' => 4, 'title' => 'Safari Blue Tour', 'description' => 'Today you will be picked up for full day safari Blue tour.', 'accommodation' => 'Mahali Zanzibar Hotel / Smile Beach hotel', 'meals' => ['Breakfast', 'Lunch']],
                        ['day' => 5, 'title' => 'Spice Farm & Stone Town Tour', 'description' => 'Morning after breakfast pick up at 9:30 to spice farm where you can see different types of spice and how they grow up plus tasting the seasonal fruits and to experience the normal life of the local people in the village then will have lunch at spice farm. After meal will have town tour where you can have amazing history of the heart of the Zanzibar island as known as stone town, whereby you have chance to see the slave market site, daily market, house of wonder, old fort, palace museum and narrow street then will have chance to do shopping.', 'accommodation' => 'Mahali Zanzibar Hotel / Smile Beach hotel', 'meals' => ['Breakfast', 'Lunch']],
                        ['day' => 6, 'title' => 'Snorkeling / Aquarium Tour', 'description' => 'Another beautiful day - you will be picked from the Hotel and go for snorkeling / aquarium tour.', 'accommodation' => 'Zanzibar Serena Hotel / Tembo Hotel', 'meals' => ['Breakfast']],
                        ['day' => 7, 'title' => 'Stone Town Tour & Prison Island', 'description' => 'Another beautiful day you will be picked from the Hotel to for stone town tour and prison Island. After the tour will take you to the restaurant for the hot lunch before drop you at airport for departure.', 'accommodation' => 'Departure day', 'meals' => ['Breakfast', 'Lunch']],
                    ],
                    'includes' => [
                        'All Park fees',
                        'Hotel, Bed & Breakfast',
                        'All Transfers',
                        'All government taxes',
                        'Tour cost and fruits',
                    ],
                    'excludes' => [
                        'Flights',
                        'Tipping (10$ per day to the local guide)',
                    ],
                    'accommodations' => [
                        ['name' => 'Beach Resorts & Hotels', 'description' => 'Comfortable beachfront accommodation with breakfast included throughout the vacation.', 'image' => 'images/zanzibar images/beach9.png'],
                    ],
                    'gallery' => [
                        'images/zanzibar images/beach6.png',
                        'images/zanzibar images/beach9.png',
                        'images/zanzibar images/beach11.png',
                    ],
                ]);
            }
        }
    }

    private function dayTrips(): void
    {
        $data = [
            ['materuni-waterfall', 'Materuni Waterfall', 'Hidden Gem of Kilimanjaro. A scenic day trip that combines a guided hike through lush countryside with a visit to one of Tanzania most beautiful waterfalls.', ['Waterfall', 'Coffee', 'Culture'], 80, 'Full day', 'images/Day Trips/IMG-2331-1780110336048-544612569.jpg'],
            ['maasai-tour', 'Maasai Tour', 'Experience Local Heritage. A unique cultural experience where visitors can learn about the traditions, customs, and daily life of the Maasai people.', ['Culture', 'Traditions', 'Village'], 145, 'Full day', 'images/Day Trips/IMG-4419-1780110169806-65108106.jpg'],
            ['chemka-hot-springs', 'Chemka Hot Springs', 'Turquoise Waters Experience. A relaxing day trip to a natural oasis of crystal-clear turquoise waters surrounded by lush vegetation.', ['Swimming', 'Relaxation', 'Nature'], 80, 'Full day', 'images/Day Trips/IMG-1402-1780110475334-118582944.jpg'],
            ['tarangire-national-park', 'Tarangire National Park Day Trip', 'Explore Tarangire National Park, famous for its large elephant herds, ancient baobab trees, and remarkable wildlife.', ['Elephants', 'Baobabs', 'Wildlife'], 145, 'Full day', 'https://arushatrips.com/wp-content/uploads/2019/10/Tarangire-national-park-2.png'],
            ['arusha-national-park-walking-safari', 'Arusha National Park Walking Safari', 'Walk alongside wildlife at the foot of Mount Meru, discovering green surroundings, lakes, waterfalls, and Arusha National Park’s unique black-and-white colobus monkeys.', ['Walking Safari', 'Wildlife', 'Mount Meru'], 165, 'Full day', 'https://arushatrips.com/wp-content/uploads/2019/10/Arusha-National-Park-overview.png'],
        ];

        foreach ($data as $i => [$slug, $name, $desc, $features, $price, $duration, $img]) {
            $dayTrip = DayTrip::updateOrCreate(['slug' => $slug], [
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

            if ($slug === 'maasai-tour') {
                $dayTrip->update([
                    'overview' => "A meaningful Maasai Cultural Tour offering authentic insight into the traditions, lifestyle, and heritage of the Maasai people. Perfect for travelers seeking cultural experiences, local interaction, traditional dances, village visits, and a deeper connection to East African culture.\n\nVisitors can enjoy traditional singing and dancing, explore village homes, discover local crafts, and gain insight into the Maasai way of life that has been preserved for generations. The experience provides meaningful cultural exchange while supporting local communities and sustainable tourism initiatives.\n\nThis tour is ideal for travelers seeking more than wildlife and scenery, adding cultural depth and authentic human connection to their Tanzania adventure.",
                    'theme' => 'Cultural Heritage',
                    'skill_level' => 'Easy',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 210],
                        ['persons' => 4, 'price' => 145],
                        ['persons' => 9, 'price' => 90],
                        ['persons' => 10, 'price' => 90],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Maasai Village Tour', 'description' => 'After breakfast you will have one hour drive to Maasai Boma you will pass through local villages while your enjoying cattle and birds on the way. On arrival, you will be met by a Maasai leader who will describe all about the nature, practice, and beliefs of Massai. Then you will experience some of activities conducted by Maasai people such as livestock keeping, local foods, cultural practises and local houses which are really interesting. Afterward, you will be provided with lunch before departing to Moshi/Airport.', 'accommodation' => 'Return to hotel', 'meals' => ['Lunch']],
                    ],
                    'includes' => [
                        'Transport',
                        'Village fees',
                        'Professional guide/driver',
                        'Lunch',
                        'Reasonable wages to driver & guide',
                        'Bottled & mineral water',
                    ],
                    'excludes' => [
                        'Tipping',
                        'Personal of Nature expenses',
                    ],
                    'accommodations' => [
                        ['name' => 'Hotel Return', 'description' => 'Return to your hotel after the tour.', 'image' => 'images/Day Trips/DSC01306-1780110936265-474666078.jpg'],
                    ],
                    'gallery' => [
                        'images/Day Trips/IMG-4419-1780110169806-65108106.jpg',
                        'images/Day Trips/DSC01306-1780110936265-474666078.jpg',
                    ],
                ]);
            }

            if ($slug === 'chemka-hot-springs') {
                $dayTrip->update([
                    'overview' => "A relaxing Chemka Hot Springs Day Trip featuring crystal-clear turquoise waters, natural geothermal pools, and peaceful tropical surroundings near Moshi. Perfect for travelers seeking swimming, relaxation, nature, and a refreshing escape after safari or Kilimanjaro adventures.\n\nVisitors can swim in the warm crystal-clear pools, relax by the water, enjoy rope swings, or simply unwind in the calm natural environment. The springs are fed by underground geothermal water, creating a unique oasis in the middle of the countryside.\n\nThis tour is ideal after a Kilimanjaro climb, safari, or busy travel schedule, providing a relaxing and enjoyable outdoor experience suitable for couples, families, solo travelers, and groups.",
                    'theme' => 'Relaxation & Nature',
                    'skill_level' => 'Easy',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 100],
                        ['persons' => 4, 'price' => 80],
                        ['persons' => 9, 'price' => 60],
                        ['persons' => 10, 'price' => 55],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Chemka Hot Springs Tour', 'description' => 'You will be pick up at your hotel followed by 1 hour drive to Chemka Hot Springs. We start on paved road towards Arusha, before turning left into gravel road which takes 30 minutes. You will pass through bush land, acacia trees, dry rivers and local Maasai huts. Also you will see Maasai cattle along the road and the Tanzania colonial railways. We expect you will have a great picnic spot in warm water at Chemka Hot Spring.', 'accommodation' => 'Return to hotel', 'meals' => ['Lunch']],
                    ],
                    'includes' => [
                        'Transport',
                        'All fees',
                        'Lunch',
                        'Professional guide/driver',
                        'Reasonable wages to driver & guide',
                        'Bottled & mineral water',
                        'All government taxes',
                    ],
                    'excludes' => [
                        'Tipping (usually, 20 USD per person/group)',
                        'Hotel',
                        'Visa',
                        'Flights',
                        'Insurance',
                        'Personal of nature expenses',
                    ],
                    'accommodations' => [
                        ['name' => 'Hotel Return', 'description' => 'Return to your hotel in Moshi after the tour.', 'image' => 'images/Day Trips/DSC01306-1780110936265-474666078.jpg'],
                    ],
                    'gallery' => [
                        'images/Day Trips/IMG-1402-1780110475334-118582944.jpg',
                        'images/Day Trips/DSC01306-1780110936265-474666078.jpg',
                    ],
                ]);
            }

            if ($slug === 'materuni-waterfall') {
                $dayTrip->update([
                    'overview' => "A scenic Materuni Waterfall Day Trip offering lush rainforest scenery, cultural experiences, and one of the most beautiful waterfalls near Mount Kilimanjaro. Perfect for travelers seeking nature, light hiking, local coffee experiences, and a refreshing escape from the city.\n\nThe experience includes a scenic walk through banana farms and local Chagga villages before reaching the waterfall, where visitors can enjoy the cool water, take photos, or simply relax in nature. Many tours also include a traditional coffee-making experience, giving travelers a chance to learn about local culture and enjoy freshly prepared Tanzanian coffee.\n\nThis trip is ideal for nature lovers, couples, families, and travelers looking for a peaceful and authentic Tanzania experience without a demanding hike.",
                    'theme' => 'Nature & Culture',
                    'skill_level' => 'Easy',
                    'pricing_tiers' => [
                        ['persons' => 1, 'price' => 100],
                        ['persons' => 4, 'price' => 80],
                        ['persons' => 9, 'price' => 60],
                        ['persons' => 10, 'price' => 55],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Materuni Waterfall Tour', 'description' => 'Around 10 am our driver guide will come to pick you at the hotel. He will drive you a bit in Moshi town before taking you on the way to Materuni waterfall and it takes 45 minutes. On the way you will take some photos of the hills surrounds mountain Kilimanjaro. On arrival you will visit some families in order to know more about their life styles and practices. Afterwards you will go to the best waterfall to enjoy and having a lunch. Then around 3pm you will have a cup of coffee prepared by you and local people you met there before drive back to your hotel in Moshi.', 'accommodation' => 'Return to hotel', 'meals' => ['Lunch']],
                    ],
                    'includes' => [
                        'Transport',
                        'All fees',
                        'Lunch',
                        'Professional guide/driver',
                        'Reasonable wages to driver & guide',
                        'Bottled & mineral water',
                        'All government taxes',
                    ],
                    'excludes' => [
                        'Tipping (usually, 20 USD per person/group)',
                        'Hotel',
                        'Visa',
                        'Flights',
                        'Insurance',
                        'Personal of nature expenses',
                    ],
                    'accommodations' => [
                        ['name' => 'Hotel Return', 'description' => 'Return to your hotel in Moshi after the tour.', 'image' => 'images/Day Trips/IMG-1402-1780110475334-118582944.jpg'],
                    ],
                    'gallery' => [
                        'images/Day Trips/IMG-2331-1780110336048-544612569.jpg',
                        'images/Day Trips/DSC01306-1780110936265-474666078.jpg',
                    ],
                ]);
            }

            if ($slug === 'tarangire-national-park') {
                $dayTrip->update([
                    'overview' => "On this day trip, we will visit Tarangire National Park, famous for its large elephant herds and towering, ancient baobab trees. You’ll probably get to see plenty of them, along with many other incredible animals that call this park home.\n\nThe adventure begins with an early morning departure from Arusha. From there, we’ll drive straight to Tarangire National Park, a journey of about two hours.\n\nStart location: Arusha\nStart time: 07:30-08:00\nDuration: Full Day\nAvailability: Daily\n\nYou’ll be driving in a spacious 4×4 Land Cruiser with a pop-up roof, offering a 360-degree view. During your day trip in Tarangire National Park, you might encounter lions, giraffes, zebras, wildebeests, warthogs, impalas, cheetahs, mongooses, buffalos, baboons, and ostriches. And if you’re lucky, you might even spot a leopard lounging in a tree! Of course, there’s plenty more wildlife waiting to be discovered.\n\nLet’s not forget about the massive elephant herds that rule the park. You’ll see large families, bachelor herds, and groups of females—complete with adorable babies, playful teenagers, young mothers, and wise older matriarchs leading the way. You might also spot a majestic bull elephant roaming alone.\n\nHalfway through our day trip, we’ll take a lunch break at a special spot with stunning views over the park. Keep an eye out for curious monkeys—they might be eyeing your lunch too!\n\nAfter lunch, we’ll head out for another game drive to search for any animals we may have missed, making sure to check off as many incredible wildlife encounters as possible. At the end of the day, we’ll begin our journey back to Arusha.\n\nThis day trip can be booked as a private excursion or as part of a group. If you’d like to join a group, just send us an inquiry, and we’ll find one for you!",
                    'theme' => 'Wildlife & Nature',
                    'skill_level' => 'Easy',
                    'pricing_tiers' => [
                        ['persons' => 2, 'price' => 245],
                        ['persons' => 6, 'price' => 145],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Tarangire National Park Game Drive', 'description' => 'Depart from Arusha between 07:30 and 08:00 for the approximately two-hour drive to Tarangire National Park. Enjoy a full-day game drive in a 4×4 Land Cruiser with a pop-up roof, a scenic lunch break, and an afternoon search for more wildlife before returning to Arusha.', 'accommodation' => 'Return to Arusha', 'meals' => ['Lunch']],
                    ],
                    'includes' => [
                        'Pick-up and drop-off at your accommodation',
                        'English-speaking private driver/guide',
                        '4x4 safari vehicle with pop-up roof',
                        'Park fees and government taxes',
                        'Unlimited game-drive mileage',
                        'Lunch',
                        'Coffee, tea and water',
                    ],
                    'excludes' => [
                        'Tips for the guide',
                    ],
                    'what_to_bring' => null,
                    'gallery' => [
                        'https://arushatrips.com/wp-content/uploads/2019/10/Tarangire-national-park-2.png',
                        'https://arushatrips.com/wp-content/uploads/2019/10/Tarangire-National-Park-baobab.png',
                        'https://arushatrips.com/wp-content/uploads/2019/10/Tarangire-national-park-3.png',
                        'https://arushatrips.com/wp-content/uploads/2019/09/Duo-3.png',
                        'https://arushatrips.com/wp-content/uploads/2019/10/Tarangire-National-Park.png',
                        'https://arushatrips.com/wp-content/uploads/2019/10/Tarangire-National-Park-1.png',
                        'https://arushatrips.com/wp-content/uploads/2019/10/Tarangire-National-Park-4.png',
                    ],
                ]);
            }

            if ($slug === 'arusha-national-park-walking-safari') {
                $dayTrip->update([
                    'overview' => "Walk freely alongside the wildlife of Tanzania and visit unique sights. A great way to start your safari experience. At the foot of Mount Meru lies Arusha National Park, a beautiful park famous for its green surroundings, lakes, unique sights, and black-and-white colobus monkeys. A walking safari is a unique and thrilling experience and a chance to get up close with wild animals, face to face. It is an experience that is only possible in a few national parks.\n\nStart location: Arusha\nStart time: 08:00 AM\nDuration: Full Day\nAvailability: Daily\n\nYou’ll start the day with a short drive to Arusha National Park, taking about 30 minutes from Arusha. From there, we’ll drive through the beautiful green surroundings of the park to spot local wildlife, while enjoying a stunning view of Mount Meru in the background.\n\nNext, your local safari ranger will take you on a walking safari. The scents and sounds of the African bush are best experienced on foot, as you walk alongside freely roaming animals in their natural habitat. Your ranger will explain how to move safely near wild animals and share knowledge about the unique flora and fauna of Arusha National Park.\n\nDuring the walking safari, you’ll visit unique sights such as the impressive waterfall hidden in the heart of the park, Ngurdoto Crater, and Lake Momella, where thousands of pink flamingos can often be spotted.\n\nMany visitors come hoping to spot the elusive colobus monkey. Giraffes, buffalo, zebras, warthogs, and blue monkeys may also be seen. Arusha is also excellent for birdwatchers, with trogons, starlings, turacos, and migrating flamingos among the species that can be discovered.",
                    'theme' => 'Walking Safari & Wildlife',
                    'skill_level' => 'Moderate',
                    'pricing_tiers' => [
                        ['persons' => 2, 'price' => 265],
                        ['persons' => 6, 'price' => 165],
                    ],
                    'itinerary' => [
                        ['day' => 1, 'title' => 'Walking Safari in Arusha National Park', 'description' => 'Depart Arusha at 08:00 AM for the approximately 30-minute drive to Arusha National Park. Enjoy a scenic drive through the park, a guided walking safari with a local ranger, and visits to the waterfall, Ngurdoto Crater, and Lake Momella before returning to Arusha.', 'accommodation' => 'Return to Arusha', 'meals' => ['Lunchbox']],
                    ],
                    'includes' => [
                        'Pick-up and drop-off at your accommodation',
                        '4x4 safari vehicle with pop-up roof',
                        'Private English-speaking driver/guide',
                        'Game drive in Arusha National Park',
                        'Walking safari with a ranger',
                        'Park fees and government taxes',
                        'Lunchbox',
                        'Water, tea and coffee',
                    ],
                    'excludes' => [
                        'Tips for the guide',
                    ],
                    'gallery' => [
                        'https://arushatrips.com/wp-content/uploads/2019/10/Arusha-National-Park-overview.png',
                        'https://arushatrips.com/wp-content/uploads/2019/10/Arusha-National-Park-tree-2.png',
                        'https://arushatrips.com/wp-content/uploads/2019/10/Colobus-2.png',
                    ],
                ]);
            }
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

