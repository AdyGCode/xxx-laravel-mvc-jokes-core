<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            YOUR-GIVEN-NAME's {{ __('Joke DB') }}
        </h2>
    </x-slot>


    <article class="-mx-4">
        <header class="bg-zinc-700 text-zinc-200 rounded-t-lg -mx-4 -mt-8 p-8 text-2xl font-bold mb-8">
            <h2>Welcome</h2>
            <p class="text-sm">{{ now() }}</p>
        </header>

        <div class="flex flex-col flex-wrap my-4 mt-8">
            <section class="grid grid-cols-1 gap-4 px-4 mt-4 sm:grid-cols-3 sm:px-8">

                <section class="rounded flex items-center bg-lime-200 border border-lime-600 overflow-hidden">
                    <div class="rounded-l p-6 bg-lime-600 text-center">
                        <i class="fa-solid fa-users text-5xl min-w-24 text-white"></i>
                    </div>
                    <div class="rounded-r px-6 text-lime-800">
                        <h3 class="tracking-wider">Total Members</h3>
                        <p class="text-3xl">12,768</p>
                    </div>
                </section>

                <section class="flex items-center bg-amber-200 border border-amber-600 rounded overflow-hidden">
                    <div class="rounded-l p-6 bg-amber-600 text-center">
                        <i class="fa-solid fa-table-list text-5xl min-w-24 text-white"></i>
                    </div>
                    <div class="rounded-r px-6 text-amber-700">
                        <h3 class="tracking-wider">Total Categories</h3>
                        <p class="text-3xl">39,265</p>
                    </div>
                </section>

                <section class="flex items-center bg-indigo-200 border border-indigo-600 rounded overflow-hidden">
                    <div class="rounded-l p-6 bg-indigo-600 text-center">
                        <i class="fa-solid fa-comments text-5xl min-w-24 text-white"></i>
                    </div>
                    <div class="rounded-r px-6 text-indigo-700">
                        <h3 class="tracking-wider">Total Jokes</h3>
                        <p class="text-3xl">142,334</p>
                    </div>
                </section>


            </section>

            <section class="grid grid-cols-1 gap-4 px-4 mt-4 sm:grid-cols-3 sm:px-8">

                <article class=" bg-white shadow rounded p-2 flex flex-col">
                    <header class="-mx-2 bg-zinc-700 text-zinc-200 text-lg p-4 -mt-2 mb-4 rounded-t flex-0">
                        <h4>
                            Time for a Random Joke
                        </h4>
                    </header>
                    <section class="flex-grow flex flex-col space-y-3 text-zinc-600">
                        <p class="">
                            A cowboy butcher decided to relocate his fresh meat shop.
                        </p>
                        <p class="">
                            "Sorry Folks. I'm pullin' up steaks."
                        </p>
                    </section>
                    <footer class="-mx-2 bg-zinc-100 text-zinc-600 text-sm mt-4 -mb-2 rounded-b flex-0">
                        <p class="w-full text-right rounded-b hover:text-black px-4 py-2">
                            Author's Name
                        </p>
                    </footer>
                </article>

                <article class="bg-white shadow rounded p-2 flex flex-col">
                    <header class="-mx-2 bg-zinc-700 text-zinc-200 text-lg p-4 -mt-2 mb-4 rounded-t flex-0">
                        <h4>
                            No Joke Today
                        </h4>
                    </header>
                    <section class="flex-grow flex flex-col space-y-3 text-zinc-600">
                        <p class="">
                            And that's all folks.
                        </p>
                    </section>
                    <footer class="-mx-2 bg-zinc-100 text-zinc-600 text-sm mt-4 -mb-2 rounded-b flex-0">
                        <p class="w-full text-right rounded-b hover:text-black px-4 py-2">
                            Become a member
                        </p>
                    </footer>
                </article>

            </section>


        </div>

    </article>

</x-app-layout>
