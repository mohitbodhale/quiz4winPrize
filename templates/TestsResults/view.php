<section class="content-header">
  <h1>
    Tests Result
    <small><?php echo __('View'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt scope="row"><?= __('User') ?></dt>
            <dd><?= $testsResult->has('user') ? $this->Html->link($testsResult->user->username, ['controller' => 'Users', 'action' => 'view', $testsResult->user->id]) : '' ?></dd>
            <dt scope="row"><?= __('Test') ?></dt>
            <dd><?= $testsResult->has('test') ? $this->Html->link($testsResult->test->id, ['controller' => 'Tests', 'action' => 'view', $testsResult->test->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($testsResult->id) ?></dd>
            <dt scope="row"><?= __('Score') ?></dt>
            <dd><?= $this->Number->format($testsResult->score) ?></dd>
            <dt scope="row"><?= __('Status') ?></dt>
            <dd><?= $this->Number->format($testsResult->status) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Comparisons') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($testsResult->comparisons); ?>
        </div>
      </div>
    </div>
  </div>
</section>
