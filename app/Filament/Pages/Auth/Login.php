<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms\Components\Hidden;
use Filament\Schemas\Components\Component;
use Filament\Auth\Pages\Login as BaseLogin;

class Login extends BaseLogin
{
    protected function getRememberFormComponent(): Component
    {
        return Hidden::make('remember')->default(false);
    }
}
