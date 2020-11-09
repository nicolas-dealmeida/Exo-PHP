<?php


Function Moyenne() // Fonction permetant de calculer une moyenne avec PHP. Source : http://www.zone-webmasters.net/codes-sources/php/48-calculer-une-moyenne.html
{ 
	$Nombres = func_get_args(); 
	$Nb = sizeof($Nombres);
	$Somme = 0; 
	foreach ($Nombres as $Valeur)
	{ 
		$Somme += $Valeur; 
	} 
	return ($Somme / $Nb); 
} 


// TABLEAU 1
Function TABLEAU1() {
    echo '
        <table>
            <thead>
                <tr>
                    <th>Entête 1</th>
                    <th>Entête 2</th>
                    <th>Entête 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>VA 1</td>
                    <td>VB 1</td>
                    <td>VC 1</td>
                </tr>
                <tr>
                    <td>VA 2</td>
                    <td>VB 2</td>
                    <td>VC 2</td>
                </tr>
            </tbody>
        </table>
    ';
};

if(isset($Entete1)) {
    $C = $_POST['C'];
}


// TABLEAU 2
Function TABLEAU2($Entete1,$Entete2,$Entete3) {
    echo '
        <table>
            <thead>
                <tr>
                    <th>';
    if(isset($Entete1)) {
        echo $Entete1;
    };
    echo '</th><th>';
    if(isset($Entete2)) {
        echo $Entete2;
    };
    echo '</th><th>';
    if(isset($Entete3)) {
        echo $Entete3;
    };
    echo '
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>VA 1</td>
                    <td>VB 1</td>
                    <td>VC 1</td>
                </tr>
                <tr>
                    <td>VA 2</td>
                    <td>VB 2</td>
                    <td>VC 2</td>
                </tr>
            </tbody>
        </table>
    ';
};


// TABLEAU 3
Function TABLEAU3($VA1,$VA2,$VA3,$MOYENNE) {
    echo '
        <table>
            <thead>
                <tr>
                    <th>Valeurs :</th>
                    <th>
        ';
    echo $VA1;
    echo '
                    </th>
                    <th>
        ';
    echo $VA2;
    echo '
                    </th>
                    <th>
        ';
    echo $VA3;
    echo '
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Moyenne :</td>
                    <td colspan="3">
        ';
    echo $MOYENNE;
    echo '
                    </td>
                </tr>
            </tbody>
        </table>
    ';
};


?>
