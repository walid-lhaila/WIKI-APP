<?php 
interface tagService {
    public function addTag(Tag $tag);
    public function displaytag();
    public function updateTag(Tag $tag);
    public function deleteTag($tagId);
}


?>