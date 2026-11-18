<?php

namespace App\Filament\Resources\Users\Schemas;

use App\Models\User;
use Filament\Actions\Action;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Schema;
use Filament\Support\Enums\Operation;
use Filament\Support\Exceptions\Halt;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\HtmlString;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Wizard::make([
                   Wizard\Step::make('Step One')
                       ->icon(Heroicon::Flag)
                   ->schema([

                   ])->completedIcon(Heroicon::FaceSmile),
                    Wizard\Step::make('Step Two')
                        ->icon(Heroicon::Flag)
                        ->afterValidation(fn()=> new Halt())
                        ->schema([

                        ])
                ])->persistStepInQueryString()->nextAction(fn(Action $action)=>$action->label('Ho')->icon(Heroicon::Users))->columnSpanFull()->submitAction(new HtmlString('<button type="submit">Submit</button>'))->skippable(true),

            ]);
    }

}
