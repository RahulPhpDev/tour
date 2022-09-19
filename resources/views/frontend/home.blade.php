@extends('frontend.layout.app')
@section('content')
<section>
    <div class="hero flex align-center h-screen">
        <div class="self-center m-auto">
            <div class="elementor-background-overlay"></div>
            <div class="inline-block w-full text-center">
                <h2 class="font-bold text-white hero-text font-lg">
                    Your Journey start Here
                </h2>
                <p class="description font-semibold text-center text-white font-lg">
                    Discover and book amazing travel experiences with Saksham Holiday
                </p>
            </div>
            <div class="block">
                <form
                    class="flex hero-form mt-10 w-full bg-white p-10 justify-between"
                >
                    <div class="hero-form-divison">
                        <label
                            class="block text-gray-700 text-sm font-bold mb-2"
                            for="username"
                        >
                            Destination
                        </label>
                        <input
                            type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        />
                    </div>

                    <div class="hero-form-divison">
                        <label
                            class="block text-gray-700 text-sm font-bold mb-2"
                            for="username"
                        >
                            Date
                        </label>
                        <input
                            type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        />
                    </div>

                    <div class="hero-form-divison">
                        <label
                            class="block text-gray-700 text-sm font-bold mb-2"
                            for="username"
                        >
                            Guests
                        </label>
                        <input
                            type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        />
                    </div>
                    <div class="search-btn">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="button"
                        >
                            Search
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- align self !-->
    </div>
</section>

<!-- ============== MileStone ============ -->
<section>
    <div class="w-full milestone-section p-20 text-white">
        <div class="flex milestone-container justify-between">
            <div class="flex">
            <span class="elementor-icon elementor-animation-">
              <i class="fa fa-search"></i>
            </span>
                <div class="ml-5">
                    <h2 class="font-lg font-lg font-bold">500 + Destination</h2>
                    <span class="font-semibold mt-10"> Lore Ipsum is more </span>
                </div>
            </div>

            <div class="flex">
            <span class="elementor-icon elementor-animation-">
              <i class="fa fa-search"></i>
            </span>
                <div class="ml-5">
                    <h2 class="font-lg font-lg font-bold">500 + Destination</h2>
                    <span class="font-semibold mt-10"> Lore Ipsum is more </span>
                </div>
            </div>

            <div class="flex">
            <span class="elementor-icon elementor-animation-">
              <i class="fa fa-search"></i>
            </span>

                <div class="ml-5">
                    <h2 class="font-lg font-lg font-bold">500 + Destinations</h2>
                    <span class="font-semibold mt-10"> Lore Ipsum is more </span>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.home.destination')

@include('frontend.home.packages')
<!-- ============= WHY CHOOSE US ============-->
<section class="why-choose-us">
    <div class="flex why-choose-us-container pt-20 px-10">
        <div class="why-choose-us-division">
            <h2 class="font-2rem relative font-bold choose-heading">
                Why <span class="text-green-500">Choose US</span>
            </h2>

            <div class="our-service block mt-10 ml-10">
                <ul>
                    <li>No Hidden Cost</li>
                    <li>Work With passion</li>
                    <li>Best sight scence</li>
                </ul>
            </div>
        </div>
        <div class="enquiry-us-division ml-20">
            <h2 class="font-2rem relative font-bold choose-heading">
                Your <span class="text-green-500">Inquiry</span>
            </h2>
            <form class="mt-10 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label
                        class="block text-gray-700 text-sm font-bold mb-2"
                        for="username"
                    >
                        Username
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username"
                        type="text"
                        placeholder="Username"
                    />
                </div>
                <div class="mb-6">
                    <label
                        class="block text-gray-700 text-sm font-bold mb-2"
                        for="password"
                    >
                        Phone Number
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="password"
                        type="number"
                        placeholder="Enter Your Number"
                    />
                </div>

                <div class="mb-6">
                    <label
                        class="block text-gray-700 text-sm font-bold mb-2"
                        for="password"
                    >
                        Your Query
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    ></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="button"
                    >
                        Send Us
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- =================== END OF CHOOSE ========== -->

@endsection
