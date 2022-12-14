<?php
    function input_check($string, $type){
        switch($type){
            case "text":
                return(!preg_match("/^[a-zA-Z-'\\\\ ]*$/", $string));
                break;
            case "title":
                return(!preg_match("/^[a-zA-Z0-9-':.?,\\\\ ]*$/", $string));
                break;
            case "email":
                return(!filter_var($string, FILTER_VALIDATE_EMAIL));
                break;
            case "username":
                    return(!preg_match("/^[a-zA-Z0-9]([._-](?![._-])|[a-zA-Z0-9]){3,18}[a-zA-Z0-9]$/", $string));
                    break;
            case "password":
                return(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $string));
                break;
            case "normal":
                return(!preg_match("/^[a-zA-Z0-9 ]*$/", $string));
                break;
            case "isbn":
                    return(!preg_match("/^[0-9]{13}$/", $string));
                    break;
            case "date":
                $format = 'Y-m-d';
                $d = DateTime::createFromFormat($format, $string);
                return $d && $d->format($format) == $string;
                break;
            default:
                return FALSE;
                break;                                    
        }
    }
?>