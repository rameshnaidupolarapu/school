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
class Modules_Curriculum_Setup_CurListAcademicyear
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("cur_list_academicyear");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("List Academicyear");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Academic Year Id",
                "default"=>NULL,
                "type"=>"bigint",
                "size"=>"11",
                "key"=>"unique",
                "auto_increment"=>1, 
            ));
            $setup->addColumnName(array(
                "name"=>"start_date",
                "displayValue"=>"Start Date",            
                "default"=>NULL,                
                "type"=>"Date"        
            ));
            $setup->addColumnName(array(
                "name"=>"end_date",
                "displayValue"=>"End Date",            
                "default"=>NULL,                
                "type"=>"Date"        
            ));
            $setup->addColumnName(array(
                "name"=>"short_code",
                "displayValue"=>"Short Code",            
                "default"=>NULL,
                "prmiary"=>1,            
                "type"=>"varchar",
                "size"=>"100"          
            ));
            $setup->addColumnName(array(
                "name"=>"academicyear",
                "displayValue"=>"Academic Year",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"255"          
            ));
            $setup->addColumnName(array(
                "name"=>"sort_value",
                "displayValue"=>"Sort Value",            
                "default"=>NULL,  
                "type"=>"int",
                "size"=>"11"         
            ));
            $setup->addColumnName(array(
                "name"=>"is_current",
                "displayValue"=>"Is Current",            
                "default"=>NULL,                
                "type"=>"tinyint",
                "size"=>"1"          
            ));
            $setup->addColumnName(array(
                "name"=>"active_status",
                "displayValue"=>"Active Status",            
                "default"=>NULL,  
                "type"=>"tinyint",
                "size"=>"1"         
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
                "type"=>"bigint",
                "size"=>"15"
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