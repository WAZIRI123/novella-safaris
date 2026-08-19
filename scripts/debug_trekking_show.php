<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();
$slug = $argv[1] ?? 'lemosho';
$package = App\Models\TrekkingRoute::where('slug', $slug)->where('is_published', true)->firstOrFail();
$baseName = preg_replace('/\\s*Route$/i', '', $package->name);
$variants = App\Models\TrekkingRoute::where('is_published', true)
    ->where(function ($q) use ($slug, $baseName) {
        $q->where('slug', 'like', $slug . '%')
          ->orWhere('name', 'like', '%' . $baseName . '%')
          ->orWhere('slug', 'like', '%-' . $slug . '-%');
    })
    ->orderBy('sort_order')
    ->get();

echo "Base: " . $package->slug . " - " . $package->name . PHP_EOL;
echo "BaseName: $baseName" . PHP_EOL;
echo "Variants count: " . $variants->count() . PHP_EOL;
echo "Variants: " . implode(',', $variants->pluck('slug')->toArray()) . PHP_EOL;
