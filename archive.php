<?php $page_title = "Archive"; ?>
<?php include('partials/header.php'); ?>
<?php include('partials/navbar.php'); ?>

<!-- Page Header -->
<section class="bg-iu-red text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl font-bold mb-4">Yearbook Archive</h1>
        <p class="text-xl">Travel back in time with our collection</p>
    </div>
</section>

<!-- Archive Content -->
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Archive Introduction -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-iu-red mb-6">Browse Historical Yearbooks</h2>
            <p class="text-lg text-gray-700 mb-8">
                Travel back in time with a visit to our yearbook archive. Explore decades of Indiana University history through the pages of past Arbutus yearbooks.
            </p>
        </div>
        
        <!-- Featured Archive Image -->
        <div class="mb-12 text-center">
            <img src="images/yearbook-archive.jpg" alt="Yearbook Archive Collection" class="w-full max-w-2xl mx-auto h-80 object-cover rounded-lg shadow-lg" onerror="this.style.display='none'">
        </div>
        
        <!-- Archive Access -->
        <div class="bg-iu-cream p-8 rounded-lg mb-12 text-center">
            <h3 class="text-2xl font-bold text-iu-red mb-6">View Archived Yearbooks Online</h3>
            <p class="text-lg text-gray-700 mb-8">
                Our complete collection of historical Arbutus yearbooks is available to browse online through our digital archive partner.
            </p>
            <a href="https://issuu.com/arbutusyearbook" target="_blank" rel="noopener noreferrer" class="btn-primary text-lg mr-4">
                Browse Digital Archive
            </a>
            <p class="text-sm text-gray-600 mt-4">*Opens in new window - Hosted on Issuu</p>
        </div>
        
        <!-- Archive Highlights -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <div class="bg-white border border-gray-200 p-6 rounded-lg text-center">
                <h4 class="text-lg font-bold text-iu-red mb-3">1894-1920s</h4>
                <p class="text-gray-700 text-sm mb-4">Early years and founding era of the Arbutus tradition</p>
                <div class="h-32 bg-gray-100 rounded mb-3 flex items-center justify-center">
                    <span class="text-gray-500 text-sm">Historical Collection</span>
                </div>
            </div>
            
            <div class="bg-white border border-gray-200 p-6 rounded-lg text-center">
                <h4 class="text-lg font-bold text-iu-red mb-3">1930s-1960s</h4>
                <p class="text-gray-700 text-sm mb-4">Mid-century campus life and major developments</p>
                <div class="h-32 bg-gray-100 rounded mb-3 flex items-center justify-center">
                    <span class="text-gray-500 text-sm">Golden Era</span>
                </div>
            </div>
            
            <div class="bg-white border border-gray-200 p-6 rounded-lg text-center">
                <h4 class="text-lg font-bold text-iu-red mb-3">1970s-Present</h4>
                <p class="text-gray-700 text-sm mb-4">Modern era and contemporary campus culture</p>
                <div class="h-32 bg-gray-100 rounded mb-3 flex items-center justify-center">
                    <span class="text-gray-500 text-sm">Modern Collection</span>
                </div>
            </div>
        </div>
        
        <!-- Research & Usage -->
        <div class="bg-gray-50 p-8 rounded-lg mb-12">
            <h3 class="text-2xl font-bold text-iu-red mb-6">Research and Educational Use</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-3">For Researchers</h4>
                    <p class="text-gray-700 mb-4">
                        The Arbutus archive serves as a valuable resource for historians, students, and researchers studying Indiana University's development and student life through the decades.
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-3">For Alumni</h4>
                    <p class="text-gray-700 mb-4">
                        Rediscover your college years or explore IU's history. The archive provides a nostalgic journey through campus memories and milestones.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Contact for Physical Access -->
        <div class="bg-white border border-iu-red p-8 rounded-lg text-center">
            <h3 class="text-2xl font-bold text-iu-red mb-4">Physical Archive Access</h3>
            <p class="text-lg text-gray-700 mb-6">
                Need access to physical copies or have questions about specific years? Contact our team for assistance with archive research.
            </p>
            <a href="contact.php" class="btn-primary">Contact Archive Team</a>
        </div>
    </div>
</section>

<!-- Recent Yearbooks Preview -->
<section class="py-16 bg-iu-cream">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-iu-red mb-8">Recent Editions</h2>
        <p class="text-lg text-gray-700 mb-12">
            Explore some of our most recent yearbook editions to see how the Arbutus continues to evolve while maintaining its core mission.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="h-48 bg-gray-200 rounded mb-4 flex items-center justify-center">
                    <span class="text-gray-500">2023 Edition</span>
                </div>
                <h4 class="text-lg font-bold text-iu-red">2023 Arbutus</h4>
                <p class="text-gray-600 text-sm">Latest completed edition</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="h-48 bg-gray-200 rounded mb-4 flex items-center justify-center">
                    <span class="text-gray-500">2022 Edition</span>
                </div>
                <h4 class="text-lg font-bold text-iu-red">2022 Arbutus</h4>
                <p class="text-gray-600 text-sm">Post-pandemic campus return</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md border-2 border-iu-red">
                <div class="h-48 bg-iu-cream rounded mb-4 flex items-center justify-center">
                    <span class="text-iu-red font-semibold">2026 Edition</span>
                </div>
                <h4 class="text-lg font-bold text-iu-red">2026 Arbutus</h4>
                <p class="text-gray-600 text-sm">Currently in production</p>
                <a href="order.php" class="text-iu-red hover:underline text-sm font-semibold">Pre-Order Now →</a>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>
<?php include('partials/scripts.php'); ?>