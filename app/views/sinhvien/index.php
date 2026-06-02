<style>
  table {
    border-collapse: collapse;
    width: 100%;
  }

  th,
  td {
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  th {
    background-color: #04AA6D;
    color: white;
  }
</style>

<h1>Danh sách sinh viên</h1>
<table>
  <tr>
    <th>ID</th>
    <th>MSSV</th>
    <th>Họ Tên</th>
    <th>Giới Tính</th>
  </tr>
  <?php foreach ($sinhviens as $sinhvien) : ?>
    <tr>
      <td><?php echo $sinhvien['id']; ?></td>
      <td><?php echo $sinhvien['MSSV']; ?></td>
      <td><?php echo $sinhvien['HoTen']; ?></td>
      <td><?php echo $sinhvien['GioiTinh']; ?></td>
    </tr>
  <?php endforeach; ?>
</table>
