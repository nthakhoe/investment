<?php

namespace App\Filament\Resources\Withdrawals;

use App\Filament\Resources\Withdrawals\Pages\CreateWithdrawal;
use App\Filament\Resources\Withdrawals\Pages\EditWithdrawal;
use App\Filament\Resources\Withdrawals\Pages\ListWithdrawals;
use App\Filament\Resources\Withdrawals\Schemas\WithdrawalForm;
use App\Filament\Resources\Withdrawals\Tables\WithdrawalsTable;
use App\Models\Withdrawal;
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
use Filament\Tables;
use Filament\Forms;

class WithdrawalResource extends Resource
{
    protected static ?string $model = Withdrawal::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return $schema->components([

            Select::make('user_id')
                ->relationship('user', 'name')
                ->searchable()
                ->required(),

            TextInput::make('amount')
                ->numeric()
                ->required(),

            Select::make('status')
                ->options([
                    'pending' => 'Pending',
                    'approved' => 'Approved',
                    'rejected' => 'Rejected',
                    'paid' => 'Paid',
                ])
                ->required(),
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

                Tables\Columns\TextColumn::make('amount')
                    ->money('USD')
                    ->sortable(),

                Tables\Columns\TextColumn::make('status')
                    ->badge(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
        
                Tables\Columns\TextColumn::make('bank_name')
                    ->sortable(),

                Tables\Columns\TextColumn::make('account_name')
                    ->sortable(),

                Tables\Columns\TextColumn::make('account_number')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                        'paid' => 'Paid',
                    ]),
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
            'index' => ListWithdrawals::route('/'),
            'create' => CreateWithdrawal::route('/create'),
            'edit' => EditWithdrawal::route('/{record}/edit'),
        ];
    }
}
