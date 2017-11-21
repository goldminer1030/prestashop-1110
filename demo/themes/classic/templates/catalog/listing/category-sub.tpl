{**
 * @author    goldminer1030
 *}
{block name='sub_category_list'}
  {if $listing.products|count}
    <div class="container sub-category-container">
      <div class="sub-category-inner-wrapper">
        <p class="sub-category-desc">{$category.description|escape:'html':'UTF-8'}</p>
        <div class="row sub-category-row">
          <div class="sub-category-left-sidebar">
            <div class="sub-category-left-back">
              {if $category.image.large.url}
                <div class="sub-category-left-image">
                  <img src="{$category.image.large.url}" alt="{$category.image.legend}">
                </div>
              {/if}
              <div class="sub-category-left-text-block">
                <p class="sub-category-left-title">{$category.name}</p>
                <p class="sub-category-left-desc">c est ici</p>
              </div>             
            </div>
          </div>
          <div class="sub-category-products">
            <div class="row">
              <div id="js-product-list">
                <div class="products row">
                  {foreach from=$listing.products item="product"}
                    {block name='product_miniature'}
                      {include file='catalog/listing/category-product.tpl' product=$product}
                    {/block}
                  {/foreach}
                </div>

                {*{block name='pagination'}*}
                  {*{include file='_partials/pagination.tpl' pagination=$listing.pagination}*}
                {*{/block}*}

                <div class="hidden-md-up text-xs-right up">
                  <a href="#header" class="btn btn-secondary">
                    {l s='Back to top' d='Shop.Theme.Actions'}
                    <i class="material-icons">&#xE316;</i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  {else}

    {include file='errors/not-found.tpl'}

  {/if}

{/block}