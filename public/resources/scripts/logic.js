// Initialize Lenis with minimal options
const lenis = new Lenis({
  autoRaf: true,
})

// Simplified scroll event listener
lenis.on("scroll", (e) => {
  // Only log when needed for debugging
  // console.log(e)
})

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
})

