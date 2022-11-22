<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tk> $tks
 */
?>
<div class="tks index content">
    <?= $this->Html->link(__('New Tk'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tks') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('major_id') ?></th>
                    <th><?= $this->Paginator->sort('name_major') ?></th>
                    <th><?= $this->Paginator->sort('num_students') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tks as $tk): ?>
                <tr>
                    <td><?= $tk->id === null ? '' : $this->Number->format($tk->id) ?></td>
                    <td><?= $tk->has('major') ? $this->Html->link($tk->major->id, ['controller' => 'Majors', 'action' => 'view', $tk->major->id]) : '' ?></td>
                    <td><?= h($tk->name_major) ?></td>
                    <td><?= $this->Number->format($tk->num_students) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tk->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tk->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tk->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tk->id)]) ?>
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
