// Initialize Lenis with minimal options
const lenis = new Lenis({
  autoRaf: true,
})

// Simplified scroll event listener
lenis.on("scroll", (e) => {
  // Only log when needed for debugging
  // console.log(e)
});

document.addEventListener("DOMContentLoaded", () => {
  // Use more efficient selectors and event delegation where possible
  const linksHolder = document.querySelector(".links_holder")

  // Event delegation for navbar links
  if (linksHolder) {
    linksHolder.addEventListener("mouseover", (e) => {
      const link = e.target.closest("a")
      if (link) {
        gsap.to(link, {
          color: "var(--primary_color)",
          duration: 0.3,
          ease: "power1.out",
        })
      }
    })

    linksHolder.addEventListener("mouseout", (e) => {
      const link = e.target.closest("a")
      if (link) {
        gsap.to(link, {
          color: "var(--text-color)",
          duration: 0.3,
          ease: "power1.out",
        })
      }
    })
  }

  // Optimized button initialization
  function initCustomButtons() {
    const customButtons = document.querySelectorAll(".custom-button")

    // Create elements only once and clone them
    const blobContainer = document.createElement("div")
    blobContainer.className = "blob-container"

    const blob = document.createElement("div")
    blob.className = "blob"
    blobContainer.appendChild(blob)

    customButtons.forEach((button) => {
      // Clone the elements instead of creating new ones each time
      const blobContainerClone = blobContainer.cloneNode(true)
      button.appendChild(blobContainerClone)

      // Cache the blob element and original color
      const buttonBlob = blobContainerClone.querySelector(".blob")
      const originalColor = window.getComputedStyle(button).color

      // Use object literals instead of anonymous functions to reduce memory
      const buttonHandlers = {
        mouseenter: function () {
          const buttonWidth = this.offsetWidth
          const buttonHeight = this.offsetHeight
          const maxDimension = Math.max(buttonWidth, buttonHeight)
          const blobWidth = Number.parseFloat(window.getComputedStyle(buttonBlob).width)
          const scale = (maxDimension / blobWidth) * 2.5

          gsap.to(buttonBlob, {
            scale: scale,
            duration: 0.5,
            ease: "power2.out",
          })

          gsap.to(this, {
            color: "var(--background-color)",
            duration: 0.2,
            delay: 0.15,
            ease: "power1.inOut",
          })
        },

        mouseleave: function () {
          gsap.to(buttonBlob, {
            scale: 1,
            duration: 0.5,
            ease: "power2.in",
          })

          gsap.to(this, {
            color: originalColor,
            duration: 0.2,
            ease: "power1.inOut",
          })
        },
      }

      button.addEventListener("mouseenter", buttonHandlers.mouseenter)
      button.addEventListener("mouseleave", buttonHandlers.mouseleave)
    })
  }

  // Initialize custom buttons
  initCustomButtons()

  // Optimize social icons interaction
  const socialIconsContainer = document.querySelector(".left_hero")

  if (socialIconsContainer) {
    socialIconsContainer.addEventListener("mouseover", (e) => {
      const icon = e.target.closest(".social_icons")
      if (icon) {
        gsap.to(icon, {
          scale: 1.2,
          color: "var(--primary_color)",
          duration: 0.3,
          ease: "back.out(1.7)",
          rotation: 15,
        })
      }
    })

    socialIconsContainer.addEventListener("mouseout", (e) => {
      const icon = e.target.closest(".social_icons")
      if (icon) {
        gsap.to(icon, {
          scale: 1,
          color: "var(--text-color)",
          duration: 0.3,
          ease: "power1.out",
          rotation: 0,
        })
      }
    })
  }

  // Enhance product image animation with GSAP
  const productImage = document.querySelector(".product_image_hero img")

  if (productImage) {
    gsap.to(productImage, {
      y: 30,
      rotation: -15,
      duration: 5,
      ease: "sine.inOut",
      repeat: -1,
      yoyo: true,
    })
  }

  // Enhance marquee animation - use a more efficient approach
  const marqueeContents = document.querySelectorAll(".marquee_content")

  if (marqueeContents.length) {
    // Create a single timeline for all marquee animations
    const marqueeTl = gsap.timeline()

    marqueeContents.forEach((content, index) => {
      marqueeTl.to(
        content,
        {
          x: "-50%",
          duration: 15 + index * 2,
          ease: "none",
          repeat: -1,
          repeatDelay: 0,
        },
        0,
      ) // Start all animations at the same time
    })
  }

  // Add parallax effect to hero content - optimize by using throttling
  const heroContent = document.querySelector(".hero_contents")

  if (heroContent) {
    let lastMouseMoveTime = 0
    const throttleDelay = 30 // milliseconds

    window.addEventListener("mousemove", (e) => {
      const currentTime = Date.now()

      // Only process mousemove every throttleDelay milliseconds
      if (currentTime - lastMouseMoveTime > throttleDelay) {
        lastMouseMoveTime = currentTime

        const moveX = (e.clientX - window.innerWidth / 2) * 0.01
        const moveY = (e.clientY - window.innerHeight / 2) * 0.01

        gsap.to(heroContent, {
          x: moveX,
          y: moveY,
          duration: 1,
          ease: "power1.out",
        })
      }
    })
  }

  // Improved scroll effect that works on all screen sizes
  function updateScaleOnScroll() {
    const scrollY = window.scrollY
    const heroSection = document.querySelector(".hero_section")
    const viewportHeight = window.innerHeight

    if (heroSection && scrollY < viewportHeight) {
      // Calculate scale based on viewport percentage rather than absolute pixels
      const scrollPercentage = scrollY / viewportHeight
      const scale = 1 + scrollPercentage * 0.15 // Increased scale factor for visibility

      gsap.set(heroSection, {
        scale: scale,
      })
    }
  }

  // Use passive event listener for better performance
  window.addEventListener("scroll", updateScaleOnScroll, { passive: true })

  // Initial call to set correct scale on page load
  updateScaleOnScroll()

  // Make the initCustomButtons function globally available with minimal overhead
  window.initCustomButtons = () => {
    // Only run the initialization if there are new buttons
    const uninitializedButtons = document.querySelectorAll(".custom-button:not([data-initialized])")

    if (uninitializedButtons.length) {
      initCustomButtons()

      // Mark buttons as initialized to avoid re-processing
      uninitializedButtons.forEach((button) => {
        button.setAttribute("data-initialized", "true")
      })
    }
  }
 
  function initGridInteractions() {
    const gridBlocks = document.querySelectorAll('.grid_block');
    const isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
    
    gridBlocks.forEach(block => {
      // Create a GSAP context for each block to optimize performance
      const ctx = gsap.context(() => {
        const overlay = block.querySelector('.overlay');
        const content = block.querySelector('.grid_content');
        const title = block.querySelector('h2');
        const subtitle = block.querySelector('h3');
        
        // Prepare hover animation timeline but don't play it yet
        const hoverTl = gsap.timeline({ paused: true });
        
        hoverTl
          .to(overlay, { 
            opacity: 0.4, 
            duration: 0.5, 
            ease: "power2.out" 
          }, 0)
          .to(block, { 
            scale: 1.02, 
            duration: 0.5, 
            ease: "power2.out" 
          }, 0)
          .to(content, { 
            y: "-1vh", 
            duration: 0.5, 
            ease: "power2.out" 
          }, 0)
          .to(title, { 
            x: "0.5vw", 
            opacity: 1, 
            duration: 0.4, 
            ease: "power2.out" 
          }, 0)
          .to(subtitle, { 
            x: "0.8vw", 
            opacity: 1, 
            duration: 0.4, 
            delay: 0.05, 
            ease: "power2.out" 
          }, 0);
        
        if (!isTouchDevice) {
          // For non-touch devices, use hover
          block.addEventListener('mouseenter', () => hoverTl.play());
          block.addEventListener('mouseleave', () => hoverTl.reverse());
        } else {
          // For touch devices, add touch feedback
          const touchFeedback = document.createElement('div');
          touchFeedback.className = 'touch-feedback';
          block.appendChild(touchFeedback);
          
          // Touch start event
          block.addEventListener('touchstart', () => {
            gsap.to(touchFeedback, {
              opacity: 1,
              duration: 0.2
            });
            
            // Play a shorter version of the animation
            gsap.to(overlay, { opacity: 0.4, duration: 0.3 });
            gsap.to(block, { scale: 0.98, duration: 0.3 });
          }, { passive: true });
          
          // Touch end event
          block.addEventListener('touchend', () => {
            gsap.to(touchFeedback, {
              opacity: 0,
              duration: 0.3
            });
            
            // Reverse the animation
            gsap.to(overlay, { opacity: 0.7, duration: 0.3, delay: 0.1 });
            gsap.to(block, { scale: 1, duration: 0.3, delay: 0.1 });
          }, { passive: true });
        }
        
        // Add click/tap ripple effect for all devices
        const addRipple = (e) => {
          // Create ripple element
          const ripple = document.createElement('div');
          ripple.className = 'ripple-effect';
          
          // Position the ripple at click/tap point
          const rect = block.getBoundingClientRect();
          const x = (e.clientX || e.touches[0].clientX) - rect.left;
          const y = (e.clientY || e.touches[0].clientY) - rect.top;
          
          // Set ripple styles
          ripple.style.cssText = `
            position: absolute;
            left: ${x}px;
            top: ${y}px;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.4);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            pointer-events: none;
            z-index: 10;
          `;
          
          block.appendChild(ripple);
          
          // Animate the ripple
          gsap.to(ripple, {
            width: Math.max(block.offsetWidth, block.offsetHeight) * 2,
            height: Math.max(block.offsetWidth, block.offsetHeight) * 2,
            opacity: 0,
            duration: 0.6,
            ease: "power2.out",
            onComplete: () => {
              ripple.remove();
            }
          });
        };
        
        // Add event listeners for both click and touch
        block.addEventListener('click', addRipple);
        block.addEventListener('touchstart', (e) => {
          if (e.touches.length === 1) {
            addRipple(e);
          }
        }, { passive: true });
      }, block);
      
      // Store the context on the element for cleanup if needed
      block._gsapContext = ctx;
    });
  }
  
  // Update the animateGridOnLoad function to work better on mobile
  function animateGridOnLoad() {
    const gridBlocks = document.querySelectorAll('.grid_block');
    const isMobile = window.innerWidth <= 699;
    
    gsap.set(gridBlocks, { 
      y: isMobile ? "3vh" : "5vh", 
      opacity: 0 
    });
    
    gsap.to(gridBlocks, {
      y: 0,
      opacity: 1,
      stagger: isMobile ? 0.05 : 0.1,
      duration: isMobile ? 0.6 : 0.8,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".popular_categories",
        start: "top 90%",
        once: true
      }
    });
  }
  
  // Add a resize handler to adjust for screen size changes
  window.addEventListener('resize', () => {
    // Reinitialize animations if needed
    if (typeof ScrollTrigger !== 'undefined') {
      ScrollTrigger.refresh();
    }
  }, { passive: true });
  
  // Initialize ScrollTrigger if not already done
  if (typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);
    animateGridOnLoad();
  } else {
    // If ScrollTrigger isn't loaded, add it dynamically
    const scrollTriggerScript = document.createElement('script');
    scrollTriggerScript.src = "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js";
    scrollTriggerScript.onload = animateGridOnLoad;
    document.head.appendChild(scrollTriggerScript);
  }

  //footer links
  const footerLinks = document.querySelectorAll('.footer_link');
  footerLinks.forEach(link => {
    link.addEventListener('mouseenter', () => { // Changed to 'mouseenter' for hover effect
      console.log('hovered');
      gsap.to(link, { // Animate only the hovered link
        duration: 0.6,
        fontWeight: 600,
      });
    });

    link.addEventListener('mouseleave', () => { // Reset animation when mouse leaves
      gsap.to(link, {
        duration: 0.6,
        fontWeight: 400, // Adjust to default weight
      });
    });
  });

  //404
  const tl = gsap.timeline();
        
  // Animate the 404 text
  tl.from('.animated_404 h1', {
      y: "-10vh",
      opacity: 0,
      stagger: 0.2,
      duration: 1,
      ease: "back.out(1.7)"
  })
  .from('.oops_message', {
      y: "5vh",
      opacity: 0,
      stagger: 0.2,
      duration: 0.8,
      ease: "power3.out"
  }, "-=0.5")
  .from('.error_actions', {
      y: "5vh",
      position: "relative",
      opacity: 0,
      duration: 0.8,
      ease: "power2.out"
  }, "-=0.5");

  // Animate the 404 numbers continuously
  gsap.to('.first_4', {
      rotation: -5,
      duration: 2,
      repeat: -1,
      yoyo: true,
      ease: "sine.inOut"
  });

  gsap.to('.last_4', {
      rotation: 5,
      duration: 2.5,
      repeat: -1,
      yoyo: true,
      ease: "sine.inOut"
  });
  
  
  //about us why choose us section
  gsap.from('.feature_card', {
      y: 50,
      opacity: 0,
      stagger: 0.2,
      duration: 0.8,
      ease: "power2.out",
      scrollTrigger: {
  trigger: '.features_grid',
  start: "top 80%",
  once: true
      }
  });
  
  // Animate feature icons
  gsap.to('.feature_icon_container i', {
      rotateY: 360,
      duration: 3,
      ease: "power1.inOut",
      repeat: -1,
      repeatDelay: 2
  });
  
  
  // Add hover effect to feature cards
  const featureCards = document.querySelectorAll('.feature_card');
  
  featureCards.forEach(card => {
      const icon = card.querySelector('.feature_icon_container');
      
      card.addEventListener('mouseenter', () => {
        gsap.to(icon, {
            y: -10,
            scale: 1.1,
            duration: 0.3,
            ease: "back.out(1.7)"
        });
      });
      
      card.addEventListener('mouseleave', () => {
        gsap.to(icon, {
            y: 0,
            scale: 1,
            duration: 0.3,
            ease: "power2.out"
        });
      });
  });
  
  // Animate team cards on scroll
  gsap.from('.team_card', {
    y: 30,
    opacity: 0,
    stagger: 0.1,
    duration: 0.6,
    ease: "power2.out",
    scrollTrigger: {
        trigger: '.team_grid',
        start: "top 80%",
        once: true
    }
  });

  // Add hover effect similar to feature cards from previous sections
  const teamCards = document.querySelectorAll('.team_card');

  teamCards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        gsap.to(card, {
            y: -8,
            duration: 0.3,
            ease: "power2.out"
        });
    });
    
    card.addEventListener('mouseleave', () => {
        gsap.to(card, {
            y: 0,
            duration: 0.3,
            ease: "power2.out"
        });
    });
  });


  //process card
          // Animate hero elements
          gsap.from('.hero_content_process h1', {
            y: 30,
            opacity: 0,
            duration: 0.8,
            ease: "power2.out"
        });
        
        gsap.from('.hero_content_process h4', {
            y: 30,
            opacity: 0,
            duration: 0.8,
            delay: 0.2,
            ease: "power2.out"
        });
        
        gsap.from('.hero_action', {
            y: 30,
            opacity: 0,
            duration: 0.8,
            delay: 0.4,
            ease: "power2.out"
        });
        
        // Animate process circle
        gsap.to('.process_circle', {
            rotation: 360,
            duration: 40,
            repeat: -1,
            ease: "none"
        });
        
        // Animate step cards on scroll
        gsap.from('.step_card', {
            y: 50,
            opacity: 0,
            stagger: 0.2,
            duration: 0.8,
            ease: "power2.out",
            scrollTrigger: {
                trigger: '.step_cards',
                start: "top 80%",
                once: true
            }
        });
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });

     // Animate hero elements
     gsap.from('.hero_content_contact h1', {
      y: 30,
      opacity: 0,
      duration: 0.8,
      ease: "power2.out"
  });
  
  gsap.from('.hero_content_contact h4', {
      y: 30,
      opacity: 0,
      duration: 0.8,
      delay: 0.2,
      ease: "power2.out"
  });
  
  // Animate floating bottles
  gsap.to('.bottle_1', {
      y: -20,
      rotation: 20,
      duration: 5,
      repeat: -1,
      yoyo: true,
      ease: "sine.inOut"
  });
  
  gsap.to('.bottle_2', {
      y: 20,
      rotation: -15,
      duration: 6,
      repeat: -1,
      yoyo: true,
      ease: "sine.inOut",
      delay: 0.5
  });
  
  gsap.to('.bottle_3', {
      y: -15,
      rotation: 10,
      duration: 7,
      repeat: -1,
      yoyo: true,
      ease: "sine.inOut",
      delay: 1
  });

   // FAQ accordion functionality
   const faqItems = document.querySelectorAll('.faq_item');
        
   faqItems.forEach(item => {
       const question = item.querySelector('.faq_question');
       
       question.addEventListener('click', () => {
           // Close all other items
           faqItems.forEach(otherItem => {
               if (otherItem !== item && otherItem.classList.contains('active')) {
                   otherItem.classList.remove('active');
                   
                   // Reset icon rotation
                   const otherIcon = otherItem.querySelector('.question_icon i');
                   gsap.to(otherIcon, {
                       rotation: 0,
                       duration: 0.3,
                       ease: "power2.out"
                   });
               }
           });
           
           // Toggle current item
           item.classList.toggle('active');
           
           // Animate the icon rotation
           const icon = item.querySelector('.question_icon i');
           if (item.classList.contains('active')) {
               gsap.to(icon, {
                   rotation: 45,
                   duration: 0.3,
                   ease: "power2.out"
               });
           } else {
               gsap.to(icon, {
                   rotation: 0,
                   duration: 0.3,
                   ease: "power2.out"
               });
           }
       });
   });    

  // Fullscreen Navigation
  const menuButton = document.querySelector('.menu_extended');
  const fullscreenNav = document.querySelector('.fullscreen_nav');
  const navCloseBtn = document.querySelector('.nav_close_btn');
  const navLinks = document.querySelectorAll('.nav_link');

  if (menuButton && fullscreenNav && navCloseBtn) {
    // Open navigation when menu button is clicked
    menuButton.addEventListener('click', () => {
      fullscreenNav.classList.add('active');
      document.body.classList.add('overflow_hidden');
      
      // Animate decorative circles
      gsap.from('.circle1', {
        scale: 0,
        duration: 1,
        ease: "elastic.out(1, 0.5)",
        delay: 0.2
      });
      
      gsap.from('.circle2', {
        scale: 0,
        duration: 1,
        ease: "elastic.out(1, 0.5)",
        delay: 0.3
      });
      
      gsap.from('.circle3', {
        scale: 0,
        duration: 1,
        ease: "elastic.out(1, 0.5)",
        delay: 0.4
      });
    });
    
    // Close navigation when close button is clicked
    navCloseBtn.addEventListener('click', () => {
      fullscreenNav.classList.remove('active');
      document.body.classList.remove('overflow_hidden');
    });
    
    // Close navigation when a link is clicked
    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        fullscreenNav.classList.remove('active');
        document.body.classList.remove('overflow_hidden');
      });
    });
    
    // Prevent scrolling when navigation is open
    fullscreenNav.addEventListener('wheel', (e) => {
      e.stopPropagation();
    });
    
    // Prevent touch scrolling on the body when navigation is open
    document.addEventListener('touchmove', (e) => {
      if (fullscreenNav.classList.contains('active')) {
        if (!fullscreenNav.contains(e.target)) {
          e.preventDefault();
        }
      }
    }, { passive: false });
  }

  // Fade in login container
  const loginContainer = document.querySelector('.login_container');
  if (loginContainer) {
      setTimeout(() => {
          loginContainer.style.opacity = '1';
          loginContainer.style.transform = 'translateY(0)';
      }, 100);
  }

  initProductCarousel();
  PasswordToggle();
  const cleanupProcess = initProcessTimeline();
  
  // Store cleanup function for memory management
  window._cleanupFunctions = window._cleanupFunctions || {};
  window._cleanupFunctions.processSection = cleanupProcess;
  
});

