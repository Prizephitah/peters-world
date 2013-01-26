<?php
    class Posts{
        
        private $title;
        private $text;
        
        function __construct($user){
            
            $dbh = new PDO(
				"mysql:host=localhost; dbname=peters-world;",
				"root",
				"",
				array(
					PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
				)
			);
            
            $sth = $dbh->prepare('
				SELECT `id`
				FROM users
				WHERE username = ?
            ');
            
            $sth->execute(array($user));
            
            $userId = $sth->fetchColumn(0);
            
            $sth = $dbh->prepare('
                SELECT *
                FROM posts
                WHERE id_users = ?
            ');
            
            $sth->execute(array($userId));
            
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