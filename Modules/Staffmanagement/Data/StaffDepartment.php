<?php/* * To change this license header, choose License Headers in Project Properties. * To change this template file, choose Tools | Templates * and open the template in the editor. *//** * Description of CoreActionType * * @author ramesh */namespace Modules\Staffmanagement\Data;class StaffDepartment{    //put your code here    public function execute()    {        try        {            $registerController=\CoreClass::getController("core_registernode", "core_developmentsettings");            $registerController->setNodeFileName("staff_department");            $registerController->setNodeNameData("staff_department");            $registerController->setDisplayValue("Staff Department");            $registerController->setIsModule("0");            $registerController->setRootModuleId("staffmanagement");            $registerController->setModuleId("staffmanagement");            $registerController->setModuleDisplayId("staffmanagement");            $registerController->setSortValue("2");            $registerController->setIcon("");            $registerController->setMenu("1");            $registerController->setIsNotification("0");            $registerController->dataSave();            $registerController=\CoreClass::getController("CoreNodeSettings", "core_developmentsettings");            $registerController->setRegisternodeId("staff_department");            $registerController->setTablename("staff_department");            $registerController->setAutokey("id");            $registerController->setPrimarykey("code");            $registerController->setDescriptorkey("name");            $registerController->setMandotatoryAdd("name|code");            $registerController->setMandotatoryEdit("name|code");            $registerController->setUniquefields("");            $registerController->setHideAdd("");            $registerController->setHideEdit("");            $registerController->setHideView("");            $registerController->setHideAdmin("");            $registerController->setReadonlyAdd("");            $registerController->setReadonlyEdit("");            $registerController->setBoolattributes("");            $registerController->setFile("");            $registerController->setFck("");            $registerController->setCheckbox("");            $registerController->setSelectbox("");            $registerController->setMultivalues("");            $registerController->setEditlist("");            $registerController->setNumberattribute("");            $registerController->setSearch("name|code");            $registerController->setDependee("");            $registerController->setDefaultvalues("");            $registerController->setExactsearch("");            $registerController->setTotal("");            $registerController->setColorattributes("");            $registerController->setCoreNodeActionsId("add|admin|delete|edit");            $registerController->setActionrestriction("");            $registerController->setDefaultAction("admin");            $registerController->setDefaultCollection('1');            $registerController->setIsArchive("");            $registerController->dataSave();        }        catch (Exception $ex)        {            \Core::Log($ex->getMessage(),"installdataexception.log");        }    }}