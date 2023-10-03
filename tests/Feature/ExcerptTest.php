<?php

test('it shows ten words', function (){
        $excerpter = new \Mellaoui\Excerpt\TextExcerpter();
        $text = ' The function removes HTML tags, trims white spaces, and then checks if the length of the text is greater than the specified length. If it is, it finds the last space within the specified length, trims the text to that position, and appends ellipses. If the text is shorter than the specified length, the original text is returned.';
        $excerpt =  $excerpter->excerpt($text , 10);
        expect($excerpt)->toEqual('The function removes HTML tags, trims white spaces, and then...');
});


test('it shows ten words from Markdown', function (){
    $excerpter = new \Mellaoui\Excerpt\MarkdownExcerpter();
    $text = ' # The **function removes HTML tags**, trims white spaces, and **then checks if the** length of the text is greater than the specified length. If it is, it finds the last space within the specified length, trims the text to that position, and appends ellipses. If the text is shorter than the specified length, the original text is returned.';
    $excerpt =  $excerpter->excerpt($text , 10);
    expect($excerpt)->toEqual('The function removes HTML tags, trims white spaces, and then...');
});
