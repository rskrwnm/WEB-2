<!-- <?php
// if
// $nilai = 80;
// if ($nilai >= 60) {
//     echo "Nilai Anda $nilai, Anda LULUS";
// }

// if_else
// $nilai =50;
// if ($nilai >=60) {
//     echo "Nilai Anda $nilai, Anda LULUS";
// } else {
//     echo "Nilai Anda $nilai, Anda GAGAL";
// }

// if_else2
// $user = "achmatim";
// $pass = "123";
// if ($user == "achmatim" && $pass == "123"){
//     echo "Login Berhasil";
// } else {
//     echo "Login Gagal";
// }

// if_var
// $user="eki";
// if (!isset($user)) {
//     echo "variabel tidak ada/belum dibuat";
// } else {
//     echo "variabel ada, isinya: $user";
// }

// switch
// $day = date ("D");
// switch ($day) {
//     case 'Sun' : $hari = "Minggu"; break;
//     case 'Mon' : $hari = "Senin"; break;
//     case 'Tue' : $hari = "Selasa"; break;
//     case 'Wed' : $hari = "Rabu"; break;
//     case 'Thu' : $hari = "Kamis"; break;
//     case 'fri' : $hari = "Jum'at"; break;
//     case 'Sat' : $hari = "Sabtu"; break;
//     default    : $hari = "Kiamat";
// }
// echo "Hari ini hari <b>$hari</b>";

// if_khusus
// $tahun = date ("Y");
// $kabisat = ($tahun%4 == 0) ?
// "KABISAT" : "BUKAN KABISAT";
// echo "Tahun <b>$tahun</b> $kabisat";

// for.php
// contoh 1
// for ($i = 1; $i <= 10; $i++) {
//     echo "$i";
// }
// echo "<br></br>";
// // contoh 2
// for ($i = 1; ; $i++) {
//     if ($i > 10){
//         break;
//     }
//     echo "$i";
// }
// echo "<br></br>";
// // contoh 3
// $i = 1;
// for (; ;) {
//     if ($i > 10){
//         break;
//     };
//     echo "$i";
//     $i++;
// }
// echo "<br></br>";

// while.php
// contoh 1
// $i =1;
// while ($i <=10){
//     echo $i++;
// }
// echo "<br></br>";
// // contoh 2
// $i = 1;
// while ($i <=10):
//     echo "$i";
//     $i++;
// endwhile;
// echo "<br></br>";
// // contoh 3
// $i = 1;
// while ($i <= 6) {
//     echo "<h$i>Heading $i</h$i>";
//     $i++;
// }

// dowhile.php
// $i = 1;
// do {
//     echo "$i ";
//     $i+=2;
// } while ($i <= 20);

// break.php
// for ($i=1; $i<10; $i++){
//     if ($i == 5)
//     continue;
//     if ($i == 8)
//     break;
//     echo "$i ";
// }
?>  -->
<html>
    <body> 
        <form method="GET" action="">
            <input type="text" name="nama"><br>
            <input type="text" name="email"><br>
            <input type="submit" name="submit" value ="Submit"><br>
        </form>

        <?php
        if ($_GET)
        {
            echo 'Nama: ' .$_GET['nama'];
            echo '<br>';
            echo 'Email: ' .$_GET['email'];
        }
        ?>
    </body>
</html>