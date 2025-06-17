<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <!-- Font Awesome CDN (versi lengkap & aman) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Experience Silver Class Sidemen</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          poppins: ['Poppins', 'sans-serif'],
        },
        colors: {
          primary: '#2289dd',
          orange: '#ff5800',
          yellow: '#ffdc00'
        }
      }
    }
  }
  document.addEventListener('contextmenu', function (e) {
    e.preventDefault();
  });
</script>
<style>
  img {
    user-drag: none;
    user-select: none;
  }
  body {
    overflow-x: hidden;
  }
</style>
<body class="m-0 p-0 font-[Poppins]">

<div class="relative min-h-screen flex items-center justify-center text-center text-white bg-cover bg-center bg-white" style="background-image: url('https://cdn.getyourguide.com/img/tour/bddb7f1de04a6f5d.jpeg/98.jpg');" data-aos="fade-in" data-aos-duration="1500">
  <div class="absolute inset-0 bg-black bg-opacity-50"></div>
  <div class="relative z-10 container max-w-6xl px-6" data-aos="zoom-in-up" data-aos-delay="300">
    <p class="text-2xl font-semibold mb-4">Welcome to</p>
    <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6">Experience Silver Class Sidemen</h1>
    <p class="text-lg md:text-xl text-gray-200 mb-8">
      Discover exquisite silver craftsmanship in the heart of Sidemen. Quality, tradition, and elegance combined to create timeless jewelry.
    </p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="https://wa.me/6281234567890" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 px-8 rounded-lg shadow-md border-2 border-white text-lg transition">
        Book Now
      </a>
      <a href="#" id="openPopup" class="bg-white text-blue-600 font-semibold py-4 px-8 rounded-lg shadow-md border-2 border-blue-600 hover:bg-gray-100 text-lg transition">
        More Info
      </a>
    </div>
  </div>
</div>

<div id="popupCard" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center opacity-0 scale-95 pointer-events-none transition-all duration-300">
  <div class="bg-white w-[90%] max-w-sm p-6 rounded-lg shadow-lg text-center relative animate__animated animate__fadeIn">
    <!-- Tombol Close -->
    <button id="closePopup" class="absolute top-3 right-3 text-gray-400 hover:text-black text-xl">&times;</button>

    <h2 class="text-2xl font-bold mb-2">More Infos</h2>
    <p class="text-gray-600 mb-4">Laksmi Silver Class Ubud.</p>

    <div class="space-y-4">
      <a href="#about" class="text-blue-600 font-semibold block hover:underline">About Us</a>
      <a href="#package" class="text-blue-600 font-semibold block hover:underline">Our Package</a>
      <a href="#gallery" class="text-blue-600 font-semibold block hover:underline">Our Documentation</a>
      <a href="#review" class="text-blue-600 font-semibold block hover:underline">Our Review</a>
    </div>
  </div>
</div>

  <!-- About Section -->
  <section id="about" class="about-me" data-aos="fade-up">
    <div class="container mx-auto px-4 py-20">
      <h2 class="text-4xl font-bold text-center mb-8">About Us</h2>
      <p class="text-lg text-gray-700 text-center max-w-3xl mx-auto">
       Experience Sidemen Silver Class is a silver jewelry workshop in Sidemen, Bali, combining art, culture, and nature. This activity offers an authentic and personal experience, away from the hustle and bustle of popular tourist attractions. Participants are invited to be directly involved in the process of making Balinese silver jewelry with the guidance of local craftsmen, in the calm and natural environment of a traditional house.
      </p>
    </div>
  </section>


<?php require 'package.php'; ?>

  <!-- Why Choose Us -->
<section data-aos="fade-up">
  <div class="container mx-auto px-6 py-20">
    <h2 class="text-3xl font-bold text-center mb-8">Why Choose Us?</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-white p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="100">
        <i class="fas fa-chalkboard-teacher text-4xl text-blue-600 mb-4"></i>
        <h3 class="text-xl font-semibold mb-2">Experienced Instructors</h3>
        <p class="text-gray-700">Our artisans use traditional techniques to create beautiful, long-lasting silver jewelry.</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="200">
        <i class="fas fa-users text-4xl text-blue-600 mb-4"></i>
        <h3 class="text-xl font-semibold mb-2">Hands-On Sessions in Small Groups</h3>
        <p class="text-gray-700">Enjoy personalized and guided learning experiences in intimate group settings.</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="300">
        <i class="fas fa-gem text-4xl text-blue-600 mb-4"></i>
        <h3 class="text-xl font-semibold mb-2">Advanced Techniques & Professional Process</h3>
        <p class="text-gray-700">Master advanced skills like stone setting and casting while embracing ethical craftsmanship.</p>
      </div>
    </div>
  </div>
</section>

 <?php require 'gallery.php'; ?>\

<section class="img-payment bg-bl">
  <div class="img-scetion">
    <img src="" alt="">
  </div>
</section>

  <!-- Reviews -->
<section class="container mx-auto px-6 py-20" data-aos="fade-up">
    <h2 class="text-2xl font-bold mb-6 text-center">Customer Reviews</h2>
    <script src="https://static.elfsight.com/platform/platform.js" async></script>
    <div class="elfsight-app-97db08e9-7d92-4764-9b85-fe0214fb9284" data-elfsight-app-lazy></div>
  </section>

<?php require 'footer.php'; ?>

  <!-- AOS Script -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      once: true,
      duration: 1000
    });
  </script>
  <script>
  const openBtn = document.getElementById('openPopup');
  const closeBtn = document.getElementById('closePopup');
  const popup = document.getElementById('popupCard');

  openBtn.addEventListener('click', function (e) {
    e.preventDefault();
    popup.classList.remove('pointer-events-none', 'opacity-0', 'scale-95');
    popup.classList.add('opacity-100', 'scale-100');
  });

  closeBtn.addEventListener('click', function () {
    popup.classList.remove('opacity-100', 'scale-100');
    popup.classList.add('opacity-0', 'scale-95');
    setTimeout(() => {
      popup.classList.add('pointer-events-none');
    }, 300);
  });

  window.addEventListener('click', function (e) {
    if (e.target === popup) {
      popup.classList.remove('opacity-100', 'scale-100');
      popup.classList.add('opacity-0', 'scale-95');
      setTimeout(() => {
        popup.classList.add('pointer-events-none');
      }, 300);
    }
  });
</script>

</body>
</html>
