<?php 
class tagServiceImp implements tagService {
    private Database $db;
    public function __construct(){
        $this->db = Database::getInstance();
    }
    public function addTag(Tag $tag){
        $addTagQuery = "INSERT INTO tag (tagId, tagName, created_at) VALUES (:tagId, :tagName, NOW())";
        $this->db->query($addTagQuery);
        $this->db->bind(":tagId",$tag->getTagId());
        $this->db->bind(":tagName", $tag->getTagName());
        
        try {
            $this->db->execute();

        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function displayTag(){
        
    }

    public function updateTag(Tag $tag){
        
    }

    public function deleteTag($tagId){
        
    }


}


?>