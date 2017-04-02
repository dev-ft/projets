<?php

/**
 * A few string utilities
 */
class StringUtils {

    /**
     * Clean string to return UTF8 name, capitalized and trimmed
     * @param string $inDirtyString
     * @return string
     */
    public static function cleanName($inDirtyString) {
        $clean = filter_var(utf8_decode($inDirtyString), FILTER_SANITIZE_STRING);
        $clean = trim(strtolower($clean));
        return utf8_encode(ucwords($clean));
    }

    /**
     * Clean string to return UTF8, only first letter capitalized
     * @param string $inDirtyString
     * @return string
     */
    public static function cleanString($inDirtyString) {
        $clean = filter_var(utf8_decode($inDirtyString), FILTER_SANITIZE_STRING);
        $clean = trim(strtolower($clean));
        return utf8_encode(ucfirst($clean));
    }
    
    /**
     * Clean string to return UTF8 mail, LOWERCASE
     * @param string $inDirtyString
     * @return string clean mail, NULL if mail is not validated
     */
    public static function cleanMail($inDirtyString, $keepCase = false) {
        $clean = filter_var(utf8_decode($inDirtyString), FILTER_SANITIZE_EMAIL);
        if ($keepCase) {
            $clean = trim($clean);
        } else {
            $clean = trim(strtolower($clean));
        }
        if (filter_var($clean, FILTER_VALIDATE_EMAIL)) {
            return utf8_encode($clean);
        }
        return null;
    }

}
