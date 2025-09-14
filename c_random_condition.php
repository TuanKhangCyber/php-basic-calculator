<?php
do {
    $x = rand(1, 100);   // Sinh số ngẫu nhiên cho $x
    $y = rand(1, 100);   // Sinh số ngẫu nhiên cho $y
} while ($x <= $y);      // Lặp lại nếu $x <= $y

echo "x = $x, y = $y (x > y)<br>";
echo "Cộng: " . ($x + $y) . "<br>";
echo "Trừ: " . ($x - $y) . "<br>";
echo "Nhân: " . ($x * $y) . "<br>";
echo "Chia: " . ($x / $y) . "<br>";
echo "Chia lấy dư: " . ($x % $y) . "<br>";
?>
