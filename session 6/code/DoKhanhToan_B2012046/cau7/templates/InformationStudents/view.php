<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InformationStudent $informationStudent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Information Student'), ['action' => 'edit', $informationStudent->mssv], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Information Student'), ['action' => 'delete', $informationStudent->mssv], ['confirm' => __('Are you sure you want to delete # {0}?', $informationStudent->mssv), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Information Students'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Information Student'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="informationStudents view content">
            <h3><?= h($informationStudent->mssv) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ho Ten') ?></th>
                    <td><?= h($informationStudent->ho_ten) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mssv') ?></th>
                    <td><?= $this->Number->format($informationStudent->mssv) ?></td>
                </tr>
                <tr>
                    <th><?= __('Diem Tich Luy') ?></th>
                    <td><?= $this->Number->format($informationStudent->diem_tich_luy) ?></td>
                </tr>
                <tr>
                    <th><?= __('Somonhoc') ?></th>
                    <td><?= $this->Number->format($informationStudent->somonhoc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Somontichluy') ?></th>
                    <td><?= $this->Number->format($informationStudent->somontichluy) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tongsotinchidatichluy') ?></th>
                    <td><?= $informationStudent->tongsotinchidatichluy === null ? '' : $this->Number->format($informationStudent->tongsotinchidatichluy) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
