{*
*
*  @author goldminer1030
*}
<div class="container">
  <div class="row">
    {foreach from=$categories.children item=node}
      {if $node.children}
        {foreach from=$node.children item=sub_node}
          <div class="col-sm-12 col-md-6 gm-category">
            {if isset($sub_node.image)}
              <img class="img-responsive" src="{$sub_node.image}" alt="{$sub_node.name}" title="{$sub_node.name}">
              <div class="gm-category-content">
                <p class="gm-category-title">{$sub_node.name|escape:'html':'UTF-8'}</p>
                <p class="gm-category-desc">{$sub_node.desc|strip_tags:true}</p>
                <a class="gm-category-link" href="{$sub_node.link}">Shop</a>
              </div>
            {else}
              <span>{$gm_categories_desc}</span>
            {/if}
          </div>
        {/foreach}
      {/if}
    {/foreach}
  </div>
</div>
