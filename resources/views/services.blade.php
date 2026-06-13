@extends('layouts.coco')

@section('title', '| SERVICES')

@section('content')
  <!-- ═══════════════════════════════════════
       HERO SECTION
  ═══════════════════════════════════════ -->
  <section class="hero-section-services" id="home">

    <!-- Sky background -->
    <img src="{{ asset('assets/background_top_services.png') }}" alt="" class="hero-bg-services" />

    <!-- Decorative: Flowers -->
    <img src="{{ asset('assets/pohon_services.png') }}" alt="" class="tree tree-sun" />
    <img src="{{ asset('assets/pohon_services.png') }}" alt="" class="tree tree-red" />

    <!-- Hero Content -->
    <div class="hero-content-services reveal">
      <h1 class="coco-text">Coco Services</h1>
    </div>

  </section>

  <!-- ═══════════════════════════════════════
       CARDS SERVICES
  ═══════════════════════════════════════ -->
  <section id="about" class="card-services-section">
    <img src="{{ asset('assets/background_service_polos.png') }}" alt="" class="card-services-bg" />

    <div class="cards-wrapper">
      <div class="card">
        <div class="card-img-wrap">
          <img src="{{ asset('assets/card_services1.png') }}" alt="Influencer Marketing" />
        </div>
        <div class="card-body">
          <h3 class="card-title">Influencer Marketing with Our Growing CocoNest</h3>
          <p class="card-desc">End to end KOL and media partnerships across social campaigns, livestreams, event activations, and long term collaborations.</p>
        </div>
      </div>

      <div class="card">
        <div class="card-img-wrap">
          <img src="{{ asset('assets/card_services2.png') }}" alt="Content Activation" />
        </div>
        <div class="card-body">
          <h3 class="card-title">Scaled Massive Content Activation</h3>
          <p class="card-desc">Ready to edit (RTE) content deployment, creator edited seeding, buzzer and massive comment flows, affiliate activation at scale, yellow card optimization, and conversion driven creator executions.</p>
        </div>
      </div>
    </div>

    <div class="cards-wrapper">
      <div class="card">
        <div class="card-img-wrap">
          <img src="{{ asset('assets/card_services3.png') }}" alt="Influencer Marketing" />
        </div>
        <div class="card-body">
          <h3 class="card-title">Blue Toggle TikTok Discovery Activation</h3>
          <p class="card-desc">Blue Toggle activation, keyword based discovery strategy, search intent positioning, and curiosity to click conversion on TikTok.</p>
        </div>
      </div>

      <div class="card">
        <div class="card-img-wrap">
          <img src="{{ asset('assets/card_services4.png') }}" alt="Content Activation" />
        </div>
        <div class="card-body">
          <h3 class="card-title">Always On Social Media Management</h3>
          <p class="card-desc">Social media maintenance, content production, content calendar and publishing, platform optimization, and consistent brand presence across social channels.</p>
        </div>
      </div>
    </div>

    <div class="cards-wrapper">
      <div class="card">
        <div class="card-img-wrap">
          <img src="{{ asset('assets/card_services5.png') }}" alt="Influencer Marketing" />
        </div>
        <div class="card-body">
          <h3 class="card-title">Campaign Website Development and Maintenance</h3>
          <p class="card-desc">Website development including launch countdown pages, checkout integration, and always on brand sites for both launches and daily needs.</p>
        </div>
      </div>

      <div class="card">
        <div class="card-img-wrap">
          <img src="{{ asset('assets/card_services6.png') }}" alt="Content Activation" />
        </div>
        <div class="card-body">
          <h3 class="card-title">Creator Logistics and Product Operations</h3>
          <p class="card-desc">Product receiving, storage, packing, and distribution for creators and affiliates, ensuring smooth execution across all campaign activations.</p>
        </div>
      </div>
    </div>

    <div class="cards-wrapper">
      <div class="card">
        <div class="card-img-wrap">
          <img src="{{ asset('assets/card_services7.png') }}" alt="Influencer Marketing" />
        </div>
        <div class="card-body">
          <h3 class="card-title">Payment Facilitators</h3>
          <p class="card-desc">Covers third party payment handling and fund disbursement to KOLs and creators, allowing the campaign to run smoothly without delays in creator payments.</p>
        </div>
      </div>

      <div class="card">
        <div class="card-img-wrap">
          <img src="{{ asset('assets/card_services8.png') }}" alt="Content Activation" />
        </div>
        <div class="card-body">
          <h3 class="card-title">Custom Brand Support Services</h3>
          <p class="card-desc">Flexible support tailored to client needs, including event handling, booth production, SPG staffing, and other campaign requirements.</p>
        </div>
      </div>
    </div>

    <!-- Decorative: Flowers -->
    <img src="{{ asset('assets/panah_services.png') }}" alt="" class="panah-services" />
    <img src="{{ asset('assets/tangan_services.png') }}" alt="" class="tangan-services" />
    <img src="{{ asset('assets/loading_services.png') }}" alt="" class="loading-services" />
    <img src="{{ asset('assets/file_services.png') }}" alt="" class="file-services" />
    <img src="{{ asset('assets/move_services.png') }}" alt="" class="move-services" />
    <img src="{{ asset('assets/timer_services.png') }}" alt="" class="timer-services" />
    <img src="{{ asset('assets/tangan_services2.png') }}" alt="" class="tangan2-services" />
  </section>
@endsection

