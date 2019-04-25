<?php

class Gallery
{
    /**
     * Path to the folders that contain folders (images divided into categories)
     */
    private $rootDirectory = 'assets/gallery';

    /**
     * Set custom categories order
     */
    private $customCategoriesOrder = true;

    /**
     * Disable sidebar
     */
    private $disableSidebar = false;

    public function __construct()
    {
        require APP . 'model/GalleryModel.php';
        $this->GalleryModel = new GalleryModel();
    }

    public function showGallery()
    {
        require APP . 'view/head.php';
        require APP . 'view/howItWorks.php';

        $folders = $this->GalleryModel->getListOfDirectories($this->rootDirectory);

        if ($folders == null) {
            require APP . 'view/noImages.php';
        } else {
            if (count($folders) == 1)
                $this->disableSidebar = true;
            $categories = $this->GalleryModel->makeCategoriesFromFolders($folders, $this->customCategoriesOrder);
            $photos = $this->GalleryModel->getPhotosFromFolders($this->rootDirectory, $folders);
            $rootDirectory = $this->rootDirectory;
            require APP . 'view/gallery.php';
        }
        require APP . 'view/footer.php';
    }
}
