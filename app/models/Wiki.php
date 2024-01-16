<?php 
class Wiki {
    private $wikiId;
    private $title;
    private $content;
    private $wikiImg;
    private AppUser $userId;
    private Category $categoryId;
    private $created_at;
    private $archived_at;
    public function __construct(){

    }
    public function getWikiId(){
        return $this->wikiId;
    }

    public function setWikiId($wikiId){
        $this->wikiId = $wikiId;
    }

    // Getter and Setter for title
    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    // Getter and Setter for content
    public function getContent(){
        return $this->content;
    }

    public function setContent($content){
        $this->content = $content;
    }

    // Getter and Setter for wikiImg
    public function getWikiImg(){
        return $this->wikiImg;
    }

    public function setWikiImg($wikiImg){
        $this->wikiImg = $wikiImg;
    }

    // Getter and Setter for userId
    public function getUserId(){
        return $this->userId;
    }

    public function setUserId(AppUser $userId){
        $this->userId = $userId;
    }

    // Getter and Setter for categoryId
    public function getCategoryId(){
        return $this->categoryId;
    }

    public function setCategoryId(Category $categoryId){
        $this->categoryId = $categoryId;
    }

    // Getter and Setter for created_at
    public function getCreatedAt(){
        return $this->created_at;
    }

    public function setCreatedAt($created_at){
        $this->created_at = $created_at;
    }

    public function getArchivedAt(){
        return $this->archived_at;
    }

    public function setArchivedAt($archived_at){
        $this->archived_at = $archived_at;
    }

}



?>