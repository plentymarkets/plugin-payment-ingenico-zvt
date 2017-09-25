# User guide for the Ingenico ZVT plugin

The Ingenico ZVT plugin allows you to connect a stationary payment terminal with printer by the device manufacturer Ingenico with the POS software plentymarkets POS using the ZVT protocol. 

To use the Ingenico device with plentymarkets POS, you need the following:

* Ingenico terminal with printer, operating mode **ZVT**, connection type **TCP/IP** 
* Service contract with a payment provider 
* plentymarkets POS 
* Mobile device on which the plentymarkets app is installed

<div class="alert alert-warning" role="alert">
   <strong><i>Note:</i></strong> To connect the terminal with plentymarkets POS, you need the <b>Terminal IP</b> and the <b>port</b> of the Ingenico terminal. This information only can be accessed by entering the technical support password on the device. As such, let your payment provider know early on that you need this information to connect the device to your POS software.
</div>

Check the [plentymarkets manual](https://knowledge.plentymarkets.com/omni-channel/pos/pos-einrichten) for further information on hardware requirements and setting up plentymarkets POS.

<div class="container-toc"></div>

## Activating the payment method for a POS

Once you have provisioned the payment plugin, activate the payment method in the plentymarkets back end to make sure that POS orders are processed correctly.

##### Activating the payment method Ingenico (ZVT) for a POS:

1. Go to **Settings » Client (store) » Standard » POS » POS » Tab: Payment method**.
2. For the option **Connectivity**, select the setting **Ingenico (ZVT)**.
3. **Save** the settings.<br /> 
→ The payment method is active.

## Connecting the payment terminal with a POS

The connection between the payment terminal and the POS is established in the plentymarkets app. You also need the terminal IP and the port of the payment terminal to establish the connection.

##### Connecting the payment terminal with a POS:

1. Go to **plentymarkets App » Settings » POS**.
2. Enter the **terminal IP**.
3. Enter the **port** of the payment terminal.
4. Place a check mark to **Print payment receipt on terminal**. If the option is not checked, the payment receipt is printed on the receipt printer.
5. **Save** the settings.
6. Tap **Test terminal connection** to check the connection.

## License

This project is licensed under the GNU AFFERO GENERAL PUBLIC LICENSE. – find further information in the [LICENSE.md](https://github.com/plentymarkets/plugin-etsy/blob/master/LICENSE.md).
