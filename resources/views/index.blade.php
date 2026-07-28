@extends('layouts.coco')

@section('title', '| HOME')

@section('content')
  <!-- ═══════════════════════════════════════
       HERO SECTION
  ═══════════════════════════════════════ -->
  <section class="hero-section">
    <img src="{{ asset('assets/HomePage_hero.png') }}" alt="" class="hero-bg" />
    <div class="hero-overlay"></div>

    <img src="{{ asset('assets/Star 2.svg') }}" alt="" class="flower star-bottom-left" data-parallax="0.30" />
    <img src="{{ asset('assets/Star 1.svg') }}" alt="" class="flower star-right-mid" data-parallax="0.22" />

    <div class="hero-content">
      <h1>
        <span class="hero-serif">Connecting</span>
        <span class="hero-bold hero-title-underline">BRAND</span><br/>
        <span class="hero-serif">with the</span>
        <span class="hero-bold">RIGHT VOICES</span>
      </h1>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       WE ARE COCO
  ═══════════════════════════════════════ -->
  <section id="about" class="weare-section">
        <img src="{{ asset('assets/Home_page_section2.png') }}" alt="" class="weare-bg" />

        <div class="weare-body">
          <div class="weare-text reveal">
            <div style="display: flex">
            <h2 class="weare-title">We <br>are </h2>
            <img src="{{ asset('assets/Coco_Metal.svg') }}" alt="COCO Digital Agency" class="weare-logo" />
            </div>
            <div class="weare-rule"></div>
            <p class="weare-desc reveal reveal-delay-1">
              The digital partner helping brands navigate the evolving landscape
              of culture, media, and technology. Crafting campaigns and experiences
              that spark connection, relevance, and measurable impact."
            </p>
          </div>
        </div>

        <div class="torn-bottom">
          <div class="torn-sky">
            <img src="{{ asset('assets/Star 1.svg') }}" alt="" class="weare-plane weare-plane-left img-weare-star" />
          </div>
        </div>
      </section>

  <!-- ═══════════════════════════════════════
       OUR BELIEF SYSTEM SECTION
  ═══════════════════════════════════════ -->
  <section id="values" class="belief-section">

    <video class="hero-bg" autoplay muted loop playsinline poster="{{ asset('assets/Home_page_section3.png') }}">
      <source src="{{ asset('assets/vidios/ourclienthome.mp4') }}" type="video/mp4" />
      <!-- fallback opsional -->
      Your browser does not support the video tag.
    </video>

    <div class="belief-inner">

      <div class="belief-title-wrap reveal">
        <h2 class="belief-title-our">Our</h2>
        <h2 class="belief-title">Belief System</h2>
      </div>

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

        <div class="belief-card reveal reveal-delay-2">
          <div class="belief-icon2">
            <img src="{{ asset('assets/icons/right_voice.png') }}" alt="Right Voices > Loud Voices" class="belief-icon" />
          </div>
          <h3 class="belief-card-title">Right Voices &gt; Loud Voices</h3>
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

