<template>
    <div class="slider-container">
        <div class="slider-overlay"></div>
        <img
            :src="images[currentImage]"
            :alt="'Slide ' + (currentImage + 1)"
            class="slider-image"
            @load="handleImageLoad"
        />
        <div v-if="showText" class="slider-text">
            <h2 :class="['slide-in', slideOut ? 'slide-out' : '']">
                Some Text Here {{ currentImage + 1 }}
            </h2>
            <button
                :class="[
                    'slide-in',
                    'slide-in-left',
                    slideOut ? 'slide-out' : '',
                ]"
            >
                Call to Action
            </button>
            <div class="slider-text-overlay"></div>
        </div>
        <div class="slider-dots">
            <span
                v-for="(image, index) in images"
                :key="index"
                :class="['slider-dot', index === currentImage ? 'active' : '']"
                @click="handleDotClick(index)"
            ></span>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            images: [
                // "/dullbaby.png",
                "/images/white_shopping.jpg",
                "/images/terms.png",
                "/images/white_shopping.jpg",
                // "../../images/terms.png",
                // "../../images/dullbaby.png",
            ],
            currentImage: 0,
            showText: false,
            slideOut: false,
        };
    },
    mounted() {
        setInterval(() => {
            this.setCurrentImage(
                this.currentImage === this.images.length - 1
                    ? 0
                    : this.currentImage + 1
            );
            this.showText = false;
            this.slideOut = true;
            setTimeout(() => {
                this.slideOut = false;
            }, 500);
        }, 3000);
    },
    methods: {
        handleDotClick(index) {
            this.setCurrentImage(index);
            this.showText = false;
        },
        handleImageLoad() {
            this.showText = true;
        },
        setCurrentImage(index) {
            this.currentImage = index;
        },
    },
};
</script>

<style scoped>
.slider-container {
    position: relative;
}

.slider-overlay,
.slider-text-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

.slider-image {
    display: block;
    width: 100%;
    height: auto;
    opacity: 0;
    animation: fade-in 1s ease forwards;
}

.slider-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    text-align: center;
    opacity: 0;
    animation: fade-in 1s ease forwards;
}

.slide-in {
    animation: slide-in 0.5s ease forwards;
}

.slide-out {
    animation: slide-out 0.5s ease forwards;
}

@keyframes slide-in {
    0% {
        transform: translateY(-100%);
    }
    100% {
        transform: translateY(0);
    }
}

@keyframes slide-out {
    0% {
        transform: translateY(0);
    }
    100% {
        transform: translateY(100%);
    }
}

.slider-text button.slide-in-left {
    animation: slide-in-left 0.5s ease;
}

@keyframes slide-in-left {
    0% {
        transform: translateX(-100%);
    }
    100% {
        transform: translateX(0%);
    }
}
</style>
