@extends('layouts.coco')

@section('title', '| CLIENT')

@section('content')
  <!-- ═══════════════════════════════════════
       HERO SECTION (Our Client)
  ═══════════════════════════════════════ -->
  <section class="hero-section-services" id="home">

    <!-- Sky background -->
    <img src="{{ asset('assets/HomePage_hero.png') }}" alt="" class="hero-bg-services" />

    <img src="{{ asset('assets/Star 2.svg') }}" alt="" class="flower star-bottom-left" data-parallax="0.30" />
    <img src="{{ asset('assets/Star 1.svg') }}" alt="" class="flower star-right-mid" data-parallax="0.22" />


    <!-- Hero Content -->
    <div class="hero-content-services reveal">
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
      <div class="stage" data-speed="26" data-dir="cw"></div>
      <div class="stage" data-speed="26" data-dir="cw"></div>
      <div class="stage" data-speed="26" data-dir="cw"></div>
    </div>
  </section>
  <!-- ═══════════════════════════════════════
       GET IN TOUCH
  ═══════════════════════════════════════ -->
  <section id="about" class="card-client-section">

        <video class="client-bg" autoplay muted loop playsinline poster="{{ asset('assets/Home_page_section3.png') }}">
          <source src="{{ asset('assets/vidios/OurClientsPage.mp4') }}" type="video/mp4" />
          <!-- fallback opsional -->
          Your browser does not support the video tag.
        </video>
      <form class="form-card" method="POST" action="{{ route('contact-messages.store') }}">
        @csrf
        <h1 class="form-title">Get In Touch</h1>
        <div class="divider"></div>
    
        <div class="field"> 
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Enter your name here" required>
        </div>
    
        <div class="field">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter your email here" required>
        </div>
    
        <div class="field">
          <label for="phone">Phone</label>
          <input type="tel" id="phone" name="phone" placeholder="Enter your phone here">
        </div>
    
        <div class="field">
          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="Type your message" required></textarea>
        </div>
    
        <div class="submit-row">
          <button type="submit" class="submit-btn" data-log-action="send_message">Send Message</button>
        </div>
      </form>
    </section>
    </div>
  </section>

    <script>
    // set logo per baris di sini — ganti "src" dengan path/URL gambar logo kamu
    const rows = [
      [
        { name: "Wardah",  src: "assets/ourclient/wardah.png" },
        { name: "MakeOver",    src: "assets/ourclient/makeover.png" },
        { name: "Aqua",  src: "assets/ourclient/aqua.png" },
        { name: "Kahf", src: "assets/ourclient/kahf.png" },
        { name: "Tavi", src: "assets/ourclient/tavi.png" },
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
@endsection

@section('scripts')
  <script>
    // set logo per baris di sini — ganti "src" dengan path/URL gambar logo kamu
    const rows = [
      [
        { name: "Wardah",  src: "{{ asset('assets/ourclient/wardah.png') }}" },
        { name: "MakeOver",    src: "{{ asset('assets/ourclient/makeover.png') }}" },
        { name: "Aqua",  src: "{{ asset('assets/ourclient/aqua.png') }}" },
        { name: "Kahf", src: "{{ asset('assets/ourclient/kahf.png') }}" },
        { name: "Tavi", src: "{{ asset('assets/ourclient/tavi.png') }}" },
        { name: "Azzura", src: "{{ asset('assets/ourclient/azzura.png') }}" }
      ],
      [
        { name: "emina",  src: "{{ asset('assets/ourclient/emina.png') }}" },
        { name: "Yamaha",   src: "{{ asset('assets/ourclient/yamaha.png') }}" },
        { name: "Gatsby", src: "{{ asset('assets/ourclient/gatsby.png') }}" },
        { name: "OMG", src: "{{ asset('assets/ourclient/omg.png') }}" },
        { name: "Labore", src: "{{ asset('assets/ourclient/labore.png') }}" },
        { name: "Poise", src: "{{ asset('assets/ourclient/poise.png') }}" },
        { name: "Emeron", src: "{{ asset('assets/ourclient/emeron.png') }}" }
      ],
      [
        { name: "sagmoto",   src: "{{ asset('assets/ourclient/sagmoto.png') }}" },
        { name: "Rituals",  src: "{{ asset('assets/ourclient/rituals.png') }}" },
        { name: "Loves", src: "{{ asset('assets/ourclient/lovessemprong.png') }}" },
        { name: "BraVo",  src: "{{ asset('assets/ourclient/bravo.png') }}" },
        { name: "RotiO", src: "{{ asset('assets/ourclient/rotio.png') }}" },
        { name: "Barakat",  src: "{{ asset('assets/ourclient/barakat.png') }}" }
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
@endsection


