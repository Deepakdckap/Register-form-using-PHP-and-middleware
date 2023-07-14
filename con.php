<?php

class Database
{
    public $db;

    public function __construct()
    {
        try{
            $this->db = new PDO
            (
                'mysql:host=localhost;dbname=startup',
                'admin',
                'welcome'
            );

            // $current_host = $_SERVER['HTTP_HOST'];
            // $current_host = 'localhost';
            // $new_host = 'deepak';
            // if ($current_host !== $new_host) {
            // header('Location: http://' . $new_host );
            // // exit;
            //     }


        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function query($query)
    {
        $statement = $this->db->prepare($query);
        $statement->execute($statement);

        return $statement;
    }
};
?>