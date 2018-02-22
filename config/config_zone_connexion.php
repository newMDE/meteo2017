<?php

/* 
 * The "Meteo des Ecoles" License
 *
 * Copyright 2018 Sylvain Taussac / Alexandre Nicolas pour l'ensemble du site
 *
 * "La météo des écoles" à l'exception de morceaux de codes provenant de sources
 * citées dans les fichiers.
 */
return ['GLOBE' => array(
                'type' => "carte",
                'valeur' => '../pages/2017_connexion_zone_0globe_lang.php'
            ),
//CONTINENTS    
            'AFRIQUE' => array(
                'type' => "liste",
                'valeur' => " and pays.ID_CONTINENT='1'"
            ),

            'AMDUSUD' => array(
                'type' => "liste",
                'valeur' => " and pays.ID_CONTINENT='3'"
            ),


            'AMDUNORD' => array(
                'type' => "liste",
                'valeur' => " and pays.ID_CONTINENT='2'"
            ),

            'ANTARCTIQUE' => array(
                'type' => "liste",
                'valeur' => " and pays.ID_CONTINENT='7'"
            ),

    
            'ASIE' => array(
                'type' => "liste",
                'valeur' => " and pays.ID_CONTINENT='4'"
            ),
    
            'EUROPE' => array(
                'type' => "carte",
                'valeur' => '../pages/2017_connexion_zone_europe_lang.php'
            ),

            'OCEANIE' => array(
                'type' => "liste",
                'valeur' => " and pays.ID_CONTINENT='6'"
            ),
//PAYS EUROPE - PAYS EUROPE - PAYS EUROPE
            'ALLEMAGNE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='101' and pays.ID_CONTINENT='5'"
            ),
    
            'ANDORRE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='103' and pays.ID_CONTINENT='5'"
            ),
    
            'AUT_HON_SLO_TCH' => array(
                'type' => "liste",
                'valeur' => "and (pays.ID_PAYS='117' OR pays.ID_PAYS='104' OR pays.ID_PAYS='141' OR pays.ID_PAYS='145')and pays.ID_CONTINENT='5'"
            ),    

            'BENELUX' => array(
                'type' => "liste",
                'valeur' => "and (pays.ID_PAYS='106' OR pays.ID_PAYS='133' OR pays.ID_PAYS='126')and pays.ID_CONTINENT='5'"
            ),

            'BIELORUSSIE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='105' and pays.ID_CONTINENT='5'"
            ),    

            'BOS_CRO_SLOVE_SERB' => array(
                'type' => "liste",
                'valeur' => "and (pays.ID_PAYS='107' OR pays.ID_PAYS='110' OR pays.ID_PAYS='140' OR pays.ID_PAYS='142')and pays.ID_CONTINENT='5'"
            ),

            'BULGARIE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='108' and pays.ID_CONTINENT='5'"
            ),    

            'CHYPRE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='109' and pays.ID_CONTINENT='5'"
            ),

            'DANEMARK' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='111' and pays.ID_CONTINENT='5'"
            ),    

            'ESPAGNE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='112' and pays.ID_CONTINENT='5'"
            ),

            'FINLANDE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='114' and pays.ID_CONTINENT='5'"
            ),    

            'FRANCE' => array(
                'type' => "carte",
                'valeur' => '../pages/2017_connexion_zone_europe_pays_france_lang.php'
            ),

            'GR_ALB_MACED' => array(
                'type' => "liste",
                'valeur' => "and (pays.ID_PAYS='102' OR pays.ID_PAYS='115' OR pays.ID_PAYS='127')and pays.ID_CONTINENT='5'"
            ),    

            'IRLANDE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='119' and pays.ID_CONTINENT='5'"
            ),

            'ISLANDE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='120' and pays.ID_CONTINENT='5'"
            ),    

            'ITALIE_MALTE' => array(
                'type' => "liste",
                'valeur' => "and (pays.ID_PAYS='121' OR pays.ID_PAYS='128')and pays.ID_CONTINENT='5'"
            ),

            'MOLD_ROUM_UKR' => array(
                'type' => "liste",
                'valeur' => "and (pays.ID_PAYS='129' OR pays.ID_PAYS='136' OR pays.ID_PAYS='146')and pays.ID_CONTINENT='5'"
            ),    

            'NORVEGE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='132' and pays.ID_CONTINENT='5'"
            ),

            'PAYS_BALTES' => array(
                'type' => "liste",
                'valeur' => "and (pays.ID_PAYS='113' OR pays.ID_PAYS='123' OR pays.ID_PAYS='125')and pays.ID_CONTINENT='5'"
            ),    

            'POLOGNE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='134' and pays.ID_CONTINENT='5'"
            ),

            'PORTUGAL' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='135' and pays.ID_CONTINENT='5'"
            ),

            'ROYAUME_UNI' => array(                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='137' and pays.ID_CONTINENT='5'"
            ),    

            'RUSSIE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='138' and pays.ID_CONTINENT='5'"
            ),

            'SUEDE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='143' and pays.ID_CONTINENT='5'"
            ),    

            'SUISSE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='144' and pays.ID_CONTINENT='5'"
            ),
