<?php
    require_once "src/Anagram.php";
    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_compareWords_singleLetterIdentical()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input_1 = "a";
            $input_2 = "a";
            //Act
            $result = $test_Anagram->compareWords($input_1, $input_2);
            //Assert
            $this->assertEquals(TRUE, $result);
        }
        function test_compareWords_singleLetterNonIdentical()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input_1 = "y";
            $input_2 = "z";
            //Act
            $result = $test_Anagram->compareWords($input_1, $input_2);
            //Assert
            $this->assertEquals(FALSE, $result);
        }
        // If two identical multi-letter words are inputted, return TRUE (n/a)
        function test_compareWords_two_identical_length_multi_characters()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input_1 = "bread";
            $input_2 = "beard";
            //Act
            $result = $test_Anagram->compareWords($input_1, $input_2);
            //Assert
            $this->assertEquals(TRUE, $result);
        }
        function test_compareWords_list()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input_1 = "listen";
            $input_2 = "silent house tinsel orange";
            //Act
            $result = $test_Anagram->compareWords($input_1, $input_2);
            //Assert
            $this->assertEquals(TRUE, $result);
        }
    }
?>
