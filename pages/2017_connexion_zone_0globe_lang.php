    <p id="consigne" align="center">Sélectionne ton continent
    <br>
    <img src="images/cartes/connexion/connexion_monde_400.png" border="0" usemap="#globe">
<map name="globe" id="globe">
  <! 3 = Amerique du sud !>
  <area shape="poly" coords="209,177,226,169,246,173,302,210,292,258,261,298,276,328,253,339,229,319,219,247,195,213" style="cursor:pointer;" onclick="request(change_contenu_div,'zone_login','../pages/2017_connexion_zone_login.php?zone=AMDUSUD');" title="<? echo $textelog[$txtlog];
																																																						$txtlog++; ?>">
  <! 1 = Afrique !>
  <area shape="poly" coords="415,284,477,265,489,173,470,173,448,133,442,121,401,118,399,109,372,114,364,114,341,149,338,170" style="cursor:pointer;" onclick="request(change_contenu_div,'zone_login','../pages/2017_connexion_zone_login.php?zone=AFRIQUE');" title="<? echo $textelog[$txtlog];
																																																				$txtlog++; ?>">
  <! 2 = Amerique du nord !>
  <area shape="poly" coords="66,74,133,28,259,11,298,10,268,27,281,43,279,89,217,129,226,152,247,153,246,169,214,170,204,185,139,158" style="cursor:pointer;" onclick="request(change_contenu_div,'zone_login','../pages/2017_connexion_zone_login.php?zone=AMDUNORD');" title="<? echo $textelog[$txtlog];
																																													$txtlog++; ?>">
  <! 5 = Europe !>
  <area shape="poly" coords="357,111,375,109,395,104,406,111,428,112,429,103,451,86,453,80,438,72,429,66,429,52,429,34,423,13,325,7,297,12,284,22,299,56" style="cursor:pointer;" onclick="request(change_contenu_div,'zone_login','../pages/2017_connexion_zone_login.php?zone=EUROPE');" title="<? echo $textelog[$txtlog];
																																						$txtlog++; ?>">
  <! 6 = Océanie !>
  <area shape="poly" coords="609,293,697,327,741,314,771,271,784,214,779,160,680,183,682,208,679,219,677,228,651,228,611,248" style="cursor:pointer;" onclick="request(change_contenu_div,'zone_login','../pages/2017_connexion_zone_login.php?zone=OCEANIE');" title="<? echo $textelog[$txtlog];
																																											$txtlog++; ?>">
  <! 4 = Asie !>
  <area shape="poly" coords="429,33,445,9,589,5,642,18,680,37,719,66,748,94,688,171,679,208,678,219,633,229,580,221,503,198,488,164,471,171,451,134,449,125,455,118,451,122,452,113,448,110,436,111,433,103,449,101,452,91,456,77,443,76,432,64,430,54,433,50" style="cursor:pointer;" onclick="request(change_contenu_div,'zone_login','../pages/2017_connexion_zone_login.php?zone=ASIE');" title="<? echo $textelog[$txtlog];
																																																						$txtlog++; ?>">
  <! 7 = Antarctique !>
  <area shape="poly" coords="82,193,77,181,118,177,125,170,135,181,160,184,168,175,221,174,234,175,283,174,297,178,287,189,276,191" style="cursor:pointer;" onclick="request(change_contenu_div,'zone_login','../pages/2017_connexion_zone_login.php?zone==ANTARCTIQUE');" title="Pierrot">
</map></p>
