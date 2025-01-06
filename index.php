<?php get_header(); ?>

<div class="container mx-auto mt-8 max-w-screen-lg">
  <!-- Začátek karty -->
  <div class="flex bg-white shadow-lg rounded-lg overflow-hidden mb-8">
    <!-- Obrázek vlevo -->
    <div class="w-1/3">
      <a href="#">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/default.jpg" class="w-full h-full object-cover" alt="Custom image">
      </a>
    </div>

    <!-- Obsah karty -->
    <div class="w-2/3 p-6 flex flex-col justify-between">
      <!-- Vlastní kategorie -->
      <div class="text-sm text-purple-600 font-semibold uppercase mb-2">
        AKCE ŠKOLY
      </div>

      <!-- Vlastní nadpis -->
      <h2 class="text-2xl font-bold text-gray-800 mb-3">
        <a href="#" class="hover:text-purple-600">
		idk bruv
        </a>
      </h2>

      <!-- Vlastní úryvek -->
      <p class="text-gray-700 mb-4">
        skibidi dop dop dop dop yes skibidi WWWWWW
      </p>

      <!-- Odkaz na celý obsah -->
      <a href="#" class="text-blue-500 font-semibold hover:underline">
        Číst více...
      </a>

      <!-- Autor a Datum -->
      <div class="text-sm text-gray-500 mt-4">
        Autor: <span class="font-semibold">Skibidi Travis</span> | 12. prosince 2024
      </div>
    </div>
  </div>
</div>
