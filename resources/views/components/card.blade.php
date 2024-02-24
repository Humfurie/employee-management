<div class="flex flex-col w-full">
    @isset($header)
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @isset($actions)
            <div class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $actions }}
                </div>
            </div>
        @endisset
    @endisset
    @isset($body)
        <div>
            {{ $body }}
        </div>
    @endisset
</div>
