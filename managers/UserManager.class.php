<?php
    class UserManager
    {
        private array $users;
        private PDO $db;
        public function _construct()
        {
            $host = "db.3wa.io";
            $port = "3306";
            $dbname = "khardiatadiop_userbase_poo";
            $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
            
            $user = "khardiatadiop";
            $password = "161ae7b2ff1f7c00fe30ced60967a789";
            
            $this->db = new PDO(
                $connexionString,
                $user,
                $password
            );
            
        }
        public function loadUsers() : void
        {
            
        }
        public function saveUser() : void
        {
            
        }
        public function deleteUser() : void
        {
            
        }
        
    }
?>