<?php
class Dokter extends AppModel {
    var $name = 'Dokter';
    var $validate = array('nama'=> array('rule' => VALID_NOT_EMPTY, 'massage'=> 'Nama item tidak boleh kosong.'));
}
?>