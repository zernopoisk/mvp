<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SizeDetectController extends Controller
{
    /**
     * Incoterms
     */
    public function incoterms()
    {
        // Researched array item
        $arr = config('dict.incoterms');
        
        // Attributes max size display
        echo sprintf("<strong><u>%s</u></strong><br>", __FUNCTION__);
        echo sprintf("%s: <b>%d</b><br>", "group", $this->_maxSizeDetect($arr, "group"));
        echo sprintf("%s: <b>%d</b><br>", "alias", $this->_maxSizeDetect($arr, "alias"));
        echo sprintf("%s: <b>%d</b><br>", "abbr", $this->_maxSizeDetect($arr, "abbr"));
        echo sprintf("%s: <b>%d</b><br>", "term_en", $this->_maxSizeDetect($arr, "term_en"));
        echo sprintf("%s: <b>%d</b><br>", "specification", $this->_maxSizeDetect($arr, "specification"));
        echo sprintf("%s: <b>%d</b><br>", "type_of_transport", $this->_maxSizeDetect($arr, "type_of_transport"));
    }

    /**
     * Incoterms Groups
     */
    public function incotermsGroups()
    {
        // Researched array item
        $arr = config('dict.incoterms_groups');
        
        // Attributes max size display
        echo sprintf("<strong><u>%s</u></strong><br>", __FUNCTION__);
        echo sprintf("%s: <b>%d</b><br>", "alias", $this->_maxSizeDetect($arr, "alias"));
        echo sprintf("%s: <b>%d</b><br>", "name", $this->_maxSizeDetect($arr, "name"));
        echo sprintf("%s: <b>%d</b><br>", "term_en", $this->_maxSizeDetect($arr, "term_en"));
        echo sprintf("%s: <b>%d</b><br>", "specification", $this->_maxSizeDetect($arr, "specification"));
    }
    
    /**
     * Detects max size of array attributes.
     * It's needed to create fields with appropriate size by the Schema builder facade.
     */
    private function _maxSizeDetect(array $a, $attrName)
    {
        $length = [];

        if (count ($a) > 0) {
            foreach ($a as $item) {
                $length[] = mb_strlen($item[$attrName]);
            }
        }

        return max($length);
    }
}
