<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LopMon $lopMon
 * @var string[]|\Cake\Collection\CollectionInterface $subjects
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lopMon->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lopMon->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Lop Mons'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lopMons form content">
            <?= $this->Form->create($lopMon) ?>
            <fieldset>
                <legend><?= __('Edit Lop Mon') ?></legend>
                <?php
                    echo $this->Form->control('subject_id', ['options' => $subjects]);
                    echo $this->Form->control('nien_khoa');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
