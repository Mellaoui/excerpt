<?php
use Mellaoui\Excerpt\Contracts\Excerpter;

test('it shows ten words', function (){
        $excerpter = Excerpter::class;
        $excerpt =  $excerpter->excerpt(' The function removes HTML tags, trims white spaces, and then checks if the length of the text is greater than the specified length. If it is, it finds the last space within the specified length, trims the text to that position, and appends ellipses. If the text is shorter than the specified length, the original text is returned.' , 10);
        $excerpt($excerpt)->toMatch('The function removes HTML tags, trims white spaces, and then...');
});
