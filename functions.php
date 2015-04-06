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
  $type_of_throws = array('rock','paper','scissors','lizard','spock');

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

     if ( $users_throw == 'rock' AND ( $computers_throw == 'scissors' || $computers_throw == 'lizard' ) ) {

     	return 'User wins!';

     } elseif ( $users_throw == 'scissors' AND ( $computers_throw == 'paper' || $computers_throw == 'lizard' ) ) {

     	return 'User wins!';

     } elseif ( $users_throw == 'paper' AND ( $computers_throw == 'rock' || $computers_throw == 'spock' ) ) {

     	return 'User wins!';

     } elseif ( $users_throw == 'lizard' AND ( $computers_throw == 'paper' || $computers_throw == 'spock' ) ) {

     	return 'User wins!';

     } elseif ( $users_throw == 'spock' AND ( $computers_throw == 'rock' || $computers_throw == 'scissors' ) ) {

     	return 'User wins!';

     } elseif ( $users_throw == $computers_throw ) {

     	return "It's a draw!";

     } else {

     	return 'Computer wins!';

     }

 }
