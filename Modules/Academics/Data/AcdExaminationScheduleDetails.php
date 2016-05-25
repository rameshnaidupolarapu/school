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
class Modules_Academics_Data_AcdExaminationScheduleDetails
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("acd_examination_schedule_details");
            $registerController->setNodeNameData("acd_examination_schedule_details");
            $registerController->setDisplayValue("Examination Schedule Details");
            $registerController->setIsModule("2");
            $registerController->setRootModuleId("academics");
            $registerController->setModuleId("academics");
            $registerController->setModuleDisplayId("academics");
            $registerController->setSortValue("2");
            $registerController->setIcon("");
            $registerController->setMenu("2");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("acd_examination_schedule_details");           
            $registerController->setTablename("acd_examination_schedule_details");
            $registerController->setAutokey("id");
            $registerController->setPrimarykey("id");
            $registerController->setDescriptorkey("cur_class_subject_id");
            $registerController->setMandotatoryAdd("acd_examination_schedule_id|cur_class_subject_id|subject_grade_id|max_marks|cutoff_marks|min_marks|active_status");
            $registerController->setMandotatoryEdit("acd_examination_schedule_id|cur_class_subject_id|subject_grade_id|max_marks|cutoff_marks|min_marks|active_status");
            $registerController->setUniquefields("");
            $registerController->setHideAdd("cur_academic_subject_id");
            $registerController->setHideEdit("cur_academic_subject_id");
            $registerController->setHideView("cur_academic_subject_id");
            $registerController->setHideAdmin("cur_academic_subject_id");
            $registerController->setReadonlyAdd("");
            $registerController->setReadonlyEdit("acd_examination_schedule_id|cur_class_subject_id|subject_grade_id|active_status");
            $registerController->setBoolattributes("is_optional|active_status");
            $registerController->setFile("");
            $registerController->setFck("");
            $registerController->setCheckbox("");
            $registerController->setSelectbox("acd_examination_schedule_id|cur_class_subject_id|subject_grade_id");
            $registerController->setMultivalues("");
            $registerController->setEditlist("");
            $registerController->setNumberattribute("");
            $registerController->setSearch("");
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
            $relationController->setCoreNodeSettingsId("acd_examination_schedule_details");
            $relationController->setCoreNodeColname("acd_examination_schedule_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("acd_examination_schedule");
            $relationController->setSortValue("1");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_examination_schedule_details");
            $relationController->setCoreNodeColname("cur_class_subject_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_class_subject");
            $relationController->setDependeeFields("acd_examination_schedule_id");
            $relationController->setSortValue("2");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("acd_examination_schedule_details");
            $relationController->setCoreNodeColname("subject_grade_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("subject_grade");
            $relationController->setSortValue("3");
            $relationController->dataSave();
            
            
        }
        catch (Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdataexception.log");
        }
    }
}