function initProductCarousel() {
  const carousel = document.querySelector('.product_carousel');
  if (!carousel) return;
  
  // Get carousel elements
  const cards = carousel.querySelectorAll('.product_card:not(.clone)');
  const totalOriginalCards = cards.length;
  
  // Clone first few cards and append them to the end of the carousel
  function cloneCards() {
    const cloneCount = getVisibleCardsCount();
    for (let i = 0; i < cloneCount; i++) {
      const clone = cards[i].cloneNode(true);
      clone.classList.add('clone');
      carousel.appendChild(clone);
    }
  }

  // Call clone function to add cloned cards
  cloneCards();
  
  // Navigation buttons
  const prevBtn = document.querySelector('.prev_btn');
  const nextBtn = document.querySelector('.next_btn');
  
  // Variables for carousel state
  let currentIndex = 0;
  let isAnimating = false;
  let autoScrollInterval;
  
  // Set initial position
  gsap.set(carousel, { x: 0 });
  
  // Function to get visible cards count based on screen width
  function getVisibleCardsCount() {
    const viewportWidth = window.innerWidth;
    if (viewportWidth <= 820) return 1; // iPad and smaller devices show 1
    if (viewportWidth <= 999) return 2; // Larger tablets show 2
    return 3; // Desktop shows 3
  }
  
  // Function to calculate card width based on current viewport
  function getCardWidth() {
    const card = cards[0];
    return card.offsetWidth + parseFloat(getComputedStyle(card).marginRight);
  }
  
  // Function to calculate offset for centering (for single card view)
  function getCenteringOffset() {
    const visibleCount = getVisibleCardsCount();
    if (visibleCount === 1) {
      const wrapperWidth = carousel.parentElement.offsetWidth;
      const cardWidth = getCardWidth();
      return (wrapperWidth - cardWidth) / 2 - parseFloat(getComputedStyle(carousel).paddingLeft);
    }
    return 0;
  }
  
  // Function to scroll to a specific index
  function scrollToIndex(index, duration = 0.5) {
    if (isAnimating) return;
    isAnimating = true;
    
    // Calculate target position
    const cardWidth = getCardWidth();
    const centeringOffset = getCenteringOffset();
    const targetX = -index * cardWidth + centeringOffset;
    
    // Create animation
    gsap.to(carousel, {
      x: targetX,
      duration: duration,
      ease: "power2.out",
      onComplete: () => {
        // If the last card reaches the left, move back to the beginning without animation
        if (index >= totalOriginalCards) {
          currentIndex = 0;
          gsap.set(carousel, { x: centeringOffset });
        } else if (index < 0) {
          currentIndex = totalOriginalCards - 1;
          gsap.set(carousel, { x: -currentIndex * cardWidth + centeringOffset });
        } else {
          currentIndex = index;
        }
        isAnimating = false;
      }
    });
  }
  
  // Function to go to next slide - ALWAYS move by exactly one card
  function nextSlide() {
    scrollToIndex(currentIndex + 1);
  }
  
  // Function to go to previous slide - ALWAYS move by exactly one card
  function prevSlide() {
    scrollToIndex(currentIndex - 1);
  }
  
  // Set up auto scroll - move by one card at a time
  function startAutoScroll() {
    stopAutoScroll();
    autoScrollInterval = setInterval(() => {
      nextSlide();
    }, 4000); // Scroll every 4 seconds
  }
  
  // Function to stop auto scroll
  function stopAutoScroll() {
    if (autoScrollInterval) {
      clearInterval(autoScrollInterval);
    }
  }
  
  // Add event listeners to buttons
  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      prevSlide();
      // Restart auto scroll after manual navigation
      startAutoScroll();
    });
  }
  
  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      nextSlide();
      // Restart auto scroll after manual navigation
      startAutoScroll();
    });
  }
  
  // Pause auto scroll on hover
  carousel.addEventListener('mouseenter', stopAutoScroll);
  carousel.addEventListener('mouseleave', startAutoScroll);
  
  // Initial positioning with centering
  const initialOffset = getCenteringOffset();
  if (initialOffset !== 0) {
    gsap.set(carousel, { x: initialOffset });
  }
  
  // Handle window resize
  const debouncedResize = debounce(() => {
    const cardWidth = getCardWidth();
    const centeringOffset = getCenteringOffset();
    gsap.set(carousel, { x: -currentIndex * cardWidth + centeringOffset });
  }, 250);
  
  window.addEventListener('resize', debouncedResize);
  
  // Start auto scroll
  startAutoScroll();
  
  // Utility function for debouncing
  function debounce(func, wait) {
    let timeout;
    return function() {
      const context = this;
      const args = arguments;
      clearTimeout(timeout);
      timeout = setTimeout(() => {
        func.apply(context, args);
      }, wait);
    };
  }

  // Memory optimization: Store the carousel instance for cleanup if needed
  carousel._carouselData = {
    cleanup: () => {
      stopAutoScroll();
      window.removeEventListener('resize', debouncedResize);
    }
  };
}


