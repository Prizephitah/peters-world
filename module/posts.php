<?php
    class posts{
        
        private $title;
        private $text;
        
        function __construct(){
            
            $dbh = new PDO("mysql:host=localhost; dbname=peters-world;", "root","");
            
            $sth = $dbh->prepare('
                
                SELECT *

                FROM posts
                
                WHERE id_users = ?
                
            ');
            
            $sth->execute(array(0));
            
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