<?php

namespace App\Filament\Plugin;

use Stephenjude\FilamentBlog\BlogPlugin as BaseBlogPlugin;
use Stephenjude\FilamentBlog\Resources\AuthorResource;
use Stephenjude\FilamentBlog\Resources\CategoryResource;
use App\Filament\Levanan\Resources\PostResource; // Use our custom resource
use Filament\Panel;

class CustomBlogPlugin extends BaseBlogPlugin
{
    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                AuthorResource::class,
                CategoryResource::class,
                PostResource::class, // Replaced
            ]);
    }
}
