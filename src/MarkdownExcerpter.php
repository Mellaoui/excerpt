<?php

namespace Mellaoui\Excerpt;

use Exception;
use League\CommonMark\CommonMarkConverter;
use Mellaoui\Excerpt\Contracts\Excerpter;

class MarkdownExcerpter implements Excerpter
{
    public function __construct(private $converter = new CommonMarkConverter())
    {
        // ...
    }

    /**
     * @throws Exception
     * {@inheritDoc}
     */
    public function excerpt($text, $length): string
    {
        $this->validateLength($length);

        $text = $this->converter->convert($text);

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

    /**
     * @throws Exception
     */
    private function validateLength($length): void
    {

        if ($length < 1) {
            throw new Exception('the length must be greater than 0');
        }
    }
}
