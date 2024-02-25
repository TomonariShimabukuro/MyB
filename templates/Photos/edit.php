<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Photo $photo
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $tags
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $photo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $photo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Photos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="photos form content">
            <?= $this->Form->create($photo) ?>
            <fieldset>
                <legend><?= __('Edit Photo') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('title');
                    echo $this->Form->control('description');
                    echo $this->Form->control('filename');
                    echo $this->Form->control('tags._ids', ['options' => $tags]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
