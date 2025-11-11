<?php
class Index_Model extends Model{
    function __construct(){
        parent::__construct();
    }

    function check_login($username, $password){
        $query = $this->db->query("SELECT COUNT(*) AS Total FROM tbl_account WHERE username = '$username'
                                    AND password = '$password' AND status = 1");
        $row = $query->fetchAll();
        return $row[0]['Total'];
    }

    function get_data($username, $password){
        $query = $this->db->query("SELECT id, code, username, status, last_login, info_login FROM tbl_account WHERE username = '$username' 
                                    AND password = '$password' AND status = 1");
        return $query->fetchAll();
    }
////////////////////////////////////////////////////////////////////////////////////////////////
    function updateObj($username, $password, $data){
        $query = $this->update("tbl_account", $data, "username = '$username' AND password = '$password'");
        return $query;
    }
}
?>