<!DOCTYPE html>
<html lang="de">

<head>
	<meta charset="utf-8">
	<title>Hauptspielbildschirm</title>
</head>
	
<body>

<!-- Rundeninfo -->
	<fieldset>
	<p>Spieler {echo} hat {echo} erforscht</p>
	<p>Spieler {echo} ist am Zug</p>
	<p>Runde {echo}/{echo}</p>
	</fieldset>
  
</body>

</html>

<!--
===================================
=== Feedback Alpers, 2016-11-11 ===
===================================

XXIX. Rundeninfo
134 - Text/Spieler xy ist am Zug
136 - Text/Patent xy erfolgreich erforscht und verkauft
205 - Text/Runde x von y

== a) Wie bei den übrigen Gruppen: Gruppe, nicht HTML-Dokument

== b) Fieldset?

== c) Fehlerhafter PHP-Container

PHP wird nicht innerhalb von { } in ein HTML-Dokument eingefügt.

0 Pk. (HTML-Dokument, keine Gruppe)

-->