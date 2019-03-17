<?php

namespace App\Providers;

class HooksProvider
{

  public static function boot()
  {
    $hooks  = config('hooks');

    $actions = $hooks['actions'];
    $filters = $hooks['filters'];

    // Ajout des actions et filtres
    foreach ($actions as $action) {
      add_action(...$action);
    }

    foreach ($filters as $filter) {
      add_filter(...$filter);
    }
  }
}