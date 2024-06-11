<?php

namespace App\Service;

class MyService
{
    public function compressImage($source, $destination, $quality, $convertjpg) {
        $info = getimagesize($source);
        $mime = $info['mime'];

        switch ($mime) {
            case 'image/jpeg':
                $image = imagecreatefromjpeg($source);
                if(!$convertjpg) imagejpeg($image, $destination, $quality);
                break;
            case 'image/png':
                $image = imagecreatefrompng($source);
                $pngQuality = 9 - (int)($quality / 10);
                if(!$convertjpg) imagepng($image, $destination, $pngQuality);
                break;
            case 'image/webp': // Ajout de la prise en charge du format WebP
                $image = imagecreatefromwebp($source);
                break;
            case 'image/gif': // Ajout de la prise en charge du format GIF
                $image = imagecreatefromgif($source);
                break;
            case 'image/bmp': // Ajout de la prise en charge du format BMP
                $image = imagecreatefrombmp($source);
                break;
            // Ajouter d'autres cas pour les formats supplémentaires ici
            default:
                // Si le format n'est pas pris en charge, essayez de le lire comme une image générique
                $source = file_get_contents($source);
                $image = @imagecreatefromstring($source);
                break;
        }
        
        // Si la conversion en JPEG est demandée ou si c'est une image WebP, convertir et compresser en JPEG
        if($convertjpg || $mime === 'image/webp') {
            if(imagejpeg($image, $destination, $quality)) {
                imagedestroy($image);
                return true; // Succès
            } else {
                imagedestroy($image);
                return false; // Échec
            }
        }
        
        imagedestroy($image);
        return true; // Succès
    }

}