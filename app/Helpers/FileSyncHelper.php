<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;

class FileSyncHelper
{
    /**
     * Copy uploaded files to the public directory so they're web-accessible. This will be different for c-panel implementation
     *
     * @param string $relativePath The relative path within storage/app/public/
     */
    public static function syncToPublicStorage(string $relativePath): void
    {
        $source = storage_path('app/public/' . $relativePath);
        $destination = public_path('storage/' . $relativePath);

        File::ensureDirectoryExists(dirname($destination));
        File::copy($source, $destination);
    }
}
