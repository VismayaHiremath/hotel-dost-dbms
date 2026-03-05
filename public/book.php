<?php
// book.php - Booking page

// Include the header
include 'includes/header.php';
?>
<style>
    /* Reset & Base */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f8f8f8;
    color: #333;
    line-height: 1.6;
}
a {
    text-decoration: none;
    color: inherit;
}
ul {
    list-style: none;
}

/* Header */
header {
    background: #1a1a1a;
    color: #fff;
    padding: 1rem 0;
}
.header-container {
    max-width: 1200px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 2rem;
}
.logo {
    font-size: 1.8rem;
    font-weight: bold;
}
.logo span {
    color: #e0b973;
}
nav ul {
    display: flex;
    gap: 2rem;
}
nav a {
    color: #fff;
    transition: color 0.3s ease;
}
nav a:hover,
nav a.active {
    color: #e0b973;
}

/* Container */
.container {
    max-width: 1200px;
    margin: 2rem auto;
    padding: 0 2rem;
}

/* Hero Section */
.hero {
    text-align: center;
    margin-bottom: 2rem;
}
.hero h1 {
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
}
.hero p {
    font-size: 1.1rem;
    color: #555;
}

/* Booking Container */
.booking-container {
    display: flex;
    gap: 2rem;
    flex-wrap: wrap;
}

