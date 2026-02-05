<?php

$directory = __DIR__ . '/public/images';
$images = glob($directory . '/*.{png,jpg,jpeg}', GLOB_BRACE);

if (empty($images)) {
    echo "No images found in $directory\n";
    exit;
}

echo "Found " . count($images) . " images. Starting conversion...\n";

foreach ($images as $image) {
    if (str_ends_with($image, 'logo-sem-fundo.png') || str_ends_with($image, 'favicon.ico')) {
        echo "Skipping excluded file: " . basename($image) . "\n";
        continue;
    }

    $info = getimagesize($image);
    $mime = $info['mime'];

    switch ($mime) {
        case 'image/jpeg':
            $source = imagecreatefromjpeg($image);
            break;
        case 'image/png':
            $source = imagecreatefrompng($image);
            imagepalettetotruecolor($source);
            imagealphablending($source, true);
            imagesavealpha($source, true);
            break;
        default:
            echo "Skipping unsupported mime type: $mime for " . basename($image) . "\n";
            continue 2;
    }

    if ($source) {
        $destination = preg_replace('/\.(png|jpg|jpeg)$/i', '.webp', $image);

        // Quality 80 for good balance
        if (imagewebp($source, $destination, 80)) {
            echo "Converted: " . basename($image) . " -> " . basename($destination) . "\n";
            imagedestroy($source);
        } else {
            echo "Failed to save: " . basename($destination) . "\n";
        }
    } else {
        echo "Failed to load: " . basename($image) . "\n";
    }
}

echo "Conversion complete.\n";
