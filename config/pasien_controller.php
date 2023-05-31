<?php
class PasienController extends AppController {
    public $name = 'Pasien';
    public $helpers = array('Html', 'Form');
    
    public function index() {
        $this->set('Pasien', $this->Pasien->find('all'));
    }
    
    public function add() {
        if ($this->request->is('post')) {
            $this->Pasien->create();
            if ($this->Pasien->save($this->request->data)) {
                $this->Session->setFlash('Pasien telah disimpan');
                $this->redirect(array('action'=>'index'), null, true);
            } else {
                $this->Session->setFlash('Pasien belum disimpan. Coba lagi!');
            }
        }
    }
}
?>
