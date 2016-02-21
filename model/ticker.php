<?php
/**
 * Created by PhpStorm.
 * User: chaf
 * Date: 2/21/16
 * Time: 10:08 AM
 */

class ticker
{
  private $value;
  public static function tickerValue() {
    $instance = static::sharedInstance();
    $result = $instance->getAndIncrementTicker();
    return $result;
  }

  private function getAndIncrementTicker()
  {
    if (null === $this->value) {
      $this->value = 0;
    }
    return $this->value++;
  }

  private static $instance;


  public static function sharedInstance()
  {
    if (null === static::$instance) {
      static::$instance = new static();
    }

    return static::$instance;
  }

  protected function __construct()
  {
  }

  /**
   * Private clone method to prevent cloning of the instance of the
   * *Singleton* instance.
   *
   * @return void
   */
  private function __clone()
  {
  }

  /**
   * Private unserialize method to prevent unserializing of the *Singleton*
   * instance.
   *
   * @return void
   */
  private function __wakeup()
  {
  }



}