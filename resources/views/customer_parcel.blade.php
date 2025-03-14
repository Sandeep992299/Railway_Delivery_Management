<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Parcel Management</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customer_parcel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- style for QR Code Generator -->
</head>
<body>
    <!-- Sidebar Navigation -->
    <aside class="sidebar">
        <div class="logo">
            <img src="{{ asset('images/1.png') }}" alt="Logo" class="logo-img">
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('customer_parcel') }}">Customer Parcel Management</a></li>
                <li><a href="{{ route('govStock') }}">Government Stock Management</a></li>
                <li><a href="{{ route('tracking') }}">Parcel Tracking</a></li>
                <li><a href="{{ route('fuel') }}">Fuel Stock</a></li>
                <li><a href="{{ route('notifications') }}">Notifications</a></li>
                <li><a href="{{ route('reports') }}">Reports</a></li>
            </ul>
            <div class="auth-buttons">
                <button onclick="openModal('signInModal')">Sign In</button>
            </div>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="main-content">
        <header>
            <h1>Customer Parcel Management</h1>
        </header>

        <!-- Customer Parcel Management Section -->
        <div class="container">
            <form id="packageForm" method="POST" action="{{ route('generate_qr_code') }}">
                @csrf
                <h1>Generate QR Code for Package</h1>

                <label for="id">Parcel ID:</label>
                <input type="text" id="id" name="id" required>

                <label for="receiver">Receiver:</label>
                <input type="text" id="receiver" name="receiver" required>

                <label for="tel">Phone Number:</label>
                <input type="tel" id="tel" name="tel" required>

                <label for="pickup">Pickup Location:</label>
                <input type="text" id="pickup" name="pickup" required>

                <label for="drop">Drop Station:</label>
                <input type="text" id="drop" name="drop" required>

                <button type="button" onclick="generateQRCode()">Generate QR Code</button>
            </form>

            <div id="qrResult" style="display: none;">
                <h2>QR Code:</h2>
                <div id="qrcode"></div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <section class="container">
            <section class="row">
                <section class="footer-col">
                    <h3>Contact Us</h3>
                    <ul>
                        <h4>Email - dissanayakesandeep@gmail.com</h4>
                        <h4>Phone - +94714568342</h4>
                        <h4>Address - No.142, Rajawella 2<br>Digana</h4>
                    </ul>
                </section>
                <section class="footer-col">
                    <h3>Menu</h3>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('menu') }}">Menu</a></li>
                        <li><a href="{{ route('contact_us') }}">Contact Us</a></li>
                        <li><a href="{{ route('about_us') }}">About Us</a></li>
                    </ul>
                </section>
                <section class="footer-col">
                    <h3>Follow Us</h3>
                    <section class="social-links">
                        <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a href="https://lk.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                    </section>
                </section>
            </section>
        </section>
        <section class="copyright">
            <h3>Copyright &COPY;2023 All Rights Reserved. Nature Guide Ceylon</h3>
        </section>
    </footer>

    <!-- QR Code library and script -->
    <script src="{{ asset('js/qrcode.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script> <!-- JavaScript for QR Code generation -->
</body>
</html>
