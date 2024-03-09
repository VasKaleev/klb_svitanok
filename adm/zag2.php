<?php
//include the following 2 files
//require 'Classes/PHPExcel.php';
//echo 'тест<br/>';
//require 'PHPExcel.php';
include('PHPExcel.php');
//echo 'тест1<br/>';
//require_once 'Classes/PHPExcel/IOFactory.php';
//require_once '/PHPExcel/IOFactory.php';
include('PHPExcel/IOFactory.php');
//include('/IOFactory.php');
//echo 'тест2<br/>';
include('../configinc.php');
//echo 'тест3<br/>';
//$SERVER = 'localhost';
//$USERNAME = 'username';
//$PASSWORD =  'password';
//$DB = 'database';
//$DSN = "mysql:host=".$SERVER.";dbname=".$DB."";
//$connection = new PDO($DSN,$USERNAME,$PASSWORD);
//echo 'тест4<br/>';
$path = 'test.xlsx';
//echo 'тест5<br/>'.$path;
$objPHPExcel = PHPExcel_IOFactory::load($path);
//$objPHPExcel = PHPExcel_IOFactory::load(test.xls);
//echo 'тест6<br/>';
/*
foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
    $worksheetTitle     = $worksheet->getTitle();
    $highestRow         = $worksheet->getHighestRow(); // e.g. 10
    $highestColumn      = $worksheet->getHighestColumn(); // e.g 'F'
    $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
    $nrColumns = ord($highestColumn) - 64;
    echo "<br>The worksheet ".$worksheetTitle." has ";
    echo $nrColumns . ' columns (A-' . $highestColumn . ') ';
    echo ' and ' . $highestRow . ' row.';
    echo '<br>Data: <table border="1"><tr>';
    for ($row = 1; $row <= $highestRow; ++ $row) {
        echo '<tr>';
        for ($col = 0; $col < $highestColumnIndex; ++ $col) {
            $cell = $worksheet->getCellByColumnAndRow($col, $row);
			
            $val = $cell->getValue();
			
			echo var_dump($val);
			$dataType = PHPExcel_Cell_DataType::dataTypeForValue($val);
            echo '<td>' . $val . '<br>(Typ ' . $dataType . ')</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
*/
/*
function isLeap($year) {
return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year % 400) == 0)));
}

for($year=1900; $year<=2019; $year++)
{
if (isLeap($year))
{
$leaps[] = $year;
}
else
{
$nonLeaps[] = $year;
}
}

echo '<table><tr>';
foreach($leaps as $y)
{
echo '<td>' . $y . '</td>';
}
echo '</tr></table>';
*/
//echo 'тест';
$query = mysqli_query($db,"DELETE FROM `datar` ");
date_default_timezone_set('Europe/Moscow');
$da='1900-01-01';
$days=5;
$kd=2;
//function addDayswithdate($da,$days){
//    $date = strtotime("+".$days." days", strtotime($da));
//    return  date("Y-m-d", $da);
//    }
function dateDifference($date_1 , $date_2 , $differenceFormat = '%a' )
{
    $datetime1 = date_create($date_1);
    $datetime2 = date_create($date_2);
    $interval = date_diff($datetime1, $datetime2);
    return $interval->format($differenceFormat);
 }	
foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) // цикл обходит страницы файла
{
  $highestRow = $worksheet->getHighestRow(); // получаем количество строк
  $highestColumn = $worksheet->getHighestColumn(); // а так можно получить количество колонок
  for ($row = 1; $row <= $highestRow; ++ $row) // обходим все строки
  {
    $cell1 = $worksheet->getCellByColumnAndRow(0, $row); //ФИО
    $cell2 = $worksheet->getCellByColumnAndRow(1, $row); //datar
	$days=$cell2;
	$kDays = date ("Y-m-d", strtotime ($da ."+".$days."days"));
	$kDays = date ("Y-m-d", strtotime ($kDays ."-".$kd."days"));
	
    $query = mysqli_query($db,"INSERT INTO `datar` (`fam`,`datar`) VALUES ('$cell1','$kDays')");
  }
}
//mysqli_free_result($result); 
mysqli_free_result($query);
mysqli_close($db);
echo 'Данные участников КЛБ Свитанок успешно загружены в таблицу mysql!!!';
/*
    $mesn=date('m');
	$mesn1=date('F');
	$den=date('d');
	$nn=0;
	echo '<b> Именинники КЛБ &laquo;Свитанок&raquo; в '.$mesn1.':</b><BR/>';	
	$result=mysqli_query($db,"SET @@lc_time_names = 'ru_RU'");
	$result = mysqli_query($db,"SELECT `fam`,`datar`, LOWER (DATE_FORMAT(`datar`,'%e %M %Y')) as data1,LOWER (DATE_FORMAT(`datar`,'%m')) as data2,LOWER (DATE_FORMAT(`datar`,'%M')) as data3,LOWER (DATE_FORMAT(`datar`,'%d')) as data4 FROM `datar` Order by `data4`,`datar` ASC");
						while($row=mysqli_fetch_array($result)){
						$fam=$row['fam'];
						$datar=$row['datar'];
						$beg=$row['data1'];
						$mes=$row['data2'];
						$nazmes=$row['data3'];
						$ds=$row['data4'];
						
					   //if ($den==$ds)	{
					   //echo '<h4><span style="color: crimson; font-size: 1.0em">День рождения сегодня:  '.$beg.' '.$fam.'</span></h4><BR/>';	                   
					   //}
					   if ($mes==$mesn)	{
						$nn++;   
						$aa=dateDifference($datar , date('Y-m-d') , $differenceFormat = '%y' );
					    echo ' '.$nn.'. '.$beg.' '.$fam.' '.$aa.' лет<BR/>';	                   
					   }
						}
    $result = mysqli_query($db,"SELECT `fam`,`datar`, LOWER (DATE_FORMAT(`datar`,'%e %M %Y')) as data1,LOWER (DATE_FORMAT(`datar`,'%m')) as data2,LOWER (DATE_FORMAT(`datar`,'%M')) as data3,LOWER (DATE_FORMAT(`datar`,'%d')) as data4 FROM `datar` Order by `data4`,`datar` ASC");
						while($row=mysqli_fetch_array($result)){
						$fam=$row['fam'];
						$datar=$row['datar'];
						$beg=$row['data1'];
						$mes=$row['data2'];
						$nazmes=$row['data3'];
						$ds=$row['data4'];
						
					   if ($den==$ds)	{
						$aa=dateDifference($datar , date('Y-m-d') , $differenceFormat = '%y' );   
					    echo '<h4><span style="color: crimson; font-size: 1.0em">День рождения сегодня:  '.$beg.' '.$fam.' '.$aa.' лет(года)</span><BR/>';	                   
					   }
					   //if ($mes==$mesn)	{
						//$nn++;   
						//$aa=dateDifference($datar , date('Y-m-d') , $differenceFormat = '%y' );
					    //echo ' '.$nn.'. '.$beg.' '.$fam.' '.$aa.' лет<BR/>';	                   
					   //}
						}						
*/
?>

