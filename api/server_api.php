<?php
	$str = "<main>
				<geoip_login_server>127.0.0.1</geoip_login_server>
				<geoip_asset_server>http://127.0.0.1/assets</geoip_asset_server>
				<servers>
					<server>
						<server_name>EU Global</server_name>
						<login_server>127.0.0.1</login_server>
						<asset_server>https://github.com/eewil/xamppless/raw/main/assets/</asset_server>
						<game_domain>127.0.0.1</game_domain>
						<game_type>int</game_type>
						<world_id>1</world_id>
						<url_quit>http://127.0.0.1/andromeda/play.php</url_quit>
						<url_register>http://127.0.0.1/andromeda/index.php?show=registry</url_register>
						<url_forgotten>http://127.0.0.1/andromeda/index.php?show=forgotten</url_forgotten>
						<url_avatars>http://127.0.0.1/andromeda/avatars/int/world_1/{0}.jpg</url_avatars>
						<url_payment>http://127.0.0.1/andromeda/play.php?show=payments</url_payment>
						<have_account>1</have_account>
						<continent>europe</continent>
					</server>
				</servers>
			</main>";
	echo $str;
?>
