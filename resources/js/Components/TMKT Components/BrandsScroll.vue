<template>
    <div
        data-aos="fade-up"
        class="relative flex py-5 md:mb-16 md:mx-[20%] items-center text-4xl select-none"
    >
        <div class="flex-grow border-t border-gray-600"></div>
        <span
            class="flex-shrink mx-4 text-2xl font-extrabold text-[#213557] md:text-4xl text-center sm:text-start"
            >Conheça nossos clientes</span
        >
        <div class="flex-grow border-t border-gray-600"></div>
    </div>
    <div class="scroll max-w-6xl mx-auto" style="--time: 40s">
        <div class="mx-auto mb-12 lg:mb-0">
            <div class="images">
                <span v-for="i in 2" :key="i">
                    <a href="https://www.instagram.com/carasbrasil/">
                        <img
                            src="https://images.trustinnews.pt/uploads/sites/2/2019/02/caras-2-1-286x160.png"
                            class="w-32 h-32 object-contain cursor-pointer hover:scale-105 duration-300 ease-in-out transform"
                        />
                    </a>
                    <a href="https://www.assineglobo.com.br">
                        <img
                            src="https://sjsp.org.br/wp-content/uploads/2023/05/editoraglobo-2.png"
                            class="w-32 h-32 object-contain cursor-pointer hover:scale-105 duration-300 ease-in-out transform"
                        />
                    </a>
                    <a href="https://www.coquetel.com.br/">
                        <img
                            src="https://www.coquetel.com.br/sites/all/themes/coquetel/images/logo.png"
                            class="w-32 h-32 object-contain cursor-pointer hover:scale-105 duration-300 ease-in-out transform"
                        />
                    </a>
                    <a href="https://wcheckbrasil.com.br/">
                        <img
                            src="../../../img/Logo/LogoWcheck.png"
                            class="w-32 h-32 object-contain cursor-pointer hover:scale-105 duration-300 ease-in-out transform"
                        />
                    </a>
                </span>
            </div>
        </div>
    </div>
</template>

<style scoped>
.scroll {
    position: relative;
    display: flex;
    width: 100%;
    overflow: hidden;
    -webkit-mask-image: linear-gradient(
        90deg,
        transparent,
        #fff 20%,
        #fff 80%,
        transparent
    );
}

.scroll .images {
    white-space: nowrap;
    animation: scroll var(--time) linear infinite;
}

@keyframes scroll {
    0% {
        transform: translateX(0);
    }

    100% {
        transform: translateX(-50%);
    }
}

.scroll .images a {
    display: inline-flex;
    margin: 10px;
    letter-spacing: 0.2em;
    padding: 5px 10px;
    border-radius: 5px;
    transition: 0.5s;
}

.scroll .images a:hover {
    background: #3fd2f9;
    cursor: pointer;
}

.imgBox div {
    display: flex;
    align-items: center;
    justify-content: center;
}

.imgBox img {
    max-width: 100px;
    scale: 0.8;
}
</style>
