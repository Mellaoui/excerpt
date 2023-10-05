<?php

namespace Mellaoui\Excerpt;

use Exception;

class TextExcerpter implements Contracts\Excerpter
{
    /**
<<<<<<< HEAD
     * @inheritDoc
     * @throws Exception
=======
     * {@inheritDoc}
>>>>>>> 33462666f83fae07223feadd993068f6f9119860
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
