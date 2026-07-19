<?php

namespace App\Filament\Admin\Resources\DayTrips\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class DayTripForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('DayTrip')
                    ->tabs([
                        Tab::make('Basics')
                            ->schema([
                                TextInput::make('name')->required()->live(onBlur: true)->afterStateUpdated(fn ($state, $set) => $set('slug', \Illuminate\Support\Str::slug((string) $state))),
                                TextInput::make('slug')->required()->unique(ignoreRecord: true),
                                Textarea::make('description')->required()->rows(3)->columnSpanFull(),
                                Textarea::make('overview')->rows(8)->helperText('Longer narrative shown on the detail page.')->columnSpanFull(),
                                FileUpload::make('image')->image()->directory('day-trips'),
                                TagsInput::make('features'),
                                TextInput::make('duration')->helperText('e.g. "Full day", "Half day"'),
                                TextInput::make('duration_days')->numeric()->label('Duration (days)'),
                                TextInput::make('duration_nights')->numeric()->label('Duration (nights)'),
                                TextInput::make('price')->numeric()->prefix('$')->label('Starting price'),
                                TextInput::make('category')->default('Day Trip'),
                                TextInput::make('theme')->placeholder('Wildlife & Nature'),
                                Select::make('skill_level')->options([
                                    'Easy' => 'Easy',
                                    'Moderate' => 'Moderate',
                                    'Challenging' => 'Challenging',
                                ]),
                                TextInput::make('sort_order')->numeric()->default(0),
                                Toggle::make('is_published')->default(true),
                            ])
                            ->columns(2),

                        Tab::make('Pricing Tiers')
                            ->schema([
                                Repeater::make('pricing_tiers')
                                    ->schema([
                                        TextInput::make('persons')->numeric()->required()->label('Group Size (persons)'),
                                        TextInput::make('price')->numeric()->required()->prefix('$')->label('Price per person'),
                                    ])
                                    ->columns(2)
                                    ->defaultItems(1)
                                    ->reorderable()
                                    ->columnSpanFull(),
                            ]),

                        Tab::make('Itinerary')
                            ->schema([
                                Repeater::make('itinerary')
                                    ->schema([
                                        TextInput::make('day')->numeric()->required(),
                                        TextInput::make('title')->required(),
                                        Textarea::make('description')->rows(4)->required()->columnSpanFull(),
                                        TextInput::make('accommodation')->columnSpan(2),
                                        TagsInput::make('meals')->placeholder('breakfast, lunch, dinner')->columnSpanFull(),
                                    ])
                                    ->columns(2)
                                    ->itemLabel(fn (array $state): ?string => isset($state['day']) ? 'Day '.$state['day'].($state['title'] ? ': '.$state['title'] : '') : null)
                                    ->collapsible()
                                    ->reorderable()
                                    ->columnSpanFull(),
                            ]),

                        Tab::make('Includes / Excludes')
                            ->schema([
                                Repeater::make('includes')
                                    ->label("What's included")
                                    ->simple(TextInput::make('text')->required())
                                    ->reorderable()
                                    ->columnSpanFull(),
                                Repeater::make('excludes')
                                    ->label("What's not included")
                                    ->simple(TextInput::make('text')->required())
                                    ->reorderable()
                                    ->columnSpanFull(),
                            ]),

                        Tab::make('Accommodations')
                            ->schema([
                                Repeater::make('accommodations')
                                    ->schema([
                                        TextInput::make('name')->required(),
                                        Textarea::make('description')->rows(3)->columnSpanFull(),
                                        FileUpload::make('image')->image()->directory('accommodations')->columnSpanFull(),
                                    ])
                                    ->columns(2)
                                    ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                                    ->collapsible()
                                    ->columnSpanFull(),
                            ]),

                        Tab::make('Gallery')
                            ->schema([
                                FileUpload::make('gallery')
                                    ->image()
                                    ->multiple()
                                    ->reorderable()
                                    ->directory('gallery')
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
