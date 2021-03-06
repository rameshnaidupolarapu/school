<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CoreReportsdetailsSettings
 *
 * @author ramesh
 */
  namespace Core\Modules\CoreReports\Controllers;
use \Core\Controllers\NodeController;
class CoreReportsdetailsSettings extends NodeController
{
    //put your code here
    public function getStructureAction()
    {
        $nodeResult=\Core::convertJsonToArray($this->_requestedData['noderesult']);
        $requestedData=$this->_requestedData;
        $defaultValue=$nodeResult[$requestedData['idname']];
        $nodeName=$this->_requestedData['node_id'];
        $np=new Core_Model_NodeProperties();
        $np->setNode($nodeName);
        $nodestructure=$np->currentNodeStructure();
        
        $tb=new Core_Model_TableStructure();
        $tb->setTable($nodestructure['tablename']);
        $tableStructure=$tb->getStructure();
        $tableStructure=\Core::getKeysFromArray($tableStructure);
        $tableStructure=\Core::diffArray($tableStructure, $this->_defaulthideAttributes);
        
        $result=array();
        $i=0;
        foreach ($tableStructure as $key) 
        {
            $result[$i]['pid']=$key;
            $result[$i]['pds']=$this->getLabel($key);
            $i++;
        }
        $attributeType="select";        
        $attributeDetails=new Core_Attributes_LoadAttribute($attributeType);				
        $attributeClass=Core_Attributes_.$attributeDetails->_attributeName;
        $attribute=new $attributeClass;
        $attribute->setIdName($requestedData['idname']);
        $attribute->setOptions($result);
        $attribute->setValue($defaultValue);        
        $attribute->loadAttributeTemplate($attributeType,$requestedData['idname']);
    }    
}
