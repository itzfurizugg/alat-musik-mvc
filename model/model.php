<?php

class MusicModel extends Connect {
    protected $name;
    protected $type;
    protected $play;

    protected function findAll() {
        $result = $this->connect()->query("SELECT * FROM instrument");
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                $music[] = $data;
            }
            return $music;
        }
    }

    protected function findOne($id) {
        $result = $this->connect()->query("SELECT * FROM instrument WHERE id = '$id'");
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                $music[] = $data;
            }
            return $music;
        }
    }
}
?>
