<!-- trang này để hiển thị tất cả san phẩm bên trang chủ  -->
<!--  -->
@extends('frontend.index')
@section('content')
 

 <div class="products-area">
            <div class="container">
                <div class="products">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="product-menu">
                                <div class="menu-title">
                                    <h2>Best seller <strong>Products</strong></h2>
                                </div>
                                <div class="side-menu">
                                     <!-- Nav tabs -->
                                    <ul class="tab-navigation" role="tablist">
                                        <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Women</a></li>
                                        <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">men</a></li>
                                        <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Footwear</a></li>
                                        <li role="presentation"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Jewellery</a></li>
                                        <li role="presentation"><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">Accessories</a></li>
                                        <li role="presentation"><a href="#tab6" aria-controls="tab6" role="tab" data-toggle="tab">Dresses</a></li>
                                        <li role="presentation"><a href="#tab7" aria-controls="tab7" role="tab" data-toggle="tab">shoes</a></li>
                                        <li role="presentation"><a href="#tab8" aria-controls="tab8" role="tab" data-toggle="tab">Handbags</a></li>
                                        <li> <img src="img/banner/banner-5.jpg" alt=""> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                                        <div class="product-slider">
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/1.png" alt="" class="primary-img">
                                                            <img src="img/product/2.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/1.png" alt="" class="primary-img">
                                                            <img src="img/product/2.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/3.png" alt="" class="primary-img">
                                                            <img src="img/product/4.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/9.png" alt="" class="primary-img">
                                                            <img src="img/product/10.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/5.png" alt="" class="primary-img">
                                                            <img src="img/product/6.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/11.png" alt="" class="primary-img">
                                                            <img src="img/product/12.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/21.png" alt="" class="primary-img">
                                                            <img src="img/product/22.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/3.png" alt="" class="primary-img">
                                                            <img src="img/product/16.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/19.png" alt="" class="primary-img">
                                                            <img src="img/product/20.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/13.png" alt="" class="primary-img">
                                                            <img src="img/product/14.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/25.png" alt="" class="primary-img">
                                                            <img src="img/product/26.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/18.png" alt="" class="primary-img">
                                                            <img src="img/product/2.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/15.png" alt="" class="primary-img">
                                                            <img src="img/product/16.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/17.png" alt="" class="primary-img">
                                                            <img src="img/product/18.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab2">
                                        <div class="product-slider">
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/5.png" alt="" class="primary-img">
                                                            <img src="img/product/6.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/11.png" alt="" class="primary-img">
                                                            <img src="img/product/12.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/21.png" alt="" class="primary-img">
                                                            <img src="img/product/22.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/3.png" alt="" class="primary-img">
                                                            <img src="img/product/15.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/19.png" alt="" class="primary-img">
                                                            <img src="img/product/20.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/13.png" alt="" class="primary-img">
                                                            <img src="img/product/14.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/25.png" alt="" class="primary-img">
                                                            <img src="img/product/26.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/3.png" alt="" class="primary-img">
                                                            <img src="img/product/18.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/15.png" alt="" class="primary-img">
                                                            <img src="img/product/9.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/17.png" alt="" class="primary-img">
                                                            <img src="img/product/18.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/25.png" alt="" class="primary-img">
                                                            <img src="img/product/26.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/18.png" alt="" class="primary-img">
                                                            <img src="img/product/2.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab3">
                                        <div class="product-slider">
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/25.png" alt="" class="primary-img">
                                                            <img src="img/product/26.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/23.png" alt="" class="primary-img">
                                                            <img src="img/product/24.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/22.png" alt="" class="primary-img">
                                                            <img src="img/product/21.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/18.png" alt="" class="primary-img">
                                                            <img src="img/product/19.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/17.png" alt="" class="primary-img">
                                                            <img src="img/product/18.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/15.png" alt="" class="primary-img">
                                                            <img src="img/product/16.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/13.png" alt="" class="primary-img">
                                                            <img src="img/product/14.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/11.png" alt="" class="primary-img">
                                                            <img src="img/product/12.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/9.png" alt="" class="primary-img">
                                                            <img src="img/product/10.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/7.png" alt="" class="primary-img">
                                                            <img src="img/product/8.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/5.png" alt="" class="primary-img">
                                                            <img src="img/product/6.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab4">
                                        <div class="product-slider">
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/3.png" alt="" class="primary-img">
                                                            <img src="img/product/4.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/2.png" alt="" class="primary-img">
                                                            <img src="img/product/1.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/5.png" alt="" class="primary-img">
                                                            <img src="img/product/12.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/3.png" alt="" class="primary-img">
                                                            <img src="img/product/10.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/1.png" alt="" class="primary-img">
                                                            <img src="img/product/8.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/25.png" alt="" class="primary-img">
                                                            <img src="img/product/12.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/23.png" alt="" class="primary-img">
                                                            <img src="img/product/13.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/21.png" alt="" class="primary-img">
                                                            <img src="img/product/11.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/19.png" alt="" class="primary-img">
                                                            <img src="img/product/9.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab5">
                                        <div class="product-slider">
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/17.png" alt="" class="primary-img">
                                                            <img src="img/product/8.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/15.png" alt="" class="primary-img">
                                                            <img src="img/product/7.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/13.png" alt="" class="primary-img">
                                                            <img src="img/product/2.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/12.png" alt="" class="primary-img">
                                                            <img src="img/product/22.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/19.png" alt="" class="primary-img">
                                                            <img src="img/product/20.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/21.png" alt="" class="primary-img">
                                                            <img src="img/product/14.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/23.png" alt="" class="primary-img">
                                                            <img src="img/product/16.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/14.png" alt="" class="primary-img">
                                                            <img src="img/product/12.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/11.png" alt="" class="primary-img">
                                                            <img src="img/product/19.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab6">
                                        <div class="product-slider">
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/12.png" alt="" class="primary-img">
                                                            <img src="img/product/6.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/18.png" alt="" class="primary-img">
                                                            <img src="img/product/21.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/19.png" alt="" class="primary-img">
                                                            <img src="img/product/13.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/23.png" alt="" class="primary-img">
                                                            <img src="img/product/25.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/25.png" alt="" class="primary-img">
                                                            <img src="img/product/20.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/10.png" alt="" class="primary-img">
                                                            <img src="img/product/13.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/20.png" alt="" class="primary-img">
                                                            <img src="img/product/12.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/7.png" alt="" class="primary-img">
                                                            <img src="img/product/15.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab7">
                                        <div class="product-slider">
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/5.png" alt="" class="primary-img">
                                                            <img src="img/product/6.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/11.png" alt="" class="primary-img">
                                                            <img src="img/product/12.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/21.png" alt="" class="primary-img">
                                                            <img src="img/product/22.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/3.png" alt="" class="primary-img">
                                                            <img src="img/product/15.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/19.png" alt="" class="primary-img">
                                                            <img src="img/product/20.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/13.png" alt="" class="primary-img">
                                                            <img src="img/product/14.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/21.png" alt="" class="primary-img">
                                                            <img src="img/product/22.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/3.png" alt="" class="primary-img">
                                                            <img src="img/product/15.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/19.png" alt="" class="primary-img">
                                                            <img src="img/product/20.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/13.png" alt="" class="primary-img">
                                                            <img src="img/product/14.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab8">
                                        <div class="product-slider">
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/11.png" alt="" class="primary-img">
                                                            <img src="img/product/12.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/11.png" alt="" class="primary-img">
                                                            <img src="img/product/12.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/21.png" alt="" class="primary-img">
                                                            <img src="img/product/22.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/3.png" alt="" class="primary-img">
                                                            <img src="img/product/15.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/19.png" alt="" class="primary-img">
                                                            <img src="img/product/20.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/13.png" alt="" class="primary-img">
                                                            <img src="img/product/14.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/21.png" alt="" class="primary-img">
                                                            <img src="img/product/22.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="img/product/3.png" alt="" class="primary-img">
                                                            <img src="img/product/15.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- products area end -->
        <!-- feature products area start -->
        <div class="features-product-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>FEATURED PRODUCTS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="feature-product-slider">
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-new">
                                    <span>new</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/1.png" alt="" class="primary-img">
                                        <img src="img/product/2.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-sale">
                                    <span>sale</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/7.png" alt="" class="primary-img">
                                        <img src="img/product/8.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-sale">
                                    <span>sale</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/3.png" alt="" class="primary-img">
                                        <img src="img/product/4.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-sale">
                                    <span>sale</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/9.png" alt="" class="primary-img">
                                        <img src="img/product/10.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/5.png" alt="" class="primary-img">
                                        <img src="img/product/6.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-new">
                                    <span>new</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/3.png" alt="" class="primary-img">
                                        <img src="img/product/4.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-sale">
                                    <span>sale</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/19.png" alt="" class="primary-img">
                                        <img src="img/product/20.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/13.png" alt="" class="primary-img">
                                        <img src="img/product/14.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/15.png" alt="" class="primary-img">
                                        <img src="img/product/16.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-new">
                                    <span>new</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/17.png" alt="" class="primary-img">
                                        <img src="img/product/18.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feature products area end -->
        <!-- another banner area start -->
        <div class="another-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="big-banner">
                            <a href="#">
                                <img src="img/banner/banner-10.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- another banner area end -->
        <!-- new products area start -->
        <div class="new-products-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>NEW PRODUCTS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="new-product-slider">
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-new">
                                    <span>new</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/25.png" alt="" class="primary-img">
                                        <img src="img/product/26.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-sale">
                                    <span>sale</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/3.png" alt="" class="primary-img">
                                        <img src="img/product/4.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-sale">
                                    <span>sale</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/2.png" alt="" class="primary-img">
                                        <img src="img/product/8.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-sale">
                                    <span>sale</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/1.png" alt="" class="primary-img">
                                        <img src="img/product/2.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/17.png" alt="" class="primary-img">
                                        <img src="img/product/18.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-new">
                                    <span>new</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/19.png" alt="" class="primary-img">
                                        <img src="img/product/20.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-sale">
                                    <span>sale</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/21.png" alt="" class="primary-img">
                                        <img src="img/product/22.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="img/product/23.png" alt="" class="primary-img">
                                        <img src="img/product/24.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- new products area end -->
        <!-- testimonial area start -->
        <div class="testimonial-area">
            <div class="container">
                <div class="row">
                    <div class="testimonial-slider">
                        <div class="single-testimonial">
                            <div class="spech">
                                <a href="#">“ Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat ”</a>
                            </div>
                            <div class="avater">
                                <img src="img/testimonial/1.jpg" alt="">
                            </div>
                            <div class="post-by">
                                <span>Salim Rana</span>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="spech">
                                <a href="#">“ Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat ”</a>
                            </div>
                            <div class="avater">
                                <img src="img/testimonial/2.jpg" alt="">
                            </div>
                            <div class="post-by">
                                <span>Hridoy Roy</span>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="spech">
                                <a href="#">“ Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat ”</a>
                            </div>
                            <div class="avater">
                                <img src="img/testimonial/3.jpg" alt="">
                            </div>
                            <div class="post-by">
                                <span>themesplaza</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial area end -->
        <!-- blog area start -->
        <div class="blog-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-heading">
                            <h2>From <strong> The Blog</strong></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-post">
                        <div class="single-blog-post">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="img/blog/1.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <a href="blog-details.html" class="blog-title">Lorem ipsum dolor sit amet</a>
                                <span><a href="#">By plaza themes - </a>17 Aug 2015 ( 0 comments )</span>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna...</p>
                                <a href="blog-details.html" class="readmore">read more ></a>
                            </div>
                        </div>
                            <div class="single-blog-post">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="img/blog/2.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <a href="blog-details.html" class="blog-title">Lorem ipsum dolor sit amet</a>
                                <span><a href="#">By plaza themes - </a>17 Aug 2015 ( 0 comments )</span>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna...</p>
                                <a href="blog-details.html" class="readmore">read more ></a>
                            </div>
                            </div>
                        </div>
                        <div class="single-blog-post">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="img/blog/3.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <a href="blog-details.html" class="blog-title">Lorem ipsum dolor sit amet</a>
                                <span><a href="#">By plaza themes - </a>17 Aug 2015 ( 0 comments )</span>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna...</p>
                                <a href="blog-details.html" class="readmore">read more ></a>
                            </div>
                        </div>
                        <div class="single-blog-post">
                            <div class="blog-img">
                                <a href="blog-details.html">
                                    <img src="img/blog/4.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <a href="blog-details.html" class="blog-title">Lorem ipsum dolor sit amet</a>
                                <span><a href="#">By plaza themes - </a>17 Aug 2015 ( 0 comments )</span>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna...</p>
                                <a href="blog-details.html" class="readmore">read more ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog area end -->
        <!-- newsleter area start -->
        <div class="newsleter-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="newsleter">
                            <h3>newsletter</h3>
                            <p>Subscribe to the james mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                            <div class="Subscribe">
                                <form action="#">
                                    <input type="text" title="Sign up">
                                    <button type="submit" title="Subscribe">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="follow">
                            <h3>follow</h3>
                            <p>Subscribe to the james mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                            <ul class="follow-link">
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-rss"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection