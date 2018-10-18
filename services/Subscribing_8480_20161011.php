<?php
date_default_timezone_set("Asia/Kuwait");
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("infocellvas",$con);
mysql_query("set character_set_server='utf8'"); 
mysql_query("set names 'utf8'");

$sender=$_GET['sender'];
$sms=$_GET['sms'];


//$sms="ሞር2";
//$sender="+251912655466";
$s=substr(trim($sms),0,3); //for delivery
$sms=TrimStr($sms);


//echo $sms.'<br>';
$dat = date("Y-m-d");
$enddat= $dat;
set_time_limit(80000);
 
function TrimStr($str){
    $str = str_replace(' ', '', $str);
	$str=str_replace("\r",'',$str);
	$str=str_replace("\n",'',$str);
	$str=str_replace("\t",'',$str);
	$str=str_replace("/",'',$str);
	$str=str_replace('"','',$str);
	$str=str_replace("'",'',$str);
	$str=str_replace("\\",'',$str);
	$str=str_replace(" ",'',$str);
	$str=str_replace(":",'',$str);
    $str=str_replace(".",'',$str);
    $str=str_replace(",",'',$str);
	$str=str_replace("8480",'',$str);
	$str=str_replace("8490",'',$str);
	
	$str=str_replace("አቁም",'stop',$str);
	$str=str_replace("ለሌሎችክለቦች",'more',$str);
	$str=str_replace("ለሌሎች",'more',$str);
	$str=str_replace("ክለቦች",'more',$str);
	$str=str_replace("ስቶፕ",'stop',$str);
	$str=str_replace("ሞር",'more',$str);
	
	$str=str_replace("ለአርባምንጭከነማ1",'1',$str);
	$str=str_replace("ለአርባምንጭ1",'1',$str);
	$str=str_replace("አርባምንጭ1",'1',$str);
	$str=str_replace("ለአርባምንጭ",'1',$str);
	$str=str_replace("አርባምንጭ",'1',$str);
    
	$str=str_replace("ለአርሰናል2",'2',$str);
   	$str=str_replace("ለአርሰናል",'2',$str);
	$str=str_replace("አርሰናል2",'2',$str);
	$str=str_replace("2አርሰናል",'2',$str);
	$str=str_replace("አርሰናል",'2',$str);
	
	
	$str=str_replace("ለወላይታዲቻ3",'3',$str);
	$str=str_replace("ለዲቻ3",'3',$str);
	$str=str_replace("ዲቻ3",'3',$str);
	$str=str_replace("ዲቻ",'3',$str);
	$str=str_replace("ለወላይታ",'3',$str);
	$str=str_replace("ወላይታ3",'3',$str);
	$str=str_replace("ወላይታ",'3',$str);
	
	$str=str_replace("ለፋሲልከነማ4",'4',$str);
	$str=str_replace("ለፋሲል4",'4',$str);
	$str=str_replace("ለፋሲል",'4',$str);
	$str=str_replace("ፋሲል4",'4',$str);
	$str=str_replace("ፋሲል",'4',$str);

	
	$str=str_replace("ለጅማአባቡና5",'5',$str);
	$str=str_replace("ለጅማአባቡና",'5',$str);
	$str=str_replace("ጅማአባቡና5",'5',$str);
	$str=str_replace("ጅማአባቡና",'5',$str);
	
	$str=str_replace("ለማንዩናይትድ6ብለውይላኩ",'6',$str);
	$str=str_replace("ለማንዩናይትድ6",'6',$str);
	$str=str_replace("ለማንዩናይትድ",'6',$str);
	$str=str_replace("ለዩናይትድ6",'6',$str);
	$str=str_replace("6ለዩናይትድ",'6',$str);
	$str=str_replace("ለዩናይትድ",'6',$str);
	$str=str_replace("ማንዩናይትድ6",'6',$str);
	$str=str_replace("6ማንዩናይትድ",'6',$str);
	$str=str_replace("ማንዩናይትድ",'6',$str);
	$str=str_replace("ዩናይትድ",'6',$str);
	
	$str=str_replace("ለአዳማከነማ7",'7',$str);
	$str=str_replace("ለአዳማ7",'7',$str);
	$str=str_replace("ለአዳማ",'7',$str);
	$str=str_replace("አዳማ7",'7',$str);
	$str=str_replace("አዳማ",'7',$str);
		
	$str=str_replace("ለባርሴሎና8",'8',$str);
	$str=str_replace("ባርሴሎና8",'8',$str);
	$str=str_replace("ለባርሴሎና",'8',$str);
	$str=str_replace("ባርሴሎና",'8',$str);
	$str=str_replace("ለባርሳ8",'8',$str);
	$str=str_replace("ለባርሳ",'8',$str);
	$str=str_replace("ባርሳ",'8',$str);

	
	$str=str_replace("ለድሬዳዋከነማ9",'9',$str);
	$str=str_replace("ለድሬዳዋ9",'9',$str);
	$str=str_replace("ለድሬዳዋ",'9',$str);
	$str=str_replace("ድሬዳዋ9",'9',$str);
	$str=str_replace("ድሬዳዋ",'9',$str);

	$str=str_replace("ለኢትዮጲያቡና10",'10',$str);
	$str=str_replace("ለኢትቡና10",'10',$str);
	$str=str_replace("ለቡና10",'10',$str);
	$str=str_replace("ለቡና",'10',$str);
	$str=str_replace("ቡና10",'10',$str);
	
	
	$str=str_replace("ለሀዋሳከነማ11",'11',$str);
	$str=str_replace("ለሀዋሳ11",'11',$str);
	$str=str_replace("ለሀዋሳ",'11',$str);
	$str=str_replace("ሀዋሳ11",'11',$str);
	$str=str_replace("ሀዋሳ",'11',$str);
	
	$str=str_replace("ለሪያልማድሪድ12",'12',$str);
	$str=str_replace("ሪያልማድሪድ12",'12',$str);
	$str=str_replace("ለማድሪድ12",'12',$str);
	$str=str_replace("ለማድሪድ",'12',$str);
	$str=str_replace("ማድሪድ12",'12',$str);
	$str=str_replace("ማድሪድ",'12',$str);
	
	$str=str_replace("ለሲዳማቡና13",'13',$str);
	$str=str_replace("ለሲዳማ13",'13',$str);
	$str=str_replace("ለሲዳማ",'13',$str);
	$str=str_replace("ሲዳማ13",'13',$str);
	$str=str_replace("ሲዳማ",'13',$str);

	$str=str_replace("ለቅጊዮርጊስ14",'14',$str);
	$str=str_replace("ለጊዮርጊስ14",'14',$str);
	$str=str_replace("ለቅጊዮርጊስ",'14',$str);
	$str=str_replace("ቅጊዮርጊስ14",'14',$str);
	$str=str_replace("ቅጊዮርጊስ",'14',$str);
	$str=str_replace("ለጊዮርጊስ",'14',$str);
	$str=str_replace("ጊዮርጊስ",'14',$str);
	
	$str=str_replace("ለወልድያከነማ15",'15',$str);
	$str=str_replace("ለወልድያ15",'15',$str);
	$str=str_replace("ለወልድያ",'15',$str);
	$str=str_replace("ወልድያ15",'15',$str);
	$str=str_replace("ወልድያ",'15',$str);
	
	$str=str_replace("ለቸልሲ16",'16',$str);
	$str=str_replace("ቸልሲ16",'16',$str);
	$str=str_replace("ለቸልሲ",'16',$str);
	$str=str_replace("ቸልሲ",'16',$str);
	$str=str_replace("ቼልሲ",'16',$str);

	$str=str_replace("ለደደቢት17",'17',$str);
	$str=str_replace("ደደቢት17",'17',$str);
	$str=str_replace("ለደደቢት",'17',$str);
	$str=str_replace("ደደቢት",'17',$str);
	
	$str=str_replace("ለወልዋሎአዲግራት24",'24',$str);
	$str=str_replace("ለወልዋሎ24",'24',$str);
	$str=str_replace("ለወልዋሎ",'24',$str);
	$str=str_replace("ወልዋሎ24",'24',$str);
	$str=str_replace("ወልዋሎ",'24',$str);

	
	$str=str_replace("ለመቀሌከነማ26",'26',$str);
	$str=str_replace("ለመቀሌከነማ",'26',$str);
	$str=str_replace("መቀሌከነማ26",'26',$str);
	$str=str_replace("መቀሌከነማ",'26',$str);
	
	
	$str=str_replace("ለሊቨርፑል18",'18',$str);
	$str=str_replace("ሊቨርፑል18",'18',$str);
	$str=str_replace("ለሊቨርፑል",'18',$str);
	$str=str_replace("ሊቨርፑል",'18',$str);
	
	$str=str_replace("ለማንሲቲ19",'19',$str);
	$str=str_replace("ማንሲቲ19",'19',$str);
	$str=str_replace("ለማንሲቲ",'19',$str);
	$str=str_replace("ማንሲቲ",'19',$str);

	
	$str=str_replace("ለኢትዮጲያፕሪሜየርሊግEL",'20',$str);
	$str=str_replace("ለኢትዮጲያፕሪሜየርሊግel",'20',$str);
	$str=str_replace("ለኢትዮጲያፕሪሜየርሊግ",'20',$str);
	$str=str_replace("ኢትዮጲያፕሪሜየርሊግ",'20',$str);
	$str=str_replace("ኢትዮጲያ",'20',$str);
	
	
	$str=str_replace("ለእንግሊዝፕሪሜየርሊግPL",'pl',$str);
	$str=str_replace("ለእንግሊዝፕሪሜየርሊግpl",'pl',$str);
	$str=str_replace("ለእንግሊዝፕሪሜየርሊግ",'pl',$str);
	$str=str_replace("እንግሊዝፕሪሜየርሊግ",'pl',$str);
	$str=str_replace("ፕሪሜየርሊግ",'pl',$str);
	$str=str_replace("ፕሪሜየር",'pl',$str);
	$str=str_replace("እንግሊዝ",'pl',$str);
	

	$str=str_replace("ለስፔንላሊጋLL",'ll',$str);
	$str=str_replace("ለስፔንላሊጋll",'ll',$str);
	$str=str_replace("ለስፔንላሊጋ",'ll',$str);
	$str=str_replace("ስፔንላሊጋ",'ll',$str);
	$str=str_replace("ላሊጋ",'ll',$str);
	$str=str_replace("ስፔን",'ll',$str);

	$str=str_replace("ለቻምፕዮንስሊግCL",'cl',$str);
	$str=str_replace("ለቻምፕዮንስሊግcl",'cl',$str);
	$str=str_replace("ለቻምፕዮንስሊግ",'cl',$str);
	$str=str_replace("ቻምፕዮንስሊግ",'cl',$str);
	$str=str_replace("ቻምፕዮንስ",'cl',$str);
	
	$str=str_replace("ሊግ",'pl',$str);
	$str=str_replace("ቡና",'10',$str);
	
   $str = trim($str);
	$str = strtolower($str);
	$str = preg_replace('/\s+/','',$str);
	$str = str_replace(' ', '', $str);
	$str=str_replace("\r",'',$str);
	$str=str_replace("\n",'',$str);
	$str=str_replace("\t",'',$str);
	$str=str_replace("/",'',$str);
	$str=str_replace('"','',$str);
	$str=str_replace("'",'',$str);
	$str=str_replace("\\",'',$str);
	$str=str_replace(" ",'',$str);
	$str=str_replace(".",'',$str);
	$str=str_replace(",",'',$str);
	$str=str_replace("8480",'',$str);
	$str=str_replace("8490",'',$str);
	$str=str_replace("send",'',$str);
	$str=str_replace("1etb",'',$str);
	$str=str_replace("[oK]",'ok',$str);
	$str=str_replace("ÄokÑ",'ok',$str);
	$str=str_replace("okay",'ok',$str);
	$str=str_replace("OKAY",'ok',$str);
	$str=str_replace("ÄokÑ",'ok',$str);
	$str=str_replace("Okay",'ok',$str);
	$str=str_replace("ÄokÑ",'ok',$str);
	$str=str_replace("sall",'hulum',$str);
	
	$str=str_replace("1forarbaminchkenema",'1',$str);
	$str=str_replace("1forarbaminch",'1',$str);
	$str=str_replace("forarbaminch",'1',$str);
	$str=str_replace("arbaminchfc",'1',$str);
	$str=str_replace("1arbaminch",'1',$str);
	$str=str_replace("arbaminchkenema",'1',$str);
	$str=str_replace("arbaminch",'1',$str);
	$str=str_replace("40minch",'1',$str);
	$str=str_replace("arba",'1',$str);
	$str=str_replace("minch",'1',$str);
	$str=str_replace("40",'1',$str);
	
	$str=str_replace("2forarsenal",'2',$str);
	$str=str_replace("forarsenal",'2',$str);
	$str=str_replace("arsenalfc",'2',$str);
	$str=str_replace("2arsenal",'2',$str);
	$str=str_replace("arsenal",'2',$str);
	$str=str_replace("22",'2',$str);
	
	
	$str=str_replace("3forwolaitadicha",'3',$str);
	$str=str_replace("3fordicha",'3',$str);
	$str=str_replace("fordicha",'3',$str);
	$str=str_replace("3dicha",'3',$str);
	$str=str_replace("welaitadicha",'3',$str);
	$str=str_replace("wolaitadicha",'3',$str);
	$str=str_replace("welaita",'3',$str);
	$str=str_replace("dicha",'3',$str);
	$str=str_replace("wolaita",'3',$str);
	$str=str_replace("33",'3',$str);
	
	$str=str_replace("4forfasilkenema",'4',$str);
	$str=str_replace("4fasilkenema",'4',$str);
	$str=str_replace("4forfasil",'4',$str);
	$str=str_replace("forfasil",'4',$str);
	$str=str_replace("4fasil",'4',$str);
	$str=str_replace("fasilkenemafc",'4',$str);
	$str=str_replace("fasilkenema",'4',$str);
	$str=str_replace("gonder",'4',$str);
	$str=str_replace("fasil",'4',$str);
	$str=str_replace("44",'4',$str);
	
	$str=str_replace("5forjimmaababuna",'5',$str);
	$str=str_replace("jimmaababuna5",'5',$str);
	$str=str_replace("jimaababuna",'5',$str);
	$str=str_replace("jimaabaabuna",'5',$str);
	$str=str_replace("5forjimma",'5',$str);
	$str=str_replace("forjimmaababuna",'5',$str);
	$str=str_replace("forjimma",'5',$str);
	$str=str_replace("5jimmaababuna",'5',$str);
	$str=str_replace("jimmaababuna",'5',$str);
	$str=str_replace("jimmaabaabuna",'5',$str);
	$str=str_replace("abaabuna",'5',$str);
    $str=str_replace("5jimma",'5',$str);
	$str=str_replace("jimma",'5',$str);
	$str=str_replace("aba",'5',$str);
	$str=str_replace("55",'5',$str);
	
	$str=str_replace("6forunited",'6',$str);
	$str=str_replace("6formanutd",'6',$str);
	$str=str_replace("6united",'6',$str);
	$str=str_replace("6manutd",'6',$str);
	$str=str_replace("6manunited",'6',$str);
	$str=str_replace("6manchesterunited",'6',$str);
	$str=str_replace("manchesterunited",'6',$str);
	$str=str_replace("manutd",'6',$str);
	$str=str_replace("manunited",'6',$str);
	$str=str_replace("united",'6',$str);
	$str=str_replace("manchester",'6',$str);
	$str=str_replace("66",'6',$str);
	$str=str_replace("6formanutd",'6',$str);
	
	$str=str_replace("7foradamakenema",'7',$str);
	$str=str_replace("7foradama",'7',$str);
	$str=str_replace("foradamakenema",'7',$str);
	$str=str_replace("foradama",'7',$str);
	$str=str_replace("7adama",'7',$str);
	$str=str_replace("adamakenemafc",'7',$str);
	$str=str_replace("adamakenema",'7',$str);
	$str=str_replace("adama",'7',$str);
	$str=str_replace("77",'7',$str);
	
	$str=str_replace("8forbarcelona",'8',$str);
	$str=str_replace("forbarcelona",'8',$str);
	$str=str_replace("8barcelona",'8',$str);
	$str=str_replace("barcelonafc",'8',$str);
	$str=str_replace("barcelona",'8',$str);
	$str=str_replace("88",'8',$str);
	
	$str=str_replace("9fordiredawakenema",'9',$str);
	$str=str_replace("9fordiredawa",'9',$str);
	$str=str_replace("fordiredawa",'9',$str);
	$str=str_replace("fordire",'9',$str);
	$str=str_replace("9diredawa",'9',$str);
	$str=str_replace("diredawakenemafc",'9',$str);
	$str=str_replace("diredawakenema",'9',$str);
	$str=str_replace("diredawa",'9',$str);
	$str=str_replace("99",'9',$str);
	
	$str=str_replace("10forethiopiabuna",'10',$str);
	$str=str_replace("10forethbuna",'10',$str);
	$str=str_replace("10ethbuna",'10',$str);
	$str=str_replace("10ethiopiabuna",'10',$str);
	$str=str_replace("forethiopiabuna",'10',$str);
	$str=str_replace("ethiopiabunafc",'10',$str);
	$str=str_replace("ethiopiabuna",'10',$str);
	$str=str_replace("ethbunafc",'10',$str);
	$str=str_replace("ethbuna",'10',$str);
	$str=str_replace("100",'10',$str);
	
	
	$str=str_replace("11forhawassa",'11',$str);
	$str=str_replace("11hawassa",'11',$str);
	$str=str_replace("forhawassa",'11',$str);
	$str=str_replace("hawassakenemafc",'11',$str);
	$str=str_replace("hawassakenema",'11',$str);
	$str=str_replace("hawassa",'11',$str);
	$str=str_replace("111",'11',$str);

	

	$str=str_replace("12formadrid",'12',$str);
	$str=str_replace("12madrid",'12',$str);
	$str=str_replace("12realmadrid",'12',$str);
	$str=str_replace("realmadridfc",'12',$str);
	$str=str_replace("realmadrid",'12',$str);
	$str=str_replace("formadrid",'12',$str);
	$str=str_replace("madrid",'12',$str);
	$str=str_replace("real",'12',$str);
	$str=str_replace("122",'12',$str);

	//print $str.'</br>' ;
	$str=str_replace("13forsidamabuna",'13',$str);
	$str=str_replace("13sidamabuna",'13',$str);
	$str=str_replace("13sidama",'13',$str);
	$str=str_replace("forsidama",'13',$str);
	$str=str_replace("sidamabunafc",'13',$str);
	$str=str_replace("sidamabuna",'13',$str);
	$str=str_replace("sidamafc",'13',$str);
	$str=str_replace("sidama",'13',$str);
	$str=str_replace("133",'13',$str);

	
	$str=str_replace("14forsaintgeorge",'14',$str);
	$str=str_replace("14saintgeorge",'14',$str);
	$str=str_replace("14stgeorge",'14',$str);
	$str=str_replace("saintgeorgefc",'14',$str);
	$str=str_replace("forsaintgeorge",'14',$str);
	$str=str_replace("saintgeorge",'14',$str);
	$str=str_replace("stgeorgefc",'14',$str);
	$str=str_replace("stgeorge",'14',$str);
	$str=str_replace("kidusgiorgis",'14',$str);
	$str=str_replace("kidus",'14',$str);
	$str=str_replace("giorgis",'14',$str);
	$str=str_replace("144",'14',$str);
	
	$str=str_replace("15forwoldiakenema",'15',$str);
	$str=str_replace("15forwoldia",'15',$str);
	$str=str_replace("15woldia",'15',$str);
	$str=str_replace("woldiakenemafc",'15',$str);
	$str=str_replace("woldiakenema",'15',$str);
	$str=str_replace("woldia",'15',$str);
	$str=str_replace("forwoldia",'15',$str);
	$str=str_replace("155",'15',$str);


	
	$str=str_replace("16forchelsea",'16',$str);
	$str=str_replace("16chelsea",'16',$str);
	$str=str_replace("chelsea16",'16',$str);
	$str=str_replace("chelseafc",'16',$str);
	$str=str_replace("forchelsea",'16',$str);
	$str=str_replace("chelsea",'16',$str);
	$str=str_replace("166",'16',$str);

	$str=str_replace("17fordeddebit",'17',$str);
	$str=str_replace("fordeddebit",'17',$str);
	$str=str_replace("17deddebit",'17',$str);
	$str=str_replace("deddebit",'17',$str);
	$str=str_replace("177",'17',$str);
	
	$str=str_replace("24forWolwaloAddigrat",'24',$str);
	$str=str_replace("forWolwaloAddigrat",'24',$str);
	$str=str_replace("24WolwaloAddigrat",'24',$str);
	$str=str_replace("WolwaloAddigrat",'24',$str);
	$str=str_replace("Wolwalo",'24',$str);
	$str=str_replace("244",'24',$str);
	
	
	$str=str_replace("26forMekelleKenema",'26',$str);
	$str=str_replace("forMekelleKenema",'26',$str);
	$str=str_replace("26MekelleKenema",'26',$str);
	$str=str_replace("MekelleKenema",'26',$str);
	$str=str_replace("266",'26',$str);
	
	$str=str_replace("18forliverpool",'18',$str);
	$str=str_replace("forliverpool",'18',$str);
	$str=str_replace("18liverpool",'18',$str);
	$str=str_replace("liverpool",'18',$str);
	$str=str_replace("liverpul",'18',$str);
	$str=str_replace("liverpol",'18',$str);
	$str=str_replace("188",'18',$str);
	
	$str=str_replace("19formancity",'19',$str);
	$str=str_replace("formancity",'19',$str);
	$str=str_replace("19mancity",'19',$str);
	$str=str_replace("mancity",'19',$str);
	$str=str_replace("manciti",'19',$str);
	$str=str_replace("city",'19',$str);
	$str=str_replace("199",'19',$str);
	
	$str=str_replace("20forethiopiaprimerleague",'20',$str);
	$str=str_replace("forethiopiaprimierleague",'20',$str);
	$str=str_replace("20ethiopiaprimierleague",'20',$str);
	$str=str_replace("ethiopiaprimierleague",'20',$str);
	$str=str_replace("ethiopiapl",'20',$str);
	$str=str_replace("ethiopia",'20',$str);
	$str=str_replace("epl",'20',$str);
	
	$str=str_replace("27forworldcup",'27',$str);
	$str=str_replace("forworldcup",'27',$str);
	$str=str_replace("27worldcup",'27',$str);
	$str=str_replace("worldcup",'27',$str);

	$str=str_replace("clforchampionsleague",'cl',$str);
	$str=str_replace("forchampionsleague",'cl',$str);
	$str=str_replace("clchampionsleague",'cl',$str);
	$str=str_replace("championsleague",'cl',$str);
	
	$str=str_replace("plforprimierleague",'pl',$str);
	$str=str_replace("forprimierleague",'pl',$str);
	$str=str_replace("plprimierleague",'pl',$str);
	$str=str_replace("primierleague",'pl',$str);

	$str=str_replace("llforlaliga",'ll',$str);
	$str=str_replace("forlaliga",'ll',$str);
	$str=str_replace("lllaliga",'ll',$str);
	$str=str_replace("laliga",'ll',$str);


	$str=str_replace("league",'pl',$str);
	$str=str_replace("more",'mor',$str);
	$str=str_replace("mor",'more',$str);
	$str=str_replace("mur",'more',$str);
	$str=str_replace("mer",'more',$str);
	$str=str_replace("mar",'more',$str);
	$str=str_replace("more",'MRE',$str);
	
	
	$str=str_replace("gotohell",'stop',$str);
	$str=str_replace("fuckyou",'stop',$str);
	$str=str_replace("fucku",'stop',$str);
	$str=str_replace("fuck",'stop',$str);
	$str=str_replace("cancel",'stop',$str);
	$str=str_replace("exit",'stop',$str);
	$str=str_replace("st0p",'stop',$str);
	$str=str_replace("stup",'stop',$str);
	$str=str_replace("stip",'stop',$str);
	$str=str_replace("step",'stop',$str);
	$str=str_replace("stope",'stop',$str);	
	$str=str_replace("stpe",'stop',$str);	
	$str=str_replace("stp",'stop',$str);	
	$str=str_replace("stopall",'stop',$str);
	$str=str_replace("አቁም",'stop',$str);
	$str=str_replace("stob",'stop',$str);
	$str=str_replace("allstop",'stop',$str);
	$str=str_replace("ok",'OK',$str);
	$str=str_replace("10",'onthetablebutwhereisthetabel',$str);
	$str=str_replace("20",'omyasshereisyourtableyousonofabitch',$str);
	$str=str_replace("0",'stop',$str);
	$str=str_replace("onthetablebutwhereisthetabel",'10',$str);
	$str=str_replace("omyasshereisyourtableyousonofabitch",'20',$str);
	$str=str_replace("buna",'10',$str);
	$str=str_replace("stop",'whatwasthatagain',$str);
	$str=str_replace("o",'whatwasthatagain',$str);
	$str=str_replace("whatwasthatagain",'stop',$str);
	$str=str_replace("OK",'ok',$str);
	$str=str_replace("MRE",'more',$str);


	
	$str=trim($str);
	
    return $str;
}

