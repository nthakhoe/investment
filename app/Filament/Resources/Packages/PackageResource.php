<?php

namespace App\Filament\Resources\Packages;

use App\Filament\Resources\Packages\Pages\CreatePackage;
use App\Filament\Resources\Packages\Pages\EditPackage;
use App\Filament\Resources\Packages\Pages\ListPackages;
use App\Filament\Resources\Packages\Schemas\PackageForm;
use App\Filament\Resources\Packages\Tables\PackagesTable;
use App\Models\Package;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Grid;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables;
use Filament\Forms;
use Filament\Forms\Form;

class PackageResource extends Resource
{
    protected static ?string $model = Package::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return $schema
        ->schema([
            Forms\Components\TextInput::make('name')->required(),

            Forms\Components\TextInput::make('price')
                ->numeric()
                ->required(),

            Forms\Components\TextInput::make('weekly_return_percent')
                ->numeric()
                ->required(),

            Forms\Components\TextInput::make('duration_weeks')
                ->numeric()
                ->required(),

            Forms\Components\Toggle::make('is_active'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('name'),

                Tables\Columns\TextColumn::make('price'),

                Tables\Columns\TextColumn::make('weekly_return_percent'),

                Tables\Columns\TextColumn::make('duration_weeks'),

                Tables\Columns\IconColumn::make('is_active')->boolean(),

            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPackages::route('/'),
            'create' => CreatePackage::route('/create'),
            'edit' => EditPackage::route('/{record}/edit'),
        ];
    }
}
