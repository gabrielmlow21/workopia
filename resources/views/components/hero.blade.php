@props(['title' => 'Find Your Dream Job'])

<section class="hero relative flex h-72 items-center bg-cover bg-center bg-no-repeat">
    <div class="overlay"></div>
    <div class="container z-10 mx-auto text-center">
        <h2 class="mb-4 text-4xl font-bold text-white">{{ $title }}</h2>
        <form class="mx-5 block md:mx-auto md:space-x-2">
            <input type="text" name="keywords" placeholder="Keywords"
                class="w-full px-4 py-3 focus:outline-none md:w-72" />
            <input type="text" name="location" placeholder="Location"
                class="w-full px-4 py-3 focus:outline-none md:w-72" />
            <button class="w-full bg-blue-700 px-4 py-3 text-white hover:bg-blue-600 focus:outline-none md:w-auto">
                <i class="fa fa-search mr-1"></i> Search
            </button>
        </form>
    </div>
</section>
