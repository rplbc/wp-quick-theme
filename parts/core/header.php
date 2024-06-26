<header class="fixed left-0 top-0 z-50 w-full">
    <div class="flex h-20 border-b border-b-gray-100 bg-white">
        <div class="container flex">
            <h1 class="mr-auto self-center text-2xl">
                <a href="<?php echo esc_url(home_url('/')); ?>">Quick</a>
            </h1>
            <div class="ml-auto flex items-center gap-8" x-data="{ open: false }">
                <nav aria-label="Main menu" x-cloak x-data x-show="open">
                    <ul class="flex items-center gap-5">
                        <li><a href="#home" @click="open = false">Home</a></li>
                        <li><a href="#about" @click="open = false">About</a></li>
                    </ul>
                </nav>
                <button class="self-center rounded bg-indigo-600 px-6 py-2 font-semibold text-white aria-expanded:bg-blue-600" x-data :aria-expanded="open" aria-expanded="false" @click="open = !open">
                    Toggle
                </button>
            </div>
        </div>
    </div>
</header>
