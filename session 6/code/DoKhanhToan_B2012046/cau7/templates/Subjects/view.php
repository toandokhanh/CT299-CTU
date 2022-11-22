<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subject $subject
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Subject'), ['action' => 'edit', $subject->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Subject'), ['action' => 'delete', $subject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subject->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Subjects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Subject'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subjects view content">
            <h3><?= h($subject->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Subject Name') ?></th>
                    <td><?= h($subject->subject_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($subject->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('So Tin Chi') ?></th>
                    <td><?= $this->Number->format($subject->so_tin_chi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Diem Tich Luy') ?></th>
                    <td><?= $this->Number->format($subject->diem_tich_luy) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Lop Mons') ?></h4>
                <?php if (!empty($subject->lop_mons)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Subject Id') ?></th>
                            <th><?= __('Nien Khoa') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($subject->lop_mons as $lopMons) : ?>
                        <tr>
                            <td><?= h($lopMons->id) ?></td>
                            <td><?= h($lopMons->subject_id) ?></td>
                            <td><?= h($lopMons->nien_khoa) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'LopMons', 'action' => 'view', $lopMons->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'LopMons', 'action' => 'edit', $lopMons->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'LopMons', 'action' => 'delete', $lopMons->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lopMons->id)]) ?>
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
