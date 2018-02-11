<?php

class User_model extends CI_Model
{
    public function getUser()
    {
        $query = "SELECT * FROM users
                 INNER JOIN user_types
                 ON users.user_type_id = user_types.user_type_id";
        $users = $this->db->query($query);
        return $users;
    }

    public function getUserByID($userID)
    {
        $query = "SELECT * FROM users WHERE user_id = '$userID'";
        return $this->db->query($query);
    }

    public function insertUser($data)
    {
        $fullname = $data['fullname'];
        $email = $data['email'];
        $age = $data['age'];
        $user_type_id =$data['user_type_id'];
        $username = $data['username'];
        $password = $data['password'];
        $query = "INSERT INTO users (user_type_id,username, password, fullname, email, age) VALUES ('$user_type_id', '$username', '$password', '$fullname', '$email', '$age')";
        return $this->db->query($query);
    }

    public function update($userID, $data)
    {
        $fullname = $data['fullname'];
        $email = $data['email'];
        $age = $data['age'];
        $user_type_id =$data['user_type_id'];
        $username = $data['username'];
        $password = $data['password'];
        $query = "UPDATE users SET user_type_id = '$user_type_id', username = '$username', password = '$password', fullname = '$fullname', email = '$email', age = '$age' WHERE user_id = '$userID'";
        return $this->db->query($query);
    }

    public function delete($userID)
    {
        $query = "DELETE FROM users WHERE user_id = '$userID'";
        return $this->db->query($query);
    }

    // Auth
    public function checkLogin($username, $password)
    {
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        return $this->db->query($query);
    }
}
