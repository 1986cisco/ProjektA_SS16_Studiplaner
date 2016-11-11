<!DOCTYPE html>
<html lang="de">

<head>
	<meta charset="utf-8">
	<title>Hauptspielbildschirm</title>
</head>
	
<body>
<!-- Führt zu den Hauptspielaktionsmöglichkeiten -->
	<fieldset>
		<input type=button value="Forschung">
		<input type=button value="Produktion">
		<input type=button value="Rohstoffmarkt">
		<input type=button value="Schwarzmarkt">
		<input type=button value="Spielerhandel">
	</fieldset>
</body>

</html>

<!--
===Feedback Turing1887(Dein bro Timbo und so)===
Also wenn du die <input> Elemente nur hast um auf eine andere Seite zu gelangen, solltest du vielleicht lieber <a> als Links benutzen.
Denn <input> wird eigentlich benutzt um in einem Formular validiert zu werden :) dann kannst du mit <a href="deineSeiteHier.php"> einfach zu der Seite kommen. 
-->

<!--
===================================
=== Feedback Alpers, 2016-11-11 ===
===================================

Zum Vergleich:

XI. Aktionsleiste
51 - Schaltfläche mit Image/führt zum Forschungsbildschirm
52 - Label/Forschungsstätte
53 - Schaltfläche mit Image/führt zum Produktionsbildschirm
54 - Label/Produktionsstätte
55 - Schaltfläche mit Image/führt zum Rohstoffmarktbildschirm
56 - Label/Rohstoffmarkt
57 - Schaltfläche mit Image/führt zum Schwarzmarktbildschirm
58 - Label/Schwarzmarkt
206 - Schaltfläche mit Image/führt zum Spielerhandelbildschirm
207 - Label/Spielerhandel

=== a) Gruppe/Microservice, nicht HTML-Dokument

Das bedeutet, dass hier (wie generell in allen Gruppen) Doctype Declaration, Head u.a. nicht eingetragen werden sollen. Denn die gehören in ein vollständiges HTML-Dokument, während die Gruppen/Microservices HTML-Fragmente sind, die wie Puzzlestücke in ein HTML-Dokument eingebunden werden sollen.

=== b) Umsetzung muss konsistent zur strukt.html sein.

In der Definition der Gruppe haben Sie Labels und Schaltflächen vorgegeben und nichts anderes. Hier dagegen haben Sie einen Fieldset-Container umgesetzt und die Labels weggelassen. (Wobei die in dieser Form überflüssig sind: Wenn wir ein Formular verwenden sind sie richtig, wenn wir dagegen Schaltflächen nutzen, machen sie keinen Sinn.)

Deshalb 0 Pk.
-->