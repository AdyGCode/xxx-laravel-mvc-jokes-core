<x-guest-layout>

    <article class="flex flex-col gap-8">
        <header class="bg-zinc-700 text-zinc-200 -mx-8 -mt-8 rounded-t p-8 text-2xl font-bold ">
            <h2 class="text-3xl">YOUR-GIVEN-NAME's Joke DB</h2>
            <h3 class="text-xl">Contact Us</h3>
        </header>

        <section class="grid grid-cols-1 lg:grid-cols-2 gap-8 rounded p-2 -mt-6">
            <section class="border border-zinc-500 rounded m-4 text-zinc-500 space-y-2 overflow-hidden ">
                <header class="rounded-t mb-4 flex space-x-2 bg-zinc-500 text-zinc-100  items-center">
                    <h4 class="p-2 py-3 text-xl font-medium w-2/3">
                        Location
                    </h4>
                    <p class="px-2 text-sm text-right grow">
                        Map - North Metropolitan TAFE<br> Perth Campus
                    </p>
                </header>

                <img src="map-nmtafe-perth.png" alt="Map of Perth Highlighting NMTAFE"
                     class="object-cover overflow-hidden  h-full">

            </section>

            <section class="border border-zinc-500 m-4 text-zinc-500 space-y-2 rounded">
                <header class="rounded-t  mb-4 flex space-x-2 bg-zinc-500 text-zinc-100  items-center">
                    <h4 class="p-2 py-3 text-xl font-medium w-2/3">
                        Send Us a Message
                    </h4>
                    <p class="px-2 text-sm text-right grow">
                        Fill out our form to contact us
                    </p>
                </header>

                <form action="" class="p-4 pt-0 flex flex-col gap-4 rounded">
                    <fieldset class="w-full">
                        <x-input-label class="mb-1">Name</x-input-label>
                        <x-text-input name="contact_name" placeholder="Full name" class="w-full"></x-text-input>
                    </fieldset>

                    <fieldset class="w-full">
                        <x-input-label class="mb-1">Email</x-input-label>
                        <x-text-input name="contact_email" placeholder="Email Address"
                                      class="w-full"></x-text-input>
                    </fieldset>

                    <fieldset class="w-full">
                        <x-input-label class="mb-1">Subject</x-input-label>
                        <select
                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
                            name="whatever" id="frm-whatever">
                            <option value="" selected disabled>Please choose&hellip;</option>
                            <option value="account issue">Account Issue</option>
                            <option value="content issue">Content Issue</option>
                            <option value="general query">General Query</option>
                        </select>

                    </fieldset>

                    <fieldset class="w-full">
                        <x-input-label class="mb-1">Message</x-input-label>
                        <textarea id="editor" rows="8"
                                  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
                                  placeholder="Please enter your message..." required></textarea>
                    </fieldset>


                    <x-primary-button type="submit">Send</x-primary-button>
                </form>

            </section>
        </section>

    </article>

</x-guest-layout>
