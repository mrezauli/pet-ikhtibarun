<?php

namespace App\Filament\Resources\QuestionResultResource\Pages;

use App\Filament\Resources\QuestionResultResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQuestionResults extends ListRecords
{
    protected static string $resource = QuestionResultResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
