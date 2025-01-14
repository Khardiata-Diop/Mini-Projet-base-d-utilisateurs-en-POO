<?php

    require __DIR__ . '/../managers/UserManager.class.php';
    
    $manager = new UserManager();
    
    $manager->loadUsers();
    
    $users = $manager->getUsers();
    
?>
    
