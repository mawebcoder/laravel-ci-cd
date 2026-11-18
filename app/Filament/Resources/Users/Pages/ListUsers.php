<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use App\Models\User;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\IconPosition;
use Filament\Support\Icons\Heroicon;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    public function getTabs(): array
    {
        return [
            'all' => Tab::make()
                ->label('All Users')
                ->badge(User::query()->where('email','mawebcoder@gamil.com')->count())
                ->badgeIconPosition(IconPosition::Before)
                ->badgeIcon(Heroicon::Users)
                ->badgeColor(Color::Red)
                ->icon(Heroicon::CloudArrowDown)
                ->iconPosition(IconPosition::After)
                ->modifyQueryUsing(fn($query) => $query->where('email', 'mawebcoder@gamil.com'))
        ];
    }


    //By Default a tab is enabled you can disable it here
    public function getDefaultActiveTab(): string|int|null
    {
        return  null;
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
