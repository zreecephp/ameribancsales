@extends('appAdmin')

@section('page-styles')
<style type="text/css">
            .commontermstab{
                text-decoration:underline;
                font-weight:bold;	
            }
	</style>
@endsection

@section('page-scripts')
	
@endsection

@section('content')

<div class="row">
	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-9">
     		 <h2 class="page-head" style="color:rgb(0,90,170)">Common Terms</h2>
			   <div style="border:3px solid rgb(0,82,165);">
            </div>
			 <br />
			<p><strong>Access or APF Fees:</strong> Acquirer Processing Fee. Unveiled by Visa in 2009, the Acquirer Processing Fee is a fee of $0.0195 assessed by Visa for all authorization requests. This fee typically  appears as pass-thru on a merchant&#8217;s monthly billing statements. These are found as Assessment fees on most agreements.</p>
			<p>&nbsp;</p>
			<p><strong>Acquiring Bank: </strong>A bank that contracts with a merchant, as required by card association rules enabling the merchant to accept the association-branded bank cards OR the bank that sponsors a Registered Independent Sales Organization, as allowed per the Card Association Rules and Regulations. Acquirers buy (acquire) the merchant&#8217;s sales slips and credits the tickets&#8217; value to the merchant&#8217;s account.</p>
			<p>&nbsp;</p>
			<p><strong>Association Fees/Dues:</strong> Visa and MasterCard assess Association Dues in the amount of 0.11% on every authorized transaction processed. These Dues go directly to Visa or MasterCard, respectively.</p>
			<p>&nbsp;</p>
			<p><strong>Authorization:</strong> The process of submitting a transaction electronically to the Cardholder&#8217;s Bank for processing. The merchant is essentially issuing a request to charge the amount to the cardholder&#8217;s card. The card issuer or an authorized agent, such as an authorizing processor or a stand-in processor, references the cardholder&#8217;s account status and credit limit and approves or denies the transaction.</p>
			<p>&nbsp;</p>
			<p><strong>AMEX (American Express Company):</strong> A diversified worldwide travel, financial, and network services company, founded by 1850. It supplies charge and credit cards, Traveler&#8217;s Cheques, travel, financial planning, and business services, insurance, and international banking services worldwide. In 1958, it introduced the American Express Card, a &#8220;charge card&#8221; with the entire bill paid in full each month. American Express now offers an array of charge and credit cards. All American Express cards begin with &#8220;3&#8243;.</p>
			<p>&nbsp;</p>
			<p><strong>ATM Card/Debit Card: </strong>A card issued by a bank that can be used at an ATM or can be used at point-of-sale devices to make purchases using funds from a customer&#8217;s checking account. ATM/Debit cards with a bank card logo are accepted according to standard bank card procedures (which include having the cardholder sign a sales slip). These cards are called OFFLINE debit cards. Cards without a bank card logo used acceptance procedures that require the cardholder to use a personal identification number instead of signing a sales slip. These cards are called PIN-BASED or ONLINE debit cards.</p>
			<p>&nbsp;</p>
			<p><strong>Authorization Network:</strong> The Authorization Network is connected to the Card Associations, Issuing Bank and Processor. The Authorization Network submits a transaction inquiry to the Issuing Bank for an approval or decline response on behalf of the cardholder.</p>
			<p>&nbsp;</p>
			<p><strong>AVS:</strong> AVS stands for Address Verification System. Address Verification is the process of verifying the cardholder&#8217;s billing address during a transaction authorization.</p>
			<p>&nbsp;</p>
			<p><strong>AVS Fee:</strong> Some Providers may assess a fee for Address Verification requests.</p>
			<p>&nbsp;</p>
			<p><strong>Basis Points (BP):</strong> One one-hundredth (0.01) of 1 percent, a measurement usually used in interest rates or discount rates. For example, a change from 1.43 percent to 1.50 percent is a change of seven basis points.</p>
			<p>&nbsp;</p>
			<p><strong>Batch:</strong> The accumulation of transactions from a point-of-sale terminal gathered, reconciled, and transmitted for clearing and settlement. Also, the transmission or processing of a group of payment orders at a set interval of time.</p>
			<p>&nbsp;</p>
			<p><strong>Batch Fee:</strong> A fee assessed per batch transaction. Typical Batch fee is $0.25 &#8211; $0.30 per Batch. Most merchants batch once daily. Some Providers will waive the Batch fee.</p>
			<p>&nbsp;</p>
			<p><strong>Capture:</strong> Stage of processing which involves converting the authorization amount into a billable transaction record within a batch. A transaction cannot be captured unless it has first been authorized. Funds will not be presented to Acquiring Bank for transfer to Merchant until a Capture has initiated and submitted in a batch.</p>
			<p>&nbsp;</p>
			<p><strong>Card Association: </strong>Visa and MasterCard are member-based organizations formed to manage the rules, regulations, and process of interchanging plastic card transactions. Their membership consists of issuers, which are responsible for the procurement and management of merchant relationships for card acceptance.</p>
			<p>&nbsp;</p>
			<p><strong>Certify PCI:</strong> A program developed to assist merchants in meeting their PCI requirements. Certify PCI allows merchants to login to a web based PCI Questionnaire and provides live support to merchants who have questions about their PCI. Certify PCI also provides Vulnerability Scans.</p>
			<p>&nbsp;</p>
			<p><strong>Chargeback:</strong> A Chargeback is a dispute of a charge that appears on a cardholder&#8217;s statement. The Chargeback can be initiated by the cardholder through their Issuing Bank (cardholder bank). When a Chargeback is initiated, the funds are immediately debited from the merchant&#8217;s account and held pending the outcome of the dispute. If the Chargeback is found in favor of the merchant, the funds are returned to the merchant.</p>
			<p>&nbsp;</p>
			<p><strong>Downgrade (Interchange Downgrade per Visa, MasterCard, and Discover):</strong> An interchange downgrade occurs when a transaction does not meet all of the criteria set forth by the associations to qualify for the best possible interchange rate. Visa and MasterCard examine each transaction as submitted and qualify for the best possible interchange rate. Visa and MasterCard examine each transaction as submitted and qualify or downgrade it based on the set of criteria established and presented.</p>
			<p>&nbsp;</p>
			<p><strong>Downgrade (Merchant Service Provider Downgrade):</strong> A Merchant Services Provider uses the term &#8220;downgrade&#8221; to refer to any transaction that does not meet the criteria to be processed at the Qualified or Tier 1 Discount Rate presented to the Merchant. Downgrades and the surrounding criteria vary from Provider to Provider.</p>
			<p>&nbsp;</p>
			<p><strong>Interchange:</strong> Fees paid to the Issuing Bank to compensate for transaction-related costs. The processor presents the transactions to the associations (Visa/MasterCard) respectively. The associations then calculate the service fee by individual transaction and determine the net position of due/to and due/from monies. The association then sorts the transactions by Issuing BIN number and sends the transactions to the Issuer for posting to the cardholder&#8217;s account. Compliance criteria for each Interchange category are listed under the unique terminology name. Rates and criteria vary and change frequently. Actual rates and more specific qualification criteria should be obtained by the acquirer. Simplified, it is the cost of transactions from Visa/MasterCard to the processor.</p>
			<p>&nbsp;</p>
			<p><strong>ISO:</strong> Independent Sales Organization. ISO refers to an organization that is permitted to offer Merchant Account Services. Entities must be registered with the Card Association.</p>
			<p>&nbsp;</p>
			<p><strong>Issuing Bank:</strong> A bank that has the ability to issue credit and/or debit cards to individuals.</p>
			<p>&nbsp;</p>
			<p><strong>Member/Merchant Bank:</strong> A bank that contracts with a merchant, as required by card association rules enabling the merchant to accept the association-branded bank cards OR the bank that sponsors a Registered Independent Sales Organization, as allowed per the Card Association Rules and Regulations. Acquirers buy (acquire) the merchant&#8217;s sales slips and credit the tickets&#8217; value to the merchant&#8217;s account.</p>
			<p>&nbsp;</p>
			<p><strong>Misuse of Authorization Fees:</strong> Assessed by the Card Associations for each authorization that does not have a subsequent clearing (settlement/batch) record.</p>
			<p>&nbsp;</p>
			<p><strong>NABU Fees:</strong> NABU stands for Network Access and Brand Usage and is a MasterCard brand fee. The fee is assessed as a pass-through from MasterCard and very few Providers mark up the NABU fee. The NABU fee cost is $0.0185.</p>
			<p>&nbsp;</p>
			<p><strong>PCI DSS Compliance:</strong> The Payment Card Industry (PCI) Data Security Standard (DSS) is a set of requirements for enhancing payment account data security. These standards were developed by the PCI Security Standards Council, which was founded by American Express, Discover Financial Services, JCB International, MasterCard Worldwide and Visa, Inc. to facilitate the industry-wide adoption of consistent data security measures on a global basis. The standard aims to increase awareness and promote best practices in the handling of sensitive information as a means to minimizing identity theft and fraudulent transactions.</p>
			<p>&nbsp;</p>
			<p><strong>PIN Debit:</strong> Also called ONLINE debit. A PIN Debit transaction is a transaction from the use of a debit access card that requires a Personal Identification number to be authorized. It is governed under the rules of the ATM regional debit card networks and is usually made online to the cardholder&#8217;s checking or savings account balance.</p>
			<p>&nbsp;</p>
			<p><strong>Refund:</strong> The process of crediting back the purchase amount or a portion of the purchase amount to the cardholder. A refund should be performed via the same method the purchase amount was submitted. If the customer presented a credit card for the purchase amount, funds that are credited back to the merchant should be credited to the same card presented for the corresponding purchase amount.</p>
			<p>&nbsp;</p>
			<p><strong>Reserve Account:</strong> Some businesses are required by the Provider to establish a reserve account in order to be considered for approval of a merchant account. This may be required due to business type, history, or many other factors. A reserve account will help cover any losses incurred from charge backs or inability to collect discount fees. Reserve account requirements vary greatly from Provider to Provider. Some Providers have a higher risk tolerance than others.</p>
			<p>&nbsp;</p>
			<p><strong>Signature/Offline Debit:</strong> The processing of a debit card without the entry of the PIN number. Due to the card type presented, the transaction is still considered a debit card transaction. An offline debit transaction, however, does not require a PIN pad and does not access the PIN debit networks.</p>
			<p>&nbsp;</p>
			<p><strong>Settlement:</strong> The process of transferring funds for sales and credits between acquirer and issuers, including the final debiting of a cardholder&#8217;s account and the crediting of a merchant&#8217;s account. This is the sixth stage of the seven stages of processing. In this stage, the associations (Visa/MasterCard) calculate the interchange rate due on each transaction. At this time they determine which transactions qualify for certain rates and apply the appropriate rate based on the submitted criteria. (Some transactions can be downgraded to a higher rate if all of the qualifications were not met) The association then determines the net of monies due/to and due/from each member by issuing and acquiring BIN and then make a wire transfer of funds to the members&#8217; bank accounts each day. For acquirers, the net calculations by BIN include less interchange, less chargebacks, less fines, resulting in a net credit to the acquirer. For issuers, the net position will be interchange plus chargebacks less fines less sales, resulting in a net debit to the issuer.</p>
			<p>&nbsp;</p>
			<p><strong>Settlement Network:</strong> Also referred to as the back-end network. The settlement network receives the batch transactions. The transactions are separated into billable items and are submitted to the Issuing Bank for funding. The Issuing Bank posts the charges to their cardholder and funds the Acquiring Bank the amount of the funds due to the merchant, less the fees due for Interchange. The merchant is then funded the gross amount of the transaction less interchange fees and less the fees due to the Merchant Service Provider.</p>
			<p>&nbsp;</p>
			<p><strong>Standalone Terminal:</strong> A terminal used to process credit cards and other electronic transactions that is not connected to any other software programs for access to the authorization networks. A standalone terminal can process over IP or Dial Lines. Examples of a standalone unit are Hypercom&#8217;s models T4220, T4100, and the VeriFone VX570 and Nurit 8000.</p>
			<p>&nbsp;</p>
			<p><strong>Voice Authorization: </strong>An authorization that is obtained by calling in the cardholder transaction data to an 800 number that is available specifically for electronic transaction processing.</p>
			<p>&nbsp;</p>
			<p><strong>Void:</strong> The process of canceling out a transaction that was submitted for authorization but has not been submitted for settlement as part of batch. It may take up to 72 hours for a Void to appear on a cardholder&#8217;s online banking. In a void, the funds are not &#8216;credited back&#8217; to the cardholder but rather, the authorization will expire as a request for capture/settlement isn&#8217;t received by the Issuing Bank within the allotted time frame. A void prevents the transaction from being captured/settled.</p>
			<p>&nbsp;</p>
			<p><strong>Vulnerability Scan:</strong> A scan conducted by an Approved Scanning Vendor that informs the merchant of their network security in relation to the PCI DSS requirements.</p>

		</div>
	</div>
</div>

@endsection
