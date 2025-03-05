<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Poste $poste
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $poste->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $poste->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Postes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="postes form content">
            <?= $this->Form->create($poste) ?>
            <fieldset>
                <legend><?= __('Edit Poste') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('content');
                    echo $this->Form->control('user_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
