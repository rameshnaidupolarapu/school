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
class Modules_Contentmanagementsystem_Data_CmsNotificationComments
{
    //put your code here
    public function execute()
    {
        try
        {            
            $registerController=CoreClass::getController("core_registernode", "core_developmentsettings");
            $registerController->setNodeFileName("cms_notification_comments");
            $registerController->setNodeNameData("cms_notification_comments");
            $registerController->setDisplayValue("Notification Comments");
            $registerController->setIsModule("0");
            $registerController->setRootModuleId("notificationmanagement");
            $registerController->setModuleId("contentmanagementsystem");
            $registerController->setModuleDisplayId("contentmanagementsystem");
            $registerController->setSortValue("2");
            $registerController->setIcon("");
            $registerController->setMenu("2");
            $registerController->setIsNotification("0");
            $registerController->dataSave();
            
            $registerController=CoreClass::getController("CoreNodeSettings", "core_developmentsettings");
            $registerController->setRegisternodeId("cms_notification_comments");           
            $registerController->setTablename("cms_notification_comments");
            $registerController->setAutokey("id");
            $registerController->setPrimarykey("id");
            $registerController->setDescriptorkey("cms_notification_id");
            $registerController->setMandotatoryAdd("cms_notification_id|comment_source|description");
            $registerController->setMandotatoryEdit("cms_notification_id|comment_source|description");
            $registerController->setUniquefields("");
            $registerController->setHideAdd("");
            $registerController->setHideEdit("");
            $registerController->setHideView("");
            $registerController->setHideAdmin("");
            $registerController->setReadonlyAdd("");
            $registerController->setReadonlyEdit("");
            $registerController->setBoolattributes("");
            $registerController->setFile("");
            $registerController->setFck("");
            $registerController->setCheckbox("");
            $registerController->setSelectbox("");
            $registerController->setMultivalues("");
            $registerController->setEditlist("");
            $registerController->setNumberattribute("");
            $registerController->setSearch("comment_source|description");
            $registerController->setDependee("");
            $registerController->setDefaultvalues("");
            $registerController->setExactsearch("");
            $registerController->setTotal("");
            $registerController->setColorattributes("");
            $registerController->setCoreNodeActionsId("add|admin|delete|edit");  
            $registerController->setActionrestriction("");  
            $registerController->setDefaultAction("admin"); 
            $registerController->setDefaultCollection('1');
            $registerController->setIsArchive("");  
            $registerController->dataSave();
            
            $relationController=  CoreClass::getController("core_node_relations","core_developmentsettings");
            $relationController->setCoreNodeSettingsId("cms_notification_comments");
            $relationController->setCoreNodeColname("cms_notification_id");
            $relationController->setCoreRelationTypeId("MTO");
            $relationController->setCoreNodeParent("cms_notification");
            $relationController->setSortValue("1");
            $relationController->dataSave();
            
        }
        catch (Exception $ex)
        {
            Core::Log($ex->getMessage(),"installdataexception.log");
        }
    }
}