//FRANCE REGIONS - FRANCE REGIONS - FRANCE REGIONS - FRANCE REGIONS
            'AUVERGNE_RHONE_ALPES' => array(
                'type' => "liste",
                'valeur' => 'requete'
            ),
    
            'BOURGOGNE_FRANCHE_COMTE' => array(
                'type' => "liste",
                'valeur' => 'requete'
            ),

            'BRETAGNE' => array(
                'type' => "liste",
                'valeur' => 'requete'
            ),
    
            'CENTRE_VAL_DE_LOIRE' => array(
                'type' => "liste",
                'valeur' => 'requete'
            ),

            'CORSE' => array(
                'type' => "liste",
                'valeur' => 'requete'
            ),

            'GRAND_EST' => array(
                'type' => "liste",
                'valeur' => 'requete'
            ),
    
            'HAUTS_DE_FRANCE' => array(
                'type' => "liste",
                'valeur' => 'requete'
            ),

            'ILE_DE_FRANCE' => array(
                'type' => "liste",
                'valeur' => 'requete'
            ),

            'NORMANDIE' => array(
                'type' => "liste",
                'valeur' => 'requete'
            ),
    
            'NOUVELLE_AQUITAINE' => array(
                'type' => "liste",
                'valeur' => 'requete'
            ),
    
            'OCCITANIE' => array(
                'type' => "carte",
                'valeur' => '../pages/2017_connexion_zone_europe_pays_france_region_occitanie_lang.php'
            ),

            'PACA' => array(
                'type' => "liste",
                'valeur' => 'requete'
            ),
    
            'PAYS_DE_LA_LOIRE' => array(
                'type' => "liste",
                'valeur' => 'requete'
            ),
    //FRANCE DEPARTEMENTS - FRANCE DEPARTEMENTS - FRANCE DEPARTEMENTS - FRANCE DEPARTEMENTS
            'AIN' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='001' and pays.ID_CONTINENT='5'"
            ),
    
            'AISNE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='002' and pays.ID_CONTINENT='5'"
            ),

            'ALLIER' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='003' and pays.ID_CONTINENT='5'"
            ),
    
            'ALPES_DE_HAUTE_PROVENCE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='004' and pays.ID_CONTINENT='5'"
            ),

            'HAUTES_ALPES' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='005' and pays.ID_CONTINENT='5'"
            ),

            'ALPES_MARITIMES' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='006' and pays.ID_CONTINENT='5'"
            ),
    
            'ARDECHE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='007' and pays.ID_CONTINENT='5'"
            ),

            'ARDENNES' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='008' and pays.ID_CONTINENT='5'"
            ),

            'ARIEGE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='009' and pays.ID_CONTINENT='5'"
            ),
    
            'AUBE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='010' and pays.ID_CONTINENT='5'"
            ),
    
            'AUDE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='011' and pays.ID_CONTINENT='5'"
            ),

            'AVEYRON' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='012' and pays.ID_CONTINENT='5'"
            ),
    
            'BOUCHES_DU_RHONE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='013' and pays.ID_CONTINENT='5'"
            ),
    
            'CALVADOS' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='014' and pays.ID_CONTINENT='5'"
            ),
    
            'CANTAL' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='015' and pays.ID_CONTINENT='5'"
            ),

            'CHARENTE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='016' and pays.ID_CONTINENT='5'"
            ),
    
            'CHARENTE_MARITIME' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='017' and pays.ID_CONTINENT='5'"
            ),

            'CHER' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='018' and pays.ID_CONTINENT='5'"
            ),

            'CORREZE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='019' and pays.ID_CONTINENT='5'"
            ),

            'CORSE_DU_SUD' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='020' and pays.ID_CONTINENT='5'"
            ),
            //NB les RNE de Haute-Corse commencent par 720    
            'HAUTE-CORSE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='720' and pays.ID_CONTINENT='5'"
            ),

            'COTE_D_OR' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='021' and pays.ID_CONTINENT='5'"
            ),
    
            'COTES_D_ARMOR' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='022' and pays.ID_CONTINENT='5'"
            ),
    
            'CREUSE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='023' and pays.ID_CONTINENT='5'"
            ),

            'DORDOGNE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='024' and pays.ID_CONTINENT='5'"
            ),
    
            'DOUBS' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='025' and pays.ID_CONTINENT='5'"
            ),
    
            'DROME' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='026' and pays.ID_CONTINENT='5'"
            ),
    
            'EURE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='027' and pays.ID_CONTINENT='5'"
            ),

            'EURE_ET_LOIR' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='028' and pays.ID_CONTINENT='5'"
            ),
    
            'FINISTERE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='029' and pays.ID_CONTINENT='5'"
            ),

            'GARD' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='030' and pays.ID_CONTINENT='5'"
            ),

            'HAUTE_GARONNE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='031' and pays.ID_CONTINENT='5'"
            ),
    
            'GERS' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='032' and pays.ID_CONTINENT='5'"
            ),

            'GIRONDE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='033' and pays.ID_CONTINENT='5'"
            ),

            'HERAULT' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='034' and pays.ID_CONTINENT='5'"
            ),
    
            'ILLE_ET_VILAINE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='035' and pays.ID_CONTINENT='5'"
            ),
    
            'INDRE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='036' and pays.ID_CONTINENT='5'"
            ),

            'INDRE_ET_LOIRE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='037' and pays.ID_CONTINENT='5'"
            ),
    
            'ISERE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='038' and pays.ID_CONTINENT='5'"
            ),
    
            'JURA' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='039' and pays.ID_CONTINENT='5'"
            ),
    
            'LANDES' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='040' and pays.ID_CONTINENT='5'"
            ),

            'LOIR_ET_CHER' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='041' and pays.ID_CONTINENT='5'"
            ),
    
            'LOIRE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='042' and pays.ID_CONTINENT='5'"
            ),

            'HAUTE_LOIRE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='043' and pays.ID_CONTINENT='5'"
            ),

            'LOIRE_ATLANTIQUE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='044' and pays.ID_CONTINENT='5'"
            ),
    
            'LOIRET' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='045' and pays.ID_CONTINENT='5'"
            ),

            'LOT' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='046' and pays.ID_CONTINENT='5'"
            ),

            'LOT_ET_GARONNE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='047' and pays.ID_CONTINENT='5'"
            ),
    
            'LOZERE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='048' and pays.ID_CONTINENT='5'"
            ),
    
            'MAINE_ET_LOIRE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='049' and pays.ID_CONTINENT='5'"
            ),

            'MANCHE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='050' and pays.ID_CONTINENT='5'"
            ),
    
            'MARNE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='051' and pays.ID_CONTINENT='5'"
            ),
    
            'HAUTE_MARNE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='052' and pays.ID_CONTINENT='5'"
            ),

            'MAYENNE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='053' and pays.ID_CONTINENT='5'"
            ),
    
            'MEURTHE_ET_MOSELLE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='054' and pays.ID_CONTINENT='5'"
            ),

            'MEUSE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='055' and pays.ID_CONTINENT='5'"
            ),

            'MORBIHAN' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='056' and pays.ID_CONTINENT='5'"
            ),
    
            'MOSELLE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='057' and pays.ID_CONTINENT='5'"
            ),

            'NIEVRE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='058' and pays.ID_CONTINENT='5'"
            ),

            'NORD' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='059' and pays.ID_CONTINENT='5'"
            ),
    
            'OISE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='060' and pays.ID_CONTINENT='5'"
            ),
    
            'ORNE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='061' and pays.ID_CONTINENT='5'"
            ),

            'PAS_DE_CALAIS' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='062' and pays.ID_CONTINENT='5'"
            ),
    
            'PUY_DE_DOME' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='063' and pays.ID_CONTINENT='5'"
            ),
    
            'PYRENEES_ATLANTIQUES' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='064' and pays.ID_CONTINENT='5'"
            ),
    
            'HAUTES_PYRENEES' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='065' and pays.ID_CONTINENT='5'"
            ),

            'PYRENEES_ORIENTALES' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='066' and pays.ID_CONTINENT='5'"
            ),
    
            'BAS_RHIN' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='067' and pays.ID_CONTINENT='5'"
            ),

            'HAUT_RHIN' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='068' and pays.ID_CONTINENT='5'"
            ),

            'RHONE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='069' and pays.ID_CONTINENT='5'"
            ),
    
            'HAUTE_SAONE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='070' and pays.ID_CONTINENT='5'"
            ),

            'SAONE_ET_LOIRE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='071' and pays.ID_CONTINENT='5'"
            ),

            'SARTHE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='072' and pays.ID_CONTINENT='5'"
            ),
    
            'SAVOIE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='073' and pays.ID_CONTINENT='5'"
            ),
    
            'HAUTE_SAVOIE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='074' and pays.ID_CONTINENT='5'"
            ),

            'PARIS' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='075' and pays.ID_CONTINENT='5'"
            ),
    
            'SEINE_MARITIME' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='076' and pays.ID_CONTINENT='5'"
            ),
    
            'SEINE_ET_MARNE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='077' and pays.ID_CONTINENT='5'"
            ),
    
            'YVELINES' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='078' and pays.ID_CONTINENT='5'"
            ),

            'DEUX_SEVRES' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='079' and pays.ID_CONTINENT='5'"
            ),
    
            'SOMME' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='080' and pays.ID_CONTINENT='5'"
            ),

            'TARN' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='081' and pays.ID_CONTINENT='5'"
            ),

            'TARN_ET_GARONNE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='082' and pays.ID_CONTINENT='5'"
            ),
    
            'VAR' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='083' and pays.ID_CONTINENT='5'"
            ),

            'VAUCLUSE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='084' and pays.ID_CONTINENT='5'"
            ),

            'VENDEE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='085' and pays.ID_CONTINENT='5'"
            ),
    
            'VIENNE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='086' and pays.ID_CONTINENT='5'"
            ),
    
            'HAUTE_VIENNE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='087' and pays.ID_CONTINENT='5'"
            ),

            'VOSGES' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='088' and pays.ID_CONTINENT='5'"
            ),
    
            'YONNE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='089' and pays.ID_CONTINENT='5'"
            ),
    
            'TERRITOIRE_DE_BELFORT' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='090' and pays.ID_CONTINENT='5'"
            ),
    
            'ESSONNE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='091' and pays.ID_CONTINENT='5'"
            ),

            'HAUTS_DE_SEINE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='092' and pays.ID_CONTINENT='5'"
            ),
    
            'SEINE_SAINT_DENIS' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='093' and pays.ID_CONTINENT='5'"
            ),
    
            'VAL_DE_MARNE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='094' and pays.ID_CONTINENT='5'"
            ),

            'VAL_D_OISE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0000'  and villes.DEP='095' and pays.ID_CONTINENT='5'"
            ),
    
            'GUADELOUPE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0971'  and villes.DEP='971' and pays.ID_CONTINENT='2'"
            ),
    
            'GUYANE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0973'  and villes.DEP='973' and pays.ID_CONTINENT='3'"
            ),

            'LA_REUNION' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0974'  and villes.DEP='974' and pays.ID_CONTINENT='1'"
            ),
    
            'MARTINIQUE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0972'  and villes.DEP='972' and pays.ID_CONTINENT='2'"
            ),

            'NOUVELLE_CALEDONIE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0975'  and villes.DEP='975' and pays.ID_CONTINENT='6'"
            ),
                
            'POLYNESIE_FRANCAISE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0976'  and villes.DEP='976' and pays.ID_CONTINENT='6'"
            ),
                
            'MAYOTTE' => array(
                'type' => "liste",
                'valeur' => "and pays.ID_PAYS='0977'  and villes.DEP='977' and pays.ID_CONTINENT='1'"
            )
            ];

