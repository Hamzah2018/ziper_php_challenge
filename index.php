<?php 
use App\Utilities\Zipper;
require_once 'vendor/autoload.php';
$zipper = new Zipper;
// $zipper->createOrModify('downloadable.zip')->addFiles('.getignoer','composer.json'))->addDirectories();

$zipper->createOrModify('downloadable.zip')->addFiles(['.gitignore','composer.json'])->addDirectories(['log','test'])->close();