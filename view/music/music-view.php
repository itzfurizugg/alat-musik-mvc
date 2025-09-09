<?php

class MusicView extends MusicController {
    public function show() {
        $members = $this->getMusic();

        foreach ($members as $member) { ?>
            <tr>
                <td><?php echo $member['id']; ?></td>
                <td><?php echo $member['name']; ?></td>
                <td><?php echo $member['type']; ?></td>
                <td><?php echo $member['play']; ?></td>
            </tr>
<?php
        }
    }

    public function find() {
        $detailMember = $this->getMusicBy();
        if (empty($detailMember))
            return;

        foreach ($detailMember as $detail) { ?>
            <div class="d-flex justify-content-center">
                <table class="table table-striped w-50">
                    <tr>
                        <th>Nama:</th>
                        <td><?php echo $detail['name']; ?></td>
                    </tr>
                    <tr>
                        <th>Jenis:</th>
                        <td><?php echo $detail['type']; ?></td>
                    </tr>
                    <tr>
                        <th>Cara Memainkan:</th>
                        <td><?php echo $detail['play']; ?></td>
                    </tr>
            </table>
            </div>
<?php
        }
    }
}
?>
