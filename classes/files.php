<?php
/* Include file interface */
include("../interfaces/FileInterface.php");


class file implements FileInterface
{

  public function __construct() {

  }
  
  public function getName() {

  }

  public function setName($name){

  }

  public function getSize(){

  }

  public function setSize($size){

  }

  public function getCreatedTime(){

  }

  public function setCreatedTime($created){

  }

  public function getModifiedTime(){

  }

  public function setModifiedTime($modified){

  }

  public function getParentFolder(){

  }

  public function setParentFolder(FolderInterface $parent){

  }

  public function getPath(){

  }
  
}
?>