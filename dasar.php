<?php 

echo "###################################################\n";
echo "#     Tools Belajar Bahasa Pemograman PHP         #\n";
echo "#             Created By MarsHall                 #\n";
echo "###################################################\n";
echo "1. Apa itu bahasa pemograman PHP\n";
echo "2. Dasar variabel PHP\n";
echo "3. Pengertian PHP CURL\n";
echo "4. Pengertian PHP CLI\n";
sleep(0);
echo "Pilih yang mana : ";
$pil = trim(fgets(STDIN));
if ($pil == '1') {
	sleep(1);
	echo "\n";
	include('dasar/bah.txt');
	echo "\n\n";
	exit;
} if ($pil == '2') {
	sleep(1);
	echo "\n";
	include('dasar/var.txt');
	echo "\n\n";
	exit();
} if ($pil == '3') {
	sleep(1);
	echo "\n";
	include('dasar/curl.txt');
	echo "\n\n";
	exit();
} if ($pil == '4') {
	sleep(1);
	echo "\n";
	include('dasar/cli.txt');
	echo "\n\n";
	exit();
} else {
	echo "\nInput yang anda masukan tidak ada\n";
}

?>