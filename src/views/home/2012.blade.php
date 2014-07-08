@extends('layouts.master')
@section('content')
<section id="home" class="cf">
	<h2>What is js13kGames?</h2>
	<div class="tweetBox">
		<h3>Follow us on</h3>
		<ul>
			<li class="twitter">
				<a class="tweetBox-link" href="https://twitter.com/js13kGames">js13kGames on Twitter</a>
				<span><a href="http://twitter.com/js13kGames" class="twitter-follow-button" data-button="blue" data-text-color="#FFFFFF" data-link-color="#FFFFFF" data-show-screen-name="false" data-show-count="true">Follow @js13kGames</a></span>
			</li>
			<li class="facebook">
				<a class="tweetBox-link" href="https://www.facebook.com/js13kGames">js13kGames on Facebook</a>
				<span><iframe src="http://www.facebook.com/plugins/like.php?href=https%3A%2F%2Ffacebook.com%2Fjs13kGames&amp;send=false&amp;layout=button_count&amp;width=110&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=segoe+ui&amp;height=32" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:32px;" allowTransparency="true"></iframe></span>
			</li>
		</ul>
	</div>
	<img class="avatar" src="/assets/img/avatar.jpg" />
	<div class="intro">
		<p><strong>Js13kGames</strong> is a JavaScript coding competition for <strong>HTML5 game developers</strong>. The fun part of the compo is the file size limit set to <strong>13 kilobytes</strong>. Competition started at <strong>13:00 CEST, 13th August 2012</strong><br /> and ended at <strong>13:00 CEST, 13th September 2012</strong>.</p>
		<p>The main theme of the compo is <strong>number 13</strong>, but it's not mandatory, so your game could be about anything you want. See the <a href="#rules">Rules</a> section for detailed info about the official rules of the competition.</p>
		<p>Good luck to you all and <strong>have fun</strong>!</p>
	</div>
</section>

<section id="winners">
	<h2>Winners</h2>
	<article class="winner">
		<img src="/games/spacepi/__small.jpg" alt="SpacePi" />
		<h3><span>1st place</span> <a href="/entries/spacepi/">SpacePi</a> <span>by</span> Jack Rugile</h3>
	</article>
	<article class="winner">
		<img src="/games/the-sucker/__small.jpg" alt="The Sucker" />
		<h3><span>2nd place</span> <a href="/entries/the-sucker/">The Sucker</a> <span>by</span> Pordesign</h3>
	</article>
	<article class="winner">
		<img src="/games/mindless/__small.jpg" alt="Mindless" />
		<h3><span>3rd place</span> <a href="/entries/mindless/">Mindless</a> <span>by</span> Chandler Prall</h3>
	</article>
	<article class="winner">
		<img src="/games/simland/__small.jpg" alt="SimLand" />
		<h3><span>4th place</span> <a href="/entries/simland/">SimLand</a> <span>by</span> Aurium</h3>
	</article>
	<article class="winner">
		<img src="/games/13-tanks/__small.jpg" alt="13 Tanks" />
		<h3><span>5th place</span> <a href="/entries/13-tanks/">13 Tanks</a> <span>by</span> Armen138</h3>
	</article>
	<article class="winner">
		<img src="/games/johnny-smiter-13th-knight/__small.jpg" alt="Johnny Smiter: 13th Knight" />
		<h3><span>6th place</span> <a href="/entries/johnny-smiter-13th-knight/">Johnny Smiter: 13th Knight</a> <span>by</span> Paul Brunt</h3>
	</article>
	<article class="winner">
		<img src="/games/timber-terry/__small.jpg" alt="Timber Terry" />
		<h3><span>7th place</span> <a href="/entries/timber-terry/">Timber Terry</a> <span>by</span> Brian Cerceo</h3>
	</article>
	<article class="winner">
		<img src="/games/at-sea/__small.jpg" alt="At Sea" />
		<h3><span>8th place</span> <a href="/entries/at-sea/">At Sea</a> <span>by</span> Scott Heckel</h3>
	</article>
	<article class="winner">
		<img src="/games/hum/__small.jpg" alt="Hum" />
		<h3><span>9th place</span> <a href="/entries/hum/">Hum</a> <span>by</span> Nandastone</h3>
	</article>
	<article class="winner">
		<img src="/games/sorades-13k/__small.jpg" alt="Sorades 13k" />
		<h3><span>10th place</span> <a href="/entries/sorades-13k/">Sorades 13k</a> <span>by</span> Thiemo Mättig</h3>
	</article>
	<article class="winner special twitterSpecial">
		<img src="/games/johnny-smiter-13th-knight/__small.jpg" alt="Johnny Smiter: 13th Knight" />
		<h3><span>Twitter Special</span> <a href="/entries/johnny-smiter-13th-knight/">Johnny Smiter</a> <span>by</span> Paul Brunt - 37 <span>tweets</span></h3>
	</article>
	<article class="winner special facebookSpecial">
		<img src="/games/blobrising/__small.jpg" alt="Blobrising" />
		<h3><span>Facebook Special</span> <a href="/entries/blobrising/">Blobrising</a> <span>by</span> Blob Team - 76 <span>likes</span></h3>
	</article>
	<article class="winner special googleSpecial">
		<img src="/games/pocketrocket/__small.jpg" alt="PocketRocket" />
		<h3><span>Google+ Special</span> <a href="/entries/pocketrocket/">PocketRocket</a> <span>by</span> Z.Szalay &amp; P.Schmíz - 57 <span>1+'s</span></h3>
	</article>
