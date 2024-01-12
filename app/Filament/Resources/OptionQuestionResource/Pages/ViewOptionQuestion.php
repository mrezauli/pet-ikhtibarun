<?php

namespace App\Filament\Resources\OptionQuestionResource\Pages;

use App\Filament\Resources\OptionQuestionResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewOptionQuestion extends ViewRecord
{
    protected static string $resource = OptionQuestionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
