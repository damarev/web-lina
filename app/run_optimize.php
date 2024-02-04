<?php

require __DIR__.'/vendor/autoload.php';

if(empty($argv[1])) {
    echo "Error: missing sourceDir path.";
    exit;
}

$sourceDir = realpath($argv[1]);

if(!is_dir($sourceDir)) {
    echo "Error: sourceDir do not exists ({$sourceDir}).";
    exit;
}

echo "Optimizing {$sourceDir}\n";

function filesIn(string $path, $pattern): \Generator
{
    if (! is_dir($path)) {
        throw new \RuntimeException("{$path} is not a directory ");
    }

    $it = new \RecursiveDirectoryIterator($path);
    $it = new \RecursiveIteratorIterator($it);
    $it = new \RegexIterator($it, $pattern, \RegexIterator::MATCH);

    yield from $it;
}

use Spatie\ImageOptimizer\OptimizerChainFactory;

// ImageOptimizer::optimize($pathToImage, $pathToOptimizedImage);

$optimizerChain = OptimizerChainFactory::create();

$files = iterator_to_array(filesIn($sourceDir,'/\.jpg$/'));

foreach($files as $file) {
    $filePath = $file->getRealPath();
    $optimizerChain->optimize($filePath);
    echo "Optimized: {$filePath}\n";
}
