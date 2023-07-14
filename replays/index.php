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
		<h1>Recent replays</h1>
		<ul class="linklist" style="max-width:480px;margin:0 auto;text-align:center">
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
} else {

	$replays = $Replays->recent();

	$time = time();
	$timeoffset = 60;

	foreach ($replays as $replay) {
		$timetext = '';
		while ($timeoffset >= 0 && $replay['uploadtime'] < $time - $timeoffset) {
			switch ($timeoffset) {
			case 60:
				$timetext = '<h3>1 minute ago</h3>';
				$timeoffset = 120;
				break;
			case 120:
				$timetext = '<h3>2 minutes ago</h3>';
				$timeoffset = 180;
				break;
			case 180:
				$timetext = '<h3>3 minutes ago</h3>';
				$timeoffset = 240;
				break;
			case 240:
				$timetext = '<h3>4 minutes ago</h3>';
				$timeoffset = 300;
				break;
			case 300:
				$timetext = '<h3>5 minutes ago</h3>';
				$timeoffset = 600;
				break;
			case 600:
				$timetext = '<h3>10 minutes ago</h3>';
				$timeoffset = 1200;
				break;
			case 1200:
				$timetext = '<h3>20 minutes ago</h3>';
				$timeoffset = 1800;
				break;
			case 1800:
				$timetext = '<h3>30 minutes ago</h3>';
				$timeoffset = 3600;
				break;
			case 3600:
				$timetext = '<h3>1-2 hours ago</h3>';
				$timeoffset = 2*3600;
				break;
			case 2*3600:
				$timetext = '<h3>2-3 hours ago</h3>';
				$timeoffset = 3*3600;
				break;
			case 3*3600:
				$timetext = '<h3>3-4 hours ago</h3>';
				$timeoffset = 4*3600;
				break;
			case 4*3600:
				$timetext = '<h3>4-8 hours ago</h3>';
				$timeoffset = 8*3600;
				break;
			case 8*3600:
				$timetext = '<h3>8-12 hours ago</h3>';
				$timeoffset = 12*3600;
				break;
			case 12*3600:
				$timetext = '<h3>12-24 hours ago</h3>';
				$timeoffset = 24*3600;
				break;
			case 24*3600:
				$timetext = '<h3>1-2 days ago</h3>';
				$timeoffset = 2*24*3600;
				break;
			case 2*24*3600:
				$timetext = '<h3>2-3 days ago</h3>';
				$timeoffset = 3*24*3600;
				break;
			case 3*24*3600:
				$timetext = '<h3>3 days ago</h3>';
				$timeoffset = 5*24*3600;
				break;
			default:
				$timeoffset = -1;
				break;
			}
		}
		echo $timetext;
		$server = '';
		if (preg_match('/^([a-z0-9]+)-[a-z0-9]+-[0-9]+$/', $replay['id'], $matches)) {
			$serverid = $matches[1];
			if (!isset($PokemonServers[$serverid])) {
				// This should be impossible.
				$server = 'unknown server';
			} else {
				$server = strtolower($PokemonServers[$serverid]['name']);
			}
		}
?>
		<li><a href="/<?php echo htmlspecialchars($replay['id']); ?>" data-target="push"><small>[<?php echo htmlspecialchars($replay['format']); ?><?php if ($server) echo ' - ' . htmlspecialchars($server) ?>]<br /></small> <strong><?php echo htmlspecialchars($replay['p1']); ?></strong> vs. <strong><?php echo htmlspecialchars($replay['p2']); ?></strong></a></li>
<?php
	}
}

?>
		</ul>
	</div></div>

<?php

$panels->end();

?>
