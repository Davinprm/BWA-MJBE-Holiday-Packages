<?php

namespace App\Filament\Pages\auth;

use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Pages\Auth\Register;
use Illuminate\Database\Eloquent\Model;

class CustomRegister extends Register
{
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                $this->getNameFormComponent(),
                $this->getEmailFormComponent(),

                TextInput::make('phone_number')
                    ->tel()
                    ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/')
                    ->helperText('Enter Your Phone Number')
                    ->required(),

                TextInput::make('occupation')
                    ->helperText('Enter Your Occupation')
                    ->required(),

                TextInput::make('address')
                    ->helperText('Enter Your Address')
                    ->required(),

                $this->getPasswordFormComponent(),
                $this->getPasswordConfirmationFormComponent(),
            ]);
    }

    public function handleRegistration(array $data): Model
    {
        $user = $this->getUserModel()::create($data);
        $user->assignRole('guest');
        return $user;
    }
}