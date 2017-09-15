# User Guide für das Plugin Ingenico ZVT

Mit dem Plugin Ingenico ZVT verbinden Sie das stationäre Terminal iPP480 mit Drucker des Geräteherstellers Ingenico über das ZVT-Protokoll mit der Kassensoftware plentymarkets POS. 

Um das Ingenico-Gerät mit plentymarkets POS nutzen zu können, benötigen Sie:

* Ingenico iPP480 mit Drucker, Betriebsart **ZVT**, Verbindungsart **TCP/IP**
* Service-Vertrag mit einem Provider
* plentymarkets POS Kasse
* Mobiles Gerät, auf der die plentymarkets App installiert ist

<div class="alert alert-warning" role="alert">
   <strong><i>Hinweis:</strong></i> Um das Gerät mit plentymarkets POS zu verbinden, benötigen Sie die <b>Terminal-IP</b> und den <b>Port</b> des iPP480-Terminals. Diese Gerätedaten sind nur nach Eingabe des Techniker-Passworts auf dem Gerät zugänglich. Teilen Sie daher Ihrem Payment Provider rechtzeitig mit, dass Sie diese Daten benötigen, um das Terminal mit Ihrer Kassensoftware zu verbinden.
</div>

Weitere Informationen zur Einrichtung und den Hardware-Anforderungen von plentymarkets POS finden Sie im [plentymarkets Handbuch](https://knowledge.plentymarkets.com/omni-channel/pos/pos-einrichten).

<div class="container-toc"></div>

## Zahlungsart für POS aktivieren

Nachdem Sie das Payment-Plugin bereitgestellt haben, aktivieren Sie die Zahlungsart im plentymarkets Backend, damit über das Ingenico-Gerät eingehende POS-Aufträge korrekt abgewickelt werden.

##### Zahlungsart Ingenico (ZVT) für POS aktivieren:

1. Öffnen Sie das Menü **Einstellungen » Mandant (Shop) » Standard » POS » Tab: Zahlungsart**.
2. Wählen Sie für die Option **Anbindung** die Einstellung **Ingenico (ZVT)**.
3. **Speichern** Sie die Einstellungen.<br />
→ Die Zahlungsart ist aktiv.

## Terminal mit der Kasse verbinden

Die Verbindung zwischen Terminal und Kasse stellen Sie über die plentymarkets App her. Sie benötigen die Terminal-IP und den Port des Terminals, um die Verbindung herzustellen. Diese Daten erhalten Sie von Ihrem Payment-Provider.

##### Terminal mit der Kasse verbinden:

1. Öffnen Sie das Menü **plentymarkets App  » Einstellungen » POS beta**.
2. Geben Sie die **Terminal-IP** ein.
3. Geben Sie den **Port** des Terminals ein.
3. **Speichern** Sie die Einstellungen.<br />
→ Das Terminal wird mit der Kasse verbunden.

## Lizenz

Das gesamte Projekt unterliegt der GNU AFFERO GENERAL PUBLIC LICENSE – weitere Informationen finden Sie in der [LICENSE.md](https://github.com/plentymarkets/plugin-etsy/blob/master/LICENSE.md).
