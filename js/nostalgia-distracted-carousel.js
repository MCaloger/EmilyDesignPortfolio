class NewCarousel {

    constructor(galleryElement, nextButton, backButton, images) {
        this.currentSlide = 0;
        this.maxSlides = images.length
        this.nextButton = nextButton
        this.galleryElement = galleryElement
        this.backButton = backButton
        this.images = images
        
        this.nextButton.addEventListener("click", () => {
            this.next()
        })

        this.backButton.addEventListener("click", () => {
            this.back()
        })

        this.updateImage()
    }

    next() {
        if(this.currentSlide < this.maxSlides -1){
            this.currentSlide += 1
        } else {
            this.currentSlide = 0
        }
        this.updateImage()
    }

    updateImage() {
        this.galleryElement.src = this.images[this.currentSlide]
    }

    back() {
        if(this.currentSlide > 0){
            this.currentSlide -= 1
        } else {
            this.currentSlide = this.maxSlides -1
        }
        this.updateImage()
    }
    
}

images = [
    'img/Nostalgia-Distracted/20191005_224506.jpg',
    'img/Nostalgia-Distracted/20191005_230724.jpg',
    'img/Nostalgia-Distracted/20191006_202425.jpg',
    'img/Nostalgia-Distracted/20191006_214330.jpg',
    'img/Nostalgia-Distracted/20191017_193233.jpg',
    'img/Nostalgia-Distracted/20191017_194355.jpg',
    'img/Nostalgia-Distracted/Nostalgia_Distracted.jpg',
    'img/Nostalgia-Distracted/Nostalgia_Distracted.png'
]

let carousel1 = new NewCarousel(document.querySelector("#carousel1"), document.querySelector("#carouselNext1"), document.querySelector("#carouselBack1"), images)