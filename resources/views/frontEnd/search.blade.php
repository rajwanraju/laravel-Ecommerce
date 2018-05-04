 @extends('frontEnd.master')
@section('title')

  E-Shop

@endsection

@section('mainContent')



<div class="product-easy">
    <div class="container">
        
        <script src="{{asset('public/frontEnd/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
        <script type="text/javascript">
                            $(document).ready(function () {
                                $('#horizontalTab').easyResponsiveTabs({
                                    type: 'default', //Types: default, vertical, accordion           
                                    width: 'auto', //auto or any width like 600px
                                    fit: true   // 100% fit in a container
                                });
                            });
                            
        </script>
        <div class="sap_tabs">
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Search Product</span></li> 
                     
                </ul>   

                <div class="resp-tabs-container">
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                            @foreach($searchProducts as $publishedProduct)
                                            <div class="col-md-3 product-men">
                                                <div class="men-pro-item simpleCart_shelfItem">
                                                    <div class="men-thumb-item">
                                                        <img src="{{asset ($publishedProduct->productImage)}}" alt="" class="pro-image-front" height="200" width="200">
                                                        <img src="{{asset ($publishedProduct->productImage)}}" alt="" class="pro-image-back" height="200" width="200">
                                                        <div class="men-cart-pro">
                                                            <div class="inner-men-cart-pro">
                                                                <a href="{{ url('/product-details/'.$publishedProduct->id)}}" class="link-product-add-cart">Quick View</a>
                                                            </div>
                                                        </div>
                                                        <span class="product-new-top">New</span>

                                                    </div>
                                                    <div class="item-info-product ">
                                                        <h4><a href="{{ url('/product-details/'.$publishedProduct->id)}}">{{$publishedProduct->productName}}</a></h4>
                                                        <div class="info-product-price">
                                                            <span class="item_price">BDT.{{$publishedProduct->productPrice}}</span>

                                                        </div>
                                                        <a href="{{ url('/product-details/'.$publishedProduct->id)}}" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                  
                                                    </div>

                                                </div>
                                               
                                            </div>
                                           
                                            @endforeach
                        </div>
                        </div>
                        <div class="clearfix"></div>
                         <div class="col-md-12">
                                                {{$searchProducts->links()}}
                                                </div>
                    </div>
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('public/frontEnd/images/')}}/w1.png" alt="" class="pro-image-front">
                                    <img src="{{asset('public/frontEnd/images/')}}/w1.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                        
                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Wedges</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="{{url('/cart/add')}}" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('public/frontEnd/images/')}}/w2.png" alt="" class="pro-image-front">
                                    <img src="{{asset('public/frontEnd/images/')}}/w2.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                        
                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Sandals</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('public/frontEnd/images/')}}/mw1.png" alt="" class="pro-image-front">
                                    <img src="{{asset('public/frontEnd/images/')}}/mw1.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                        
                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Casual Shoes</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('public/frontEnd/images/')}}/mw3.png" alt="" class="pro-image-front">
                                    <img src="{{asset('public/frontEnd/images/')}}/mw3.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                        
                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Sport Shoes</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men yes-marg">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('public/frontEnd/images/')}}/ep2.png" alt="" class="pro-image-front">
                                    <img src="{{asset('public/frontEnd/images/')}}/ep2.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                        
                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Watches</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men yes-marg">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('public/frontEnd/images/')}}/ep3.png" alt="" class="pro-image-front">
                                    <img src="{{asset('public/frontEnd/images/')}}/ep3.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                        
                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Watches</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="clearfix"></div>                        
                    </div>
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('public/frontEnd/images/')}}/g1.png" alt="" class="pro-image-front">
                                    <img src="{{asset('public/frontEnd/images/')}}/g1.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                        
                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Dresses</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('public/frontEnd/images/')}}/g2.png" alt="" class="pro-image-front">
                                    <img src="{{asset('public/frontEnd/images/')}}/g2.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                        
                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html"> Shirts</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('public/frontEnd/images/')}}/g3.png" alt="" class="pro-image-front">
                                    <img src="{{asset('public/frontEnd/images/')}}/g3.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                        
                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Shirts</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('public/frontEnd/images/')}}/mw2.png" alt="" class="pro-image-front">
                                    <img src="{{asset('public/frontEnd/images/')}}/mw2.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                        
                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">T shirts</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men yes-marg">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('public/frontEnd/images/')}}/w4.png" alt="" class="pro-image-front">
                                    <img src="{{asset('public/frontEnd/images/')}}/w4.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                        
                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Air Tshirt Black Domyos</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 product-men yes-marg">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('public/frontEnd/images/')}}/w3.png" alt="" class="pro-image-front">
                                    <img src="{{asset('public/frontEnd/images/')}}/w3.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                        
                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="single.html">Hand Bags</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                    
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>        
                    </div>  
                </div>  
            </div>
        </div>
    </div>
</div>


@endsection

