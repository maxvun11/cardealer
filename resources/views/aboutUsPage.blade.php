@extends('layouts.app')

@section('title', 'About Us Page')

@section('content')
<style>
    .about-hero {
        min-height: 520px;
        display: flex;
        align-items: center;
        background:
            linear-gradient(90deg, rgba(17, 24, 39, 0.94) 0%, rgba(17, 24, 39, 0.78) 48%, rgba(17, 24, 39, 0.25) 100%),
            url('{{ asset("images/banner.jpg") }}') center 58% / cover no-repeat;
        color: #fff;
    }

    .about-hero__eyebrow {
        color: #f93c1e;
        font-size: 14px;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
    }

    .about-hero h1 {
        max-width: 680px;
        margin: 16px 0 20px;
        color: #fff;
        font-size: clamp(42px, 6vw, 72px);
        line-height: 1.02;
        font-weight: 800;
    }

    .about-hero p {
        max-width: 600px;
        margin-bottom: 0;
        color: rgba(255, 255, 255, 0.82);
        font-size: 18px;
        line-height: 1.7;
    }

    .about-story {
        padding: 110px 0 100px;
        background: #f5f5f5;
    }

    .about-story__heading {
        margin-bottom: 48px;
    }

    .about-story__heading span {
        color: #f93c1e;
        font-size: 14px;
        font-weight: 700;
        letter-spacing: 2.5px;
        text-transform: uppercase;
    }

    .about-story__heading h2 {
        margin-top: 10px;
        color: #232323;
        font-size: clamp(34px, 5vw, 52px);
        line-height: 1.12;
        font-weight: 800;
    }

    .about-story__heading h2::after {
        content: "";
        display: block;
        width: 72px;
        height: 4px;
        margin-top: 22px;
        background: #f93c1e;
    }

    .about-story__intro {
        max-width: 540px;
        color: #5c626a;
        font-size: 17px;
        line-height: 1.85;
    }

    .about-feature {
        min-height: 430px;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 38px;
        border-radius: 18px;
        background:
            linear-gradient(180deg, rgba(12, 18, 27, 0.05), rgba(12, 18, 27, 0.88)),
            var(--feature-image) center / cover no-repeat;
        overflow: hidden;
        box-shadow: 0 18px 45px rgba(24, 32, 42, 0.12);
        transition: transform 0.35s ease, box-shadow 0.35s ease;
    }

    .about-feature:hover {
        transform: translateY(-6px);
        box-shadow: 0 24px 55px rgba(24, 32, 42, 0.18);
    }

    .about-feature__number {
        color: #f93c1e;
        font-size: 13px;
        font-weight: 800;
        letter-spacing: 2px;
    }

    .about-feature h3 {
        margin: 8px 0 12px;
        color: #fff;
        font-size: 28px;
        font-weight: 800;
    }

    .about-feature p {
        max-width: 400px;
        margin: 0;
        color: rgba(255, 255, 255, 0.78);
        line-height: 1.65;
    }

    .about-values {
        padding: 90px 0;
        background: #232323;
        color: #fff;
    }

    .about-values h2 {
        margin-bottom: 45px;
        color: #fff;
        font-size: clamp(32px, 4vw, 46px);
        font-weight: 800;
        text-align: center;
    }

    .value-card {
        height: 100%;
        padding: 34px 28px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: 14px;
        background: rgba(255, 255, 255, 0.035);
        text-align: center;
    }

    .value-card i {
        display: block;
        margin-bottom: 18px;
        color: #f93c1e;
        font-size: 30px;
    }

    .value-card h3 {
        color: #fff;
        font-size: 21px;
        font-weight: 700;
    }

    .value-card p {
        margin: 12px 0 0;
        color: rgba(255, 255, 255, 0.68);
        line-height: 1.65;
    }

    @media (max-width: 767px) {
        .about-hero {
            min-height: 440px;
            background:
                linear-gradient(90deg, rgba(17, 24, 39, 0.92), rgba(17, 24, 39, 0.55)),
                url('{{ asset("images/banner.jpg") }}') center / cover no-repeat;
        }

        .about-story {
            padding: 70px 0;
        }

        .about-story__heading {
            margin-bottom: 24px;
        }

        .about-story__intro {
            margin-bottom: 36px;
        }

        .about-feature {
            min-height: 360px;
            margin-bottom: 20px;
        }

        .about-values {
            padding: 70px 0;
        }

        .value-card {
            margin-bottom: 18px;
        }
    }
</style>

<section class="about-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <span class="about-hero__eyebrow">Our story</span>
                <h1>Driven by a passion for cars.</h1>
                <p>We make finding your next car straightforward, transparent and personal—from the first conversation to every mile after.</p>
            </div>
        </div>
    </div>
</section>

<section class="about-story">
    <div class="container">
        <div class="row align-items-end about-story__heading">
            <div class="col-lg-6">
                <span>Humble beginnings</span>
                <h2>Built around people who love cars.</h2>
            </div>
            <div class="col-lg-6">
                <p class="about-story__intro">Pythogorax began with a simple idea: buying a car should feel exciting, never complicated. We combine trusted service, carefully selected vehicles and a friendly team that puts your needs first.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <article class="about-feature" style="--feature-image: url('{{ asset('images/img1.png') }}')">
                    <span class="about-feature__number">01 / WHO WE ARE</span>
                    <h3>Car people, first</h3>
                    <p>Our team understands what makes each vehicle special—and helps you find the one that fits your life.</p>
                </article>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <article class="about-feature" style="--feature-image: url('{{ asset('images/banner.jpg') }}')">
                    <span class="about-feature__number">02 / HOW WE HELP</span>
                    <h3>Clear guidance</h3>
                    <p>From viewing to purchase and after-sales care, you receive honest advice and support at every step.</p>
                </article>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <article class="about-feature" style="--feature-image: url('{{ asset('images/tes.jpg') }}')">
                    <span class="about-feature__number">03 / WHERE WE ARE GOING</span>
                    <h3>Always moving forward</h3>
                    <p>We continue to improve our selection and service so every visit feels easier than the last.</p>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="about-values">
    <div class="container">
        <h2>What matters to us</h2>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="value-card">
                    <i class="fas fa-handshake"></i>
                    <h3>Trust</h3>
                    <p>Open conversations and straightforward answers, from the showroom to the road.</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="value-card">
                    <i class="fas fa-star"></i>
                    <h3>Quality</h3>
                    <p>A considered vehicle selection, presented with care and attention to detail.</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="value-card">
                    <i class="fas fa-road"></i>
                    <h3>Long-term care</h3>
                    <p>Support that continues after your purchase, for confidence in every journey.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection