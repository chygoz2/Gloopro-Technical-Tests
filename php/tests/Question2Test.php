<?php
require __DIR__ . "/../question2.php";
use PHPUnit\Framework\TestCase;
class Question2Test extends TestCase {
  private $question;

  public function testCaseOne()
  {
    $this->question = new Question2();
    $result = $this->question->beautifulDays(20, 23, 6);
    $this->assertEquals(2, $result);
  }
}
