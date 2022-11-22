<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Students'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="students view content">
            <h3><?= h($student->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ho Ten') ?></th>
                    <td><?= h($student->ho_ten) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($student->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gioi Tinh') ?></th>
                    <td><?= h($student->gioi_tinh) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mat Khau') ?></th>
                    <td><?= h($student->mat_khau) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($student->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('So Dien Thoai') ?></th>
                    <td><?= $this->Number->format($student->so_dien_thoai) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ngay Sinh') ?></th>
                    <td><?= h($student->ngay_sinh) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Diems') ?></h4>
                <?php if (!empty($student->diems)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Student Id') ?></th>
                            <th><?= __('Lop Mon Id') ?></th>
                            <th><?= __('Diem') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($student->diems as $diems) : ?>
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
