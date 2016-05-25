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
class Modules_Studentmanagement_Data_StudentAdmission
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("student_admission");
            $registerController->setNodeNameData("student_admission");
            $registerController->setDisplayValue("Student Admission");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("studentmanagement");
            $registerController->setModuleId("studentmanagement");
            $registerController->setModuleDisplayId("studentmanagement");
            $registerController->setSortValue("1");
            $registerController->setIcon("");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("student_admission");           
            $registerController->setTablename("student_admission");
            $registerController->setAutokey("id");
            $registerController->setPrimarykey("id");
            $registerController->setDescriptorkey("admission_no");
            $registerController->setMandotatoryAdd("cur_list_academicyear_id|list_branch_id|student_quota_id|cur_branch_orientation_id|cur_branch_class_id|cur_branch_class_section_id|student_status_id|first_name|last_name|core_country_id|core_list_state_id|core_list_city_id");
            $registerController->setMandotatoryEdit("cur_list_academicyear_id|list_branch_id|cur_branch_orientation_id|cur_branch_class_id|cur_branch_class_section_id|student_status_id|admission_date|first_name|last_name|image|father_name|email_id|core_country_id|core_list_state_id|core_list_city_id|present_address");
            $registerController->setUniquefields("admission_no");
            $registerController->setHideAdd("admission_no|cur_list_orientation_id|cur_list_class_id|name");
            $registerController->setHideEdit("cur_list_orientation_id|cur_list_class_id|name");
            $registerController->setHideView("cur_list_orientation_id|cur_list_class_id|name|password");
            $registerController->setHideAdmin("cur_list_orientation_id|cur_list_class_id|name|dob|image|father_name|mother_name|primary_phno|email_id|password|present_address");
            $registerController->setReadonlyAdd("student_status_id");
            $registerController->setReadonlyEdit("admission_no|cur_list_academicyear_id|list_branch_id|student_quota_id|cur_branch_orientation_id|cur_branch_class_id|cur_branch_class_section_id|student_status_id|admission_date");
            $registerController->setBoolattributes("");
            $registerController->setFile("image");
            $registerController->setFck("");
            $registerController->setCheckbox("");
            $registerController->setSelectbox("cur_list_academicyear_id|list_branch_id|cur_list_orientation_id|cur_branch_orientation_id|cur_list_class_id|cur_branch_class_id|cur_branch_class_section_id|student_status_id");
            $registerController->setMultivalues("");
            $registerController->setEditlist("");
            $registerController->setNumberattribute("");
            $registerController->setSearch("admission_no|roll_no|cur_list_academicyear_id|list_branch_id|first_name|last_name");
            $registerController->setDependee("");
            $registerController->setDefaultvalues("");
            $registerController->setExactsearch("");
            $registerController->setTotal("");
            $registerController->setColorattributes("");
            $registerController->setCoreNodeActionsId("add|admin|delete|edit|view");  
            $registerController->setActionrestriction("");  
            $registerController->setDefaultAction("admin"); 
            $registerController->setDefaultCollection('1');
            $registerController->setIsArchive("");  
            $registerController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_admission");
            $relationController->setCoreNodeColname("cur_list_academicyear_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_list_academicyear");
            $relationController->setSortValue("1");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_admission");
            $relationController->setCoreNodeColname("list_branch_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("list_branch");
            $relationController->setSortValue("2");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_admission");
            $relationController->setCoreNodeColname("student_quota_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("student_quota");
            $relationController->setSortValue("3");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_admission");
            $relationController->setCoreNodeColname("cur_branch_orientation_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_branch_orientation");
            $relationController->setDependeeFields("list_branch_id");
            $relationController->setSortValue("4");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_admission");
            $relationController->setCoreNodeColname("cur_branch_class_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_branch_class");
            $relationController->setDependeeFields("cur_list_academicyear_id|cur_branch_orientation_id");
            $relationController->setSortValue("5");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_admission");
            $relationController->setCoreNodeColname("cur_branch_class_section_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_branch_class_section");
            $relationController->setDependeeFields("cur_branch_class_id");
            $relationController->setSortValue("6");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_admission");
            $relationController->setCoreNodeColname("student_status_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("student_status");
            $relationController->setSortValue("7");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_admission");
            $relationController->setCoreNodeColname("student_admission_id");
            $relationController->setCoreRelationTypeId("OTM");
            $relationController->setCoreNodeParent("student_history");
            $relationController->setSortValue("8");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_admission");
            $relationController->setCoreNodeColname("student_admission_id");
            $relationController->setCoreRelationTypeId("OTM");
            $relationController->setCoreNodeParent("student_feeplan_details");
            $relationController->setSortValue("9");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_admission");
            $relationController->setCoreNodeColname("core_country_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("core_country");
            $relationController->setSortValue("10");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_admission");
            $relationController->setCoreNodeColname("core_list_state_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("core_list_state");
            $relationController->setDependeeFields("core_country_id");
            $relationController->setSortValue("11");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("student_admission");
            $relationController->setCoreNodeColname("core_list_city_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("core_list_city");
            $relationController->setDependeeFields("core_list_state_id");
            $relationController->setSortValue("12");
            $relationController->dataSave();
            
        }
        catch (Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdataexception.log");
        }
    }
}