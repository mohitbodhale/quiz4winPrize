<style>
  
</style>
<?php
use Cake\Core\Configure;
$this->layout = 'login'; 
?>
<section class="content">
<div class="forms-container">
    <div class="signin-signup">
        <?= $this->Form->create(null, ['autocomplete' => 'off']) ?>
        <?= $this->Flash->render(); ?>
        <div class="input-field">
            <span>Username</span>
            <span class="" style="float: right;"><i class="fa fa-user" style=""></i></span>
            <?= $this->Form->control('username', [
                'label' => false, 
                'placeholder' => '', 
                'required' => true, 
                'class' => 'form-control'
            ]); ?>
        </div>
        <div class="input-field">
            <span>Password</span>
            <span class="" style="float: right;"><i class="fa fa-lock"></i></span>
            <?= $this->Form->control('password', [
                'type' => 'password', 
                'label' => false, 
                'placeholder' => '', 
                'required' => true, 
                'class' => 'form-control'
            ]); ?>
        </div>
        <?= $this->Form->button(__('Login'), ['class' => 'btn btn-primary solid']); ?>
        <?= $this->Form->end() ?>
    </div>
</div>
</section>