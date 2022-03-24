<?php 

namespace App\Utilities;

use ZipArchive;

class Zipper{
    protected $zipper;
    public function __construct()
    {
        $this->zipper = new \ZipArchive;
    }
    public function createOrModify($filename){
$this->zipper->open($filename,ZipArchive::CREATE |ZipArchive::OVERWRITE );
  return $this;
        //    if (file_exists($filename)){
    //     $this->zipper->open($filename,ZipArchive::OVERWRITE);
    // }
    // else{
    //     $this->zipper->open($filename,ZipArchive::CREATE);
    //    }
       }
}