function initProcessTimeline() {
  // Check if process section exists
  const processSection = document.querySelector('.process_section');
  if (!processSection) return;
  
  // Get elements
  const timelinePoints = document.querySelectorAll('.timeline_point');
  const timelineProgress = document.querySelector('.timeline_progress');
  const processDetails = document.querySelectorAll('.process_detail');
  const prevButton = document.querySelector('.prev_step');
  const nextButton = document.querySelector('.next_step');
  const playPauseButton = document.querySelector('.play_pause');
  const playPauseIcon = playPauseButton.querySelector('i');
  
  // Current step and animation state
  let currentStep = 1;
  const totalSteps = timelinePoints.length;
  let isPlaying = true;
  let autoPlayInterval;
  
  // Function to show a specific step
  function showStep(stepNumber) {
    // Update current step
    currentStep = stepNumber;
    
    // Remove all progress classes
    timelineProgress.classList.remove('progress-step-1', 'progress-step-2', 'progress-step-3', 'progress-step-4', 'progress-step-5');
    
    // Add the appropriate progress class
    timelineProgress.classList.add(`progress-step-${currentStep}`);
    
    // Update timeline points
    timelinePoints.forEach(point => {
      const pointStep = parseInt(point.dataset.step);
      if (pointStep === currentStep) {
        point.classList.add('active');
      } else {
        point.classList.remove('active');
      }
    });
    
    // Update process details
    processDetails.forEach(detail => {
      const detailStep = parseInt(detail.dataset.step);
      if (detailStep === currentStep) {
        detail.classList.add('active');
      } else {
        detail.classList.remove('active');
      }
    });
  }
  
  // Function to go to next step
  function nextStep() {
    const nextStepNumber = currentStep < totalSteps ? currentStep + 1 : 1;
    showStep(nextStepNumber);
  }
  
  // Function to go to previous step
  function prevStep() {
    const prevStepNumber = currentStep > 1 ? currentStep - 1 : totalSteps;
    showStep(prevStepNumber);
  }
  
  // Function to toggle auto play
  function toggleAutoPlay() {
    if (isPlaying) {
      // Pause
      clearInterval(autoPlayInterval);
      isPlaying = false;
      playPauseIcon.className = 'ri-play-line';
    } else {
      // Play
      startAutoPlay();
      isPlaying = true;
      playPauseIcon.className = 'ri-pause-line';
    }
  }
  
  // Function to start auto play
  function startAutoPlay() {
    autoPlayInterval = setInterval(nextStep, 8000);
  }
  
  // Add click events to timeline points
  timelinePoints.forEach(point => {
    point.addEventListener('click', () => {
      const stepNumber = parseInt(point.dataset.step);
      showStep(stepNumber);
      
      // Reset auto play timer
      if (isPlaying) {
        clearInterval(autoPlayInterval);
        startAutoPlay();
      }
    });
  });
  
  // Add click events to navigation buttons
  if (prevButton) {
    prevButton.addEventListener('click', () => {
      prevStep();
      
      // Reset auto play timer
      if (isPlaying) {
        clearInterval(autoPlayInterval);
        startAutoPlay();
      }
    });
  }
  
  if (nextButton) {
    nextButton.addEventListener('click', () => {
      nextStep();
      
      // Reset auto play timer
      if (isPlaying) {
        clearInterval(autoPlayInterval);
        startAutoPlay();
      }
    });
  }
  
  if (playPauseButton) {
    playPauseButton.addEventListener('click', toggleAutoPlay);
  }
  
  // Initialize the first step
  showStep(1);
  
  // Start auto play
  startAutoPlay();
  
  // Clean up function for memory management
  return function cleanup() {
    clearInterval(autoPlayInterval);
    
    timelinePoints.forEach(point => {
      point.removeEventListener('click', () => {});
    });
    
    if (prevButton) prevButton.removeEventListener('click', () => {});
    if (nextButton) nextButton.removeEventListener('click', () => {});
    if (playPauseButton) playPauseButton.removeEventListener('click', toggleAutoPlay);
  };
}

function PasswordToggle() {
  const togglePassword = document.querySelector('.toggle_password');
  const passwordInput = document.querySelector('#password');
  
  if (togglePassword && passwordInput) {
    togglePassword.addEventListener('click', function() {
      // Toggle password visibility
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);

      // Toggle icon
      const icon = this.querySelector('i');
      if (type === 'password') {
        icon.classList.remove('ri-eye-off-line');
        icon.classList.add('ri-eye-line');
      } else {
        icon.classList.remove('ri-eye-line');
        icon.classList.add('ri-eye-off-line');
      }
    });
  }
}

