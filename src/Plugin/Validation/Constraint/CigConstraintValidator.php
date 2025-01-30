<?php

namespace Drupal\themethla\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Logica di validazione del CIG
 */
class CigConstraintValidator extends ConstraintValidator {
  /**
   * @param $value
   * @param Constraint $constraint
   * @return void
   */
  public function validate($value, Constraint $constraint): void {
    $cig = isset($value->getValue()[0]) ? $value->getValue()[0]['value'] : '';
    if (!empty($cig) && !preg_match('/^[A-Z0-9]{10}$/', $cig)) {
      $this->context->buildViolation($constraint->message)
        ->setParameter('%value', $cig)
        ->addViolation();
    }
  }
}
