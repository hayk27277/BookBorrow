<li class="product col">
    <div class="product__inner overflow-hidden p-3 p-md-4d875">
        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
            <div class="woocommerce-loop-product__thumbnail">
                <a href="{{route('books.show',$book->id)}}" class="d-block">
                    <img src="{{$book->cover_image}}"
                         class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                         alt="image-description">
                </a>
            </div>
            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                <div class="text-uppercase font-size-1 mb-1 text-truncate">
                    <a href="{{route('books.show',$book->id)}}">{{$book->released_at}}</a>
                </div>
                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                    <a href="{{route('books.show',$book->id)}}">{{$book->title}}</a>
                </h2>
                <div class="font-size-2  mb-1 text-truncate">
                    <a href="../others/authors-single.html" class="text-gray-700">
                        {{$book->authors}}
                    </a>
                </div>
                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    {{$book->description}}
                </div>
            </div>
            <div class="product__hover d-flex align-items-center">
                <a href="#" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip"
                   data-placement="right" title="" data-original-title="ADD TO CART">
                    <span class="product__add-to-cart">ADD TO CART</span>
                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                </a>
                <a href="#" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                    <i class="fa-solid fa-repeat"></i>
                </a>
                <a href="#" class="h-p-bg btn btn-outline-primary border-0">
                    <i class="fa-solid fa-heart"></i>
                </a>
            </div>
        </div>
    </div>
</li>
