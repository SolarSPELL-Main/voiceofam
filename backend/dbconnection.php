<?php
/**
 * SQLite connnection
 */
class DBConnection {
    private $db_path = 'users.db';
    private $conn;

	 
    public function connect() {
        if ($this->conn == null) {
			try{
				$this->conn = new PDO("sqlite:" . $this->db_path);
			}
			catch(PDOException $e){
				echo "Connection error: " . $e->getMessage();
			}
        }
        return $this->conn;
    }
}