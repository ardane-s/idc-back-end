<?php

$local = "localhost";
$user = "root";
$password = "";
$db = "backend";

$conn = mysqli_connect($local, $user, $password, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Laravel index
function index($code)
{
    global $conn;
    $hasil = mysqli_query($conn, $code);
    return $hasil;
}

// Laravel Show
function show($id)
{
    global $conn;
    $query = "SELECT * FROM user WHERE id=$id";
    $hasil = mysqli_query($conn, $query);
    return $hasil;
}

// Laravel Create
function create($data)
{
    global $conn;
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $ukm = htmlspecialchars($data['ukm']);

    $query = "INSERT INTO user VALUES (NULL, 'nama', 'email', 'ukm')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// Laravel Edit
function edit($data)
{
    global $conn;
    $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $ukm = htmlspecialchars($data['ukm']);

    $query = "UPDATE user SET nama='$nama', email='$email', ukm='$ukm' WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// Laravel Destroy ???
function destroy($data)
{
    global $conn;
    $id = htmlspecialchars($data['id']);
    $query = "DELETE FROM user WHERE id = $id";
    return mysqli_query($conn, $query);
}

?>