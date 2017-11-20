{**
 * @author    goldminer1030
 *}
{block name='product_miniature_item'}
  <div class="col-lg-6 gm-product">
    <div class="gm-product-thumbnail">
      <a href="{$product.url}" class="thumbnail product-thumbnail">
        <img
          src = "{$product.cover.large.url}"
          alt = "{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
          data-full-size-image-url = "{$product.cover.large.url}"
          >
      </a>
    </div>
    <div class="gm-product-description">
      <h1 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h1>

      {block name='product_price_and_shipping'}
        {if $product.show_price}
          <div class="product-price-and-shipping">
            {*{if $product.has_discount}*}
              {*{hook h='displayProductPriceBlock' product=$product type="old_price"}*}

              {*<span class="sr-only">{l s='Regular price' d='Shop.Theme.Catalog'}</span>*}
              {*<span class="regular-price">{$product.regular_price}</span>*}
              {*{if $product.discount_type === 'percentage'}*}
                {*<span class="discount-percentage">{$product.discount_percentage}</span>*}
              {*{/if}*}
            {*{/if}*}

            {hook h='displayProductPriceBlock' product=$product type="before_price"}

            <span class="sr-only">{l s='Price' d='Shop.Theme.Catalog'}</span>
            <span itemprop="price" class="price">{$product.price}</span>

            {hook h='displayProductPriceBlock' product=$product type='unit_price'}

            {hook h='displayProductPriceBlock' product=$product type='weight'}
          </div>
        {/if}
      {/block}
    </div>
  </div>
{/block}
