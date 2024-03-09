<?php
//require_once 'adm/PHPExcel.php';
//header("Content-type: text/html; Charset=windows-1251");
header('Content-Type: text/html; charset=cp1251');
include('PHPExcel.php');
$pExcel = new PHPExcel();
$pExcel->setActiveSheetIndex(0);
$aSheet = $pExcel->getActiveSheet();
// РћСЂРёРµРЅС‚Р°С†РёСЏ СЃС‚СЂР°РЅРёС†С‹ Рё  СЂР°Р·РјРµСЂ Р»РёСЃС‚Р°
$aSheet->getPageSetup()
       //->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);
	   ->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
$aSheet->getPageSetup()
       ->SetPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
// РџРѕР»СЏ РґРѕРєСѓРјРµРЅС‚Р°
$aSheet->getPageMargins()->setTop(1);
$aSheet->getPageMargins()->setRight(0.75);
$aSheet->getPageMargins()->setLeft(0.75);
$aSheet->getPageMargins()->setBottom(1);
// РќР°Р·РІР°РЅРёРµ Р»РёСЃС‚Р°
$aSheet->setTitle('10 км день металлурга');
// РЁР°РїРєР° Рё С„СѓС‚РµСЂ (РїСЂРё РїРµС‡Р°С‚Рё)
$aSheet->getHeaderFooter()
       ->setOddHeader('10 км день металлурга');
$aSheet->getHeaderFooter()
       ->setOddFooter('&L&B'.$aSheet->getTitle().'10 км день металлурга');
// РќР°СЃС‚СЂРѕР№РєРё С€СЂРёС„С‚Р°
$pExcel->getDefaultStyle()->getFont()->setName('Arial');
$pExcel->getDefaultStyle()->getFont()->setSize(8);
$aSheet->getColumnDimension('A')->setWidth(3);
$aSheet->getColumnDimension('B')->setWidth(8);
$aSheet->getColumnDimension('C')->setWidth(12);
$aSheet->getColumnDimension('D')->setWidth(12);
$aSheet->getColumnDimension('E')->setWidth(12);
$aSheet->getColumnDimension('F')->setWidth(25);
$aSheet->getColumnDimension('G')->setWidth(10);
$aSheet->getColumnDimension('H')->setWidth(4);
$aSheet->getColumnDimension('I')->setWidth(6);
$aSheet->getColumnDimension('J')->setWidth(10);
$aSheet->getColumnDimension('K')->setWidth(7);
$aSheet->getColumnDimension('L')->setWidth(11);
$aSheet->getColumnDimension('M')->setWidth(12);
$aSheet->getColumnDimension('N')->setWidth(11);
$aSheet->getColumnDimension('O')->setWidth(15);
$aSheet->mergeCells('A1:O1');
$aSheet->getRowDimension('1')->setRowHeight(20);
$aSheet->setCellValue('A1','Список участников пробега день металлурга');
$aSheet->mergeCells('A2:O2');
$aSheet->setCellValue('A2','дистанция 10 км');
$aSheet->mergeCells('A4:C4');
$aSheet->setCellValue('A4','Дата');
// Р—Р°РїРёСЃС‹РІР°РµРј РґР°РЅРЅС‹Рµ РІ СЏС‡РµР№РєСѓ
$date = new DateTime();
$date = date('d-m-Y H:i');
$aSheet->setCellValue('D4',$date);
// РЈСЃС‚Р°РЅР°РІР»РёРІР°РµС‚ С„РѕСЂРјР°С‚ РґР°РЅРЅС‹С… РІ СЏС‡РµР№РєРµ (РґР°С‚Р° РІРёРґР° РґРґ-РјРј-РіРіРіРі)
$aSheet->getStyle('D4')->getNumberFormat()
->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_XLSX14);
//mysql_connect(DB_HOST, DB_USER, DB_PASS);
//mysql_query('SET NAMES utf8');
//mysql_select_db(DB_NAME);
include('../configinc.php');
						//$result=mysqli_query($db,'SELECT * FROM `dme10km` '); // Р·Р°РїСЂРѕСЃ РЅР° РІС‹Р±РѕСЂРєСѓ
						//while($row=mysqli_fetch_array($result)){
