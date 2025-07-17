<!-- Elegant Font -->
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet" />

<nav class="w-full bg-pink-100 border-b border-pink-200 shadow-md font-[Quicksand]">
  <div class="max-w-7xl mx-auto px-8 py-6 flex flex-wrap items-center justify-between">
    
    <!-- Logo and Brand -->
    <a href="https://flowbite.com/" class="flex items-center gap-4">
      <img src="https://flowbite.com/docs/images/logo.svg" class="h-10" alt="Flowbite Logo" />
      <span class="text-3xl font-bold text-pink-700">Flowbite</span>
    </a>

    <!-- Search and Menu (Right Side) -->
    <div class="flex items-center gap-4 md:gap-6">
      
      <!-- Search Icon (Mobile) -->
      <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-pink-600 hover:bg-pink-200 focus:ring-4 focus:ring-pink-300 rounded-lg text-sm p-2.5">
        <svg class="w-5 h-5" fill="none" viewBox="0 0 20 20" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>
        <span class="sr-only">Search</span>
      </button>

      <!-- Desktop Search Input -->
      <div class="relative hidden md:block">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          <svg class="w-4 h-4 text-pink-500" fill="none" viewBox="0 0 20 20" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
          </svg>
        </div>
        <input type="text" id="search-navbar-desktop" class="block w-64 p-2 ps-10 text-sm text-pink-900 border border-pink-300 rounded-lg bg-pink-50 focus:ring-pink-500 focus:border-pink-500" placeholder="Search...">
      </div>

      <!-- Hamburger (Mobile) -->
      <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-pink-600 rounded-lg md:hidden hover:bg-pink-200 focus:outline-none focus:ring-2 focus:ring-pink-300" aria-controls="navbar-search" aria-expanded="false">
        <svg class="w-5 h-5" fill="none" viewBox="0 0 17 14" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
        <span class="sr-only">Open main menu</span>
      </button>
    </div>

    <!-- Collapsible Mobile Section -->
    <div class="w-full md:flex md:items-center md:justify-between mt-6 md:mt-0 hidden" id="navbar-search">
      
      <!-- Mobile Search Input -->
      <div class="relative mb-4 md:hidden">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          <svg class="w-4 h-4 text-pink-500" fill="none" viewBox="0 0 20 20" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
          </svg>
        </div>
        <input type="text" id="search-navbar-mobile" class="block w-full p-2 ps-10 text-sm text-pink-900 border border-pink-300 rounded-lg bg-pink-50 focus:ring-pink-500 focus:border-pink-500" placeholder="Search...">
      </div>

      <!-- Nav Links -->
      <ul class="flex flex-col gap-2 md:flex-row md:gap-x-12 font-medium text-lg text-pink-800">
        <li>
          <a href="index.php" class="block py-2 px-3 rounded-md bg-pink-600 text-white md:bg-transparent md:text-pink-700 md:hover:text-pink-600">create</a>
        </li>
        <li>
          <a href="home.php" class="block py-2 px-3 rounded-md hover:bg-pink-200 md:hover:bg-transparent md:hover:text-pink-600">home</a>
        </li>
        <li>
          <a href="contact.php" class="block py-2 px-3 rounded-md hover:bg-pink-200 md:hover:bg-transparent md:hover:text-pink-600">timeline</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Flowbite JS for toggle support -->
<script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>

