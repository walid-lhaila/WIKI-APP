<?php 

class Tag {
    private $tagId;
    private $tagName;
    private $created_at;

    public function __construct(){

    }
    public function getTagId(){
        return $this->tagId;
    }

    public function setTagId($tagId){
        $this->tagId = $tagId;
    }

    // Getter and Setter for tagName
    public function getTagName(){
        return $this->tagName;
    }

    public function setTagName($tagName){
        $this->tagName = $tagName;
    }

    // Getter and Setter for created_at
    public function getCreatedAt(){
        return $this->created_at;
    }

    public function setCreatedAt($created_at){
        $this->created_at = $created_at;
    }

}


?>