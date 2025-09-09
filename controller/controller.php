<?php 

class MusicController extends MusicModel {
    public function getMusic() {
        return $this->findAll();
    }

    public function getMusicBy() {
        if (!isset($_GET['id'])) {
            return;
        }
        $onlyId = preg_replace('/\D/', '', $_GET['id']);
        if ($onlyId !== "") {
            return $this->findOne($_GET['id']);
        }
    }
}
?>
