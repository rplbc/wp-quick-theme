<header class="fixed left-0 top-0 z-50 w-full">
    <div class="flex h-20 border-b border-b-gray-100 bg-white">
        <div class="container flex">
            <h1 class="mr-auto self-center text-2xl">
                <a href="<?php echo esc_url(home_url('/')); ?>">Quick</a>
            </h1>
            <div class="ml-auto flex items-center gap-8" x-data x-trap="$store.mobileNav.isOpen">
                <nav aria-label="Main menu" x-cloak x-data x-show="$store.mobileNav.isOpen">
                    <ul class="flex items-center gap-5">
                        <li><a href="#home" @click="$store.mobileNav.hide()">Home</a></li>
                        <li><a href="#about" @click="$store.mobileNav.hide()">About</a></li>
                    </ul>
                </nav>
                <button class="self-center rounded bg-indigo-600 px-6 py-2 font-semibold text-white aria-expanded:bg-blue-600" x-data :aria-expanded="$store.mobileNav.isOpen" aria-expanded="false" @click="$store.mobileNav.toggle()">
                    Toggle
                </button>
            </div>
        </div>
    </div>
</header>
