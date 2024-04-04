import './bootstrap';
import 'preline'

// Nav animation
const navbar = document.querySelector("#navbar");
navbar.classList.add("fixed", "flex", "flex-wrap", "z-50", "w-full", "text-sm", "pb-4", "pt-8", "px-4", "backdrop-blur", "md:justify-start", "md:flex-nowrap", "duration-300", "transition-all")

window.onscroll = function () {
          if (window.scrollY) {
                    navbar.classList.add("border-b", "border-slate-900/20", "pt-4", "bg-white/70")
                    navbar.classList.remove("pt-8")
          } else {
                    navbar.classList.remove("border-b", "border-slate-900/20", "pt-4", "bg-white/70")
                    navbar.classList.add("pt-8",)
          }
}

// Active nav link
const navLinkEls = document.querySelectorAll('#nav-link')
const sectionEls = document.querySelectorAll('.section')
let currentSection = 'home'

window.addEventListener('scroll', () => {
          sectionEls.forEach(sectionEl => {
                    if (window.scrollY >= (sectionEl.offsetTop - 50)) {
                              currentSection = sectionEl.id
                    }
          })

          navLinkEls.forEach(navLinkEl => {
                    if (navLinkEl.href.includes(currentSection)) {
                              navLinkEl.classList.add('text-primary')
                    } else {
                              navLinkEl.classList.remove('text-primary')
                    }
          })
})
