<?php
$myArray = array();
if (empty($myArray)) {
    echo "Array tidak terdifinisi atau kosong";
} else {
    echo "Array terdefinisi dan tidak kosong";
}

echo "<br>";
echo "<br>";

if(empty($nonExistentVar)){
    echo "Variabel belum diset atau kosong";
} else {
    echo "Variabel sudah diset dan tidak kosong";
}

?>