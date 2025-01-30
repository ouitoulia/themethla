<?php

namespace Drupal\themethla\Hook;

use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Hook\Attribute\Hook;

class ValidationHooks {

  #[Hook('entity_bundle_field_info_alter')]
  public function entityBundleFieldInfoAlter(&$fields, EntityTypeInterface $entity_type, $bundle) {
    if ($entity_type->id() === 'node' && isset($fields['field_cig'])) {
      $fields['field_cig']->addConstraint('CigConstraint');
    }
  }
}
