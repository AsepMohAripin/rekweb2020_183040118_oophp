<?php 

// define('NAMA', 'Asep Moh Aripin');

// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

// class Coba {
// 	const NAMA = 'Asep Moh Aripin';
// }

// echo Coba::NAMA;

// echo __FILE__;


// function coba(){
// 	return __FUNCTION__;
// }

// echo coba();

class Coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;



 ?>