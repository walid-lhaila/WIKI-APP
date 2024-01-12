<?php 
    Class WikiServiceImp implements WikiService{
        private Database $db;

        public function __construct(){
            $this->db = Database::getInstance();
        }

        public function addWiki(Wiki $wiki){

        }
        public function displayWiki(){
            $fetshWikiQuery = "SELECT * FROM wiki JOIN category ON wiki.categoryId = category.categoryId JOIN appUser On wiki.userId = appUser.userId WHERE wiki.archived_at IS NULL ORDER BY wiki.created_at DESC";

        }
        public function updateWiki(Wiki $wiki){

        }
        public function deleteWiki($wikiId){

        }
        
    }    

?>