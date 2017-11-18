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
          {if $subcategory.image.large.url}
            <a href="{$subcategory.url}"><img class="main-category-image" src="{$subcategory.image.large.url}" alt="{$subcategory.image.legend}"></a>
          {/if}
          {if $subcategory.name}
            <a class="main-category-name" href="{$subcategory.url}">{$subcategory.name nofilter}</a>
          {/if}
        </div>

        {* row end *}
        {if $subcategory@iteration % 2 == 0 || ($subcategories|count % 2 != 0 && $subcategory@iteration == $subcategories|count)}
          </div>
        {/if}
      {/foreach}
    </div>
  </div>
{/block}
