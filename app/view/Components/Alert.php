<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
  public $classes;
  public $title;

  public function __construct($type = 'info', $title = '')
  {
    switch ($type) {
      case 'info':
        $classes = "bg-teal-100";
        break;
      
      case 'danger':
        $classes = "bg-red-500";
        break;
    }
    if ($title != ''){
      $this->title = $title;
    }
    $this->classes = $classes;
  }

  public function render()
  {
    return view('components.alert');
  }
}