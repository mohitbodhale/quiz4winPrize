<style>
hr {border: 2px solid #3c8dbccc;}
.login-box, .register-box {
    font-family: 'Source Sans Pro';
    font-size: larger;
    float: right;
    margin-right: 5%;
    width: 25%;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    background-color: rgba(255, 255, 255, 0.5); /* semi-transparent background only */
    padding: 20px;
}
.login-box-body, .register-box-body {
    background: rgb(255 255 255 / 0%);
    padding: 20px;
    border-top: 0;
    color: #000; 
}
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
        <?= $this->Form->button(__('Login'), ['class' => 'btn btn-primary btn-flat text-sm' ,"style"=>"float: inline-end;"]); ?>
        <?= $this->Form->end() ?>
    </div>
</div>
</section>