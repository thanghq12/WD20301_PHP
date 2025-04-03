<?php
//1. tạo 1 mảng liên hợp chứa thông tin về 1 sinh viên 
//bao gồm tên,tuổi,lớp,và điểm
//in ra tên và điểm của sinh viên 
$student = [
    'name'=>'Thuận',
    'age'=>21,
    'class'=> 'WD20301',
    'score'=> 3
];
echo "Tên sinh viên".$student['name']."<br/>";
echo "Điểm".$student['score'];
// echo class 
// thêm và xóa phần tử trong mảng liên hợp 
$students = [
    'student1'=>'Nguyễn văn A',
    'student2'=>'nguyễn văn B',
    'student3'=>'nguyễn văn C'
];
// thêm 1 sinh viên mới 
$students['student4'] = 'Nguyễn Văn D';
$students['student5'] = 'Nguyễn Văn E';
// hàm để đọc cả cái mảng  print_r
//xóa 1 sinh viên khỏi mảng 
unset($students['student1']);
unset($students['student2']);
echo "<pre>";
// echo print_r($students);
// kiểm tra sự tồn tại của khóa trong mảng
$products = [
    'iphone'=>25000,
    'samsung'=>22000,
    'nokia'=> 1000
];
if(array_key_exists('nokia',$products)) {
    echo "Có key nokia trong mảng";
} else {
    echo "Không có key nokia trong mảng";
}

?>