// ========= Werte/Ergebnisse ermitteln =============

// ----- BALANCE -----
$valBA = valueMean('LL04', array('1', '2', '3', '4', '5', '6'));

// ----- COPING -----
$valCO = valueMean('LL04', array('7', '8', '9', '10', '11', '12', '13'));

// ----- GELASSENHEIT -----
$valGE = valueMean('LL04', array('14', '15', '16', '17', '18', '19'));

// ----- GENUSS -----
$valGS = valueMean('LL04', array('20', '21', '22', '23', '24', '25', '26', '27'));

// ----- KÖRPERLICHE SELBSTFÜRSORGE -----
$valKO = valueMean('LL04', array('28', '29', '30', '31', '32', '33'));

// ----- VEREINBARKEIT V. LEBENSBEREICHEN -----
$valVL = valueMean('LL04', array('34', '35', '36', '37', '38'));

// ----- OFFENHEIT-----
$valOF = valueMean('LL04', array('39', '40', '41', '42', '43', '44', '45'));

// ----- OPTIMIERUNG -----
$valOP = valueMean('LL04', array('46', '47', '48', '49', '50', '51', '52', '53'));

// ----- POSITIVE LEBENSEINSTELLUNG -----
$valPO = valueMean('LL04', array('54', '55', '56', '57', '58', '59', '60', '61', '62', '63'));

// ----- SELBSTBESTIMMTE LEBENSGESTALTUNG -----
$valSB = valueMean('LL04', array('64', '65', '66', '67', '68', '69', '70'));

// ----- SOZIALE KONTAKTE -----
$valSO = valueMean('LL03', array('1', '2', '3', '4', '5', '6', '7', '8', '9'));

// ----- SELBSTWIRKSAMKEIT -----
$valSW = valueMean('LL03', array('10', '11', '12', '13', '14', '15', '16', '17'));

// ----- SELBSTKENNTNIS -----
$valSK = valueMean('LL03', array('18', '19', '20', '21', '22', '23', '24', '25', '26', '27'));

// ----- UMGEBUNGSGESTALTUNG -----
$valUM = valueMean('LL03', array('28', '29', '30', '31', '32', '33'));

// ----- SELBSTAKTUALISIERUNG -----
$valSA = valueMean('LL03', array('34', '35', '36', '37', '38', '39', '40', '41'));

// ----- REFLEXION -----
$valRX = valueMean('LL03', array('42', '43', '44', '45', '46', '47', '48', '49', '50'));

// ----- SINN -----
$valSN = valueMean('LL03', array('51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61'));


// Kleinsten Wert finden

$min  = $valBA;
$minName = 'Balance';

if ($min > $valCO) {
 $min = $valCO;
 $minName = 'Coping';
}; 

if ($min > $valGE) {
 $min = $valGE;
 $minName = 'Gelassenheit';
};

if ($min > $valGS) {
 $min = $valGS;
 $minName = 'Genuss';
};

if ($min > $valKO) {
 $min = $valKO;
 $minName = 'Körperliche Selbstfürsorge';
};

if ($min > $valVL) {
 $min = $valVL;
 $minName = 'Vereinbarkeit von Lebensbereichen';
};

if ($min > $valOF) {
 $min = $valOF;
 $minName = 'Offenheit';
};

if ($min > $valOP) {
 $min = $valOP;
 $minName = 'Optimierung';
};

if ($min > $valPO) {
 $min = $valPO;
 $minName = 'Positive Lebenseinstellung';
};

if ($min > $valSB) {
 $min = $valSB;
 $minName = 'Selbstbestimmte Lebensgestaltung';
};

if ($min > $valSO) {
 $min = $valSO;
 $minName = 'Soziale Kontakte';
};

if ($min > $valSW) {
 $min = $valSW;
 $minName = 'Selbstwirksamkeit';
};

if ($min > $valSK) {
 $min = $valSK;
 $minName = 'Selbstkenntnis';
};

if ($min > $valUM) {
 $min = $valUM;
 $minName = 'Umgebungsgestaltung';
};

if ($min > $valSA) {
 $min = $valSA;
 $minName = 'Selbstaktualisierung';
};

if ($min > $valRX) {
 $min = $valRX;
 $minName = 'Reflexion';
};

if ($min > $valSN) {
 $min = $valSN;
 $minName = 'Sinn';
};

// Größten Wert finden

$max  = $valBA;
$maxName = 'Balance';

if ($max < $valCO) {
 $max = $valCO;
 $maxName = 'Coping';
}; 

if ($max < $valGE) {
 $max = $valGE;
 $maxName = 'Gelassenheit';
};

if ($max < $valGS) {
 $max = $valGS;
 $maxName = 'Genuss';
};

if ($max < $valKO) {
 $max = $valKO;
 $maxName = 'Körperliche Selbstfürsorge';
};

if ($max < $valVL) {
 $max = $valVL;
 $maxName = 'Vereinbarkeit von Lebensbereichen';
};

if ($max < $valOF) {
 $max = $valOF;
 $maxName = 'Offenheit';
};

if ($max < $valOP) {
 $max = $valOP;
 $maxName = 'Optimierung';
};

if ($max < $valPO) {
 $max = $valPO;
 $maxName = 'Positive Lebenseinstellung';
};

if ($max < $valSB) {
 $max = $valSB;
 $maxName = 'Selbstbestimmte Lebensgestaltung';
};

if ($max < $valSO) {
 $max = $valSO;
 $maxName = 'Soziale Kontakte';
};

if ($max < $valSW) {
 $max = $valSW;
 $maxName = 'Selbstwirksamkeit';
};

if ($max < $valSK) {
 $max = $valSK;
 $maxName = 'Selbstkenntnis';
};

if ($max < $valUM) {
 $max = $valUM;
 $maxName = 'Umgebungsgestaltung';
};

if ($max < $valSA) {
 $max = $valSA;
 $maxName = 'Selbstaktualisierung';
};

if ($max < $valRX) {
 $max = $valRX;
 $maxName = 'Reflexion';
};

if ($max < $valSN) {
 $max = $valSN;
 $maxName = 'Sinn';
};


// ========= Werte/Ergebnisse anzeigen =============

text('responseLK', array(
    '%heading%' => 'Auswertung ihrer Daten: Ihre persönlichen Mittelwerte pro Skala',
    '%valBA%' => $valBA,
    '%valCO%' => $valCO,
    '%valGE%' => $valGE,
    '%valGS%' => $valGS,
    '%valKO%' => $valKO,
    '%valVL%' => $valVL,
    '%valOF%' => $valOF,
    '%valOP%' => $valOP, 
    '%valPO%' => $valPO,
    '%valSB%' => $valSB,
    '%valSO%' => $valSO,
    '%valSW%' => $valSW,
    '%valSK%' => $valSK,
    '%valUM%' => $valUM,
    '%valSA%' => $valSA,
    '%valRX%' => $valRX,
    '%valSN%' => $valSN,
    '%min%'    => $min,
    '%minName%' => $minName, 
    '%max%'    => $max,
    '%maxName%' => $maxName
 ));