<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Diem> $diems
 */
?>
<div class="diems index content">
    <?= $this->Html->link(__('New Diem'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Diems') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('student_id') ?></th>
                    <th><?= $this->Paginator->sort('lop_mon_id') ?></th>
                    <th><?= $this->Paginator->sort('diem') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($diems as $diem): ?>
                <tr>
                    <td><?= $diem->has('student') ? $this->Html->link($diem->student->id, ['controller' => 'Students', 'action' => 'view', $diem->student->id]) : '' ?></td>
                    <td><?= $diem->has('lop_mon') ? $this->Html->link($diem->lop_mon->id, ['controller' => 'LopMons', 'action' => 'view', $diem->lop_mon->id]) : '' ?></td>
                    <td><?= $this->Number->format($diem->diem) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $diem->student_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $diem->student_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $diem->student_id], ['confirm' => __('Are you sure you want to delete # {0}?', $diem->student_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
