<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IntakeForm extends Model
{
    protected $table = 'intake_forms';

    // Define the columns that are mass assignable
    protected $fillable = [
        'full_name',
        'dob',
        'age',
        'gender',
        'address',
        'city_state_zip',
        'phone',
        'email',
        'health_concerns',
        'health_goals',
        'condition_details',
        'medication_list',
        'allergy_details',
        'surgery_details',
        'exercise_routine',
        'diet',
        'smoke',
        'alcohol',
        'recreational_drugs',
        'sleep_hours',
        'stress_level',
        'emotional_challenges',
        'emotional_explanation'
    ];
}
