<?php
require __DIR__ . "/../question1.php";
use PHPUnit\Framework\TestCase;
class Question1Test extends TestCase {
  private $question;

  public function testCaseOne()
  {
    $this->question = new Question1();
    $result = $this->question->saveThePrisoner(5, 2, 1);
    $this->assertEquals(2, $result);
  }

  public function testCaseTwo()
  {
    $this->question = new Question1();
    $result = $this->question->saveThePrisoner(5, 2, 2);
    $this->assertEquals(3, $result);
  }

  public function testCaseThree()
  {
    $this->question = new Question1();
    $result = $this->question->saveThePrisoner(7, 19, 2);
    $this->assertEquals(6, $result);
  }

  public function testCase()
  {
    $this->question = new Question1();
    $result = $this->question->saveThePrisoner(3, 7, 3);
    $this->assertEquals(3, $result);
  }
}
