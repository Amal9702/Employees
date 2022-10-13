<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class EmployeeController extends Controller
{
    public function index()
    {
       return Employee::EMPLOYEES;
    }

    public function show($id)
    {
        try {
            return Employee::EMPLOYEES[$id];
        }catch (\Exception $exception){
            throw new NotFoundHttpException();
        }
    }
}
