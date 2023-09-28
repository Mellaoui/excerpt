<?php

namespace Mellaoui\Excerpt;

use Mellaoui\Excerpt\Contracts\Excerpter;
use phpDocumentor\Reflection\Types\String_;

class TextExcerpter implements Contracts\Excerpter
{

    /**
     * @inheritDoc
     */
    public function excerpt($text, $length)
    {
        // TODO: Implement excerpt() method.
        // Remove HTML tags and trim white spaces
        $text = trim(strip_tags($text));

        // Check if the text length is greater than the specified length
        if (strlen($text) > $length) {
            // Find the last space within the specified length
            $last_space = strrpos(substr($text, 0, $length), ' ');

            // Trim the text to the last space and append ellipses
            $excerpt = substr($text, 0, $last_space) . '...';
        } else {
            // If the text is shorter than the specified length, use the original text
            $excerpt = $text;
        }

        return $excerpt;
    }
}