<?php

/**
 * Computer's Throw
 *
 * Return a random throw.
 * Options: rock, paper, or scissors
 *
 * @return string
 */
function computers_throw() {
  $type_of_throws = array('Rock','Paper','Scissors','Lizard','Spock');

  return $type_of_throws[array_rand($type_of_throws)];
}

/**
 * Who Wins?
 *
 * Accept two throws and return a winner.
 *
 * @param $users_throw
 * @param $computers_throw
 * @return string
 */
 function who_wins( $users_throw, $computers_throw) {

     if ( $users_throw == 'Rock' AND ( $computers_throw == 'Scissors' || $computers_throw == 'Lizard' ) ) {

     	return 'User wins!';

     } elseif ( $users_throw == 'Scissors' AND ( $computers_throw == 'Paper' || $computers_throw == 'Lizard' ) ) {

     	return 'User wins!';

     } elseif ( $users_throw == 'Paper' AND ( $computers_throw == 'Rock' || $computers_throw == 'Spock' ) ) {

     	return 'User wins!';

     } elseif ( $users_throw == 'Lizard' AND ( $computers_throw == 'Paper' || $computers_throw == 'Spock' ) ) {

     	return 'User wins!';

     } elseif ( $users_throw == 'Spock' AND ( $computers_throw == 'Rock' || $computers_throw == 'Scissors' ) ) {

     	return 'User wins!';

     } elseif ( $users_throw == $computers_throw ) {

     	return "It's a draw!";

     } else {

     	return 'Computer wins!';

     }

 }