function httpRequest($url){
      $pattern = "/http...([0-9a-zA-Z-.]*).([0-9]*).(.*)/";
      preg_match($pattern,$url,$args);
      $in = "";
      $fp = fsockopen("$args[1]", $args[2], $errno, $errstr, 30);
      if (!$fp) {
         return("$errstr ($errno)");
      } else {
          $out = "GET /$args[3] HTTP/1.1\r\n";
          $out .= "Host: $args[1]:$args[2]\r\n";
          $out .= "User-agent: Ozeki PHP client\r\n";
          $out .= "Accept: */*\r\n";
          $out .= "Connection: Close\r\n\r\n";
          fwrite($fp, $out);
          while (!feof($fp)) {
             $in.=fgets($fp, 128);
          }
      }
      fclose($fp);
      return($in);
   }

function sendSMS($msg, $recipient,$sr) {
		$URL = "http://127.0.0.1:9501\api?username=". urlencode("Monthly_Services_Server") . "&password=". urlencode("yokida123");
		$URL .= "&action=sendmessage&messagetype=SMS:TEXT&recipient=". urlencode($recipient);
		$URL .= "&messagedata=" . urlencode($msg);
	    $URL .="&originator=". urlencode($sr);
		//echo "Request: <br>$URL<br><br>";
		$response = httpRequest($URL);
	/* echo "Response: <br><pre>".
			str_replace(array("<",">"),array("&lt;","&gt;"),$response).
			"</pre><br>"; */
	}
	
		
