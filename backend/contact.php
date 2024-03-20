<?php
include '../config/connection.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $latitude = $_POST['latitude'];
  $longitude = $_POST['longitude'];
  $status = $_POST['status'];

  $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
  mysqli_query($connection, $sql);

  $id_user = mysqli_insert_id($connection);

  $sql = "INSERT INTO disasters (id_user, title, description, latitude, longitude, status) 
VALUES ('$id_user', '$title', '$description', '$latitude', '$longitude', '$status')";
  mysqli_query($connection, $sql);

  $id_disaster = mysqli_insert_id($connection);

  $image = $_FILES['image'];
  $image_name = $image['name'];
  $image_tmp = $image['tmp_name'];
  move_uploaded_file($image_tmp, '../uploads/' . $image_name);

  $sql = "INSERT INTO images (id_disaster, name) VALUES ('$id_disaster', '$image_name')";
  mysqli_query($connection, $sql);


  echo "Sukses mengirimkan laporan bencana!";
} else {
  header("Location: ../index.php");
}
