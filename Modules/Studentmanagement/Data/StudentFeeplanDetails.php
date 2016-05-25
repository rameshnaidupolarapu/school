<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoreActionType
 *
 * @author ramesh
 */
class Modules_Studentmanagement_Data_StudentFeeplanDetails
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("student_feeplan_details");
            $registerController->setNodeNameData("student_feeplan_details");
            $registerController->setDisplayValue("Student Feeplan Details");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("studentmanagement");
            $registerController->setModuleId("studentmanagement");
            $registerController->setModuleDisplayId("studentmanagement");
            $registerController->setSortValue("3");
            $registerController->setIcon("");
            $registerController->setMenu("0");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("student_feeplan_details");           
            $registerController->setTablename("student_feeplan_details");
            $registerController->setAutokey("id");
            $registerController->setPrimarykey("id");
            $registerController->setDescriptorkey("adminssion_no");
            $registerController->setMandotatoryAdd("");
            $registerController->setMandotatoryEdit("");
            $registerController->setUniquefields("");
            $registerController->setHideAdd("");
            $registerController->setHideEdit("");
            $registerController->setHideView("adminssion_no");
            $registerController->setHideAdmin("adminssion_no");
            $registerController->setReadonlyAdd("");
            $registerController->setReadonlyEdit("");
            $registerController->setBoolattributes("active_status|archive");
            $registerController->setFile("");
            $registerController->setFck("");
            $registerController->setCheckbox("");
            $registerController->setSelectbox("student_admission_id|fee_list_feegroup_id|student_quota_id|cur_list_academicyear_id|list_branch_id|cur_branch_orientation_id|cur_branch_class_id|fee_list_feeplan_id|fee_list_feetype_id|fee_list_frequency_id");
            $registerController->setMultivalues("");
            $registerController->setEditlist("");
            $registerController->setNumberattribute("");
            $registerController->setSearch("fee_list_feegroup_id|fee_list_feetype_id|fee_list_frequency_id");
            $registerController->setDependee("");
            $registerController->setDefaultvalues("");
            $registerController->setExactsearch("");
            $registerController->setTotal("");
            $registerController->setColorattributes("");
            $registerController->setCoreNodeActionsId("admin");  
            $registerController->setActionrestriction("");  
            $registerController->setDefaultAction("admin"); 
            $registerController->setDefaultCollection('1');
            $registerController->setIsArchive("");  
            $registerController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_feeplan_details");
            $relationController->setCoreNodeColname("student_admission_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("student_admission");
            $relationController->setSortValue("1");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_feeplan_details");
            $relationController->setCoreNodeColname("fee_list_feegroup_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("fee_list_feegroup");
            $relationController->setSortValue("2");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_feeplan_details");
            $relationController->setCoreNodeColname("student_quota_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("student_quota");
            $relationController->setSortValue("3");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_feeplan_details");
            $relationController->setCoreNodeColname("cur_list_academicyear_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_list_academicyear");
            $relationController->setSortValue("4");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_feeplan_details");
            $relationController->setCoreNodeColname("list_branch_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("list_branch");
            $relationController->setSortValue("5");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_feeplan_details");
            $relationController->setCoreNodeColname("cur_branch_orientation_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_branch_orientation");
            $relationController->setSortValue("6");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_feeplan_details");
            $relationController->setCoreNodeColname("cur_branch_class_id");
            $relationController->setCoreRelationTypeId("OTM");
            $relationController->setCoreNodeParent("cur_branch_class");
            $relationController->setSortValue("7");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_feeplan_details");
            $relationController->setCoreNodeColname("fee_list_feeplan_id");
            $relationController->setCoreRelationTypeId("OTM");
            $relationController->setCoreNodeParent("fee_list_feeplan");
            $relationController->setSortValue("8");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_feeplan_details");
            $relationController->setCoreNodeColname("fee_list_feetype_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("fee_list_feetype");
            $relationController->setSortValue("9");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_feeplan_details");
            $relationController->setCoreNodeColname("fee_list_frequency_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("fee_list_frequency");
            $relationController->setSortValue("10");
            $relationController->dataSave();
        }
        catch (Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdataexception.log");
        }
    }
}