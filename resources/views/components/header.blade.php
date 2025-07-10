  <header class="bg-blue-900 text-white shadow-lg">
      <div class="container mx-auto px-4 py-3 flex justify-between items-center">
          <!-- Logo & Title -->
          <div class="flex items-center">
              <img src="https://upload.wikimedia.org/wikipedia/commons/1/15/Logo_Kementerian_Perhubungan_Indonesia_%28Kemenhub%29.png"
                  alt="Logo" class="h-10 md:h-14 mr-3" />
              <div>
                  <h1 class="text-lg md:text-2xl font-bold leading-tight">Kantor Kesyahbandaran dan Otoritas Pelabuhan
                      Utama Makassar</h1>
                  <p class="text-sm text-blue-200">Pelayanan</p>
              </div>
          </div>

          <!-- Hamburger Button -->
          <button class="md:hidden text-white focus:outline-none" onclick="toggleMenu()">
              <i class="fas fa-bars text-2xl"></i>
          </button>

          <!-- Menu Desktop -->
          <nav class="hidden md:flex space-x-6 text-white font-semibold">
              <a href="#home" class="hover:text-blue-300">Beranda</a>
              <a href="#pelayanan" class="hover:text-blue-300">Pelayanan</a>
              <a href="#kontak" class="hover:text-blue-300">Kontak</a>
              <a href="javascript:void(0)" onclick="toggleLoginModal()" class="hover:text-blue-300">Login</a>
          </nav>
      </div>

      <!-- Menu Mobile -->
      <div id="mobile-menu" class="md:hidden hidden bg-blue-800 px-4 pb-4">
          <nav class="flex flex-col space-y-2 text-white font-medium">
              <a href="#home" class="hover:text-blue-300">Beranda</a>
              <a href="#pelayanan" class="hover:text-blue-300">Pelayanan</a>
              <a href="#kontak" class="hover:text-blue-300">Kontak</a>
              <a href="javascript:void(0)" onclick="toggleLoginModal()" class="hover:text-blue-300">Login</a>
          </nav>
      </div>
  </header>

  <!-- Modal Login -->
  <div id="loginModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-50">
      <div class="bg-white w-full max-w-sm rounded-lg shadow-lg p-6 relative">
          <!-- Close button -->
          <button onclick="toggleLoginModal()"
              class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-xl">&times;</button>

          <h2 class="text-xl font-semibold mb-4 text-center text-blue-900">Login</h2>
          <form action="/login" method="POST">
              <!-- CSRF untuk Laravel -->
              <!-- @csrf -->
              <!-- Email -->
              <div class="mb-4">
                  <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
                  <input type="email" id="email" name="email"
                      class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      required>
              </div>
              <!-- Password -->
              <div class="mb-4">
                  <label for="password" class="block text-gray-700 font-medium mb-1">Password</label>
                  <input type="password" id="password" name="password"
                      class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                      required>
              </div>
              <!-- Button -->
              <div class="text-center">
                  <button type="submit"
                      class="bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-800">Login</button>
              </div>
          </form>
      </div>
  </div>
