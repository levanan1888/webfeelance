<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image(),
                TextInput::make('category')
                    ->default(null),
                Textarea::make('problem')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('solution')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('approach')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('client')
                    ->default(null),
                DatePicker::make('completed_at'),
            ]);
    }
}
