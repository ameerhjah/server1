<?php
include '../../config.php';
$data = json_decode(file_get_contents("php://input"), true);

foreach ($data as $row) {
    $id = $row['id'];
    $name = $con->real_escape_string($row['name']);
    $status = $con->real_escape_string($row['status']);
    $updated = $con->real_escape_string($row['updated_at']);

    $sql = "INSERT INTO table1 (id, name, status, updated_at)
            VALUES ($id, '$name', '$status', '$updated')
            ON DUPLICATE KEY UPDATE
              name='$name', status='$status', updated_at='$updated'";
    $con->query($sql);
}
echo "✅ Data received!";
?>
