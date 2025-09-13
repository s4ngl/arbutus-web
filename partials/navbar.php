<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo/Brand -->
            <div class="flex items-center">
                <a href="index.php" class="flex items-center">
                    <img src="images/arbutus-text-logo.svg" alt="Arbutus Yearbook" class="h-8 w-auto mr-2" onerror="this.style.display='none'">
                    <span class="text-xl font-bold text-iu-red">Arbutus Yearbook</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="order.php" class="text-gray-700 hover:text-iu-red px-3 py-2 text-sm font-medium transition-colors">Order a Book</a>
                <a href="portraits.php" class="text-gray-700 hover:text-iu-red px-3 py-2 text-sm font-medium transition-colors">Portraits</a>
                <a href="sneakpeek.php" class="text-gray-700 hover:text-iu-red px-3 py-2 text-sm font-medium transition-colors">Sneak Peek</a>
                <a href="get-involved.php" class="text-gray-700 hover:text-iu-red px-3 py-2 text-sm font-medium transition-colors">Get Involved</a>
                <a href="staff.php" class="text-gray-700 hover:text-iu-red px-3 py-2 text-sm font-medium transition-colors">Staff</a>
                <a href="about.php" class="text-gray-700 hover:text-iu-red px-3 py-2 text-sm font-medium transition-colors">About Us</a>
                <a href="archive.php" class="text-gray-700 hover:text-iu-red px-3 py-2 text-sm font-medium transition-colors">Archive</a>
                <a href="advertise.php" class="text-gray-700 hover:text-iu-red px-3 py-2 text-sm font-medium transition-colors">Advertise</a>
                <a href="contact.php" class="text-gray-700 hover:text-iu-red px-3 py-2 text-sm font-medium transition-colors">Contact</a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button type="button" id="nav-toggle" class="hamburger" aria-controls="mobile-menu" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="md:hidden hidden" id="nav-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white shadow-lg">
            <a href="order.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-iu-red hover:bg-iu-cream transition-colors">Order a Book</a>
            <a href="portraits.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-iu-red hover:bg-iu-cream transition-colors">Portraits</a>
            <a href="sneakpeek.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-iu-red hover:bg-iu-cream transition-colors">Sneak Peek</a>
            <a href="get-involved.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-iu-red hover:bg-iu-cream transition-colors">Get Involved</a>
            <a href="staff.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-iu-red hover:bg-iu-cream transition-colors">Staff</a>
            <a href="about.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-iu-red hover:bg-iu-cream transition-colors">About Us</a>
            <a href="archive.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-iu-red hover:bg-iu-cream transition-colors">Archive</a>
            <a href="advertise.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-iu-red hover:bg-iu-cream transition-colors">Advertise</a>
            <a href="contact.php" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-iu-red hover:bg-iu-cream transition-colors">Contact</a>
        </div>
    </div>
</nav>