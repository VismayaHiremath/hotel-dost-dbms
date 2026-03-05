2.	<!DOCTYPE html>
3.	<html lang="en">
4.	    <style>
5.	      /* Reset & Base Styles */
6.	* {
7.	    margin: 0;
8.	    padding: 0;
9.	    box-sizing: border-box;
10.	}
11.	
12.	body {
13.	    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
14.	    color: #333;
15.	    background-color: #e7c69b;
16.	    line-height: 1.6;
17.	}
18.	
19.	a {
20.	    text-decoration: none;
21.	    color: inherit;
22.	}
23.	
24.	ul {
25.	    list-style: none;
26.	}
27.	
28.	/* Header */
29.	header {
30.	    background-color: #0d1b2a;
31.	    padding: 20px 0;
32.	    color: rgb(255, 255, 255);
33.	}
34.	
35.	.header-container {
36.	    display: flex;
37.	    justify-content: space-between;
38.	    align-items: center;
39.	    max-width: 1200px;
40.	    margin: auto;
41.	    padding: 0 20px;
42.	}
43.	
44.	.logo {
45.	    font-size: 1.8rem;
46.	    font-weight: bold;
47.	    color: #f4d35e;
48.	}
49.	
50.	.logo span {
51.	    color: #ee6c4d;
52.	}
53.	
54.	nav ul {
55.	    display: flex;
56.	    gap: 20px;
57.	}
58.	
59.	nav a {
60.	    color: white;
61.	    font-weight: 500;
62.	    transition: color 0.3s ease;
63.	}
64.	
65.	nav a:hover,
66.	nav a.active {
67.	    color: #f4d35e;
68.	}
69.	
70.	/* Hero Section */
71.	.hero {
72.	    background: url('/api/placeholder/1200/500?text=Hotel+Dost+Banner') center/cover no-repeat;
73.	    padding: 100px 20px;
74.	    text-align: center;
75.	    color: white;
76.	}
77.	
78.	.hero h1 {
79.	    font-size: 3rem;
80.	    margin-bottom: 15px;
81.	}
82.	
83.	.hero p {
84.	    font-size: 1.2rem;
85.	    margin-bottom: 25px;
86.	}
87.	
88.	.btn {
89.	    padding: 12px 24px;
90.	    border: none;
91.	    border-radius: 6px;
92.	    font-weight: bold;
93.	    cursor: pointer;
94.	    display: inline-block;
95.	    transition: background-color 0.3s ease;
96.	}
97.	
98.	.btn-primary {
99.	    background-color: #ee6c4d;
100.	    color: white;
101.	}
102.	
103.	.btn-primary:hover {
104.	    background-color: #d65a3b;
105.	}
106.	
107.	.btn-secondary {
108.	    background-color: #0d1b2a;
109.	    color: white;
110.	}
111.	
112.	.btn-secondary:hover {
113.	    background-color: #1b2e47;
114.	}
115.	
116.	/* Container */
117.	.container {
118.	    max-width: 1200px;
119.	    margin: auto;
120.	    padding: 40px 20px;
121.	}
122.	
123.	/* Features Section */
124.	.features {
125.	    text-align: center;
126.	    margin-bottom: 60px;
127.	}
128.	
129.	.section-title {
130.	    font-size: 2rem;
131.	    margin-bottom: 30px;
132.	    color: #0d1b2a;
133.	}
134.	
135.	.features-container {
136.	    display: flex;
137.	    flex-wrap: wrap;
138.	    justify-content: space-between;
139.	    gap: 20px;
140.	}
141.	
142.	.feature-card {
143.	    background: #ffffff;
144.	    border: 1px solid #ddd;
145.	    padding: 20px;
146.	    flex: 1 1 calc(25% - 20px);
147.	    border-radius: 8px;
148.	    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
149.	    text-align: center;
150.	}
151.	
152.	.feature-icon {
153.	    font-size: 2rem;
154.	    margin-bottom: 10px;
155.	}
156.	
157.	/* Room Showcase */
158.	.room-showcase {
159.	    margin-bottom: 60px;
160.	}
161.	
162.	.room-cards {
163.	    display: grid;
164.	    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
165.	    gap: 20px;
166.	}
167.	
168.	.room-card {
169.	    background: #fff;
170.	    border: 1px solid #ddd;
171.	    border-radius: 8px;
172.	    overflow: hidden;
173.	    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
174.	}
175.	
176.	.room-image img {
177.	    width: 100%;
178.	    height: auto;
179.	}
180.	
181.	.room-content {
182.	    padding: 20px;
183.	}
184.	
185.	.room-features {
186.	    display: flex;
187.	    justify-content: space-between;
188.	    margin: 10px 0;
189.	    font-size: 0.9rem;
190.	    color: #555;
191.	}
192.	
193.	.room-price {
194.	    font-weight: bold;
195.	    margin-bottom: 15px;
196.	}
197.	
198.	/* Testimonials */
199.	.testimonials {
200.	    background-color: #f4f4f4;
201.	    padding: 60px 20px;
202.	    border-radius: 8px;
203.	    margin-bottom: 60px;
204.	}
205.	
206.	.testimonial-container {
207.	    display: grid;
208.	    grid-template-columns: 1fr;
209.	    gap: 20px;
210.	    max-width: 900px;
211.	    margin: auto;
212.	}
213.	
214.	.testimonial {
215.	    background: #fff;
216.	    padding: 20px;
217.	    border-left: 5px solid #ee6c4d;
218.	    border-radius: 6px;
219.	}
220.	
221.	.testimonial-text {
222.	    font-style: italic;
223.	}
224.	
225.	.testimonial-author {
226.	    margin-top: 10px;
227.	    font-weight: bold;
228.	    text-align: right;
229.	}
230.	
231.	/* CTA */
232.	.cta {
233.	    background-color: #ee6c4d;
234.	    color: white;
235.	    padding: 60px 20px;
236.	    text-align: center;
237.	    border-radius: 8px;
238.	}
239.	
240.	.cta h2 {
241.	    font-size: 2rem;
242.	    margin-bottom: 15px;
243.	}
244.	
245.	/* Footer */
246.	footer {
247.	    background-color: #0d1b2a;
248.	    color: white;
249.	    padding-top: 40px;
250.	}
251.	
252.	.footer-container {
253.	    display: flex;
254.	    flex-wrap: wrap;
255.	    justify-content: space-between;
256.	    max-width: 1200px;
257.	    margin: auto;
258.	    padding: 0 20px 30px;
259.	    gap: 20px;
260.	}
261.	
262.	.footer-section {
263.	    flex: 1 1 250px;
264.	}
265.	
266.	.footer-section h3 {
267.	    margin-bottom: 15px;
268.	    color: #f4d35e;
269.	}
270.	
271.	.footer-section ul li {
272.	    margin-bottom: 10px;
273.	}
274.	
275.	.footer-bottom {
276.	    background-color: #08111b;
277.	    text-align: center;
278.	    padding: 15px;
279.	    font-size: 0.9rem;
280.	    color: #bbb;
281.	}
282.	
283.	/* Responsive */
284.	@media (max-width: 768px) {
285.	    .header-container,
286.	    .features-container,
287.	    .footer-container {
288.	        flex-direction: column;
289.	        align-items: center;
290.	    }
291.	
292.	    .feature-card,
293.	    .footer-section {
294.	        width: 100%;
295.	        text-align: center;
296.	    }
297.	
298.	    .room-features {
299.	        flex-direction: column;
300.	        gap: 5px;
301.	    }
302.	}
303.	
304.	    </style>
305.	    <script src="hotel.js"></script>
306.	
307.	<head>
308.	    <meta charset="UTF-8">
309.	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
310.	    <title>Hotel Dost - Home</title>
311.	    <link rel="stylesheet" href="styles.css">
312.	</head>
313.	<body>
314.	    <header>
315.	        <div class="header-container">
316.	            <div class="logo">Hotel<span>Dost</span></div>
317.	            <nav>
318.	                <ul>
319.	                    <li><a href="home.html" class="active">Home</a></li>
320.	                    <li><a href="book.html">Book Now</a></li>
321.	                    <li><a href="about.html">About</a></li>
322.	                    <li><a href="contact.html">Contact</a></li>
323.	                </ul>
324.	            </nav>
325.	        </div>
326.	    </header>
327.	
328.	    <div class="container">
329.	        <div class="hero">
330.	            <h1>Welcome to Hotel Dost</h1>
331.	            <p>Experience unparalleled luxury and comfort in our premium rooms and suites.</p>
332.	            <a href="book.html" class="btn btn-primary">Book Your Stay</a>
333.	        </div>
334.	
335.	        <section class="features">
336.	            <h2 class="section-title">Why Choose Us</h2>
337.	            <div class="features-container">
338.	                <div class="feature-card">
339.	                    <div class="feature-icon">🌟</div>
340.	                    <h3>Premium Rooms</h3>
341.	                    <p>Elegantly designed rooms with modern amenities and breathtaking views.</p>
342.	                </div>
343.	                <div class="feature-card">
344.	                    <div class="feature-icon">🍽️</div>
345.	                    <h3>Fine Dining</h3>
346.	                    <p>World-class restaurants offering gourmet cuisine from renowned chefs.</p>
347.	                </div>
348.	                <div class="feature-card">
349.	                    <div class="feature-icon">🧖</div>
350.	                    <h3>Spa & Wellness</h3>
351.	                    <p>Rejuvenating spa treatments and state-of-the-art fitness facilities.</p>
352.	                </div>
353.	                <div class="feature-card">
354.	                    <div class="feature-icon">🏊</div>
355.	                    <h3>Infinity Pool</h3>
356.	                    <p>Relax in our stunning infinity pool with panoramic ocean views.</p>
357.	                </div>
358.	            </div>
359.	        </section>
360.	
361.	        <section class="room-showcase">
362.	            <h2 class="section-title">Our Rooms</h2>
363.	            <div class="room-cards">
364.	                <div class="room-card">
365.	                    <div class="room-image">
366.	                        <img src="/api/placeholder/400/250?text=Standard+Room" alt="Standard Room">
367.	                    </div>
368.	                    <div class="room-content">
369.	                        <h3>Standard Room</h3>
370.	                        <p>Perfect for solo travelers or couples, our standard rooms offer comfort and elegance.</p>
371.	                        <div class="room-features">
372.	                            <span>28 m²</span>
373.	                            <span>Queen Bed</span>
374.	                            <span>Ocean View</span>
375.	                        </div>
376.	                        <div class="room-price">From ₹2,999 per night</div>
377.	                        <a href="book.html" class="btn btn-secondary">Book Now</a>
378.	                    </div>
379.	                </div>
380.	                <div class="room-card">
381.	                    <div class="room-image">
382.	                        <img src="/api/placeholder/400/250?text=Deluxe+Room" alt="Deluxe Room">
383.	                    </div>
384.	                    <div class="room-content">
385.	                        <h3>Deluxe Room</h3>
386.	                        <p>Extra space and premium amenities for those seeking additional comfort.</p>
387.	                        <div class="room-features">
388.	                            <span>35 m²</span>
389.	                            <span>King Bed</span>
390.	                            <span>Ocean View</span>
391.	                        </div>
392.	                        <div class="room-price">From ₹6,999 per night</div>
393.	                        <a href="book.html" class="btn btn-secondary">Book Now</a>
394.	                    </div>
395.	                </div>
396.	                <div class="room-card">
397.	                    <div class="room-image">
398.	                        <img src="/api/placeholder/400/250?text=Suite+Room" alt="Suite">
399.	                    </div>
400.	                    <div class="room-content">
401.	                        <h3>Suite</h3>
402.	                        <p>Ultimate luxury experience with separate living area and premium services.</p>
403.	                        <div class="room-features">
404.	                            <span>55 m²</span>
405.	                            <span>King Bed + Sofa</span>
406.	                            <span>Ocean View</span>
407.	                        </div>
408.	                        <div class="room-price">From ₹11,000 per night</div>
409.	                        <a href="book.html" class="btn btn-secondary">Book Now</a>
410.	                    </div>
411.	                </div>
412.	            </div>
413.	        </section>
414.	
415.	        <section class="testimonials">
416.	            <h2 class="section-title">Guest Experiences</h2>
417.	            <div class="testimonial-container">
418.	                <div class="testimonial">
419.	                    <div class="testimonial-text">
420.	                        "The most incredible hotel experience of my life. The ocean view from our suite was breathtaking, and the staff went above and beyond to make our stay perfect."
421.	                    </div>
422.	                    <div class="testimonial-author">- Seema R, Delhi</div>
423.	                </div>
424.	                <div class="testimonial">
425.	                    <div class="testimonial-text">
426.	                        "Impeccable service, stunning rooms, and the best hotel restaurant I've ever experienced. Will definitely be returning for our anniversary."
427.	                    </div>
428.	                    <div class="testimonial-author">- Dinesh, Chennai</div>
429.	                </div>
430.	                <div class="testimonial">
431.	                    <div class="testimonial-text">
432.	                        "From check-in to check-out, everything was flawless. The spa treatments were especially memorable. Luxury Hotel sets the standard for premium hospitality."
433.	                    </div>
434.	                    <div class="testimonial-author">- Tina, Goa</div>
435.	                </div>
436.	            </div>
437.	        </section>
438.	
439.	        <section class="cta">
440.	            <div class="cta-content">
441.	                <h2>Ready for an Unforgettable Stay?</h2>
442.	                <p>Book your room now and experience the perfect blend of luxury, comfort, and exceptional service.</p>
443.	                <a href="book.html" class="btn btn-primary">Book Your Stay</a>
444.	            </div>
445.	        </section>
446.	    </div>
447.	
448.	    <footer>
449.	        <div class="footer-container">
450.	            <div class="footer-section">
451.	                <h3>About Us</h3>
452.	                <p>Hotel Dost offers premium accommodations with world-class amenities and exceptional service for an unforgettable stay.</p>
453.	            </div>
454.	            <div class="footer-section">
455.	                <h3>Quick Links</h3>
456.	                <ul>
457.	                    <li><a href="book.html">Book Now</a></li>
458.	                    <li><a href="about.html#dining">Dining</a></li>
459.	                    <li><a href="about.html#spa">Spa & Wellness</a></li>
460.	                    <li><a href="about.html#events">Events</a></li>
461.	                </ul>
462.	            </div>
463.	            <div class="footer-section">
464.	                <h3>Contact</h3>
465.	                <ul>
466.	                    <li>213 Beach Road, Candolim,Goa</li>
467.	                    <li>Phone: +91 1234567891</li>
468.	                    <li>Email: info@hoteldost.com</li>
469.	                </ul>
470.	            </div>
471.	        </div>
472.	        <div class="footer-bottom">
473.	            <p>&copy; 2025 Hotel Dost. All rights reserved.</p>
474.	        </div>
475.	    </footer>
476.	
477.	    <script src="script.js"></script>
478.	</body>
479.	</html>
