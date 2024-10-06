<?php
date_default_timezone_set("Africa/Nairobi");

$current_date = date("Y-m-d");
$kk = new DateTime($current_date);
$weeko = $kk->format("W");

$current_date_number = date("d");
$current_date = date("Y-m-d");
$current_week = "$weeko";
$current_month =  date("Y-m");
$current_year = date("Y");

$current_time_stamp = date("Y-m-d H:i:s");


// Formula for generating random unique number that won't repeat after first generation
// $kaka = date("YdmHis");
// $kakaa = $kaka - 20220000000000;
// $receipt_number = "SAS/ER/";
// $receipt_number .= "$kakaa";
