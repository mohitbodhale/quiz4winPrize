<h1><?= __('Register') ?></h1>
<?= $this->Form->create($user) ?>
<fieldset>
    <legend><?= __('Please enter your details') ?></legend>
    <?= $this->Form->control('username') ?>
    <?= $this->Form->control('email') ?>
    <?= $this->Form->control('password') ?>
</fieldset>
<?= $this->Form->button(__('Register')) ?>
<?= $this->Form->end() ?>
