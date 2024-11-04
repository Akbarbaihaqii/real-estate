<html>
 <head>
  <title>
   RealEstate
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
  </style>
 </head>
 <body class="bg-gray-100">
  <!-- Header -->
  <header class="bg-blue-700 text-white">
   <div class="container mx-auto flex justify-between items-center py-4 px-6">
    <div class="text-2xl font-bold">
     RealEstate
    </div>
    <nav class="space-x-4">
    <a class="hover:underline" href="{{ url('/') }}">Home</a>
    <a class="hover:underline" href="#">About</a>
    <a class="hover:underline" href="#">Contact</a>
    <a class="hover:underline" href="profile.blade.php">Profile</a>
</nav>

   </div>
  </header>
  <!-- Hero Section -->
  <section class="relative">
   <img alt="Modern house with large windows and a pool" class="w-full h-96 object-cover" height="600" src="https://storage.googleapis.com/a1aa/image/3beeo9foCVB9UJFjsMAZufAX3UC4D6n6FlU8X0Y4KowvJqjOB.jpg" width="1920"/>
   <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white">
    <h1 class="text-3xl md:text-3x2 font-bold mb-4">
     Please find your dream home
    </h1>
    <div class="flex">
     <input class="p-2 rounded-l-lg w-34 md:w-96" placeholder="Search Your Future Home" type="text"/>
     <button class="bg-blue-700 p-2 rounded-r-lg">
      Search
     </button>
    </div>
   </div>
  </section>

  <!-- Popular Properties -->
  <section class="container mx-auto py-12">
   <h2 class="text-2xl font-bold mb-6">
    Popular Properties
   </h2>
   <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
     <img alt="Modern house with large windows" class="w-full h-48 object-cover" height="200" src="https://storage.googleapis.com/a1aa/image/e2TEyxzWc2UfF0cHD92SWJaLgU5DG6theNKHK8qTEwG5E1RnA.jpg" width="300"/>
     <div class="p-4">
      <p class="text-blue-700 font-bold">
       Rp. 5,000,000
      </p>
      <p class="text-gray-600">
       Jl. Example Street, Spec, No.1
      </p>
      <p class="text-gray-800 font-bold">
       Bandar Lampung
      </p>
     </div>
    </div>
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
     <img alt="Modern house with large windows" class="w-full h-48 object-cover" height="200" src="https://storage.googleapis.com/a1aa/image/e2TEyxzWc2UfF0cHD92SWJaLgU5DG6theNKHK8qTEwG5E1RnA.jpg" width="300"/>
     <div class="p-4">
      <p class="text-blue-700 font-bold">
       Rp. 5,000,000
      </p>
      <p class="text-gray-600">
       Jl. Example Street, Spec, No.1
      </p>
      <p class="text-gray-800 font-bold">
       Bandar Lampung
      </p>
     </div>
    </div>
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
     <img alt="Modern house with large windows" class="w-full h-48 object-cover" height="200" src="https://storage.googleapis.com/a1aa/image/e2TEyxzWc2UfF0cHD92SWJaLgU5DG6theNKHK8qTEwG5E1RnA.jpg" width="300"/>
     <div class="p-4">
      <p class="text-blue-700 font-bold">
       Rp. 5,000,000
      </p>
      <p class="text-gray-600">
       Jl. Example Street, Spec, No.1
      </p>
      <p class="text-gray-800 font-bold">
       Bandar Lampung
      </p>
     </div>
    </div>
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
     <img alt="Modern house with large windows" class="w-full h-48 object-cover" height="200" src="https://storage.googleapis.com/a1aa/image/e2TEyxzWc2UfF0cHD92SWJaLgU5DG6theNKHK8qTEwG5E1RnA.jpg" width="300"/>
     <div class="p-4">
      <p class="text-blue-700 font-bold">
       Rp. 5,000,000
      </p>
      <p class="text-gray-600">
       Jl. Example Street, Spec, No.1
      </p>
      <p class="text-gray-800 font-bold">
       Bandar Lampung
      </p>
     </div>
    </div>
   </div>
   <div class="flex justify-center mt-6">
    <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-l-lg">
     Prev
    </button>
    <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-r-lg">
     Next
    </button>
   </div>
  </section>
  <!-- Services -->
  <section class="bg-gray-200 py-12">
   <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-6">
    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
     <i class="fas fa-home text-4xl text-blue-700 mb-4">
     </i>
     <h3 class="text-xl font-bold mb-2">
      Our Properties
     </h3>
     <p class="text-gray-600">
     Jelajahi pilihan properti terbaik untuk dijual dan disewakan. Setiap listing dilengkapi deskripsi lengkap, gambar, harga, serta informasi penting seperti jumlah kamar dan fasilitas. Temukan properti yang sesuai dengan kebutuhan Anda dengan fitur pencarian kami.     </p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
     <i class="fas fa-dollar-sign text-4xl text-blue-700 mb-4">
     </i>
     <h3 class="text-xl font-bold mb-2">
      Property For Sale
     </h3>
     <p class="text-gray-600">
     Cari properti impian Anda dari pilihan terbaik kami yang tersedia untuk dijual. Setiap properti dilengkapi dengan informasi lengkap, harga, dan gambar untuk membantu Anda menemukan rumah yang sesuai dengan kebutuhan dan anggaran.     </p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
     <i class="fas fa-user-tie text-4xl text-blue-700 mb-4">
     </i>
     <h3 class="text-xl font-bold mb-2">
      Real Estate Agent
     </h3>
     <p class="text-gray-600">
     Temukan agen real estate terpercaya yang siap membantu Anda dalam setiap langkah pembelian, penjualan, atau penyewaan properti. Dengan keahlian dan pengetahuan pasar, agen kami akan memastikan Anda mendapatkan layanan terbaik.     </p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
     <i class="fas fa-sign text-4xl text-blue-700 mb-4">
     </i>
     <h3 class="text-xl font-bold mb-2">
      House For Sale
     </h3>
     <p class="text-gray-600">
     Temukan rumah impian Anda dari koleksi rumah yang dijual. Setiap listing dilengkapi dengan detail lengkap, gambar, dan harga, sehingga Anda dapat dengan mudah menemukan rumah yang sesuai dengan keinginan dan kebutuhan Anda.     </p>
    </div>
   </div>
  </section>
  <!-- Agents -->
  <section class="container mx-auto py-12">
   <h2 class="text-2xl font-bold mb-6 text-center text-blue-700">
    Our Agents
   </h2>
   <p class="text-center text-gray-600 mb-12">
    Tim agen profesional kami siap membantu Anda menemukan properti terbaik. Dengan pengalaman luas dan pengetahuan mendalam tentang pasar properti, kami memberikan layanan yang personal dan mendalam. Anda dapat mengandalkan kami untuk pembelian, penjualan, maupun sewa properti.
   </p>
   <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
     <div class="w-24 h-24 bg-gray-300 rounded-full mx-auto mb-4">
     </div>
     <h3 class="text-xl font-bold mb-2">
      Aimar Abie Pasah
     </h3>
     <p class="text-gray-600">
      NPM: 2217051121
     </p>
     <div class="flex justify-center space-x-4 mt-4">
      <a class="text-blue-700" href="#">
       <i class="fab fa-instagram">
       </i>
      </a>
      <a class="text-blue-700" href="#">
       <i class="fab fa-whatsapp">
       </i>
      </a>
     </div>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
     <div class="w-24 h-24 bg-gray-300 rounded-full mx-auto mb-4">
     </div>
     <h3 class="text-xl font-bold mb-2">
      Devrinatasyah
     </h3>
     <p class="text-gray-600">
      NPM: 2257051029
     </p>
     <div class="flex justify-center space-x-4 mt-4">
      <a class="text-blue-700" href="#">
       <i class="fab fa-instagram">
       </i>
      </a>
      <a class="text-blue-700" href="#">
       <i class="fab fa-whatsapp">
       </i>
      </a>
     </div>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
     <div class="w-24 h-24 bg-gray-300 rounded-full mx-auto mb-4">
     </div>
     <h3 class="text-xl font-bold mb-2">
      Akbar Baihaqi
     </h3>
     <p class="text-gray-600">
      NPM: 2257051002
     </p>
     <div class="flex justify-center space-x-4 mt-4">
      <a class="text-blue-700" href="#">
       <i class="fab fa-instagram">
       </i>
      </a>
      <a class="text-blue-700" href="#">
       <i class="fab fa-whatsapp">
       </i>
      </a>
     </div>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
     <div class="w-24 h-24 bg-gray-300 rounded-full mx-auto mb-4">
     </div>
     <h3 class="text-xl font-bold mb-2">
      Suntan Jundi
     </h3>
     <p class="text-gray-600">
      NPM: 2217051021
     </p>
     <div class="flex justify-center space-x-4 mt-4">
      <a class="text-blue-700" href="#">
       <i class="fab fa-instagram">
       </i>
      </a>
      <a class="text-blue-700" href="#">
       <i class="fab fa-whatsapp">
       </i>
      </a>
     </div>
    </div>
   </div>
  </section>
  <!-- Contact -->
  <section class="bg-gray-200 py-12">
   <div class="container mx-auto text-center">
    <h2 class="text-2xl font-bold mb-6">
     CONTACT
    </h2>
    <p class="text-gray-600 mb-4">
     Bandar Lampung
    </p>
    <p class="text-gray-600 mb-4">
     +62812345678910
    </p>
    <p class="text-gray-600">
     +62812345678910
    </p>
   </div>
  </section>
  <!-- Footer -->
  <footer class="bg-blue-700 text-white py-4">
   <div class="container mx-auto text-center">
    <p>
     Desain by kelompok 6 web lanjut
    </p>
   </div>
  </footer>
 </body>
</html>