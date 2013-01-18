<?php
require '../lib/PHPFetion.php';

$fetion = new PHPFetion('tonyreg@126.com', 'wenhang');	// 手机号、飞信密码
$fetion->send('13438255103', 'Hellow From PHP!');	// 接收人手机号、飞信内容

?>

done!