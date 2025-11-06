// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Hamburger menu toggle
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.navbar-menu');

hamburger?.addEventListener('click', () => {
    navMenu.style.display = navMenu.style.display === 'flex' ? 'none' : 'flex';
});

// Close menu when a link is clicked
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
        navMenu.style.display = 'none';
    });
});

// Navbar background on scroll
const navbar = document.querySelector('.navbar');
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.style.background = 'rgba(15, 23, 42, 0.95)';
    } else {
        navbar.style.background = 'rgba(15, 23, 42, 0.7)';
    }
});

// Intersection Observer for scroll animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const scrollObserver = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.animation = 'fadeInUp 0.8s ease forwards';
            scrollObserver.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observe all sections and elements that need scroll animation
const elementsToObserve = document.querySelectorAll(
    '.hero, .about, .services, .portfolio, .contact, .service-card, .portfolio-item, .skill-item, .section-header, .info-card'
);

elementsToObserve.forEach(el => {
    el.style.opacity = '0';
    scrollObserver.observe(el);
});

// Contact form submission
const contactForm = document.querySelector('.contact-form');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(this);
        
        // Simple validation
        const name = this.querySelector('input[type="text"]').value;
        const email = this.querySelector('input[type="email"]').value;
        
        if (name && email) {
            // Show success message
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            
            submitBtn.textContent = '✓ Message Sent!';
            submitBtn.style.background = 'linear-gradient(135deg, #10b981 0%, #059669 100%)';
            
            // Reset form
            this.reset();
            
            // Reset button after 3 seconds
            setTimeout(() => {
                submitBtn.textContent = originalText;
                submitBtn.style.background = '';
            }, 3000);
        }
    });
}

// Add scroll reveal effect
const revealElements = document.querySelectorAll('.about, .services, .portfolio, .contact');
const revealOptions = {
    threshold: 0.15,
    rootMargin: '0px 0px -100px 0px'
};

const revealObserver = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            revealObserver.unobserve(entry.target);
        }
    });
}, revealOptions);

revealElements.forEach(el => {
    el.style.opacity = '0';
    revealObserver.observe(el);
});

// Mouse cursor effect (optional)
document.addEventListener('mousemove', (e) => {
    const moveX = (e.clientX / window.innerWidth) * 10;
    const moveY = (e.clientY / window.innerHeight) * 10;
    document.querySelectorAll('.service-card, .portfolio-item, .info-card').forEach(el => {
        el.style.transform = `translateY(-5px) perspective(1000px) rotateX(${moveY * 0.1}deg) rotateY(${moveX * 0.1}deg)`;
    });
});

// Add active navigation highlight
window.addEventListener('scroll', () => {
    let current = '';
    const sections = document.querySelectorAll('section');
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (pageYOffset >= sectionTop - 200) {
            current = section.getAttribute('id');
        }
    });
    
    document.querySelectorAll('.nav-link').forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').slice(1) === current) {
            link.classList.add('active');
        }
    });
});
