# RG Fishfeed zComments

Aktueller Stand unter:
http://c4.pluus-design.de

FTP ist unser pluusdeisgn Hosting
Contao Login müsstest du haben.


Anpassungen für das Kommentar-Modul für RG Fishfeed

Lieber Ben

Hier einige Anmerkungen zu meiner Entwicklung.

Funktionsweise
Ich habe der Tabelle tl_comments die Spalte idprodukt hinzugefügt. 
In dem Bewertungsformular wird die eindeutige Id vom Produkt (isotope) in das Feld idprodukt übertragen. 
In dem Templete ce_comments prüfe ich ob es Kommentrae zu dem Produkt gibt und gebe die Kommentarliste entsprechend aus.
= Hier stellt sich die Frage ob es nicht besser ist das in der Comments.php zu erledigen anstatt im Template. Ich denke damit würde man sich eine Abfrage sparen
= Zudem prüfe ich nochmal im Template com_default.html5 ob die IDs übereinstimmen und gebe die Liste aus.



1. Update-Sicher
zComments/classes/Comments.php
/vendor/contao/comments-bundle/src/Resources/contao/classes/Comments.php
Die Comments.php habe ich im Orginalverzeichnis von Contao ersetzt, da ich nicht wusste wie diese im Mudul zu ersetzen ist.


Änderungen in der Datei habe ich mit 
//-----------------------------------------------start
//-----------------------------------------------Ende
gekennzeichnet


2. Template mod_comment_form.html5
Derzeit wird das Formular aus einem Mix aus der Datei Comments.php und Template mod_comment_form.html5
= Ist es nicht besser Das Formular komplett in der Comments.php zu bauen?
= Keine Formular-Fehlermeldung wenn der Nutzer nicht auf ein Stern geklickt hat. 
= Hier Sollte eine Fehlermeldung wie: Bitte Bewerten Sie das Pordukt anhand der Sterne

3. Ausgabe Kommentarliste zu jedem Produkt
Derzeit sehr kompliziert über mehere Abfragen in den Templates = com_default.html5 und ce_comments.html5
= Ist es nicht möglich die Ausgabe entsprechen ID Produkte vorher zu machen? 



Allgemeine Fragen:
01. In Welcher Datei beinflusse ich das Ausgabe Array für das Template?
