<?php
    class Posts{
        
        private $title;
        private $text;
        
        function __construct($user){
            
            $dbh = new PDO("mysql:host=localhost; dbname=peters-world;", "root","");
            
            $sth = $dbh->prepare('
            
                    SELECT *
            
                    FROM users
            
                    WHERE username = ?
            
                    ');
            
            $sth->execute(array($user));
            
            $anv = $sth->fetch();
            
            $sth = $dbh->prepare('
                
                SELECT *

                FROM posts
                
                WHERE id_users = ?
                
            ');
            
            $sth->execute(array($anv['id']));
            
            while($row = $sth->fetch()){
                $this->title[] = $row['title'];
                $this->text[] = $row['text'];
            }
            
        }
        
        
        public function getTitles(){
            return $this->title;
        }
        public function getTexts(){
            return $this->text;
        }
        
        
    }
?>