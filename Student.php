<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author ronno
 */
class Student {
    //put your code here
    
    
    // constructor
    function __construct() {
    $this->surname = '';
    $this->first_name = '';
    $this->emails = array();
    $this->grades = array();
    }
    
    // email function
    function add_email($which,$address) {
    $this->emails[$which] = $address;
    }
    
    // add grade function
    function add_grade($grade) {
    $this->grades[] = $grade;
    }
    
    // average grade function
    function average() {
    $total = 0;
    foreach ($this->grades as $value)
        $total += $value;
    return $total / count($this->grades);
    }
    
    // print student info
    function toString() {
    $result = $this->first_name . ' ' . $this->surname;
    $result .= ' ('.$this->average().")\n";
    foreach($this->emails as $which=>$what)
        $result .= $which . ': '. $what. "\n";
    $result .= "\n";
    return '<pre>'.$result.'</pre>';
    }
    
}