function nextmonth($date1)
{ 
$EndTime1=$date1;
 $dat=explode("-",$EndTime1);
                            $d=$dat[2];
                            $m=$dat[1];
			                $Y=$dat[0];
							$nextmonth = mktime(0,0,0,date("$m"),date("$d")+0,date("$Y"));
                            $EndTime2=date("Y-m-d",$nextmonth);  
						    return $EndTime2;
}	

function ALL($sender)
{
 $sms="all";
 $dat=nextmonth("Y-m-d");
 mysql_query("INSERT INTO `bulk`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");

$msg_ns="You have not subscribed to any of the services yet. To subscribe, Send:
27 for world cup
1 for Arbaminch
2 Arsenal
3 Dicha
4 Fasil
5 Jimma Aba Buna
6 Man Utd
Price 1ETB/msg;
For more clubs, Send MORE";

$msg_amh_ns="ለየትኛውም ክለብ አልተመዘገቡም:: ለመመዝገብ
ለአለም ዋንጫ 27
ለአርባምንጭ 1
ለአርሰናል 2
ለወላይታ ዲቻ 3
ለፋሲል 4
ለጅማ  አባ ቡና 5
ለማን ዩናይትድ 6
ለተጨማሪ ክለቦች MORE ብለው ይላኩ";

 $sql_found=mysql_query("SELECT Service FROM `contacts` WHERE `Number`='$sender'");
 $num_rows=mysql_num_rows($sql_found);

  if($num_rows!=0 && $num_rows<16 )
  { 
  $i=0;
 
while($row_cus=mysql_fetch_row($sql_found)){

$msg1.=$row_cus[$i].', ';
}
    $msg="Dear Customer, You have been subscribed for the following clubs: 
$msg1";
    $msg_amh="ክቡር ደንበኛችን ከዚህ ቀጥሎ ለተዘረዘሩት ክለቦች ተመዝግበዋል:
$msg1";
$msg2="Do you want to subscribe for all of the services? 
Send SALL
You want more clubs? 
Send MORE 
If you want unsubscribe from all of the services send STOPALL";

$msg2_amh="ለሁሉም ክለቦች መመዝገብ ይፈልጋሉ？
SALL ብለው ይላኩ
ተጨማሪ ክለቦችን ይፈለጋሉ？
MORE ብለው ይላኩ";
    
	sendSMS($msg,$sender,8480);
	sendSMS($msg_amh,$sender,8480);
	 sleep(10);
 sendSMS($msg2,$sender,8480);
  sendSMS($msg2_amh,$sender,8480);
 //echo $msg1;
 //echo $msg2;
 }
  elseif ( $num_rows>15)
  {
  $msg_all="Dear Customer, You have subscribed to all of Yokida's News  Services." ;
  $msg_all_amh="ክቡር ደንበኛችን ለሁሉም ክለቦች ተመዝግበዋል";
	//echo $msg_all;
	sendSMS($msg_all,$sender,8480);
	sendSMS($msg_all_amh,$sender,8480);
	}
	 elseif ($num_rows==0){
    	 sendSMS($msg_ns,$sender,8480);
		  sendSMS($msg_amh_ns,$sender,8480);
		}
	 //echo $msg;
	 
}

