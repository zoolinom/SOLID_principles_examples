<?php

interface ConnectionInterface {
    public function connect();
}


/*
* Both the low level module and high level module depends on abstraction
*/
class DBConnection implements ConnectionInterface {
    public function connect()
    {

    }
}

/*
* High level modules (PasswordReminder) should not depend about low level modules (MySQLConnection)
*/
// class PasswordReminder {

//     private $dbConnection;

//     public function __construct(MySQLConnection $dbConnection)
//     {
//         $this->dbConnection = $dbConnection;
//     }
// }

class PasswordReminder {

    private $dbConnection;

    public function __construct(ConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}
