<?php
//$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <meta name="csrf-token" content="<?= $this->request->getParam('_csrfToken'); ?>">
    
</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <?php if ($authUser): ?>
            <span>Welcome, <?= h($authUser['username']) ?></span>
            <?php else: ?>
            <a href="<?= $this->Url->build('/') ?>"><span>Guest</span></a>
            <?php endif; ?>
        </div>
        <div class="top-nav-links">
            <!-- <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/">Documentation</a> -->
            <!-- <a target="_blank" rel="noopener" href="https://api.cakephp.org/">API</a> -->
            
            <?php if ($authUser): ?>
                <?= $this->Html->link("Dashboard", ['controller' => 'Users', 'action' => 'dashboard']) ?>
                <?= $this->Html->link("Profile", ['controller' => 'Users', 'action' => 'profile']) ?>
                <?= $this->Html->link("Logout", ['controller' => 'Users', 'action' => 'logout']) ?>
            <?php else: ?>
                <?= $this->Html->link("Login", ['controller' => 'Users', 'action' => 'login']) ?>
                <?= $this->Html->link("Register", ['controller' => 'Users', 'action' => 'register']) ?>
            <?php endif; ?>

        
        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
