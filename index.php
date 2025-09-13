<?php $page_title = "Home"; ?>
<?php include('partials/header.php'); ?>
<?php include('partials/navbar.php'); ?>

<!-- Hero Section -->
<section class="relative bg-iu-red text-white">
    <div class="absolute inset-0">
        <img src="images/yearbook-cover-2018.jpg" alt="2018 Yearbook Cover" class="w-full h-full object-cover opacity-20" onerror="this.style.display='none'">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 text-center">
        <h1 class="text-responsive-2xl font-bold mb-6">Order your Arbutus yearbook for only $75</h1>
        <p class="text-xl mb-8 max-w-3xl mx-auto">Take a peek at photos and stories you will see in the yearbook.</p>
        <a href="order.php" class="btn-primary text-lg px-8 py-3">Order Your Yearbook</a>
    </div>
</section>

<!-- Join Our Staff Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-iu-red mb-6">Join our staff</h2>
                <p class="text-lg text-gray-700 mb-6">Get experience working on an award-winning student publication. Writers, photographers and copy editors needed year-round.</p>
                <a href="get-involved.php" class="btn-primary">Get Involved</a>
            </div>
            <div>
                <img src="images/portraits.jpg" alt="Arbutus Staff" class="w-full h-64 object-cover rounded-lg shadow-lg" onerror="this.style.display='none'">
            </div>
        </div>
    </div>
</section>

<!-- Current Editor Highlight -->
<section class="py-16 bg-iu-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <img src="images/natalie-fitzgibbons.jpg" alt="Natalie Fitzgibbons - editor-in-chief" class="w-full h-80 object-cover rounded-lg shadow-lg" onerror="this.style.display='none'">
            </div>
            <div>
                <h2 class="text-3xl font-bold text-iu-red mb-6">Meet Our Editor-in-Chief</h2>
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Natalie Fitzgibbons</h3>
                <p class="text-lg text-gray-700 mb-6">With a focus on history, the Arbutus staff has a rich tradition of storytelling.</p>
                <a href="staff.php" class="btn-primary">Meet the Staff</a>
            </div>
        </div>
    </div>
</section>

<!-- Archive Teaser -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-iu-red mb-6">Yearbook Archive</h2>
                <p class="text-lg text-gray-700 mb-6">Travel back in time with a visit to our yearbook archive.</p>
                <a href="archive.php" class="btn-primary">Browse Archive</a>
            </div>
            <div>
                <img src="images/yearbook-archive.jpg" alt="Yearbook Archive" class="w-full h-64 object-cover rounded-lg shadow-lg" onerror="this.style.display='none'">
            </div>
        </div>
    </div>
</section>

<!-- News/Caption Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <img src="images/herman-mask.jpg" alt="Herman B Wells statue with face mask" class="w-full max-w-2xl mx-auto h-80 object-cover rounded-lg shadow-lg mb-6" onerror="this.style.display='none'">
            <p class="text-lg text-gray-700 italic">A face mask covers the face of the Herman B Wells statue April 20, 2020 on IU's campus.</p>
        </div>
    </div>
</section>

<!-- CTA Buttons Section -->
<section class="py-16 bg-iu-red text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-8">Get Your 2026 Yearbook</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <a href="order.php" class="bg-white text-iu-red py-6 px-8 rounded-lg font-semibold text-lg hover:bg-iu-cream transition-colors">
                    Order a Book
                </a>
                <a href="portraits.php" class="bg-white text-iu-red py-6 px-8 rounded-lg font-semibold text-lg hover:bg-iu-cream transition-colors">
                    Portraits
                </a>
                <a href="sneakpeek.php" class="bg-white text-iu-red py-6 px-8 rounded-lg font-semibold text-lg hover:bg-iu-cream transition-colors">
                    Sneak Peek
                </a>
            </div>
        </div>
    </div>
</section>

<!-- General Info Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Portraits Info -->
            <div class="text-center p-6 border border-gray-200 rounded-lg">
                <h3 class="text-xl font-bold text-iu-red mb-4">Portraits</h3>
                <p class="text-gray-700">Watch this space for 2026 Arbutus portrait information.</p>
            </div>
            
            <!-- Order Info -->
            <div class="text-center p-6 border border-gray-200 rounded-lg">
                <h3 class="text-xl font-bold text-iu-red mb-4">Order a yearbook</h3>
                <p class="text-gray-700 mb-4">
                    <a href="order.php" class="text-iu-red hover:underline font-semibold">Order your 2026 IU yearbook today!</a>
                </p>
            </div>
            
            <!-- Delivery Info -->
            <div class="text-center p-6 border border-gray-200 rounded-lg">
                <h3 class="text-xl font-bold text-iu-red mb-4">When will I get my yearbook?</h3>
                <p class="text-gray-700">2026 yearbooks are scheduled to be shipped beginning late June 2026.</p>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>
<?php include('partials/scripts.php'); ?>