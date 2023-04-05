<?php

include "conn.php";
session_start();

if(isset($_POST['username']) && isset($_POST['LRN_no'])) {

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $username = validate($_POST['username']);
    $LRN_no = validate($_POST['LRN_no']);
    
    if (empty($username)) {
        header("Location: ../login.php?error=Username is required");
        exit();
    }else if(empty($LRN_no)){
        header("Location: ../login.php?error=LRN is required");
        exit();
    }else{
        $sql = "SELECT *, DATE_FORMAT(users.birthdate, '%d-%m-%Y') AS birthday FROM users, students WHERE username='$username' AND LRN_no='$LRN_no'";
        $result = mysqli_query($conn, $sql);
    
        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            
            if(($row['username'] === $username) && ($row['LRN_no'] === $LRN_no)){
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['givenName'] = $row['givenName'];
                $_SESSION['lastName'] = $row['lastName'];
                $_SESSION['birthdate'] = $row['birthdate'];
                $_SESSION['contact_num'] = $row['contact_num'];
                if ($row['owner_type'] === "S"){
                    header("Location: ../grades.php");
                    exit();
                }else{
                    header("Location: ../login.php?error=Incorrect username or LRN");
                    exit();
                }

            }else{
                header("Location: ../login.php?error=Incorrect username or LRN");
                exit();
            }
            
        }else{
            header("Location: ../login.php?error=Incorrect username or LRN");
            exit();
        }

    }
    }else{
    header("Location: ../login.php");
    exit();
    }
?>