</section>

<section id="judges">
	<h2>Judges</h2>
	<article class="judge">
		<img src="assets/img/judges/2012/michal_budzynski.png" alt="Michal Budzynski" />
		<div>
			<h3>Michal Budzynski</h3>
			<p>Firefox OS developer at <strong>Mozilla</strong>, organizer of the <a href="http://ongamestart.com/">onGameStart</a> and <a href="http://antarcticjs.com/">AntarcticJS</a> conferences, author of the <a href="http://bly.sk/">Blysk</a> animation tool and <a href="http://mibbu.eu/">Mibbu</a> game microframework, speaker, HTML5 game developer and instructor.</p>
			<p class="judgeContact"><a href="http://twitter.com/michalbe">@michalbe</a> | <a href="http://michalbe.blogspot.com/">michalbe.blogspot.com</a></p>
		</div>
	</article>
	<article class="judge right">
		<img src="assets/img/judges/2012/darius_kazemi.png" alt="Darius Kazemi" />
		<div>
			<h3>Darius Kazemi</h3>
			<p>HTML5 game developer and evangelist at <strong>Bocoup</strong>, <a href="http://fieldrunnershtml5.appspot.com/">Fieldrunners HTML5</a> developer, runner of the <a href="http://newgameconf.com/">New Game Conf</a>, writer of the Akihabara game engine <a href="http://tools.bostongamejams.com/akihabara/docs/">documentation</a>, videogame industry veteran and demoscene admirer.</p>
			<p class="judgeContact"><a href="http://twitter.com/tinysubversions">@tinysubversions</a> | <a href="http://tinysubversions.com/">tinysubversions.com</a></p>
		</div>
	</article>
	<article class="judge">
		<img src="assets/img/judges/2012/rob_hawkes.png" alt="Rob Hawkes" />
		<div>
			<h3>Rob Hawkes</h3>
			<p>Rawket Scientist and technical evangelist at <strong>Mozilla</strong>, author of <a href="http://rawkes.com/foundationcanvas/">Foundation HTML5 Canvas</a> and <a href="http://www.apress.com/9781430239789">HTML5 Games Most Wanted</a> books, speaker, creator of <a href="http://rawkets.com/">Rawkets</a> multiplayer space shooter.</p>
			<p class="judgeContact"><a href="http://twitter.com/robhawkes">@robhawkes</a> | <a href="http://rawkes.com/">rawkes.com</a></p>
		</div>
	</article>
	<article class="judge right">
		<img src="assets/img/judges/2012/andrzej_mazur.png" alt="Andrzej Mazur" />
		<div>
			<h3>Andrzej Mazur</h3>
			<p>Creator of the <strong>js13kGames</strong> compo, <a href="http://end3r.com/games/">HTML5 games</a> developer, <a href="http://dev.end3r.com/">blogger</a>, speaker, CEO of <a href='http://enclavegames.com/'>Enclave Games</a> and <a href='http://gamedevjs.com/'>GameDev.js Meetups</a> organizer.</p>
			<p class="judgeContact"><a href="http://twitter.com/end33r">@end33r</a> | <a href="http://dev.end3r.com/">dev.end3r.com</a></p>
		</div>
	</article>
	<a class="up" href="/"></a>
