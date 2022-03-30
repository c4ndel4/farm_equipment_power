<?php

/**
 * @file
 * Provides Views runtime hooks for farm_equipment_power.module.
 */

use Drupal\farm_equipment_power\Entity\FarmPowerType;
use Drupal\views\ViewExecutable;

/**
 * Implements hook_views_pre_render().
 */
function farm_equipment_power_views_pre_render(ViewExecutable $view) {

    // Load all power types.
    $power_types = FarmPowerType::loadMultiple();

    // Get exposed filters.
    $exposed_filters = $view->getExposedInput();

    // If the power type exposed filter is already in use remove power types
    // that are not included.
    if (!empty($exposed_filters['is_powered_value'])) {
      $power_types = array_filter($power_types, function ($key) use ($exposed_filters) {
        return in_array($key, $exposed_filters['is_powered_value']);
      }, ARRAY_FILTER_USE_KEY);
    }

    // If the power type exposed filter is already in use remove power types
    // that are not included.
    if (!empty($exposed_filters['power_type_value'])) {
      $power_types = array_filter($power_types, function ($key) use ($exposed_filters) {
        return in_array($key, $exposed_filters['power_type_value']);
      }, ARRAY_FILTER_USE_KEY);
    }

}
