<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    /**
     * @return void set something to complete;
     */
    public function complete()
    {
        $this->completed = true;
        $this->save();
    }

    public function addResult($grade)
    {
        if ($this->beste_grade < $grade) {
            $this->beste_grade = $grade;
            if ($this->beste_grade >= $this->lowest_passing_grade) {
                $this->passed_at = now();
                $this->complete();
            }
            $this->save();
        }
    }
}

