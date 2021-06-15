<?php
// CSV OUTPUT FORMAT:

//0 -> Username      -> viewer[name]
//1 -> twitchID      -> viewer[platform_id]
//2 -> currentPoints -> points
//3 -> alltimePoints -> points
//4 -> watchtime     -> time

//This is the format required by Streamelements. Feel free to mess around with this.

$filePath = "files/";
$csvName = "loyalty.csv";
$theData = [];

//Get data from each json file
foreach (glob($filePath . "*.json") as $file) {
  echo PHP_EOL . $file;
  $json = json_decode(file_get_contents($file));
  $data = ($json->cloudbot->data);
  foreach ($data as $entry) {
    $theData[] = [
      $entry->viewer->name,
      $entry->viewer->platform_id,
      $entry->points,
      $entry->points,
      $entry->time
    ];
  }
}


//Save the data to the csv
$fp = fopen($csvName, 'w');
foreach ($theData as $user) {
  fputcsv($fp, $user);
}
