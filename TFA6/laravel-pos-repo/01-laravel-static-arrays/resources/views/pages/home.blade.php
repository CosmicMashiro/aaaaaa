@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="hero">
        <div class="hero-copy">
            <span class="eyebrow">POINT OF SALE · LARAVEL EDITION</span>
            <h1>Manage your store accounts in one place.</h1>
            <p class="hero-text">A small Laravel application that shows how routes, controllers, and Blade views work together in an MVC structure.</p>
            <div class="hero-actions">
                <a class="button button-primary" href="{{ route('customers') }}">Browse customers <span aria-hidden="true">→</span></a>
                <a class="button button-secondary" href="{{ route('about') }}">How it works</a>
            </div>
        </div>
        <div class="hero-card" aria-label="Application overview">
            <div class="hero-card-top"><span class="status-dot"></span> STORE OVERVIEW <span class="live-label">DEMO</span></div>
            <div class="hero-stat"><span>Customer records</span><strong>05</strong></div>
            <div class="hero-stat"><span>User accounts</span><strong>05</strong></div>
            <div class="hero-note"><span class="note-icon">✓</span><span>Four pages connected with Laravel routes</span></div>
        </div>
    </section>

    <section class="section-block">
        <div class="section-heading">
            <div><span class="eyebrow">QUICK ACCESS</span><h2>Account directories</h2></div>
            <p>Open a directory to view sample records.</p>
        </div>
        <div class="feature-grid">
            <a class="feature-card" href="{{ route('customers') }}">
                <span class="feature-icon feature-coral">C</span>
                <span class="feature-label">CUSTOMER ACCOUNTS</span>
                <strong>Customer directory</strong>
                <span class="feature-bottom">View customer records <span aria-hidden="true">↗</span></span>
            </a>
            <a class="feature-card" href="{{ route('users') }}">
                <span class="feature-icon feature-blue">U</span>
                <span class="feature-label">TEAM ACCESS</span>
                <strong>User directory</strong>
                <span class="feature-bottom">View team accounts <span aria-hidden="true">↗</span></span>
            </a>
            <a class="feature-card" href="{{ route('about') }}">
                <span class="feature-icon feature-green">i</span>
                <span class="feature-label">ABOUT THIS PROJECT</span>
                <strong>Explore the structure</strong>
                <span class="feature-bottom">See the MVC flow <span aria-hidden="true">↗</span></span>
            </a>
        </div>
    </section>
@endsection
