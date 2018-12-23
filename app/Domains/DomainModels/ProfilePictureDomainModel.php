<?php
/**
 * Created by PhpStorm.
 * UserDomainModel: UserDomainModel
 * Date: 12/21/2018
 * Time: 10:32 PM
 */

namespace App\Domains\DomainModels;


class ProfilePictureDomainModel
{
    protected $filename;

    /**
     * Properties GETTER
     * @author Yansen
     *
     */
    public function getFileName()	{ return $this->filename; }


    /**
     * Properties SETTER
     * @author Yansen
     *
     */
    protected function setFilename($filename)
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * UserDomainModel Constructor
     * @author Yansen
     */
    protected function __construct(){}


    /**
     * Get the image directory's path
     * @author Yansen
     *
     * @return String
     */
    public function getImageDirectory()
    {
        return "/uploads/profile_pictures";
    }


    /**
     * Get the image's path
     * @author Yansen
     *
     * @return String
     */
    public function getImagePath()
    {
        return $this->getImageDirectory()
            . $this->getFilename();
    }


    /**
     * Move image file to public directory
     * @author Yansen
     *
     * @param array $file
     * @param String $path
     * @return void
     */
    protected function moveToPublicDirectory($file, $path)
    {
        $file->move($path, $file->getFilename());
    }


    /**
     * Factory method to create Profile Picture
     * and save it to public/uploads/images
     * @author Yansen
     *
     * @param array $file
     * @return ProfilePictureDomainModel
     */
    public static function createProfilePictureFromFile($file)
    {
        $profilePicture = new ProfilePictureDomainModel();

        $profilePicture->setFilename($file->getFilename());

        $profilePicture->moveToPublicDirectory(
            $file,
            $profilePicture->getImageDirectory());

        return $profilePicture;
    }

    /**
     * Factory method to create Profile Picture
     * from filename
     * @author Yansen
     *
     * @param String $filename
     * @return ProfilePictureDomainModel
     */
    public static function createProfilePicture($filename)
    {
        $profilePicture = new ProfilePictureDomainModel();

        $profilePicture->setFilename($filename);

        return $profilePicture;
    }
}