function Remove($sender,$sms)
{

	
 mysql_query("INSERT INTO `bulk`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', 'CURRENT_DATE');");
 
$sql_found=mysql_query("SELECT `Number` ,`Service` FROM `contacts` WHERE `Number` LIKE '$sender'");

$row_found = mysql_fetch_row($sql_found);
if(mysql_num_rows($sql_found)!=0)
   {
    if($sms=="stop")
	       {
		     $sql_all=mysql_query("select `Service` from `contacts` WHERE `Number` LIKE '$sender'");
              while($row_all=mysql_fetch_row($sql_all))
                {
                $d1=$row_all[0];
			
				$in= mysql_query("INSERT INTO `customers_out` values('$sender' ,'$d1','$dat')");
	             }
				
		     $sqlQuery3 =mysql_query("delete from `contacts` WHERE Number='$sender'"); 
		     $MS=" You have unsubscribed from all of your Services. 

 If you have any suggestions, please don't hesitate to call us on 0944103601.";
			$MS_amh="ሁሉንም የኢፎሴል ስፖርት ዜና አግልግሎት አቋርጠዋል:: ቅሬታ አልያም አስተያየት ካሎት በ0944103601 ይደውሉልን";
	        sendSMS($MS,$sender,8480);
			 sendSMS($MS_amh,$sender,8480);
			
          }
		 else
	 {
     $sc=mysql_query("SELECT `Service`,`Aname`, `key` FROM `services` WHERE `key2`like '$sms'");//select to service 
	 $row = mysql_fetch_row($sc);
     $d1=$row[0];
	 $name=$row[1];
	 $reg_id=$row[2];
	 $sql_InService=mysql_query("select * from `contacts` WHERE `Number` LIKE '$sender' and `Service` LIKE '$d1' and Flag='Postpaid'");
     if(mysql_num_rows($sql_InService)!=0)
       {
	    
	     $in= mysql_query("INSERT INTO `customers_out` values('$sender' ,'$d1','$dat')");
	     //$sqlQuery3 =mysql_query("UPDATE `customers_in` SET Enddate= '$dat',flag = 'Removed' WHERE Number='$sender' and Service='$d1'"); 
	     $sqlQuery3 =mysql_query("delete from `customers_in` WHERE Number='$sender' and Service='$d1'"); 
		 
		 $MS=" You have unsubscribed from $name News Service. If you would like to subscribe back send $reg_id. If you have any suggestions, please don't hesitate to call us on 0944103601. ";
 $MS_amh="የ$name ዜና አገልግሎት ደንበኝነቶን አቋርጠዋል:: በድጋሚ ለመመዝገብ ከፈለጉ $reg_id ብለው ይላኩ:: ቅሬታ አልያም አስተያየት ካሎት በ0944103601 ይደውሉልን";
	    // echo $MS;
		 
         sendSMS($MS,$sender,8480);
		  sendSMS($MS_amh,$sender,8480);
	   }
	    else
	   {
         $MS="To unsubscribe 
Send STOP followed by one of the following keywords 
example STOP7
27 for world cup
1 for Arbaminch
2 Arsenal
3 Dicha
4 Fasil
5 Jimma Aba Buna
6 Man Utd";
		// echo $MS;
		 sendSMS($MS,$sender,8480);
		}
	}
}	
		 else
		 {
           $MS="Would you like to subscribe? Use the following keywords:
27 for world cup
1 for Arbaminch
2 Arsenal
3 Dicha
4 Fasil
5 Jimma Aba Buna
6 Man Utd
For more clubs, Send more";
          // echo $MS;
$msg_amh="ለየትኛውም ክለብ አልተመዘገቡም:: ለመመዝገብ
ለአለም ዋንጫ 27
ለአርባምንጭ 1
ለአርሰናል 2
ለወላይታ ዲቻ 3
ለፋሲል 4
ለጅማ  አባ ቡና 5
ለማን ዩናይትድ 6
ለተጨማሪ ክለቦች MORE ብለው ይላኩ";
		  sendSMS($MS,$sender,8480);
		  sendSMS($msg_amh,$sender,8480);
		 }

}




