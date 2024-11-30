@extends('frontend.layouts.app')

@section('title', 'Our Media')

@section('content')
<style>
    .error{
        color:red;
    }
    .checkBox{
        display: flex;
        margin: 9px;
    }
</style>

<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('img/common/bg-sub-title.jpg') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title text-white">Intake Form</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu text-white">
                    <li class="text-white"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                    <li class="text-white">Intake Form</li>
                </ul>
            </div>
        </div>
    </div>
</div>

    <div class="container my-5">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&#x2715;</button>
            </div>
        @endif
        <h1 class="text-center mb-4">Personal and Health Information Form</h1>

        <form action="{{ route('submit-intake-form') }}" method="POST">
            @csrf

            <!-- Personal Information Section -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="fullName" class="form-label">Full Name:</label>
                    <input type="text" id="fullName" name="full_name" class="form-control" value="{{ old('full_name') }}">
                    @error('full_name') <div class="error">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6">
                    <label for="dob" class="form-label">Date of Birth:</label>
                    <input type="date" id="dob" name="dob" class="form-control" value="{{ old('dob') }}">
                    @error('dob') <div class="error">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="cityStateZip" class="form-label">City/State/Zip:</label>
                    <input type="text" id="cityStateZip" name="city_state_zip" class="form-control" value="{{ old('city_state_zip') }}">
                    @error('city_state_zip') <div class="error">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" class="form-control" value="{{ old('phone') }}">
                    @error('phone') <div class="error">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="age" class="form-label">Age:</label>
                    <input type="number" id="age" name="age" class="form-control" value="{{ old('age') }}">
                    @error('age') <div class="error">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label">Gender:</label>
                    <div class="checkBox">
                        <div class="form-check" style="margin-left: -30px; margin-top: 10px;">
                            <input type="radio" name="gender" value="Male" 
                                id="male" class="form-check-input" 
                                {{ old('gender') == 'Male' ? 'checked' : '' }}>
                            <label for="male" class="form-check-label ms-1">Male</label>
                        </div>
                        <div class="form-check" style="margin-top:10px;">
                            <input type="radio" name="gender" value="Female" 
                                id="female" class="form-check-input" 
                                {{ old('gender') == 'Female' ? 'checked' : '' }}>
                            <label for="female" class="form-check-label ms-1">Female</label>
                        </div>
                        <div class="form-check" style="margin-top:10px;">
                            <input type="radio" name="gender" value="Other" 
                                id="other" class="form-check-input" 
                                {{ old('gender') == 'Other' ? 'checked' : '' }}>
                            <label for="other" class="form-check-label ms-1">Other</label>
                        </div>
                    </div>
                    @error('gender') <div class="error">{{ $message }}</div> @enderror
                </div>
            </div>            

            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
                    @error('email') <div class="error">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <label for="address" class="form-label">Address:</label>
                    <textarea id="address" name="address" style="min-height: 60px;" class="form-control">{{ old('address') }}</textarea>
                    @error('address') <div class="error">{{ $message }}</div> @enderror
                </div>
            </div>

            <!-- Health and Lifestyle Information Section -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="healthConcerns" class="form-label">1. What are your primary health concerns?</label>
                    <textarea id="healthConcerns" name="health_concerns" style="min-height: 80px;"  class="form-control">{{ old('health_concerns') }}</textarea>
                    @error('health_concerns') <div class="error">{{ $message }}</div> @enderror
                </div>
           
                <div class="col-md-6">
                    <label for="healthGoals" class="form-label">2. What specific outcomes are you hoping to achieve from this consultation?</label>
                    <textarea id="healthGoals" name="health_goals" style="min-height: 80px;" class="form-control">{{ old('health_goals') }}</textarea>
                    @error('health_goals') <div class="error">{{ $message }}</div> @enderror
                </div>
            </div>

            <!-- Medical History Section -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <label>3. Have you been diagnosed with any medical conditions?</label>
                    <div class="checkBox">
                        <div class="form-check">
                            <input type="radio" name="diagnosed_conditions" value="Yes" 
                                {{ old('diagnosed_conditions') == 'Yes' ? 'checked' : '' }} 
                                class="form-check-input" id="diagnosedYes">
                            <label class="form-check-label" for="diagnosedYes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="diagnosed_conditions" value="No" 
                                {{ old('diagnosed_conditions') == 'No' ? 'checked' : '' }} 
                                class="form-check-input" id="diagnosedNo">
                            <label class="form-check-label" for="diagnosedNo">No</label>
                        </div>
                    </div>
                    @error('diagnosed_conditions') 
                        <div class="error">{{ $message }}</div> 
                    @enderror

                    <label for="conditionDetails" class="form-label">If yes, please specify:</label>
                    <textarea id="conditionDetails" style="min-height: 80px;" name="condition_details" class="form-control">{{ old('condition_details') }}</textarea>
                    @error('condition_details') 
                        <div class="error">{{ $message }}</div> 
                    @enderror
                </div>
            
                <div class="col-md-6">
                    <label>4. Are you currently taking any medications or supplements?</label>
                    <div class="checkBox">
                        <div class="form-check">
                            <input type="radio" name="medications" value="Yes" 
                                {{ old('medications') == 'Yes' ? 'checked' : '' }} 
                                class="form-check-input" id="medicationsYes">
                            <label class="form-check-label" for="medicationsYes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="medications" value="No" 
                                {{ old('medications') == 'No' ? 'checked' : '' }} 
                                class="form-check-input" id="medicationsNo">
                            <label class="form-check-label" for="medicationsNo">No</label>
                        </div>
                        @error('medications') <div class="error">{{ $message }}</div> @enderror
                    </div>
                    <label for="medicationList" class="form-label">If yes, please list them:</label>
                    <textarea id="medicationList" style="min-height: 80px;" name="medication_list" class="form-control">{{ old('medication_list') }}</textarea>
                    @error('medication_list') <div class="error">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <label>5. Do you have any allergies?</label>
                    <div class="checkBox">
                        <div class="form-check">
                            <input type="radio" name="allergies" value="Yes" 
                                {{ old('allergies') == 'Yes' ? 'checked' : '' }} 
                                class="form-check-input" id="allergiesYes">
                            <label class="form-check-label" for="allergiesYes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="allergies" value="No" 
                                {{ old('allergies') == 'No' ? 'checked' : '' }} 
                                class="form-check-input" id="allergiesNo">
                            <label class="form-check-label" for="allergiesNo">No</label>
                        </div>
                        @error('allergies') <div class="error">{{ $message }}</div> @enderror
                    </div>
                    <label for="allergyDetails" class="form-label">If yes, please specify:</label>
                    <textarea id="allergyDetails" style="min-height: 80px;" name="allergy_details" class="form-control">{{ old('allergy_details') }}</textarea>
                    @error('allergy_details') <div class="error">{{ $message }}</div> @enderror
                </div>
            
                <div class="col-md-6">
                    <label>6. Have you had any recent surgeries or hospitalizations?</label>
                    <div class="checkBox">
                    <div class="form-check">
                        <input type="radio" name="surgeries" value="Yes" 
                            {{ old('surgeries') == 'Yes' ? 'checked' : '' }} 
                            class="form-check-input" id="surgeriesYes">
                        <label class="form-check-label" for="surgeriesYes">Yes</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="surgeries" value="No" 
                            {{ old('surgeries') == 'No' ? 'checked' : '' }} 
                            class="form-check-input" id="surgeriesNo">
                        <label class="form-check-label" for="surgeriesNo">No</label>
                    </div>
                    @error('surgeries') <div class="error">{{ $message }}</div> @enderror
                </div>
                    <label for="surgeryDetails" class="form-label">If yes, please provide details:</label>
                    <textarea id="surgeryDetails" style="min-height: 80px;" name="surgery_details" class="form-control">{{ old('surgery_details') }}</textarea>
                    @error('surgery_details') <div class="error">{{ $message }}</div> @enderror
                </div>
            </div>

            <!-- Lifestyle and Habits Section -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <label>7. Do you exercise regularly?</label>
                    <div class="checkBox">
                        <div class="form-check">
                            <input type="radio" name="exercise" value="Yes" 
                                {{ old('exercise') == 'Yes' ? 'checked' : '' }} 
                                class="form-check-input" id="exerciseYes">
                            <label class="form-check-label" for="exerciseYes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="exercise" value="No" 
                                {{ old('exercise') == 'No' ? 'checked' : '' }} 
                                class="form-check-input" id="exerciseNo">
                            <label class="form-check-label" for="exerciseNo">No</label>
                        </div>
                        @error('exercise') <div class="error">{{ $message }}</div> @enderror
                    </div>
                    <label for="exerciseDetails" class="form-label">If yes, please describe your routine:</label>
                    <textarea id="exerciseDetails" name="exercise_routine" style="min-height: 80px;" class="form-control">{{ old('exercise_routine') }}</textarea>
                    @error('exercise_routine') <div class="error">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <label for="diet" class="form-label">8. How would you describe your diet?</label>
                    <textarea id="diet" name="diet" class="form-control">{{ old('diet') }}</textarea>
                    @error('diet') <div class="error">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4">
                    <label for="smoke" class="form-label">Do you smoke?</label>
                    <select id="smoke" name="smoke" class="form-control">
                        <option value="">Select</option>
                        <option value="Yes" {{ old('smoke') == 'Yes' ? 'selected' : '' }}>Yes</option>
                        <option value="No" {{ old('smoke') == 'No' ? 'selected' : '' }}>No</option>
                    </select>
                    @error('smoke') <div class="error">{{ $message }}</div> @enderror
                </div>
            
                <div class="col-md-4">
                    <label for="alcohol" class="form-label">Do you drink alcohol?</label>
                    <select id="alcohol" name="alcohol" class="form-control">
                        <option value="">Select</option>
                        <option value="Yes" {{ old('alcohol') == 'Yes' ? 'selected' : '' }}>Yes</option>
                        <option value="No" {{ old('alcohol') == 'No' ? 'selected' : '' }}>No</option>
                    </select>
                    @error('alcohol') <div class="error">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-4">
                    <label for="drugs" class="form-label">Do you use recreational drugs?</label>
                    <select id="drugs" name="recreational_drugs" class="form-control">
                        <option value="">Select</option>
                        <option value="Yes" {{ old('recreational_drugs') == 'Yes' ? 'selected' : '' }}>Yes</option>
                        <option value="No" {{ old('recreational_drugs') == 'No' ? 'selected' : '' }}>No</option>
                    </select>
                    @error('drugs') <div class="error">{{ $message }}</div> @enderror
                </div>
            </div>   
    
            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="sleepHours" class="form-label">10. How many hours of sleep do you typically get per night?</label>
                    <input type="number" id="sleepHours" name="sleep_hours" class="form-control" value="{{ old('sleep_hours') }}">
                    @error('sleep_hours') <div class="error">{{ $message }}</div> @enderror
                </div>
            
                <div class="col-md-6">
                    <label for="stressLevel" class="form-label">11. On a scale of 1-10, how would you rate your current stress level?</label>
                    <input type="number" id="stressLevel" name="stress_level" min="1" max="10" class="form-control" value="{{ old('stress_level') }}">
                    @error('stress_level') <div class="error">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6">
                    <label>12. Do you experience anxiety, depression, or other emotional challenges?</label>
                    <div class="checkBox">
                        <div class="form-check">
                            <input type="radio" name="emotional_challenges" value="Yes" 
                                {{ old('emotional_challenges') == 'Yes' ? 'checked' : '' }} 
                                class="form-check-input" id="emotionalChallengesYes">
                            <label class="form-check-label" for="emotionalChallengesYes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="emotional_challenges" value="No" 
                                {{ old('emotional_challenges') == 'No' ? 'checked' : '' }} 
                                class="form-check-input" id="emotionalChallengesNo">
                            <label class="form-check-label" for="emotionalChallengesNo">No</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="emotional_challenges" value="Not Sure" 
                                {{ old('emotional_challenges') == 'Not Sure' ? 'checked' : '' }} 
                                class="form-check-input" id="emotionalChallengesNotSure">
                            <label class="form-check-label" for="emotionalChallengesNotSure">Not Sure</label>
                        </div>
                        @error('emotional_challenges') <div class="error">{{ $message }}</div> @enderror
                    </div>
                </div>
            </div>


            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="emotionalExplanation" class="form-label">If yes, please explain:</label>
                    <textarea id="emotionalExplanation" name="emotional_explanation" class="form-control">{{ old('emotional_explanation') }}</textarea>
                    @error('emotional_explanation') <div class="error">{{ $message }}</div> @enderror
                </div>
            </div>

            <!-- Submit Button -->
            <div class="row">
                <div class="col-md-12">
                    <button type="submit"  class="vs-btn">Submit</button>
                </div>
            </div>
        </form>
    </div>

@endsection