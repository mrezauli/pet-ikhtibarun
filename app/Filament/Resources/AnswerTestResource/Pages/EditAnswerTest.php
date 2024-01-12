<?php

namespace App\Filament\Resources\AnswerTestResource\Pages;

use App\Filament\Resources\AnswerTestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnswerTest extends EditRecord
{
    protected static string $resource = AnswerTestResource::class;

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
