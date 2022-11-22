<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Diem $diem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Diem'), ['action' => 'edit', $diem->student_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Diem'), ['action' => 'delete', $diem->student_id], ['confirm' => __('Are you sure you want to delete # {0}?', $diem->student_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Diems'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Diem'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="diems view content">
            <h3><?= h($diem->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Student') ?></th>
                    <td><?= $diem->has('student') ? $this->Html->link($diem->student->id, ['controller' => 'Students', 'action' => 'view', $diem->student->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Lop Mon') ?></th>
                    <td><?= $diem->has('lop_mon') ? $this->Html->link($diem->lop_mon->id, ['controller' => 'LopMons', 'action' => 'view', $diem->lop_mon->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Diem') ?></th>
                    <td><?= $this->Number->format($diem->diem) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
