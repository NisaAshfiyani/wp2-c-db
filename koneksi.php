<?php
$conn_string = "host=john.db.elephantsql.com (john-01)g" . 
  "port=5432 dbname=hmuiafrc " .
  "user=hmuiafrc " . 
  "password=zbE9l1PboWokSJoWtbOhP6oJBhIkPWdm";
$conn = pg_connect($conn_string);

if($conn) {
    echo "Koneksi database berhasil tersambung";
} else {
    echo "Koneksi dengan database GAGAL tersambung";
}
?>