<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SizeDetectController extends Controller
{
    /**
     * Payment Forms.
     */
    public function paymentForms()
    {
        $this->_displayAttrMaxValues(
            $this->_maxSizesDetect(config('dict.payment.forms'), ['alias', 'name', 'translit']), 
            'Payment Forms'
        );
    }

    /**
     * Incoterms Groups.
     */
    public function incotermsGroups()
    {
        $this->_displayAttrMaxValues(
            $this->_maxSizesDetect(config('dict.incoterms_groups'), ['alias','name','term_en','specification']), 
            'Incoterms Groups'
        );
    }

    /**
     * Incoterms.
     */
    public function incoterms()
    {
        $this->_displayAttrMaxValues(
            $this->_maxSizesDetect(config('dict.incoterms'), ['group','alias','abbr','term_en','specification','type_of_transport']),
            'Incoterms'
        );
    }

    /**
     * Display attributes max values for the specified array.
     */
    private function _displayAttrMaxValues(array $a, $entityName)
    {
        if (count ($a) > 0) {
            echo sprintf("<strong><u>%s</u></strong><br>", $entityName);
            foreach ($a as $key => $val) {
                echo sprintf("%s: <b>%d</b><br>", $key, $val);
            }
        } else {
            echo "Sorry: empty result array...";
        }
    }
    
    /**
     * Detects max size of array attributes for the specified attributes.
     * It's needed to create fields in the database with appropriate size.
     */
    private function _maxSizesDetect(array $a, array $attributes)
    {
        $length = [];

        if (count ($a) > 0) {
            // Prepare elements for analyze
            foreach ($a as $item) {
                foreach ($item as $key => $value) {
                    if (in_array($key, $attributes, true)) {
                        $length[$key][] = mb_strlen($value);
                    }
                }
            }
        }

        // Search max value for each element
        foreach ($length as $key => $values) {
            $length[$key] = max($values);
        }

        return $length;
    }

}
