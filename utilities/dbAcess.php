<?php
// class DbAccess{
//     private $conn;
//     public function __constructor(){
       
//     }
//     // create multiple tables into maria db
//     public static function createTables($conn){
//         $queries = [
//             "CREATE TABLE users (
//                 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//                  username VARCHAR(50),
//                  password VARCHAR(50)
//                 );",
//             "INSERT INTO users (username, password) VALUES ('arnold','pass1234'),('davis','1234pass');"
//         ];

//         // migrate the tables to the database
//         foreach($queries as $query){
//              mysqli_query($conn, $query);
//         }
//         // close the connection
//         // echo "Tables created successfully";
//         mysqli_close($conn);
//     }
// }


class DbAccess {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    // Create multiple tables in MariaDB
    public static function createTables($conn) {
        $queries = "
            CREATE TABLE users (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(50),
                password VARCHAR(50)
            );
            
            INSERT INTO users (username, password) VALUES ('arnold','pass1234'),('davis','1234pass');
        ";

        // Migrate the tables to the database
        mysqli_multi_query($conn, $queries);

        // Close the connection
        mysqli_close($conn);
    }
}
