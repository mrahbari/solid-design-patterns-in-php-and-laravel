<?php

namespace Arcsym\SolidPhp\InterfaceSegregation\FirstExample\Refactoring;

class Teacher implements TeacherInterface
{
  /**
   * @return string
   */
  public function teaching(): string
  {
    return 'teaching';
  }

  public function givesGrades(): void
  {
    // TODO: Implement givesGrades() method.
  }
}
