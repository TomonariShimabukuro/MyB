<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Photo $photo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Photo'), ['action' => 'edit', $photo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Photo'), ['action' => 'delete', $photo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $photo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Photos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Photo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="photos view content">
            <h3><?= h($photo->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $photo->has('user') ? $this->Html->link($photo->user->id, ['controller' => 'Users', 'action' => 'view', $photo->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($photo->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Filename') ?></th>
                    <td><?= h($photo->filename) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($photo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($photo->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($photo->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($photo->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Tags') ?></h4>
                <?php if (!empty($photo->tags)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Tag Name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($photo->tags as $tags) : ?>
                        <tr>
                            <td><?= h($tags->id) ?></td>
                            <td><?= h($tags->tag_name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Tags', 'action' => 'view', $tags->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Tags', 'action' => 'edit', $tags->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tags', 'action' => 'delete', $tags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tags->id)]) ?>
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
