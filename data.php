<?php
// 模拟后端返回数据
$data = "This is the data from the server.";

// 设置响应头为纯文本格式
header('Content-Type: text/plain');

// 输出数据
echo $data;
?>
