<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width,
initial-scale=1.0'>
<meta http-equiv='X-UA-Compatible'
content='ie=edge'>
<body>
<link rel='stylesheet'
href='https://stackpath.bootstrapcdn.com/bootstrap/
4.3.1/css/bootstrap.min.css'>
</head>
<body>
<div class='container text-center mt-4'><link rel='stylesheet'
href='https://stackpath.bootstrapcdn.com/bootstrap/
4.3.1/css/bootstrap.min.css'>
</head>
<body>
<div class='container text-center mt-4'>
<h1>Daftar Mahasiswa</h1>
<ol class='list-group my-4'>
<?php
foreach ($mahasiswa as $nama) {
echo "<li class='list-group-item'> $nama </li>";
}
?>
</ol>
<div>
<img class='rounded-circle img-thumbnail m-2'
src='/img/people1.jpg'>
<img class='rounded-circle img-thumbnail m-2'
src='/img/people2.jpg'>
<img class='rounded-circle img-thumbnail m-2'
src='/img/people3.jpg'>
<img class='rounded-circle img-thumbnail m-2'
src='/img/people4.jpg'>
</div>