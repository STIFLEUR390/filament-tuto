<?php

namespace App\Filament\Resources\EmployeeResource\Pages;

use App\Filament\Resources\EmployeeResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateEmployee extends CreateRecord
{
    protected static string $resource = EmployeeResource::class;

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Employée ajouter avec succès';
    }

    protected function getCreatedNotification(): Notification
    {
        return Notification::make()
            ->success()
            ->title('Employee created.')
            ->body('The Employee created successfully.'); // TODO: Change the autogenerated stub
    }
}
