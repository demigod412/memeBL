<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('title', 'cTrader Automate - Algorithmic Trading'); ?>

<?php $__env->startSection('content'); ?>

 <!-- Additional styles for events page -->
    <style>
        /* Events page specific styles */
        .events-hero {
            min-height: 500px;
            background: linear-gradient(135deg, #0d0b33 0%, #080b18 100%);
            padding-top: 150px;
            padding-bottom: 100px;
            position: relative;
            overflow: hidden;
        }
        
        .events-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600" opacity="0.05"><path fill="%232DD98F" d="M0,0V600H1200V0ZM200,400c50-50,150-50,200,0s150,50,200,0,150-50,200,0,150,50,200,0V200c-50,50-150,50-200,0s-150-50-200,0-150,50-200,0-150-50-200,0Z"/></svg>');
            background-size: cover;
        }
        
        .hero-title {
            font-size: 70px;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 20px;
            background: linear-gradient(90deg, #2DD98F 0%, #4D57FF 50%, #2DD98F 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% auto;
            animation: gradient 3s ease infinite;
        }
        
        @keyframes  gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .hero-subtitle {
            font-size: 20px;
            color: #C1C7DE;
            max-width: 600px;
            margin: 0 auto 40px;
        }
        
        .events-section {
            padding: 100px 0;
            background: #080b18;
            position: relative;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title h2 {
            font-size: 48px;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, #2DD98F, #4D57FF);
            border-radius: 2px;
        }
        
        .section-title p {
            font-size: 18px;
            color: #B3B3C0;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .event-card {
            background: rgba(13, 11, 51, 0.8);
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 30px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(109, 123, 210, 0.2);
            position: relative;
            height: 100%;
        }
        
        .event-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(45, 217, 143, 0.15);
            border-color: #2DD98F;
        }
        
        .event-card.featured {
            border: 2px solid #2DD98F;
            box-shadow: 0 10px 30px rgba(45, 217, 143, 0.2);
        }
        
        .event-card.upcoming {
            border: 2px solid #4D57FF;
            box-shadow: 0 10px 30px rgba(77, 87, 255, 0.2);
        }
        
        .event-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 2;
            padding: 8px 20px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .featured-badge {
            background: linear-gradient(90deg, #2DD98F, #1BB8FF);
            color: #080b18;
        }
        
        .upcoming-badge {
            background: linear-gradient(90deg, #4D57FF, #9162FF);
            color: white;
        }
        
        .event-img {
            height: 220px;
            overflow: hidden;
            position: relative;
        }
        
        .event-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .event-card:hover .event-img img {
            transform: scale(1.05);
        }
        
        .event-date {
            position: absolute;
            bottom: 0;
            left: 0;
            background: rgba(8, 11, 24, 0.9);
            padding: 15px 20px;
            border-top-right-radius: 15px;
            min-width: 120px;
        }
        
        .event-date .day {
            font-size: 32px;
            font-weight: 800;
            line-height: 1;
            color: #2DD98F;
            display: block;
        }
        
        .event-date .month {
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: white;
        }
        
        .event-content {
            padding: 30px;
        }
        
        .event-category {
            display: inline-block;
            font-size: 12px;
            font-weight: 600;
            color: #2DD98F;
            background: rgba(45, 217, 143, 0.1);
            padding: 5px 15px;
            border-radius: 30px;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .event-title {
            font-size: 24px;
            margin-bottom: 15px;
            line-height: 1.3;
        }
        
        .event-title a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .event-title a:hover {
            color: #2DD98F;
        }
        
        .event-excerpt {
            color: #B3B3C0;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        .event-meta {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .event-meta-item {
            display: flex;
            align-items: center;
            color: #92939E;
            font-size: 14px;
        }
        
        .event-meta-item i {
            color: #2DD98F;
            margin-right: 8px;
            font-size: 16px;
        }
        
        .event-btn {
            display: inline-block;
            background: linear-gradient(90deg, #2DD98F, #1BB8FF);
            color: #080b18;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 1px;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
        }
        
        .event-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(45, 217, 143, 0.3);
            color: #080b18;
        }
        
        .events-filter {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 50px;
        }
        
        .filter-btn {
            background: rgba(13, 11, 51, 0.8);
            border: 1px solid #2a284b;
            color: #C1C7DE;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .filter-btn.active, .filter-btn:hover {
            background: linear-gradient(90deg, #2DD98F, #1BB8FF);
            color: #080b18;
            border-color: transparent;
        }
        
        .calendar-section {
            background: linear-gradient(135deg, #0d0b33 0%, #080b18 100%);
            padding: 100px 0;
            position: relative;
        }
        
        .calendar-widget {
            background: rgba(8, 11, 24, 0.8);
            border-radius: 20px;
            padding: 40px;
            border: 1px solid rgba(109, 123, 210, 0.2);
            backdrop-filter: blur(10px);
        }
        
        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        
        .calendar-month {
            font-size: 28px;
            font-weight: 700;
            color: white;
        }
        
        .calendar-nav button {
            background: rgba(45, 217, 143, 0.1);
            border: 1px solid rgba(45, 217, 143, 0.3);
            color: #2DD98F;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-left: 10px;
            transition: all 0.3s;
        }
        
        .calendar-nav button:hover {
            background: #2DD98F;
            color: #080b18;
        }
        
        .calendar-weekdays {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            text-align: center;
            margin-bottom: 15px;
            color: #92939E;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .calendar-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
        }
        
        .calendar-day {
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            position: relative;
        }
        
        .calendar-day:hover {
            background: rgba(45, 217, 143, 0.1);
        }
        
        .calendar-day.event-day {
            background: rgba(45, 217, 143, 0.2);
            color: #2DD98F;
            border: 1px solid rgba(45, 217, 143, 0.5);
        }
        
        .calendar-day.event-day::after {
            content: '';
            position: absolute;
            bottom: 8px;
            width: 6px;
            height: 6px;
            background: #2DD98F;
            border-radius: 50%;
        }
        
        .calendar-day.today {
            background: #2DD98F;
            color: #080b18;
            box-shadow: 0 5px 15px rgba(45, 217, 143, 0.3);
        }
        
        .event-highlight {
            background: rgba(8, 11, 24, 0.9);
            border-radius: 15px;
            padding: 30px;
            margin-top: 30px;
            border-left: 4px solid #2DD98F;
        }
        
        .highlight-title {
            font-size: 20px;
            margin-bottom: 15px;
            color: white;
        }
        
        .highlight-date {
            display: flex;
            align-items: center;
            color: #2DD98F;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .countdown-section {
            background: url('images/pattern.png') center/cover;
            padding: 80px 0;
            position: relative;
        }
        
        .countdown-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(13, 11, 51, 0.9), rgba(8, 11, 24, 0.95));
        }
        
        .countdown-container {
            position: relative;
            z-index: 2;
            text-align: center;
        }
        
        .countdown-title {
            font-size: 36px;
            margin-bottom: 30px;
            color: white;
        }
        
        .countdown-box {
            display: inline-flex;
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .countdown-item {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 25px 20px;
            min-width: 120px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .countdown-value {
            font-size: 48px;
            font-weight: 800;
            color: #2DD98F;
            line-height: 1;
            margin-bottom: 5px;
        }
        
        .countdown-label {
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #C1C7DE;
        }
        
        .register-btn {
            background: linear-gradient(90deg, #2DD98F, #1BB8FF);
            color: #080b18;
            padding: 18px 50px;
            border-radius: 50px;
            font-weight: 800;
            text-transform: uppercase;
            font-size: 18px;
            letter-spacing: 1px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            border: none;
        }
        
        .register-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(45, 217, 143, 0.4);
            color: #080b18;
        }
        
        .events-cta {
            padding: 100px 0;
            background: linear-gradient(135deg, #080b18 0%, #0d0b33 100%);
            text-align: center;
        }
        
        .cta-title {
            font-size: 48px;
            margin-bottom: 20px;
            color: white;
        }
        
        .cta-text {
            font-size: 18px;
            color: #B3B3C0;
            max-width: 700px;
            margin: 0 auto 40px;
        }
        
        @media (max-width: 991px) {
            .hero-title {
                font-size: 50px;
            }
            
            .section-title h2 {
                font-size: 36px;
            }
            
            .countdown-item {
                min-width: 90px;
                padding: 20px 15px;
            }
            
            .countdown-value {
                font-size: 36px;
            }
        }
        
        @media (max-width: 767px) {
            .hero-title {
                font-size: 36px;
            }
            
            .events-hero {
                padding-top: 120px;
                padding-bottom: 60px;
            }
            
            .section-title h2 {
                font-size: 28px;
            }
            
            .countdown-box {
                gap: 10px;
            }
            
            .countdown-item {
                min-width: 70px;
                padding: 15px 10px;
            }
            
            .countdown-value {
                font-size: 28px;
            }
            
            .calendar-widget {
                padding: 20px;
            }
            
            .calendar-day {
                height: 45px;
                font-size: 14px;
            }
        }
    </style>


    
    <!-- Events Hero Section -->
    <section class="events-hero">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="hero-title wow fadeInUp">Upcoming Events & Conferences</h1>
                    <p class="hero-subtitle wow fadeInUp" data-wow-delay="0.2s">
                        Join our exclusive events, meet the Meme Bull team, learn about blockchain innovation, and connect with the crypto community worldwide.
                    </p>
                    <div class="wow fadeInUp" data-wow-delay="0.4s">
                        <a href="#events" class="event-btn">Explore Events</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Filter -->
    <section class="events-section" id="events">
        <div class="container">
            <div class="section-title wow fadeInUp">
                <h2>Upcoming Events</h2>
                <p>Discover upcoming conferences, meetups, and webinars featuring Meme Bull technology and blockchain innovation.</p>
            </div>
            
            <div class="events-filter wow fadeInUp">
                <button class="filter-btn active" data-filter="all">All Events</button>
                <button class="filter-btn" data-filter="featured">Featured</button>
                <button class="filter-btn" data-filter="conference">Conferences</button>
                <button class="filter-btn" data-filter="webinar">Webinars</button>
                <button class="filter-btn" data-filter="meetup">Meetups</button>
                <button class="filter-btn" data-filter="workshop">Workshops</button>
            </div>
            
            <div class="row" id="events-container">
                <!-- Event 1 -->
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-filter="featured conference">
                    <div class="event-card featured">
                        <div class="event-badge featured-badge">Featured</div>
                        <div class="event-img">
                            <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Blockchain Conference">
                            <div class="event-date">
                                <span class="day">15</span>
                                <span class="month">June 2024</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <span class="event-category">Conference</span>
                            <h3 class="event-title"><a href="#!">Global Blockchain Summit 2024</a></h3>
                            <p class="event-excerpt">Join the biggest blockchain event of the year featuring Meme Bull's CEO as keynote speaker.</p>
                            <div class="event-meta">
                                <div class="event-meta-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>San Francisco, USA</span>
                                </div>
                                <div class="event-meta-item">
                                    <i class="fas fa-clock"></i>
                                    <span>9:00 AM - 6:00 PM</span>
                                </div>
                            </div>
                            <a href="#!" class="event-btn">Register Now</a>
                        </div>
                    </div>
                </div>
                
                <!-- Event 2 -->
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.1s" data-filter="webinar">
                    <div class="event-card upcoming">
                        <div class="event-badge upcoming-badge">Upcoming</div>
                        <div class="event-img">
                            <img src="https://images.unsplash.com/photo-1587614382346-4ec70e388b28?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Webinar">
                            <div class="event-date">
                                <span class="day">22</span>
                                <span class="month">May 2024</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <span class="event-category">Webinar</span>
                            <h3 class="event-title"><a href="#!">Meme Bull Tokenomics Deep Dive</a></h3>
                            <p class="event-excerpt">Live webinar exploring Meme Bull's token distribution, staking rewards, and economic model.</p>
                            <div class="event-meta">
                                <div class="event-meta-item">
                                    <i class="fas fa-globe"></i>
                                    <span>Online Event</span>
                                </div>
                                <div class="event-meta-item">
                                    <i class="fas fa-clock"></i>
                                    <span>2:00 PM UTC</span>
                                </div>
                            </div>
                            <a href="#!" class="event-btn">Join Webinar</a>
                        </div>
                    </div>
                </div>
                
                <!-- Event 3 -->
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.2s" data-filter="meetup">
                    <div class="event-card">
                        <div class="event-img">
                            <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Community Meetup">
                            <div class="event-date">
                                <span class="day">05</span>
                                <span class="month">July 2024</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <span class="event-category">Community Meetup</span>
                            <h3 class="event-title"><a href="#!">London Crypto Enthusiasts Gathering</a></h3>
                            <p class="event-excerpt">Network with fellow crypto enthusiasts and learn about Meme Bull's latest developments.</p>
                            <div class="event-meta">
                                <div class="event-meta-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>London, UK</span>
                                </div>
                                <div class="event-meta-item">
                                    <i class="fas fa-clock"></i>
                                    <span>6:30 PM - 9:00 PM</span>
                                </div>
                            </div>
                            <a href="#!" class="event-btn">RSVP Now</a>
                        </div>
                    </div>
                </div>
                
                <!-- Event 4 -->
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-filter="workshop">
                    <div class="event-card">
                        <div class="event-img">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Workshop">
                            <div class="event-date">
                                <span class="day">18</span>
                                <span class="month">June 2024</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <span class="event-category">Workshop</span>
                            <h3 class="event-title"><a href="#!">Building DApps on Meme Bull</a></h3>
                            <p class="event-excerpt">Hands-on workshop for developers to learn how to build decentralized applications on our platform.</p>
                            <div class="event-meta">
                                <div class="event-meta-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Berlin, Germany</span>
                                </div>
                                <div class="event-meta-item">
                                    <i class="fas fa-clock"></i>
                                    <span>10:00 AM - 4:00 PM</span>
                                </div>
                            </div>
                            <a href="#!" class="event-btn">Book Seat</a>
                        </div>
                    </div>
                </div>
                
                <!-- Event 5 -->
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.1s" data-filter="featured conference">
                    <div class="event-card featured">
                        <div class="event-badge featured-badge">Featured</div>
                        <div class="event-img">
                            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Asia Conference">
                            <div class="event-date">
                                <span class="day">12</span>
                                <span class="month">Aug 2024</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <span class="event-category">Conference</span>
                            <h3 class="event-title"><a href="#!">Asia Blockchain Week 2024</a></h3>
                            <p class="event-excerpt">Meme Bull presenting our revolutionary blockchain solutions to the Asian market.</p>
                            <div class="event-meta">
                                <div class="event-meta-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Singapore</span>
                                </div>
                                <div class="event-meta-item">
                                    <i class="fas fa-clock"></i>
                                    <span>All Day Event</span>
                                </div>
                            </div>
                            <a href="#!" class="event-btn">Get Tickets</a>
                        </div>
                    </div>
                </div>
                
                <!-- Event 6 -->
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.2s" data-filter="webinar">
                    <div class="event-card">
                        <div class="event-img">
                            <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="AMA Session">
                            <div class="event-date">
                                <span class="day">30</span>
                                <span class="month">May 2024</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <span class="event-category">AMA Session</span>
                            <h3 class="event-title"><a href="#!">Ask Me Anything with Meme Bull Team</a></h3>
                            <p class="event-excerpt">Live Q&A session with our core team members. Ask anything about our roadmap and technology.</p>
                            <div class="event-meta">
                                <div class="event-meta-item">
                                    <i class="fas fa-globe"></i>
                                    <span>Twitter Spaces</span>
                                </div>
                                <div class="event-meta-item">
                                    <i class="fas fa-clock"></i>
                                    <span>7:00 PM UTC</span>
                                </div>
                            </div>
                            <a href="#!" class="event-btn">Set Reminder</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5 wow fadeInUp">
                <a href="#!" class="register-btn">View All Events Calendar</a>
            </div>
        </div>
    </section>

    <!-- Countdown to Next Major Event -->
    <section class="countdown-section">
        <div class="container">
            <div class="countdown-container">
                <h2 class="countdown-title wow fadeInUp">Countdown to Our Next Major Event</h2>
                <div class="countdown-box wow fadeInUp" data-wow-delay="0.2s">
                    <div class="countdown-item">
                        <div class="countdown-value" id="days">00</div>
                        <div class="countdown-label">Days</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-value" id="hours">00</div>
                        <div class="countdown-label">Hours</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-value" id="minutes">00</div>
                        <div class="countdown-label">Minutes</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-value" id="seconds">00</div>
                        <div class="countdown-label">Seconds</div>
                    </div>
                </div>
                <p class="cta-text wow fadeInUp" data-wow-delay="0.3s">Global Blockchain Summit 2024 - San Francisco, USA</p>
                <a href="#!" class="register-btn wow fadeInUp" data-wow-delay="0.4s">Register Now for Early Bird Tickets</a>
            </div>
        </div>
    </section>

    <!-- Events Calendar -->
    <section class="calendar-section">
        <div class="container">
            <div class="section-title wow fadeInUp">
                <h2>Events Calendar</h2>
                <p>Plan ahead with our comprehensive events calendar. Never miss an important Meme Bull event.</p>
            </div>
            
            <div class="row">
                <div class="col-lg-8 mb-4 mb-lg-0 wow fadeInUp">
                    <div class="calendar-widget">
                        <div class="calendar-header">
                            <div class="calendar-month">June 2024</div>
                            <div class="calendar-nav">
                                <button id="prev-month"><i class="fas fa-chevron-left"></i></button>
                                <button id="next-month"><i class="fas fa-chevron-right"></i></button>
                            </div>
                        </div>
                        <div class="calendar-weekdays">
                            <div>Sun</div>
                            <div>Mon</div>
                            <div>Tue</div>
                            <div>Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                        </div>
                        <div class="calendar-days" id="calendar-days">
                            <!-- Calendar days will be populated by JavaScript -->
                        </div>
                        
                        <div class="event-highlight">
                            <h4 class="highlight-title">Today's Event</h4>
                            <div class="highlight-date">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                <span>May 22, 2024 - Meme Bull Tokenomics Webinar</span>
                            </div>
                            <p>Join our live webinar today at 2:00 PM UTC to learn about Meme Bull's innovative token economics and staking rewards system.</p>
                            <a href="#!" class="event-btn mt-3">Join Now</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="calendar-widget">
                        <h4 class="highlight-title mb-4">Upcoming Events</h4>
                        
                        <div class="mb-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="mr-3 text-center">
                                    <div style="background: #2DD98F; color: #080b18; width: 50px; height: 50px; border-radius: 8px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                        <div style="font-weight: 800; font-size: 18px;">15</div>
                                        <div style="font-size: 10px; font-weight: 600;">JUN</div>
                                    </div>
                                </div>
                                <div>
                                    <h6 style="font-size: 16px; margin-bottom: 5px;">Global Blockchain Summit</h6>
                                    <p style="font-size: 13px; color: #92939E; margin-bottom: 0;">San Francisco, USA</p>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-center mb-3">
                                <div class="mr-3 text-center">
                                    <div style="background: #4D57FF; color: white; width: 50px; height: 50px; border-radius: 8px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                        <div style="font-weight: 800; font-size: 18px;">18</div>
                                        <div style="font-size: 10px; font-weight: 600;">JUN</div>
                                    </div>
                                </div>
                                <div>
                                    <h6 style="font-size: 16px; margin-bottom: 5px;">DApps Workshop</h6>
                                    <p style="font-size: 13px; color: #92939E; margin-bottom: 0;">Berlin, Germany</p>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-center mb-3">
                                <div class="mr-3 text-center">
                                    <div style="background: #1BB8FF; color: #080b18; width: 50px; height: 50px; border-radius: 8px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                        <div style="font-weight: 800; font-size: 18px;">30</div>
                                        <div style="font-size: 10px; font-weight: 600;">MAY</div>
                                    </div>
                                </div>
                                <div>
                                    <h6 style="font-size: 16px; margin-bottom: 5px;">AMA Session</h6>
                                    <p style="font-size: 13px; color: #92939E; margin-bottom: 0;">Twitter Spaces</p>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-center">
                                <div class="mr-3 text-center">
                                    <div style="background: #9162FF; color: white; width: 50px; height: 50px; border-radius: 8px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                        <div style="font-weight: 800; font-size: 18px;">05</div>
                                        <div style="font-size: 10px; font-weight: 600;">JUL</div>
                                    </div>
                                </div>
                                <div>
                                    <h6 style="font-size: 16px; margin-bottom: 5px;">London Meetup</h6>
                                    <p style="font-size: 13px; color: #92939E; margin-bottom: 0;">London, UK</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center mt-4">
                            <a href="#!" class="event-btn" style="width: 100%;">Subscribe to Calendar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="events-cta">
        <div class="container">
            <h2 class="cta-title wow fadeInUp">Host Your Own Meme Bull Event</h2>
            <p class="cta-text wow fadeInUp" data-wow-delay="0.2s">
                Interested in organizing a Meme Bull meetup, workshop, or presentation in your city? We provide resources, swag, and sometimes even team members to support community-led events.
            </p>
            <a href="#!" class="register-btn wow fadeInUp" data-wow-delay="0.4s">Become a Community Organizer</a>
        </div>
    </section>




    <!-- Events Page Custom JavaScript -->
<script>
    $(document).ready(function() {
        // Initialize WOW animations
        new WOW().init();
        
        // Event filtering functionality
        $('.filter-btn').click(function() {
            $('.filter-btn').removeClass('active');
            $(this).addClass('active');
            
            const filter = $(this).data('filter');
            
            if (filter === 'all') {
                $('.col-lg-4').show();
            } else {
                $('.col-lg-4').hide();
                $(`.col-lg-4[data-filter*="${filter}"]`).show();
            }
        });
        
        // Countdown timer for next major event
        const countdownDate = new Date('June 15, 2024 09:00:00').getTime();
        
        function updateCountdown() {
            const now = new Date().getTime();
            const distance = countdownDate - now;
            
            if (distance < 0) {
                clearInterval(countdownInterval);
                $('#days').text('00');
                $('#hours').text('00');
                $('#minutes').text('00');
                $('#seconds').text('00');
                return;
            }
            
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            $('#days').text(days.toString().padStart(2, '0'));
            $('#hours').text(hours.toString().padStart(2, '0'));
            $('#minutes').text(minutes.toString().padStart(2, '0'));
            $('#seconds').text(seconds.toString().padStart(2, '0'));
        }
        
        const countdownInterval = setInterval(updateCountdown, 1000);
        updateCountdown();
        
        // Calendar functionality
        const today = new Date();
        let currentMonth = today.getMonth();
        let currentYear = today.getFullYear();
        
        const months = [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];
        
        const eventDays = [5, 15, 18, 22, 30]; // Days with events
        
        function generateCalendar(month, year) {
            $('.calendar-month').text(`${months[month]} ${year}`);
            
            const firstDay = new Date(year, month, 1).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            
            let calendarHTML = '';
            
            // Previous month days
            for (let i = 0; i < firstDay; i++) {
                calendarHTML += `<div class="calendar-day"></div>`;
            }
            
            // Current month days
            for (let day = 1; day <= daysInMonth; day++) {
                const isToday = day === today.getDate() && month === today.getMonth() && year === today.getFullYear();
                const hasEvent = eventDays.includes(day);
                
                let dayClass = 'calendar-day';
                if (isToday) dayClass += ' today';
                if (hasEvent) dayClass += ' event-day';
                
                calendarHTML += `<div class="${dayClass}">${day}</div>`;
            }
            
            $('#calendar-days').html(calendarHTML);
        }
        
        generateCalendar(currentMonth, currentYear);
        
        $('#prev-month').click(function() {
            currentMonth--;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
            generateCalendar(currentMonth, currentYear);
        });
        
        $('#next-month').click(function() {
            currentMonth++;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            generateCalendar(currentMonth, currentYear);
        });
        
        // Smooth scrolling for anchor links
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            
            const target = this.hash;
            const $target = $(target);
            
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 100
            }, 900, 'swing');
        });
        
        // Event card hover effects enhancement
        $('.event-card').hover(
            function() {
                $(this).find('.event-btn').css({
                    'transform': 'translateY(-2px)',
                    'box-shadow': '0 10px 20px rgba(45, 217, 143, 0.3)'
                });
            },
            function() {
                $(this).find('.event-btn').css({
                    'transform': 'translateY(0)',
                    'box-shadow': 'none'
                });
            }
        );
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\appx\resources\views/home/events.blade.php ENDPATH**/ ?>