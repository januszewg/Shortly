<?php
	class Hash{
		public static function getHash($algorit,$data,$key){
			$hash = hash_init($algorit,HASH_HMAC,$key);
			hash_update($hash,$data);

			return hash_final($hash);
		}
	}
?>