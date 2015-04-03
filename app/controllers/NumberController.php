<?php

class NumberController extends Controller {
	public function blank() {
		return View::make('hello');
	}

	public function calc($output, $num) {
		$operator = Session::get('operator');
		if ($output != 'init') {
			if ($operator) {
				switch ($operator) {
					case '*':
						$num = $output * $num;
						break;
					case ':':
						$num = ($output / $num);
						break;
					case '+':
						$num = $output + $num;
						break;
					case '-':
						$num = $output - $num;
						break;
				}
				Session::put('operator', NULL);
			} else {
				$num = $output * 10 + $num;
			}
		}
 		return View::make('hello')->with('output', $num);
	}

	public function operate($output, $operator) {
		if ($output == 'init') {
			return View::make('hello');
		}
		Session::put('operator', $operator);
		return View::make('hello', array('output' => $output, 'operator' => $operator));
	}
}