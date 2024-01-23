<?php
class News {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }

    public function readAllNews() {
        $query = "SELECT * FROM news";
        $result = $this->db->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function createNews($titulli, $pershkrimi, $foto, $autori) {
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO news (Titulli, Pershkrimi, foto, Data, autori) VALUES ('$titulli', '$pershkrimi','$foto', '$date', '$autori')";
        return $this->db->conn->query($query);
    }

    public function readNews($id) {
        $query = "SELECT * FROM news WHERE id = $id";
        $result = $this->db->conn->query($query);
        return $result->fetch_assoc();
    }

    public function readNewsFeature($id1, $id2, $id3) {
        $query = "SELECT * FROM news WHERE id in ($id1, $id2, $id3)";
        $result = $this->db->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function updateNews($id, $titulli, $pershkrimi, $foto, $autori) {
        $query = "UPDATE news SET Titulli='$titulli', Pershkrimi='$pershkrimi', foto='$foto', autori='$autori' WHERE id = $id";
        return $this->db->conn->query($query);
    }

    public function deleteNews($id) {
        $query = "DELETE FROM news WHERE id = $id";
        return $this->db->conn->query($query);
    }
}
?>
