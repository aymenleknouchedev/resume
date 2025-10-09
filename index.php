<!DOCTYPE html>
<html class="no-js ss-preload" lang="en">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Aymen - Computer Engineer</title>
    <meta name="description" content="Aymen - Computer Engineer | Full Stack Developer | UI/UX Designer">
    <meta name="author" content="Aymen">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- Custom CSS for WhatsApp Button -->
    <style>
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .whatsapp-float:hover {
            background-color: #128C7E;
            transform: scale(1.1);
        }

        .whatsapp-float i {
            margin-top: 5px;
        }

        /* For mobile devices */
        @media screen and (max-width: 767px) {
            .whatsapp-float {
                width: 50px;
                height: 50px;
                bottom: 20px;
                right: 20px;
                font-size: 24px;
            }
        }
    </style>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

    <!-- Font Awesome for WhatsApp icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body id="top">


    <!-- # preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
        </div>
    </div>


    <!-- # page wrap
    ================================================== -->
    <div class="s-pagewrap">

        <div class="circles">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>


        <!-- ## site header 
        ================================================== -->
        <header class="s-header">

            <div class="header-mobile">
                <span class="mobile-home-link"><a class="smoothscroll" href="#intro">Hey.</a></span>
                <a class="mobile-menu-toggle" href="#0"><span>Menu</span></a>
            </div>

            <div class="row wide main-nav-wrap">
                <nav class="column lg-12 main-nav">
                    <ul>
                        <li><a href="#" class="smoothscroll home-link">Hey.</a></li>
                        <li><a href="#intro" class="smoothscroll">Intro</a></li>
                        <li><a href="#about" class="smoothscroll">About</a></li>
                        <li><a href="#services" class="smoothscroll">Services</a></li>
                        <li><a href="#works" class="smoothscroll">Projects</a></li>
                        <li><a href="#contact" class="smoothscroll">Contact</a></li>
                    </ul>
                </nav>
            </div>

        </header> <!-- end s-header -->


        <!-- ## main content
        ==================================================- -->
        <main class="s-content">


            <!-- ### intro
            ================================================== -->
            <section id="intro" class="s-intro target-section">

                <div class="row intro-content wide">

                    <div class="column">
                        <div class="text-pretitle with-line">
                            Hello World
                        </div>

                        <h1 class="text-huge-title">
                            I am Aymen, <br>
                            a Computer Engineer <br>
                            & Full Stack Developer <br>
                            building projects from <br>
                            idea to deployment.
                        </h1>
                    </div>

                    <ul class="intro-social">
                        <li><a href="#0">GitHub</a></li>
                        <li><a href="#0">LinkedIn</a></li>
                        <li><a href="#0">Behance</a></li>
                        <li><a href="#0">Dribbble</a></li>
                    </ul>

                </div> <!-- end intro content -->

                <a href="#about" class="intro-scrolldown smoothscroll">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                        <path d="M11 21.883l-6.235-7.527-.765.644 7.521 9 7.479-9-.764-.645-6.236 7.529v-21.884h-1v21.883z" />
                    </svg>
                </a>

            </section> <!-- end s-intro -->


            <!-- ### about
            ================================================== -->
            <section id="about" class="s-about target-section">


                <div class="row about-info wide" data-animate-block>

                    <div class="column lg-6 md-12 about-info__pic-block">
                        <img src="images/about-photo.jpg"
                            srcset="images/about-photo.jpg 1x, images/about-photo@2x.jpg 2x" alt="Aymen - Computer Engineer" class="about-info__pic" data-animate-el>
                    </div>

                    <div class="column lg-6 md-12">
                        <div class="about-info__text">

                            <h2 class="text-pretitle with-line" data-animate-el>
                                About
                            </h2>
                            <p class="attention-getter" data-animate-el>
                                I'm a Computer Engineer passionate about creating digital solutions from concept to completion.
                                With expertise in both design and development, I bridge the gap between beautiful user interfaces
                                and robust technical implementations. I specialize in transforming ideas into fully functional
                                applications with seamless user experiences.
                            </p>
                            <p data-animate-el>
                                My process involves understanding client needs, designing intuitive interfaces, developing
                                scalable solutions, and deploying to reliable hosting environments. Whether it's a web application,
                                mobile app, or custom software, I ensure every project meets the highest standards of quality and performance.
                            </p>
                            <a href="#0" class="btn btn--medium u-fullwidth" data-animate-el>Download Resume</a>

                        </div>
                    </div>
                </div> <!-- about-info -->


                <!-- ### services
                ================================================== -->
                <section id="services" class="s-services target-section">
                    <div class="row services-list block-lg-one-half block-stack-on-1000" data-animate-block>

                        <div class="column services-list__item" data-animate-el>
                            <div class="services-list__item-content">
                                <h4 class="services-list__item-title">UI/UX Design</h4>
                                <p class="services-list__item-desc">
                                    Creating intuitive and engaging user interfaces with a focus on user experience.
                                    From wireframes to interactive prototypes, I design solutions that are both beautiful and functional.
                                </p>
                            </div>
                        </div> <!-- end services-list__item -->

                        <div class="column services-list__item" data-animate-el>
                            <div class="services-list__item-content">
                                <h4 class="services-list__item-title">Full Stack Development</h4>
                                <p class="services-list__item-desc">
                                    Building robust applications with modern technologies. Frontend with React, Vue, or Angular,
                                    and backend with Node.js, Python, or PHP. Database design and API development.
                                </p>
                            </div>
                        </div> <!-- end services-list__item -->

                        <div class="column services-list__item" data-animate-el>
                            <div class="services-list__item-content">
                                <h4 class="services-list__item-title">Deployment & Hosting</h4>
                                <p class="services-list__item-desc">
                                    Ensuring your application runs smoothly in production. Cloud deployment,
                                    server configuration, CI/CD pipelines, and performance optimization for scalable solutions.
                                </p>
                            </div>
                        </div> <!-- end services-list__item -->

                        <div class="column services-list__item" data-animate-el>
                            <div class="services-list__item-content">
                                <h4 class="services-list__item-title">End-to-End Solutions</h4>
                                <p class="services-list__item-desc">
                                    Taking projects from initial concept to final product. Comprehensive project management,
                                    regular updates, and delivering solutions that exceed expectations.
                                </p>
                            </div>
                        </div> <!-- end services-list__item -->

                    </div> <!-- end services-list -->
                </section> <!-- end s-services -->


                <div class="row about-expertise" data-animate-block>
                    <div class="column lg-12">

                        <h2 class="text-pretitle" data-animate-el>Technical Skills</h2>

                        <ul class="skills-list h1" data-animate-el>
                            <li>UI/UX Design</li>
                            <li>Frontend Development</li>
                            <li>Backend Development</li>
                            <li>Database Design</li>
                            <li>Cloud Deployment</li>
                            <li>DevOps</li>
                        </ul>

                    </div>
                </div> <!-- end about-expertise -->


                <div class="row about-timelines" data-animate-block>

                    <div class="column lg-6 tab-12">

                        <h2 class="text-pretitle" data-animate-el>
                            Experience
                        </h2>

                        <div class="timeline" data-animate-el>

                            <div class="timeline__block">
                                <div class="timeline__bullet"></div>
                                <div class="timeline__header">
                                    <h4 class="timeline__title">Freelance Graphic Designer & Developer</h3>
                                        <h5 class="timeline__meta">Graphic Design & Web Development</h5>
                                        <p class="timeline__timeframe">2019 - Present</p>
                                </div>
                                <div class="timeline__desc">
                                    <p>Providing comprehensive design and development services to various clients.
                                        Creating visual identities, marketing materials, and developing responsive websites
                                        and web applications from concept to deployment.</p>
                                </div>
                            </div>

                            <div class="timeline__block">
                                <div class="timeline__bullet"></div>
                                <div class="timeline__header">
                                    <h4 class="timeline__title">Missahat Company</h4>
                                    <h5 class="timeline__meta">Web Developer</h5>
                                    <p class="timeline__timeframe">2023 - 2025</p>
                                </div>
                                <div class="timeline__desc">
                                    <p>Developed and maintained web applications, implemented responsive designs,
                                        and collaborated with cross-functional teams to deliver high-quality digital solutions.
                                        Worked on frontend and backend development using modern technologies.</p>
                                </div>
                            </div>

                            <div class="timeline__block">
                                <div class="timeline__bullet"></div>
                                <div class="timeline__header">
                                    <h4 class="timeline__title">Printing Company</h4>
                                    <h5 class="timeline__meta">Graphic Designer</h5>
                                    <p class="timeline__timeframe">2020 - 2023</p>
                                </div>
                                <div class="timeline__desc">
                                    <p>Created visual concepts and designs for various print materials including brochures,
                                        business cards, banners, and packaging. Collaborated with clients to understand their
                                        needs and delivered designs that met their requirements and brand guidelines.</p>
                                </div>
                            </div>

                        </div> <!-- end timeline -->

                    </div> <!-- end column -->

                    <div class="column lg-6 tab-12">

                        <h2 class="text-pretitle" data-animate-el>
                            Education
                        </h2>

                        <div class="timeline" data-animate-el>

                            <div class="timeline__block">
                                <div class="timeline__bullet"></div>
                                <div class="timeline__header">
                                    <h4 class="timeline__title">Master's Degree in Computer Science</h3>
                                        <h5 class="timeline__meta">University of Technology</h5>
                                        <p class="timeline__timeframe">2021 - 2023</p>
                                </div>
                                <div class="timeline__desc">
                                    <p>Advanced studies in computer science with focus on software engineering,
                                        artificial intelligence, and data structures. Completed research projects in
                                        web technologies and user interface design.</p>
                                </div>
                            </div>

                            <div class="timeline__block">
                                <div class="timeline__bullet"></div>
                                <div class="timeline__header">
                                    <h4 class="timeline__title">Bachelor's Degree in Computer Science</h4>
                                    <h5 class="timeline__meta">University of Technology</h5>
                                    <p class="timeline__timeframe">2018 - 2021</p>
                                </div>
                                <div class="timeline__desc">
                                    <p>Comprehensive computer science education covering programming, algorithms,
                                        database systems, and software engineering principles. Graduated with honors.</p>
                                </div>
                            </div>

                        </div> <!-- end timeline -->

                    </div> <!-- end column -->


                </div> <!-- end about-timelines -->

            </section> <!-- end s-about -->


            <!-- ### works
            ================================================== -->
            <section id="works" class="s-works target-section">


                <div class="row works-portfolio">

                    <div class="column lg-12" data-animate-block>

                        <h2 class="text-pretitle" data-animate-el>
                            Recent Projects
                        </h2>
                        <p class="h1" data-animate-el>
                            Here are some projects I've developed from concept to deployment. Each represents a complete solution with design, development, and hosting.
                        </p>

                        <ul class="folio-list row block-lg-one-half block-stack-on-1000">

                            <li class="folio-list__item column" data-animate-el>
                                <a class="folio-list__item-link" href="#modal-01">
                                    <div class="folio-list__item-pic">
                                        <img src="images/portfolio/fuji.jpg"
                                            srcset="images/portfolio/fuji.jpg 1x, images/portfolio/fuji@2x.jpg 2x" alt="E-commerce Platform">
                                    </div>

                                    <div class="folio-list__item-text">
                                        <div class="folio-list__item-cat">
                                            Full Stack Development
                                        </div>
                                        <div class="folio-list__item-title">
                                            E-commerce Platform
                                        </div>
                                    </div>
                                </a>
                                <a class="folio-list__proj-link" href="#" title="project link">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li> <!--end folio-list__item -->

                            <li class="folio-list__item column" data-animate-el>
                                <a class="folio-list__item-link" href="#modal-02">
                                    <div class="folio-list__item-pic">
                                        <img src="images/portfolio/lamp.jpg"
                                            srcset="images/portfolio/lamp.jpg 1x, images/portfolio/lamp@2x.jpg 2x" alt="Task Management App">
                                    </div>

                                    <div class="folio-list__item-text">
                                        <div class="folio-list__item-cat">
                                            Mobile Application
                                        </div>
                                        <div class="folio-list__item-title">
                                            Productivity Suite
                                        </div>
                                    </div>
                                </a>
                                <a class="folio-list__proj-link" href="#" title="project link">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li> <!--end folio-list__item -->

                            <li class="folio-list__item column" data-animate-el>
                                <a class="folio-list__item-link" href="#modal-03">
                                    <div class="folio-list__item-pic">
                                        <img src="images/portfolio/rucksack.jpg"
                                            srcset="images/portfolio/rucksack.jpg 1x, images/portfolio/rucksack@2x.jpg 2x" alt="Analytics Dashboard">
                                    </div>

                                    <div class="folio-list__item-text">
                                        <div class="folio-list__item-cat">
                                            Web Application
                                        </div>
                                        <div class="folio-list__item-title">
                                            Data Analytics Dashboard
                                        </div>
                                    </div>
                                </a>
                                <a class="folio-list__proj-link" href="#" title="project link">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li> <!--end folio-list__item -->

                            <li class="folio-list__item column" data-animate-el>
                                <a class="folio-list__item-link" href="#modal-04">
                                    <div class="folio-list__item-pic">
                                        <img src="images/portfolio/skaterboy.jpg"
                                            srcset="images/portfolio/skaterboy.jpg 1x, images/portfolio/skaterboy@2x.jpg 2x" alt="Portfolio Website">
                                    </div>

                                    <div class="folio-list__item-text">
                                        <div class="folio-list__item-cat">
                                            UI/UX Design & Development
                                        </div>
                                        <div class="folio-list__item-title">
                                            Creative Agency Website
                                        </div>
                                    </div>
                                </a>
                                <a class="folio-list__proj-link" href="#" title="project link">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li> <!--end folio-list__item -->

                            <li class="folio-list__item column" data-animate-el>
                                <a class="folio-list__item-link" href="#modal-05">
                                    <div class="folio-list__item-pic">
                                        <img src="images/portfolio/sanddunes.jpg"
                                            srcset="images/portfolio/sanddunes.jpg 1x, images/portfolio/sanddunes@2x.jpg 2x" alt="API Development">
                                    </div>

                                    <div class="folio-list__item-text">
                                        <div class="folio-list__item-cat">
                                            Backend Development
                                        </div>
                                        <div class="folio-list__item-title">
                                            REST API Service
                                        </div>
                                    </div>
                                </a>
                                <a class="folio-list__proj-link" href="#" title="project link">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li> <!--end folio-list__item -->

                            <li class="folio-list__item column" data-animate-el>
                                <a class="folio-list__item-link" href="#modal-06">
                                    <div class="folio-list__item-pic">
                                        <img src="images/portfolio/minimalismo.jpg"
                                            srcset="images/portfolio/minimalismo.jpg 1x, images/portfolio/minimalismo@2x.jpg 2x" alt="Cloud Solution">
                                    </div>

                                    <div class="folio-list__item-text">
                                        <div class="folio-list__item-cat">
                                            Cloud Deployment
                                        </div>
                                        <div class="folio-list__item-title">
                                            Scalable Infrastructure
                                        </div>
                                    </div>
                                </a>
                                <a class="folio-list__proj-link" href="#" title="project link">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li> <!--end folio-list__item -->

                        </ul> <!-- end folio-list -->

                    </div> <!-- end column -->


                    <!-- Modal Templates Popup
                    -------------------------------------------- -->
                    <div id="modal-01" hidden>
                        <div class="modal-popup">
                            <img src="images/portfolio/gallery/g-fuji.jpg" alt="E-commerce Platform">

                            <div class="modal-popup__desc">
                                <h5>E-commerce Platform</h5>
                                <p>Complete e-commerce solution with product catalog, shopping cart, user authentication, and payment integration. Built with React frontend, Node.js backend, and MongoDB database. Deployed on AWS with CI/CD pipeline.</p>
                                <ul class="modal-popup__cat">
                                    <li>Full Stack Development</li>
                                    <li>UI/UX Design</li>
                                    <li>Cloud Deployment</li>
                                </ul>
                            </div>

                            <a href="https://www.github.com/" class="modal-popup__details">View on GitHub</a>
                        </div>
                    </div> <!-- end modal -->

                    <div id="modal-02" hidden>
                        <div class="modal-popup">
                            <img src="images/portfolio/gallery/g-lamp.jpg" alt="Productivity Suite">

                            <div class="modal-popup__desc">
                                <h5>Productivity Suite</h5>
                                <p>Cross-platform task management application with real-time synchronization. Features include project organization, team collaboration, and progress tracking. Developed with React Native for mobile and web versions.</p>
                                <ul class="modal-popup__cat">
                                    <li>Mobile Development</li>
                                    <li>UI/UX Design</li>
                                </ul>
                            </div>

                            <a href="https://www.github.com/" class="modal-popup__details">View on GitHub</a>
                        </div>
                    </div> <!-- end modal -->

                    <div id="modal-03" hidden>
                        <div class="modal-popup">
                            <img src="images/portfolio/gallery/g-rucksack.jpg" alt="Data Analytics Dashboard">

                            <div class="modal-popup__desc">
                                <h5>Data Analytics Dashboard</h5>
                                <p>Interactive dashboard for visualizing complex datasets with customizable charts and reports. Built with D3.js for data visualization and Python Flask backend for data processing. Features real-time data updates and export functionality.</p>
                                <ul class="modal-popup__cat">
                                    <li>Web Application</li>
                                    <li>Data Visualization</li>
                                </ul>
                            </div>

                            <a href="https://www.github.com/" class="modal-popup__details">View on GitHub</a>
                        </div>
                    </div> <!-- end modal -->

                    <div id="modal-04" hidden>
                        <div class="modal-popup">
                            <img src="images/portfolio/gallery/g-skaterboy.jpg" alt="Creative Agency Website">

                            <div class="modal-popup__desc">
                                <h5>Creative Agency Website</h5>
                                <p>Responsive portfolio website for a design agency with custom CMS, project galleries, and contact forms. Implemented with modern CSS animations and optimized for performance. Hosted on Netlify with form handling integration.</p>
                                <ul class="modal-popup__cat">
                                    <li>UI/UX Design</li>
                                    <li>Frontend Development</li>
                                </ul>
                            </div>

                            <a href="https://www.github.com/" class="modal-popup__details">View on GitHub</a>
                        </div>
                    </div> <!-- end modal -->

                    <div id="modal-05" hidden>
                        <div class="modal-popup">

                            <img src="images/portfolio/gallery/g-sanddunes.jpg" alt="REST API Service">

                            <div class="modal-popup__desc">
                                <h5>REST API Service</h5>
                                <p>Scalable backend API for a mobile application with user management, content delivery, and analytics. Built with Node.js and Express, using JWT for authentication and Redis for caching. Deployed on Heroku with monitoring.</p>
                                <ul class="modal-popup__cat">
                                    <li>Backend Development</li>
                                    <li>API Design</li>
                                </ul>
                            </div>

                            <a href="https://www.github.com/" class="modal-popup__details">View on GitHub</a>
                        </div>
                    </div> <!-- end modal -->

                    <div id="modal-06" hidden>
                        <div class="modal-popup">
                            <img src="images/portfolio/gallery/g-minimalismo.jpg" alt="Scalable Infrastructure">

                            <div class="modal-popup__desc">
                                <h5>Scalable Infrastructure</h5>
                                <p>Cloud infrastructure setup for high-traffic web application using AWS services including EC2, RDS, S3, and CloudFront. Implemented auto-scaling, load balancing, and database replication for optimal performance and reliability.</p>
                                <ul class="modal-popup__cat">
                                    <li>Cloud Architecture</li>
                                    <li>DevOps</li>
                                </ul>
                            </div>

                            <a href="https://www.github.com/" class="modal-popup__details">View on GitHub</a>
                        </div>
                    </div> <!-- end modal -->

                </div> <!-- end works-portfolio -->


                <div class="row testimonials">
                    <div class="column lg-12" data-animate-block>

                        <div class="swiper-container testimonial-slider" data-animate-el>

                            <div class="swiper-wrapper">

                                <div class="testimonial-slider__slide swiper-slide">
                                    <div class="testimonial-slider__author">
                                        <img src="images/avatars/user-02.jpg" alt="Author image" class="testimonial-slider__avatar">
                                        <cite class="testimonial-slider__cite">
                                            <strong>Sarah Johnson</strong>
                                            <span>CEO, TechStart Inc.</span>
                                        </cite>
                                    </div>
                                    <p>
                                        Aymen transformed our concept into a fully functional web application that exceeded our expectations.
                                        His attention to both design details and technical implementation was impressive. The project was delivered on time and within budget.
                                    </p>
                                </div> <!-- end testimonial-slider__slide -->

                                <div class="testimonial-slider__slide swiper-slide">
                                    <div class="testimonial-slider__author">
                                        <img src="images/avatars/user-03.jpg" alt="Author image" class="testimonial-slider__avatar">
                                        <cite class="testimonial-slider__cite">
                                            <strong>Michael Chen</strong>
                                            <span>Product Manager, DataCorp</span>
                                        </cite>
                                    </div>
                                    <p>
                                        Working with Aymen was a seamless experience. He not only developed our analytics dashboard but also provided valuable insights on user experience.
                                        His full-stack capabilities allowed him to handle both frontend and backend challenges efficiently.
                                    </p>
                                </div> <!-- end testimonial-slider__slide -->

                                <div class="testimonial-slider__slide swiper-slide">
                                    <div class="testimonial-slider__author">
                                        <img src="images/avatars/user-01.jpg" alt="Author image" class="testimonial-slider__avatar">
                                        <cite class="testimonial-slider__cite">
                                            <strong>Emily Rodriguez</strong>
                                            <span>Founder, CreativeLab</span>
                                        </cite>
                                    </div>
                                    <p>
                                        Aymen's ability to understand our vision and translate it into a beautiful, functional website was remarkable.
                                        He managed the entire process from design to deployment, and the result was exactly what we needed to showcase our work.
                                    </p>
                                </div> <!-- end testimonial-slider__slide -->

                                <div class="testimonial-slider__slide swiper-slide">
                                    <div class="testimonial-slider__author">
                                        <img src="images/avatars/user-06.jpg" alt="Author image" class="testimonial-slider__avatar">
                                        <cite class="testimonial-slider__cite">
                                            <strong>David Wilson</strong>
                                            <span>CTO, StartupXYZ</span>
                                        </cite>
                                    </div>
                                    <p>
                                        The cloud infrastructure Aymen set up for our application has been running flawlessly under heavy traffic.
                                        His expertise in deployment and hosting ensured our platform remained stable and scalable as we grew.
                                    </p>
                                </div> <!-- end testimonial-slider__slide -->

                            </div> <!-- end swiper-wrapper -->

                            <div class="swiper-pagination"></div>

                        </div> <!-- end swiper-container -->

                    </div> <!-- end column -->
                </div> <!-- end row testimonials -->

            </section> <!-- end s-works -->


            <!-- ### contact
            ================================================== -->
            <section id="contact" class="s-contact target-section">

                <div class="row contact-top">
                    <div class="column lg-12">
                        <h2 class="text-pretitle">
                            Get In Touch
                        </h2>

                        <p class="h1">
                            I'm always interested in new challenges and opportunities.
                            Whether you have a project idea or just want to discuss technology and design — let's connect.
                        </p>
                    </div>
                </div> <!-- end contact-top -->

                <div class="row contact-bottom">
                    <div class="column lg-3 md-5 tab-6 stack-on-550 contact-block">
                        <h3 class="text-pretitle">Reach me at</h3>
                        <p class="contact-links">
                            <a href="mailto:contact@leknoucheaymen.com" class="mailtoui">contact@leknoucheaymen.com</a> <br>
                            <a href="tel:+213549739507">+213 549 739 507</a>
                        </p>
                    </div>
                    <div class="column lg-4 md-5 tab-6 stack-on-550 contact-block">
                        <h3 class="text-pretitle">Location</h3>
                        <p>
                            Sidi Yahia, Algeria
                        </p>
                    </div>
                    <div class="column lg-4 md-5 tab-6 stack-on-550 contact-block">
                        <h3 class="text-pretitle">Social</h3>
                        <ul class="contact-social">
                            <li><a href="#0">GitHub</a></li>
                            <li><a href="#0">LinkedIn</a></li>
                            <li><a href="#0">Behance</a></li>
                            <li><a href="#0">Dribbble</a></li>
                            <li><a href="#0">Twitter</a></li>
                        </ul>
                    </div>
                    <div class="column lg-4 md-12 contact-block">
                        <a href="mailto:contact@leknoucheaymen.com" class="mailtoui btn btn--medium u-fullwidth contact-btn">Start a Project</a>
                    </div>
                </div> <!-- end contact-bottom -->

            </section> <!-- end contact -->

        </main> <!-- end s-content -->


        <!-- ## footer
        ================================================== -->
        <footer class="s-footer">

            <div class="row">
                <div class="column ss-copyright">
                    <span>© Copyright Aymen 2025</span>
                    <span>Computer Engineer | Full Stack Developer | UI/UX Designer</span>
                </div>

                <div class="ss-go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill-rule="evenodd" clip-rule="evenodd">
                            <path d="M11 2.206l-6.235 7.528-.765-.645 7.521-9 7.479 9-.764.646-6.236-7.53v21.884h-1v-21.883z" />
                        </svg>
                    </a>
                </div>
            </div>

        </footer> <!-- end s-footer -->

    </div> <!-- end -s-pagewrap -->

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/213549739507" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>


    <!-- Java Script
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>