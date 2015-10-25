<?php
/* Include folder interface */
include("interfaces/FolderInterface.php");


class folder implements FolderInterface
{

  public $name;
  public $created;
  public $path;


  public function __construct() {

  }

  public function getName(){

  }
 
  public function setName($name){
      return $this->name = $name;
  }

  public function getCreatedTime(){

  }

  public function setCreatedTime($created){
      return $this->created = $created;
  }

  public function getPath(){

  }

  public function setPath($path){
      return $this->path = $path;
  }

  public function insert_folder_record() {      
      mysql_query("INSERT INTO fms_folders(name, creation_time, folder_path) VALUES('".$this->name."', '".$this->created."', '".$this->path."')");      
  }

}
