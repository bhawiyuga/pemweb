<table>
  <thead>
    <tr>
      <th>Nama</th>
      <th>IPK</th>
      <th>Kota</th>
    </tr>
  </thead>
  <tbody>
    <?php
      // Data mahasiswa
      $mahasiswa = [
        ['nama' => 'John Doe', 'ipk' => 3.2, 'kota' => 'Jakarta'],
        ['nama' => 'Jane Doe', 'ipk' => 2.7, 'kota' => 'Surabaya'],
        ['nama' => 'Bob Smith', 'ipk' => 3.8, 'kota' => 'Bandung'],
        ['nama' => 'Alice Jones', 'ipk' => 2.9, 'kota' => 'Yogyakarta'],
      ];

      // Looping untuk mencetak data mahasiswa
      foreach ($mahasiswa as $m) {
        // Jika IPK di bawah 3.0, background baris menjadi merah
        $bg_color = $m['ipk'] < 3.0 ? 'background-color: red;' : '';
        echo "<tr style='{$bg_color}'>";
        echo "<td>{$m['nama']}</td>";
        echo "<td>{$m['ipk']}</td>";
        echo "<td>{$m['kota']}</td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>
