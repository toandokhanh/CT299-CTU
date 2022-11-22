<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Major> $majors
 */
?>
<div class="majors index content">
    <?= $this->Html->link(__('New Major'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Majors') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name_major') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($majors as $major): ?>
                <tr>
                    <td><?= $this->Number->format($major->id) ?></td>
                    <td><?= h($major->name_major) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $major->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $major->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $major->id], ['confirm' => __('Are you sure you want to delete # {0}?', $major->id)]) ?>
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
