<?php

namespace Mellaoui\Excerpt;

use Exception;

use Mellaoui\Excerpt\Contracts\Excerpter;
use League\CommonMark\CommonMarkConverter;
class MarkdownExcerpter implements Excerpter
{
    public function __construct( private $converter =  new CommonMarkConverter())
    {

    }

    /**
     * @inheritDoc
     * @throws Exception
     */
    public function excerpt($text, $length): string
    {
        $this->validateLength($length);

        $text = $this->converter->convert($text);
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