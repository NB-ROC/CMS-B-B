<?php
namespace App\Controller;

use App\Statics\Route;

class UploadImageController
{
    public static function index()
    {
        $target_dir = "./images/testFile/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
            } else {
                return Route::render("/uploadResult", ["message" => "File is not an image.", "succes" => false]);
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            return Route::render("/uploadResult", ["message" => "Sorry, file has the same name as an existing file.", "succes" => false]);
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
            return Route::render("/uploadResult", ["message" => "Sorry, your file is too large.", "succes" => false]);
        }
        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            return Route::render("/uploadResult", ["message" => "Sorry, only JPG, JPEG and PNG files are allowed.", "succes" => false]);
        }

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            return Route::render("/uploadResult", ["message" => "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.", "succes" => true, "fileName" => htmlspecialchars(basename($_FILES["fileToUpload"]["name"]))]);
        } else {
            return Route::render("/uploadResult", ["message" => "Sorry, there was an error uploading your file.", "succes" => false]);
        }
    }
}