<?php

namespace Mellaoui\Excerpt;

use Exception;

class TextExcerpter implements Contracts\Excerpter
{
    /**
     * @throws Exception
     * {@inheritDoc}
     */
    public function excerpt($text, $length): string
    {
        $this->validateLength($length);

        $text = trim(strip_tags($text));

        $words = explode(' ', $text);

        $excerptWords = array_slice($words, 0, $length);

        $excerpt = implode(' ', $excerptWords);
        if (count($words) > $length) {
            $excerpt .= '...';
        }

        return $excerpt;
    }

    /**
     * @throws Exception
     */
    private  function  validateLength($length): void
    {
        if($length <= 0 ){
            throw new Exception('number must be greater or equal to 0');
        }
    }

}



