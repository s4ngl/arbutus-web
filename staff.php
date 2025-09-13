<?php $page_title = "Staff"; ?>
<?php include('partials/header.php'); ?>
<?php include('partials/navbar.php'); ?>

<!-- Page Header -->
<section class="bg-iu-red text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl font-bold mb-4">Staff</h1>
        <p class="text-xl">Meet the Arbutus Yearbook Team</p>
    </div>
</section>

<!-- Staff Content -->
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Current Staff -->
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-iu-red mb-8 text-center">2025 Leadership</h2>
            
            <!-- Editor-in-Chief -->
            <div class="bg-iu-cream p-8 rounded-lg text-center">
                <div class="max-w-md mx-auto">
                    <div class="mb-6">
                        <img src="images/natalie-fitzgibbons.jpg" alt="Natalie Fitzgibbons" class="w-48 h-48 object-cover rounded-full mx-auto shadow-lg" onerror="this.style.display='none'">
                    </div>
                    <h3 class="text-2xl font-bold text-iu-red mb-2">Natalie Fitzgibbons</h3>
                    <p class="text-lg text-gray-700 mb-4 font-semibold">2025 Editor-in-chief</p>
                    <p class="text-gray-700 mb-6">
                        Leading the Arbutus team with a focus on history and maintaining our rich tradition of storytelling that captures the essence of the IU experience.
                    </p>
                    <a href="mailto:arbutuseditor@idsnews.com" class="btn-primary">Contact Editor</a>
                </div>
            </div>
        </div>
        
        <!-- Staff Opportunities -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white border border-gray-200 p-6 rounded-lg">
                <h3 class="text-xl font-bold text-iu-red mb-4">Join Our Team</h3>
                <p class="text-gray-700 mb-4">
                    We're always looking for talented writers, photographers, and editors to join our award-winning team.
                </p>
                <a href="get-involved.php" class="text-iu-red hover:underline font-semibold">Learn More →</a>
            </div>
            
            <div class="bg-white border border-gray-200 p-6 rounded-lg">
                <h3 class="text-xl font-bold text-iu-red mb-4">Contact the Team</h3>
                <p class="text-gray-700 mb-4">
                    Have questions about the yearbook or want to contribute? We'd love to hear from you.
                </p>
                <a href="contact.php" class="text-iu-red hover:underline font-semibold">Get in Touch →</a>
            </div>
        </div>
        
        <!-- Historical Note -->
        <div class="bg-gray-50 p-8 rounded-lg text-center">
            <h3 class="text-2xl font-bold text-iu-red mb-4">Our Legacy</h3>
            <p class="text-lg text-gray-700 mb-6">
                With a focus on history, the Arbutus staff has a rich tradition of storytelling that dates back to 1894. 
                Each year, our dedicated team works to capture the unique spirit and memorable moments of the Indiana University community.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                <div>
                    <h4 class="text-xl font-bold text-iu-red">130+</h4>
                    <p class="text-gray-600">Years of Excellence</p>
                </div>
                <div>
                    <h4 class="text-xl font-bold text-iu-red">Award</h4>
                    <p class="text-gray-600">Winning Publication</p>
                </div>
                <div>
                    <h4 class="text-xl font-bold text-iu-red">Student</h4>
                    <p class="text-gray-600">Run Organization</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Alumni & Previous Staff -->
<section class="py-16 bg-iu-cream">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-iu-red mb-8">Alumni Network</h2>
        <p class="text-lg text-gray-700 mb-8">
            Our staff alumni have gone on to successful careers in journalism, photography, publishing, and various other fields. 
            The experience gained working on the Arbutus provides valuable skills that serve our graduates throughout their careers.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-lg">
                <h3 class="text-xl font-bold text-iu-red mb-4">Professional Development</h3>
                <p class="text-gray-700">
                    Working on Arbutus provides hands-on experience in journalism, design, photography, and project management.
                </p>
            </div>
            <div class="bg-white p-6 rounded-lg">
                <h3 class="text-xl font-bold text-iu-red mb-4">Networking Opportunities</h3>
                <p class="text-gray-700">
                    Connect with fellow students and media professionals within the Indiana University Student Media network.
                </p>
            </div>
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