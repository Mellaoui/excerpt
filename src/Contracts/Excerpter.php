<?php

namespace Mellaoui\Excerpt\Contracts;

interface Excerpter
{
    /**
     * this function gives the excerpt
     */
    public function excerpt( $text, $length);

}