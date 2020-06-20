<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class certificar extends Controller
{
    public function certificar()
    {
        $attachment_location = $_SERVER["DOCUMENT_ROOT"] . "/resources/views/BBAB8FCDDFE8B623A0F8C8593C322993 (1).txt";
        if (file_exists($attachment_location)) {

            header($_SERVER["SERVER_PROTOCOL"] . " 200 OK");
            header("Cache-Control: public"); // needed for internet explorer
            header("Content-Type: application/zip");
            header("Content-Transfer-Encoding: Binary");
            header("Content-Length:".filesize($attachment_location));
            header("Content-Disposition: attachment; filename=file.zip");
            readfile($attachment_location);
            die();        
        } else {
            die("Error: File not found.");
        } 
    }
    return file;
}