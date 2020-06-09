{assign var="pages" value=($pager_total_items/$pager_items_per_page)|roundup}
{assign var="current_page" value=($pager_offset+$pager_items_per_page)/$pager_items_per_page}
{assign var="upper_halfway_point" value=((($pages-$current_page)/2)|roundup)+$current_page}
 
{if $pages > 1}
{strip} 
<div id="pager">
	{if $current_page > 1}
        <span class="pager__text--previous">
            <a class="pagination__previous" title="Previous page" 
               href="{$site->site_link}{$pager_query_base}{$pager_offset-$pager_items_per_page}{$pager_query_suffix}">
                <i class="fas fa-angle-left"></i>
            </a>
        </span>
        <span class="pager__number">
            <a title="Go to page 1" href="{$site->site_link}{$pager_query_base}0{$pager_query_suffix}">1</a>
        </span>
	{/if}

	{if $current_page > 3}
		<span class="pager__dots">...</span>
	{/if}

	{if $current_page > 2}
		<span class="pager__number">
            <a title="Go to page {$current_page-1}" id="offsetprev" alt="{$pager_offset-$pager_items_per_page}" 
               href="{$site->site_link}{$pager_query_base}{$pager_offset-$pager_items_per_page}{$pager_query_suffix}">
                {$current_page-1}
            </a>
        </span>
	{/if}	

	<span class="pager__current" title="Current page {$current_page}">{$current_page}</span>

	{if ($current_page + 1) < $pages}
		<span class="pager__number">
            <a title="Go to page {$current_page+1}" id="offsetnext" alt="{$pager_offset+$pager_items_per_page}" 
               href="{$site->site_link}{$pager_query_base}{$pager_offset+$pager_items_per_page}{$pager_query_suffix}">
                {$current_page+1}
            </a>
        </span>
	{/if}	

	{if ($current_page + 1) < ($pages - 1) && ($current_page + 2) < $upper_halfway_point}
		<span class="pager__dots">...</span>
	{/if}	

	{if $upper_halfway_point != $pages && $upper_halfway_point != ($current_page + 1)}
		<span class="pager__number">
            <a title="Go to page {$upper_halfway_point}" 
               href="{$site->site_link}{$pager_query_base}{$upper_halfway_point*$pager_items_per_page}{$pager_query_suffix}">
                {$upper_halfway_point}
            </a>
        </span>
	{/if}	

	{if ($upper_halfway_point + 1) < $pages}
		<span class="pager__dots">...</span>
	{/if}	

	{if $pages > $current_page}
		<span class="pager__number">
            <a title="Go to page {$pages}" 
               href="{$site->site_link}{$pager_query_base}{($pages*$pager_items_per_page)-$pager_items_per_page}{$pager_query_suffix}">
                {$pages}
            </a>
        </span>
        <span class="pager__text--next">
			<a class="pagination__next" title="Next page" 
               href="{$site->site_link}{$pager_query_base}{$pager_offset+$pager_items_per_page}{$pager_query_suffix}">
				<i class="fas fa-angle-right"></i>
			</a>
		</span>
	{/if}			
</div>
{/strip}
{/if}