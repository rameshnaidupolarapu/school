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
class Modules_Academics_Data_AcdStudentmarksDetails
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("acd_studentmarks_details");
            $registerController->setNodeNameData("acd_studentmarks_details");
            $registerController->setDisplayValue("Student Marks Details");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("academics");
            $registerController->setModuleId("academics");
            $registerController->setModuleDisplayId("academics");
            $registerController->setSortValue("4");
            $registerController->setIcon("");
            $registerController->setMenu("2");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("acd_studentmarks_details");           
            $registerController->setTablename("acd_studentmarks_details");
            $registerController->setAutokey("id");
            $registerController->setPrimarykey("id");
            $registerController->setDescriptorkey("admission_no");
            $registerController->setMandotatoryAdd("");
            $registerController->setMandotatoryEdit("core_attendance_status_id");
            $registerController->setUniquefields("");
            $registerController->setHideAdd("");
            $registerController->setHideEdit("");
            $registerController->setHideView("cur_branch_orientation_id|cur_branch_class_id|cur_class_subject_id|acd_examination_schedule_id");
            $registerController->setHideAdmin("acd_examination_marks_id|cur_list_academicyear_id|list_branch_id|cur_branch_orientation_id|cur_list_orientation_id|cur_branch_class_id|cur_list_class_id|cur_branch_class_section_id|cur_class_subject_id|remarks|acd_examination_schedule_id");
            $registerController->setReadonlyAdd("");
            $registerController->setReadonlyEdit("acd_examination_marks_id|cur_list_academicyear_id|list_branch_id|cur_branch_orientation_id|cur_list_orientation_id|cur_branch_class_id|cur_list_class_id|cur_branch_class_section_id|admission_no|name|cur_class_subject_id|cur_academic_subject_id|max_marks|cutoff_marks|min_marks|percentage|gradepoints|grade|remarks|acd_exam_name_id");
            $registerController->setBoolattributes("");
            $registerController->setFile("");
            $registerController->setFck("");
            $registerController->setCheckbox("");
            $registerController->setSelectbox("acd_examination_marks_id|cur_list_academicyear_id|list_branch_id|cur_branch_orientation_id|cur_list_orientation_id|cur_branch_class_id|cur_list_class_id|cur_branch_class_section_id|cur_class_subject_id|cur_academic_subject_id|core_attendance_status_id|acd_examination_schedule_id|acd_exam_name_id");
            $registerController->setMultivalues("obtained_marks");
            $registerController->setEditlist("obtained_marks|core_attendance_status_id");
            $registerController->setNumberattribute("");
            $registerController->setSearch("admission_no|name|cur_academic_subject_id|core_attendance_status_id");
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
            $relationController->setCoreNodeSettingsId("acd_studentmarks_details");
            $relationController->setCoreNodeColname("acd_examination_marks_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("acd_examination_marks");
            $relationController->setSortValue("1");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_studentmarks_details");
            $relationController->setCoreNodeColname("cur_list_academicyear_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_list_academicyear");
            $relationController->setSortValue("2");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_studentmarks_details");
            $relationController->setCoreNodeColname("list_branch_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("list_branch");
            $relationController->setSortValue("3");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_studentmarks_details");
            $relationController->setCoreNodeColname("cur_branch_orientation_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_branch_orientation");
            $relationController->setSortValue("4");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_studentmarks_details");
            $relationController->setCoreNodeColname("cur_branch_class_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_branch_class");
            $relationController->setSortValue("5");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_studentmarks_details");
            $relationController->setCoreNodeColname("cur_branch_class_section_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_branch_class_section");
            $relationController->setSortValue("6");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_studentmarks_details");
            $relationController->setCoreNodeColname("cur_class_subject_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_class_subject");
            $relationController->setSortValue("7");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_studentmarks_details");
            $relationController->setCoreNodeColname("core_attendance_status_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("core_attendance_status");
            $relationController->setSortValue("8");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_studentmarks_details");
            $relationController->setCoreNodeColname("acd_exam_name_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("acd_exam_name");
            $relationController->setSortValue("9");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_studentmarks_details");
            $relationController->setCoreNodeColname("cur_academic_subject_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_academic_subject");
            $relationController->setSortValue("10");
            $relationController->dataSave();
            
            
        }
        catch (Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdataexception.log");
        }
    }
}