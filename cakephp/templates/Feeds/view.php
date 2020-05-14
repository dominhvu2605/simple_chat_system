<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $feed
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Feed'), ['action' => 'edit', $feed->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Feed'), ['action' => 'delete', $feed->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feed->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Feeds'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Feed'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="feeds view content">
            <h3><?= h($feed->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($feed->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Message') ?></th>
                    <td><?= h($feed->message) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($feed->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Create At') ?></th>
                    <td><?= h($feed->create_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
