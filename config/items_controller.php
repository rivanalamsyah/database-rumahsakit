<?php
    class ItemsController extends AppController {
        var $name = 'Items';
        var $helpers = array('Html', 'Form');
        function index() {
            $this->set('items', $this->item->find('all'));
        }
        function add() {
            if (!empty($this->data)) {
                $this->Item->create();
                if ($this->Item->save($this->data)){
                    $this->Session->setFlash('Agenda telah disimpan');
                    $this->Session->setFlash('Agenda telah disimpan');
                } else {
                    $this->Session->setFlash('Agenda belum disimpan. Coba lagi!.');
                }
            }
        }
    }
?>