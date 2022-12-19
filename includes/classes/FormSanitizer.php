<?php
    class FormSanitizer{
        public static function sanitizeFormString($inputText){
            $inputText = strip_tags($inputText); //Strip all the html tags

            //this will remove spaces from the input text
            $inputText = str_replace(" ","",$inputText);

            // This will remove spaces from before and after the text, not in between them.
            // $inputText = trim($inputText);

            $inputText - strtolower($inputText); // setting all the characters to lowercase
            $inputText = ucfirst($inputText); //Uppercase first character
            return $inputText;
        }

        public static function sanitizeFormUsername($inputText){
            $inputText = strip_tags($inputText);
            $inputText = str_replace(" ","",$inputText);
            return $inputText;
        }

        public static function sanitizeFormPassword($inputText){
            $inputText = strip_tags($inputText);
            return $inputText;
        }

        public static function sanitizeFormEmail($inputText){
            $inputText = strip_tags($inputText);
            $inputText = str_replace(" ","",$inputText);
            return $inputText;
        }
    }

?>
