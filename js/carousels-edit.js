//======================================Banner Carousel==============================================
var __carouzel_instance = Carouzel.Root.getInstance()
__carouzel_instance.init('#banner-carousel', {
  animationEffect: 'fade',
  slidesToShow: 1,
  autoplay: true,
  autoplaySpeed: 4000,
  pauseOnHover: true,
})

//======================================Brand Carousel==============================================
var __carouzel_instance = Carouzel.Root.getInstance()
__carouzel_instance.init('#brand-carousel', {
  slidesToShow: 2,
  showNav: false,
  autoplay: true,
  breakpoints: [
    {
      minWidth: 576,
      slidesToScroll: 1,
      slidesToShow: 3,
    },
    {
      minWidth: 768,
      slidesToScroll: 2,
      slidesToShow: 4,
    },
    {
      minWidth: 992,
      slidesToScroll: 2,
      slidesToShow: 5,
    },
  ],
})

//============================================Carousel Product===========================================
const wrapper = document.querySelector('.wrapper')
const carousel = document.querySelector('.carousel')
const firstCardWidth = carousel.querySelector('.carousel-item').offsetWidth
const arrowBtns = document.querySelectorAll('.wrapper i')
const carouselChildrens = [...carousel.children]

let isDragging = false,
  isAutoPlay = true,
  startX,
  startScrollLeft,
  timeoutId
let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth)

carouselChildrens
  .slice(-cardPerView)
  .reverse()
  .forEach((card) => {
    carousel.insertAdjacentHTML('afterbegin', card.outerHTML)
  })

carouselChildrens.slice(0, cardPerView).forEach((card) => {
  carousel.insertAdjacentHTML('beforeend', card.outerHTML)
})

carousel.classList.add('no-transition')
carousel.scrollLeft = carousel.offsetWidth
carousel.classList.remove('no-transition')

arrowBtns.forEach((btn) => {
  btn.addEventListener('click', () => {
    carousel.scrollLeft += btn.id == 'left' ? -firstCardWidth : firstCardWidth
  })
})

const dragStart = (e) => {
  isDragging = true
  carousel.classList.add('dragging')
  startX = e.pageX
  startScrollLeft = carousel.scrollLeft
}

const dragging = (e) => {
  if (!isDragging) return
  carousel.scrollLeft = startScrollLeft - (e.pageX - startX)
}

const dragStop = () => {
  isDragging = false
  carousel.classList.remove('dragging')
}

const infiniteScroll = () => {
  if (carousel.scrollLeft === 0) {
    carousel.classList.add('no-transition')
    carousel.scrollLeft = carousel.scrollWidth - 2 * carousel.offsetWidth
    carousel.classList.remove('no-transition')
  } else if (
    Math.ceil(carousel.scrollLeft) ===
    carousel.scrollWidth - carousel.offsetWidth
  ) {
    carousel.classList.add('no-transition')
    carousel.scrollLeft = carousel.offsetWidth
    carousel.classList.remove('no-transition')
  }

  clearTimeout(timeoutId)
  if (!wrapper.matches(':hover')) autoPlay()
}

const autoPlay = () => {
  if (window.innerWidth < 800 || !isAutoPlay) return // Return if window is smaller than 800 or isAutoPlay is false
  timeoutId = setTimeout(() => (carousel.scrollLeft += firstCardWidth), 2500)
}
autoPlay()

carousel.addEventListener('mousedown', dragStart)
carousel.addEventListener('mousemove', dragging)
document.addEventListener('mouseup', dragStop)
carousel.addEventListener('scroll', infiniteScroll)
wrapper.addEventListener('mouseenter', () => clearTimeout(timeoutId))
wrapper.addEventListener('mouseleave', autoPlay)
