<?php

namespace App\Filament\Resources\QuestionQuizResource\Pages;

use App\Filament\Resources\QuestionQuizResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewQuestionQuiz extends ViewRecord
{
    protected static string $resource = QuestionQuizResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
