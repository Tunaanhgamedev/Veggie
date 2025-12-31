{{-- Product Image Gallery Component --}}
<div class="col-md-6">
    <div class="ltn__shop-details-img-gallery">
        <div class="ltn__shop-details-large-img">
            <div class="single-large-img">
                @foreach ($product->images as $image)
                <a href="{{ asset('storage/' . $image->image) }}"
                    data-rel="lightcase:myCollection">
                    <img src="{{ asset('storage/' . $image->image) }}"
                        alt="{{ $product->name }}">
                </a>
                @endforeach
            </div>
        </div>
        <div class="ltn__shop-details-small-img slick-arrow-2">
            @foreach ($product->images as $image)
            <div class="single-small-img">
                <img src="{{ asset('storage/' . $image->image) }}" alt="{{ $product->name }}">
            </div>
            @endforeach
        </div>
    </div>
</div>



