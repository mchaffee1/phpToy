<?php
/**
 * Created by PhpStorm.
 * User: chaf
 * Date: 2/21/16
 * Time: 9:08 AM
 */
require "../model/ticker.php";
function get() {
  $ticks = ticker::tickerValue();
  $a = array("hello" => "hi", "ticks" => $ticks);
  echo json_encode($a, JSON_UNESCAPED_UNICODE);
}

get()

?>