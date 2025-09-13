<?php $page_title = "Sneak Peek"; ?>
<?php include('partials/header.php'); ?>
<?php include('partials/navbar.php'); ?>

<!-- Page Header -->
<section class="bg-iu-red text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl font-bold mb-4">2026 Sneak Peek</h1>
        <p class="text-xl">Preview of the upcoming yearbook</p>
    </div>
</section>

<!-- Sneak Peek Content -->
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="mb-12">
            <div class="bg-iu-cream p-12 rounded-lg">
                <h2 class="text-3xl font-bold text-iu-red mb-6">Coming Soon!</h2>
                <p class="text-xl text-gray-700 mb-8">
                    Stay tuned for upcoming sneak peeks of the 2026 Arbutus yearbook!
                </p>
                <p class="text-lg text-gray-600 mb-8">
                    We're hard at work capturing the best moments of campus life, student achievements, and memorable events. 
                    Check back here throughout the year for exclusive previews of what will be featured in your yearbook.
                </p>
                <a href="order.php" class="btn-primary mr-4">Pre-Order Your Copy</a>
                <a href="get-involved.php" class="btn-primary bg-gray-600 hover:bg-gray-700">Join Our Team</a>
            </div>
        </div>
        
        <!-- Preview Placeholder -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-gray-100 p-8 rounded-lg">
                <h3 class="text-xl font-bold text-iu-red mb-4">Student Life</h3>
                <div class="h-48 bg-gray-200 rounded mb-4 flex items-center justify-center">
                    <span class="text-gray-500">Preview Coming Soon</span>
                </div>
                <p class="text-gray-700">Capturing the essence of campus life and student experiences.</p>
            </div>
            
            <div class="bg-gray-100 p-8 rounded-lg">
                <h3 class="text-xl font-bold text-iu-red mb-4">Sports & Events</h3>
                <div class="h-48 bg-gray-200 rounded mb-4 flex items-center justify-center">
                    <span class="text-gray-500">Preview Coming Soon</span>
                </div>
                <p class="text-gray-700">Highlighting athletic achievements and campus events.</p>
            </div>
        </div>
        
        <!-- Newsletter Signup -->
        <div class="bg-white border border-iu-red p-8 rounded-lg">
            <h3 class="text-2xl font-bold text-iu-red mb-4">Get Notified</h3>
            <p class="text-gray-700 mb-6">
                Want to be the first to see sneak peeks? Contact us to stay updated on new previews and yearbook news.
            </p>
            <a href="contact.php" class="btn-primary">Contact Us</a>
        </div>
    </div>
</section>

<!-- CTA Blocks -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Portraits Info -->
            <div class="text-center p-6 bg-white border border-gray-200 rounded-lg">
                <h3 class="text-xl font-bold text-iu-red mb-4">Portraits</h3>
                <p class="text-gray-700">Watch this space for 2026 Arbutus portrait information.</p>
            </div>
            
            <!-- Order Info -->
            <div class="text-center p-6 bg-white border border-gray-200 rounded-lg">
                <h3 class="text-xl font-bold text-iu-red mb-4">Order a yearbook</h3>
                <p class="text-gray-700 mb-4">
                    <a href="order.php" class="text-iu-red hover:underline font-semibold">Order your 2026 IU yearbook today!</a>
                </p>
            </div>
            
            <!-- Delivery Info -->
            <div class="text-center p-6 bg-white border border-gray-200 rounded-lg">
                <h3 class="text-xl font-bold text-iu-red mb-4">When will I get my yearbook?</h3>
                <p class="text-gray-700">2026 yearbooks are scheduled to be shipped beginning late June 2026.</p>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>
<?php include('partials/scripts.php'); ?>