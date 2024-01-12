<?php

namespace App\Filament\Resources\QuestionQuizResource\Pages;

use App\Filament\Resources\QuestionQuizResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQuestionQuizzes extends ListRecords
{
    protected static string $resource = QuestionQuizResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
