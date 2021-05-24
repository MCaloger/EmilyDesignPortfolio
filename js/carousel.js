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

// let images1 = ["img\\cards\\20191124_160705.jpg", "img\\cards\\20200202_203703.jpg", "img\\cards\\20200203_221700.jpg", "img\\cards\\20200204_212706.jpg"]

// let carousel1 = new NewCarousel(document.querySelector("#carousel1"), document.querySelector("#carouselNext1"), document.querySelector("#carouselBack1"), images1)

// let images2 = ["img\\Nostalgia-Distracted\\20191005_224506.jpg", "img\\Nostalgia-Distracted\\20191005_230724.jpg", "img\\Nostalgia-Distracted\\20191006_202425.jpg"]

// let carousel2 = new NewCarousel(document.querySelector("#carousel2"), document.querySelector("#carouselNext2"), document.querySelector("#carouselBack2"), images2)