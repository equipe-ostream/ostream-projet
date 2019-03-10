
//fonction permettera de changer la photo
function changePhoto(source)
{
        //récupérer l'emplacement pour afficher la photo lors du clique
        var ind= document.getElementsByClassName("maPhoto")[0];

        //affecter la source de la photo cliquée
        ind.src=source;
}

//les fonctions qui permetteront de changer les informations selon chaque personne dans la photo
function changeTextPicture1(source) {
    document.getElementById("mesInformations").innerHTML="Hello my name's mariam";
}

function changeTextPicture2(source) {
    document.getElementById("mesInformations").innerHTML="Hello my name's houda";
}

function changeTextPicture3(source) {
    document.getElementById("mesInformations").innerHTML="Hi I am Jack";
}

function changeTextPicture4(source) {
    document.getElementById("mesInformations").innerHTML="Alright alright";
}

function changeTextPicture5(source) {
    document.getElementById("mesInformations").innerHTML="NO NO NO NO";
}

function changeTextPicture6(source) {
    document.getElementById("mesInformations").innerHTML="HAHAHAHA OK I AM WRITING THS JUST TO PRESENT MYSELF ";
}

function changeTextPicture7(source) {
    document.getElementById("mesInformations").innerHTML="I m happy to be one of you, your amazing team, I am honoured, because I was always obsessed with ocean , ocean is my home";
}

function changeTextPicture8(source) {
    document.getElementById("mesInformations").innerHTML="I am  the boss";
}

//les fonctions qui permetteront de changer le paragraphe selon l'icone cliqué [ partie cycle de fonctionnement ]
function changeTextCamera()
{
    document.getElementById("cycleInformation").innerHTML="I am a camera";
}

function changeTextCorail() {
    document.getElementById("cycleInformation").innerHTML="Du blabla";
}

function changeTextDiffusion() {
    document.getElementById("cycleInformation").innerHTML="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed " +
        "do eiusmod " +
        "tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc" +
        "o laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess" +
        "e cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui offi" +
        "cia deserunt mollit anim id est laborum.";
}

function changeTextConscience() {
    document.getElementById("cycleInformation").innerHTML="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed " +
        "do eiusmod " +
        "tempor incididunt ut labore ";
}

function changeTextDeveloppement() {
    document.getElementById("cycleInformation").innerHTML="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed " +
        "do eiusmod " +
        "tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamc" +
        "o laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess" +
        "e cillum dolore eu fugiat nulla pariat";
}

function changeTextFinancement() {
    document.getElementById("cycleInformation").innerHTML="Du blabla";
}