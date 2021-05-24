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

images = ['img/25 Logos - 2020/20200615_190746.jpg',
'img/25 Logos - 2020/20200615_190747.jpg',
'img/25 Logos - 2020/20200615_190810.jpg',
'img/25 Logos - 2020/20200615_190812.jpg',
'img/25 Logos - 2020/20200615_190816.jpg',
'img/25 Logos - 2020/20200615_190820.jpg',
'img/25 Logos - 2020/20200615_190821.jpg',
'img/25 Logos - 2020/20200615_190825.jpg',
'img/25 Logos - 2020/20200615_190826.jpg',
'img/25 Logos - 2020/20200615_190830.jpg',
'img/25 Logos - 2020/20200615_190833.jpg',
'img/25 Logos - 2020/20200615_190834.jpg',
'img/25 Logos - 2020/20200615_190836.jpg',
'img/25 Logos - 2020/20200615_190840.jpg',
'img/25 Logos - 2020/20200615_190840(0).jpg',
'img/25 Logos - 2020/20200615_190841.jpg',
'img/25 Logos - 2020/20200615_190848.jpg',
'img/25 Logos - 2020/20200615_190850.jpg',
'img/25 Logos - 2020/20200615_190852.jpg',
'img/25 Logos - 2020/20200615_190858.jpg',
'img/25 Logos - 2020/20200615_190902.jpg',
'img/25 Logos - 2020/20200615_190908.jpg',
'img/25 Logos - 2020/20200615_190911.jpg',
'img/25 Logos - 2020/20200615_190913.jpg',
'img/25 Logos - 2020/20200615_190916.jpg',
'img/25 Logos - 2020/20200615_190921.jpg',
'img/25 Logos - 2020/20200615_190923.jpg',
'img/25 Logos - 2020/20200615_190923(0).jpg',
'img/25 Logos - 2020/20200615_190925.jpg']

let carousel1 = new NewCarousel(document.querySelector("#carousel1"), document.querySelector("#carouselNext1"), document.querySelector("#carouselBack1"), images)