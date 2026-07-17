<?php

namespace App\Filament\Resources\Investments;

use App\Filament\Resources\Investments\Pages\CreateInvestment;
use App\Filament\Resources\Investments\Pages\EditInvestment;
use App\Filament\Resources\Investments\Pages\ListInvestments;
use App\Filament\Resources\Investments\Schemas\InvestmentForm;
use App\Filament\Resources\Investments\Tables\InvestmentsTable;
use App\Models\Investment;
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
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;

class InvestmentResource extends Resource
{
    protected static ?string $model = Investment::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Investment';
    
    public static function form(Schema $form): Schema
    {
        return $form
            ->schema([

                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),

                Forms\Components\Select::make('package_id')
                    ->relationship('package', 'name')
                    ->required(),

                Forms\Components\TextInput::make('amount')
                    ->numeric()
                    ->required(),

                Forms\Components\TextInput::make('weeks_paid')
                    ->numeric()
                    ->required(),

                Forms\Components\TextInput::make('total_weeks')
                    ->numeric()
                    ->required(),

                Forms\Components\TextInput::make('total_profit')
                    ->numeric(),

                Forms\Components\DatePicker::make('next_payout_date')
                    ->required(),

                Forms\Components\Toggle::make('completed'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('id')
                    ->sortable(),

                Tables\Columns\TextColumn::make('user.name')
                    ->label('Investor')
                    ->searchable(),

                Tables\Columns\TextColumn::make('package.name')
                    ->label('Package')
                    ->searchable(),

                Tables\Columns\TextColumn::make('amount')
                    ->money('USD')
                    ->sortable(),

                Tables\Columns\TextColumn::make('weeks_paid')
                    ->badge(),

                Tables\Columns\TextColumn::make('total_weeks')
                    ->badge(),

                Tables\Columns\TextColumn::make('total_profit')
                    ->money('USD'),

                Tables\Columns\TextColumn::make('next_payout_date')
                    ->date(),

                Tables\Columns\IconColumn::make('completed')
                    ->boolean(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('completed')
                    ->label('Completed')
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
            'index' => ListInvestments::route('/'),
            'create' => CreateInvestment::route('/create'),
            'edit' => EditInvestment::route('/{record}/edit'),
        ];
    }
}
