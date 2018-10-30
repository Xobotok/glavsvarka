<div class="item">
    <div class="team_item">
        <div class="team_image">
            <img src = "/img/interface_elements/discount_mask.png" class="discount_mask">
            <img src="/img/products/<?= $offer['id']?>/<?= $offer['image']?>.jpg" alt="">
            <p class="special_offer_text">Скидка <?= $offer['discount']?>%</p>
            <ul>
                <li class = 'old_price'><s><?= floor($offer['price'])?> руб</s></li>
                <li class = 'new_price'><?= floor($offer['price'] - $offer['price']/100 * $offer['discount'])?> руб</li>
            </ul>
        </div>
        <div class="member_name">
            <div class="special_offer_name"><p class="special_offer_name_text"><?= $offer['name']?></p></div>
            <a href="/product/<?=$offer['id']?>"><h4>узнать подробнее</h4></a>
            <div class="add_to_cart_box"><button class ='add_to_cart get_btn'>Добавить в корзину</button></div>
        </div>
    </div>
</div>