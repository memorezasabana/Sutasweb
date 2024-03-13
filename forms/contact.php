<?php
include '../config/connection.php'; // Sertakan file koneksi.php untuk menghubungkan ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Tangkap data yang dikirimkan melalui form
  $name = $_POST['name'];
  $email = $_POST['email'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $latitude = $_POST['latitude'];
  $longitude = $_POST['longitude'];
  $status = $_POST['status'];

  // Simpan data pengguna ke tabel users
  $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
  mysqli_query($connection, $sql);

  // Dapatkan ID pengguna yang baru saja disimpan
  $id_user = mysqli_insert_id($connection);

  // Simpan data bencana ke tabel disasters
  $sql = "INSERT INTO disasters (id_user, title, description, latitude, longitude, status) 
VALUES ('$id_user', '$title', '$description', '$latitude', '$longitude', '$status')";
  mysqli_query($connection, $sql);

  // Dapatkan ID bencana yang baru saja disimpan
  $id_disaster = mysqli_insert_id($connection);

  // Simpan file gambar ke dalam folder uploads
  $image = $_FILES['image'];
  $image_name = $image['name'];
  $image_tmp = $image['tmp_name'];
  move_uploaded_file($image_tmp, '../uploads/' . $image_name);

  // Simpan nama file gambar ke dalam tabel images
  $sql = "INSERT INTO images (id_disaster, name) VALUES ('$id_disaster', '$image_name')";
  mysqli_query($connection, $sql);


  // Tampilkan pesan bahwa data telah berhasil disimpan
  echo "Data has been saved successfully.";
} else {
  // Jika bukan metode POST, kembalikan pengguna ke halaman sebelumnya
  header("Location: ../index.php");
}
