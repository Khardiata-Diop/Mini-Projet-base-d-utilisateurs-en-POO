<?php
    require 'User.class.php';
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
        
        public function getUsers(): array
        {
            return $this->users;
        }
        
        public function setUsers(array $users): void
        {
            $this->users = $users;
        }
        public function loadUsers() : void
        {
            $query = $db->prepare('SELECT * FROM users');
            $parameters = [
                
                ];
            $query->execute($parameters);
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            
            $users=[];
            
            foreach($result as $item)
            {
                $user = new User($item["username"], $item["email"], $item["password"], $item["role"]);
                $user->setId($item["id"]);
                
                $users[] = $user;
            }
            
            $this->setUsers($users);
        }
        public function saveUser(User $user) : void
        {
            $query = $this->db->prepare('INSERT INTO users (id, username, email, password, role, created_at) VALUES(NULL, :username, :email, :password, :role, NOW())');
            $parameters = [
                'username' => $user->getUsername(),
                'email' => $user->getEmail(),
                'password' => $password->getPassword(),
                'role' => $role->getRole()
                ];
                $query->execute($parameters);
                
                $user->setId($this->db->lastInsertId());
        }
        
        public function deleteUser(User $user) : void
        {
            
        }
        
    }
?>