<?php

namespace App\Filament\Admin\Resources\Safaris\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class SafariForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Package')
                    ->tabs([
                        Tab::make('Basics')
                            ->schema([
                                TextInput::make('name')->required()->live(onBlur: true)->afterStateUpdated(fn ($state, $set) => $set('slug', \Illuminate\Support\Str::slug((string) $state))),
                                TextInput::make('slug')->required()->unique(ignoreRecord: true),
                                Textarea::make('description')->required()->rows(3)->helperText('Short blurb shown on list cards.')->columnSpanFull(),
                                Textarea::make('overview')->rows(8)->helperText('Longer narrative shown on the detail page.')->columnSpanFull(),
                                FileUpload::make('image')->image()->directory('safaris'),
                                TagsInput::make('features')->helperText('e.g. Big Cats, Migration, Balloon safaris'),
                                TextInput::make('badge')->helperText('Small tag shown on the card image, e.g. "Best seller".'),
                                TextInput::make('price_from')->numeric()->prefix('$'),
                                TextInput::make('duration_days')->numeric()->label('Duration (days)'),
                                TextInput::make('duration_nights')->numeric()->label('Duration (nights)'),
                                TextInput::make('category')->default('Safari'),
                                TextInput::make('theme')->placeholder('Culture & Wildlife'),
                                Select::make('skill_level')->options([
                                    'Easy' => 'Easy',
                                    'Intermediate' => 'Intermediate',
                                    'Challenging' => 'Challenging',
                                    'Extreme' => 'Extreme',
                                ]),
                                TextInput::make('sort_order')->numeric()->default(0),
                                Toggle::make('is_published')->default(true),
                            ])
                            ->columns(2),

                        Tab::make('Pricing Tiers')
                            ->schema([
                                Repeater::make('pricing_tiers')
                                    ->label('Group-size pricing')
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
                                    ->label('Day-by-day itinerary')
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
