<?php

// This baby here takes a message, an array, and a boolean that says whether or not the array is an associative array. If you know a better way to do it besides the gettype function (doesn't work; they're both type array), let me know. It then iterates through the first 10 items of the array and displays them as a list. PHP rocks.
function list_names ($echo, $array, $isAssoc) {
  echo '<p>'.$echo.'<ol>';
  $i = 0;
  if ($isAssoc) {
    foreach ($array as $key => $value) {
      echo '<li>'.$key.' with '.$value.' occurrences</li>';
      if (++$i == 10) break;
    }
  } else {
    foreach ($array as $value) {
      echo '<li>'.$value.'</li>';
      if (++$i == 25) break;
    }
  }
  echo '</ol></p>';
}

// Creates unique modified names that aren't in the data set by iterating through the first and last names and comparing the combinations until we get 25 unique names. Yes, the number is hard-coded, because simplicity. Also it could theoretically break but won't with our data.
function modify_names ($firstNames, $lastNames) {
  echo '<p>A list of 25 speciality modified names: <ol>';
  $i = 0;
  while ($i < 25) {
    $seed = $i;
    $testName = $firstNames->indexedNames[$seed+1].' '.$lastNames->indexedNames[$seed+2];
    if (!isset($fullNames[$testName])) {
      echo '<li>'.$testName.'</li>';
      $i++;
    } else {
      $seed++;
    }
  }
  echo '</ol></p>';
}

// This function just reads through the data handed to it and sends it off to some object methods after parsing it. It's also programmed to return the specialty unique names because that was the easiest way I could think of to pass that out of scope. Maybe not the ideal implementation, but you can't win 'em all.
function read_names ($dataFile, $firstNames, $lastNames, $fullNames) {
  // Setting all the variables we'll need. Mostly arrays and counters.
  $rows = explode("\n", $dataFile);
  $specialityUniqueNames = array();

  // Combing through the data, only even rows because those are the rows with names on them.
  for ($i = 0; $i < sizeof($rows); $i += 2) {
    // This fun bit of code validates the names using regular expressions after removing the Lorem Ipsum after the name.
    if (preg_match('/^[A-Z][a-zA-Z\'-]+, [A-Z][a-zA-Z\'-]+/', substr($rows[$i], 0, strpos($rows[$i], '--')))) {
    // Parses and stores the first, last and full names in our validated data.
    $rowData = explode(',', $rows[$i]);
    $lastName = $rowData[0];
    $firstName = substr($rowData[1], 0, strpos($rowData[1], '--'));
    $fullName = $firstName.' '.$lastName;

    // If the first or last name haven't been encountered before, add it to the specialty unique names array.
    // This has to be done BEFORE counting the unique first and last names.
    if (!isset($firstNames->associativeNames[$firstName]) and !isset($lastNames->associativeNames[$lastName])) {
      $specialityUniqueNames[] = $fullName;
    }

    // If the first name hasn't been encountered before, increase unique first names counter and add the name to the array.
    // If the first name has been encountered before, increase its usage count.
    $firstNames->setNames($firstName);

    // If the last name hasn't been encountered before, increase unique last names counter and add the name to the array.
    // If the last name has been encountered before, increase its usage count.
    $lastNames->setNames($lastName);

    // If the full name hasn't been encountered before, increase unique full names counter and add the name to the array.
    // If the full name has been encountered before, increase its usage count.
    $fullNames->setNames($fullName);
    }
  }
  return $specialityUniqueNames;
}
