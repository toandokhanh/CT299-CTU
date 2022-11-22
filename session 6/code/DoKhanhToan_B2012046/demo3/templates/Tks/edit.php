<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tk $tk
 * @var string[]|\Cake\Collection\CollectionInterface $majors
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tk->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tk->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tks form content">
            <?= $this->Form->create($tk) ?>
            <fieldset>
                <legend><?= __('Edit Tk') ?></legend>
                <?php
                    echo $this->Form->control('major_id', ['options' => $majors, 'empty' => true]);
                    echo $this->Form->control('name_major');
                    echo $this->Form->control('num_students');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
