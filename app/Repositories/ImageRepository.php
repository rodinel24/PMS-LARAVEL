<?php

namespace App\Repositories;

use Intervention\Image\Facades\Image as InterImage;

class ImageRepository
{
    public function uploadImage($path, $file)
    {
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
    
        $url = uniqid() . '.' . $file->getClientOriginalExtension();
        $fullpathfile = $path . '/' . $url;
        
        \Image::make($file)->fit(1000, 1000)->save($fullpathfile);
    
        return $url;
    }
    

    public function destroy($dir)
    {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    filetype($dir . "/" . $object) == "dir" ?
                        $this->destroy($dir . "/" . $object)
                        :
                        unlink($dir . "/" . $object);
                }
            }
            reset($objects);
            rmdir($dir);
        }
    }
}
