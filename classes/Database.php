<?php

class Database
{
  public $db;

  public function __construct($host, $user, $pass, $db)
  {
    $this->db = mysqli_connect($host, $user, $pass, $db);

    // if (!$this->db) {
    //   exit('No connect');
    // }

    if ($this->db->connect_errno) {
      echo "Failed to connect to MySQL: " . $this->db->connect_error;
      exit();
    }

    // if (!mysqli_select_db($db, $this->db)) {
    //   exit('No table');
    // }

    // mysqli_query("SET NAMES cp1251");
    // return $this->db;
  }

  public function get_all_db()
  { {
      $sql = "SELECT id, name FROM statti LIMIT 10";
      $res = $this->db->query($sql);

      if (!$res) {
        return FALSE;
      }
      for ($i = 0; $i < mysqli_num_rows($res); $i++) {
        $row[] = mysqli_fetch_array($res, MYSQLI_ASSOC);
      }

      return $row;
    }
  }

  public function get_one_db($id)
  {
    $sql = "SELECT id, name FROM statti WHERE id='$id'";
    $res = $this->db->query($sql);
    if (!$res) {
      return FALSE;
    }
    $row = mysqli_fetch_array($res, MYSQLI_ASSOC);

    return $row;
  }
}
