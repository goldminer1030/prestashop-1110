<div id="gm-instagram" class="tab-content">
	<div class="container">
		<p class="gm-instagram-title">ACTUS INSTAGRAM</p>
		<div class="page-heading">
			{l s='Follow' mod='blockinstagram'} {$instagram_user.full_name} {l s='on' mod='blockinstagram'}
			<a href="https://www.instagram.com/{$instagram_id}/" target="_blank" rel="nofollow">Instagram</a>
		</div>
		{if isset($instagram_pics) && $instagram_pics|count > 0}
		<div class="row">
			{foreach $instagram_pics as $pic}
				<div class="col-sm-6 col-md-3">
					<a href="{$pic.link}" title="{$pic.caption|escape:'html':'UTF-8'}" target="_blank" rel="nofollow">
						<img src="{$pic.image}" class="img-responsive" />
					</a>
					<p class="text-center">
						{$pic.date}<br/>
						<strong>{$pic.likes}</strong> {l s='likes' mod='blockinstagram'} /
						<strong>{$pic.comments}</strong> {l s='comments' mod='blockinstagram'}
					</p>
				</div>
			{/foreach}
		</div>
		{/if}
	</div>
</div>