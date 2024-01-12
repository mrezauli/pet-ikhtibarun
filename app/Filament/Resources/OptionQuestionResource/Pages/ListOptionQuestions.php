<?php

namespace App\Filament\Resources\OptionQuestionResource\Pages;

use App\Filament\Resources\OptionQuestionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOptionQuestions extends ListRecords
{
    protected static string $resource = OptionQuestionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
