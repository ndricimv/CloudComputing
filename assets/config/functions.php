<?php
include_once 'config.php';
$db = new Database();
class SiteConfigs {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }

    public function readAllConfigs() {
        $query = "SELECT * FROM configs";
        $result = $this->db->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function createConfig($emri, $vlera) {
        $query = "INSERT INTO configs (emri, vlera) VALUES ('$emri', '$vlera')";
        return $this->db->conn->query($query);
    }

    public function readConfigall($id) {
        $query = "SELECT * FROM configs WHERE id = $id";
        $result = $this->db->conn->query($query);
        return $result->fetch_assoc();
    }

    public function readConfig($emri) {
        $defaultValue = 'Not Available';
        $query = "SELECT vlera FROM configs WHERE emri = '$emri' LIMIT 1";
        $result = $this->db->conn->query($query);

        if ($result->num_rows > 0) {
            $configs = $result->fetch_assoc();
            return $configs['vlera'];
        }

        return $defaultValue;
    }

    public function updateConfig($id, $emri, $vlera) {
        $query = "UPDATE configs SET emri='$emri', vlera='$vlera' WHERE id = $id";
        return $this->db->conn->query($query);
    }

    public function deleteConfig($id) {
        $query = "DELETE FROM configs WHERE id = $id";
        return $this->db->conn->query($query);
    }

}


$configs = new SiteConfigs($db);

?>
