<?php
    include('constants.php');

    translate(6626551222050);

    function translate($number,$iteration = 0) {
        $number_to_convert = $number;
        while ($number_to_convert != 0) {
            $length = strlen($number_to_convert);
            $constant_name = 'digit_' . $number_to_convert;
            $idxPoint = 1;
            if (defined($constant_name)) {
                echo constant($constant_name);
                break;
            } else {
                switch ($length) {
                    case 3:
                        $range = 100;
                        break;
                    case 4:
                        $range = 1000;
                        break;
                    case 5:
                        $range = 1000;
                        $idxPoint = 2;
                        break;
                    case 6:
                        $range = 100000;
                        break;
                    case 7:
                        $range = 100000;
                        $idxPoint = 2;
                        break;
                    case 8:
                        $range = 10000000;
                        break;
                    case 9:
                        $range = 10000000;
                        $idxPoint = 2;
                        break;
                    case 10:
                        $range = 1000000000;
                        break;
                    case 11:
                        $range = 1000000000;
                        $idxPoint = 2;
                        break;
                    case 12:
                        $range = 100000000000;
                        break;
                    case 13:
                        $range = 100000000000;
                        $idxPoint = 2;
                        break;
                    default:
                }

                $first_number = substr($number_to_convert,0,$idxPoint);
                $remaining_numbers = substr($number_to_convert,$idxPoint);

                echo constant('digit_' . $first_number) . ' ' . constant('digit_' . $range) . ' ';

                $number_to_convert = (int) $remaining_numbers;
            }
        }
    }
?>
