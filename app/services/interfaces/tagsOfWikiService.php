<?php 
interface TagsOfWikiService{
    
    public function displayTagsOfWiki(Wiki $wiki);
    public function addTagsOfWiki(Wiki $wiki,Tag $tag);
}


?>