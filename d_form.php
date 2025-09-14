<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Máy tính PHP</title>
</head>
<body>
  <!-- Form để nhập số -->
  <form method="post">
    Nhập x: <input type="number" name="x" required><br><br>
    Nhập y: <input type="number" name="y" required><br><br>
    <input type="submit" value="Tính toán">
  </form>

  <?php
  // Khi người dùng nhấn nút submit -> method POST gửi dữ liệu lên server
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $x = $_POST['x'];   // Lấy dữ liệu từ input "x"
      $y = $_POST['y'];   // Lấy dữ liệu từ input "y"

      echo "<h3>Kết quả với x = $x, y = $y</h3>";
      echo "Cộng: " . ($x + $y) . "<br>";
      echo "Trừ: " . ($x - $y) . "<br>";
      echo "Nhân: " . ($x * $y) . "<br>";

      // Kiểm tra để tránh chia cho 0
      if ($y != 0) {
          echo "Chia: " . ($x / $y) . "<br>";
          echo "Chia lấy dư: " . ($x % $y) . "<br>";
      } else {
          echo "Không thể chia cho 0!";
      }
  }
  ?>
</body>
</html>
