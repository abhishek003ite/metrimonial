<?php
/**
 * Created by PhpStorm.
 * User: abhisheksrivastava
 * Date: 05/02/17
 * Time: 12:17 PM
 */

class AuthModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    public function getData($tableName, $getRow = false)
    {
        $sql = "SELECT * FROM ".$tableName." WHERE 1";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            $result = $query->result_array();

            if(!$getRow){
                return $result;
            }else{
                return $result[0];
            }
        }else{
            return false;
        }
    }
}