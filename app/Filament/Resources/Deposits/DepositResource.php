<?php

namespace App\Filament\Resources\Deposits;

use App\Filament\Resources\Deposits\Pages\CreateDeposit;
use App\Filament\Resources\Deposits\Pages\EditDeposit;
use App\Filament\Resources\Deposits\Pages\ListDeposits;
use App\Filament\Resources\Deposits\Schemas\DepositForm;
use App\Filament\Resources\Deposits\Tables\DepositsTable;
use App\Models\Deposits;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\Section;
use Filament\Tables\Columns\TextInput;
use Filament\Tables\Columns\Select;
use Filament\Tables\Columns\Grid;
use Filament\Tables\Table;

class DepositResource extends Resource
{
    protected static ?string $model = Deposits::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Deposit';

    public static function form(Schema $schema): Schema
    {
        return DepositForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),

                TextColumn::make('user.name')
                    ->searchable(),

                BadgeColumn::make('type'),

                TextColumn::make('amount')
                    ->money('USD'),

                BadgeColumn::make('status'),

                TextColumn::make('created_at')
                    ->dateTime(),

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
            'index' => ListDeposits::route('/'),
            'create' => CreateDeposit::route('/create'),
            'edit' => EditDeposit::route('/{record}/edit'),
        ];
    }
}
