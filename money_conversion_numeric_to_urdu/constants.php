<?php
    define("digit_0","صفر");
    define("digit_1","ایک");
    define("digit_2","دو");
    define("digit_3","تین");
    define("digit_4","چار");
    define("digit_5","پانچ");
    define("digit_6","چھ");
    define("digit_7","سات");
    define("digit_8","آٹھ");
    define("digit_9","نو");
    define("digit_10","دس");
    define("digit_11","گیارہ");
    define("digit_12","بارہ");
    define("digit_13","تیرہ");
    define("digit_14","چودہ");
    define("digit_15","پندرہ");
    define("digit_16","سولہ");
    define("digit_17","سترہ");
    define("digit_18","اٹھارہ");
    define("digit_19","انیس");
    define("digit_20","بیس");
    define("digit_21","اکیس");
    define("digit_22","بائیس");
    define("digit_23","تئیس");
    define("digit_24","چوبیس");
    define("digit_25","پچیس");
    define("digit_26","چھببیس");
    define("digit_27","ستائیس");
    define("digit_28","اٹھائیس");
    define("digit_29","انتیس");
    define("digit_30","تیس");
    define("digit_31","اکتیس");
    define("digit_32","بتیس");
    define("digit_33","تینتیس");
    define("digit_34","چوتیس");
    define("digit_35","پینتیس");
    define("digit_36","چھتیس");
    define("digit_37","سنتیس");
    define("digit_38","اڑتیس");
    define("digit_39","انتالیس");
    define("digit_40","چالیس");
    define("digit_41","اکتالیس");
    define("digit_42","بیالیس");
    define("digit_43","تینتالیس / ترالیس");
    define("digit_44","چوالیس");
    define("digit_45","پینتالیس");
    define("digit_46","چھیالیس");
    define("digit_47","سینتالیس");
    define("digit_48","  اڑتالیس");
    define("digit_49","انچاس");
    define("digit_50","پچاس");
    define("digit_51","اکاون");
    define("digit_52","باون");
    define("digit_53","تریپن");
    define("digit_54","چون");
    define("digit_55","پچپن");
    define("digit_56","چھپن");
    define("digit_57","ستاون");
    define("digit_58","اٹھاون");
    define("digit_59","انسٹھ");
    define("digit_60","ساٹھ");
    define("digit_61","اکسٹھ");
    define("digit_62","باسٹھ");
    define("digit_63","تریسٹھ");
    define("digit_64","چونسٹھ");
    define("digit_65","پینسٹھ");
    define("digit_66","چھیاسٹھ");
    define("digit_67","سڑسٹھ");
    define("digit_68","اڑسٹھ");
    define("digit_69","انهتر");
    define("digit_70","ستر");
    define("digit_71","اکھتر");
    define("digit_72","بہتر");
    define("digit_73","تہتر");
    define("digit_74","چوہتر");
    define("digit_75","پچھتر");
    define("digit_76","چھہتر");
    define("digit_77","ستتر");
    define("digit_78","اٹھتر");
    define("digit_79","اناسی");
    define("digit_80","اسی");
    define("digit_81","اکاسی");
    define("digit_82","بیاسی");
    define("digit_83","تراسی");
    define("digit_84","چوراسی");
    define("digit_85","پچھاسی");
    define("digit_86","چھیاسی");
    define("digit_87","ستاسی");
    define("digit_88","اٹھاسی");
    define("digit_89","نواسی");
    define("digit_90","نوے");
    define("digit_91","اکانوے");
    define("digit_92","بانوے");
    define("digit_93","ترانوے");
    define("digit_94","چورانوے");
    define("digit_95","پچانوے");
    define("digit_96","چھیانوے");
    define("digit_97","ستانوے");
    define("digit_98","اٹھانوے");
    define("digit_99","ننانوے");
    define("digit_100","سو");
    define("digit_1000","ہزار");
    define("digit_10000","دس ہزار");
    define("digit_100000","لاکھ");
    define("digit_1000000","دس لاکھ");
    define("digit_10000000","کروڑ");
    define("digit_100000000","دس کروڑ");
    define("digit_1000000000","ارب");
    define("digit_10000000000","دس ارب");
    define("digit_100000000000","کھرب");
    define("digit_1000000000000"," دس کھرب");

    function translate($number) {
        $aryRangeIndex = [
            'length_3'  => [ 'range' => 100, 'index' => 1],
            'length_4'  => [ 'range' => 1000, 'index' => 1],
            'length_5'  => [ 'range' => 1000, 'index' => 2],
            'length_6'  => [ 'range' => 100000, 'index' => 1],
            'length_7'  => [ 'range' => 100000, 'index' => 2],
            'length_8'  => [ 'range' => 10000000, 'index' => 1],
            'length_9'  => [ 'range' => 10000000, 'index' => 2],
            'length_10' => [ 'range' => 1000000000, 'index' => 1],
            'length_11' => [ 'range' => 1000000000, 'index' => 2],
            'length_12' => [ 'range' => 100000000000, 'index' => 1],
            'length_13' => [ 'range' => 100000000000, 'index' => 2]
        ];
        $number_to_convert = $number;
        while ($number_to_convert != 0) {
            $length = strlen($number_to_convert);
            $constant_name = 'digit_' . $number_to_convert;
            if (defined($constant_name)) {
                echo constant($constant_name);
                break;
            } else {
                $aryCurrentRangeIndex = $aryRangeIndex['length_' . $length];
                $range = $aryCurrentRangeIndex['range'];
                $idxPoint = $aryCurrentRangeIndex['index'];
                $first_number = substr($number_to_convert,0,$idxPoint);
                $remaining_numbers = substr($number_to_convert,$idxPoint);

                echo constant('digit_' . $first_number) . ' ' . constant('digit_' . $range) . ' ';

                $number_to_convert = (int) $remaining_numbers;
            }
        }
    }
?>
