<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Poste> $postes
 */
?>
<div class="postes index content">
    <?= $this->Html->link(__('New Poste'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Postes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('content') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($postes as $poste): ?>
                <tr>
                    <td><?= $this->Number->format($poste->id) ?></td>
                    <td><?= h($poste->title) ?></td>
                    <td><?= h($poste->content) ?></td>
                    <td><?= $poste->hasValue('user') ? $this->Html->link($poste->user->name, ['controller' => 'Users', 'action' => 'view', $poste->user->id]) : '' ?></td>
                    <td><?= h($poste->created) ?></td>
                    <td><?= h($poste->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $poste->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $poste->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $poste->id], ['confirm' => __('Are you sure you want to delete # {0}?', $poste->id)]) ?>
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