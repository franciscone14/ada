
<?php
class connectionFactory{
    private $url = "localhost";
    private $user = "ada";
    private $pass = "ada";
    private $database = "ada";

    public function __construct($url = NULL, $user = NULL, $pass = NULL, $database = NULL){
        $this->url = "localhost";
        $this->user = "ada";
        $this->pass = "ada";
        $this->database = "ada";
    }

    public function getConnection(){
        return mysqli_connect($this->url, $this->user, $this->pass, $this->database);
    }

    public function closeConnection($conn){
        return mysqli_close($conn);
    }
}
