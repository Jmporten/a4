<?php

class HomeController extends Controller{
	
	public function index(){
	    $feed = "http://fox59.com/feed";
	    $rss = new RssDisplay($feed);

	    $channel_info = $rss->getChannelInfo();
	    $channel_title = $channel_info->title;
	    $this->set('rss_title', $channel_title);

	    $items = $rss->getFeedItems(8);

	    $x=0;
	    foreach($items as $item){
            $this->set($x, $item[$x]);
            $x++;
        }

	}
	
}

?>