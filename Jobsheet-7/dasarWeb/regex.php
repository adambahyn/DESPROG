<?php $pattern = '/[a-z]/';
$text = 'This is a Simple Text';
if(preg_match($pattern, $text)) {
    echo "Huruf Kecil Ditemukan";
} else {
    echo "Huruf Kecil Tidak Ditemukan";
}
?>


<?php 
echo "<br>";
echo "<br>";
$pattern = '/[0-9]+/';
$text = 'There are 123 apples';
if(preg_match($pattern, $text, $matches)) {
    echo "Cocokan:". $matches[0];
} else {
    echo "Angka Tidak Ditemukan";
}

?>


<?php 

echo "<br>";
echo "<br>";
$pattern = '/apple/';

$replacement = 'banana';

$text = 'I Like apple pie.';

$new_text = preg_replace($pattern, $replacement, $text);

echo $new_text;
?>

<?php 
echo "<br>";
echo "<br>";
$pattern = '/go{0,2}d/';
$text = 'god is good';

if(preg_match($pattern, $text, $matches)) {
    echo "Cocokan:". $matches[0];
} else {
    echo "Tidak Cocok";
}
?>