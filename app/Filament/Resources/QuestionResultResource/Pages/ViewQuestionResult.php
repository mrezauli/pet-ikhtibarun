<?php

namespace App\Filament\Resources\QuestionResultResource\Pages;

use App\Filament\Resources\QuestionResultResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewQuestionResult extends ViewRecord
{
    protected static string $resource = QuestionResultResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
