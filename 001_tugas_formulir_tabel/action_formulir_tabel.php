<html>
  <head>
    <title>Data yang di kirim dari formulir</title>
  </head>
  <body>
      <h1>Data yang di kirim dari formulir</h1>
      <table border="0">
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><?php echo $_POST['nama']; ?></td>
        </tr>
        <tr>
          <td>TTL</td>
          <td>:</td>
          <td><?php echo $_POST['ttl']; ?></td>
        </tr>
        <tr>
          <td>JENIS KELAMIN</td>
          <td>:</td>
          <td><?php echo $_POST['jenis_kelamin']; ?></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><?php echo $_POST['alamat']; ?></td>
        </tr>
        <tr>
          <td>Jurusan</td>
          <td>:</td>
          <td><?php echo $_POST['jurusan']; ?></td>
        </tr>
        <tr>
          <td>Hobi</td>
          <td>:</td>
          <td><?php echo implode(", ", $_POST['hobi']); ?></td>
        </tr>
    </table>
    <a href="formulir_tabel.html">kembali ke formulir</a>
  </body>
</html>