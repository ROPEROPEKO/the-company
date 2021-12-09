<?php
include "database.php";

class User extends Database{  // to use member of other class, we need inheritance

    public function createUser($first_name, $last_name, $username, $password){
        $password = password_hash($password, PASSWORD_DEFAULT);  // not should be readable

        // SQL
        $sql = "INSERT INTO users(first_name, last_name, username, `password`) VALUES ('$first_name', '$last_name', '$username', '$password')";   // "" - outside  '' - inside
        // because password is the syntax for MySQL, we use ` for password

        // Execution -> Redirection
        if($this->conn->query($sql)){    // this conn comes from class Database
            header('location: ../views');  // go to index
            exit;          
        }else {
            die("Error creating user: " .$this->conn->error);

        }


    }

    public function login($username, $password){
        $sql = "SELECT id, username, `password` FROM users WHERE username = '$username' ";

        if($result = $this->conn->query($sql)){
            // $ result holds the id username password from the databse 
            //Check if the username exists
            if($result->num_rows == 1){
                // Cehck if the password is correct
                $user_details = $result->fetch_assoc();

                if(password_verify($password, $user_details['password'])){
                    session_start();
                    $_SESSION['user_id'] = $user_details['id'];
                    $_SESSION['username'] = $user_details['username'];

                    header("location: ../views/dashboard.php");
                    exit;

                }else{
                    die("Password is incorrect.");

                }
            }else {
                die("Username not found.");
            }
        }else{
            die("Error: ". $this->conn->error); 
        }
    }

    public function getAllusers(){
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT id, first_name,last_name, username FROM users WHERE id != $user_id";
        // Get all users EXCEPT for this id

        if($result = $this->conn->query($sql)){
            return $result;

        }else{
            die("Error retrieving all users: ". $this->conn->error);
        }
    }

    public function getUser($user_id){
        $sql = "SELECT * FROM users WHERE id = $user_id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
            // Since we're expecting 1 row of result only, transform the result to ASSOCIATIVE array right away
        }else{
            die("Error retrieving the user: ". $this->conn->error);
        }
    }
    public function updateUser($user_id, $first_name, $last_name, $username){
        $sql = "UPDATE users SET first_name = '$first_name', last_name = '$last_name',username = '$username' WHERE id= $user_id ";

        if($this->conn->query($sql)){
            header("location: ../views/dashboard.php");
            exit;
        }else{
            die("Error updating user: ". $this->conn->error);
        }
    }

    public function deleteUser($user_id){
        $sql = "DELETE FROM users WHERE id = $user_id";
        
        if($this->conn->query($sql)){
            header("location: ../views/dashboard.php");
            exit;
        }else{
            die("Error deleting user: ".
            $this->conn->error);
        }
    }
}

?>