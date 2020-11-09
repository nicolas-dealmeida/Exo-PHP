<?php

// TABLEAU 1
Function TABLEAU1() {
    Echo '
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

?>
