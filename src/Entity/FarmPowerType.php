<?php

namespace Drupal\farm_equipment_power\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the FarmPowerType entity.
 *
 * @ConfigEntityType(
 *   id = "power_type",
 *   label = @Translation("Power type"),
 *   label_collection = @Translation("Power types"),
 *   handlers = {
 *     "access" = "\Drupal\entity\EntityAccessControlHandler",
 *     "permission_provider" = "\Drupal\entity\EntityPermissionProvider",
 *   },
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *   },
 * )
 *
 * @ingroup farm
 */
class FarmPowerType extends ConfigEntityBase implements FarmPowerTypeInterface {

  /**
   * The power type ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The power type label.
   *
   * @var string
   */
  protected $label;

  /**
   * {@inheritdoc}
   */
  public function getLabel() {
    return $this->label;
  }

}
