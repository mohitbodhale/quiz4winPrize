<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

// Assuming $user->profile_icon contains the URL or path to the existing profile icon
$defaultImage = $userData->profile_icon_name ? $userData->profile_icon_name : $this->Url->build('/img/default-profile.png');
?>

<section class="content-header">
  <h1>
    User
    <small><?php echo __('Profile'); ?></small>
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
          <h3 class="box-title"><?php echo __('User Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <?= $this->Form->create($user, ['type' => 'file']) ?>
            <fieldset>
              <legend></legend>
              <div class="row col-md-6">
                <?php
                echo $this->Form->control('username', ['readonly' => true]);
                echo $this->Form->hidden('password');
                ?>
              </div>
              <div class="col-md-6">
                <?php
                echo $this->Form->control('email', ['readonly' => true]);
                ?>
              </div>
              
              <div class="row col-md-6" >
                <div class="file-upload-box" style="border-top: 1px solid #3c8dbc;padding-top: 2%;">
                <label>Profile Icon &nbsp&nbsp</label>
                <label for="profile_icon" class="custom-file-upload">
                    Choose File
                  </label>
                  <input type="file" id="profile_icon" name="profile_icon" style="display: none;" />
                  <img id="profile_icon_preview" src="#" alt="" style="display:none;border: groove;border-radius: 50%;width: 100px;height: 100px" />
                </div>
              </div>
            </fieldset>
          </dl>
          <hr>
            <?= $this->Form->button(__('Update')) ?>
            <?= $this->Form->end() ?>
          
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.custom-file-upload {
  border: 1px solid #ccc;
  display: inline-block;
  padding: 6px 12px;
  cursor: pointer;
  background-color: #f8f8f8;
  border-radius: 4px;
}

.custom-file-upload:hover {
  background-color: #e8e8e8;
}

.file-upload-box {
  display: flex;
  align-items: center;
}

#profile_icon_preview {
  margin-left: 10px;
}
</style>

<script>
document.getElementById('profile_icon').addEventListener('change', function(event) {
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
        var img = document.getElementById('profile_icon_preview');
        img.src = e.target.result;
        img.style.display = 'block';
    };
    reader.readAsDataURL(file);
});

// Ensure the default image is displayed on load
window.addEventListener('load', function() {
    var img = document.getElementById('profile_icon_preview');
    if (img.src !== '#' && img.src !== window.location.href + '#') {
        img.style.display = 'none';
    }
});
</script>
