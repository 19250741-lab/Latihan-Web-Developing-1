<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navigasi.php'; ?>

<div style="padding-left:30px">
  
  <h2>Responsive Navigataion</h2>
  <form method="post" action="" class ="mb-4">
    <table style="width:92%; border-collapse: collapse;" border="1">
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" required></td>
      </tr>
  </form>
  <table style="width:92%; border-collapse: collapse;" border="1">
    <tr>
      <td>NIM</td>
      <td>:</td>
      <td><input type="number" name="nim" required></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td>
        <input type="radio" name="jk" value="Laki-laki" required>Laki-laki
        <input type="radio" name="jk" value="Perempuan" required>Perempuan
      </td>
    </tr>
    <tr>
      <td colspan="3" style="text-align: right;">
        <input type="submit" name="submit" value="Submit">
        <?php if (isset($_POST['submit'])): ?>
          <div style="margin-left: 20%;">
            <strong>Hasil Submit:</strong><br>
            <strong>NIM:</strong> <?php echo isset($_POST['nim']) ? $_POST['nim'] : 'NIM tidak diisi'; ?><br>
            <strong>Nama:</strong> <?php echo isset($_POST['nama']) ? $_POST['nama'] : 'Nama tidak diisi'; ?><br>
            <strong>Jenis Kelamin:</strong> <?php echo isset($_POST['jk']) ? $_POST['jk'] : 'Jenis Kelamin tidak diisi'; ?><br>
          </div>
        <?php endif; ?>
    </tr>
  </table>
</div>
</body>
</html>