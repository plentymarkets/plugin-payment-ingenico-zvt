# User guide for the Ingenico ZVT plugin

The Ingenico ZVT plugin allows you to connect a stationary payment terminal with printer by the device manufacturer Ingenico with the POS software plentymarkets POS using the ZVT protocol.

To use the Ingenico device with plentymarkets POS, you need the following:

* Ingenico terminal with printer, operating mode **ZVT**, connection type **TCP/IP**, bock print **Ein** (**On**)
* Service contract with a payment provider
* plentymarkets POS
* Mobile device on which the plentymarkets app is installed

<div class="alert alert-warning" role="alert">
To connect the terminal with plentymarkets POS, you need the <b>Terminal IP</b> and the <b>port</b> of the Ingenico terminal. This information only can be accessed by entering the technical support password on the device. As such, let your payment provider know early on that you need this information to connect the device to your POS software.
</div>

Check the [plentymarkets manual](https://knowledge.plentymarkets.com/omni-channel/pos/pos-einrichten) for further information on hardware requirements and setting up plentymarkets POS.

<div class="container-toc"></div>

## Activating the payment method for a POS

Once you have provisioned the payment plugin, activate the payment method in the plentymarkets back end to make sure that POS orders are processed correctly.

##### Activating the payment method Ingenico (ZVT) for a POS:

1. Go to **Settings » Client (store) » Standard » POS » POS » Tab: Payment method**.
2. For the option **Connectivity**, select the setting **Ingenico (ZVT)**. <br />
<b><i>Tip:</i></b> If the option **Ingenico (ZVT)** is not shown, you need to provision the plugin to continue.
3. **Save** the settings.<br /> → The payment method is active.

## Connecting the payment terminal with a POS

The connection between the payment terminal and the POS is established in the plentymarkets app. You also need the terminal IP and the port of the payment terminal to establish the connection.

##### Connecting the payment terminal with a POS:

1. Go to **plentymarkets App » Settings » POS**.
2. Carry out the settings. Pay attention to the information given in table 1. <br />
<b><i>Note:</i></b> To connect the same terminal to more than one POS,  you need to select the same settings for all these POS.
3. **Save** the settings.
4. Tap **Test terminal connection** to check if the connection can be established.

<table>
<caption>Table 1: Connecting the ZVT terminal</caption>
<thead>
<th>Setting</th>
<th>Explanation</th>
</thead>
<tbody>
<tr>
<td>**Terminal IP**</td>
<td>Enter the IP of the Ingenico card terminal. <br /> <b><i>Tip:</i></b> The IP can be accessed by entering the technical support password on the device.</td>
</tr>
<tr>
<td>**Port**</td>
<td>Enter the port of the Ingenico card terminal.<br /> <b><i>Tip:</i></b> The Port can be accessed by entering the technical support password on the device.</td>
</tr>
<tr>
<td>**Print terminal receipts on terminal**</td>
<td>Activate to print receipts for card payments and Ingenico z reports on the card terminal's printer. If you do not activate this option, terminal receipts are printed on the receipt printer connected to the POS. <br />
<b><i>Note:</i></b> To print receipts for card payments and Ingenico z reports on the POS receipt printer, you need to set the operating mode option **Block print** to **Ein** (**On**). This setting requires entering the device's technical support password.</td>
</tr>
<tr>
<td>**Include order items on merchant receipt**</td>
<td>Activate to print items of the order on the seller receipt.<br /> <b><i>Tip:</i></b> This setting is only available if the option **Print terminal receipts on terminal** is not activated.</td>
</tr>
<tr>
<td>**Include POS receipt no. on merchant receipt**</td>
<td>Activate to print the plentymarkets POS receipt number on the seller receipt.<br />
<b><i>Tip:</i></b> This setting is only available if the option **Print terminal receipts on terminal** is not activated.</td>
</tr>
<tr>
<td>**Test terminal connection**</td>
<td>Tests if the connection to the card terminal can be established.</td>
</tr>
</tbody>
</table>

## Creating a z report

Z reports are called Z totals on your Ingenico device. A Z total transmits all card revenues saved on the terminal to the payment provider (clearing). For further information on Z totals, refer to the user guide of your Ingenico device. Instead of creating separate Z totals, you can also trigger the Ingenico Z total at the same time as you trigger the z report in plentymarkets POS. Proceed as described below:

##### Creating both plentymarkets POS z report and payment terminal z report:

1. Tap **Z report** in the POS menu. <br />
 → The expected amount of cash on hand is displayed.
 2. Count the actual cash on hand and enter this amount.
 3. Tap **Yes** for **Also create z report for terminal?**. <br />
 → The plentymarkets POS Z report is imported to plentymarkets and saved in the **Orders » Document archive** menu. <br />
  → The card revenues are transmitted to the payment provider. <br />
  → The Z total for the terminal is printed. <br />
  → The terminal's revenue counter is reset to zero.

## License

This project is licensed under the GNU AFFERO GENERAL PUBLIC LICENSE. – find further information in the [LICENSE.md](https://github.com/plentymarkets/plugin-etsy/blob/master/LICENSE.md).
