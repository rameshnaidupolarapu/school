<?php/* * To change this license header, choose License Headers in Project Properties. * To change this template file, choose Tools | Templates * and open the template in the editor. *//** * Description of CoreActionType * * @author ramesh */namespace Modules\Transportmanagement\Data;class StudentRouteDetails{    //put your code here    public function execute()    {        try        {            $registerController=\CoreClass::getController("core_registernode", "core_developmentsettings");            $registerController->setNodeFileName("tr_student_route_details");            $registerController->setNodeNameData("tr_student_route_details");            $registerController->setDisplayValue("Student Route Details");            $registerController->setIsModule("0");            $registerController->setRootModuleId("transportmanagement");            $registerController->setModuleId("transportmanagement");            $registerController->setModuleDisplayId("transportmanagement");            $registerController->setSortValue("3");            $registerController->setIcon("");            $registerController->setMenu("1");            $registerController->setIsNotification("0");            $registerController->dataSave();            $registerController=\CoreClass::getController("CoreNodeSettings", "core_developmentsettings");            $registerController->setRegisternodeId("tr_student_route_details");            $registerController->setTablename("tr_student_route_details");            $registerController->setAutokey("id");            $registerController->setPrimarykey("id");            $registerController->setDescriptorkey("id");            $registerController->setMandotatoryAdd("");            $registerController->setMandotatoryEdit("");            $registerController->setUniquefields("");            $registerController->setHideAdd("");            $registerController->setHideEdit("");            $registerController->setHideView("");            $registerController->setHideAdmin("");            $registerController->setReadonlyAdd("");            $registerController->setReadonlyEdit("");            $registerController->setBoolattributes("");            $registerController->setFile("");            $registerController->setFck("");            $registerController->setCheckbox("");            $registerController->setSelectbox("");            $registerController->setMultivalues("");            $registerController->setEditlist("");            $registerController->setNumberattribute("");            $registerController->setSearch("comment_source|description");            $registerController->setDependee("");            $registerController->setDefaultvalues("");            $registerController->setExactsearch("");            $registerController->setTotal("");            $registerController->setColorattributes("");            $registerController->setCoreNodeActionsId("add|admin|delete|edit");            $registerController->setActionrestriction("");            $registerController->setDefaultAction("admin");            $registerController->setDefaultCollection('1');            $registerController->setIsArchive("");            $registerController->dataSave();            $relationController=  \CoreClass::getController("core_node_relations","core_developmentsettings");            $relationController->setCoreNodeSettingsId("tr_student_route_details");            $relationController->setCoreNodeColname("student_admission_id");            $relationController->setCoreRelationTypeId("MTO");            $relationController->setCoreNodeParent("student_admission");            $relationController->setSortValue("1");            $relationController->dataSave();            $relationController=  \CoreClass::getController("core_node_relations","core_developmentsettings");            $relationController->setCoreNodeSettingsId("tr_student_route_details");            $relationController->setCoreNodeColname("cur_list_academicyear_id");            $relationController->setCoreRelationTypeId("MTO");            $relationController->setCoreNodeParent("cur_list_academicyear");            $relationController->setSortValue("2");            $relationController->dataSave();            $relationController=  \CoreClass::getController("core_node_relations","core_developmentsettings");            $relationController->setCoreNodeSettingsId("tr_student_route_details");            $relationController->setCoreNodeColname("cur_branch_class_id");            $relationController->setCoreRelationTypeId("MTO");            $relationController->setCoreNodeParent("cur_branch_class");            $relationController->setSortValue("3");            $relationController->dataSave();            $relationController=  \CoreClass::getController("core_node_relations","core_developmentsettings");            $relationController->setCoreNodeSettingsId("tr_student_route_details");            $relationController->setCoreNodeColname("tr_route_assign_id");            $relationController->setCoreRelationTypeId("MTO");            $relationController->setCoreNodeParent("tr_route_assign");            $relationController->setSortValue("4");            $relationController->dataSave();        }        catch (Exception $ex)        {            \Core::Log($ex->getMessage(),"installdataexception.log");        }    }}