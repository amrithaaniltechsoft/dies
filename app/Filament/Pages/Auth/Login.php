<?php

namespace App\Filament\Pages\Auth;

use Filament\Auth\Pages\Login as BaseLogin;
use Filament\Forms\Components\Hidden;
use Filament\Schemas\Components\Component;

class Login extends BaseLogin
{
    protected function getRememberFormComponent(): Component
    {
        return Hidden::make('remember')->default(false);
    }

    protected function getBrandLogo(): ?string
    {
        return asset('logo.jpg');
    }

    protected function getBrandLogoHeight(): string
    {
        return '12rem';
    }
}
