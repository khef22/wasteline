<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of api_test
 *
 * @author johnenrick
 */
class api_test extends API_Controller{
    //put your code here
    function index(){
        $this->APICONTROLLERID = 8;
        $this->accessNumberID = 8;
        echo "Asd";
        $this->checkACL();
    }
    public function testexplode(){
        $st = "table.tae";
        print_r(explode("table", $st));
    }
}
