<?php $page_title = "Contact Us"; ?>
<?php include('partials/header.php'); ?>
<?php include('partials/navbar.php'); ?>

<!-- Page Header -->
<section class="bg-iu-red text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl font-bold mb-4">Contact Us</h1>
        <p class="text-xl">Get in touch with the Arbutus team</p>
    </div>
</section>

<!-- Contact Content -->
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Main Contact Information -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-12">
            <!-- Primary Contact -->
            <div class="bg-iu-cream p-8 rounded-lg">
                <h3 class="text-2xl font-bold text-iu-red mb-6">Arbutus Yearbook</h3>
                <div class="space-y-4 text-gray-700">
                    <div>
                        <p class="font-semibold">IU Student Media</p>
                        <p>ARBUTUS YEARBOOK</p>
                        <p>601 E. Kirkwood Ave.</p>
                        <p>Bloomington, IN 47405</p>
                    </div>
                    <div>
                        <p><strong>Phone:</strong> <a href="tel:812-855-9737" class="text-iu-red hover:underline">812-855-9737</a></p>
                        <p><strong>Email:</strong> <a href="mailto:arbutus@iu.edu" class="text-iu-red hover:underline">arbutus@iu.edu</a></p>
                    </div>
                </div>
            </div>
            
            <!-- Editor Contact -->
            <div class="bg-gray-50 p-8 rounded-lg">
                <h3 class="text-2xl font-bold text-iu-red mb-6">Editor-in-Chief</h3>
                <div class="space-y-4 text-gray-700">
                    <div>
                        <p class="text-lg font-semibold">Natalie Fitzgibbons</p>
                        <p>2025 Editor-in-chief</p>
                    </div>
                    <div>
                        <p><strong>Email:</strong> <a href="mailto:arbutuseditor@idsnews.com" class="text-iu-red hover:underline">arbutuseditor@idsnews.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Advertising Department -->
        <div class="bg-white border border-gray-200 p-8 rounded-lg mb-12">
            <h3 class="text-2xl font-bold text-iu-red mb-6">Advertising Department</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-2 text-gray-700">
                    <p><strong>Phone:</strong> <a href="tel:812-855-0763" class="text-iu-red hover:underline">812-855-0763</a></p>
                    <p><strong>Fax:</strong> 812-855-8009</p>
                    <p><strong>Email:</strong> <a href="mailto:advertise@idsnews.com" class="text-iu-red hover:underline">advertise@idsnews.com</a></p>
                </div>
                <div class="space-y-2 text-gray-700">
                    <p>Franklin Hall, Rm 129</p>
                    <p>601 E. Kirkwood Ave.</p>
                    <p>Bloomington, IN 47405</p>
                </div>
            </div>
        </div>
        
        <!-- Social Media -->
        <div class="bg-iu-red text-white p-8 rounded-lg mb-12 text-center">
            <h3 class="text-2xl font-bold mb-6">Follow us on Social Media</h3>
            <p class="text-lg mb-8">
                Follow us on Facebook, Twitter, and Instagram for exclusive content, updates on portrait sessions and more.
            </p>
            <div class="flex justify-center space-x-6">
                <a href="#" class="bg-white text-iu-red px-6 py-3 rounded font-semibold hover:bg-iu-cream transition-colors">
                    Facebook
                </a>
                <a href="#" class="bg-white text-iu-red px-6 py-3 rounded font-semibold hover:bg-iu-cream transition-colors">
                    Twitter
                </a>
                <a href="#" class="bg-white text-iu-red px-6 py-3 rounded font-semibold hover:bg-iu-cream transition-colors">
                    Instagram
                </a>
            </div>
        </div>
        
        <!-- Contact Form -->
        <div class="bg-gray-50 p-8 rounded-lg">
            <h3 class="text-2xl font-bold text-iu-red mb-6 text-center">Send us a Message</h3>
            <form class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                        <input type="text" id="name" name="name" required 
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-iu-red focus:border-transparent">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" required 
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-iu-red focus:border-transparent">
                    </div>
                </div>
                <div>
                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                    <select id="subject" name="subject" 
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-iu-red focus:border-transparent">
                        <option value="">Select a topic</option>
                        <option value="general">General Inquiry</option>
                        <option value="order">Order Questions</option>
                        <option value="portraits">Portrait Information</option>
                        <option value="staff">Join Our Staff</option>
                        <option value="advertising">Advertising</option>
                        <option value="archive">Archive Access</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                    <textarea id="message" name="message" rows="6" required 
                              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-iu-red focus:border-transparent"
                              placeholder="How can we help you?"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn-primary text-lg px-8 py-3">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Quick Links -->
<section class="py-16 bg-iu-cream">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="text-3xl font-bold text-iu-red mb-8 text-center">Quick Links</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <a href="order.php" class="bg-white p-6 rounded-lg text-center hover:shadow-lg transition-shadow">
                <h4 class="text-lg font-bold text-iu-red mb-2">Order Yearbook</h4>
                <p class="text-gray-600 text-sm">Get your 2026 copy</p>
            </a>
            <a href="portraits.php" class="bg-white p-6 rounded-lg text-center hover:shadow-lg transition-shadow">
                <h4 class="text-lg font-bold text-iu-red mb-2">Portrait Info</h4>
                <p class="text-gray-600 text-sm">Session details</p>
            </a>
            <a href="get-involved.php" class="bg-white p-6 rounded-lg text-center hover:shadow-lg transition-shadow">
                <h4 class="text-lg font-bold text-iu-red mb-2">Join Our Staff</h4>
                <p class="text-gray-600 text-sm">Get involved</p>
            </a>
            <a href="advertise.php" class="bg-white p-6 rounded-lg text-center hover:shadow-lg transition-shadow">
                <h4 class="text-lg font-bold text-iu-red mb-2">Advertise</h4>
                <p class="text-gray-600 text-sm">Partner with us</p>
            </a>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>
<?php include('partials/scripts.php'); ?>