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
        // Remove HTML tags and trim white spaces
        $text = trim(strip_tags($text));

        // Explode the text into an array of words
        $words = explode(' ', $text);

        // Take the specified number of words from the beginning of the array
        $excerptWords = array_slice($words, 0, $length);

        // Join the words back into a string
        $excerpt = implode(' ', $excerptWords);

        // If the original text has more words than the specified count, append ellipses
        if (count($words) > $length) {
            $excerpt .= '...';
        }

        return $excerpt;
    }
}