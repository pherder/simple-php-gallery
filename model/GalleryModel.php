<?php

class GalleryModel
{
    /**
     * Returns array of directories in given directory
     * @param string $_directory
     * @return mixed 
     */
    public function getListOfDirectories($_directory)
    {
        return array_values(array_diff(scandir($_directory), array(".", "..")));
    }

    /**
     * Changes underscores to spaces and deletes 2 first letters from folders names
     * @param array $_folders
     * @return array
     */
    public function makeCategoriesFromFolders($_folders, $_customCategoriesOrder)
    {
        $length = count($_folders);
        for ($i = 0; $i < $length; $i++) {
            if ($_customCategoriesOrder)
                $_folders[$i] = substr($_folders[$i], 2);
            $_folders[$i] = str_replace("_", " ", $_folders[$i]);
        }

        return $_folders;
    }

    /**
     * Returns array of directories of array of image names
     * @param string $_rootDirectory
     * @param array $_folders
     * @return array
     */
    public function getPhotosFromFolders($_rootDirectory, $_folders)
    {
        foreach ($_folders as $folder) {
            $photoNames[$folder] = $this->getListOfDirectories("$_rootDirectory/$folder");
        }
        return $photoNames;
    }
}
