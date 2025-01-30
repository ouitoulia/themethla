<?php

namespace Drupal\themethla\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;

/**
* Verifica che il valore sia una stringa alfanumerica maiuscola di 10 caratteri.
*
* @Constraint(
*   id = "CigConstraint",
*   label = @Translation("CIG Constraint", context = "Validation"),
* )
*/
class CigConstraint extends Constraint {
  public string $message = 'Il codice CIG "%value" deve essere lungo 10 caratteri e contenere solo lettere maiuscole e numeri.';
}
