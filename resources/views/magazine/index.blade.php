@extends('layouts.guest')

@section('website')
<div class="page page-magazine">
    <div class="page-header">
        <h1 class="page-header-title">Your Magazine</h1>
        <p class="page-header-subtitle">Welcome Karl</p>
    </div>
    <div class="page-content container">
        <div class="row">
            <div class="page-menu col-lg-3">
                <div class="page-menu-content">
                    <ul>
                        <li>
                            <a href="#">Registration Edit</a>
                        </li>
                        <li>
                            <a href="#">Inspiration Explorer</a>
                        </li>
                        <li>
                            <a href="#">Industry Explorer</a>
                        </li>
                        <li class="active">
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
            <div class="page-immediate-content col-lg-9">
                <div class="page-magazine-content">
                    <div class="row">
                        <div class="magazine-browse-articles col-lg-8">
                            <div class="magazine-browse-articles-header">
                                <h2>Browse Articles</h2>
                                <p>Find the latest articles that match your interests</p>
                            </div>
                            <div class="magazine-browse-articles-content">
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

                                <!-- Articles -->
                                <div class="articles">
                                    <div class="article">
                                        <div class="article-header">
                                            <h3>Article Title</h3>
                                            <p>Friday 13th, 2024</p>
                                        </div>
                                        <div class="article-content">
                                            <p>Article Content</p>
                                        </div>
                                        <div class="article-footer">
                                            <a href="#"><i class="fa-solid fa-eye"></i> Read More</a>
                                            <a href="#"><i class="fa-regular fa-bookmark"></i> Bookmark</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="magazine-bookmarks col-lg-4">
                            <div class="magazine-bookmarks-header">
                                <h2>Bookmarks</h2>
                                <p>Find the articles you saved for later</p>
                            </div>
                            <div class="magazine-bookmarks-content">
                                <p>No Bookmarks</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Coming soon -->
        <div class="coming-soon">
            <h2>Coming Soon</h2>
            <p>Our magazine is currently under construction. Please check back later.</p>
        </div>

        <!-- Ad space -->
        <div class="ad-space">
            <p>Ad Space</p>
        </div>
    </div>
</div>
@endsection