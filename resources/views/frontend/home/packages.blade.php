<!-- ================== OUR PACKAGES ================  -->
<section class="our-packages py-10">
    <div>
        <div class="heading pl-10">
            <h2 class="font-2rem font-bold">Our Popular Packages</h2>
        </div>
        <div class="flex flex-wrap package-container">
            @foreach($packages as $package)
            <div class="package-card ml-10 mt-10">
                <div class="package-image">

                    <img src="{{ optional( $package->image)->src  ?? 'assets/img/package.jpg'}}" />
                </div>
                <div class="card-content-section pl-10">
                    <div class="card-content">
                        <h1 class="font-bold">{{$package->title}}</h1>
                        <div class="flex justify-between">
                            <div class="price font-bold italic">{{ $package->price }}</div>
                            <button
                                class="bg-red-400 text-white button-sm button px-10 border rounded mr-4 mb-1"
                            >
                                View
                            </button>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </div>
</section>

<!-- ================== END OF OUR PACKAGES ================  -->
