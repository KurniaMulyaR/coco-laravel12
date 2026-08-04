@section('title', '| CLIENT')

@extends('layouts.coco')

@section('content')
  <!-- ═══════════════════════════════════════
       HERO SECTION (Our Client)
  ═══════════════════════════════════════ -->
  <section class="hero-section" id="home">

    <!-- Sky background -->
    <video class="client-bg" autoplay muted loop playsinline poster="assets/Home_page_section3.png">
      <source src="{{asset('assets/vidios/Main_HomePage.mp4')}}" type="video/mp4" />
      <!-- fallback opsional -->
      Your browser does not support the video tag.
    </video>

    <!-- <img src="assets/Star 2.svg" alt="" class="flower star-bottom-left" data-parallax="0.30" />
    <img src="assets/Star 1.svg" alt="" class="flower star-right-mid" data-parallax="0.22" /> -->


    <!-- Hero Content -->
    <div class="hero-content">
      <h1>
        <span class="hero-serif">COCO </span>
        <span class="hero-bold">CLIENTS</span><br/>
    </div>
    
  </section>
  <!-- ═══════════════════════════════════════
       CLIENT LOGOS
  ═══════════════════════════════════════ -->
  <section class="card-our-client-section">
    <div class="clients-section">
      <div class="stage" data-speed="24" data-dir="cw"></div>
      <div class="stage" data-speed="25" data-dir="cw"></div>
      <div class="stage" data-speed="26" data-dir="cw"></div>
    </div>
  </section>
  <!-- ═══════════════════════════════════════
       GET IN TOUCH
  ═══════════════════════════════════════ -->
  <section id="about" class="card-client-section">

    <video class="client-bg" autoplay muted loop playsinline poster="assets/Home_page_section3.png">
      <source src="{{asset('assets/vidios/OurClientsPage.mp4')}}" type="video/mp4" />
      <!-- fallback opsional -->
      Your browser does not support the video tag.
    </video>
    <form class="form-card" action="{{ route('contact-messages.store') }}" method="POST">
      @csrf

      <h1 class="form-title">Get In Touch</h1>
      <div class="divider"></div>

      @if (session('success'))
        <p style="color:#3ff0dc; margin-bottom:16px;">{{ session('success') }}</p>
      @endif

      <div class="field">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name here" value="{{ old('name') }}" required>
        @error('name')
          <small style="color:#ff8080;">{{ $message }}</small>
        @enderror
      </div>

      <div class="field">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email here" value="{{ old('email') }}" required>
        @error('email')
          <small style="color:#ff8080;">{{ $message }}</small>
        @enderror
      </div>

      <div class="field">
        <label for="phone">Phone</label>
        <input type="number" inputmode="numeric" id="phone" name="phone" placeholder="Enter your phone here" value="{{ old('phone') }}">
        @error('phone')
          <small style="color:#ff8080;">{{ $message }}</small>
        @enderror
      </div>

      <div class="field">
        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Type your message">{{ old('message') }}</textarea>
        @error('message')
          <small style="color:#ff8080;">{{ $message }}</small>
        @enderror
      </div>
	
      <div class="submit-row">
        <button type="submit" class="submit-btn">Send Message</button>
      </div>
    </form>
  </section>
@endsection

@push('scripts')
  <script>
     // set logo per baris di sini — ganti "src" dengan path/URL gambar logo kamu
    const rows = [
      [
        { name: "Wardah",  src: "assets/ourclient/wardah.png" },
        { name: "MakeOver",    src: "assets/ourclient/makeover.png" },
        { name: "Aqua",  src: "assets/ourclient/aqua.png" },
        { name: "Kahf", src: "assets/ourclient/kahf.png" },
        { name: "Tavi", src: "assets/ourclient/Tavi.png" },
        { name: "Azzura", src: "assets/ourclient/azzura.png" }
      ],
      [
        { name: "emina",  src: "assets/ourclient/emina.png" },
        { name: "Yamaha",   src: "assets/ourclient/yamaha.png" },
        { name: "Gatsby", src: "assets/ourclient/gatsby.png" },
        { name: "OMG", src: "assets/ourclient/omg.png" },
        { name: "Labore", src: "assets/ourclient/labore.png" },
        { name: "Poise", src: "assets/ourclient/poise.png" },
        { name: "Emeron", src: "assets/ourclient/emeron.png" }
      ],
      [
        { name: "sagmoto",   src: "assets/ourclient/sagmoto.png" },
        { name: "Rituals",  src: "assets/ourclient/rituals.png" },
        { name: "Loves", src: "assets/ourclient/lovessemprong.png" },
        { name: "BraVo",  src: "assets/ourclient/bravo.png" },
        { name: "RotiO", src: "assets/ourclient/rotio.png" },
        { name: "Barakat",  src: "assets/ourclient/barakat.png" }
      ]
    ];
  
    const radius = 360; // makin kecil, makin lengkung ke dalam
  
    document.querySelectorAll('.stage').forEach((stage, rowIndex) => {
      const carousel = document.createElement('div');
      carousel.className = 'carousel';
  
      const arms = document.createElement('div');
      const dir = stage.dataset.dir === 'ccw' ? 'dir-ccw' : 'dir-cw';
      arms.className = `arms ${dir}`;
      arms.style.animationDuration = `${stage.dataset.speed}s`;
  
      const logos = rows[rowIndex] || [];
      const step = 360 / logos.length;
  
      logos.forEach((logo, i) => {
        const angle = i * step;
        const arm = document.createElement('div');
        arm.className = 'arm';
        // translateZ negatif -> tengah lebih jauh, tepi lebih dekat -> lengkung ke dalam
        arm.style.transform = `rotateY(${angle}deg) translateZ(-${radius}px)`;
        arm.innerHTML = `<img src="${logo.src}" alt="${logo.name}" loading="lazy">`;
        arms.appendChild(arm);
      });
  
      carousel.appendChild(arms);
      stage.appendChild(carousel);
    });
  </script>
@endpush


