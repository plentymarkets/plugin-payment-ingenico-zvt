# User Guide für das Plugin Ingenico ZVT

Mit dem Plugin Ingenico ZVT verbinden Sie ein stationäres Terminal mit Drucker des Geräteherstellers Ingenico über das ZVT-Protokoll mit der Kassensoftware plentymarkets POS.

Um das Ingenico-Gerät mit plentymarkets POS nutzen zu können, benötigen Sie:

* Ingenico-Terminal mit Drucker, Betriebsart **ZVT**, Verbindungsart **TCP/IP**
* Service-Vertrag mit einem Provider
* plentymarkets POS Kasse
* Mobiles Gerät, auf dem die plentymarkets App installiert ist

<div class="alert alert-warning" role="alert">
Um das Gerät mit plentymarkets POS zu verbinden, benötigen Sie die <b>Terminal-IP</b> und den <b>Port</b> des Ingenico-Terminals. Diese Gerätedaten sind nur nach Eingabe des Techniker-Passworts auf dem Gerät zugänglich. Teilen Sie daher Ihrem Payment Provider rechtzeitig mit, dass Sie diese Daten benötigen, um das Terminal mit Ihrer Kassensoftware zu verbinden.
</div>

Weitere Informationen zur Einrichtung und den Hardware-Anforderungen von plentymarkets POS finden Sie im [plentymarkets Handbuch](https://knowledge.plentymarkets.com/omni-channel/pos/pos-einrichten).

<div class="container-toc"></div>

## Zahlungsart für POS aktivieren

Nachdem Sie das Payment-Plugin bereitgestellt haben, aktivieren Sie die Zahlungsart im plentymarkets Backend, damit über das Ingenico-Gerät eingehende POS-Aufträge korrekt abgewickelt werden.

##### Zahlungsart Ingenico (ZVT) für POS aktivieren:

1. Öffnen Sie das Menü **Einstellungen » Mandant (Shop) » Standard » POS » Tab: Zahlungsart**.
2. Wählen Sie für die Option **Anbindung** die Einstellung **Ingenico (ZVT)**.<br />
<b><i>Tipp:</i></b> Wenn die Option **Ingenico (ZVT)** nicht verfügbar ist, wurde das Plugin noch nicht bereitgestellt.
3. **Speichern** Sie die Einstellungen.<br />
→ Die Zahlungsart ist aktiv.

## Terminal mit der Kasse verbinden

Die Verbindung zwischen Terminal und Kasse stellen Sie über die plentymarkets App her. Sie benötigen die Terminal-IP und den Port des Terminals, um die Verbindung herzustellen.

##### Terminal mit der Kasse verbinden:

1. Öffnen Sie das Menü **plentymarkets App » Einstellungen » POS**.
2. Nehmen Sie die Einstellungen vor. Beachten Sie Tabelle 1. <br />
<b><i>Hinweis:</i></b> Wenn dasselbe Terminal an mehr als eine Kasse angebunden werden soll, müssen für alle Kassen dieselben Einstellungen getroffen werden.
3. **Speichern** Sie die Einstellungen.
4. Tippen Sie auf **Terminal-Verbindung testen**, um die Verbindung zu prüfen.




<table>
<caption>Tab. 1: ZVT-Terminal verbinden</caption>
<thead>
<th>Einstellung</th>
<th>Erläuterung</th>
</thead>
<tbody>
<tr>
<td>**Terminal-IP**</td>
<td>IP des Ingenico-Kartenterminals eingeben. <br />
<b><i>Tipp:</i></b> Die IP ist nach Eingabe des Techniker-Passworts auf dem Gerät zugänglich.</td>
</tr>
<tr>
<td>**Port**</td>
<td>Port des Ingenico-Kartenterminals eingeben.<br />
<b><i>Tipp:</i></b> Der Port ist nach Eingabe des Techniker-Passworts auf dem Gerät zugänglich.</td>
</tr>
<tr>
<td>**Terminal-Belege auf Terminal drucken**</td>
<td>Aktivieren, um Belege für Kartenzahlungen und Ingenico-Tagesberichte auf dem Drucker des Karten-Terminals zu drucken. Wenn die Option nicht aktiviert ist, werden die Terminal-Belege auf dem Belegdrucker der Kasse gedruckt.</td>
</tr>
<tr>
<td>**Auftragspositionen auf Händlerbeleg ausgeben**</td>
<td>Aktivieren, um die Positionen des Auftrags auf dem Händlerbeleg darzustellen.<br />
<b><i>Tipp:</i></b> Einstellung greift nur, wenn die Option **Terminal-Belege auf Terminal drucken** nicht aktiviert ist.</td>
</tr>
<tr>
<td>**Terminal-Verbindung testen**</td>
<td>Testet, ob die Verbindung zum Karten-Terminal hergestellt werden kann.</td>
</tr>
</tbody>
</table>

## Tagesabschluss/Kassenschnitt durchführen

Der Tagesabschluss heißt bei Ingenico Kassenschnitt. Mit dem ZVT-Kassenschnitt werden alle im Terminal gespeicherten Kartenumsätze an den Netzbetreiber übertragen (Clearing). Weitere Informationen zum Terminal-Kassenschnitt finden Sie im Handbuch des Ingenico-Geräts. Über plentymarkets POS können Sie den Ingenico-Kassenschnitt auch gleichzeitig mit dem plentymarkets POS Tagesabschluss anstoßen. Gehen Sie dazu wie folgt vor:

##### plentymarkets POS Tagesabschluss und Ingenico-Kassenschnitt gleichzeitig erstellen:

1. Tippen Sie im POS-Menü auf **Tagesabschluss**. <br />
→ Der Soll-Kassenbestand wird eingeblendet.
2. Prüfen Sie den tatsächlichen Kassenbestand und geben Sie diesen Ist-Bestand ein.
3. Tippen Sie bei **Gleichzeitig Tagesabschluss für Terminal erstellen?** auf **Ja**. <br />
→ Der plentymarkets POS Tagesabschluss wird in plentymarkets importiert und im Menü **Aufträge » Dokumentenarchiv** gespeichert. <br />
→ Die Kartenumsätze werden an den Netzbetreiber übertragen. <br />
→ Der Kassenschnittbeleg des Terminals wird gedruckt. <br />
→ Der Umsatzspeicher im Terminal wird auf Null gesetzt.

## Lizenz

Das gesamte Projekt unterliegt der GNU AFFERO GENERAL PUBLIC LICENSE – weitere Informationen finden Sie in der [LICENSE.md](https://github.com/plentymarkets/plugin-etsy/blob/master/LICENSE.md).
