<?php
class User {
    public $id;
    public $username;
    public $password;


    public function __construct() {
        global $db;
        $this->db = $db;
    }

    // Functions herunder

    /**
	 * Funktion til at hente lister med
	 */

     public function list() {
        $sql = "SELECT username
                FROM users";
                return $this->db->query($sql);
     }

     
	/**
	 * Funktion til at hente detaljer med
	 */
    public function details($id) {
        $params = array(
            'id' => array($id, PDO::PARAM_INT)
        );

        $sql = "SELECT *
        FROM users
        WHERE id = :id";
        return $this->db->query($sql, $params, Db::RESULT_SINGLE);
    }

    //Create a song
    public function create() {
        $params = array(
            'username' => array($this->username, PDO::PARAM_STR),
            'password' => array($this->password, PDO::PARAM_STR),
        );

        $sql = "INSERT INTO users(username, password)
        VALUES(:username, :password)";
        $this->db->query($sql, $params);
        return $this->db->lastInsertId();
    }

    //Change a song
    public function update() {
        $params = array(
            'id' => array($this->id, PDO::PARAM_INT),
            'username' => array($this->username, PDO::PARAM_STR),
            'password' => array($this->password, PDO::PARAM_STR)
        );

        $sql = "UPDATE users SET
                        username = :username,
                        password = :password,
                        id = :id
                        WHERE id = :id";
                        return $this->db->query($sql, $params);
    }
//Delete song
    public function delete($id) {
        $params = array(
            'id' => array($id, PDO::PARAM_INT)

        );

        $sql = "DELETE FROM users
        WHERE id = :id";
if ($this->db->query($sql, $params) == 1) {
    echo $id . " in users deleted succesfully ";
} else {
    echo $id . " could not be deleted in users...";
}

            //return $this->db->query($sql, $params);
    }
}
?>