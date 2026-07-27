@extends('layouts.coco')

@section('title', '| SERVICES')

@section('content')
  <!-- ═══════════════════════════════════════
       HERO SECTION
  ═══════════════════════════════════════ -->
  <section class="hero-section-services" id="home">

    <!-- Sky background -->
    <img src="{{ asset('assets/HomePage_hero.png') }}" alt="" class="hero-bg-services" />

    <!-- Decorative: Paper Planes -->
    <!-- <img src="assets/pesawat_kanan.png" alt="" class="plane plane-right" />
    <img src="assets/pesawat_kiri.png"  alt="" class="plane plane-left"  /> -->

    <!-- Decorative: Balloons -->
    <!-- <img src="assets/balon_besar.png" alt="" class="balloon balloon-large" />
    <img src="assets/balon_kecil.png" alt="" class="balloon balloon-small" /> -->

    <!-- Decorative: Flowers -->
    <img src="{{ asset('assets/Star 2.svg') }}" alt="" class="flower star-bottom-left" data-parallax="0.30" />
    <img src="{{ asset('assets/Star 1.svg') }}" alt="" class="flower star-right-mid" data-parallax="0.22" />

    <!-- Hero Content -->
    <div class="hero-content-services reveal">
      <h1 class="coco-text">
        <span class="hero-serif">COCO</span>
        <span class="hero-bold">SERVICES</span>
      </h1> 
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       CARDS SERVICES
  ═══════════════════════════════════════ -->
  <section id="about" class="card-services-section">
        <video class="hero-bg" autoplay muted loop playsinline poster="{{ asset('assets/Home_page_section3.png') }}">
          <source src="{{ asset('assets/vidios/ServicesPage.mp4') }}" type="video/mp4" />
          <!-- fallback opsional -->
          Your browser does not support the video tag.
        </video>

        <div class="cards-wrapper">
          
          <div class="card card1">
            <div class="info-box">
              <p class="eyebrow">Influencer Marketing with</p>
              <h2 class="headline">Our Growing Coconest</h2>
              <p class="desc">End to end KOL and media partnerships across social campaigns, livestreams, event activations, and long term collaborations.</p>
            </div>
          </div>

          <div class="card card2">
            <div class="info-box">
              <p class="eyebrow">Scaled Massive</p>
                <h2 class="headline">Content Activation</h2>
                <p class="desc">Ready to edit (RTE) content deployment, creator edited seeding, buzzer and massive comment flow, affiliate activation at scale, yellow card optimization, and conversion driven creator executions.</p>
            </div>
          </div>

          <div class="card card3">
            <div class="info-box">
                <p class="eyebrow">Blue Toggle TikTok</p>
                <h2 class="headline">Discount Activation</h2>
                <p class="desc">Blue Widget activation, keyword based discovery, strategy, search underperforming ad accounts to affiliate marketing on TikTok.</p>
            </div>
          </div>

          <div class="card card4">
            <div class="info-box">
              <p class="eyebrow">Always On</p>
              <h2 class="headline">Social Media Management</h2>
              <p class="desc">Social media content creation, content calendar production, publishing, performance monitoring, and community engagement.</p>
            </div>
          </div>

          <div class="card card5">
            <div class="info-box">
               <p class="eyebrow">Campaign Website</p>
            <h2 class="headline">Development and Maintanance</h2>
            <p class="desc">Website development including launch countdown pages, checkout integration, and always on brand sites for both launches and daily needs.</p>
            </div>
          </div>

          <div class="card card6">
            <div class="info-box">
               <h2 class="headline">Creator Logistics and Product Operations</h2>
               <p class="desc">Product receiving, storage, packing, and distribution for creators and affiliates, ensuring smooth execution across all campaign activations.</p>
            </div>
          </div>

          <div class="card card7">
            <div class="info-box">
                <h2 class="headline">Payment Facilitators</h2>
                <p class="desc">Covers third party payment handling and fund disbursement to KOLs and creators, allowing for smooth and timely delivery without delays in creator payments.</p>
            </div>
          </div>

          <div class="card card8">
            <div class="info-box">
              <p class="eyebrow">Custom Brand</p>
              <h2 class="headline">Support Services</h2>
              <p class="desc">Flexible support tailored to client needs, including event handling, booth production, SPG staffing, and other campaign requirements.</p>
            </div>
        </div>
    </section>
@endsection

