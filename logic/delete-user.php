<?php
    require __DIR__ . '/../managers/UseManager.class.php';
    
    if(isset($_GET["id"]))
    {
        $manager = new UserManager();
        $user = new User("", "", "", "");
        
        $manager->deleteUser($user);
    }
?>


