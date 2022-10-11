<?php
// php 8 vẫn báo lỗi ạ
declare(strict_types=0);
function addNumbers(int $a, int $b) {
  return $a + $b;
}
    echo addNumbers(5, 10);
    // it will return 15
    echo addNumbers(5, "số 10");
    // neu 1 tham so la chuoi co the se xuat thong bao loi
?>
<!-- vì ở trên hàm addNumbers chúng ra chuyền
vào 2 đối số là int nên ở dòng 7 ở đố số b ta chuyền
vào là dạng string nên nó báo lỗi-->