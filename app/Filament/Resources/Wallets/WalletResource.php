<?php

namespace App\Filament\Resources\Wallets;

use App\Filament\Resources\Wallets\Pages\CreateWallet;
use App\Filament\Resources\Wallets\Pages\EditWallet;
use App\Filament\Resources\Wallets\Pages\ListWallets;
use App\Filament\Resources\Wallets\Schemas\WalletForm;
use App\Filament\Resources\Wallets\Tables\WalletsTable;
use App\Models\Wallet;
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

class WalletResource extends Resource
{
    protected static ?string $model = Wallet::class;

    protected static BackedEnum|string|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Wallet';

    public static function form(Schema $schema): Schema
    {
        return WalletForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('id')
                    ->sortable(),

                TextColumn::make('user.name')
                    ->label('Investor')
                    ->searchable(),

                TextColumn::make('user.email')
                    ->searchable(),

                TextColumn::make('balance')
                    ->money('USD')
                    ->sortable(),

                TextColumn::make('updated_at')
                    ->since(),
            ])

            ->recordActions([

                Action::make('loadFunds')
                    ->label('Load Funds')
                    ->icon('heroicon-o-plus-circle')
                    ->color('success')

                    ->form([

                        \Filament\Forms\Components\TextInput::make('amount')
                            ->numeric()
                            ->required(),

                        \Filament\Forms\Components\Textarea::make('description')
                            ->default('Admin wallet topup'),
                    ])

                    ->action(function ($record, array $data) {

                        $record->increment(
                            'balance',
                            $data['amount']
                        );

                        \App\Models\WalletTransaction::create([
                            'user_id' => $record->user_id,
                            'type' => 'credit',
                            'amount' => $data['amount'],
                            'description' => $data['description'],
                        ]);
                    }),

                Action::make('deductFunds')
                    ->label('Deduct')
                    ->icon('heroicon-o-minus-circle')
                    ->color('danger')

                    ->form([

                        \Filament\Forms\Components\TextInput::make('amount')
                            ->numeric()
                            ->required(),

                        \Filament\Forms\Components\Textarea::make('description')
                            ->required(),
                    ])

                    ->action(function ($record, array $data) {

                        if ($record->balance < $data['amount']) {
                            throw new \Exception(
                                'Insufficient wallet balance'
                            );
                        }

                        $record->decrement(
                            'balance',
                            $data['amount']
                        );

                        \App\Models\WalletTransaction::create([
                            'user_id' => $record->user_id,
                            'type' => 'debit',
                            'amount' => $data['amount'],
                            'description' => $data['description'],
                        ]);
                    }),

                EditAction::make(),
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
            'index' => ListWallets::route('/'),
            'create' => CreateWallet::route('/create'),
            'edit' => EditWallet::route('/{record}/edit'),
        ];
    }
}
