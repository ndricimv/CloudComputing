<?php
class Servers {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }

    public function readAllServers() {
        $query = "SELECT * FROM servers";
        $result = $this->db->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function createServer($titulli, $pershkrimi, $cmimi) {
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO servers (Titulli, Pershkrimi, Data, Cmimi) VALUES ('$titulli', '$pershkrimi', '$date', '$cmimi')";
        return $this->db->conn->query($query);
    }

    public function readServer($id) {
        $query = "SELECT * FROM servers WHERE id = $id";
        $result = $this->db->conn->query($query);
        return $result->fetch_assoc();
    }
    
    public function updateServer($id, $titulli, $pershkrimi, $cmimi) {
        $query = "UPDATE servers SET Titulli='$titulli', Pershkrimi='$pershkrimi', Cmimi='$cmimi' WHERE id = $id";
        return $this->db->conn->query($query);
    }

    public function deleteServer($id) {
        $query = "DELETE FROM servers WHERE id = $id";
        return $this->db->conn->query($query);
    }
}
?>
