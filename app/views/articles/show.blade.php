@extends('layouts.master') 


@section('content')

<div id="article">
	<div id="article-header">
	  <h1>{{ $article->title }}</h1>

	  <div class="article-byline">
	    By {{ link_to("writer/$article->author_id", $article->author_id) }}, CRIMSON
	    STAFF WRITER<time class="article-date" datetime="2014-03-07" title=
	    "Updated March 7, 2014 at 3:54p.m."> 2 days ago</time>
	  </div>
	</div>

	<div id="article-body">
	  <div id="text">
	  	<p>{{ $article->content }}</p>

	    <div id="article-tags">
	      <h3>Tags</h3>

	      <div>
	        <a href="/tag/student-groups">Student&nbsp;Groups</a> <a href=
	        "/tag/student-life">Student&nbsp;Life</a> <a href=
	        "/tag/ethnic-or-cultural-groups">Ethnic&nbsp;or&nbsp;Cultural&nbsp;Groups</a>
	        <a href="/tag/latin-america">Latin&nbsp;America</a> <a href=
	        "/tag/college-news">College&nbsp;News</a>
	      </div>
	    </div>

	    <div id="subscribe-link">
	      <strong>Want to keep up with breaking news?</strong> <a href=
	      "javascript:Crimson.Interstitials.show('subscribe')">Get the latest,
	      straight to your inbox.</a><br>
	      <br>
	    </div>
	  </div>
	</div>
</div>
@stop
