@extends('layouts.app')

@section('website')
<div class="page page-dashboard">
    <div class="page-header">
        <h1 class="page-header-title">Your Dashboard</h1>
        <p class="page-header-subtitle">Welcome Karl</p>
    </div>
    <div class="page-content container">
        <div class="row">
            <div class="page-menu col-lg-3">
                <div class="page-menu-content">
                    <ul>
                        <li>
                            <a href="{{ route('register') }}">Registration Edit</a>
                        </li>
                        <li>
                            <a href="{{ route('inspiration_explorer.index') }}">Inspiration Explorer</a>
                        </li>
                        <li>
                            <a href="{{ route('industry.index') }}">Industry Explorer</a>
                        </li>
                        <li>
                            <a href="{{ route('magazine.index') }}">Magazine</a>
                        </li>
                        <li class="active">
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-immediate-content col-lg-6">
                <div class="inner-immediate-content">
                    <div class="top-dashboard-links">
                        <div class="link-box">
                            <a href="{{ route('inspiration_explorer.index') }}">
                                <h2>Inspiration Explorer</h2>
                                <p>View your inspirations</p>
                            </a>
                        </div>
                        <div class="link-box">
                            <a href="{{ route('industry.index') }}">
                                <h2>Industry Explorer</h2>
                                <p>View your industries</p>
                            </a>
                        </div>
                    </div>

                    <div class="selected-industries">
                        <div class="selected-industries-head">
                            <h3>Selected Industries</h3>
                            <p>View your selected industries and their stats</p>
                        </div>
                        <div class="industries-selected">
                            <div class="industry active">
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
                        <div class="selected-industry-stats">
                            <div class="industry-stats">
                                <h3>Stat 1</h3>
                                <p>Stats for Industry 1</p>
                            </div>
                            <div class="industry-stats">
                                <h3>Stat 2</h3>
                                <p>Stats for Industry 1</p>
                            </div>
                            <div class="industry-stats">
                                <h3>Stat 3</h3>
                                <p>Stats for Industry 1</p>
                            </div>
                            <div class="industry-stats">
                                <h3>Stat 3</h3>
                                <p>Stats for Industry 1</p>
                            </div>
                        </div>
                    </div>

                    <!-- Article explorer -->
                    <div class="article-browser" style="display: none;">
                        <div class="article-browser-header">
                            <h2>Article Explorer</h2>
                            <p>Find the latest articles that match your interests</p>
                        </div>
                        <div class="article-browser-content">
                            <div class="filter-articles">
                                <label for="filter-articles">Filter By Region</label><br>
                                <select name="filter-articles" id="filter-articles">
                                    <option value="1">Region 1</option>
                                    <option value="2">Region 2</option>
                                    <option value="3">Region 3</option>
                                </select>
                            </div>
                            <div class="filter-articles">
                                <label for="filter-articles">Filter By: </label><br>
                                <select name="filter-articles" id="filter-articles">
                                    <option value="1">All News</option>
                                    <option value="2">All Events</option>
                                    <option value="3">Regulations</option>
                                </select>
                            </div>
                            <div class="filter-articles">
                                <label for="search-articles">Search Articles</label><br>
                                <input type="text" name="search-articles" id="search-articles" placeholder="Search Articles">
                            </div>

                            <!-- Articles -->
                            <div class="articles">
                                <div class="article">
                                    <h3>Article 1</h3>
                                    <p>Article 1 content</p>
                                </div>
                                <div class="article">
                                    <h3>Article 2</h3>
                                    <p>Article 2 content</p>
                                </div>
                                <div class="article">
                                    <h3>Article 3</h3>
                                    <p>Article 3 content</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-right-content col-lg-3">
                <div class="inner-right-content">
                    <!-- Ad space -->
                    <div class="ad-space">
                        <p>Ad Space</p>
                    </div>

                    <!-- Selected Industry -->
                    <div class="box selected-industry" style="display: none;">
                        <h2>Selected Industry</h2>
                        <p>Industry 1</p>
                    </div>

                    <!-- Selected news -->
                    <div class="box selected-news" style="display: none;">
                        <h2>Selected News</h2>
                        <p>News 1</p>
                    </div>

                    <!-- Selected Events -->
                    <div class="box selected-events" style="display: none;">
                        <h2>Selected Events</h2>
                        <p>Event 1</p>
                    </div>

                    <!-- Selected Regulations -->
                    <div class="box selected-regulations" style="display: none;">
                        <h2>Selected Regulations</h2>
                        <p>Regulation 1</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Ad space -->
        <div class="ad-space">
            <p>Ad Space</p>
        </div>
    </div>
</div>
@endsection