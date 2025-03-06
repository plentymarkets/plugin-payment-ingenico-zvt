# User Guide für das Plugin Ingenico ZVT

Mit dem Plugin Ingenico ZVT verbindest du ein stationäres Terminal mit Drucker des Geräteherstellers Ingenico über das ZVT-Protokoll mit der Kassensoftware POS.

Um das Ingenico-Gerät mit POS nutzen zu können, benötigst du:

* Ingenico-Terminal mit Drucker, Betriebsart **ZVT**, Verbindungsart **TCP/IP**, Blockdruck **Ein**
* Service-Vertrag mit einem Payment Provider
* POS Kasse
* Mobiles Gerät, auf dem die POS App installiert ist

<div class="alert alert-warning" role="alert">
    Um das Gerät mit POS zu verbinden, benötigst du die <b>Terminal-IP</b> und den <b>Port</b> des Ingenico-Terminals. Diese Gerätedaten sind nur nach Eingabe des Techniker-Passworts auf dem Gerät zugänglich. Teile deinem Payment Provider daher rechtzeitig mit, dass du diese Daten benötigst, um das Terminal mit deiner Kassensoftware zu verbinden.
</div>

Weitere Informationen zur Einrichtung und den Hardware-Anforderungen von POS findest du im [PlentyONE Handbuch](https://knowledge.plentymarkets.com/de-de/manual/main/pos/pos-einrichten.html#10).

<div class="container-toc"></div>

## Zahlungsart für POS aktivieren

Nachdem du das Payment-Plugin installiert und bereitgestellt hast, aktiviere die Zahlungsart im PlentyONE Backend, damit über das Ingenico-Gerät eingehende POS-Aufträge korrekt abgewickelt werden.

##### Zahlungsart Ingenico (ZVT) für POS aktivieren:

1. Öffne das Menü **Einstellungen » POS » Mandant (Shop) » POS » Tab: Zahlungsart**.
2. Wähle für die Option **Anbindung** die Einstellung **Ingenico (ZVT)**. <br/>
    <b><i>Tipp:</i></b> Wenn die Option **Ingenico (ZVT)** nicht verfügbar ist, wurde das Plugin noch nicht bereitgestellt.
3. **Speichere** die Einstellungen.<br />
→ Die Zahlungsart ist aktiv.

## Terminal mit der Kasse verbinden

Die Verbindung zwischen Terminal und Kasse stellst du über die POS App her. Du benötigst die Terminal-IP und den Port des Terminals, um die Verbindung herzustellen.

##### Terminal mit der Kasse verbinden:

1. Öffne das Menü **POS App » Einstellungen » POS**.
2. Nimm die Einstellungen vor. Beachte Tabelle 1. <br />
    <b><i>Hinweis:</i></b> Wenn dasselbe Terminal an mehr als eine Kasse angebunden werden soll, müssen für alle Kassen dieselben Einstellungen getroffen werden.
3. **Speichere** die Einstellungen.
4. Tippe auf **Terminal-Verbindung testen**, um die Verbindung zu prüfen.

<table>
<caption>Tab. 1: ZVT-Terminal verbinden</caption>
<thead>
<th>Einstellung</th>
<th>Erläuterung</th>
</thead>
<tbody>
<tr>
<td><b>Terminal-IP**</b></td>
<td>IP des Ingenico-Kartenterminals eingeben. <br />
<b><i>Tipp:</i></b> Die IP ist nach Eingabe des Techniker-Passworts auf dem Gerät zugänglich.</td>
</tr>
<tr>
<td><b>Port</b></td>
<td>Port des Ingenico-Kartenterminals eingeben.<br />
<b><i>Tipp:</i></b> Der Port ist nach Eingabe des Techniker-Passworts auf dem Gerät zugänglich.</td>
</tr>
<tr>
<td><b>Terminal-Belege auf Terminal drucken</b></td>
<td>Aktivieren, um Belege für Kartenzahlungen und Ingenico-Tagesberichte auf dem Drucker des Karten-Terminals zu drucken. Wenn die Option nicht aktiviert ist, werden die Terminal-Belege auf dem Belegdrucker der Kasse gedruckt. <br />
<b><i>Hinweis:</i></b> Wenn Belege für Kartenzahlungen und Ingenico-Tagesberichte auf dem Belegdrucker der Kasse gedruckt werden sollen, muss in den Betriebsartoptionen des Terminals die Option <b>Blockdruck</b> auf <b>Ein</b> gestellt werden. Diese Einstellung kann erst vorgenommen werden, nachdem das Techniker-Passwort eingegeben wurde.</td>
</tr>
<tr>
<td><b>Auftragspositionen auf Händlerbeleg ausgeben</b></td>
<td>Aktivieren, um die Positionen des Auftrags auf dem Händlerbeleg darzustellen.<br />
<b><i>Tipp:</i></b> Diese Einstellung greift nur, wenn die Option <b>Terminal-Belege auf Terminal drucken</b> nicht aktiviert ist.</td>
</tr>
<tr>
<td><b>Quittungsnr. auf Händlerbeleg ausgeben</b></td>
<td>Aktivieren, um die POS Belegnummer des Auftrags auf dem Händlerbeleg darzustellen.<br />
<b><i>Tipp:</i></b> Diese Einstellung greift nur, wenn die Option <b>Terminal-Belege auf Terminal drucken</b> nicht aktiviert ist.</td>
</tr>
<tr>
<td><b>Terminal-Verbindung testen</b></td>
<td>Testet, ob die Verbindung zum Karten-Terminal hergestellt werden kann.</td>
</tr>
</tbody>
</table>

## Tagesabschluss/Kassenschnitt durchführen

Der Tagesabschluss heißt bei Ingenico Kassenschnitt. Mit dem ZVT-Kassenschnitt werden alle im Terminal gespeicherten Kartenumsätze an den Netzbetreiber übertragen (Clearing). Weitere Informationen zum Terminal-Kassenschnitt findest du im Handbuch des Ingenico-Geräts. Über POS kannst du den Ingenico-Kassenschnitt auch gleichzeitig mit dem POS Tagesabschluss anstoßen. Gehe dazu wie folgt vor:

##### POS Tagesabschluss und Ingenico-Kassenschnitt gleichzeitig erstellen:

1. Tippe im POS-Menü auf **Tagesabschluss**. <br />
→ Der Soll-Kassenbestand wird eingeblendet.
1. Prüfe den tatsächlichen Kassenbestand und gib diesen Ist-Bestand ein.
2. Tippe bei **Gleichzeitig Tagesabschluss für Terminal erstellen?** auf **Ja**. <br />
→ Der POS Tagesabschluss wird in PlentyONE importiert und im Menü **Aufträge » Dokumentenarchiv** gespeichert. <br />
→ Die Kartenumsätze werden an den Netzbetreiber übertragen. <br />
→ Der Kassenschnittbeleg des Terminals wird gedruckt. <br />
→ Der Umsatzspeicher im Terminal wird auf Null gesetzt.

## Lizenz

Das gesamte Projekt unterliegt der GNU AFFERO GENERAL PUBLIC LICENSE – weitere Informationen findest du in der [LICENSE.md](https://github.com/plentymarkets/plugin-etsy/blob/master/LICENSE.md).