</section>

<section id="prizes">
	<h2>Prizes</h2>
	<article class="prize">
		<img src="assets/img/prizes/2012/impactjs.png" alt="Impact.js game engine" />
		<div>
			<h3>3 &times; Impact game engine</h3>
			<p>Three licenses for <a href="http://impactjs.com/">Impact.js</a>, HTML5 and JavaScript game engine created by <a href="http://www.phoboslab.org/">Dominic Szablewski</a>.</p>
		</div>
	</article>
	<article class="prize specialPrize">
		<img src="assets/img/prizes/2012/ongamestart.png" alt="onGameStart tickets" />
		<div>
			<h3>onGameStart tickets for half the price</h3>
			<p>Every game dev can get <a href="http://ongamestart.com/">onGameStart conference</a> tickets for 50% less when using 'js13kgames' promo code. <a href="http://www.amiando.com/onGameStart2012.html">Get them</a> while they last!</p>
		</div>
	</article>
	<article class="prize">
		<img src="assets/img/prizes/2012/bocoup.png" alt="Bocoup training" />
		<div>
			<h3>Bocoup training</h3>
			<p>One ticket for any of the Open Web technology <a href="http://training.bocoup.com/">trainings</a> led by Bocoup experts.</p>
		</div>
	</article>
	<article class="prize">
		<img src="assets/img/prizes/2012/isometric-games.png" alt="Isometric Games" />
		<div>
			<h3>2 &times; Making Isometric Social Real-Time Games with HTML5, CSS3 and JavaScript</h3>
			<p>Two <a href="http://shop.oreilly.com/product/0636920020011.do">books</a> by <a href="http://www.andrespagella.com/">Andres Pagella</a> published by <a href="http://oreilly.com/">O'Reilly Media</a>.</p>
		</div>
	</article>
	<article class="prize">
		<img src="assets/img/prizes/2012/foundation-canvas.png" alt="Foundation HTML5 Canvas" />
		<div>
			<h3>2 &times; Foundation HTML5 Canvas for Games and Entertainment</h3>
			<p>Three <a href="http://www.apress.com/9781430232919">books</a> by <a href="http://rawkes.com/">Rob Hawkes</a> published by <a href="http://www.apress.com/">Apress</a>.</p>
		</div>
	</article>
	<article class="prize">
		<img src="assets/img/prizes/2012/nodefirm.png" alt="The Node Firm training" />
		<div>
			<h3>Node.js training</h3>
			<p>One ticket to <a href="http://thenodefirm.com">The Node Firm</a> public node.js training of your choice. </p>
		</div>
	</article>
	<article class="prize">
		<img src="assets/img/prizes/2012/nodejitsu.png" alt="Nodejitsu account" />
		<div>
			<h3>1 &times; Nodejitsu Regular account for 6 months</h3>
			<p>Host your application at <a href="http://nodejitsu.com/">Nodejitsu</a> for free while you bootstrap your project.</p>
		</div>
	</article>
	<article class="prize">
		<img src="assets/img/prizes/2012/blossom.png" alt="Blossom.io" />
		<div>
			<h3>1 &times; Blossom.io organization account for 6 months</h3>
			<p>One license for <a href="http://www.blossom.io/">Blossom.io</a>, lean product management tool.</p>
		</div>
	</article>
	<article class="prize">
		<img src="assets/img/prizes/2012/webstorm.png" alt="WebStorm" />
		<div>
			<h3>3 &times; JetBrains WebStorm JavaScript IDE</h3>
			<p>Three licenses for <a href="http://www.jetbrains.com/webstorm/">WebStorm</a>, one of the best JavaScript IDEs by <a href="http://www.jetbrains.com/">JetBrains</a>.</p>
		</div>
	</article>
	<article class="prize">
		<img src="assets/img/prizes/2012/kendoui.png" alt="Kendo UI Complete" />
		<div>
			<h3>3 &times; Kendo UI Complete</h3>
			<p>Three licenses for <a href="http://www.kendoui.com/">Kendo UI Complete</a>, with 1 year of upgrades and commercial support.</p>
		</div>
	</article>
	<article class="prize">
		<img src="assets/img/prizes/2012/pusher.png" alt="Pusher" />
		<div>
			<h3>3 &times; Pusher plans</h3>
			<p>Three different <a href="http://pusher.com/">Pusher</a> plans: 6 months Startup for 1st place, 6 months Bootstrap for 2nd and 3 months Bootstrap for 3rd.</p>
		</div>
	</article>
	<article class="prize">
		<img src="assets/img/prizes/2012/construct2.png" alt="Construct 2" />
		<div>
			<h3>3 &times; Construct 2 HTML5 Game Engine</h3>
			<p>Three Personal Edition licenses for the <a href="http://www.scirra.com/html5-game-engine">Construct 2</a> game engine by <a href="http://www.scirra.com/">Scirra</a>.</p>
		</div>
	</article>
	<article class="prize">
		<img src="assets/img/prizes/2012/nihilogic-html5games.png" alt="HTML5 Games" />
		<div>
			<h3>3 &times; HTML5 Games: Creating Fun with HTML5, CSS3 and WebGL</h3>
			<p>Three <a href="http://www.wiley.com/buy/9781119975083">books</a> by <a href="http://nihilogic.dk/">Jacob Seidelin</a> published by <a href="http://wiley.com/">Wiley</a>.</p>
		</div>
	</article>
	<article class="prize">
		<img src="assets/img/prizes/2012/most-wanted.png" alt="HTML5 Games Most Wanted" />
		<div>
			<h3>3 &times; HTML5 Games Most Wanted: Build the Best HTML5 Games</h3>
			<p>Three <a href="http://www.apress.com/9781430239789">books</a> published by <a href="http://www.apress.com/">Apress</a>.</p>
		</div>
	</article>
	<article class="prize">
		<img src="assets/img/prizes/2012/introducing-gamedev.png" alt="Introducing HTML5 Game Development" />
		<div>
			<h3>5 &times; Introducing HTML5 Game Development: Developing Games with Impact</h3>
			<p>Five <a href="http://shop.oreilly.com/product/0636920022633.do">books</a> by <a href="http://jessefreeman.com/">Jesse Freeman</a>.</p>
		</div>
	</article>
	<article class="prize">
		<img src="assets/img/prizes/2012/marketjs.png" alt="MarketJS" />
		<div>
			<h3>Advertisement on MarketJS</h3>
			<p>One month advertising of the winner's game on the <a href="http://marketjs.com/">MarketJS</a> website.</p>
		</div>
	</article>
	<article class="prize">
		<img src="assets/img/prizes/2012/clayio.png" alt="Clay.io" />
		<div>
			<h3>Advertisement on Clay.io</h3>
			<p>One month advertising of the winner's game on the <a href="http://clay.io/">Clay.io</a> website.</p>
		</div>
	</article>
	<article class="prize">
		<img src="assets/img/prizes/2012/cloud9.png" alt="Cloud9 IDE" />
		<div>
			<h3>5 &times; Cloud9 IDE premium subscriptions</h3>
			<p>Five different <a href="https://c9.io/">Cloud9</a> subscriptions: 1 year for 1st place, 6 months for 2nd and 3rd, 3 months for 4th and 5th.</p>
		</div>
	</article>
	<article class="prize">
		<img src="assets/img/prizes/2012/html5games.png" alt="HTML5 Games" />
		<div>
			<h3>Advertisement on HTML5Games.com</h3>
			<p>Three weeks advertising of the winner's game on the <a href="http://html5games.com/">HTML5Games.com</a> website.</p>
		</div>
	</article>
	<article class="prize">
		<img src="assets/img/prizes/2012/learning-programming.png" alt="Learning HTML5 Game Programming" />
		<div>
			<h3>5 &times; Learning HTML5 Game Programming</h3>
			<p>Five <a href="http://www.amazon.com/Learning-HTML5-Game-Programming-Hands/dp/0321767365">books</a> by <a href="http://jameswilliams.be/">James L. Williams</a> published by <a href="http://www.informit.com/">Addison-Wesley Professional</a>.</p>
		</div>
	</article>
	<a class="up" href="/"></a>
