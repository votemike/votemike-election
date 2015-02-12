@extends('votemike')

@section('header')
	<header class="jumbotron">
		<h1>Michael Gwynne</h1>
		<span>PHP Developer based in London</span>
	</header>
@endsection

@section('content')
	<section class="panel panel-default"> 
		<div class="panel-heading">
			<h3 class="panel-title">Skills</h3>
		</div>
		<div class="panel-body">
			<ul>
				<li>PHP / Laravel / Moodle</li>
				<li>MySQL / PostgreSQL</li>
				<li>Javascript / JQuery / AngularJS</li>
				<li>CSS / Less / SASS / SCSS</li>
				<li>RESTful APIs</li>
				<li>GIT</li>
				<li>SCRUM</li>
			</ul>
			<p>Some experience in:</p>
			<ul>
				<li>Gulp / Grunt</li>
				<li>Vagrant</li>
			</ul>
		</div>
	</section>
	<main>
		<div class="panel panel-default"> 
			<div class="panel-heading">
				<h3 class="panel-title">Personal Summary</h3>
			</div>
			<div class="panel-body">
				<p>PHP developer since 2010. I was taken under the wing of a web agency owned by two very proud brothers and they trained me up in the ways of PHP. Starting of using WAMP, my second job was LAMP and current job is MAMP. I am a fast learner and grasp concepts quickly. At the moment I enjoy discovering way to use newer technologies such as Laravel, Angular, Grunt and Gulp.</p>
			</div>
		</div>
		<div class="panel panel-default"> 
			<div class="panel-heading">
				<h3 class="panel-title">Experience</h3>
			</div>
			<div class="panel-body">  
				<div>
					<h4>Kaplan International Colleges 05/2013 - Present</h4>
					<p>At Kaplan I support several Moodle installations without touching core code wherever possible. I have created several RESTful APIs in Laravel to be consumed by AngularJS front ends that we have written.</p>
				</div>
				<div>
					<h4>Kineo 02/2012 - 05/2014</h4>
					<p>At Kineo I updated Moodle code or created add ons to satisfy the requirements of customers. During my time there I was involved in around 30 Moodle projects of various sizes.</p>
				</div>
				<div>
					<h4>Switchplane 04/2010 - 02/2012</h4>
					<p>Switchplane is where I first learnt web development. I worked on everything from simple static sites up to large ecommerce sites and web apps.</p>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">My favourite project</h3>
			</div>
			<div class="panel-body">
				<p>My favourite project that I have been involved in was solving the postman problem. A company we did a web app for needed to do pickups from 1000+ locations each month. It took one of the staff 2 week to plan out the route. We wrote a script to check Google Maps for the shortest route. This turned out to be too many requests, so we had to preprocess the data before sending it to Google. I enjoyed this for the learning curve, integrating with external APIs and the end result.</p>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Select Portfolio</h3>
			</div>
			<div class="panel-body">
				<ul>
					<li><a href="http://www.switchplane.com/awesome/">Twitter Tools</a></li>
					<li><a href="http://www.extrascents.com/">Extrascents</a></li>
					<li><a href="http://www.british-airport-transfers.co.uk/">British Airport Transfers</a></li>
					<li><a href="http://www.mnogallery.com/">MNO Gallery</a></li>
				</ul>
			</div>
		</div>
	</main>
	<section id="links">
		<ul>
			<li><a href="http://uk.linkedin.com/pub/michael-gwynne/b/b5a/299/">My LinkedIn</a></li>
			<li><a href="http://github.com/votemike">My Github</a></li>
			<li><a href="http://stackoverflow.com/users/4009201/votemike">My Stack Overflow</a></li>
		</ul>
	</section>
@endsection
