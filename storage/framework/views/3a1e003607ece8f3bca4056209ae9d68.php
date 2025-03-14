<!-- resources/views/main.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kandy Railway Station - Stock Management</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/reset.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
</head>
<body>
    <!-- Sidebar Navigation -->
    <aside class="sidebar">
        <div class="logo">
            <img src="<?php echo e(asset('images/1.png')); ?>" alt="Logo" class="logo-img">
        </div>
        <nav>
            <ul>
                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                <li><a href="<?php echo e(url('/customer-parcel')); ?>">Customer Parcel Management</a></li>
                <li><a href="<?php echo e(url('/gov-stock')); ?>">Government Stock Management</a></li>
                <li><a href="<?php echo e(url('/tracking')); ?>">Parcel Tracking</a></li>
                <li><a href="<?php echo e(url('/fuel')); ?>">Fuel Stock</a></li>
                <li><a href="<?php echo e(url('/notifications')); ?>">Notifications</a></li>
                <li><a href="<?php echo e(url('/reports')); ?>">Reports</a></li>
            </ul>
            <div class="auth-buttons">
                <button onclick="openModal('signInModal')">Sign In</button>
            </div>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="main-content">
        <header>
            <h1>Kandy Railway Station Stock Management</h1>
        </header>

        <!-- Image Slider Section -->
        <section class="custom-image-slider">
            <div class="custom-slider-container">
                <div class="custom-slide active">
                    <img src="<?php echo e(asset('images/image1.jpg')); ?>" alt="Image 1">
                    <div class="custom-slide-text">Welcome to Kandy Railway Station</div>
                </div>
                <div class="custom-slide">
                    <img src="<?php echo e(asset('images/image2.jpg')); ?>" alt="Image 2">
                    <div class="custom-slide-text">Explore the Beauty of Sri Lanka</div>
                </div>
                <div class="custom-slide">
                    <img src="<?php echo e(asset('images/image3.jpg')); ?>" alt="Image 3">
                    <div class="custom-slide-text"><b>Book Your Journey Today!</b></div>
                </div>
            </div>
        </section>

        <!-- Call to Action Buttons -->
        <section class="cta-buttons">
            <button onclick="location.href='<?php echo e(url('/tracking')); ?>'" class="cta-button track-button">Track Your Parcel <span class="arrow">→</span></button>
            <button onclick="scrollToTimetable()" class="cta-button timetable-button">View Train Time Table <span class="arrow">→</span></button>
            <button onclick="location.href='https://seatreservation.railway.gov.lk/mtktwebslr/'" class="cta-button book-button">Book a Ticket <span class="arrow">→</span></button>
        </section>

        <!-- Customer Testimonials Section -->
        <section class="testimonials">
            <h3>What Our Customers Say</h3>
            <div class="testimonial-slider">
                <div class="testimonial">
                    <img src="<?php echo e(asset('images/images (2).jpg')); ?>" alt="Customer 1" class="customer-photo">
                    <p>"Great service and friendly staff! I had a wonderful experience traveling with Kandy Railway Station."</p>
                    <h4>- John Doe</h4>
                    <div class="stars" data-rating="4"></div>
                </div>
                <div class="testimonial">
                    <img src="<?php echo e(asset('images/images (2).jpg')); ?>" alt="Customer 2" class="customer-photo">
                    <p>"The best train service I've ever experienced. Reliable and punctual!"</p>
                    <h4>- Jane Doe</h4>
                    <div class="stars" data-rating="5"></div>
                </div>
                <div class="testimonial">
                    <img src="<?php echo e(asset('images/images (2).jpg')); ?>" alt="Customer 3" class="customer-photo">
                    <p>"Fast and convenient service for parcel tracking and delivery. Highly recommend!"</p>
                    <h4>- Michael Smith</h4>
                    <div class="stars" data-rating="5"></div>
                </div>
            </div>
            <div class="slider-controls">
                <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
                <button class="next" onclick="changeSlide(1)">&#10095;</button>
            </div>
        </section>

        <!-- Co-Partners Section -->
        <h1>Co-Partners</h1>
        <section class="co_partners">
            <div class="partner-slider">
                <div class="partner-slide">
                    <img src="<?php echo e(asset('images/partner1.png')); ?>" alt="Partner 1">
                </div>
                <div class="partner-slide">
                    <img src="<?php echo e(asset('images/partner2.png')); ?>" alt="Partner 2">
                </div>
                <div class="partner-slide">
                    <img src="<?php echo e(asset('images/partner3.png')); ?>" alt="Partner 3">
                </div>
                <div class="partner-slide">
                    <img src="<?php echo e(asset('images/partner4.png')); ?>" alt="Partner 4">
                </div>
            </div>
        </section>

        <!-- Time Table Section -->
        <h1 id="timetable">Time Table</h1>
        <section class="time-table">
            <table>
                <tr>
                    <th>Train Name</th>
                    <th>Frequency</th>
                    <th>Arrival</th>
                    <th>Departure</th>
                </tr>
                <tr><td>Kandy → Polgahawela</td><td>Daily</td><td>01:30 am</td><td>01:30 am</td></tr>
            <tr><td>Kandy → Peradeniya</td><td>Daily</td><td>01:40 am</td><td>01:40 am</td></tr>
            <tr><td>Sarasaviuyana → Kandy</td><td>Daily</td><td>02:47 am</td><td>02:47 am</td></tr>
            <tr><td>Kandy → Badulla</td><td>Daily</td><td>03:35 am</td><td>03:35 am</td></tr>
            <tr><td>Kandy → Colombo Fort</td><td>Daily</td><td>04:30 am</td><td>04:30 am</td></tr>
            <tr><td>Kandy → Matale</td><td>Daily</td><td>04:40 am</td><td>04:40 am</td></tr>
            <tr><td>Kandy → Colombo Fort</td><td>Weekdays Only</td><td>05:00 am</td><td>05:00 am</td></tr>
            <tr><td>Kandy → Colombo Fort</td><td>Saturday and Sunday Only</td><td>05:00 am</td><td>05:00 am</td></tr>
            <tr><td>Kandy → Colombo Fort</td><td>Sunday Only</td><td>05:00 am</td><td>05:00 am</td></tr>
            <tr><td>Matale → Kandy</td><td>Daily</td><td>06:04 am</td><td>06:04 am</td></tr>
            <tr><td>Polgahawela → Kandy</td><td>Daily</td><td>06:08 am</td><td>06:08 am</td></tr>
            <tr><td>Kandy → Colombo Fort</td><td>Daily</td><td>06:20 am</td><td>06:20 am</td></tr>
            <tr><td>Kandy → Nawalapitiya</td><td>Daily</td><td>06:27 am</td><td>06:27 am</td></tr>
            <tr><td>Nawalapitiya → Kandy</td><td>Daily</td><td>06:56 am</td><td>06:56 am</td></tr>
            <tr><td>Kandy → Matale</td><td>Daily</td><td>07:00 am</td><td>07:00 am</td></tr>
            <tr><td>Kandy → Pilimatalawa</td><td>Daily</td><td>07:00 am</td><td>07:00 am</td></tr>
            <tr><td>Kandy → Ella</td><td>Saturday and Sunday Only</td><td>07:45 am</td><td>07:45 am</td></tr>
            <tr><td>Matale → Kandy</td><td>Weekdays and Sunday Only</td><td>07:47 am</td><td>07:47 am</td></tr>
            <tr><td>Matale → Colombo Fort</td><td>Saturday Only</td><td>07:47 am</td><td>07:52 am</td></tr>
            <tr><td>Nanuoya → Kandy</td><td>Daily</td><td>07:48 am</td><td>07:48 am</td></tr>
            <tr><td>Kandy → Peradeniya</td><td>Weekdays Only</td><td>07:52 am</td><td>07:52 am</td></tr>
            <tr><td>Sarasaviuyana → Kandy</td><td>Weekdays Only</td><td>08:27 am</td><td>08:27 am</td></tr>
            <tr><td>Intercity (Colombo Fort → Kandy)</td><td>Saturday and Sunday Only</td><td>09:18 am</td><td>09:18 am</td></tr>
            <tr><td>Wattegama → Kandy</td><td>Weekdays Only</td><td>09:37 am</td><td>09:37 am</td></tr>
            <tr><td>Colombo Fort → Kandy</td><td>Daily</td><td>09:38 am</td><td>09:38 am</td></tr>
            <tr><td>Kandy → Nawalapitiya</td><td>Daily</td><td>09:45 am</td><td>09:45 am</td></tr>
            <tr><td>Wattegama → Kandy</td><td>Daily</td><td>09:55 am</td><td>09:55 am</td></tr>
            <tr><td>Nanuoya → Colombo Fort</td><td>Daily</td><td>10:10 am</td><td>10:40 am</td></tr>
            <tr><td>Kandy → Matale</td><td>Daily</td><td>10:20 am</td><td>10:25 am</td></tr>
            <tr><td>Colombo Fort → Badulla</td><td>Daily</td><td>11:03 am</td><td>11:10 am</td></tr>
            <tr><td>Matale → Kandy</td><td>Daily</td><td>11:43 am</td><td>11:43 am</td></tr>
            <tr><td>Nawalapitiya → Kandy</td><td>Daily</td><td>11:50 am</td><td>11:50 am</td></tr>
            <tr><td>Badulla → Colombo Fort</td><td>Daily</td><td>01:03 pm</td><td>01:10 pm</td></tr>
            <tr><td>Colombo Fort → Matale</td><td>Weekdays Only</td><td>01:52 pm</td><td>02:00 pm</td></tr>
            <tr><td>Kandy → Matale</td><td>Daily</td><td>01:55 pm</td><td>02:00 pm</td></tr>
            <tr><td>Colombo Fort → Kandy</td><td>Saturday and Sunday Only</td><td>01:55 pm</td><td>01:55 pm</td></tr>
            <tr><td>Kandy → Nawalapitiya</td><td>Daily</td><td>02:07 pm</td><td>02:07 pm</td></tr>
            <tr><td>Kandy → Polgahawela</td><td>Daily</td><td>02:15 pm</td><td>02:15 pm</td></tr>
            <tr><td>Matale → Kandy</td><td>Daily</td><td>03:17 pm</td><td>03:17 pm</td></tr>
            <tr><td>Kandy → Colombo Fort</td><td>Weekdays Only</td><td>03:25 pm</td><td>03:25 pm</td></tr>
            <tr><td>Kandy → Colombo Fort</td><td>Daily</td><td>04:00 pm</td><td>04:00 pm</td></tr>
            <tr><td>Matale → Kandy</td><td>Daily</td><td>04:33 pm</td><td>04:33 pm</td></tr>
            <tr><td>Kandy → Peradeniya</td><td>Daily</td><td>04:50 pm</td><td>04:50 pm</td></tr>
            <tr><td>Kandy → Nawalapitiya</td><td>Daily</td><td>05:10 pm</td><td>05:10 pm</td></tr>
            <tr><td>Intercity (Colombo Fort → Kandy)</td><td>Daily</td><td>05:30 pm</td><td>05:30 pm</td></tr>
            <tr><td>Kandy → Colombo Fort</td><td>Daily</td><td>06:00 pm</td><td>06:00 pm</td></tr>
            <tr><td>Nawalapitiya → Kandy</td><td>Daily</td><td>06:16 pm</td><td>06:16 pm</td></tr>
            <tr><td>Kandy → Polgahawela</td><td>Weekdays Only</td><td>06:25 pm</td><td>06:25 pm</td></tr>
            <tr><td>Kandy → Polgahawela</td><td>Saturday and Sunday Only</td><td>06:25 pm</td><td>06:25 pm</td></tr>
            <tr><td>Matale → Kandy</td><td>Daily</td><td>06:42 pm</td><td>06:42 pm</td></tr>
            <tr><td>Kandy → Matale</td><td>Daily</td><td>07:00 pm</td><td>07:00 pm</td></tr>
            <tr><td>Kandy → Nawalapitiya</td><td>Weekdays Only</td><td>07:10 pm</td><td>07:10 pm</td></tr>
            <tr><td>Kandy → Nawalapitiya</td><td>Daily</td><td>07:10 pm</td><td>07:10 pm</td></tr>
            <tr><td>Kandy → Nawalapitiya</td><td>Saturday and Sunday Only</td><td>07:10 pm</td><td>07:10 pm</td></tr>
            <tr><td>Colombo Fort → Kandy</td><td>Weekdays Only</td><td>07:34 pm</td><td>07:34 pm</td></tr>
            <tr><td>Colombo Fort → Kandy</td><td>Saturday and Sunday Only</td><td>07:43 pm</td><td>07:43 pm</td></tr>
            <tr><td>Colombo Fort → Kandy</td><td>Daily</td><td>07:53 pm</td><td>07:53 pm</td></tr>
            <tr><td>Ella → Kandy</td><td>Saturday and Sunday Only</td><td>08:11 pm</td><td>08:11 pm</td></tr>
            <tr><td>Intercity (Colombo Fort → Kandy)</td><td>Daily</td><td>08:12 pm</td><td>08:12 pm</td></tr>
            <tr><td>Matale → Kandy</td><td>Daily</td><td>08:20 pm</td><td>08:20 pm</td></tr>
            <tr><td>Badulla → Kandy</td><td>Daily</td><td>08:37 pm</td><td>08:37 pm</td></tr>
            <tr><td>Colombo Fort → Kandy</td><td>Daily</td><td>08:55 pm</td><td>08:55 pm</td></tr>
            <tr><td>Kandy → Rambukkana</td><td>Daily</td><td>09:00 pm</td><td>09:00 pm</td></tr>
            <tr><td>Colombo Fort → Badulla</td><td>Daily</td><td>10:12 pm</td><td>10:20 pm</td></tr>
            <tr><td>Kandy → Peradeniya</td><td>Daily</td><td>10:45 pm</td><td>10:45 pm</td></tr>
            <tr><td>Polgahawela → Kandy</td><td>Daily</td><td>11:27 pm</td><td>11:27 pm</td></tr>
            <tr><td>Sarasaviuyana → Kandy</td><td>Daily</td><td>11:57 pm</td><td>11:57 pm</td></tr>
            </table>
        </section>
    </div>
    
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\dissa\Desktop\Railway_project\resources\views/main.blade.php ENDPATH**/ ?>