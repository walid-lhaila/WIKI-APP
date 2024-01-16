<?php 
    class tagsOfWiki {
        private Wiki $wikiId;
        private Tag $tagId;

        public function __construct(){

        }
        public function getWikiId(){
            return $this->wikiId;
        }
        public function setWikiId($wikiId){
            $this->wikiId = $wikiId;
        }
        public function getTagId(){
            return $this->tagId;
        }
        public function setTagId($tagId){
            $this->tagId = $tagId;
        }
    }



?>