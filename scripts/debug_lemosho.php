<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();
$slugs = App\Models\TrekkingRoute::where('slug', 'like', '%lemosho%')
    ->orWhere('name', 'like', '%Lemosho%')
    ->pluck('slug');
echo implode(',', $slugs->toArray()) . PHP_EOL;
