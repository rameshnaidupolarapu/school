<?php/* * To change this license header, choose License Headers in Project Properties. * To change this template file, choose Tools | Templates * and open the template in the editor. *//** * Description of StudentAdmission * * @author ramesh */namespace Modules\Staffmanagement\Controllers;use Core\Controllers\NodeController;class StaffStaffDeatils extends NodeController{    //put your code here    public function StaffStaffDeatilsBeforeDataUpdate($data)    {        if($this->_currentAction=='add')        {            $helper= \CoreClass::getHelper();            $staffId=$helper->getSequenceCode('STAFF');            $data['staff_id']=$staffId;            $this->_requestedData['staff_id']=$staffId;        }        return $data;    }    public function StaffStaffDeatilsAfterDataUpdate()    {       if ($this->_currentAction == 'add') {            $helper = \CoreClass::getHelper();            $staffId = $helper->updateSequenceCode('STAFF');        }    }}