@foreach ($products as $key => $product)
    <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="product">
            <a href="/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html" class="img-prod">
                <img class="img-fluid" src="{{ asset($product->thumb) }}" alt="{{ $product->name }}">
                <span class="status">Giảm</span>
                <div class="overlay"></div>
            </a>
            <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="#">{{ $product->name }}</a></h3>
                <div class="d-flex">
                    <div class="pricing">
                        <p class="price"><span style="font-size: 12px;" class="mr-2 price-dc"><?php echo number_format($product->price); ?> VNĐ</span>
                        <span class="price-sale"><?php echo number_format($product->price_sale); ?> VNĐ</span></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