// РЎРѕР·РґР°РµРј С€Р°РїРєСѓ С‚Р°Р±Р»РёС‡РєРё РґР°РЅРЅС‹С…
$aSheet->setCellValue('A6','№');
$aSheet->setCellValue('B6','Дист');
$aSheet->setCellValue('C6','Фам');
$aSheet->setCellValue('D6','Имя');
$aSheet->setCellValue('E6','Отчество');
$aSheet->setCellValue('F6','Адрес');
$aSheet->setCellValue('G6','КЛБ');
$aSheet->setCellValue('H6','Пол');
$aSheet->setCellValue('I6','Номер');
$aSheet->setCellValue('J6','Дата рожд');
$aSheet->setCellValue('K6','Полн лет');
$aSheet->setCellValue('L6','Номер пасп');
$aSheet->setCellValue('M6','Дата выд');
$aSheet->setCellValue('N6','Кем выдан');
$aSheet->setCellValue('O6','Место работы');
//$aSheet->setCellValue('P6','Дата выд');
//$query = "SELECT `code`, `name`, `description`, `price` FROM `products` WHERE 1 LIMIT 10";
$res=mysqli_query($db,'SELECT * FROM `dme10km` '); // Р·Р°РїСЂРѕСЃ РЅР° РІС‹Р±РѕСЂРєСѓ
//$res = mysql_query( $query );

$i = 1;
while( $prd = mysqli_fetch_assoc($res) ) {
    $aSheet->setCellValue('A'.($i+6), $i);
    $aSheet->setCellValue('B'.($i+6), $prd['dist']);
    $aSheet->setCellValue('C'.($i+6), $prd['fam']);
    $aSheet->setCellValue('D'.($i+6), $prd['ima']);
    $aSheet->setCellValue('E'.($i+6), $prd['otch']);
	$aSheet->setCellValue('F'.($i+6), $prd['adres']);
	$aSheet->setCellValue('G'.($i+6), $prd['klb']);
	$aSheet->setCellValue('H'.($i+6), $prd['pol']);
	$aSheet->setCellValue('I'.($i+6), $prd['nomer']);
	$aSheet->setCellValue('J'.($i+6), $prd['datar']);
	$aSheet->setCellValue('K'.($i+6), $prd['let']);
	$aSheet->setCellValue('L'.($i+6), $prd['paspnom']);
	$aSheet->setCellValue('M'.($i+6), $prd['datvidp']);
	$aSheet->setCellValue('N'.($i+6), $prd['kemvidp']);
	$aSheet->setCellValue('O'.($i+6), $prd['rabota']);
	//$aSheet->setCellValue('P'.($i+6), $prd['datvidp']);
    $i++;
}
// РјР°СЃСЃРёРІ СЃС‚РёР»РµР№
$style_wrap = array(
    // СЂР°РјРєРё
    'borders'=>array(
        // РІРЅРµС€РЅСЏСЏ СЂР°РјРєР°
        'outline' => array(
            'style'=>PHPExcel_Style_Border::BORDER_THICK,
            'color' => array(
                'rgb'=>'006464'
            )
        ),
        // РІРЅСѓС‚СЂРµРЅРЅСЏСЏ
        'allborders'=>array(
            'style'=>PHPExcel_Style_Border::BORDER_THIN,
            'color' => array(
                'rgb'=>'CCCCCC'
            )
        )
    )
);

$aSheet->getStyle('A1:O'.($i+5))->applyFromArray($style_wrap);
// РЎС‚РёР»Рё РґР»СЏ РІРµСЂС…РЅРµР№ РЅР°РґРїРёСЃРё (РїРµСЂРІР°СЏ СЃС‚СЂРѕРєР°)
$style_header = array(
    // РЁСЂРёС„С‚
    'font'=>array(
        'bold' => true,
        'name' => 'Times New Roman',
        'size' => 12,
        'color'=>array(
            'rgb' => '006464'
        )
    ),
    // Р’С‹СЂР°РІРЅРёРІР°РЅРёРµ
    'alignment' => array(
        'horizontal' => PHPExcel_STYLE_ALIGNMENT::HORIZONTAL_CENTER,
        'vertical' => PHPExcel_STYLE_ALIGNMENT::VERTICAL_CENTER,
    ),
    // Р—Р°РїРѕР»РЅРµРЅРёРµ С†РІРµС‚РѕРј
    'fill' => array(
        'type' => PHPExcel_STYLE_FILL::FILL_SOLID,
        'color'=>array(
            'rgb' => '99CCCC'
        )
    ),
    'borders'=>array(
        'bottom'=>array(
            'style'=>PHPExcel_Style_Border::BORDER_THIN,
            'color' => array(
                'rgb'=>'006464'
            )
        )
    )
);
$aSheet->getStyle('A1:O1')->applyFromArray($style_header);

