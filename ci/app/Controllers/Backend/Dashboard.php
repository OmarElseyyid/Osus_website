<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;


class Dashboard extends BaseController
{
    public function index()
    {
        return view('admin/dashboard/index');
    }
    public function addCourse()
    {
        return view('admin/courses/add');
    }
    public function coursesList()
    {
        return view('admin/courses/index');
    }
    public function addStudent()
    {
        return view('admin/students/add');
    }
    public function studentsList()
    {
        return view('admin/students/index');
    }
    public function addTeacher()
    {
        return view('admin/teachers/add');
    }
    public function teachersList()
    {
        return view('admin/teachers/index');
    }


}