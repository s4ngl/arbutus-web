<?php $page_title = "Order"; ?>
<?php include('partials/header.php'); ?>
<?php include('partials/navbar.php'); ?>

<!-- Page Header -->
<section class="bg-iu-red text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl font-bold mb-4">Order</h1>
        <p class="text-xl">Order your 2026 Arbutus yearbook</p>
    </div>
</section>

<!-- Order Information -->
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Intro -->
        <div class="mb-12">
            <p class="text-lg text-gray-700 leading-relaxed">
                A yearbook is a great way to take college life with you when you graduate. You'll be able to enjoy the award-winning coverage of student life, sports, clubs and more.
            </p>
        </div>

        <!-- IU Students Section -->
        <div class="bg-iu-cream p-8 rounded-lg mb-8">
            <h2 class="text-2xl font-bold text-iu-red mb-6">IU Students</h2>
            <p class="text-gray-700 mb-6">
                IU students: Reserve your copy today for only $75 and charge it to your bursar account. (Log in with your IU username to order.)
            </p>
            <a href="#" class="btn-primary text-lg">Click to order your 2026 Arbutus yearbook</a>
            <p class="text-sm text-gray-600 mt-4">*Links to IDS News Fireform</p>
        </div>

        <!-- Non-Students Section -->
        <div class="bg-gray-50 p-8 rounded-lg mb-8">
            <h2 class="text-2xl font-bold text-iu-red mb-6">Parents, Friends, or Businesses</h2>
            <p class="text-gray-700 mb-6">
                Parents, friends or businesses: Not an IU student? Everyone can enjoy an IU yearbook for the same student price of $75. Reserve yours today.
            </p>
            <a href="#" class="btn-primary text-lg">Click to order your 2026 Arbutus yearbook</a>
            <p class="text-sm text-gray-600 mt-4">*Links to Yearbook Order Center (Order #2432)</p>
        </div>

        <!-- Delivery Information -->
        <div class="bg-white border border-gray-200 p-8 rounded-lg mb-8">
            <h2 class="text-2xl font-bold text-iu-red mb-6">Delivery</h2>
            <p class="text-gray-700">
                2026 yearbooks are scheduled to be shipped beginning May 2026. If you chose the delivery option, your yearbook will be delivered to the address you provided when you placed your order. Yearbooks for pickup will be available on campus in June.
            </p>
        </div>

        <!-- Contact for Help -->
        <div class="text-center">
            <p class="text-lg text-gray-700">
                Questions about your order? 
                <a href="contact.php" class="text-iu-red hover:underline font-semibold">Contact us here</a>.
            </p>
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