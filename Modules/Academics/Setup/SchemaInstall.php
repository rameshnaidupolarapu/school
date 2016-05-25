<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SchemaInstall
 *
 * @author ramesh
 */
class Modules_Academics_Setup_SchemaInstall
{
    //put your code here
    function __construct() 
    {
        $this->setUp();
    }
    protected function setUp()
    {
        $nodesArray=array(
            "AcdExamGroup"=>"AcdExamGroup",
            "AcdExamName"=>"AcdExamName",
            "AcdExaminationMarks"=>"AcdExaminationMarks",
            "AcdExaminationSchedule"=>"AcdExaminationSchedule",
            "AcdExaminationScheduleDetails"=>"AcdExaminationScheduleDetails",
            "AcdFinalMarks"=>"AcdFinalMarks",
            "AcdGradeMaster"=>"AcdGradeMaster",
            "AcdGradeMethod"=>"AcdGradeMethod",
            "AcdGradeMethodDetails"=>"AcdGradeMethodDetails",
            "AcdGradeType"=>"AcdGradeType",
            "AcdLinkExam"=>"AcdLinkExam",
            "AcdModeofexam"=>"AcdModeofexam",
            "AcdOverallGrade"=>"AcdOverallGrade",
            "AcdStudentAttendance"=>"AcdStudentAttendance",
            "AcdStudentAttendanceDetails"=>"AcdStudentAttendanceDetails",
            "AcdStudentmarksDetails"=>"AcdStudentmarksDetails",
            "AcdSubgroupexams"=>"AcdSubgroupexams",
            
            "ListBranch"=>"ListBranch",
            
        );
        foreach ($nodesArray as $node) 
        {
            $nodeClass="Modules_Academics_Setup_".$node;
            $rnode=new $nodeClass();
            $rnode->execute();
        }               
    }
}