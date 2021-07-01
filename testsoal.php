<?php
echo "<h1> Text </h1>";
$string = "Aku diam, bukan berarti tak memperhatikan.";
echo $string;
$kata   = explode(" ", $string);
$data   = array_count_values($kata);
echo '<hr> ada '.str_word_count($string).' kata '; 
#Jumlah kata dalam variabel string
echo "<br>";
echo "<br> <b> Menghitung jumlah setiap kata yang sama</b> <hr>";
echo 'ada '.substr_count($string, "Aku").' kata Aku yang dicari dari kalimat <br> '; #ada berapa kata yg dicari
echo 'ada '.substr_count($string, ",").' tanda baca "," yang dicari dari kalimat <br> '; #ada berapa kata yg dicari
echo 'ada '.substr_count($string, "diam").' kata Diam yang dicari dari kalimat <br> '; #ada berapa kata yg dicari
echo 'ada '.substr_count($string, "bukan").' kata bukan yang dicari dari kalimat <br> '; #ada berapa kata yg dicari
echo 'ada '.substr_count($string, "berarti").' kata berarti yang dicari dari kalimat <br> '; #ada berapa kata yg dicari
echo 'ada '.substr_count($string, "tak").' kata tak yang dicari dari kalimat <br> '; #ada berapa kata yg dicari
echo 'ada '.substr_count($string, "memperhatikan").' kata memperhatikan yang dicari dari kalimat <br> '; #ada berapa kata yg dicari
echo 'ada '.substr_count($string, ".").' tanda baca "." yang dicari dari kalimat <br> '; #ada berapa kata yg dicari
echo 'ada '.substr_count($string, " ").' tanda baca " " yang dicari dari kalimat <br> '; #ada berapa kata yg dicari
echo "<br>";
echo "<br><b>Urutkan kata kata yang terdapat pada kalimat berita di atas<br> Pengurutan di mulai dari ANGKA, HURUF BESAR, HURUF KECIL</b><br><hr>";
echo "<br> Hasil Pengurutan dari A - Z <br>";
sort($kata);
echo implode(" ",$kata);
echo "<br> Hasil Pengurutan dari Z - A <br>";
rsort($kata);
echo implode(" ",$kata);
echo "<hr>"
?>