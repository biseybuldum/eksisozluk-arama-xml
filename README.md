# eksisozluk-arama-xml


bu servis ekşi sözlük üzerinde arama yapar ve size sonucu xml çıktısı olarak verir. xml çıktısının yapısı aşağıdaki gibidir.

<eksi_arama_xml_v1_00 tarih="timestamp_olarak_tarih">
<entry baslik="başlık_buraya" url="/url-burada--4902369"/>
</eksi_arama_xml_v1_00>

url'in başında https://www.eksisozluk.com/ yazmaz. 

servis üzerinde iki şekilde arama yapabilirsiniz. ya http://siteadresiniz.com/home/arama adresine "kelime" name'i ile bir post gönderin ya da http://siteadresiniz.com/home/arama/$kelime url yapısını kullanın. test etmek için de direkt olarak http://sozluk.biseybuldum.com adresi üzerinden manuel sorgu gönderebilirsiniz.

eğer birden fazla kelimeden oluşan bir sorgu gönderecekseniz, kelimelerin arasında boşluk bırakmayın, bunun yerine + koyun. örnek: koca+kafalı+biseybuldum
