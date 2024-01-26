<?php
class Contacts {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }

    public function readAllContacts() {
        $query = "SELECT * FROM contact_messages";
        $result = $this->db->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function createContact($emri, $mbiemri, $email, $mesazhi) {
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO contact_messages (emri, mbiemri, email, message, Data) VALUES ('$emri', '$mbiemri', '$email', '$mesazhi', '$date')";
        return $this->db->conn->query($query);
    }

    public function readContact($id) {
        $query = "SELECT * FROM contact_messages WHERE id = $id";
        $result = $this->db->conn->query($query);
        return $result->fetch_assoc();
    }

    public function deleteContact($id) {
        $query = "DELETE FROM contact_messages WHERE id = $id";
        return $this->db->conn->query($query);
    }

}
?>
