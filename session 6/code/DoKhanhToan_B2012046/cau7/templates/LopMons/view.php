<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LopMon $lopMon
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Lop Mon'), ['action' => 'edit', $lopMon->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lop Mon'), ['action' => 'delete', $lopMon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lopMon->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lop Mons'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lop Mon'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lopMons view content">
            <h3><?= h($lopMon->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Subject') ?></th>
                    <td><?= $lopMon->has('subject') ? $this->Html->link($lopMon->subject->id, ['controller' => 'Subjects', 'action' => 'view', $lopMon->subject->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nien Khoa') ?></th>
                    <td><?= h($lopMon->nien_khoa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lopMon->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Diems') ?></h4>
                <?php if (!empty($lopMon->diems)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Student Id') ?></th>
                            <th><?= __('Lop Mon Id') ?></th>
                            <th><?= __('Diem') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($lopMon->diems as $diems) : ?>
                        <tr>
                            <td><?= h($diems->student_id) ?></td>
                            <td><?= h($diems->lop_mon_id) ?></td>
                            <td><?= h($diems->diem) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Diems', 'action' => 'view', $diems->student_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Diems', 'action' => 'edit', $diems->student_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Diems', 'action' => 'delete', $diems->student_id], ['confirm' => __('Are you sure you want to delete # {0}?', $diems->student_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
