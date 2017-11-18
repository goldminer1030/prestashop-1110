{**
 * @author    goldminer1030
 *}
{block name='sub_category_list'}
  {if $listing.products|count}
    <div class="container">
      <div class="sub-category-container">
        <p class="sub-category-desc">{$category.description|escape:'html':'UTF-8'}</p>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-10">
            <div class="row">
              {block name='product_list'}
                {include file='catalog/_partials/products.tpl' listing=$listing}
              {/block}
            </div>
          </div>
        </div>
      </div>
    </div>

  {else}

    {include file='errors/not-found.tpl'}

  {/if}

{/block}