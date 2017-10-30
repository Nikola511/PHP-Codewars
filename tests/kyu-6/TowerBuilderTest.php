<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require_once '../src/kyu-6/TowerBuilder.php';

class TowerBuilderTest extends TestCase {
  public function testBaseCase() {
    $this->assertEquals(['*'], TowerBuilder::tower_builder(1));
  }
  public function testDescriptionExamples() {
    $this->assertEquals([
      '  *  ',
      ' *** ',
      '*****'
    ], TowerBuilder::tower_builder(3));
    $this->assertEquals([
      '     *     ', 
      '    ***    ', 
      '   *****   ', 
      '  *******  ', 
      ' ********* ', 
      '***********'
    ], TowerBuilder::tower_builder(6));
  }
  public function testFixed() {
    $this->assertEquals([
      ' * ',
      '***'
    ], TowerBuilder::tower_builder(2));
    $this->assertEquals([
      '   *   ',
      '  ***  ',
      ' ***** ',
      '*******'
    ], TowerBuilder::tower_builder(4));
    $this->assertEquals([
      '    *    ',
      '   ***   ',
      '  *****  ',
      ' ******* ',
      '*********'
    ], TowerBuilder::tower_builder(5));
    $this->assertEquals([
      '      *      ',
      '     ***     ',
      '    *****    ',
      '   *******   ',
      '  *********  ',
      ' *********** ',
      '*************'
    ], TowerBuilder::tower_builder(7));
    $this->assertEquals([
      '       *       ',
      '      ***      ',
      '     *****     ',
      '    *******    ',
      '   *********   ',
      '  ***********  ',
      ' ************* ',
      '***************'
    ], TowerBuilder::tower_builder(8));
    $this->assertEquals([
      '        *        ',
      '       ***       ',
      '      *****      ',
      '     *******     ',
      '    *********    ',
      '   ***********   ',
      '  *************  ',
      ' *************** ',
      '*****************'
    ], TowerBuilder::tower_builder(9));
    $this->assertEquals([
      '         *         ',
      '        ***        ',
      '       *****       ',
      '      *******      ',
      '     *********     ',
      '    ***********    ',
      '   *************   ',
      '  ***************  ',
      ' ***************** ',
      '*******************'
    ], TowerBuilder::tower_builder(10));
  }
  protected function solution(int $n): array {
    return $n === 1 ? ['*'] : array_merge(array_map(function (string $f): string
      {return " $f ";}, $this->solution($n - 1)),
              [implode(array_fill(0, 2 * $n - 1, "*"))]);
  }
  public function testRandom() {
    for ($i = 0; $i < 10; $i++) {
      $this -> assertEquals($this -> solution($n = rand(1, 1000)),
              TowerBuilder::tower_builder($n));
    }
  }
}