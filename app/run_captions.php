<?php

require __DIR__.'/./vendor/autoload.php';

if(empty($argv[1])) {
    echo "Error: missing sourceDir path.";
    exit;
}

$sourceDir = realpath($argv[1]);

if(!is_dir($sourceDir)) {
    echo "Error: sourceDir do not exists ({$sourceDir}).";
    exit;
}

echo "Captioning {$sourceDir}\n";

$data = json_decode(file_get_contents('captions.json'));

$getColor = function($key) {
    return [
        'WHITE' => [255,255,255],
        'GREY'  => [125,125,125],
        'BLACK' => [0,0,0],
    ][$key];
};

// $getText = fn($item) =>
//      Text::from($item->txt)
//         ->color(...$getColor($item->color ?? 'WHITE'));

use Ghostff\TextToImage\Text;
use Ghostff\TextToImage\TextToImage;

foreach($data as $i) {

    foreach($i->imgs as $img) {
        $imgPath = isset($i->dir) ? "{$i->dir}/{$img}" : "{$img}";
        $sourceImg = "{$sourceDir}/{$imgPath}";

        // var_dump($imgPath);
        // var_dump($sourceImg);
        // continue;

        if(!file_exists($sourceImg)) {
            echo "Error, dont exists: {$sourceImg}\n";
            continue;
        }

        $text = Text::from($i->txt)
            ->color(...$getColor($i->color ?? 'WHITE'));

        (new TextToImage($sourceImg))
            ->addTexts($text->update(function (TextToImage $text_to_image, Text $text, $image) use ($i) {
                $width = imagesx($image);
                $height = imagesy($image);
                $fontSize = $width / 130;

                if($i->pos === 'TL:V') {
                    // var_dump($i->pos);
                    $fontSize = $width / 130;
                    $offset_y = (0.8 * $fontSize * mb_strlen($text->getText()));
                    $text->position($fontSize * 2, $offset_y);
                    $text->rotate(270);
                }

                if($i->pos === 'BL:V') {
                    // var_dump($i->pos);
                    $fontSize = min($width, $height) / 125;
                    $text->position($fontSize * 2, $height - $fontSize);
                    $text->rotate(270);
                }

                if($i->pos === 'BR:H') {
                    // var_dump($i->pos);
                    $offset_x = $width - (0.75 * $fontSize * mb_strlen($text->getText()));
                    $text->position($offset_x, $height - $fontSize);
                }

                $text->font($fontSize, __DIR__ . '/FreeSans.ttf');

                // die;
                // $text->position(intval($text_to_image->getHeight() / 2), intval($text_to_image->getWidth() / 2));
            }))
            ->render("{$sourceImg}");

        echo "Generated: {$sourceImg}\n";
    }
}
