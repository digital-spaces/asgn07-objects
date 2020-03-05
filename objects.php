<?php
class NameType {
  // My beautiful arrays and an integer counter.
  public $associativeNames;
  public $indexedNames;
  public $uniqueNames;
  
  // Getters to access my beautiful arrays.
  public function getAssociativeNames() {
    return $this->associativeNames;
  }
  public function getIndexedNames() {
    return $this->indexedNames;
  }
  // Gets most common names by sorting the associative names array by value and returning it. In theory, we could do this on the actual array instead of creating a stand-in, but I want to be safe with the integrity of my data.
  public function getMostCommonNames() {
    $array = $this->associativeNames;
    arsort($array);
    return $array;
  }
  // Adds names to arrays and/or counts names.
  public function setNames($name) {
    if (!isset($this->associativeNames[$name])) {
      $this->uniqueNames++;
      $this->indexedNames[] = $name;
      $this->associativeNames[$name] = 1;
    } else {
      $this->associativeNames[$name] += 1;
    }
  }
}
