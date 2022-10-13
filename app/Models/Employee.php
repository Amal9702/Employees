<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    const EMPLOYEES = Array (
        "0" => Array (
            "First Name" => "Tim",
            "Last Name"  => "Cook",
            "Company"=> "Apple"
        ),
        "1" => Array (
            "First Name" => "Satya",
            "Last Name"  => "Nadella",
            "Company"=> "Microsoft"
        ),
        "2" => Array (
            "First Name" => "Hopefully",
            "Last Name"  => "You",
            "Company"=> "Drovox"
        )
    );
}
