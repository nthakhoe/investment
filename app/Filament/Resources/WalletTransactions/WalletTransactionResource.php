<?php

namespace App\Filament\Resources\WalletTransactions;

use App\Filament\Resources\WalletTransactions\Pages\CreateWalletTransaction;
use App\Filament\Resources\WalletTransactions\Pages\EditWalletTransaction;
use App\Filament\Resources\WalletTransactions\Pages\ListWalletTransactions;
use App\Filament\Resources\WalletTransactions\Schemas\WalletTransactionForm;
use App\Filament\Resources\WalletTransactions\Tables\WalletTransactionsTable;
use App\Models\Wallet;
use App\Models\WalletTransaction;
use BackedEnum;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\Section;
use Filament\Tables\Columns\TextInput;
use Filament\Tables\Columns\Select;
use Filament\Tables\Columns\Grid;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\Filter;

class WalletTransactionResource extends Resource
{
    protected static ?string $model = WalletTransaction::class;

    protected static BackedEnum|string|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'WalletTransaction';

    public static function form(Schema $schema): Schema
    {
        return WalletTransactionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('id'),

                TextColumn::make('user.name')
                    ->searchable(),

                TextColumn::make('type')
                    ->badge(),

                TextColumn::make('amount')
                    ->money('USD'),

                TextColumn::make('description')
                    ->wrap(),

                TextColumn::make('created_at')
                    ->dateTime(),
            ])

            ->filters([

                SelectFilter::make('type')
                    ->options([
                        'credit' => 'Credit',
                        'debit' => 'Debit',
                        'profit' => 'Profit',
                        'withdrawal' => 'Withdrawal',
                        'investment' => 'Investment',
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
            'index' => ListWalletTransactions::route('/'),
            'create' => CreateWalletTransaction::route('/create'),
            'edit' => EditWalletTransaction::route('/{record}/edit'),
        ];
    }
}
