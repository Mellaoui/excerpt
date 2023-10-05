<?php

namespace Mellaoui\Excerpt\Contracts;

interface Excerpter
{
    /**
     * Generate an excerpt from the given text.
     */
    public function excerpt($text, $length);
}
