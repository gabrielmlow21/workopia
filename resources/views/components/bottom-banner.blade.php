@props([
    'heading' => 'Looking to hire?',
    'subheading' => 'Post your job listing now and find the perfect
candidate',
])

<section class="container mx-auto my-6">
    <div class="flex items-center justify-between rounded bg-blue-800 p-4 text-white">
        <div>
            <h2 class="text-xl font-semibold">{{ $heading }}</h2>
            <p class="mt-2 text-lg text-gray-200">
                {{ $subheading }}
            </p>
        </div>
        <a href="create-job.html"
            class="rounded bg-yellow-500 px-4 py-2 text-black transition duration-300 hover:bg-yellow-600 hover:shadow-md">
            <i class="fa fa-edit"></i> Create Job
        </a>
    </div>
</section>
