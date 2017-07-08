// ========= Werte/Ergebnisse ermitteln =============

// ----- BALANCE -----
$valBA = valueMean('LL04', array('1', '2', '3', '4', '5', '6'));
// z-Transformation
$zValBA = ($valBA -4.53 ) / 0.73;

// ----- COPING -----
$valCO = valueMean('LL04', array('7', '8', '9', '10', '11', '12', '13'));
// z-Transformation
$zValCO = ($valCO - 3.80) / 0.70;

// ----- GELASSENHEIT -----
$valGE = valueMean('LL04', array('14', '15', '16', '17', '18', '19'));
// z-Transformation
$zValGE = ($valGE - 3.50 ) / 0.96;

// ----- GENUSS -----
$valGS = valueMean('LL04', array('20', '21', '22', '23', '24', '25', '26', '27'));
// z-Transformation
$zValGS = ($valGS - 4.41 ) / 0.72;

// ----- KÖRPERLICHE SELBSTFÜRSORGE -----
$valKO = valueMean('LL04', array('28', '29', '30', '31', '32', '33'));
// z-Transformation
$zValKO = ($valKO - 4.23) / 0.86;

// ----- VEREINBARKEIT V. LEBENSBEREICHEN -----
$valVL = valueMean('LL04', array('34', '35', '36', '37', '38'));
// z-Transformation
$zValVL = ($valVL - 4.16) / 0.60;

// ----- OFFENHEIT-----
$valOF = valueMean('LL04', array('39', '40', '41', '42', '43', '44', '45'));
// z-Transformation
$zValOF = ($valOF - 4.37 ) / 0.72;

// ----- OPTIMIERUNG -----
$valOP = valueMean('LL04', array('46', '47', '48', '49', '50', '51', '52', '53'));
// z-Transformation
$zValOP = ($valOP - 4.19) / 0.57;

// ----- POSITIVE LEBENSEINSTELLUNG -----
$valPO = valueMean('LL04', array('54', '55', '56', '57', '58', '59', '60', '61', '62', '63'));
// z-Transformation
$zValPO = ($valPO - 4.57) / 0.75;

// ----- SELBSTBESTIMMTE LEBENSGESTALTUNG -----
$valSB = valueMean('LL04', array('64', '65', '66', '67', '68', '69', '70'));
// z-Transformation
$zValSB = ($valSB - 4.44) / 0.63;

// ----- SOZIALE KONTAKTE -----
$valSO = valueMean('LL03', array('1', '2', '3', '4', '5', '6', '7', '8', '9'));
// z-Transformation
$zValSO = ($valSO - 4.80) / 0.68;

// ----- SELBSTWIRKSAMKEIT -----
$valSW = valueMean('LL03', array('10', '11', '12', '13', '14', '15', '16', '17'));
// z-Transformation
$zValSW = ($valSW - 4.16) / 0.66;

// ----- SELBSTKENNTNIS -----
$valSK = valueMean('LL03', array('18', '19', '20', '21', '22', '23', '24', '25', '26', '27'));
// z-Transformation
$zValSK = ($valSK - 4.56) / 0.60;

// ----- UMGEBUNGSGESTALTUNG -----
$valUM = valueMean('LL03', array('28', '29', '30', '31', '32', '33'));
// z-Transformation
$zValUM = ($valUM - 4.80) / 0.70;

// ----- SELBSTAKTUALISIERUNG -----
$valSA = valueMean('LL03', array('34', '35', '36', '37', '38', '39', '40', '41'));
// z-Transformation
$zValSA = ($valSA - 4.73 ) / 0.62;

// ----- REFLEXION -----
$valRX = valueMean('LL03', array('42', '43', '44', '45', '46', '47', '48', '49', '50'));
// z-Transformation
$zValRX = ($valRX - 4.67) / 0.66;

// ----- SINN -----
$valSN = valueMean('LL03', array('51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61'));
// z-Transformation
$zValSN = ($valSN - 4.66) / 0.72;


// ========= Werte/Ergebnisse anzeigen =============
text('responseLKz', array(
    '%heading%' => 'Ihre persönliche Auswertung: Ihre Werte im Vergleich zu denen anderer',
    '%valBA%' => $zValBA,
    '%valCO%' => $zValCO,
    '%valGE%' => $zValGE,
    '%valGS%' => $zValGS,
    '%valKO%' => $zValKO,
    '%valVL%' => $zValVL,
    '%valOF%' => $zValOF,
    '%valOP%' => $zValOP, 
    '%valPO%' => $zValPO,
    '%valSB%' => $zValSB,
    '%valSO%' => $zValSO,
    '%valSW%' => $zValSW,
    '%valSK%' => $zValSK,
    '%valUM%' => $zValUM,
    '%valSA%' => $zValSA,
    '%valRX%' => $zValRX,
    '%valSN%' => $zValSN
 ));