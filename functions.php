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
		$theThrow = rand(1,5);

		switch ($theThrow) {
			case ( 1 ):
				return "Rock";
			case ( 2 ):
				return "Paper";
			case ( 3 ):
				return "Scissors";
			case ( 4 ):
				return "Lizard";
			default:
				return "Spock";
		}
	 
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
		
		if (strtoupper($users_throw) == strtoupper($computers_throw))
		{	return "Tie.";	}
	
		$cthrow = strtoupper($computers_throw);
		
		switch ( $users_throw ) {
			case ( "Rock" ):
				if ( "LIZARD" == $cthrow || "SCISSORS" == $cthrow )
				{	return "User wins. Rock beats " . $computers_throw . "<br>" ; }
				else
				{	return "Computer wins. Rock loses to " . $computers_throw . "<br>" ; }
				break;
			case ( "Scissors" ):
				if ( "LIZARD" == $cthrow || "PAPER" == $cthrow )
				{	return "User wins. Scissors beats " . $computers_throw . "<br>" ; }
				else
				{	return "Computer wins. Scissors loses to " . $computers_throw . "<br>" ; }
				break;
			case ( "Paper" ):
				if ( "ROCK" == $cthrow || "SPOCK" == $cthrow )
				{	return "User wins. Paper beats " . $computers_throw . "<br>" ; }
				else
				{	return "Computer wins. Paper loses to " . $computers_throw . "<br>" ; }
				break;
			case ( "Lizard" ):
				if ( "SPOCK" == $cthrow || "PAPER" == $cthrow )
				{	return "User wins. Lizard beats " . $computers_throw . "<br>" ; }
				else
				{	return "Computer wins. Lizard loses to " . $computers_throw . "<br>" ; }
				break;
			case ( "Spock" ):
				if ( "ROCK" == $cthrow || "SCISSORS" == $cthrow )
				{	return "User wins. Spock beats " . $computers_throw . "<br>" ; }
				else
				{	return "Computer wins. Spock loses to " . $computers_throw . "<br>" ; }
				break;
			default:
				return "Improper value given.";
				
		}
		//return '';
	}
?>