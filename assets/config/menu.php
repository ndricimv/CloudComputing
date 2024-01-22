<?php
class Menu {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }

    public function readAllMenu() {
        $query = "SELECT * FROM menu ORDER BY renditja ASC";
        $result = $this->db->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function createMenu($emri, $vlera) {
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO menu (Emri, vlera) VALUES ('$emri', '$vlera')";
        return $this->db->conn->query($query);
    }

    public function readMenu($id) {
        $query = "SELECT * FROM menu WHERE id = $id";
        $result = $this->db->conn->query($query);
        return $result->fetch_assoc();
    }
    
    public function updateMenu($id, $emri, $vlera, $renditja) {
        $query = "UPDATE menu SET Emri='$emri', vlera='$vlera', renditja='$renditja' WHERE id = $id";
        return $this->db->conn->query($query);
    }

    public function deleteMenu($id) {
        $query = "DELETE FROM servers WHERE id = $id";
        return $this->db->conn->query($query);
    }
}
?>
