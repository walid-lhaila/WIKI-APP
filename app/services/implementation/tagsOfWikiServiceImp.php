<?php 
    class TagsOfWikiServiceImp implements tagsOfWikiService{
        private Database $db;

        public function __construct(){
            $this->db = Database::getInstance();
        }
        public function addTagsOfWiki(Wiki $wiki, Tag $tag){
            $addTagOfWikiQuery = "INSERT INTO tagsofwiki VALUES (:wikiId , :tagId)";
            $this->db->query($addTagOfWikiQuery);
            $this->db->bind(":wikiId",$wiki->getWikiId());
            $this->db->bind(":tagId",$tag->getTagId());
            try{
             $this->db->execute();
            }
            catch(PDOException $e){
             die($e->getMessage());
            }
        }

        public function displayTagsOfWiki(Wiki $wiki){

        }
    }


?>