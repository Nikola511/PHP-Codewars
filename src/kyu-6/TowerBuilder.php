<?php declare(strict_types=1);

class TowerBuilder {
    public function tower_builder(int $n): array {
      $resultArray = array();
      for($i = 0; $i < $n; ++$i) {
        $currentFloor = "";
        for($j = 0; $j < $n * 2 - 1; ++$j) {
          if(abs($n-1-$j) > $i) {
            $currentFloor .= " ";
          }
          else {
              $currentFloor .= "*";
          }
        }
        array_push($resultArray, $currentFloor);
      }
      return $resultArray;
    }
}

/*Build Tower by the following given argument:
number of floors (integer and always greater than 0).

Tower block is represented as *

Python: return a list;
JavaScript: returns an Array;
C#: returns a string[];
PHP: returns an array;
C++: returns a vector<string>;
Haskell: returns a [String];
Have fun!

for example, a tower of 3 floors looks like below

[
  '  *  ', 
  ' *** ', 
  '*****'
]
and a tower of 6 floors looks like below

[
  '     *     ', 
  '    ***    ', 
  '   *****   ', 
  '  *******  ', 
  ' ********* ', 
  '***********'
]
Go challenge Build Tower Advanced once you have finished this :)
*/