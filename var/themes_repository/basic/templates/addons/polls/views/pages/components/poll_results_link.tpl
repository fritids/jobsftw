{include file="buttons/button.tpl" but_text=__("view_results") but_href="pages.view?page_id=`$poll.page_id`&action=results" but_role="text" but_target_id="polls_block_`$poll.page_id`" but_meta="cm-dialog-opener cm-dialog-auto-size"}
<div  id="polls_block_{$poll.page_id}" class="hidden poll-popup" title="{$poll.page|escape:quotes}"></div>
