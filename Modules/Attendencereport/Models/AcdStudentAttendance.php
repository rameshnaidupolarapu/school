<?phpnamespace Modules\Attendencereport\Models;use Core\Model\Node;class AcdStudentAttendance extends Node{    public $_studentId = NULL;    public $_admissionNo=NULL;    public $_academicYear=NULL;    public $_firstDay=NULL;    public $_lastDay=NULL;    public function setStudentId($studentId) {        $this->_studentId = $studentId;        return $this;    }    public function getStudentId() {        return $this->_studentId;    }    public function setAdmissionNo($admissionNo) {        $this->_admissionNo = $admissionNo;        return $this;    }    public function getAdmissionNo() {        return $this->_admissionNo;    }    public function setAcademicyear($academicYear) {        $this->_academicYear = $academicYear;        return $this;    }    public function getAcademicyear() {        return $this->_academicYear;    }      public function setFirstDay($firstDay) {        $this->_firstDay = $firstDay;        return $this;    }    public function getFirstDay() {        return $this->_firstDay;    }      public function setLastDay($lastDay) {        $this->_lastDay = $lastDay;        return $this;    }    public function getLastDay() {        return $this->_lastDay;    }    public function getAttendanceDates(){         $nodeModel = \CoreClass::getModel("acd_student_attendance");        $nodeModel->setNodeName('acd_student_attendance');         $nodeModel->addCustomFieldToSelect("acd_student_attendance.id", "id");            $nodeModel->addCustomFieldToSelect("acd_student_attendance.date", "acd_date");            $nodeModel->addCustomFilter("acd_student_attendance.date >='".$this->getFirstDay()."'");        $nodeModel->addCustomFilter("acd_student_attendance.date <='".$this->getLastDay()."'");        $nodeModel->getCollection();        $result = $nodeModel->_collections;         return $result;    }}