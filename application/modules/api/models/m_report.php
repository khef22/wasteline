<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_report
 *
 * @author johnenrick
 */
class M_report extends API_Model{
    public function __construct(){
        parent::__construct();
        $this->TABLE = "report";
    }
    public function createReport($associatedID, $reportTypeID, $reporterAccountID, $detail){
        $newData = array(
            "associated_ID" => $associatedID,
            "report_type_ID" => $reportTypeID,
            "reporter_account_ID" => $reporterAccountID,
            "detail" => $detail,
            "datetime" => time(),
            "status" => 1
        );
        return $this->createTableEntry($newData);
    }
    public function retrieveReport($retrieveType = false, $limit = NULL, $offset = 0, $sort = array(), $ID = NULL, $condition = NULL) {
        $joinedTable = array(
            "report_type" => "report_type.ID=report.report_type_ID",
            "map_marker" => "map_marker.associated_ID=report.ID AND map_marker.map_marker_type_ID=3"
        );
        $selectedColumn = array(
            "report.*",
            "report_type.description AS report_type_description",
            "map_marker.ID AS map_marker_ID, map_marker.longitude, map_marker.latitude, map_marker.map_marker_type_ID",
           
        );
        
        return $this->retrieveTableEntry($retrieveType, $limit, $offset, $sort, $ID, $condition, $selectedColumn, $joinedTable);
    }
    public function updateReport($ID = NULL, $condition = array(), $newData = array()) {
        return $this->updateTableEntry($ID, $condition, $newData);
    }
    public function deleteReport($ID = NULL, $condition = array()){
       
        return $this->deleteTableEntry($ID, $condition);
    }
}
