<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentCourseSchedule extends Model
{
    public $timestamps = false;
    protected $table = 'student_course_schedule';

    protected $fillable = [
        'student_id',
        'course_code',
        'semester_id',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_code', 'course_code');
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class, 'semester_id');
    }

    public function academicResults()
    {
        return $this->hasOne(AcademicResult::class, 'course_code', 'course_code')
            ->where('academic_results.student_id', $this->student_id)
            ->where('academic_results.semester_id', $this->semester_id);
    }
}
