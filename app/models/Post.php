<?php

use LaravelBook\Ardent\Ardent;

class Post extends Ardent {
 
  protected $fillable = array('body');
 
  public function user()
  {
    return $this->belongsTo('User');
  }

  /**
 * Ardent validation rules
 */
  public static $rules = array(
    'body' => 'required',
    'user_id' => 'required|numeric'
  );

  /**
   * Factory
   */
  public static $factory = array(
    'body' => 'text',
    'user_id' => 'factory|User',
  );
   
}