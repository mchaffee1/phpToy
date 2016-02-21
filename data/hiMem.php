<?php
/**
 * Created by PhpStorm.
 * User: chaf
 * Date: 2/21/16
 * Time: 11:44 AM
 */

class hiMem {
  public static function memcache() {
    $mem = new Memcache;
    $mem->connect('localhost', 11211) or die("could not connect");
    return $mem;
  }
}