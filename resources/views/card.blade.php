<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">

        </div>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg" alt="iPhone X 64GB">
        <div class="caption">
            <h3>iPhone X 64GB</h3>
            <p>71990 ₽</p>
            <p>
            <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
                <a href="{{route('basket')}}" class="btn btn-primary" role="button">В корзину</a>
                @isset($category)
                {{$category->name}}
                @endisset
                <a href="http://internet-shop.tmweb.ru/mobiles/iphone_x_64" class="btn btn-default"
                   role="button">Подробнее</a>
                <input type="hidden" name="_token" value="NLRTJb9gkdVdG3ZNi34lzLmIg1wE1EFlktudPJOc"></form>
            </p>
        </div>
    </div>
</div>
