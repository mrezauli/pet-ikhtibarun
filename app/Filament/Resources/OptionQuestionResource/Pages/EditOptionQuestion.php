<?php

namespace App\Filament\Resources\OptionQuestionResource\Pages;

use App\Filament\Resources\OptionQuestionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOptionQuestion extends EditRecord
{
    protected static string $resource = OptionQuestionResource::class;

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
