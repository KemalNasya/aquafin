<?php

namespace App\Filament\Pages;

use App\Models\User;
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Schemas\Schema;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use UnitEnum;
use BackedEnum;

class Profile extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationLabel = 'Account';

    protected static ?int $navigationSort = 1;

    protected static string|UnitEnum|null $navigationGroup = 'Settings';

    protected string $view = 'filament.pages.profile';

    public ?array $data = [];

    public static function canAccess(): bool
    {
        return Auth::check();
    }

    public function mount(): void
    {
        /** @var User $user */
        $user = Auth::user();

        $this->form->fill([
            'name' => $user->name,
            'email' => $user->email,
        ]);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema($this->getFormSchema())
            ->model(Auth::user())
            ->statePath('data');
    }

    protected function getFormSchema(): array
    {
        return [
            Section::make('Profile Information')
                ->schema([
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('email')
                        ->email()
                        ->required()
                        ->maxLength(255),
                    TextInput::make('current_password')
                        ->password()
                        ->label('Current Password')
                        ->required(fn ($get) => filled($get('password')))
                        ->dehydrated(false),
                    TextInput::make('password')
                        ->password()
                        ->label('New Password')
                        ->minLength(8)
                        ->confirmed()
                        ->dehydrated(fn ($state) => filled($state)),
                    TextInput::make('password_confirmation')
                        ->password()
                        ->label('Confirm New Password')
                        ->required(fn ($get) => filled($get('password')))
                        ->dehydrated(false),
                ]),
        ];
    }

    public function save(): void
    {
        try {
            $data = $this->form->getState();

            /** @var User $user */
            $user = Auth::user();

            // Validate current password if changing password
            if (!empty($data['password'])) {
                if (!Hash::check($data['current_password'], $user->password)) {
                    Notification::make()
                        ->title('Current password is incorrect')
                        ->danger()
                        ->send();
                    return;
                }
            }

            $updateData = [
                'name' => $data['name'],
                'email' => $data['email'],
            ];

            // Only update password if provided
            if (!empty($data['password'])) {
                $updateData['password'] = Hash::make($data['password']);
            }

            $user->update($updateData);

            Notification::make()
                ->title('Profile updated successfully')
                ->success()
                ->send();

        } catch (\Exception $e) {
            Notification::make()
                ->title('Error updating profile')
                ->body($e->getMessage())
                ->danger()
                ->send();
        }
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save changes')
                ->submit('save'),
        ];
    }
}
