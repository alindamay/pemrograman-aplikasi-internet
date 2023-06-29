<?php

class Connection
{
  protected $link;
  private $database;
  private $username;
  private $password;
  private $host;
  private $port;

  public function __construct($database, $username, $password, $host = 'localhost', $port = 3306)
  {
    $this->host = $host;
    $this->port = $port;
    $this->username = $username;
    $this->password = $password;
    $this->database = $database;
    $this->connect();
  }
  public function __sleep()
  {
    return array('host', 'port', 'username', 'password', 'database');
  }
  public function __wakeup()
  {
    $this->connect();
  }
  private function connect()
  {
    $this->link = new PDO(sprintf('mysql:host=%s;port=%d;dbname=%s', $this->host, $this->port, $this->database), $this->username, $this->password);
  }
}
