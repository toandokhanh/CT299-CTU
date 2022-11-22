<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\InformationStudent> $informationStudents
 */
?>
<div class="informationStudents index content">
    <?= $this->Html->link(__('New Information Student'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Information Students') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('mssv') ?></th>
                    <th><?= $this->Paginator->sort('ho_ten') ?></th>
                    <th><?= $this->Paginator->sort('diem_tich_luy') ?></th>
                    <th><?= $this->Paginator->sort('somonhoc') ?></th>
                    <th><?= $this->Paginator->sort('somontichluy') ?></th>
                    <th><?= $this->Paginator->sort('tongsotinchidatichluy') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($informationStudents as $informationStudent): ?>
                <tr>
                    <td><?= $this->Number->format($informationStudent->mssv) ?></td>
                    <td><?= h($informationStudent->ho_ten) ?></td>
                    <td><?= $this->Number->format($informationStudent->diem_tich_luy) ?></td>
                    <td><?= $this->Number->format($informationStudent->somonhoc) ?></td>
                    <td><?= $this->Number->format($informationStudent->somontichluy) ?></td>
                    <td><?= $informationStudent->tongsotinchidatichluy === null ? '' : $this->Number->format($informationStudent->tongsotinchidatichluy) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $informationStudent->mssv]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $informationStudent->mssv]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $informationStudent->mssv], ['confirm' => __('Are you sure you want to delete # {0}?', $informationStudent->mssv)]) ?>
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
