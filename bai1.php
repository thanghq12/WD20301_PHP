<?php
// viết code php trong này 
// vòng lặp (for,while,do while)
// vòng lặp áp dụng cho mảng foreach (Giới thiệu sau)
// 
// hiển thị 10 lần dòng text "hello world" sử dụng for 
for($i = 0; $i < 10;$i ++) {
    echo "Hello world ".$i."</br>";
}
//hiển thị các số chẵn từ 0 -> 50 
for($i = 1; $i <=50; $i ++) {
    if($i % 2 == 0) {
    echo "số ".$i."/<br>";
    }
}
// khai báo biến $n = 5
// tính tổng các số từ 1 -> $n 
// tổng là 1+ 2 + 3+4+ 5
$n = 5;
$tong = 0;
for($i = 1; $i <= $n ; $i ++) {
    $tong+=$i;
}
echo "Tổng là ".$tong
?>