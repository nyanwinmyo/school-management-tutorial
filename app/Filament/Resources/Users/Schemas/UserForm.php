<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Hash;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required()->maxLength(255),
                TextInput::make('email')->required()->maxLength(255),
                Select::make('role_id')
                    ->label('Role')
                    ->relationship('role', 'name')
                    ->required(),
                TextInput::make('password')
                    ->required(fn(string $context) => $context === 'create')
                    ->dehydrateStateUsing(fn($state) => Hash::make($state))
                    ->password()
                    ->revealable()
                    ->maxLength(255),

            ]);
    }
}
