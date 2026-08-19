<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\DayTrip;
use App\Models\HeroSlide;
use App\Models\OtherCountryTrip;
use App\Models\Partner;
use App\Models\Resource;
use App\Models\Review;
use App\Models\Safari;
use App\Models\SpecialPackage;
use App\Models\TrekkingRoute;
use App\Models\ZanzibarPackage;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'heroSlides' => HeroSlide::query()->where('is_published', true)->orderBy('sort_order')->get(),
            'specialPackages' => SpecialPackage::query()->where('is_published', true)->orderBy('sort_order')->limit(3)->get(),
            'reviews' => Review::query()->where('is_published', true)->orderBy('sort_order')->limit(4)->get(),
            'blogPosts' => BlogPost::query()->where('is_published', true)->orderByDesc('published_at')->limit(2)->get(),
            'partners' => Partner::query()->where('is_published', true)->orderBy('sort_order')->get(),
        ]);
    }

    public function safari()
    {
        return view('pages.safari', [
            'safaris' => Safari::query()->where('is_published', true)->orderBy('sort_order')->get(),
        ]);
    }

    public function trekking()
    {
        return view('pages.trekking', [
            'routes' => TrekkingRoute::query()->where('is_published', true)->orderBy('sort_order')->get(),
        ]);
    }

    public function zanzibar()
    {
        return view('pages.zanzibar', [
            'packages' => ZanzibarPackage::query()->where('is_published', true)->orderBy('sort_order')->get(),
        ]);
    }

    public function dayTrips()
    {
        return view('pages.day-trips', [
            'dayTrips' => DayTrip::query()->where('is_published', true)->orderBy('sort_order')->get(),
        ]);
    }

    public function specialPackages()
    {
        return view('pages.special-packages', [
            'packages' => SpecialPackage::query()->where('is_published', true)->orderBy('sort_order')->get(),
        ]);
    }

    public function otherCountry()
    {
        return view('pages.other-country', [
            'trips' => OtherCountryTrip::query()->where('is_published', true)->orderBy('sort_order')->get(),
        ]);
    }

    public function blog()
    {
        return view('pages.blog', [
            'posts' => BlogPost::query()->where('is_published', true)->orderByDesc('published_at')->get(),
        ]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function resources()
    {
        return view('pages.resources', [
            'items' => Resource::query()->where('is_published', true)->orderBy('sort_order')->get(),
        ]);
    }

    public function safariShow(string $slug)
    {
        $package = Safari::query()->where('slug', $slug)->where('is_published', true)->firstOrFail();
        $relatedTours = Safari::query()->where('is_published', true)->where('id', '!=', $package->id)->orderBy('sort_order')->limit(3)->get();

        return view('pages.safari-detail', compact('package', 'relatedTours'));
    }

    public function trekkingShow(string $slug)
    {
        $package = TrekkingRoute::query()->where('slug', $slug)->where('is_published', true)->firstOrFail();

        // Build a list of related routes (variants) for the same base route.
        $baseName = preg_replace('/\s*Route$/i', '', $package->name);
        $variants = TrekkingRoute::query()
            ->where('is_published', true)
            ->where(function ($q) use ($slug, $baseName) {
                $q->where('slug', 'like', $slug . '%')
                  ->orWhere('name', 'like', '%' . $baseName . '%')
                  ->orWhere('slug', 'like', '%-' . $slug . '-%');
            })
            ->orderBy('sort_order')
            ->get();

        // If multiple variants exist, show a grouped listing page for that route.
        if ($variants->count() > 1) {
            return view('pages.trekking-group', [
                'routes' => $variants,
                'base' => $package,
            ]);
        }

        $relatedTours = TrekkingRoute::query()->where('is_published', true)->where('id', '!=', $package->id)->orderBy('sort_order')->limit(3)->get();

        return view('pages.trekking-detail', compact('package', 'relatedTours'));
    }

    public function zanzibarShow(string $slug)
    {
        $package = ZanzibarPackage::query()->where('slug', $slug)->where('is_published', true)->firstOrFail();
        $relatedTours = ZanzibarPackage::query()->where('is_published', true)->where('id', '!=', $package->id)->orderBy('sort_order')->limit(3)->get();

        return view('pages.zanzibar-detail', compact('package', 'relatedTours'));
    }

    public function dayTripShow(string $slug)
    {
        $package = DayTrip::query()->where('slug', $slug)->where('is_published', true)->firstOrFail();
        $relatedTours = DayTrip::query()->where('is_published', true)->where('id', '!=', $package->id)->orderBy('sort_order')->limit(3)->get();

        return view('pages.day-trip-detail', compact('package', 'relatedTours'));
    }

    public function specialPackageShow(string $slug)
    {
        $package = SpecialPackage::query()->where('slug', $slug)->where('is_published', true)->firstOrFail();
        $relatedTours = SpecialPackage::query()->where('is_published', true)->where('id', '!=', $package->id)->orderBy('sort_order')->limit(3)->get();

        return view('pages.special-package-detail', compact('package', 'relatedTours'));
    }

    public function otherCountryShow(string $slug)
    {
        $package = OtherCountryTrip::query()->where('slug', $slug)->where('is_published', true)->firstOrFail();
        $relatedTours = OtherCountryTrip::query()->where('is_published', true)->where('id', '!=', $package->id)->orderBy('sort_order')->limit(3)->get();

        return view('pages.other-country-detail', compact('package', 'relatedTours'));
    }
}
