
				<!-- BEGIN .col-sidebar -->
				<li class="col-sidebar">
				
					<div class="widget">
						<div class="widget-title clearfix"><h4 class="tag-title">Categories</h4></div>
						<ul>
                            <?php foreach(get_all_categories() as $obj){ ?>
							<li><a href="#"><?php echo $obj->cate_name ?></a></li>
                            <?php } ?>
						</ul>
					</div>
					
					<div class="widget">
						<div class="widget-title clearfix"><h4 class="tag-title">Tags</h4></div>
						<ul class="wp-tag-cloud clearfix">
							<li><a href="#">Tag #1</a></li>
							<li><a href="#">Tag #2</a></li>
							<li><a href="#">Tag #3</a></li>
							<li><a href="#">Tag #4</a></li>
							<li><a href="#">Tag #5</a></li>
							<li><a href="#">Tag #6</a></li>
						</ul>
					</div>
					
					<div class="widget">
						<div class="widget-title clearfix"><h4 class="tag-title">Recent Posts</h4></div>
						
						<ul class="latest-posts-list clearfix">
							
							<li class="clearfix">
								<div class="lpl-img">
									<a href="blog-single.html" rel="bookmark">
										<img width="66" height="66" src="templates/asset/images/blog-thumb1.jpg" alt="" />
									</a>
								</div>
								<div class="lpl-content">
									<h6><a href="blog-single.html" rel="bookmark">Dasellus ac nibh urna donec 
									ac urna</a> <span> Posted Jun 13, 2012 By admin</span></h6>
								</div>
							</li>
							
							<li class="clearfix">
								<div class="lpl-img">
									<a href="blog-single.html" rel="bookmark">
										<img width="66" height="66" src="templates/asset/images/blog-thumb2.jpg" alt="" />
									</a>
								</div>
								<div class="lpl-content">
									<h6><a href="blog-single.html" rel="bookmark">Dasellus ac nibh urna donec 
									ac urna</a> <span> Posted Jun 13, 2012 By admin</span></h6>
								</div>
							</li>
							
							<li class="clearfix">
								<div class="lpl-img">
									<a href="blog-single.html" rel="bookmark">
										<img width="66" height="66" src="templates/asset/images/blog-thumb3.jpg" alt="" />
									</a>
								</div>
								<div class="lpl-content">
									<h6><a href="blog-single.html" rel="bookmark">Dasellus ac nibh urna donec 
									ac urna</a> <span> Posted Jun 13, 2012 By admin</span></h6>
								</div>
							</li>
							
						</ul>
					
					</div>
					
				<!-- END .col-sidebar -->
				</li>