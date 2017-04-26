@extends('appAdmin')

@section('page-styles')
<style type="text/css">
            .schedulefeestab{
                text-decoration:underline;
                font-weight:bold;	
            }
	</style>
@endsection

@section('page-scripts')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-9">
                    <h2 class="page-head" style="color:rgb(0,90,170)">Schedule of Fees</h2>
					   <div style="border:3px solid rgb(0,82,165);">
					</div>
					<br />
	                <img class="aligncenter size-full wp-image-210" title="sof 11-1-2011" src="/assets/img/portal/handbook.jpg" alt="" width="901" height="541" />
                    <h2 class="page-head" style="color:rgb(0,90,170)">Index for the Schedule of Fees</h2>
                <br />
                <p><strong>A. </strong>The Discount Rate is a percentage of the electronic transaction each merchant pays to the processing bank. AmeriBanc’s discount rate for a swiped credit card and debit card (retail) transaction is 1.29% as of October 1st, 2011. This would equal $1.29 on a $100 transaction which is much lower than the industry average of 1.6835%.</p>
                 
                <p><strong>B. </strong>Surcharges are added onto the qualified discount rate based on a specific type of card being taken. Many cards have Rewards/Miles/Cash Back attached to them, so Visa/MasterCard have increased fees for these transactions to be taken, and they are called Partially qualified, or also referred to as Mid-Qualified. These cards are built to incent the user to use the card more often, and for increased amounts which is how the merchant benefits. Non-Qualified cards can be Foreign issued cards, Government issued cards or corporate level cards. These surcharges are standard in the industry and are deemed by Visa and MasterCard as higher cost cards.</p>
                 
                <p><strong>C. </strong>The Transaction/Communication fee is the cost of processing money through the worldwide Visa/MasterCard/Discover system. ABN’s Communication fee is 19 cents per transaction. Many times you see these referred to on other statements as WATS fees, Authorization fees, Per Item fees, and others, but all refer to the same cost. American Express is a separate company that sets their own rates. Never quote a rate other than Visa/MasterCard or Discover. AmeriBanc National will simply program the merchant’s American Express merchant ID number into our equipment as a courtesy to the merchant. This means the merchant does not need separate equipment for any other processing needs.</p>
                
                <p><strong>D. </strong>This is the hard cost for each transaction from Visa/MasterCard/Discover on both credit cards and debit cards. It is added to each transaction on a per transaction basis.</p>
                
                <p><strong>E. </strong>The $25 Monthly Minimum is the minimum cost to the merchant for the processing of the transactions they take during any given month. Easily explained: as a processor, we have a hard cost for a processing account of $25 for any given merchant, before we realize any profit. If a merchant would process $1700 at 1.29%, their cost would be $21.93. AmeriBanc would add $3.07 to their bill because it was under the ‘Monthly Minimum’. It is not an additional $25, but a break even line for us that once a merchant is beyond, it becomes irrelevant, which is true for 98% of all merchants.</p>
                
                <p><strong>F. </strong>The Monthly Service fee of $15.00 supports the Customer Service and Support departments, as well as the online reporting and processing of the merchant’s funds.</p>
                
                <p><strong>G. </strong>The Compliance Program is an insurance covering the merchant up to $25,000 in card association assessments, liability and related expenses that may arise from a PCI Data breach where the merchant may be found liable. AmeriBanc absorbs the cost of this for the first 12 months for new merchants.</p>
                
                <p><strong>H. </strong>The Debit Service fee is to open up the ability to take debit cards at a lower rate structure for the merchant.</p>
                
                <p><strong>I. </strong>No Termination Fee forces us, as a processor, to earn the merchant as a customer the same way they need to earn their customers, each and every time we work with them.</p>
                
                <p><strong>J. </strong>The Annual Fee, which is $95.00, is assessed in January of each year. This fee can be and is often used as a sales tool by your RSSM to assist in closing sales with you.</p>
                
                <p><strong>K. </strong>Internet Gateway is $19.95 if the merchant is going to be processing through a website or on the internet. This fee provides the secure payment environment for their internet customers to enter credit card information.</p>
                
                <p><strong>L. </strong>Wireless Service is $19.95 per month and is filled in when a merchant is receiving a wireless terminal. This is the cost of the activated wireless service so the terminal has signal and can transact.</p>
                
                <p><strong>M. </strong>Internet Gateway per transaction is 0.10 cents and filled in when the merchant is processing through the internet or a website.</p> 
                
                <p><strong>N. </strong>Wireless per Transaction fee is 0.10 cents and filled in when the merchant is going to be using a Wireless Terminal (iWL255)</p>

            </div>
        </div>
    </div>
</div>

@endsection
