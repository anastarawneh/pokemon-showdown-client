<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

include 'theme/panels.lib.php';
// require_once '../../pokemonshowdown.com/lib/ntbb-database.lib.php';
require_once __DIR__ . '/../config/servers.inc.php';

$panels->setPageTitle('Replays');
$panels->setPageDescription('Watch replays of battles on Pokémon Showdown!');
$panels->setTab('replay');
$panels->start();
?>
	<div class="pfx-panel"><div class="pfx-body pfx-body-padded">
		<h1>Upload replays</h1>
		<p>
			To upload a replay, click "Share" or use the command <code>/savereplay</code> in a Pok&eacute;mon Showdown battle!
		</p>
		<h1>Search replays</h1>
		<!--p>Username search temporarily down, will be back up soon</p-->
		<form action="/search/" method="get" data-target="replace">
			<p style="text-align:center">
				<label><input type="text" name="user" class="textbox" placeholder="Username" size="24" /></label>
				<button type="submit"><strong>Search for user</strong></button>
			</p>
		</form>
		<form action="/search/" method="get" data-target="replace">
			<p style="text-align:center">
				<label><input type="text" name="format" class="textbox" placeholder="Format" size="24" /></label>
				<button type="submit"><strong>Search by format</strong></button>
			</p>
		</form>
		<h1>Featured replays</h1>
		<ul class="linklist" style="max-width:480px;margin:0 auto;text-align:center">
			<h3>The Race to Elesa</h3>
			<li><a href="https://replay.pokemonshowdown.com/gen5ubers-1908296336" target="_blank">
				<small>[gen5ubers]<br /></small>
				<strong>Generic_Personname</strong> vs. <strong>jumbolax</strong>
				<small><br />Semifinals</small>
			</a></li>
			<li><a href="https://replay.pokemonshowdown.com/gen5ubers-1908483707" target="_blank">
				<small>[gen5ubers]<br /></small>
				<strong>skinsmith</strong> vs. <strong>Quxelopqr</strong>
				<small><br />Semifinals</small>
			</a></li>
			<li><button class="button" onclick="$('.older2').show();$(this).parent().hide()">Older</button></li>
			<br class="older2" style="display:none">
			<li class="older2" style="display:none"><a href="https://replay.pokemonshowdown.com/gen5ubers-1907880173" target="_blank">
				<small>[gen5ubers]<br /></small>
				<strong>KemicalGUNNA</strong> vs. <strong>jumbolax</strong>
				<small><br />Round 2</small>
			</a></li>
			<li class="older2" style="display:none"><a href="https://replay.pokemonshowdown.com/gen5ubers-1906925353" target="_blank">
				<small>[gen5ubers]<br /></small>
				<strong>Generic_Personname</strong> vs. <strong>anastarawneh</strong>
				<small><br />Round 2</small>
			</a></li>
			<li class="older2" style="display:none"><a href="https://replay.pokemonshowdown.com/gen5ubers-1908303427" target="_blank">
				<small>[gen5ubers]<br /></small>
				<strong>bugpilled</strong> vs. <strong>Quxelopqr</strong>
				<small><br />Round 2</small>
			</a></li>
			<li class="older2" style="display:none"><a href="https://replay.pokemonshowdown.com/gen5ubers-1907681497" target="_blank">
				<small>[gen5ubers]<br /></small>
				<strong>RestEasyFellow</strong> vs. <strong>skinsmith</strong>
				<small><br />Round 2</small>
			</a></li>
			<br class="older2" style="display:none">
			<li class="older2" style="display:none"><a href="https://replay.pokemonshowdown.com/gen5ubers-1907714351" target="_blank">
				<small>[gen5ubers]<br /></small>
				<strong>clovebloom</strong> vs. <strong>jumbolax</strong>
				<small><br />Round 1</small>
			</a></li>
			<li class="older2" style="display:none"><a href="https://replay.pokemonshowdown.com/gen5ubers-1906303411" target="_blank">
				<small>[gen5ubers]<br /></small>
				<strong>anastarawneh</strong> vs. <strong>HopRockets</strong>
				<small><br />Round 1</small>
			</a></li>
			<li class="older2" style="display:none"><a href="https://replay.pokemonshowdown.com/gen5ubers-1904997173" target="_blank">
				<small>[gen5ubers]<br /></small>
				<strong>GenlockeGene</strong> vs. <strong>Generic_Personname</strong>
				<small><br />Round 1</small>
			</a></li>
			<li class="older2" style="display:none"><a href="https://replay.pokemonshowdown.com/gen5ubers-1907346934" target="_blank">
				<small>[gen5ubers]<br /></small>
				<strong>bugpilled</strong> vs. <strong>Garrapto</strong>
				<small><br />Round 1</small>
			</a></li>
			<li class="older2" style="display:none"><a href="https://replay.pokemonshowdown.com/gen5ubers-1906616355" target="_blank">
				<small>[gen5ubers]<br /></small>
				<strong>skinsmith</strong> vs. <strong>MrFigs</strong>
				<small><br />Round 1</small>
			</a></li>
			<li class="older2" style="display:none"><a href="https://replay.pokemonshowdown.com/gen5ubers-1907620718" target="_blank">
				<small>[gen5ubers]<br /></small>
				<strong>ThePsyBenji</strong> vs. <strong>RestEasyFellow</strong>
				<small><br />Round 1</small>
			</a></li>

			<h3>The Race to Wattson</h3>
			<li><a href="https://replay.pokemonshowdown.com/gen3ubers-1900784521" target="_blank">
				<small>[gen3ubers]<br /></small>
				<strong>anastarawneh</strong> vs. <strong>Generic_Personname</strong>
				<small><br />Finals</small>
			</a></li>
			<br>
			<li><a href="https://replay.pokemonshowdown.com/gen3ubers-1900050068" target="_blank">
				<small>[gen3ubers]<br /></small>
				<strong>Generic_Personname</strong> vs. <strong>HopRockets</strong>
				<small><br />Semifinals</small>
			</a></li>
			<li><a href="https://replay.pokemonshowdown.com/gen3ubers-1900777050" target="_blank">
				<small>[gen3ubers]<br /></small>
				<strong>anastarawneh</strong> vs. <strong>KemicalGUNNA</strong>
				<small><br />Semifinals</small>
			</a></li>
			<li><button class="button" onclick="$('.older1').show();$(this).parent().hide()">Older</button></li>
			<br class="older1" style="display:none">
			<li class="older1" style="display:none"><a href="https://replay.pokemonshowdown.com/gen3ubers-1899448546" target="_blank">
				<small>[gen3ubers]<br /></small>
				<strong>ThePsyBenji</strong> vs. <strong>Generic_Personname</strong>
				<small><br />Round 2</small>
			</a></li>
			<li class="older1" style="display:none"><a href="https://replay.pokemonshowdown.com/gen3ubers-1899027237" target="_blank">
				<small>[gen3ubers]<br /></small>
				<strong>skinsmith</strong> vs. <strong>HopRockets</strong>
				<small><br />Round 2</small>
			</a></li>
			<li class="older1" style="display:none"><a href="https://replay.pokemonshowdown.com/gen3ubers-1899511020" target="_blank">
				<small>[gen3ubers]<br /></small>
				<strong>anastarawneh</strong> vs. <strong>GenlockeGene</strong>
				<small><br />Round 2</small>
			</a></li>
			<li class="older1" style="display:none"><a href="https://replay.pokemonshowdown.com/gen3customgame-1899579025" target="_blank">
				<small>[gen3customgame]<br /></small>
				<strong>jumbolax</strong> vs. <strong>KemicalGUNNA</strong>
				<small><br />Round 2</small>
			</a></li>
			<br class="older1" style="display:none">
			<li class="older1" style="display:none"><a href="https://replay.pokemonshowdown.com/gen3ubers-1899419394" target="_blank">
				<small>[gen3ubers]<br /></small>
				<strong>Generic_Personname</strong> vs. <strong>Blytheru</strong>
				<small><br />Round 1</small>
			</a></li>
			<li class="older1" style="display:none"><a href="https://replay.pokemonshowdown.com/gen3ubers-1898849071" target="_blank">
				<small>[gen3ubers]<br /></small>
				<strong>bugpilled</strong> vs. <strong>HopRockets</strong>
				<small><br />Round 1</small>
			</a></li>
			<li class="older1" style="display:none"><a href="https://replay.pokemonshowdown.com/gen3ubers-1899490893" target="_blank">
				<small>[gen3ubers]<br /></small>
				<strong>clovebloom</strong> vs. <strong>anastarawneh</strong>
				<small><br />Round 1</small>
			</a></li>
			<li class="older1" style="display:none"><a href="https://replay.pokemonshowdown.com/gen3ubers-1899046239" target="_blank">
				<small>[gen3ubers]<br /></small>
				<strong>jumbolax</strong> vs. <strong>MrFigs</strong>
				<small><br />Round 1</small>
			</a></li>
		</ul>
<?php

// $replays = [];
// echo "<p>";
// echo "Recent replays are currently unavailable due to database load. They'll be back very soon!";
// echo "</p>";

require_once 'replays.lib.php';

if (!$Replays->db) {
	echo "<p>";
	echo @$Replays->offlineReason ? $Replays->offlineReason : "Replays are currently offline due to technical difficulties. We'll be back up soon!";
	echo "</p>";
}

?>
	</div></div>

<?php

$panels->end();

?>
