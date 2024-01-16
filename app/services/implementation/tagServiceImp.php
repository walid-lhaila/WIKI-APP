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
        $fetshAllTags = "SELECT * FROM tag ORDER BY created_at DESC";
        $this->db->query($fetshAllTags);
        try {
           return $this->db->fetchMultipleRows();
        }catch (PDOException $e){
            die($e->getMessage());
        }
        
    }

    public function countTags(){
        $this->db->query("SELECT COUNT(*) as tagCount FROM tag");
        return $result = $this->db->fetchOneRow()->tagCount;
    }

    public function updateTag(Tag $tag){
        $updateTagQuery = "UPDATE tag SET tagName = :tagName WHERE tagId = :tagId";
        $this->db->query($updateTagQuery);
        $this->db->bind(":tagName", $tag->getTagName());
        $this->db->bind(":tagId", $tag->getTagId());
 
        try{
         $this->db->execute();
        }
        catch(PDOException $e){
         die($e->getMessage());
     }
     }
    public function deleteTag($tagId){
        $deleteTagQuery = "DELETE FROM tag WHERE tagId = :tagId";
        // echo "Query: " . $deleteTagQuery;
        $this->db->query($deleteTagQuery);
        $this->db->bind(":tagId",$tagId);
        try {
            $this->db->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        } 
    }


}


?>