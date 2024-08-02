<div class="user-panel">
    <div class="pull-left image">
        <?php //echo $this->Html->image('user2-160x160.jpg', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
        
        <?php if ($authUser): ?>
        <?php echo $this->Html->image($userData['profile_icon_name'] , ['class' => 'img-circle', 'alt' => 'User Image']); ?>
        <?php else: ?>
        <?php echo $this->Html->image('/img/profile_icon/guest.jpg', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
        <?php endif; ?>   
    </div>
    <div class="pull-left info">
        <p>
        <?php if ($authUser): ?>
        <span>Welcome, <?= h($authUser['username']) ?></span>
        <?php else: ?>
        <span>Guest</span>
        <?php endif; ?>    
        </p>
        <a href="#">
        <?php if ($authUser): ?>
        <i class="fa fa-circle text-success"></i> Online
        <?php else: ?>
        <i class="fa fa-circle text-warning"></i> Offline
        <?php endif; ?>    
        </a>
    </div>
</div>