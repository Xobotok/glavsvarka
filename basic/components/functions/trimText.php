<?php
/**
 * @param string $text
 * @param int $limit
 * @return bool|string
 * @internal param int $limit
 */
function trimText($text, $limit) {
        $text = strip_tags($text);
        $text = substr($text, 0, $limit);
        $text = rtrim($text, "!-,.:");
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text."...";
    return $text;
}