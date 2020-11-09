<?php
$mysqli = false;
function connectDB()
{
  global $mysqli;
    $mysqli = new mysqli("localhost", "root", "", "guitaressdatabase");
    $mysqli->query("SET NAMES 'utf-8' ");
}

function closeDB()
{
  global $mysqli;
    $mysqli->close();
}

function getArt($limit, $id)
{
    global $mysqli;
    connectDB();
    if($id){
        $where = "WHERE `id` = ".$id;
    }
    $result = $mysqli->query("SELECT * FROM  `first` $where ORDER BY  `id` DESC LIMIT $limit");
    closeDB();
    if(!$id)
        return resulttoArr($result);
    else
        return $result->fetch_assoc();
}

function resulttoArr($result)
{
    $array = array();
    while (($row = $result->fetch_assoc()) != false)
        $array[] = $row;
    return $array;
}
?>