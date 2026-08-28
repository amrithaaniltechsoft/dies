<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ChangePassword extends Page
{
    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-key';

    protected static ?string $navigationLabel = 'Change Password';

    protected static ?string $title = 'Change Password';

    protected static ?int $navigationSort = 5;

    protected string $view = 'filament.pages.change-password';

    public string $currentPassword = '';

    public string $password = '';

    public string $password_confirmation = '';

    public function updatePassword(): void
    {
        $this->validate([
            'currentPassword' => ['required', 'current_password'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'currentPassword.current_password' => 'The current password is incorrect.',
        ]);

        Auth::user()->update([
            'password' => Hash::make($this->password),
        ]);

        $this->reset('currentPassword', 'password', 'password_confirmation');

        Notification::make()
            ->success()
            ->title('Password changed successfully')
            ->send();
    }
}
