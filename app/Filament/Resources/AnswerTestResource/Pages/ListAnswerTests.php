<?php

namespace App\Filament\Resources\AnswerTestResource\Pages;

use App\Filament\Resources\AnswerTestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAnswerTests extends ListRecords
{
    protected static string $resource = AnswerTestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
