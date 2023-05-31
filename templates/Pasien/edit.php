<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pasien $pasien
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pasien->No_RM],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pasien->No_RM), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pasien'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pasien form content">
            <?= $this->Form->create($pasien) ?>
            <fieldset>
                <legend><?= __('Edit Pasien') ?></legend>
                <?php
                    echo $this->Form->control('Nama');
                    echo $this->Form->control('tempat_lahir');
                    echo $this->Form->control('tgl_lahir');
                    echo $this->Form->control('Alamat');
                    echo $this->Form->control('gol_darah');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
