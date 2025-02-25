<footer class="bg-gray-900 text-white py-8">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
      <!-- Company Info -->
      <div>
        <h2 class="text-xl font-bold">Company Name</h2>
        <p class="mt-2 text-gray-400">Providing quality services since 2024.</p>
      </div>
      
      <!-- Navigation -->
      <div>
        <h2 class="text-xl font-bold">Quick Links</h2>
        <ul class="mt-2 space-y-2">
          <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white">About</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white">Services</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
        </ul>
      </div>
      
      <!-- Social Media -->
      <div>
        <h2 class="text-xl font-bold">Follow Us</h2>
        <div class="flex justify-center md:justify-start space-x-4 mt-2">
          <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>
    </div>
    
    <div class="border-t border-gray-700 mt-6 pt-4 text-center text-gray-400 text-sm">
      &copy; 2025 Company Name. All rights reserved.
    </div>
  </div>
</footer>

<script>
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    menuBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  </script>