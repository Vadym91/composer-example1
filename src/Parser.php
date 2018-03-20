<?php

//require_once 'ParserInterface.php';
namespace  parser\tagparser;
/**
 * Description of Parser
 *
 * @author Vadim
 */
class Parser implements ParserInterface {
    
    public function procees(string $url, string $tag) 
    {
        
        $htmlpage = file_get_contents($url);
        
        if ($htmlpage ===false) {
            return ['Invalid Url'];
        }
        
        preg_match_all('/<' . $tag . '.*?>(.*?)<\/' . $tag . '>/s', $htmlpage, $strings);
        
        if(empty($strings[1])) {
            return ['There are no such tags'];
        }
        return $strings[1];
    }
    
}
