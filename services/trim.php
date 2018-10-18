<?php


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








?>