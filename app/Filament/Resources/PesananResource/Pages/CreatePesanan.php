<?php

namespace App\Filament\Resources\PesananResource\Pages;

use App\Filament\Resources\PesananResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePesanan extends CreateRecord
{
    protected static string $resource = PesananResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
    
        return $data;
    }
}
