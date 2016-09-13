<?php
    class Anagram
    {
        function compareWords($input_1, $input_2)
        {
           // lowercase both inputs
            $str_input_1 = strtolower($input_1);
            $str_input_2 = strtolower($input_2);
            // account for multiple items in string input 2
            $list_of_possibles = explode(" ", $input_2);
            $str_1_toBeSplit = str_split($str_input_1);
            sort($str_1_toBeSplit);
            if (count($list_of_possibles) > 1) {
                foreach ($list_of_possibles as $candidate) {
                    $candidate_toBeSplit = str_split($candidate);
                    sort($candidate_toBeSplit);
                    if ($candidate_toBeSplit == $str_1_toBeSplit){
                        return TRUE;
                    }
                }
            }
            else {
                // convert str to array and stores single chars as separate elements in the array
                $anagram_split = str_split($str_input_1);
                $list_split = str_split($str_input_2);
                // sort the arrays from lowest to highest (a-z, 0-9)
                sort($anagram_split);
                sort($list_split);
                if ($anagram_split == $list_split)
                {
                    return TRUE;
                }
            }
        }
    }
?>
