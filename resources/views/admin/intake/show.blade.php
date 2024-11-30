@extends('layouts.admin')

@section('main-content')

<div class="container">
    
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Form intakeData</h2>
        <a href="{{ route('admin.intake') }}" class="btn btn-info">Go Back</a>
    </div>
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>Full Name</th>
                <td>{{ $intakeData->full_name }}</td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td>{{ $intakeData->dob }}</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>{{ $intakeData->age }}</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>{{ $intakeData->gender }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $intakeData->address }}</td>
            </tr>
            <tr>
                <th>City, State, Zip</th>
                <td>{{ $intakeData->city_state_zip }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ $intakeData->phone }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $intakeData->email }}</td>
            </tr>
            <tr>
                <th>Health Concerns</th>
                <td>{{ $intakeData->health_concerns }}</td>
            </tr>
            <tr>
                <th>Health Goals</th>
                <td>{{ $intakeData->health_goals }}</td>
            </tr>
            <tr>
                <th>Condition Details</th>
                <td>{{ $intakeData->condition_details }}</td>
            </tr>
            <tr>
                <th>Medication List</th>
                <td>{{ $intakeData->medication_list }}</td>
            </tr>
            <tr>
                <th>Allergy Details</th>
                <td>{{ $intakeData->allergy_details }}</td>
            </tr>
            <tr>
                <th>Surgery Details</th>
                <td>{{ $intakeData->surgery_details }}</td>
            </tr>
            <tr>
                <th>Exercise Routine</th>
                <td>{{ $intakeData->exercise_routine }}</td>
            </tr>
            <tr>
                <th>Diet</th>
                <td>{{ $intakeData->diet }}</td>
            </tr>
            <tr>
                <th>Smoke</th>
                <td>{{ $intakeData->smoke }}</td>
            </tr>
            <tr>
                <th>Alcohol</th>
                <td>{{ $intakeData->alcohol }}</td>
            </tr>
            <tr>
                <th>Recreational Drugs</th>
                <td>{{ $intakeData->recreational_drugs }}</td>
            </tr>
            <tr>
                <th>Sleep Hours</th>
                <td>{{ $intakeData->sleep_hours }}</td>
            </tr>
            <tr>
                <th>Stress Level</th>
                <td>{{ $intakeData->stress_level }}</td>
            </tr>
            <tr>
                <th>Emotional Challenges</th>
                <td>{{ $intakeData->emotional_challenges }}</td>
            </tr>
            <tr>
                <th>Emotional Explanation</th>
                <td>{{ $intakeData->emotional_explanation }}</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection

@section('scripts')
<!-- Optionally add any JS scripts here for interactions -->
@endsection