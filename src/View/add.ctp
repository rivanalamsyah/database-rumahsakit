<?php echo $form->create('pasien');?>
<fieldset>
<legend>Tambah Pasien</legend>
<?php
echo $form->input('norm');
echo $form->input('nama');
echo $form->input('tempatlahir');
echo $form->input('tgllahir');
echo $form->input('alamat');
echo $form->input('goldarah');
?>
</fieldset>
<?php echo $form->end('Tambah Pasien');?>
<?php echo $html->link('Daftar semua Pasien',
array('action'=>'index'));?>
</fieldset>
<?php echo $form->end('Tambah Pasien');?>
<?php echo $html->link('Daftar semua Pasien',
array('action'=>'index'));
?>