</section>

<section id="places">
	<h2>Places</h2>
	<article class="place">
		<h3>1st place</h3>
		<ul>
			<li><strong>Advertisement</strong> of the game on MarketJS, Clay.io and HTML5Games.com</li>
			<li><strong>Trainings</strong>: Bocoup or Node.js training (of choice)</li>
			<li><strong>Software licenses</strong>:
				<ul>
					<li>Impact game engine</li>
					<li>Construct 2 game engine</li>
					<li>JetBrains WebStorm JavaScript IDE</li>
				</ul>
			</li>
			<li><strong>Books</strong>:
				<ul>
					<li>Making Isometric Social Real-Time Games with HTML5, CSS3 and JavaScript</li>
					<li>Foundation HTML5 Canvas for Games and Entertainment</li>
					<li>HTML5 Games: Creating Fun with HTML5, CSS3 and WebGL</li>
					<li>HTML5 Games Most Wanted: Build the Best HTML5 Games</li>
					<li>Introducing HTML5 Game Development: Developing Games with Impact</li>
					<li>Learning HTML5 Game Programming: A Hands-on Guide to Building Online Games Using Canvas, SVG, and WebGL</li>
				</ul>
			</li>
			<li><strong>Accounts licenses</strong>:
				<ul>
					<li>Nodejitsu Regular account for 6 months</li>
					<li>Blossom.io organization account for 6 months</li>
					<li>Kendo UI Complete for 1 year</li>
					<li>Pusher Startup plan for 6 months</li>
					<li>Cloud9 IDE premium subscription for 1 year</li>
				</ul>
			</li>
		</ul>
	</article>
	<article class="place">
		<h3>2nd place</h3>
		<ul>
			<li><strong>Trainings</strong>: Bocoup or Node.js training (the one left)</li>
			<li><strong>Software licenses</strong>:
				<ul>
					<li>Impact game engine</li>
					<li>Construct 2 game engine</li>
					<li>JetBrains WebStorm JavaScript IDE</li>
				</ul>
			</li>
			<li><strong>Books</strong>:
				<ul>
					<li>Making Isometric Social Real-Time Games with HTML5, CSS3 and JavaScript</li>
					<li>Foundation HTML5 Canvas for Games and Entertainment</li>
					<li>HTML5 Games: Creating Fun with HTML5, CSS3 and WebGL</li>
					<li>HTML5 Games Most Wanted: Build the Best HTML5 Games</li>
					<li>Introducing HTML5 Game Development: Developing Games with Impact</li>
					<li>Learning HTML5 Game Programming: A Hands-on Guide to Building Online Games Using Canvas, SVG, and WebGL</li>
				</ul>
			</li>
			<li><strong>Accounts licenses</strong>:
				<ul>
					<li>Kendo UI Complete for 1 year</li>
					<li>Pusher Bootstrap plan for 6 months</li>
					<li>Cloud9 IDE premium subscription for 6 months</li>
				</ul>
			</li>
		</ul>
	</article>
	<article class="place">
		<h3>3rd place</h3>
		<ul>
			<li><strong>Software licenses</strong>:
				<ul>
					<li>Impact game engine</li>
				</ul>
			</li>
			<li><strong>Books</strong>:
				<ul>
					<li>HTML5 Games: Creating Fun with HTML5, CSS3 and WebGL</li>
					<li>HTML5 Games Most Wanted: Build the Best HTML5 Games</li>
					<li>Introducing HTML5 Game Development: Developing Games with Impact</li>
					<li>Learning HTML5 Game Programming: A Hands-on Guide to Building Online Games Using Canvas, SVG, and WebGL</li>
				</ul>
			</li>
			<li><strong>Accounts licenses</strong>:
				<ul>
					<li>Pusher Bootstrap plan for 3 months</li>
					<li>Cloud9 IDE premium subscription for 6 months</li>
				</ul>
			</li>
		</ul>
	</article>
	<article class="place">
		<h3>4th place</h3>
		<ul>
			<li><strong>Books</strong>:
				<ul>
					<li>Introducing HTML5 Game Development: Developing Games with Impact</li>
					<li>Learning HTML5 Game Programming: A Hands-on Guide to Building Online Games Using Canvas, SVG, and WebGL</li>
				</ul>
			</li>
			<li><strong>Accounts licenses</strong>:
				<ul>
					<li>Cloud9 IDE premium subscription for 3 months</li>
				</ul>
			</li>
		</ul>
	</article>
	<article class="place">
		<h3>5th place</h3>
		<ul>
			<li><strong>Books</strong>:
				<ul>
					<li>Introducing HTML5 Game Development: Developing Games with Impact</li>
					<li>Learning HTML5 Game Programming: A Hands-on Guide to Building Online Games Using Canvas, SVG, and WebGL</li>
				</ul>
			</li>
			<li><strong>Accounts licenses</strong>:
				<ul>
					<li>Cloud9 IDE premium subscription for 3 months</li>
				</ul>
			</li>
		</ul>
	</article>
	<article class="place">
		<h3>Twitter Special <span>(for the highest number of tweets)</span></h3>
		<ul>
			<li>Construct 2 game engine</li>
		</ul>
	</article>
	<article class="place">
		<h3>Facebook Special <span>(for the highest number of likes)</span></h3>
		<ul>
			<li>Kendo UI Complete for 1 year</li>
		</ul>
	</article>
	<article class="place">
		<h3>Google+ Special <span>(for the highest number of +1's)</span></h3>
		<ul>
			<li>JetBrains WebStorm JavaScript IDE</li>
		</ul>
	</article>
	<a class="up" href="/"></a>
</section>

<section id="media">
	<h2>Media partners</h2>
	<a class="partner" href="http://ongamestart.com/"><img src="assets/img/partners/2012/ongamestart.png"></a>
	<a class="partner" href="http://marketjs.com/"><img src="assets/img/partners/2012/marketjs.png"></a>
	<a class="partner" href="http://vdlabs.com/"><img src="assets/img/partners/2012/vdlabs.png"></a>
	<a class="partner" href="http://bly.sk/"><img src="assets/img/partners/2012/blysk.png"></a></br />
	<a class="partner" href="http://clay.io/"><img src="assets/img/partners/2012/clayio.png"></a>
	<a class="partner" href="http://nodejitsu.com/"><img src="assets/img/partners/2012/nodejitsu.png"></a>
	<a class="partner" href="http://html5games.com/"><img src="assets/img/partners/2012/html5games.png"></a>
	<p>Share the love for HTML5 games with us, spread the word about the js13kGames competition! See the <a href="#contact">Contact</a> section for more details on how to get in touch.</p>
	<a class="up" href="/"></a>
</section>

<section id="rules">
	<h2>Rules</h2>
	<article class="rule">
		<h3>Package size below 13 kB</h3>
		<p>All your code and game assets should be smaller than or equal to 13 kilobytes (that's exactly 13,312 bytes, because of 13 x 1024) when zipped. Your package should contain index.html file and when unzipped should work in the browser.</p>
	</article>
	<article class="rule">
		<h3>Two sources - readable and compressed</h3>
		<p>The competition is focusing on the package size, but learning from others is also very important. Please provide two sources of your game - first one should be minified and zipped to fit in the 13 kB limit (sent via the form) and the second one should be in a readable form with descriptive variable names and comments (hosted on GitHub).</p>
	</article>
	<article class="rule">
		<h3>No external libraries or services</h3>
		<p>You can't use any libraries, images or data files hosted on server or services that provide any type of data. Your game should work offline and all the game assets should fit in the package size limit. If you manage to shrink your favorite library below 13 kilobytes including the code itself, then you can use whatever you want, just remember about the 13 kB limit.</p>
	</article>
	<article class="rule">
		<h3>Main theme - number 13</h3>
		<p>The main theme of the competition is the number 13, but it's not mandatory, so your game could be about anything you want and will still have the chance to win.</p>
	</article>
	<article class="rule">
		<h3>Use Prefix-Free... for free</h3>
		<p>A little something to all of you who would code your game for one browser only (to save on the size), which is bad. You can include <a href="http://leaverou.github.com/prefixfree/">Prefix-Free</a> in your game and it won't be counted in the file size limit.</p>
	</article>
	<article class="rule">
		<h3>Deadline - 13th September 2012</h3>
		<p>The competition starts at 13:00 CEST, 13th August 2012 and ends at 13:00 CEST, 13th September 2012. No submissions will be accepted after the end of the competition.</p>
	</article>
	<article class="rule">
		<h3>Licensing</h3>
		<p>You have to have the rights for every asset used in your game. Remember that the submitted games will be published and made available for everybody to see.</p>
	</article>
	<article class="rule">
		<h3>New content only</h3>
		<p>Do not submit any old games or demos - you have a whole month to work on something new and fresh, this should be more than enough.</p>
	</article>
	<article class="rule">
		<h3>Errors and browser support</h3>
		<p>Your game must work in at least one browser. The more supported browsers, the better - you can get more points for that. There should be no errors - you can lose some points if your game is showing any errors in the console. If we cannot play your game, it won't be accepted. You'll get extra points if your game supports any mobile devices.</p>
	</article>
	<article class="rule">
		<h3>Teams</h3>
		<p>It doesn't matter if you're working alone or with your friends, just remember that the number of prizes is fixed, so you'll have to share your trophies with your teammates.</p>
	</article>
	<article class="rule">
		<h3>Sending submissions</h3>
		<p>Use <a href="/#submit">this form</a> to submit your game. Please remember that you have to provide two sources (see the Rule #2 for details) - a link to a public repository on <a href="http://github.com/">Github</a> and a zipped package. If you have a Node.js game you can deploy it on <a href="http://nodejitsu.com/">Nodejitsu</a> - read the walkthrough in <a href="http://blog.nodejitsu.com/js13kgames">this blog post</a>.</p>
	</article>
	<article class="rule">
		<h3>Accepting submissions</h3>
		<p>Submissions will be checked manually and published after positive verification. This may take up to a couple of days, so be patient if your game is not yet online. I claim the right to reject any submission without giving a reason, although I hope I don't have to. I also have the right to update the rules of the competition at any time.</p>
	</article>
	<article class="rule" id="faq">
		<h3>Frequently Asked Questions</h3>
		<dl>
			<dt>Why exactly 13 kB?</dt>
			<dd>Well... why not? :)</dd>
			<dt>What's in it for you? Are you getting paid or sponsored?</dt>
			<dd>Nope, it's just my own idea and it's made for pure fun.</dd>
			<dt>What does the "zipped" term exactly mean?</dt>
			<dd>Sent package should be zipped with your usual system archiver, the only allowed extension is .zip. Let's keep it simple - it's a competition for coders and this should be your main focus, the code itself. Thanks to the zipped archive you will easily send your game and we will easily check the file size.</dd>
			<dt>Can I use Node.js?</dt>
			<dd>Yes, as long as your code size is lower than or equal to the 13 kB limit. No libraries like Socket.io or Express are allowed though.</dd>
			<dt>Can I use Flash?</dt>
			<dd>No, you can code your game using only the open web technologies like JavaScript, HTML and CSS.</dd>
			<dt>Can I use CoffeeScript?</dt>
			<dd>Yes, you can use it, but you can't submit it. Only pure JavaScript code will be accepted, so remember to have your compiled code within the 13 kB limit.</dd>
			<dt>Can I use compression through the self-extracting PNGs?</dt>
			<dd>No, this technique is strictly prohibited. Only pure JavaScript minifying is allowed.</dd>
			<dt>More questions?</dt>
			<dd>Send them in, check out the <a href="#contact">Contact</a> section or visit <a href="http://webchat.freenode.net/?channels=bbg">#bbg channel</a> on Freenode IRC.</dd>
		</dl>
	</article>
	<a class="up" href="/"></a>
</section>

<section id="contact">
	<h2>Contact</h2>
	<p>If You have any questions or propositions please feel free to contact us via e-mail: contact at js13kgames dot com. The other options include visiting our profiles on <a href="http://twitter.com/js13kgames">Twitter</a> or <a href="http://facebook.com/js13kgames">Facebook</a> and sending us the private message.</p>
	<a class="up" href="/"></a>
</section>
@stop