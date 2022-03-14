<?php

class Auth extends CI_Model{

    function login($username,$password){
        $qcheckuser = "SELECT * FROM users WHERE username='$username' LIMIT 1";
        $check = $this->db->query($qcheckuser);
        $storedpassword = $this->db->query($qcheckuser)->row()->password;
        if($check->num_rows() > 0){
            $checkpassword = password_verify($password,$storedpassword);
            if($checkpassword){
                successresponse("Login berhasil");
            }
            else{
                failedresponse("Password Salah");
            }
        }
        else{
            failedresponse("Username Tidak Ditemukan");
        }
    }

}