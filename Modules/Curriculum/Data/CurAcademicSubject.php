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
class Modules_Curriculum_Data_CurAcademicSubject
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("cur_academic_subject");
            $registerController->setNodeNameData("cur_academic_subject");
            $registerController->setDisplayValue("Academic Subject");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("curriculum");
            $registerController->setModuleId("curriculum");
            $registerController->setModuleDisplayId("core_settings");
            $registerController->setSortValue("2");
            $registerController->setIcon("");
            $registerController->setMenu("1");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("cur_academic_subject");           
            $registerController->setTablename("cur_academic_subject");
            $registerController->setAutokey("id");
            $registerController->setPrimarykey("id");
            $registerController->setDescriptorkey("name ");
            $registerController->setMandotatoryAdd("cur_subject_type_id|name|code");
            $registerController->setMandotatoryEdit("cur_subject_type_id|name|code");
            $registerController->setUniquefields("");
            $registerController->setHideAdd("");
            $registerController->setHideEdit("");
            $registerController->setHideView("");
            $registerController->setHideAdmin("");
            $registerController->setReadonlyAdd("");
            $registerController->setReadonlyEdit("");
            $registerController->setBoolattributes("is_elective|is_optional|is_examination|active_status");
            $registerController->setFile("");
            $registerController->setFck("");
            $registerController->setCheckbox("");
            $registerController->setSelectbox("");
            $registerController->setMultivalues("");
            $registerController->setEditlist("");
            $registerController->setNumberattribute("");
            $registerController->setSearch("cur_subject_type_id|name|code|active_status");
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
            $relationController->setCoreNodeSettingsId("cur_academic_subject");
            $relationController->setCoreNodeColname("cur_subject_type_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_subject_type");
            $relationController->setSortValue("1");
            $relationController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("cur_academic_subject");
            $relationController->setCoreNodeColname("subject_group_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cur_academic_subject");
            $relationController->setSortValue("2");
            $relationController->dataSave();
            
        }
        catch (Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdataexception.log");
        }
    }
}