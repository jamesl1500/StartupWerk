@extends('layouts.guest')

@section('website')
<div class="page page-inspiration_explorer">
    <div class="page-header">
        <h1 class="page-header-title">Inspiration Explorer</h1>
        <p class="page-header-subtitle">Find the Right Opportunity</p>
    </div>
    <div class="page-content container">
        <div class="row">
            <div class="page-inspiration_explorer-menu col-lg-3">
                <div class="page-inspiration_explorer-menu-content">
                    <ul>
                        <li>
                            <a href="{{ route('register') }}">Registration Edit</a>
                        </li>
                        <li class="active">
                            <a href="{{ route('inspiration_explorer.index') }}">Inspiration Explorer</a>
                        </li>
                        <li>
                            <a href="{{ route('industry.index') }}">Industry Explorer</a>
                        </li>
                        <li>
                            <a href="{{ route('magazine.index') }}">Magazine</a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-inspiration_explorer-content col-lg-9">
                <div class="inspiration-explorer">
                    <div class="inspiration-explorer-header">
                        <h2 class="inspiration-explorer-title">Find the Right Opportunity</h2>
                        <p class="inspiration-explorer-subtitle">Explore the best industries in the market that match your startup needs</p>
                    </div>
                    <div class="inspiration-explorer-content">
                        <div class="inspiration-explorer-search">
                            <form action="{{ route('inspiration_explorer.save') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="search-left col-lg-7">
                                        <div class="select-your-interests">
                                            <label for="interests">Select your interests</label><br>
                                            <select name="interests" id="selecting-interests">
                                                <option>Select interests</option>
                                                <?php
                                                // Usde curl to get the interests from the API
                                                $ch1 = curl_init();
                                                curl_setopt($ch1, CURLOPT_URL, "http://13.52.110.55/api/v1/lookup_interests");
                                                curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
                                                $output = curl_exec($ch1);
                                                curl_close($ch1);

                                                // Store the interests in a cookie for a month

                                                $interests = json_decode($output, true);

                                                foreach ($interests as $interest) {
                                                    echo "<option value='" . $interest['id'] . "'>" . ucwords($interest['interest']) . "</option>";
                                                } 
                                                ?>
                                            </select>

                                            <!-- When the user selects an interest, the page should reload and display the selected interest -->
                                            <div class="selected-interests">
                                                <p>Selected Interest:</p>
                                                <ul class="selected-interests-ul" id="selected-interests-ul">
                                                    <?php
                                                        // Display selected interests from database for logged user
                                                        $selectedInterests = Auth::user()->userInterestsSelection();
                                                        foreach ($selectedInterests as $interest) {
                                                            echo "<li>" . $interest->interest . "</li>";
                                                        }

                                                    ?>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="select-your-skills-and-experience">
                                            <label for="skills-and-experience">Select your skills and experience</label><br>
                                            <select name="skills" id="skills-and-experience">
                                                <option>Select skills</option>
                                                <?php
                                                // Usde curl to get the skills from the API
                                                $ch2 = curl_init();
                                                curl_setopt($ch2, CURLOPT_URL, "http://13.52.110.55/api/v1/lookup_skills");
                                                curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
                                                $output = curl_exec($ch2);
                                                curl_close($ch2);

                                                $skills = json_decode($output, true);

                                                foreach ($skills as $skill) {
                                                    echo "<option value='" . $skill['id'] . "'>" . ucwords($skill['skill']) . "</option>";
                                                }
                                                ?>
                                            </select>

                                            <div class="selected-skills">
                                                <p>Selected Skills:</p>
                                                <ul>
                                                    
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <button type="reset" class="btn btn-secondary">Reset</button>
                                        </div>
                                    </div>
                                    <div class="search-right col-lg-5">
                                        <div class="search-results">
                                            <h2>Results</h2>
                                            <p>Here are the industries we found</p>
                                            <ul>
                                                <li>Industry 1 <span class="delete">Add</span></li>
                                                <li>Industry 2 <span class="delete">Add</span></li>
                                                <li>Industry 3 <span class="delete">Add</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="inspiration-explorer-results">
                            <div class="inspiration-explorer-results-header">
                                <h2>Selected Industries</h2>
                                <p>Here are the industries that you selected</p>
                            </div>
                            <div class="inspiration-explorer-results-content f">
                                <div class="industry">
                                    <div class="industry-header">
                                        <span>x</span>
                                        <h2><i class="fa fa-industry"></i></h2>
                                        <h3>Industry 1</h3>
                                    </div>
                                </div>
                                <div class="industry">
                                    <div class="industry-header">
                                        <span>x</span>
                                        <h2><i class="fa fa-industry"></i></h2>
                                        <h3>Industry 2</h3>
                                    </div>
                                </div>
                                <div class="industry">
                                    <div class="industry-header">
                                        <span>x</span>
                                        <h2><i class="fa fa-industry"></i></h2>
                                        <h3>Industry 3</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <!-- Ad space -->
                <div class="ad-space">
                    <div class="ad-space-content">
                        Ad Space
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection