<?php 

interface WikiService {
    public function addWiki(Wiki $wiki);
    public function updateWiki(Wiki $wiki);
    public function deleteWiki($wiki);
    public function displayWiki();
}

?>