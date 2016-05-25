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
class Modules_Financemanagement_Setup_TransactionLogsDetails
{
    //put your code here
    function execute()
    {
        $setup=new Core_DataBase_Setup();   
        $setup->setTable("transaction_logs_details");
        if(!$setup->tableExists($setup->getTable()))
        {
            $setup->setDisplayValue("Transaction Logs Details");
            $setup->addColumnName(array(
                "name"=>"id",
                "displayValue"=>"Transaction Logs Id",
                "prmiary"=>1,
                "default"=>NULL,
                "type"=>"int",
                "size"=>"15",
                "auto_increment"=>1,           
            ));
            $setup->addColumnName(array(
                "name"=>"transaction_logs_id",
                "displayValue"=>"Transaction Logs Id",            
                "default"=>NULL,                
                "type"=>"int",
                "size"=>"11"          
            ));
            $setup->addColumnName(array(
                "name"=>"fee_list_feetype_id",
                "displayValue"=>"Fee List Fee Type ID",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"100"          
            ));
            $setup->addColumnName(array(
                "name"=>"fee_list_frequency_id",
                "displayValue"=>"Fee List Frequency Id",            
                "default"=>NULL,                
                "type"=>"varchar",
                "size"=>"100"          
            ));
            $setup->addColumnName(array(
                "name"=>"amount",
                "displayValue"=>"Amount",            
                "default"=>NULL,
                "type"=>"decimal",
                "size"=>"17,2"
            ));
            $setup->addColumnName(array(
                "name"=>"reference_id",
                "displayValue"=>"Reference Id",            
                "default"=>NULL,
                "type"=>"int",
                "size"=>"11"
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