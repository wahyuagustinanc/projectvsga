<?php

function koneksi()
{

    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "blogcerpen";
    $port = "3306";
    return $conn = mysqli_connect($hostName, $userName, $password, $dbName, $port);
}

function query($sql)
{

    return mysqli_query(koneksi(), $sql);
}

function get_all_data($table, $where = "", $order = "", $limit = "")
{

    $data = [];
    $sql = "SELECT * FROM $table $where $order $limit";
    $query = query($sql);
    while ($list_data = mysqli_fetch_assoc($query)) {
        $data[] = $list_data;
    }

    //$data['id'] = '1'
    return $data;
}

function get_one_data($table, $where)
{
    $sql = "SELECT * FROM $table WHERE $where";
    $query = query($sql);
    $data = mysqli_fetch_assoc($query);
    return $data;
}


function get_last_data($table, $order)
{
    $sql = "SELECT * FROM $table $order";
    $query = query($sql);
    $data = mysqli_fetch_assoc($query);
    return $data;
}

function delete($table, $where)
{
    //DELETE FROM $table=tb_mahasiswa WHERE $where=> id='6'
    $sql = "DELETE FROM $table WHERE $where";
    return query($sql);
}

function insert($table, array $data)
{

    //INSERT INTO tb_mahasiswa (nim,nama..) VALUE ('1232',"EKO",..)

    $field = "";
    $isi = "";
    // ["nim" => '123244'];
    foreach ($data as $key => $value) {
        $field .= ",$key";
        $isi .= ",'$value'";
    }
    $field_ = substr($field, 1);
    $isi_ = substr($isi, 1);
    $sql = "INSERT INTO $table ($field_) VALUES ($isi_)";
    return query($sql);
}

function update($table, array $data, $where)
{

    // UPDATE tb_user SET nama='roni',email = 'rn.putra' WWHERE $where
    $set = "";
    foreach ($data as $key => $value) {
        $set .= ",$key = '$value'";
    }

    $set_  = substr($set, 1);

    $sql = "UPDATE $table SET $set_ WHERE $where";
    $query = query($sql);
    return $query;
}

function hapus($table, $where)
{
    //DELETE FROM $table=tb_mahasiswa WHERE $where=> id='6'
    $sql = "DELETE FROM $table WHERE $where";
    return query($sql);
}
