{**
 * @author    goldminer1030
 *}
{block name='sub_category_list'}
  {if $listing.products|count}
    <div class="container">
      <div class="sub-category-container">
        <p class="sub-category-desc">{$category.description|escape:'html':'UTF-8'}</p>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-9">
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