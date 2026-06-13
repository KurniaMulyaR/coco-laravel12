@extends('layouts.coco')

@section('title', '| HOME')

@section('content')
  <!-- ═══════════════════════════════════════
       HERO SECTION
  ═══════════════════════════════════════ -->
  <section class="hero-section" id="home">

    <!-- Sky background -->
    <img src="{{ asset('assets/background_coco.png') }}" alt="" class="hero-bg" />

    <!-- Decorative: Flowers -->
    <img src="{{ asset('assets/panah.png') }}" alt="" class="flower panah" />
    <img src="{{ asset('assets/bungamatahari.png') }}" alt="" class="flower flower-sun" />
    <img src="{{ asset('assets/bungamerah.png') }}" alt="" class="flower flower-red" />
    <img src="{{ asset('assets/bungaputih.png') }}" alt="" class="flower flower-white" />
    <img src="{{ asset('assets/bungapink.png') }}" alt="" class="flower flower-pink" />

    <!-- Hero Content -->
    <div class="hero-content">
      <h1>
        <b class="hero-title"><u class="hero-title-underline">Connectin</u>g<u class="hero-title-underline"> Brand</u></b><br/>
        <span class="hero-title-dua"><i>with the</i></span><b class="hero-title"><em> Right Voices</em></b>
      </h1>
    </div>

  </section>

  <!-- ═══════════════════════════════════════
       WE ARE COCO
  ═══════════════════════════════════════ -->
  <section id="about" class="weare-section">
    <img src="{{ asset('assets/background_mid.png') }}" alt="" class="weare-bg" />

    <div class="weare-body">
      <div class="weare-grid">

        <!-- Left: Text -->
        <div class="weare-text reveal">
          <h2 class="weare-title">We are COCO</h2>
          <div class="weare-rule"></div>
          <p class="weare-desc reveal reveal-delay-1">
            The digital partner helping brands navigate the evolving landscape of culture, media, and technology.
            Crafting campaigns and experiences that spark connection, relevance, and measurable impact."
          </p>
        </div>

        <!-- Right: Logo -->
        <div class="weare-logo-wrap reveal reveal-delay-2">
          <img src="{{ asset('assets/logo_coco.png') }}" alt="COCO Digital Agency" class="weare-logo" />
        </div>

      </div>
    </div>

    <!-- Torn paper bottom edge with sky bg + paper planes -->
    <div class="torn-bottom">
      <div class="torn-sky">
        <!-- Paper planes -->
        <img src="{{ asset('assets/pesawat_kiri.png') }}" alt="" class="weare-plane weare-plane-left" />
        <img src="{{ asset('assets/pesawat_kanan.png') }}" alt="" class="weare-plane weare-plane-right" />
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       OUR BELIEF SYSTEM SECTION
  ═══════════════════════════════════════ -->
  <section id="values" class="belief-section">
    <img src="{{ asset('assets/background_bootom.png') }}" alt="" class="belief-bg" />

    <div class="belief-inner">

      <!-- Title badge -->
      <div class="belief-title-wrap reveal">
        <h2 class="belief-title">Our Belief System</h2>
      </div>

      <!-- Row 1: 3 cards -->
      <div class="belief-row belief-row-3">

        <div class="belief-card reveal reveal-delay-1">
          <div class="belief-icon2">
            <img src="{{ asset('assets/icons/Relevance_wins.png') }}" alt="Relevance Wins" class="belief-icon" />
          </div>
          <h3 class="belief-card-title">Relevance Wins</h3>
          <p class="belief-card-desc">
            If it does not matter to people, it will not matter to brands. We focus on deeply understanding the audience so every story feels meaningful and drives real impact.
          </p>
        </div>

        <!-- Decorative: Balloons -->
        <img src="{{ asset('assets/balon_besar.png') }}" alt="" class="balloon balloon-large" />
        <img src="{{ asset('assets/balon_kecil.png') }}" alt="" class="balloon balloon-small" />

        <div class="belief-card reveal reveal-delay-2">
          <div class="belief-icon2">
            <img src="{{ asset('assets/icons/right_voice.png') }}" alt="Right Voices > Loud Voices" class="belief-icon" />
          </div>
          <h3 class="belief-card-title">Right Voices > Loud Voices</h3>
          <p class="belief-card-desc">
            Influence is not about being the loudest. It is about being trusted. We choose voices that create genuine connection, not just impressive numbers.
          </p>
        </div>

        <div class="belief-card reveal reveal-delay-3">
          <div class="belief-icon2">
            <img src="{{ asset('assets/icons/build_perform.png') }}" alt="Build to Perform" class="belief-icon" style="width: 90px" />
          </div>
          <h3 class="belief-card-title">Build to Perform</h3>
          <p class="belief-card-desc">
            Every idea has a clear purpose. We design campaigns that are not only visually strong but also deliver measurable results.
          </p>
        </div>

      </div>

      <!-- Row 2: 2 cards centered -->
      <div class="belief-row belief-row-2">

        <div class="belief-card reveal reveal-delay-1">
          <div class="belief-icon2">
            <img src="{{ asset('assets/icons/culture_before.png') }}" alt="Culture Before Clicks" class="belief-icon" />
          </div>
          <h3 class="belief-card-title">Culture Before Clicks</h3>
          <p class="belief-card-desc">
            We do not chase reach alone. We work within culture and behavior to create campaigns that feel natural, relevant, and lasting.
          </p>
        </div>

        <div class="belief-card reveal reveal-delay-2">
          <div class="belief-icon2">
            <img src="{{ asset('assets/icons/always_motion.png') }}" alt="Always in Motion" class="belief-icon" />
          </div>
          <h3 class="belief-card-title">Always in Motion</h3>
          <p class="belief-card-desc">
            Campaigns are never static. We continuously learn from performance and adapt quickly to drive stronger outcomes.
          </p>
        </div>

      </div>

    </div>
  </section>
@endsection

