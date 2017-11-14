{*
*
*  @author goldminer1030
*}
<div class="row">
  <div class="col-sm-12 col-md-6 gm-category">
    {if isset($gm_categories_img)}
      <img class="img-responsive" src="{$gm_categories_img}" alt="{$gm_categories_desc}" title="{$gm_categories_desc}">
      <div class="gm-category-content">
        <h6>Category 1</h6>
        <p>{$gm_categories_desc}</p>
        <a class="gm-category-link" href="{$gm_categories_link}">Shop</a>
      </div>
    {else}
      <span>{$gm_categories_desc}</span>
    {/if}
  </div>
  <div class="col-sm-12 col-md-6 gm-category">
    {if isset($gm_categories_img)}
      <img class="img-responsive" src="{$gm_categories_img}" alt="{$gm_categories_desc}" title="{$gm_categories_desc}">
      <div class="gm-category-content">
        <h6>Category 2</h6>
        <p>{$gm_categories_desc}</p>
        <a class="gm-category-link" href="{$gm_categories_link}">Shop</a>
      </div>
    {else}
      <span>{$gm_categories_desc}</span>
    {/if}
  </div>
</div>
