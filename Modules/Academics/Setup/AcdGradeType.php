<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoreBackupType
 *
 * @author ramesh
 */
class Modules_Academics_Setup_AcdGradeType
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("acd_grade_type");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Acd Grade Type");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"User Id",
                "prmiary"=>1,
                "default"=>NULL,
                "type"=>"int",
                "size"=>"11",
                "auto_increment"=>1,           
            ));
            $setup->addColumnName(array(
                "name"=>"name",
                "displayValue"=>"Student Name",            
                "default"=>NULL,  
                "type"=>"varchar",
                "size"=>"100"         
            ));
            $setup->addColumnName(array(
                "name"=>"short_code",
                "displayValue"=>"Short Code",            
                "default"=>"",                
                "type"=>"varchar",
                "size"=>"25"          
            ));
            $setup->addColumnName(array(
                "name"=>"createdby",
                "displayValue"=>"Created Id",            
                "default"=>NULL,
                "type"=>"int",
                "size"=>"11"
            ));
            $setup->addColumnName(array(
                "name"=>"createdat",
                "displayValue"=>"Created Datetime",            
                "default"=>NULL,
                "type"=>"datetime"
            ));
            $setup->addColumnName(array(
                "name"=>"updatedby",
                "displayValue"=>"Updated Id",            
                "default"=>NULL,
                "type"=>"int",
                "size"=>"11"
            ));
            $setup->addColumnName(array(
                "name"=>"updatedat",
                "displayValue"=>"Updated Datetime",            
                "default"=>NULL,
                "type"=>"datetime"
            ));
             $setup->create();
        }
    }
}