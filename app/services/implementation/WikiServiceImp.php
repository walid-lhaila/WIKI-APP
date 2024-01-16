<?php 
    Class WikiServiceImp implements WikiService{
        private Database $db;

        public function __construct(){
            $this->db = Database::getInstance();
        }

        public function addWiki(Wiki $wiki){
            $addWiki = "INSERT INTO wiki (wikiId, Title, Content, userId, categoryId, created_at) VALUES (:wikiId, :title, :content, :userId, :categoryId, NOW())";
            $this->db->query($addWiki);
            $this->db->bind(":wikiId", $wiki->getWikiId());
            $this->db->bind(":title", $wiki->getTitle());
            $this->db->bind(":content", $wiki->getContent());
            // $this->db->bind(":wikiImg", $wiki->getWikiImg());
            $this->db->bind(":userId", $wiki->getUserId()->getUserId());
            $this->db->bind(":categoryId", $wiki->getCategoryId()->getCategoryId());

            try {
                $this->db->execute();
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function displayWiki(){
            $fetshWikiQuery = "SELECT * FROM wiki JOIN category ON wiki.categoryId = category.categoryId JOIN appUser On wiki.userId = appUser.userId WHERE wiki.archived_at IS NULL";
            $this->db->query($fetshWikiQuery);
            try {
                return $this->db->fetchMultipleRows();
            }catch(PDOException $e){
                die($e->getMessage());
            }

        }
        public function displayWikiOfAuthor($authorId){
            $fetshWikiQuery = "SELECT * FROM wiki JOIN category ON wiki.categoryId = category.categoryId JOIN appUser On wiki.userId = appUser.userId WHERE wiki.archived_at IS NULL AND appUser.userId = :userId"; 
            $this->db->query($fetshWikiQuery);
            $this->db->bind(":userId", $authorId);
            try {
                return $this->db->fetchMultipleRows();
            }catch(PDOException $e){
                die($e->getMessage());
            }

        }
        public function countWikis(){
            $this->db->query("SELECT COUNT(*) as wikiCount FROM wiki WHERE archived_at IS NULL");
            return $result = $this->db->fetchOneRow()->wikiCount;
        }
        public function updateWiki(Wiki $wiki){

        }
        public function deleteWiki($wikiId){
            $archiveWiki = "UPDATE wiki SET archived_at = NOW() WHERE wikiId = :wikiId";
            $this->db->query($archiveWiki);
            $this->db->bind(":wikiId",$wikiId);
            try{
                $this->db->execute();
            }
            catch(PDOException $e){
                die($e->getMessage());
            }

        }


        // public function deleteWikiDefinitivly($wikiId){
        //     $deleteWiki = "DELETE FROM wiki WHERE wikiId = :wikiId";
        //     $this->db->query($deleteWiki);
        //     $this->db->bind(":wikiId",$wikiId);
        //     try{
        //         $this->db->execute();
        //     }
        //     catch(PDOException $e){
        //         die($e->getMessage());
        //     }
        // }
        
    }    

?>