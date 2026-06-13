@extends('layouts.coco')

@section('title', '| CLIENT')

@section('content')
  <!-- ═══════════════════════════════════════
       HERO SECTION (Our Client)
  ═══════════════════════════════════════ -->
  <section class="hero-section-services" id="home">

    <!-- Sky background -->
    <img src="{{ asset('assets/ourclient/background_top.png') }}" alt="" class="hero-bg-services" />

    <!-- Hero Content -->
    <div class="hero-content-services reveal">
      <h1 class="coco-text">Our Client</h1>
    </div>

  </section>

  <!-- ═══════════════════════════════════════
       CLIENT LOGOS
  ═══════════════════════════════════════ -->
  <section class="card-our-client-section">
    <div class="clients-section">
      <div class="clients-grid">
        <img src="{{ asset('assets/ourclient/wardah.png') }}" alt="Wardah">
        <img src="{{ asset('assets/ourclient/makeover.png') }}" alt="Makeover">
        <img src="{{ asset('assets/ourclient/aqua.png') }}" alt="Aqua">
        <img src="{{ asset('assets/ourclient/kahf.png') }}" alt="Kahf">
        <img src="{{ asset('assets/ourclient/emina.png') }}" alt="Emina">
        <img src="{{ asset('assets/ourclient/yamaha.png') }}" alt="Yamaha">
        <img src="{{ asset('assets/ourclient/gatsby.png') }}" alt="Gatsby">
        <img src="{{ asset('assets/ourclient/omg.png') }}" alt="OMG Oh My Glam">
        <img src="{{ asset('assets/ourclient/sagmoto.png') }}" alt="Sagivoto">
        <img src="{{ asset('assets/ourclient/rituals.png') }}" alt="Rituals">
        <img src="{{ asset('assets/ourclient/lovessemprong.png') }}" alt="Loves Semprong">
        <img src="{{ asset('assets/ourclient/bravo.png') }}" alt="Bravo">
        <img src="{{ asset('assets/ourclient/rotio.png') }}" alt="RotiO">
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       GET IN TOUCH
  ═══════════════════════════════════════ -->
  <section class="card-client-section" id="about">
    <div class="contact-section">
      <h2 class="contact-title">Get in Touch</h2>
      <div class="contact-divider"></div>

<form class="contact-form" method="POST" action="{{ route('contact-messages.store') }}">
        @csrf

        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" placeholder="Enter your name here" required />
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" placeholder="Enter your email here" required />
        </div>

        <div class="form-group">
          <label>Phone</label>
          <input type="tel" name="phone" placeholder="Enter your phone here" />
        </div>

        <div class="form-group">
          <label>Message</label>
          <textarea name="message" placeholder="Type your message" required></textarea>
        </div>

<button type="submit" class="btn-send" data-log-action="send_message">Send Message</button>
      </form>


      <img src="{{ asset('assets/ourclient/bunga.png') }}" class="bunga bunga-right" />
      <img src="{{ asset('assets/ourclient/bunga.png') }}" class="bunga bunga-left" />
    </div>
  </section>
@endsection


