<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\LopMon> $lopMons
 */
?>
<div class="lopMons index content">
    <?= $this->Html->link(__('New Lop Mon'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lop Mons') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('subject_id') ?></th>
                    <th><?= $this->Paginator->sort('nien_khoa') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lopMons as $lopMon): ?>
                <tr>
                    <td><?= $this->Number->format($lopMon->id) ?></td>
                    <td><?= $lopMon->has('subject') ? $this->Html->link($lopMon->subject->id, ['controller' => 'Subjects', 'action' => 'view', $lopMon->subject->id]) : '' ?></td>
                    <td><?= h($lopMon->nien_khoa) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lopMon->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lopMon->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lopMon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lopMon->id)]) ?>
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