// РЎС‚РёР»Рё РґР»СЏ СЃР»РѕРіР°РЅР° РєРѕРјРїР°РЅРёРё (РІС‚РѕСЂР°СЏ СЃС‚СЂРѕРєР°)
$style_slogan = array(
    // С€СЂРёС„С‚
    'font'=>array(
        'bold' => true,
        'italic' => true,
        'name' => 'Times New Roman',
        'size' => 10,
        'color'=>array(
            'rgb' => '006464'
        )
    ),
    // РІС‹СЂР°РІРЅРёРІР°РЅРёРµ
    'alignment' => array(
        'horizontal' => PHPExcel_STYLE_ALIGNMENT::HORIZONTAL_CENTER,
        'vertical' => PHPExcel_STYLE_ALIGNMENT::VERTICAL_CENTER,
    ),
    // Р·Р°РїРѕР»РЅРµРЅРёРµ С†РІРµС‚РѕРј
    'fill' => array(
        'type' => PHPExcel_STYLE_FILL::FILL_SOLID,
        'color'=>array(
            'rgb' => '99CCCC'
        )
    ),
    //СЂР°РјРєРё
    'borders' => array(
        'bottom' => array(
            'style'=>PHPExcel_Style_Border::BORDER_THIN,
            'color' => array(
                'rgb'=>'006464'
            )
        )
    )
);
$aSheet->getStyle('A2:O2')->applyFromArray($style_slogan);

// РЎС‚РёР»Рё РґР»СЏ С‚РµРєС‚Р° РІРѕР·Р»Рµ РґР°С‚С‹
$style_tdate = array(
    // РІС‹СЂР°РІРЅРёРІР°РЅРёРµ
    'alignment' => array(
        'horizontal' => PHPExcel_STYLE_ALIGNMENT::HORIZONTAL_RIGHT,
    ),
    // Р·Р°РїРѕР»РЅРµРЅРёРµ С†РІРµС‚РѕРј
    'fill' => array(
        'type' => PHPExcel_STYLE_FILL::FILL_SOLID,
        'color'=>array(
            'rgb' => 'EEEEEE'
        )
    ),
    // СЂР°РјРєРё
    'borders' => array(
        'right' => array(
            'style'=>PHPExcel_Style_Border::BORDER_NONE
        )
    )
);
$aSheet->getStyle('A4:F4')->applyFromArray($style_tdate);
 
// РЎС‚РёР»Рё РґР»СЏ РґР°С‚С‹
$style_date = array(
    // Р·Р°РїРѕР»РЅРµРЅРёРµ С†РІРµС‚РѕРј
    'fill' => array(
        'type' => PHPExcel_STYLE_FILL::FILL_SOLID,
        'color'=>array(
            'rgb' => 'EEEEEE'
        )
    ),
    // СЂР°РјРєРё
    'borders' => array(
        'left' => array(
            'style'=>PHPExcel_Style_Border::BORDER_NONE
        )
    ),
);
$aSheet->getStyle('F4')->applyFromArray($style_date);
 
// РЎС‚РёР»Рё РґР»СЏ С€Р°РїРєРё С‚Р°Р±Р»РёС†С‹ (С€РµСЃС‚Р°СЏ СЃС‚СЂРѕРєР°)
$style_hprice = array(
    // РІС‹СЂР°РІРЅРёРІР°РЅРёРµ
    'alignment' => array(
    'horizontal' => PHPExcel_STYLE_ALIGNMENT::HORIZONTAL_CENTER,
    ),
    // Р·Р°РїРѕР»РЅРµРЅРёРµ С†РІРµС‚РѕРј
    'fill' => array(
        'type' => PHPExcel_STYLE_FILL::FILL_SOLID,
        'color'=>array(
            'rgb' => 'CFCFCF'
        )
    ),
    // С€СЂРёС„С‚
    'font'=>array(
        'bold' => true,
        /* 'italic' => true, */
        'name' => 'Times New Roman',
        'size' => 10
    ),
);
$aSheet->getStyle('A6:O6')->applyFromArray($style_hprice);

// CС‚РёР»Рё РґР»СЏ РґР°РЅРЅС‹С… РІ С‚Р°Р±Р»РёС†Рµ РїСЂР°Р№СЃ-Р»РёСЃС‚Р°
$style_price = array(
    'alignment' => array(
    'horizontal' => PHPExcel_STYLE_ALIGNMENT::HORIZONTAL_LEFT,
    )
);
$aSheet->getStyle('A7:O'.($i+5))->applyFromArray($style_price);
/*
$objWriter = PHPExcel_IOFactory::createWriter($pExcel, 'Excel5');
$objWriter->save('simple.xls');
*/
//setlocale(LC_ALL, 'ru_RU.65001', 'rus_RUS.65001', 'Russian_Russia. 65001', 'russian');
//header('Content-Type: text/html; charset=cp1251');
$objWriter = new PHPExcel_Writer_Excel2007($pExcel);
$objWriter->save('D:\simple.xlsx');
echo 'Данные участников пробег день мет 10 км выгружены успешно!';

header('Content-Type:xlsx:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition:attachment;filename="simple.xls"');
$objWriter = new PHPExcel_Writer_Excel2007($pExcel);
$objWriter->save('php://output.xls');
?>