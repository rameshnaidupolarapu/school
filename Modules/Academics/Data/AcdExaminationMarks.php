<?php/* * To change this license header, choose License Headers in Project Properties. * To change this template file, choose Tools | Templates * and open the template in the editor. *//** * Description of CoreActionType * * @author ramesh */namespace Modules\Academics\Data;class AcdExaminationMarks{    //put your code here    public function execute()    {        try        {                        $registerController=\CoreClass::getController("core_registernode", "core_developmentsettings");            $registerController->setNodeFileName("acd_examination_marks");            $registerController->setNodeNameData("acd_examination_marks");            $registerController->setDisplayValue("Examination Marks");            $registerController->setIsModule("2");            $registerController->setRootModuleId("academics");            $registerController->setModuleId("academics");            $registerController->setModuleDisplayId("academics");            $registerController->setSortValue("3");            $registerController->setIcon("");            $registerController->setMenu("1");            $registerController->setIsNotification("0");            $registerController->dataSave();                        $registerController=\CoreClass::getController("CoreNodeSettings", "core_developmentsettings");            $registerController->setRegisternodeId("acd_examination_marks");                       $registerController->setTablename("acd_examination_marks");            $registerController->setAutokey("id");            $registerController->setPrimarykey("id");            $registerController->setDescriptorkey("acd_examination_schedule_id");            $registerController->setMandotatoryAdd("cur_list_academicyear_id|list_branch_id|cur_branch_orientation_id|cur_branch_class_id|cur_branch_class_section_id|acd_modeofexam_id|acd_examination_schedule_id");            $registerController->setMandotatoryEdit("cur_list_academicyear_id|list_branch_id|cur_branch_orientation_id|cur_branch_class_id|cur_branch_class_section_id|acd_modeofexam_id|acd_examination_schedule_id");            $registerController->setUniquefields("");            $registerController->setHideAdd("acd_exam_name_id|is_final|is_grade");            $registerController->setHideEdit("is_final|is_grade");            $registerController->setHideView("is_grade");            $registerController->setHideAdmin("acd_examination_schedule_id|is_grade");            $registerController->setReadonlyAdd("is_final|is_grade");            $registerController->setReadonlyEdit("cur_list_academicyear_id|list_branch_id|cur_branch_orientation_id|cur_branch_class_id|cur_branch_class_section_id|acd_modeofexam_id|acd_examination_schedule_id|acd_exam_name_id|is_final|is_grade");            $registerController->setBoolattributes("is_final|is_grade");            $registerController->setFile("");            $registerController->setFck("");            $registerController->setCheckbox("");            $registerController->setSelectbox("");            $registerController->setMultivalues("");            $registerController->setEditlist("");            $registerController->setNumberattribute("");            $registerController->setSearch("cur_list_academicyear_id|list_branch_id|acd_exam_name_id");            $registerController->setDependee("");            $registerController->setDefaultvalues("");            $registerController->setExactsearch("");            $registerController->setTotal("");            $registerController->setColorattributes("");            $registerController->setCoreNodeActionsId("add|admin|delete|edit|final|UNFINAL|view");              $registerController->setActionrestriction("");              $registerController->setDefaultAction("admin");             $registerController->setDefaultCollection('1');            $registerController->setIsArchive("");              $registerController->dataSave();                        $relationController=  \CoreClass::getController("core_node_relations","core_developmentsettings");            $relationController->setCoreNodeSettingsId("acd_examination_marks");            $relationController->setCoreNodeColname("cur_list_academicyear_id");            $relationController->setCoreRelationTypeId("MTO");            $relationController->setCoreNodeParent("cur_list_academicyear");            $relationController->setSortValue("1");            $relationController->dataSave();                        $relationController=  \CoreClass::getController("core_node_relations","core_developmentsettings");            $relationController->setCoreNodeSettingsId("acd_examination_marks");            $relationController->setCoreNodeColname("list_branch_id");            $relationController->setCoreRelationTypeId("MTO");            $relationController->setCoreNodeParent("list_branch");            $relationController->setSortValue("2");            $relationController->dataSave();                        $relationController=  \CoreClass::getController("core_node_relations","core_developmentsettings");            $relationController->setCoreNodeSettingsId("acd_examination_marks");            $relationController->setCoreNodeColname("cur_branch_orientation_id");            $relationController->setCoreRelationTypeId("MTO");            $relationController->setCoreNodeParent("cur_branch_orientation");            $relationController->setDependeeFields("list_branch_id");            $relationController->setSortValue("3");            $relationController->dataSave();                        $relationController=  \CoreClass::getController("core_node_relations","core_developmentsettings");            $relationController->setCoreNodeSettingsId("acd_examination_marks");            $relationController->setCoreNodeColname("cur_branch_class_id");            $relationController->setCoreRelationTypeId("MTO");            $relationController->setCoreNodeParent("cur_branch_class");            $relationController->setDependeeFields("ur_list_academicyear_id|cur_branch_orientation_id");            $relationController->setSortValue("4");            $relationController->dataSave();                        $relationController=  \CoreClass::getController("core_node_relations","core_developmentsettings");            $relationController->setCoreNodeSettingsId("acd_examination_marks");            $relationController->setCoreNodeColname("cur_branch_class_section_id");            $relationController->setCoreRelationTypeId("MTO");            $relationController->setCoreNodeParent("cur_branch_class_section");            $relationController->setDependeeFields("cur_branch_class_id");            $relationController->setSortValue("5");            $relationController->dataSave();                        $relationController=  \CoreClass::getController("core_node_relations","core_developmentsettings");            $relationController->setCoreNodeSettingsId("acd_examination_marks");            $relationController->setCoreNodeColname("acd_examination_schedule_id");            $relationController->setCoreRelationTypeId("MTO");            $relationController->setCoreNodeParent("acd_examination_schedule");            $relationController->setDependeeFields("cur_list_academicyear_id|cur_branch_class_id|acd_modeofexam_id");            $relationController->setSortValue("6");            $relationController->dataSave();                        $relationController=  \CoreClass::getController("core_node_relations","core_developmentsettings");            $relationController->setCoreNodeSettingsId("acd_examination_marks");            $relationController->setCoreNodeColname("acd_modeofexam_id");            $relationController->setCoreRelationTypeId("MTO");            $relationController->setCoreNodeParent("acd_modeofexam");            $relationController->setSortValue("7");            $relationController->dataSave();                        $relationController=  \CoreClass::getController("core_node_relations","core_developmentsettings");            $relationController->setCoreNodeSettingsId("acd_examination_marks");            $relationController->setCoreNodeColname("acd_examination_marks_id");            $relationController->setCoreRelationTypeId("OTM");            $relationController->setCoreNodeParent("acd_studentmarks_details");            $relationController->setSortValue("8");            $relationController->dataSave();                        $relationController=  \CoreClass::getController("core_node_relations","core_developmentsettings");            $relationController->setCoreNodeSettingsId("acd_examination_marks");            $relationController->setCoreNodeColname("acd_exam_name_id");            $relationController->setCoreRelationTypeId("MTO");            $relationController->setCoreNodeParent("acd_exam_name");            $relationController->setSortValue("9");            $relationController->dataSave();                             }        catch (Exception $ex)        {            \Core::Log($ex->getMessage(),"installdataexception.log");        }    }}