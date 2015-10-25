<?php
/* Include file system interface */
include("../interfaces/FileSystemInterface.php");


class fileSystem implements FileSystemInterface
{
  
  public function __construct() {
    
  }  
 
  public function createFile(FileInterface $file, FolderInterface $parent) {

  }

  public function updateFile(FileInterface $file){

  }

  public function renameFile(FileInterface $file, $newName){

  }

  public function deleteFile(FileInterface $file){

  }

  public function createRootFolder(FolderInterface $folder){

  }

  public function createFolder(FolderInterface $folder, FolderInterface $parent){

  }

  public function deleteFolder(FolderInterface $folder){

  }

  public function renameFolder(FolderInterface $folder, $newName){

  }

  public function getFolderCount(FolderInterface $folder){

  }

  public function getFileCount(FolderInterface $folder){

  }

  public function getDirectorySize(FolderInterface $folder){

  }

  public function getFolders(FolderInterface $folder){

  }

  public function getFiles(FolderInterface $folder){

  }

}
?>