<?php
/**
 * Created by PhpStorm.
 * User: chaf
 * Date: 2/21/16
 * Time: 10:08 AM
 */
require "../data/hiMem.php";
class ticker
{
  private static $key = "ticker";

  private static function memcache() {
    return hiMem::memcache();
  }
  public static function tickerValue()
  {
    $mem = static::memcache();
    if(!$mem->get(static::$key)) {
      $mem->set(static::$key, 0); // NOTE: negative numbers are not stored to memcache as numeric and that breaks things.
    }
    return $mem->increment(static::$key);
  }
  public static function resetTicker() {
    $mem = static::memcache();
  }
}
