<?php
class Artist {
    public $id;
    public $name;
    public $created_at;
    public $updated_at;
    public $artist_id;

    private $db;

    public function __construct() {
        global $db;
        $this->db = $db;
    }

    // Functions herunder

    /**
	 * Funktion til at hente lister med
	 */

    public function list() {
        $sql = "SELECT id, name
                FROM artist
                ORDER BY name";
                return $this->db->query($sql);
     }

     
	/**
	 * Funktion til at hente detaljer med
	 */
    public function details($id) {
        $params = array(
            'id' => array($id, PDO::PARAM_INT)
        );

        $sql = "SELECT id, name, created_at, updated_at
        FROM artist
        WHERE id = :id";
        return $this->db->query($sql, $params, Db::RESULT_SINGLE);
    }

    //Create a song
    public function create() {
        $params = array(
            'name' => array($this->name, PDO::PARAM_STR),
            'id' => array($this->id, PDO::PARAM_INT)
        );

        $sql = "INSERT INTO artist(name, id)
        VALUES(:name, :id)";
        $this->db->query($sql, $params);
        return $this->db->lastInsertId();
    }

    //Change a song
    public function update() {
        $params = array(
            'id' => array($this->id, PDO::PARAM_INT),
            'name' => array($this->name, PDO::PARAM_STR)
        );

        $sql = "UPDATE artist SET
                        name = :name,
                        id = :id
                        WHERE id = :id";
                        return $this->db->query($sql, $params);
    }
//Delete song
    public function deleteA($id) {
        $params = array(
            'id' => array($id, PDO::PARAM_INT)
        );

        $sql = "DELETE FROM artist
        WHERE id = :id";
if ($this->db->query($sql, $params) == 1) {
    echo $id . " in artist deleted succesfully";
} else {
    echo $id . " could not be deleted in artist...";
}

            //return $this->db->query($sql, $params);
    }

}
?>