/* Booking Form */
.booking-form {
    flex: 1;
    background: #fff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}
.form-title {
    margin-bottom: 1rem;
    color: #444;
}
.form-group {
    margin-bottom: 1rem;
}
.form-row {
    display: flex;
    gap: 1rem;
}
.form-row .form-group {
    flex: 1;
}
label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
}
.form-control {
    width: 100%;
    padding: 0.6rem;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-title {
    margin-top: 2rem;
    margin-bottom: 1rem;
    font-size: 1.5rem;
    color: #444;
}

textarea.form-control {
    resize: vertical;
}
select.form-control {
    background: #fff;
}
.room-types {
    display: flex;
    gap: 1rem;
}
.room-type-option {
    flex: 1;
    border: 2px solid #ccc;
    padding: 1rem;
    border-radius: 8px;
    text-align: center;
    cursor: pointer;
    transition: border 0.3s ease, box-shadow 0.3s ease;
}
.room-type-option:hover {
    border-color: #e0b973;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}
.room-type-option.selected {
    border-color: #e0b973;
    background-color: #fff9f0;
}
.room-type-option h4 {
    margin-bottom: 0.3rem;
}
.room-type-option .price {
    font-weight: bold;
    color: #444;
}

/* Room Preview */
.room-preview {
    flex: 1;
    background: #fff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}
.preview-image img {
    width: 100%;
    border-radius: 10px;
    margin-bottom: 1rem;
}
.room-detail {
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}
.included-amenities {
    margin-top: 1rem;
}
.amenities-list {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin-top: 0.5rem;
}
.amenity-tag {
    background: #e0b973;
    color: #fff;
    padding: 0.4rem 0.7rem;
    border-radius: 20px;
    font-size: 0.9rem;
}

/* Price Summary */
.price-summary {
    margin-top: 1.5rem;
    border-top: 1px solid #ccc;
    padding-top: 1rem;
}
.price-row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 0.5rem;
}
.price-row.total {
    font-weight: bold;
    font-size: 1.1rem;
}

/* Buttons */
.btn {
    display: inline-block;
    padding: 0.75rem 1.5rem;
    font-size: 1rem;
    background: #e0b973;
    color: #fff;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background 0.3s ease;
}
.btn:hover {
    background: #d4a64e;
}

/* Footer */
footer {
    background: #1a1a1a;
    color: #eee;
    padding-top: 2rem;
}
.footer-container {
    max-width: 1200px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    gap: 2rem;
    padding: 0 2rem 2rem;
    flex-wrap: wrap;
}
.footer-section {
    flex: 1;
}
.footer-section h3 {
    margin-bottom: 1rem;
}
.footer-section ul li {
    margin-bottom: 0.5rem;
}
.footer-section ul li a {
    color: #eee;
    transition: color 0.3s;
}
.footer-section ul li a:hover {
    color: #e0b973;
}
.footer-bottom {
    text-align: center;
    padding: 1rem;
    background: #111;
    font-size: 0.9rem;
}

    </style>
        <script src="hotel.js"></script>

        <div class="container">
        <div class="hero">
            <h1>Book Your Perfect Stay</h1>
            <p>Experience luxury and comfort in our premium rooms and suites.</p>
        </div>

        <div class="booking-container">
            <div class="booking-form">
                <h2 class="form-title">Reservation Details</h2>
                <form id="bookingForm">
                    <!-- Dates -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="checkIn">Check-in Date</label>
                            <input type="date" id="checkIn" name="checkIn" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="checkOut">Check-out Date</label>
                            <input type="date" id="checkOut" name="checkOut" class="form-control" required>
                        </div>
                    </div>

                    <!-- Guests -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="adults">Adults</label>
                            <select id="adults" name="adults" class="form-control">
                                <option value="1">1</option>
                                <option value="2" selected>2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="children">Children</label>
                            <select id="children" name="children" class="form-control">
                                <option value="0" selected>0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>

                    <!-- Room Type -->
                    <div class="form-group">
                        <label>Room Type</label>
                        <div class="room-types">
                            <div class="room-type-option selected" data-type="standard" data-rate="99">
                                <h4>Standard</h4>
                                <p>Perfect for solo or couples</p>
                                <div class="price">₹3,999/night</div>
                            </div>
                            <div class="room-type-option" data-type="deluxe" data-rate="149">
                                <h4>Deluxe</h4>
                                <p>Extra space and comfort</p>
                                <div class="price">₹6,999/night</div>
                            </div>
                            <div class="room-type-option" data-type="suite" data-rate="249">
                                <h4>Suite</h4>
                                <p>Ultimate luxury experience</p>
                                <div class="price">₹11,999/night</div>
                            </div>
                        </div>
                    </div>

                    <!-- View Preference -->
                    <div class="form-group">
                        <label for="viewType">View Preference</label>
                        <select id="viewType" name="viewType" class="form-control">
                            <option value="city">City View</option>
                            <option value="garden">Garden View</option>
                            <option value="pool">Pool View</option>
                            <option value="ocean" selected>Ocean View</option>
                        </select>
                    </div>

                    <!-- Special Requests -->
                    <div class="form-group">
                        <label for="specialRequests">Special Requests</label>
                        <textarea id="specialRequests" name="specialRequests" class="form-control" rows="3"></textarea>
                    </div>

                    <!-- Guest Info -->
                    <h2 class="form-title">Guest Information</h2>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" id="firstName" name="firstName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" id="lastName" name="lastName" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="idType">ID Type</label>
                        <select id="idType" name="idType" class="form-control">
                            <option value="passport">Passport</option>
                            <option value="drivers_license">Driver's License</option>
                            <option value="national_id">National ID</option>
                        </select>
                    </div>
                    <h2 class="form-title">Payment Details</h2>

<div class="form-group">
    <label for="paymentMethod">Payment Method</label>
    <select id="paymentMethod" name="paymentMethod" class="form-control" required>
        <option value="credit_card">Credit Card</option>
        <option value="debit_card">Debit Card</option>
        <option value="upi">UPI</option>
        <option value="paypal">PayPal</option>
        <option value="cash">Cash at hotel</option>
    </select>
</div>

<div class="form-group">
    <label for="amount">Amount (USD)</label>
    <input type="number" id="amount" name="amount" class="form-control" placeholder="Total amount" required>
</div>

<div class="form-group">
    <label for="transactionId">Transaction ID</label>
    <input type="text" id="transactionId" name="transactionId" class="form-control" placeholder="Transaction reference">
</div>

<div class="form-group">
    <label for="invoiceNumber">Invoice Number</label>
    <input type="text" id="invoiceNumber" name="invoiceNumber" class="form-control" placeholder="Invoice number">
</div>

                    <button type="submit" class="btn btn-primary">Book Now</button>
                </form>
            </div>

            <!-- You may insert the room preview section here if needed -->
        </div>
    </div>

    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>About Us</h3>
                <p>Hotel Dost offers premium accommodations with world-class amenities.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="about.html#dining">Dining</a></li>
                    <li><a href="about.html#spa">Spa & Wellness</a></li>
                    <li><a href="about.html#events">Events</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <ul>
                    <li>213 Beach Road, Candolim,Goa</li>
                    <li>Phone: +91 1234567891</li>
                    <li>Email: info@hoteldost.com</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Hotel Dost. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

<?php
// Include the footer
include 'includes/footer.php';
?>
