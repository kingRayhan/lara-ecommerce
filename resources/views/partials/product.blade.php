<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
            <div class="productinfo text-center">

                @if($product->image)
                <img src="{{ Storage::disk('local')->url($product->image) }}" alt="{{ $product->name }}" />
                @else
                <img src="{{ asset('images/home/gallery1.jpg') }}" alt="" />
                @endif
            
                <h2>{{ $product->name }}</h2>
                @if($product->category)
                <p>
                    <a href="{{ route('products.front.category' , $product->category->id ) }}">{{ $product->category->name }}</a>
                </p>
                @endif
                <p class="price">
                    {{ $product->price }} Taka
                </p>
                <form action="{{ route('addtocart' , $product->id ) }}" method="post">
                    @csrf
                    <button class="btn btn-default add-to-cart">
                        <i class="fa fa-shopping-cart"></i>ব্যাগে যোগ করুন
                    </button>
                </form>
            </div>
            
        </div>
    </div>
</div>