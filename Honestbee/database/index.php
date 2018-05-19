<meta charset="UTF-8">
<?php
include_once("Video_Database.php");
include_once("Homepage_Video.php");
$database = new Video_Database();
$db = $database->getConnection();
$Video_Connect = new Homepage_Video($db);
//$Video_Connect->Show_DB();
//$foreach_array_1 = $Video_Connect->DB_all;
//echo('<br/>');
//foreach($foreach_array_1 as $key => $value) {
//    echo'<br/>';
//    print_r($value);
//}
//$Video_Connect->Drop_DB();
//echo '<br>DROP!!!<br>';
//$Video_Connect->Show_DB();
//$foreach_array_1 = $Video_Connect->DB_all;
//echo('<br/>');
//foreach($foreach_array_1 as $key => $value) {
//    echo'<br/>';
//    print_r($value);
//}
//echo '<br>SET Start!<br>';
//$Video_Connect->Set_DB();
//echo '<br>SET Finish!<br>';
//echo '<br>Point Start!<br>';
//$Video_Connect->Point_DB();
//echo '<br>Point Finish!<br>';
//echo '<br>Show Table<br>';
//$Video_Connect->Show_Table();
//$foreach_array_2 = $Video_Connect->bee_Table;
//echo('<br/>');
//foreach($foreach_array_2 as $key => $value) {
//    echo'<br/>';
//    print_r($value);
//}

$keyword = "牛五花火鍋肉片";
$counter = strlen($keyword) / 3;
echo $counter;
$j = 9;
for ($i = 0; $i < $counter; $i++) {

    $Split = str_split($keyword, $j);
    foreach ($Split as $key => $value) {
        $DD = '%' . $value . '%';
        $Video_Connect->Select_Data("'$DD'");
        $foreach_array_2 = $Video_Connect->select_data;
        print_r($foreach_array_2);
        echo '<br/>';
    }
    $j += 3;
}


//$Video_Connect->Select_Data();
//$Video_Connect->Create_user();
//$Video_Connect->Clear_table();

//$Video_Connect->Show_Data();

//$foreach_array_2 = $Video_Connect->select_data;
//echo('<br/>');
//foreach ($foreach_array_2 as $key => $value) {
//    echo '<br/>';
//    print_r($value);
//}
echo '<br>Show Finish!<br>';