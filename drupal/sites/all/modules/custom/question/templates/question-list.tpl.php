<?php 
//print_r($result);
foreach ($result as $row) {
$alias = drupal_get_path_alias('node/'.$row->nid);
if(isset($row->node_comment_statistics_comment_count)) {
	$comment_count = $row->node_comment_statistics_comment_count;
} else {
	$comment_count = "0";
}

if(isset($row->node_counter_totalcount)) {
	$view_count = $row->node_counter_totalcount;
} else {
	$view_count = "0";
}


if(isset($row->votingapi_cache_node_sum_value)) {
	$vote_count = $row->votingapi_cache_node_sum_value;
} else {
	$vote_count = "0";
}

?>

<div id="question-list">
   <div id="question-summary" class="question-summary narrow">
	<div class="cp" onclick="window.location.href='<?php print $alias; ?>'">
		<div class="votes" style="width: 10%; float: left; display: block;">
			<div class="mini-counts"><span title="<?php print $vote_count; ?> votes"><?php print $vote_count; ?></span></div>
			<div>votes</div>
		</div>
		<div class="answered"  style="width: 10%; float: left; display: block;">
			<div class="mini-counts"><span title="<?php print $comment_count;?> answers"><?php print $comment_count;?></span></div>
			<div>answers</div>
		</div>
		<div class="views" style="width: 10%; float: left; display: block;">
			<div class="mini-counts"><span title="<?php print $view_count;?> views"><?php print $view_count;?></span></div>
			<div>views</div>
		</div>
	</div>
		<div class="summary">
			<h3><a title="" class="question-hyperlink" href="<?php print $alias; ?>"><?php print $row->node_title; ?></a></h3>
		</div>
	</div>
</div>
<?php } ?>