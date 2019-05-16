<?php
require 'question1.php';

class Question1Tests extends PHPUnit_Framework_TestCase
{
  private $question;

  protected function setUp()
  {
    $this->question = new Question1();
  }

  protected function tearDown()
  {
    $this->question = NULL;
  }

  public function testCaseOne()
  {
    $result = $this->question->saveThePrisoner(5, 2, 1);
    $this->assertEquals(2, $result);
  }

  public function testCaseTwo()
  {
    $result = $this->question->saveThePrisoner(5, 2, 2);
    $this->assertEquals(3, $result);
  }
}
