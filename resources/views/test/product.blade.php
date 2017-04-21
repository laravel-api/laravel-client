<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>
                        Category
                    </h2>
                    <div class="panel-group category-products" id="accordian">
                        <!--category-productsr-->
                        @foreach($category as $item)
                            @if($item['status'] == 0)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-parent="#accordian" data-toggle="collapse" href="#{{ $item['id']}}">
                                        <span class="badge pull-right">
                                            <i class="fa fa-plus">
                                            </i>
                                        </span>
                                        {{ $item['name'] }}
                                    </a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse" id="{{ $item['id'] }}">
                                @foreach($category as $item2)
                                    @if($item2['status'] == $item['id'])
                                <div class="panel-body">
                                    <ul>
                                        <li>
                                            <a data-toggle="collapse" href="#{{ $item2['id']}}">
                                                {{ $item2['name'] }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center">
                        Features Items
                    </h2>
                    @foreach($product as $row)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img alt="" src="images/home/product1.jpg"/>
                                    <h2>
                                        {{ $row['price'] }}
                                    </h2>
                                    <p>
                                        {{ $row['name'] }}
                                    </p>
                                    <a class="btn btn-default add-to-cart" href="#">
                                        <i class="fa fa-shopping-cart">
                                        </i>
                                        Add to cart
                                    </a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>
                                            {{ $row['price'] }}
                                        </h2>
                                        <p>
                                            {{ $row['name'] }}
                                        </p>
                                        <a class="btn btn-default add-to-cart" href="#">
                                            <i class="fa fa-shopping-cart">
                                            </i>
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-plus-square">
                                            </i>
                                            Add to wishlist
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-plus-square">
                                            </i>
                                            Add to compare
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!--features_items-->
            </div>
        </div>
    </div>
</section>
