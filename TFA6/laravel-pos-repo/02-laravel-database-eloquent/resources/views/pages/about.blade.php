@extends('layouts.app')

@section('title', 'About')

@section('content')
    <section class="page-heading about-heading">
        <span class="eyebrow">ABOUT THE PROJECT</span>
        <h1>Same MVC ideas, a new framework.</h1>
        <p>This POS exercise rebuilds a simple account directory with Laravel. Each part has one clear responsibility.</p>
    </section>

    <section class="mvc-grid" aria-label="MVC responsibilities">
        <article class="mvc-card"><span class="step-number">01</span><span class="eyebrow">ROUTE</span><h2>Choose the destination</h2><p>A route in <code>routes/web.php</code> maps a URL to the controller method that should handle it.</p></article>
        <article class="mvc-card"><span class="step-number">02</span><span class="eyebrow">CONTROLLER</span><h2>Prepare the page data</h2><p>A controller queries the Customer or User Eloquent model and passes the resulting records to a view.</p></article>
        <article class="mvc-card"><span class="step-number">03</span><span class="eyebrow">BLADE VIEW</span><h2>Render the response</h2><p>A Blade template displays the page and uses <code>@foreach</code> to render each database record.</p></article>
    </section>

    <div class="callout"><strong>For this activity</strong><span>Migrations define the customers and users tables, seeders add sample records, and Eloquent models retrieve those records for the account pages.</span></div>
@endsection
