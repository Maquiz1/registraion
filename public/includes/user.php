<?php
    include_once '../database/db.php';
    //USER CLASS FOR ACCOUNT CREATION AND LOGIN PURPOSE

    class User extends Database{

    //CHECK IF USER EXISTS    
    public function emailExists($email){
        $query = $this->conn->query("SELECT id FROM user WHERE email = '$email'");
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        if($result){
            return true;
        }
    }
        

    public function createUser($username,$password,$email,$usertype,$notes){
        if($this->emailExists($email)){
            return 'EMAIL_EXISTS';
        }else{
            $date = date('Y-m-d');
            $password_hash = md5($password);
            //use prepared statemnt to prtect from sql attack
            $sql = "INSERT INTO user (username,password,email,usertype,notes,register_date,last_login) 
            VALUES (:username,:password,:email,:usertype,:notes,:register_date,:last_login)";

            $stmt = $this->conn->prepare($sql);
            
            $result = $stmt->execute(
                [
                    'username'        => $username,
                    'password'        => $password_hash,
                    'email'           => $email,
                    'usertype'        => $usertype,
                    'notes'           => $notes,
                    'register_date'   => $date, 
                    'last_login'      => $date
                ]
            );
            if($result){
                return $this->conn->lastInsertId();
            }else{
                return 'SOME_ERROR';
            }
        }

        }

        //user login
        public function usereLogin($email,$password){
            $query = $this->conn->query("SELECT * FROM user WHERE email = '$email'");
            $num = $query->rowCount();
            if($num < 1){
                return 'NOT_REGISTERED';
            }else{
                $password_hash = md5($password);
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                if($password_hash == $result[0]['password']){
                    $_SESSION['user_id'] = $result[0]['id'];
                    $_SESSION['last_login'] = $result[0]['last_login'];
                    $_SESSION['username'] = $result[0]['username'];


                    //UPDATE LAST LOGINTIME
                    $last_login = date('Y-m-d h:m:s');
                    $query = $this->conn->prepare("UPDATE user SET last_login = :last_login WHERE email = '$email'");
                    $result = $query->execute(
                        [
                            'last_login' => $last_login
                        ]
                    );
                    if($result){
                        return 1;
                    }else{
                        return 0;
                    }
                }else{
                    return 'PASSWORD_NOT_MATCH';
                }
            }
        }
        

    }

    // $db = new User();
    // print_r($db->createUser('Jose','123456','manqui94@gmail.com','Admin','Active'));
    // // print_r($db->emailExists('Jembe'));
    // print_r($db->usereLogin('manqui92@gmail.com','123456'));
?>