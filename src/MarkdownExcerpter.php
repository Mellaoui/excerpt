<?php

namespace Mellaoui\Excerpt;

<<<<<<< HEAD
use Exception;

=======
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Exception\CommonMarkException;
>>>>>>> 33462666f83fae07223feadd993068f6f9119860
use Mellaoui\Excerpt\Contracts\Excerpter;

class MarkdownExcerpter implements Excerpter
{
    public function __construct(private $converter = new CommonMarkConverter())
    {
        // ...
    }

    /**
<<<<<<< HEAD
     * @inheritDoc
     * @throws Exception
=======
     * {@inheritDoc}
     *
     * @throws CommonMarkException
>>>>>>> 33462666f83fae07223feadd993068f6f9119860
     */
    public function excerpt($text, $length): string
    {
        $this->validateLength($length);

        $text = $this->converter->convert($text);
<<<<<<< HEAD
=======

        // Remove HTML tags and trim white spaces
>>>>>>> 33462666f83fae07223feadd993068f6f9119860
        $text = trim(strip_tags($text));

        $words = explode(' ', $text);
        $excerptWords = array_slice($words, 0, $length);
        $excerpt = implode(' ', $excerptWords);

        if (count($words) > $length) {
            $excerpt .= '...';
        }

        return $excerpt;
    }
<<<<<<< HEAD


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
=======
}
>>>>>>> 33462666f83fae07223feadd993068f6f9119860
