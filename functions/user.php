<?php
// function addUser($conn, $name, $email, $password) {
//     try {
//         $hashed_password = password_hash($password, PASSWORD_DEFAULT);
//         $stmt = $conn->prepare("INSERT INTO users (nom, email, password) VALUES (?, ?, ?)");
//         if($stmt->execute([$name, $email, $hashed_password])) {
//             return [
//                 'status' => 'success',
//                 'user_id' => $conn->lastInsertId(),
//                 'user_name' => $name
//             ];
//         } else {
//             return [
//                 'status' => 'error',
//                 'errors' => ["Registration failed. Please try again."]
//             ];
//         }
//     } catch (PDOException $e) {
//         return [
//             'status' => 'error',
//             'errors' => ["Database error: " . $e->getMessage()]
//         ];
//     }
// }


function addUser ($conn , $email , $password) {
    try {
        $hashed_password = password_hash($password , PASSWORD_DEFAULT);
        $stmt = $conn ->prepare ("INSERT INTO user (nom , email , password) VALUES (? , ? ,?)");
        if ($stmt -> execute ([$name , $email , $hashed_password])){
        return [
        'status' => 'success',
        'user_id' => $conn ->lastinsertId(),
        'user_name' => $name
        ];
    } else {
        return [
            'statur' => 'error',
            'errors' => ["Registration failed. Please try again."]
        ];
    }  
    }








}

function loginUser($conn, $email, $password) {
    try {
        $stmt = $conn->prepare("SELECT id, nom, password FROM users WHERE email = ?");
        $stmt->execute([$email]);
        
        if($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if(password_verify($password, $user['password'])) {
                return [
                    'status' => 'success',
                    'user_id' => $user['id'],
                    'user_name' => $user['nom']
                ];
            } else {
                return [
                    'status' => 'error',
                    'errors' => ["Invalid password"]
                ];
            }
        } else {
            return [
                'status' => 'error',
                'errors' => ["Email not found"]
            ];
        }
    } catch (PDOException $e) {
        return [
            'status' => 'error',
            'errors' => ["Database error: " . $e->getMessage()]
        ];
    }
}
?>