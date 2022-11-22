<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InformationStudent $informationStudent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $informationStudent->mssv],
                ['confirm' => __('Are you sure you want to delete # {0}?', $informationStudent->mssv), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Information Students'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="informationStudents form content">
            <?= $this->Form->create($informationStudent) ?>
            <fieldset>
                <legend><?= __('Edit Information Student') ?></legend>
                <?php
                    echo $this->Form->control('ho_ten');
                    echo $this->Form->control('diem_tich_luy');
                    echo $this->Form->control('somonhoc');
                    echo $this->Form->control('somontichluy');
                    echo $this->Form->control('tongsotinchidatichluy');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
