<?php
/**
 * Created by PhpStorm.
 * User: leonid
 * Date: 18.12.19
 * Time: 13:49
 */

namespace App\Service;
use Gedmo\Sluggable\Util\Urlizer;


use Symfony\Component\HttpFoundation\File\UploadedFile;

class UploaderHelper
{
    private $uploadsPath;

    public function __construct(string $uploadsPath)
    {
        $this->uploadsPath = $uploadsPath;
    }

    public function uploadPostImage(UploadedFile $uploadedFile): string
    {
//        $destination = $this->getParameter('kernel.project_dir') . '/public/uploads';
        $destination = $this->uploadsPath;
        $originalName = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
        $newName = Urlizer::urlize($originalName) . '-' . uniqid() . '.' . $uploadedFile->guessExtension();
        $uploadedFile->move(
            $destination,
            $newName
        );
        return $newName;
    }
}