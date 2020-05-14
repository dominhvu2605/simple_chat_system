<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $feeds
 */
?>

<div class="column-responsive column-80">
    <div class="feeds form content">
        <?= $this->Form->create($feed) ?>
        <fieldset>
            <legend><?= __('Add Feed') ?></legend>
            <?php
                echo $this->Form->control('name');
                echo $this->Form->control('message');
                echo $this->Form->control('create_at');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>


<div class="table-responsive">
    <table>
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('message') ?></th>
                <th><?= $this->Paginator->sort('create_at') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($feeds as $feed): ?>
            <tr>
                <td><?= h($feed->name) ?></td>
                <td><?= h($feed->message) ?></td>
                <td><?= h($feed->create_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $feed->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $feed->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $feed->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feed->id)]) ?>
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
</div>

