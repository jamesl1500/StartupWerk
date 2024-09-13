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
                            <a href="#">Back to home</a>
                        </li>
                        <li>
                            <a href="#">Inspiration Explorer</a>
                        </li>
                        <li class="active">
                            <a href="#">Industry Explorer</a>
                        </li>
                        <li>
                            <a href="#">Magazine</a>
                        </li>
                        @auth
                            <li>
                                <a href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                        @endauth
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
                            <form action="#" method="GET">
                                <div class="select-your-interests">
                                    <label for="interests">Select your interests</label><br>
                                    <select name="interests" id="interests">
                                        <option value="1">Interest 1</option>
                                        <option value="2">Interest 2</option>
                                        <option value="3">Interest 3</option>
                                    </select>

                                    <!-- When the user selects an interest, the page should reload and display the selected interest -->
                                    <div class="selected-interests">
                                        <p>Selected Interest:</p>
                                        <ul>
                                            <li>Interest 1 <span class="delete">x</span></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="select-your-skills-and-experience">
                                    <label for="skills-and-experience">Select your skills and experience</label><br>
                                    <select name="skills-and-experience" id="skills-and-experience">
                                        <option value="1">Skill 1</option>
                                        <option value="2">Skill 2</option>
                                        <option value="3">Skill 3</option>
                                    </select>

                                    <div class="selected-skills">
                                        <p>Selected Skills:</p>
                                        <ul>
                                            <li>Skill 1 <span class="delete">x</span></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form>
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