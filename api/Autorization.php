<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 27.11.2017
 * Time: 10:16
 */

class Autorization
{
    function autorization_user($user_name="Admin",$user_password="31253125Aa",$dbHost='localhost',$dbUser='root',$dbUserPassword='',$dbName='Algoritm'){

        $mysqli=new mysqli($dbHost,$dbUser,$dbUserPassword,$dbName);

        if($mysqli->connect_errno){
/*            print "Ошибка подключения базы данных: "
                .$mysqli->connect_error;*/
        }else{
/*            print "Подключение успешно";*/
        }

        $sql="SELECT userName,userPassword
              FROM User WHERE  userName='".$user_name."'
              AND userPassword='".$user_password."'";



        $result=$mysqli->query($sql);

        if($result->num_rows==1){
/*            print "Авторизация успешна";*/
             return true;
        }else{
            print "Авторизация неуспешна проверте данные";
            return false;
        }}

}