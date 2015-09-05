<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class M_arama Extends CI_Model
{
	
	
	function sonuc($deger)
	{			if(!empty($this -> input -> post('kelime'))) {
					$data = array('kelime' => $this -> input -> post('kelime'), 'tarih' => time(), 'ip' => $this->input->ip_address());
					$ara = str_replace(' ', '+', $this -> input -> post('kelime'));
				}
				else {
					$data = array('kelime' => $deger, 'tarih' => time(), 'ip' => $this->input->ip_address());
					$ara = $deger;
				}
				
				$this -> db -> insert('arama', $data);
				
				
				$XML = new SimpleXMLElement('<eksi_arama_xml_v1_00></eksi_arama_xml_v1_00>');
				$XML->addAttribute('tarih', time());
		
				foreach(range(1,20) as $sayfa) {
				$site=file_get_contents('https://eksisozluk.com/basliklar/ara?searchForm.Keywords='.$ara.'&searchForm.NiceOnly=false&searchForm.SortOrder=Date&p='.$sayfa);
				preg_match_all('@<ul class="topic-list">(.*?)</ul>@si',$site,$baslik);
				preg_match_all('@<li><a href="(.*?)">@si',$baslik[1][0],$url);
				preg_match_all('@">(.*?)<@si',$baslik[1][0],$baslik);
				
				
				foreach(range(0,49) as $icerik) {
				
					if(!empty($url[1][$icerik]) and !empty($baslik[1][$icerik])) { $rezaleta = $XML->addChild('entry'); }
					if(!empty($baslik[1][$icerik])) { $rezaleta->addAttribute('baslik', strip_tags($baslik[1][$icerik])); }
					if(!empty($url[1][$icerik])) { $rezaleta->addAttribute('url', $url[1][$icerik]); }

					
				
				}	
				}

		Header('Content-type: text/xml');
		return $XML->asXML();
		
	}
	
}
			