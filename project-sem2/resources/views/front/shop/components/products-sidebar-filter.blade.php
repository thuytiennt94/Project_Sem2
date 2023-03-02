
<form action="{{ request()->segment(2) == 'products' ? 'shop' : '' }}">
    <div class="filter-widget">
        <h4 class="fw-title st widget-title">Categories</h4>
        <ul class="filter-catagories">
            @foreach($categories as $category)
                <li class="cat-item cat-item-19 cat-parent"><a href="shop/category/{{ $category->name }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title widget-title">Price</h4>
        <div class="filter-range-wrap">
            <div class="range-slider">
                <div class="price-input">
                    <input type="text" id="minamount" name="price_min">
                    <input type="text" id="maxamount" name="price_max">
                </div>
            </div>
            <div
                class="price-range ui-slider ui-slider-horizontal ui-widget-content"
                data-min="1" data-max="100"
                data-min-value="{{ str_replace('$', '', request('price_min')) }}"
                data-max-value="{{ str_replace('$', '', request('price_max')) }}">
                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
            </div>
        </div>
        <button type="submit" class="filter-btn">Filter</button>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title widget-title">Tags</h4>
        <div class="fw-tags">
            <a href="#">Capsule</a>
            <a href="#">Injection</a>
            <a href="#">Medication</a>
            <a href="#">Ointment</a>
            <a href="#">Spray</a>
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title widget-title">Best Products</h4>
        <ul class="product-list-widget">
            <li>
                <a href="">
                    <img width="270" height="270" src="./front/img/products-sem2/product-14.jpg" alt="">
                    <span class="product-title">White tooth scream</span>
                </a>
                <div>
                    <span class="product-price">$12.00</span>
                </div>
            </li>
            <li>
                <a href="">
                    <img width="270" height="270" src="./front/img/products-sem2/product-9.jpg" alt="">
                    <span class="product-title">Multivitamin fresh liquid</span>
                </a>
                <div>
                    <span class="product-price">$16.45</span>
                </div>
            </li>
            <li>
                <a href="">
                    <img width="270" height="270" src="./front/img/products-sem2/product-10.jpg" alt="">
                    <span class="product-title">Paraxetal 150ml liquid</span>
                </a>
                <div>
                    <span class="product-price">$17.42</span>
                </div>
            </li>
            <li>
                <a href="">
                    <img width="270" height="270" src="./front/img/products-sem2/product-13.jpg" alt="">
                    <span class="product-title">Tongue sore capsule</span>
                </a>
                <div>
                    <span class="product-price">$17.42</span>
                </div>
            </li>
            <li>
                <a href="">
                    <img width="270" height="270" src="./front/img/products-sem2/product-12.jpg" alt="">
                    <span class="product-title">Tongue aspirin</span>
                </a>
                <div>
                    <span class="product-price">$17.42</span>
                </div>
            </li>
        </ul>
    </div>
</form>
