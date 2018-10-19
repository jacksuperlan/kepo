<? 
Header ("Content-type: image/jpeg"); 
$im = imagecreate (800, 400); 
$black = ImageColorAllocate ($im, 0, 0, 0); 
$white = ImageColorAllocate ($im, 255, 255, 255); 
//include("gb2utf8.php"); 
$str=iconv("GBK","UTF-8",'中华人民共和国烜');//gb2utf8("aaa32434"); ///usr/share/fonts/default/TrueType/simsun.ttc
ImageTTFText ($im, 45, 360, 0, 100, $white, "/usr/share/fonts/zh_CN/TrueType/simhei.ttf", $str); 


ImageJPEG ($im); 
ImageDestroy ($im); 