<?php

foreach(range(1,100) as $i) {
  echo $i." ";

  if($i % 3 == 0)
    echo "Fizz";

  //print Buzz if multiple of 5
  if($i % 5 == 0)
    echo "Buzz";

  echo "\n";
}
