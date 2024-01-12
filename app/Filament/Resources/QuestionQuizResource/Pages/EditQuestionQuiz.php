<?php

namespace App\Filament\Resources\QuestionQuizResource\Pages;

use App\Filament\Resources\QuestionQuizResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQuestionQuiz extends EditRecord
{
    protected static string $resource = QuestionQuizResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