//*************************---Start---********************************
$status=0;

if($s!="id:")
   {
    
     if($sms=="more") 
	   {
	    $dat=nextmonth("Y-m-d");	
 mysql_query("INSERT INTO `bulk`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
 
	     $MS='More clubs...
7 for Adama Kenema
8 for Barcelona
9 for Diredawa Kenema
10 for Ethiopia Buna
11 for Hawassa Kenema
12 for Real Madrid
13 for Sidama Buna
14 for Saint George
15 for Woldia Kenema
16 for Chelsea
For More Clubs send MORE2';

$MS_amh="ለአዳማ 7
ለባርሴሎና 8
ለድሬዳዋ 9
ለኢት. ቡና 10
ለሀዋሳ 11
ለሪያል ማድሪድ 12
ለሲዳማ 13
ለቅ.ጊዮርጊስ 14
ለወልዲያ 15
ለቸልሲ 16
ለሌሎች ክለቦች MORE2 ብለው ይላኩ";

         
		     sendSMS($MS,$sender,8480);
		     sendSMS($MS_amh,$sender,8480);
			 	    $status="more";

			 }
	elseif($sms=="more2")
	
	
	{
	     $dat=nextmonth("Y-m-d");	
         mysql_query("INSERT INTO `bulk`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");

$MS='More Clubs...
17 for Deddebit
24 for Wolwalo Addigrat
26 for Mekelle Kenema
18 for Liverpool
19 for Man City
20 for Ethiopia primier League
PL for primier League
LL for Laliga
CL for Champions League';


         
		     sendSMS($MS,$sender,8480);
		     sendSMS($MS_amh,$sender,8480);
			 	    $status="more2";

			 }
	
	
	
elseif($sms=="hulum") 
	   {
	      $dat = nextmonth("Y-m-d");
		     mysql_query("INSERT INTO `bulk`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
		   $enddat=nextmonth($dat);
		 
		  $sql_delete = mysql_query("DELETE FROM `customers_in` WHERE `Number`='$sender';");
	 mysql_query("INSERT INTO `customers_in`(`id`, `Number`, `Regdate`, `Enddate`, `NumSMS`, `Service`) VALUES (0, '$sender', '$dat', '$enddat', '1', 'Arbaminch Kenema'),(0, '$sender', '$dat', '$enddat', '1', 'Arsenal'),(0, '$sender', '$dat', '$enddat', '1', 'Wolaita Dicha'),(0, '$sender', '$dat', '$enddat', '1', 'Fasil Kenema'),(0, '$sender', '$dat', '$enddat', '1', 'Jimma Aba Buna'),(0, '$sender', '$dat', '$enddat', '1', 'Manchester United'),(0, '$sender', '$dat', '$enddat', '1', 'Adama Kenema'),(0, '$sender', '$dat', '$enddat', '1', 'Barcelona'),(0, '$sender', '$dat', '$enddat', '1', 'Diredawa Kenema'),(0, '$sender', '$dat', '$enddat', '1', 'Ethiopia Buna'),(0, '$sender', '$dat', '$enddat', '1', 'Hawassa Kenema'),(0, '$sender', '$dat', '$enddat', '1', 'Real Madrid'),(0, '$sender', '$dat', '$enddat', '1', 'Sidama Buna'),(0, '$sender', '$dat', '$enddat', '1', 'Saint George'),(0, '$sender', '$dat', '$enddat', '1', 'Woldia Kenema'),(0, '$sender', '$dat', '$enddat', '1', 'Wolwalo Addigrat'),(0, '$sender', '$dat', '$enddat', '1', 'Mekelle Kenema'),(0, '$sender', '$dat', '$enddat', '1', 'Chelsea');");		 
		 
		 
		 $MS='Dear Customer, You have subscribed to all of The Services.';
		 $MS_amh='ክቡር ደንበኛችን ለሁሉም ክለቦች ተመዝግበዋል';

         
		     sendSMS($MS,$sender,8480);
		     sendSMS($MS_amh,$sender,8480);
			 	    $status="hulum";

			 }

	   elseif($sms=="all") 
	    $status="all";
	elseif($sms=="stop")
		 $status="remove";
	    //$status="ALL";
		
	elseif($sms=="chk")
	{  $chq= mysql_query("SELECT * FROM `contacts`");
	  $chq_no=mysql_num_rows($chq);
	  if ($sender=="251912655466") {
	 sendSMS($chq_no, $sender, 8480);
	$status="chk";}
	elseif ( $sender=="251910302822")
	{
	$chq_no2=$chq_no;
	sendSMS($chq_no2, $sender, 8480);
	//sendSMS8480($chq_no2, $sender, 8480);
	$status="chk";}
	elseif ( $sender=="251911226165")
	{
	$chq_no2=$chq_no;
	sendSMS($chq_no2, $sender, 8480);
	//sendSMS8480($chq_no2, $sender, 8480);
	$status="chk";}
	
	else {
	$rmsg="This service is available only for Yokida Sport staff members.";
	sendSMS($rmsg, $sender, 8480) ;
	  $status="chk";
	     }
	  }
	elseif($sms=="ok")
	 {
	    $dat = nextmonth("Y-m-d");
	 mysql_query("INSERT INTO `bulk`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
	    $MS='Welcome! Subscribe to get Latest Scores and News. Send:
27 for world cup
1 for Arbaminch
2 Arsenal
3 Dicha
4 Fasil
5 Jimma Aba Buna
6 Man Utd
Price 1ETB/Msg;
For more clubs, Send MORE';
$MS_amh="ለሚደግፉት ክለብ ተመዝግበው የእግር ኳስ ዜና ያግኙ
ለአለም ዋንጫ 27
ለአርሰናል 2
ለወላይታ ዲቻ 3
ለፋሲል 4
ለጅማ  አባ ቡና 5
ለማን ዩናይትድ 6
ለተጨማሪ ክለቦች MORE ብለው ይላኩ";

		     sendSMS($MS,$sender,8480);
		     sendSMS($MS_amh,$sender,8480);
			$status="ok";

			 }
		 
	 else
	 {
      //Correct key word for remove
       $sql_Cancel=mysql_query("SELECT * FROM `services` WHERE key2 LIKE '$sms'");
       $row_Cancel = mysql_fetch_row($sql_Cancel);
       if(mysql_num_rows($sql_Cancel)!=0)  
	       $status="remove";
	   else   //correct keyword for subscribe
         {
           $correct_key=mysql_query("SELECT Service,Aname,key2 FROM `services` WHERE `key` ='$sms'");
           if(mysql_num_rows($correct_key)!=0) 
		      $status="CorrectKey";
		   else
	          $status="ErrorKey";
       
		 }
     }	
	
switch ($status)
	 {
	 case "more": 
	       
	  break;
	   case "more2": 
	       
	  break;
	  case "hulum":
	  break;
	 
	  case "ok": 
	       
	  break;
	  
	  case "chk":
	  break;
	   
	  case "all": 
	        ALL($sender);
	  break;
	  
	  case "remove": 
	         Remove($sender,$sms);
	  break;
	  case "CorrectKey":   //if customer found
	    $dat = nextmonth("Y-m-d");
		mysql_query("INSERT INTO `bulk`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
	      $det=mysql_fetch_row($correct_key);
		  $service=$det[0];
	  	  $Aname=$det[1];
		  $key2=$det[2];
		  	$key2=str_replace("ALL",'',$key2);
	      $srh=mysql_query("SELECT Enddate FROM `customers_in` WHERE `Number` = '$sender' AND `Service` = '$service'");	
          if(mysql_num_rows($srh) > 0)    // Number is found
           { 
		     $row = mysql_fetch_row($srh);
             $d=$row[0];    $enddat=nextmonth($d);
             $sqlQuery3 =mysql_query("UPDATE `customers_in` SET Enddate= '$enddat', NumSMS = NumSMS +1,flag='Postpaid' WHERE Number='$sender' and Service='$service'"); 
             $MS="Welcome to Infocell Technologies! You have already subscribed for $service News Service. For more clubs, send MORE";
             $MS_amh="ለ$service የዜና አገልግሎት ቀደም ብለው ተመዝግበዋል::
			 
ተጨማሪ ክለቦችን ይፈለጋሉ？
MORE ብለው ይላኩ
ስለመረጡን ደስ ብሎናል";
		     sendSMS($MS,$sender,8480);
		     sendSMS($MS_amh,$sender,8480);
		     // echo $MS." correct Re-new";
           }
	     else // number not found
	       {
		    $dat = nextmonth("Y-m-d");。+
			
		    $enddat=nextmonth($dat);
	    	mysql_query("INSERT INTO `contacts`(`id`, `category`, `Regdate`, `Enddate`, `NumSMS`, `Service`) VALUES (0, '$sender', '$dat', '$enddat', '1', '$service');");
            $MS="Welcome to Infocell Technologies! You have subscribed for $service News Service. You will be charged 1ETB when you receive news. For more clubs, send MORE. To unsubscribe send $key2";
			$MS_amh="ለ$service አገልግሎት ተመዝግበዋል
ተጨማሪ ክለቦችን ይፈለጋሉ? MORE ብለው ይላኩ
ለማቋረጥ $key2 ብለው ይላኩ
ዜና ሲደርሶት ከስልኮ ላይ አንድ ብር ተቆራጭ ይሆናል";
           sendSMS($MS,$sender,8480);
           sendSMS($MS_amh,$sender,8480);
		   $sql_con= mysql_query("SELECT `sms` FROM `first_msg` where type like '$service' order by rand() limit 1");
		  // $row_con = mysql_fetch_row($sql_con);
            //sendSMS($row_con[0],$sender,8442);
		   //echo $row_con[0]." correct new"; 

		  // echo $MS." correct new";
		 }
	   break;
	   case "ErrorKey":
	     $srch=mysql_query("SELECT `Service` FROM `customers_in` WHERE number ='$sender'");	
	     $rows_exist=mysql_num_rows($srch);
	     if($rows_exist==0) //Not Found
	      {
		   //default case: First subscribe with error key
		   $service="Arsenal";
		   $dat = nextmonth("Y-m-d");
		   //	mysql_query("INSERT INTO `customers_in`(`id`, `Number`, `Regdate`, `Enddate`, `NumSMS`, `Service`) VALUES (0, '$sender', '$dat', '$enddat', '1', '$service');");
		  mysql_query("INSERT INTO `bulk`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");
         $MS='Welcome! Subscribe to get Latest Scores and News. Send:
27 for world cup
1 for Arbaminch
2 Arsenal
3 Dicha
4 Fasil
5 Jimma Aba Buna
6 Man Utd
Price 1ETB/Msg;
For more clubs, Send MORE';
$MS_amh="ለሚደግፉት ክለብ ተመዝግበው የእግር ኳስ ዜና ያግኙ
ለአለም ዋንጫ 27
ለአርባምንጭ 1
ለአርሰናል 2
ለወላይታ ዲቻ 3
ለፋሲል 4
ለጅማ  አባ ቡና 5
ለማን ዩናይትድ 6
ለተጨማሪ ክለቦች MORE ብለው ይላኩ";
           sendSMS($MS,$sender,8480);
           sendSMS($MS_amh,$sender,8480);
		   $sql_con= mysql_query("SELECT `sms` FROM `first_msg` where type like '$service' order by rand() limit 1");
		  // $row_con = mysql_fetch_row($sql_con);
           //sendSMS($row_con[0],$sender,8442);
           //echo $MS;
	     }
		  elseif($rows_exist<16)    // Number is found and not in all services
		   { 
		    
					  
 $dat = nextmonth("Y-m-d");
		   //	mysql_query("INSERT INTO `customers_in`(`id`, `Number`, `Regdate`, `Enddate`, `NumSMS`, `Service`) VALUES (0, '$sender', '$dat', '$enddat', '1', '$service');");
		  mysql_query("INSERT INTO `bulk`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");

       $MS='Dear Customer, Your Command was not recognized. Send OK to get full description.

Infocell Sport';
$MS_amh="የላኩልንን መልእክት መርዳት አልቻልንም:: የአገልግሎታችንን ዝርዝር ለማግኘት OK ብለው ይላኩ:: ጥያቄ ወይም ቅሬታ አልያም አስተያየት ካሎት በ0944103601 ይደውሉልን";
            sendSMS($MS,$sender,8480);
            sendSMS($MS_amh,$sender,8480);
			/*$sql_con= mysql_query("SELECT `sms` FROM `first_msg` where type like '$service' order by rand() limit 1");
		   $row_con = mysql_fetch_row($sql_con);
           sendSMS($row_con[0],$sender,8442);*/
            //echo $MS;	 
		   }
		 else
		  { 
		    //Number is found with removed flag
		    $srch=mysql_query("SELECT `Service` FROM `customers_in` WHERE number ='$sender' and Flag='Removed'");	
	        $rows_exist=mysql_num_rows($srch);
            
			 $dat = nextmonth("Y-m-d");
		   //	mysql_query("INSERT INTO `customers_in`(`id`, `Number`, `Regdate`, `Enddate`, `NumSMS`, `Service`) VALUES (0, '$sender', '$dat', '$enddat', '1', '$service');");
		  mysql_query("INSERT INTO `bulk`(`id`, `Number`,`message`, `Regdate`) VALUES (0, '$sender', '$sms', '$dat');");

			  //Default renew in one
			  $service="Arsenal";
			
		      $sqlQuery1 =mysql_query("SELECT Enddate FROM `customers_in`  WHERE number ='$sender'  And Service ='$service'");
              $row = mysql_fetch_row($sqlQuery1);
              $d=$row[0];
		      if($d<=$dat) $enddat= nextmonth($dat); else $enddat=nextmonth($d);
		      $sqlQuery3 =mysql_query("UPDATE `customers_in` SET Enddate= '$enddat', NumSMS = NumSMS +1 WHERE Number='$sender' and Service='$service'"); 
              $MS="Dear Customer, You've already Subscribed to all of the Services. If you need any help, please don't hesitate to call us on 0944103601

Infocell Sport";
$MS_amh="ክቡር ደንበኛችን ለሁሉም ክለቦች ተመዝግበዋል:: የላኩልንን መልእክት መርዳት አልቻልንም:: ጥያቄ ወይም ቅሬታ አልያም አስተያየት ካሎት በ0944103601 ይደውሉልን ";
		      sendSMS($MS,$sender,8480);
		      sendSMS($MS_amh,$sender,8480);
			  //echo $MS;
		      
			}
		
		  break;
		  
	}
	}
		
	
 ?>