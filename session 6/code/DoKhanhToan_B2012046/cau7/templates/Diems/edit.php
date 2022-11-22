<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Diem $diem
 * @var string[]|\Cake\Collection\CollectionInterface $students
 * @var string[]|\Cake\Collection\CollectionInterface $lopMons
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $diem->student_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $diem->student_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Diems'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="diems form content">
            <?= $this->Form->create($diem) ?>
            <fieldset>
                <legend><?= __('Edit Diem') ?></legend>
                <?php
                    echo $this->Form->control('diem');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
