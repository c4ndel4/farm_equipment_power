<?php

namespace Drupal\farm_equipment_power\Entity;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

/**
 * Provides an interface for defining FarmPowerType config entities.
 *
 * @ingroup farm
 */
interface FarmPowerTypeInterface extends ConfigEntityInterface {

  /**
   * Returns the power type label.
   *
   * @return string
   *   The power type label.
   */
  public function getLabel();

}