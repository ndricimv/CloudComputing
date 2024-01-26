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

    public function createMenu($emri, $vlera, $renditja, $autori) {
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO menu (Emri, vlera, renditja, autori, Data) VALUES ('$emri', '$vlera', '$renditja', '$autori', '$date')";
        return $this->db->conn->query($query);
    }

    public function readMenu($id) {
        $query = "SELECT * FROM menu WHERE id = $id";
        $result = $this->db->conn->query($query);
        return $result->fetch_assoc();
    }
    
    public function updateMenu($id, $emri, $vlera, $renditja, $autori) {
        $query = "UPDATE menu SET Emri='$emri', vlera='$vlera', renditja='$renditja', autori='$autori' WHERE id = $id";
        return $this->db->conn->query($query);
    }

    public function deleteMenu($id) {
        $query = "DELETE FROM menu WHERE id = $id";
        return $this->db->conn->query($query);
    }
}
?>
