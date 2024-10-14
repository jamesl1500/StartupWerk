@extends('layouts.guest')

@section('website')
<div class="page page-inspiration_explorer">
    <div class="page-header">
        <h1 class="page-header-title">Industry Explorer</h1>
        <p class="page-header-subtitle">Investigate Industry Data</p>
    </div>
    <div class="page-content container">
        <div class="row">
            <div class="page-inspiration_explorer-menu col-lg-3">
                <div class="page-inspiration_explorer-menu-content">
                    <ul>
                        <li>
                            <a href="{{ route('register') }}">Registration Edit</a>
                        </li>
                        <li>
                            <a href="{{ route('inspiration_explorer.index') }}">Inspiration Explorer</a>
                        </li>
                        <li class="active">
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
                        <div class="row">
                            <div class="inspiration-explorer-search col-lg-6">
                                <form action="#" method="POST">
                                    <?php
                                        // use curl toget stae and region from the API
                                        $ch1 = curl_init();
                                        curl_setopt($ch1, CURLOPT_URL, "http://13.52.110.55/api/v1/lookup_regions");
                                        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
                                        $output = curl_exec($ch1);
                                        curl_close($ch1);

                                        $regions = json_decode($output, true);

                                        $counties = array();
                                        $states = array();

                                        foreach ($regions as $region) {
                                            $counties[] = $region['county'];
                                            $states[] = $region['state'];
                                        }
                                    ?>
                                    <div class="select-your-interests select_region">
                                        <label for="region">Select your state</label><br>
                                        <select name="region" id="region">
                                            <?php
                                                $states = array_unique($states);
                                                foreach ($states as $state) {
                                                    echo "<option value='" . $state . "'>" . ucwords($state) . "</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="select-your-interests select_region">
                                        <label for="region">Select your region</label><br>
                                        <select name="region" id="region">
                                            <?php
                                                $counties = array_unique($counties);
                                                foreach ($counties as $county) {
                                                    echo "<option value='" . $county . "'>" . ucwords($county) . "</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="select-your-interests">
                                        <label for="interests">Select your industries</label><br>
                                        <select name="interests" id="interests">
                                            <option>Select industries</option>
                                            <?php
                                                // Use curl to get the interests from the API
                                                $ch1 = curl_init();
                                                curl_setopt($ch1, CURLOPT_URL, "http://13.52.110.55/api/v1/lookup_industries");
                                                curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
                                                $output = curl_exec($ch1);
                                                curl_close($ch1);

                                                $industries = json_decode($output, true);

                                                // Sort the industries alphabetically
                                                usort($industries, function($a, $b) {
                                                    return $a['industry'] <=> $b['industry'];
                                                });

                                                foreach ($industries as $industry) {
                                                    echo "<option value='" . $industry['id'] . "'>" . ucwords($industry['industry']) . "</option>";
                                                }
                                            ?>
                                        </select>

                                        <!-- When the user selects an interest, the page should reload and display the selected interest -->
                                        <div class="selected-interests">
                                            <p>Your Selected Industries:</p>
                                            <ul>
                                                <li>Industry 1 <span class="delete">x</span></li>
                                                <li>Industry 2 <span class="delete">x</span></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="select-your-skills-and-experience" style="display: none;">
                                        <label for="skills-and-experience">Select industry categories</label><br>
                                        <select name="skills-and-experience" id="skills-and-experience">
                                            <option value="1">Skill 1</option>
                                            <option value="2">Skill 2</option>
                                            <option value="3">Skill 3</option>
                                        </select>

                                        <div class="selected-skills">
                                            <p>Selected Categories:</p>
                                            <ul>
                                                <li>Category 1 <span class="delete">x</span></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </form>
                            </div>

                            <div class="inspiration-explorer-results col-lg-6">
                                <div class="inspiration-explorer-results-header">
                                    <h2>Results</h2>
                                    <p>Here are the metrics for your selected industries</p>
                                </div>
                                <div class="inspiration-explorer-results-content">
                                    <!-- Industry metrics boxes -->
                                    <div class="result-head">
                                        <div class="result-head-content">
                                            <h3><b>Category:</b> Category 1</h3>
                                            <h3><b>Industry:</b> Industry 1</h3>
                                        </div>
                                        <div class="us-metrics">
                                            <div class="us-metrics-head">
                                                <h3>US Metrics</h3>
                                            </div>
                                            <div class="us-metrics-boxes row">
                                                <div class="metric-box col-lg-4">
                                                    <h3>Statistics</h3>
                                                    <div class="metric-box-content">

                                                    </div>
                                                </div>
                                                <div class="metric-box col-lg-4">
                                                    <h3>Skills Required</h3>
                                                    <div class="metric-box-content">
                                                        
                                                    </div>
                                                </div>
                                                <div class="metric-box col-lg-4">
                                                    <h3>Startup Costs</h3>
                                                    <div class="metric-box-content">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="us-metrics">
                                            <div class="us-metrics-head">
                                                <h3>Regional Metrics</h3>
                                            </div>
                                            <div class="us-metrics-boxes row">
                                                <div class="metric-box col-lg-4">
                                                    <h3>Statistics</h3>
                                                    <div class="metric-box-content">

                                                    </div>
                                                </div>
                                                <div class="metric-box col-lg-4">
                                                    <h3>Growth of Similar Businesses</h3>
                                                    <div class="metric-box-content">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ad space -->
                <div class="ad-space col-lg-5">
                    <div class="ad-space-content">
                        Ad Space
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection