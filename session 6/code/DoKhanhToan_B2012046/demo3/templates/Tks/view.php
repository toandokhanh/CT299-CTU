<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tk $tk
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tk'), ['action' => 'edit', $tk->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tk'), ['action' => 'delete', $tk->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tk->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tk'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tks view content">
            <h3><?= h($tk->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Major') ?></th>
                    <td><?= $tk->has('major') ? $this->Html->link($tk->major->id, ['controller' => 'Majors', 'action' => 'view', $tk->major->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name Major') ?></th>
                    <td><?= h($tk->name_major) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $tk->id === null ? '' : $this->Number->format($tk->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Num Students') ?></th>
                    <td><?= $this->Number->format($tk->num_students) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
