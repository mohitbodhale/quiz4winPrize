<section class="content-header">
  <h1>
    User
    <small><?php echo __('Register'); ?></small>
  </h1>
  <ol class="breadcrumb">
  <?php if ($authUser): ?>
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  <?php endif; ?>  
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          
          
        <!-- /.box-header -->
        <div class="box-body">
            <dl class="dl-horizontal">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Please enter your details') ?></legend>
                <?= $this->Form->control('username') ?>
                <?= $this->Form->control('email') ?>
                <?= $this->Form->control('password') ?>
            </fieldset>
            <?= $this->Form->button(__('Register')) ?>
            <?php if (!$authUser): ?>
                <?= $this->Html->link(__('Login'), ['controller' => 'Users', 'action' => 'login'], ['class' => 'btn btn-primary btn-flat']) ?>
            <?php endif; ?> 
            <?= $this->Form->end() ?>
            </dl>
        </div>
      </div>
    </div>
  </div>

</section>
