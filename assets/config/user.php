<?php
class User {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }
    // Kontrollo rolin e përdoruesit bazuar në ID
    public function checkUserRole($id) {
        $query = "SELECT role FROM users WHERE id = $id";
        $result = $this->db->conn->query($query);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            return $user['role'];
        }
        return false;
    }

    // Autentiko përdoruesin bazuar në emër dhe fjalëkalim
    public function authenticateUser($username, $password) {
        $hashed_password = $this->getHashedPassword($username);
        if ($hashed_password && password_verify($password, $hashed_password)) {
            $query = "SELECT id FROM users WHERE username = '$username'";
            $result = $this->db->conn->query($query);

            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                return $user['id'];
            }
        }
        return false;
    }

    // Merr fjalëkalimin e hash-uar për përdoruesin nga bazës e të dhënave
    private function getHashedPassword($username) {
        $query = "SELECT password FROM users WHERE username = '$username'";
        $result = $this->db->conn->query($query);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            return $user['password'];
        }
        return false;
    }

    // Regjistro një përdorues të ri
    public function registerUser($emri, $mbiemri, $username, $hashed_password, $email) {
        $query = "INSERT INTO users (emri, mbiemri, username, password, email, role) VALUES ('$emri', '$mbiemri', '$username', '$hashed_password', '$email', 'user')";
        $result = $this->db->conn->query($query);

        return $result;
    }

        // Kontrollo rolin e përdoruesit bazuar në ID
        public function readEmri($emri, $id) {
            $query = "SELECT $emri FROM users WHERE id = $id";
            $result = $this->db->conn->query($query);
    
            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                return $user[$emri];
            }
            return false;
        }

    public function readAllusers() {
        $query = "SELECT * FROM users";
        $result = $this->db->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function readUser($id) {
        $query = "SELECT * FROM users WHERE id = $id";
        $result = $this->db->conn->query($query);
        return $result->fetch_assoc();
    }

    public function readAutori($id) {
        $query = "SELECT emri FROM users WHERE id = $id";
        $result = $this->db->conn->query($query);
        return $result->fetch_assoc();
    }

    public function updateUser($id, $emri, $mbiemri, $username, $email, $role) {
        $query = "UPDATE users SET emri='$emri', mbiemri='$mbiemri', username='$username', email='$email', role='$role' WHERE id = $id";
        return $this->db->conn->query($query);
    }

    public function deleteUser($id) {
        $query = "DELETE FROM users WHERE id = $id";
        return $this->db->conn->query($query);
    }

}
?>
