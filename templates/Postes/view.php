<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Poste $poste
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Poste'), ['action' => 'edit', $poste->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Poste'), ['action' => 'delete', $poste->id], ['confirm' => __('Are you sure you want to delete # {0}?', $poste->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Postes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Poste'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="postes view content">
            <h3><?= h($poste->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($poste->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Content') ?></th>
                    <td><?= h($poste->content) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $poste->hasValue('user') ? $this->Html->link($poste->user->name, ['controller' => 'Users', 'action' => 'view', $poste->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($poste->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($poste->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($poste->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>