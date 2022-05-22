<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Grade extends Model
{
    protected $fillable = ['quartile',
        'course_name', 'Exam', 'EC', 'lowest_passing_grade', 'beste_grade', 'completed', 'passed_at'];

    /**
     * @param $grade the grade of the new things
     * @return void return the add results
     */
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

    /**
     * @return void set something to complete;
     */
    public function complete()
    {
        $this->completed = true;
        $this->save();
    }

    /**
     * @return BelongsTo
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
