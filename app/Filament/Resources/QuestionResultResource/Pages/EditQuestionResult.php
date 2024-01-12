<?php

namespace App\Filament\Resources\QuestionResultResource\Pages;

use App\Filament\Resources\QuestionResultResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQuestionResult extends EditRecord
{
    protected static string $resource = QuestionResultResource::class;

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
