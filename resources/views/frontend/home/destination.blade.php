<!-- ============ POPULAR DESTINATION ============== -->


<section class="our-packages popular-destination-package py-10">
    <div>
        <div class="heading pl-10">
            <h2 class="font-2rem font-bold">Popular Destination</h2>
        </div>
        <div class="flex flex-wrap package-container">
            @foreach($destination as $dest)
            <div class="package-card ml-10 mt-10">
                <div class="package-image">
                    <img src="{{ optional( $dest->image)->src ?? 'assets/img/package.jpg'}}" />
                </div>
                <div class="card-content-section pl-10">
                    <div class="card-content">
                        <h1 class="font-bold"> {{ $dest->name }} </h1>
                        <div class="flex justify-between">
                            <div class="price font-bold italic">{{ $dest->description }} </div>
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

<!-- ============ END POPULAR DESTINATION ============== -->
