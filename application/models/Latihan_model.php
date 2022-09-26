<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Latihan_model extends CI_Model {


    public function getSoal1(){
        $this->db->select('s.code_students, s.name_students, c.code_courses, c.name_courses');
        $this->db->from('students s');
        $this->db->join('student_courses sc', 's.id_students= sc.student_id');
        $this->db->join('courses c', 'sc.course_id= c.id_courses');
        $this->db->where('sc.semester = 1');
        $this->db->order_by('s.code_students', 's.name_students', 'c.code_courses', 'c.name_courses');
        
        $soal1 = $this->db->get();
        return $soal1->result_array();
    }
    
    public function getSoal2(){
        $this->db->select('s.code_students as kode_mahasiswa, s.name_students as nama_mahasiswa, c.code_courses as kode_matakuliah, c.name_courses as nama_matakuliah');
        $this->db->from('students s');
        $this->db->join('student_courses sc', 's.id_students= sc.student_id');
        $this->db->join('courses c', 'sc.course_id= c.id_courses');
        $this->db->where('sc.semester = 1');
        $this->db->order_by('s.code_students', 's.name_students', 'c.code_courses', 'c.name_courses');
        
        $soal2 = $this->db->get();
        return $soal2->result();
    }

    public function getSoal3(){
        $this->db->select('s.code_students,s.name_students, c.code_courses, c.name_courses');
        $this->db->from('students s');
        $this->db->join('student_courses sc', 's.id_students = sc.student_id  and sc.semester = 1', 'LEFT');
        $this->db->join('courses c', 'sc.course_id = c.id_courses', 'LEFT');
        $this->db->where(array('c.code_courses' => null));
        $this->db->order_by('s.code_students ASC');
 
        $soal3 = $this->db->get();
        return $soal3->result(); 
    }

    public function getSoal4(){
        $this->db->select('s.id_students, s.code_students, s.name_students, c.id_courses, c.code_courses, c.name_courses');
        $this->db->from('students s');
        $this->db->join('student_courses sc', 's.id_students = sc.student_id and sc.semester = 1');
        $this->db->join('courses c', 'sc.course_id = c.id_courses', 'RIGHT');
        $this->db->where(array('s.code_students'=>null));
        $this->db->order_by('s.code_students, s.name_students, c.code_courses, c.name_courses');

        $soal4 = $this->db->get();
        return $soal4->result();
    }

    public function getSoal5()
    {
        $this->db->select('s.id_students, s.code_students, s.name_students, COUNT(sc.id_sc) as total');
        $this->db->from('students s');
        $this->db->join('student_courses sc', 's.id_students = sc.student_id and sc.semester = 2', 'LEFT');
        $this->db->group_by('s.code_students, s.name_students');
        $this->db->order_by('s.code_students, s.name_students');

        $soal5 = $this->db->get();
        return $soal5->result();

    }

    public function getSoal6()
    {
        $this->db->select('c.id_courses, c.code_courses, c.name_courses, COUNT(sc.id_sc) as total');
        $this->db->from('student_courses sc');
        $this->db->join('courses c', 'c.id_courses = sc.course_id and sc.semester = 2', 'RIGHT');
        $this->db->group_by('c.code_courses, c.name_courses');
        $this->db->order_by('c.code_courses, c.name_courses');

        $soal6 = $this->db->get();
        return $soal6->result();
    }
}
?>