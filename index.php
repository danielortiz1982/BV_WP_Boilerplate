<?php get_header(); ?>

<main class="site-content" ng-controller="wpCtrl">
	<!-- <input ng-model="bvPostSearch" placeholder="Search Post...">
	<div ng-repeat="bvPost in bvPosts">
		<div id="post-id-{{bvPost.postID}}">
			<h1>{{bvPost.title}}</h1>
			<h4>{{bvPost.author}}</h4>
			<div class="post-thumbnail"><img ng-src="{{bvPost.thumbnail}}" /></div>
			<p>{{bvPost.theContent}}</p>
		</div>

	</div> -->

	<div ng-view></div>
</main>

<?php get_footer(); ?>