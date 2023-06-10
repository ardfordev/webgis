<?php
    $db = \Config\Database::connect();
    
    function userLogin() {
        $db = \Config\Database::connect();
        return $db->table('tb_admin')->where('id', session('id'))->get()->getRow();
    }
?>