<?php

namespace App\Filament\Resources\Users\Schemas;

use App\Models\User;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Support\Enums\Operation;

class EmailComponent
{

    public static function configure(): array
    {
        return [
            TextInput::make('name')
                ->label('Name')
        ];
    }
}
