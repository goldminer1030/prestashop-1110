{**
 * @author    goldminer1030
 *}
{block name='main_category_list'}
  <div class="container">
    <div class="main-category-container">
      <p class="main-category-desc">{$category.description|escape:'html':'UTF-8'}</p>
      {foreach from=$subcategories item=subcategory}
        {* row start *}
        {if $subcategory@iteration % 2 != 0}
          <div class="row main-category-row">
        {/if}

        {* main category body *}
        <div class="col-md-6 main-category-{$subcategory@iteration % 4}">
          <div class="main-category-wrapper">
            {if $subcategory.image.large.url}
              <a href="{$subcategory.url}"><img class="main-category-image" src="{$subcategory.image.large.url}" alt="{$subcategory.image.legend}"></a>
            {/if}
            {if $subcategory.name}
              <a class="main-category-name" href="{$subcategory.url}">{$subcategory.name nofilter}</a>
            {/if}
          </div>
        </div>

        {* row end *}
        {if $subcategory@iteration % 2 == 0 || ($subcategories|count % 2 != 0 && $subcategory@iteration == $subcategories|count)}
          {* if category cover image exists, display it *}
          {if $category.image.large.url}
            <img class="category-cross-pin" src="{$category.image.large.url}" alt="{$category.image.legend}">
          {/if}

          </div>
        {/if}
      {/foreach}
      <div class="category-footer-gap"></div>
    </div>
  </div>
{/block}
