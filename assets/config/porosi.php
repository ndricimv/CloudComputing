<?php
class Porosi {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }

    public function readAllPorosit() {
        $query = "SELECT p.id, u.id as uid, u.emri, s.id as sid, s.Titulli, s.Pershkrimi, s.Cmimi 
        FROM porosit p 
        INNER JOIN servers s ON p.id_server = s.id
        INNER JOIN users u ON u.id = p.id_useri";
        $result = $this->db->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function readAllPorosity($id) {
        $query = "SELECT s.id, s.Titulli, s.Pershkrimi, s.Cmimi 
        FROM porosit p 
        INNER JOIN servers s ON p.id_server = s.id
        INNER JOIN users u ON u.id = p.id_useri AND u.id = $id;";
        $result = $this->db->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function createPorosi($user_id, $id) {
        $query = "INSERT INTO porosit (id_useri, id_server) VALUES ('$user_id', '$id')";
        return $this->db->conn->query($query);
    }

    public function readPorosi($id) {
        $query = "SELECT * FROM servers WHERE id = $id";
        $result = $this->db->conn->query($query);
        return $result->fetch_assoc();
    }

    public function deleteServer($id) {
        $query = "DELETE FROM servers WHERE id = $id";
        return $this->db->conn->query($query);
    }
}
?>