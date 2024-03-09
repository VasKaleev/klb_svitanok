<?php
        include('../configinc.php');
		$q= mysqli_query($db, "SELECT * FROM `dme5kmbmz` ");
		/*
		while ($itog = mysqli_fetch_assoc($q)) {
    				  $nn++;	
    				  $id_id=$itog["id_id"];
                      $fio=$itog["fio"];
    				  $ima=$itog["ima"];
    				  //echo ''.$nn.')'.$itog['data1'].' '.$itog['name'].'<br/>';
    				  //echo '<h4>'.$nn.')<a target="_blank" href='.$itog['$href'].'> '.$itog['$dataa'].' '.$itog['name'].'</a></h4><br/>';
    				  echo '<h6>'.$nn.')<a target="_blank" href='.$id_id.'> '.$fio.' '.$ima.'</a><br/><h6>';
    				 }
    				 */
		//mysql_connect ("localhost", "root","");//подключение к серверу
        //mysql_select_db("dme5kmbmz") or die (mysql_error());//выбор базы данных
        mysqli_query('SET character_set_database = utf8'); 
        mysqli_query ("SET NAMES 'utf8'");
        error_reporting(E_ALL); 
        ini_set("display_errors", 1);
      
   if( !defined( "ExcelExport" ) ) {
    define( "ExcelExport", 1 );
      class ExportToExcel {
        var $xlsData = ""; 
        var $fileName = ""; 
        var $countRow = 0; 
        var $countCol = 0; 
        var $totalCol = 3;//общее число  колонок в Excel
                //конструктор класса
        function __construct (){
                $this->xlsData = pack( "ssssss", 0x809, 0x08, 0x00,0x10, 0x0, 0x0 );
        }
                // Если число
        function RecNumber( $row, $col, $value ){
                $this->xlsData .= pack( "sssss", 0x0203, 14, $row, $col, 0x00 );
                $this->xlsData .= pack( "d", $value );
                return;
        }
                //Если текст
        function RecText( $row, $col, $value ){
                $len = strlen( $value );
                $this->xlsData .= pack( "s*", 0x0204, 8 + $len, $row, $col, 0x00, $len);
                $this->xlsData .= $value;
                return;
        }
                // Вставляем число
        function InsertNumber( $value ){
                if ( $this->countCol == $this->totalCol ) {
                        $this->countCol = 0;
                        $this->countRow++;
                }
                $this->RecNumber( $this->countRow, $this->countCol, $value );
                $this->countCol++;
                return;
        }
                // Вставляем текст
        function InsertText( $value ){
                if ( $this->countCol == $this->totalCol ) {
                        $this->countCol = 0;
                        $this->countRow++;
        }
                $this->RecText( $this->countRow, $this->countCol, $value );
                $this->countCol++;
                return;
        }
                // Переход на новую строку
        function GoNewLine(){
                $this->countCol = 0;
                $this->countRow++;
                return;
                }
                //Конец данных
        function EndData(){
                $this->xlsData .= pack( "ss", 0x0A, 0x00 );
                return;
        }
                // Сохраняем файл
        function SaveFile( $fileName ){
                $this->fileName = $fileName;
                $this->SendFile();
        }
                // Отправляем файл
        function SendFile(){
                $this->EndData();
                header ( "Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT" );
                header ( "Cache-Control: no-store, no-cache, must-revalidate" );
                header ( "Pragma: no-cache" );
                header ( "Content-type: application/x-msexcel" );
                header ( "Content-Disposition: attachment; fileName=$this->fileName.xls" );
                print $this->xlsData;
         }
        } 
   }
        //if(isset($_GET['id_id'])) {
                //фильтруем данные
   $id_id = mysqli_real_escape_string($db,stripslashes(trim(htmlspecialchars($_GET['id'],ENT_QUOTES))));
                //$city = mysqli_real_escape_string($link, $city);
                //$id_id=$_GET['id_id'];
                //$pasw=$_POST['pasw'];
                $filename = 'Файл_с_id_'.$id_id; // задаем имя файла
                $excel = new ExportToExcel(); // создаем экземпляр класса
                $rez= mysqli_query($db, "SELECT * FROM `dme5kmbmz` where `id_id` = '$id_id'");
                //$sql="SELECT * FROM  dme5kmbmz	 where `id_id` = '$id_id'";//запрос к базе
                //$rez=mysqli_query($sql);
                $excel->InsertText('Идентификатор');
                $excel->InsertText('Фамилия');
                $excel->InsertText('Имя');
                $excel->GoNewLine();
        	$q=mysqli_set_charset($db, "1251");
			$q=@mysqli_query ($db, 'set character_set_results = "1251"');
        	$q=mysqli_query($db,"SET @@character_set_results = 'ru_RU'");
        	$q= mysqli_query($db, "SELECT * FROM `dme5kmbmz` ");
		    $nn=0;
		    while ($row = mysqli_fetch_assoc($q)) {
    				    $nn++;	
    				  //$id_id=$itog["id_id"];
                      //$fio=$itog["fio"];
    				  //$ima=$itog["ima"];
    				    //$excel->InsertNumber($row['id_id']);
    				    $excel->InsertNumber($nn);
                        $excel->InsertText($row['fam']);
                        $excel->InsertText($row['ima']);
                        $excel->GoNewLine();
    				  
    				 }
        //While($row=mysqli_fetch_assoc($rez)){
        //        $excel->InsertNumber($row['id_id']);
        //        $excel->InsertText($row['fam']);
        //        $excel->InsertText($row['ima']);
        //        $excel->GoNewLine();
        //}
        $excel->SaveFile($filename);
   //} 
  
   ?>
