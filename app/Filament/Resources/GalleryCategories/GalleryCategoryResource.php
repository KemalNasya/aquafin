<?php

namespace App\Filament\Resources\GalleryCategories;

use App\Filament\Resources\GalleryCategories\Pages\CreateGalleryCategory;
use App\Filament\Resources\GalleryCategories\Pages\EditGalleryCategory;
use App\Filament\Resources\GalleryCategories\Pages\ListGalleryCategories;
use App\Filament\Resources\GalleryCategories\Schemas\GalleryCategoryForm;
use App\Filament\Resources\GalleryCategories\Tables\GalleryCategoriesTable;
use App\Models\GalleryCategory;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class GalleryCategoryResource extends Resource
{
    protected static ?string $model = GalleryCategory::class;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?int $navigationSort = 2;

    protected static string|UnitEnum|null $navigationGroup = 'Galleries';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedTag;

    protected static ?string $navigationLabel = 'Category';

    protected static ?string $recordTitleAttribute = 'gallery category';

    public static function form(Schema $schema): Schema
    {
        return GalleryCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GalleryCategoriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListGalleryCategories::route('/'),
            'create' => CreateGalleryCategory::route('/create'),
            'edit' => EditGalleryCategory::route('/{record}/edit'),
        ];
    }

    public static function canViewAny(): bool
    {
        $user = Auth::user();
        return $user && in_array($user->role, ['admin', 'owner']);
    }

    public static function canCreate(): bool
    {
        $user = Auth::user();
        return $user && in_array($user->role, ['admin', 'owner']);
    }

    public static function canEdit($record): bool
    {
        $user = Auth::user();
        return $user && in_array($user->role, ['admin', 'owner']);
    }

    public static function canDelete($record): bool
    {
        $user = Auth::user();
        return $user && in_array($user->role, ['admin', 'owner']);
    }
}
