<?php
namespace belkoff\parser;
/**
 * @author Student <notrealemail@gmail.com>
 */
class Parser implements ParserInterface
{
    /**
     * @param string $url
     * @param string $tag
     * @return array rrrrrr3333
     */
    public function process(string $tag, string $url): array
    {
        $htmlPage = file_get_contents($url);
        if ($htmlPage === false) {
            return ['Invalid URL'];
        }
        
        // New Regular expression 
        preg_match_all('/<' . $tag . '.*?>(.*?)<\/' . $tag . '>/s', $htmlPage, $strings);
        if (empty($strings[1])) {
            return ['There are no such tags on the page'];
        }
        return $strings[1];
    }
    
    public function test()
    {
        // feature2222
    }
}