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

    public function createServer($titulli, $pershkrimi, $cmimi, $foto) {
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO servers (Titulli, Pershkrimi, Data, Cmimi, foto) VALUES ('$titulli', '$pershkrimi', '$date', '$cmimi', '$foto')";
        return $this->db->conn->query($query);
    }

    public function readServer($id) {
        $query = "SELECT * FROM servers WHERE id = $id";
        $result = $this->db->conn->query($query);
        return $result->fetch_assoc();
    }

    public function readServerFeature($id1, $id2, $id3) {
        $query = "SELECT * FROM servers WHERE id in ($id1, $id2, $id3)";
        $result = $this->db->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function updateServer($id, $titulli, $pershkrimi, $cmimi, $foto) {
        $query = "UPDATE servers SET Titulli='$titulli', Pershkrimi='$pershkrimi', Cmimi='$cmimi', foto='$foto' WHERE id = $id";
        return $this->db->conn->query($query);
    }

    public function deleteServer($id) {
        $query = "DELETE FROM servers WHERE id = $id";
        return $this->db->conn->query($query);
    }
}
?>
