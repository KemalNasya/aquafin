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

    protected static ?string $navigationLabel = 'Akun';

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
            Section::make('Akun')
                ->schema([
                    TextInput::make('name')
                        ->label('Nama')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('email')
                        ->label('Email')
                        ->email()
                        ->required()
                        ->maxLength(255),
                ]),
            Section::make('Keamanan Password')
                ->schema([
                    TextInput::make('current_password')
                        ->password()
                        ->label('Kata Sandi Saat Ini')
                        ->required(fn ($get) => filled($get('password')))
                        ->dehydrated(false)
                        ->revealable(),
                    TextInput::make('password')
                        ->password()
                        ->label('Kata Sandi Baru')
                        ->minLength(8)
                        ->confirmed()
                        ->dehydrated(fn ($state) => filled($state))
                        ->revealable(),
                    TextInput::make('password_confirmation')
                        ->password()
                        ->label('Konfirmasi Kata Sandi Baru')
                        ->required(fn ($get) => filled($get('password')))
                        ->dehydrated(false)
                        ->revealable(),
                ])
                ->collapsible()
                ->collapsed(),
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
                        ->title('Kata sandi saat ini tidak sesuai')
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
                ->title('Informasi akun telah diperbarui.')
                ->success()
                ->send();

        } catch (\Exception $e) {
            Notification::make()
                ->title('Terjadi kesalahan saat memperbarui akun')
                ->body($e->getMessage())
                ->danger()
                ->send();
        }
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Simpan Perubahan')
                ->submit('save')
                ->requiresConfirmation()
                ->modalHeading('Konfirmasi Simpan Perubahan')
                ->modalDescription('Apakah Anda yakin ingin menyimpan perubahan pada akun Anda?')
                ->modalSubmitActionLabel('Ya, Simpan'),
        ];
    }
}
