<?php
class Faqet {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }

    public function readAllFaqet() {
        $query = "SELECT * FROM faqet";
        $result = $this->db->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function createFaqe($titulli, $permbajtja, $foto, $data, $autori) {
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO faqet (titulli, permbajtja, foto, Data, autori) VALUES ('$titulli', '$permbajtja','$foto', '$data', '$autori')";
        return $this->db->conn->query($query);
    }

    public function readFaqe($id) {
        $query = "SELECT * FROM faqet WHERE id = $id";
        $result = $this->db->conn->query($query);
        return $result->fetch_assoc();
    }

    public function updateFaqe($id, $titulli, $permbajtja, $foto, $autori) {
        $date = date("Y-m-d H:i:s");
        $query = "UPDATE faqet SET Titulli='$titulli', permbajtja='$permbajtja', foto='$foto', Data='$date', autori='$autori' WHERE id = $id";
        return $this->db->conn->query($query);
    }

    public function deleteFaqe($id) {
        $query = "DELETE FROM faqet WHERE id = $id";
        return $this->db->conn->query($query);
    }
}
?>
