<?php

require_once "Database.php";
class Student extends Database {

  public function select() {
    $sql = "SELECT * FROM students";
    $result = $this->connect()->query($sql);

    if($result->rowCount() > 0){
  while($row = $result->fetch()){
    $data[] = $row;
  }
  return $data;
}
  }

  public function createStudent($name, $grades, $average, $board) {
    $stmt = $this->connect()->prepare("INSERT INTO students (name,grades,average,board) VALUES (:name,:grades,:average,:board);");
    $res = $stmt->execute(array(
      ':name' => $name,
      ':grades' => $grades,
      ':average' => $average,
      ':board' => $board
    ));
    return $res;
  }
}

 ?>
