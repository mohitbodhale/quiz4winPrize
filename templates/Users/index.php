<style>
.img-zoom {
  transition: transform 0.2s; /* Add a transition effect */
}

.img-zoom:hover {
  transform: scale(1.2); /* Zoom in on hover */
  cursor: zoom-in; /* Change cursor to zoom-in icon */
}

.img-zoom-modal {
  width: 100%; /* Make the modal image full-width */
  height: 100%; /* Maintain aspect ratio */
  border-radius: 50%;
}
.modal-dialog {
  border-radius: 50%;
}
.modal-content {
  /* background-color: transparent; Set the background color to transparent */
  border-radius: 50%;
}
</style>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Users
    <div class="pull-right"><?php echo $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo __('List'); ?></h3>

          <div class="box-tools">
            <?php echo $this->Form->create(null, ['role' => 'form']); ?>
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="username_search" class="form-control pull-right" placeholder="<?php echo __('Search'); ?>">
            
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  
                  <th scope="col" class="actions text-left"><?= $this->Paginator->sort('username') ?></th>
                  <th scope="col"></th>
                  <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $user): ?>
                <tr>
                  <td><?= $this->Number->format($user->id) ?></td>
                  <td><?= h($user->username) ?></td>
                  <!-- <td class="product-image">
                  <?php //echo $this->Html->image('/img/profile_icon/'.$user->profile_icon_name, ['class' => 'img-circle', 'alt' => 'User Image','width'=>'40px','height'=>'40px']); ?>
                  </td> -->
                  <td class="product-image">
                    <?php echo $this->Html->image('/img/profile_icon/'.$user->profile_icon_name, [
                      'class' => 'img-circle img-zoom',
                      'alt' => 'User Image',
                      'width' => '40px',
                      'height' => '40px',
                      'data-toggle' => 'modal',
                      'data-target' => '#zoom-modal-' . $user->id
                    ]); ?>
                    <!-- Add a modal for each image -->
                    <div class="modal fade" id="zoom-modal-<?php echo $user->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                          <div class="modal-body img-circle">
                            <?php echo $this->Html->image('/img/profile_icon/'.$user->profile_icon_name, [
                              'class' => 'img-zoom-modal',
                              'alt' => 'User Image'
                            ]); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="actions text-center">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class'=>'btn btn-info btn-xs ']) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>


