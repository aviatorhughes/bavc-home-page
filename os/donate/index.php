<?php include("../../header.inc"); ?>
<head>

<style>
table td:last-child {
    width: 100%
}
table tr {
  border-bottom: 1px solid #ccc !important;
   }
  #paypal-interface{
  /*background: #fff;
  -moz-border-radius: 3px;
  border-radius: 3px;
  border: solid 1px #bcbdc1;
  font-size: 1em;
  padding: 1em 1.3em;*/
  }
  #paypal-interface p{
  margin: 1em 0;
  }
  #paypal-interface span{
  padding-bottom: 5px;
  }
  #paypal-interface select{
  font-family: Arial;
  font-size: 1em;
  width: 30em;
  border: solid 1px;
  }
  #paypal-interface input[type=radio]{
  font-family: Arial;
  font-size: 1em;
  width: auto;
  background: none;
    background:#fff;
  border: solid 1px;
  }
  #paypal-interface input{
  font-family: Arial;
  font-size: 1em;
  width: 13.7em;
  background: none;
  background:#fff;
  border: solid 1px;
  margin-bottom: 10px;
  }
  #paypal-interface label{
    text-align: left;
    padding-left: 10px;
    padding-bottom: 10px;
  }
  #paypal-interface #submit{
  width: 92px;
  height: 26px;
  margin: 0 auto;
  border: 0;
  }
  td.dana_table_heading {
    vertical-align: center;
    font-weight: bold;
    font-size: large;
    width: 90px;
  }

</style>

<!--link rel="stylesheet" href="../../Includes/css/donatePage.css"/-->

</head>
<div class="contentStory" style="padding-top: 15px">

<h2>Dāna - The Parami of Generosity</h2>
<br />
<article>
<p><!--img src="../../Images/DhammaSvcWheelbarrow.jpg" align="right" style="border-radius: 10px; margin:0px 20px;"></img-->
    Dhamma’s value is priceless and should be available to all who want to receive and practice it, regardless of income. For these reasons, all the facilities and activities of the Bay Area Vipassana Center operate solely on a donation basis.
    <br><br>
    When students meditate at a center or rented facility like the East Bay Vipassana Hall or South Bay Vipassana Hall, the costs incurred by their stay have already been paid for by grateful old students. Likewise all grateful old students have the opportunity to donate so these facilities are available to future students. 
    <br><br>
    Even a very small donation can reflect the proper understanding of wishing to give at least something for someone else. This understanding deepens when one realizes that not only is it important to give a donation, but that it should be in line with one’s capacity to give. This capacity will naturally be different for each person, but the wish to help others should be the same. 
    <br><br>
    Donations from those who have completed a ten-day course of Vipassana Meditation as taught by S. N. Goenka in the tradition of Sayagyi U Ba Khin are the only source of funding for courses in this tradition around the world. There is no wealthy foundation or individual sponsoring them. Neither the teachers nor the organizers receive any kind of payment for their service. 
    <br><br>
    Thus, the spread of Dhamma is carried out by grateful old students with purity of purpose, free from any commercialism.
    <br><br>
    Therefore, whether your donation be large or small, let it be with the pure volition: <b><i><q>Because someone else has donated, I have been able to learn Dhamma to purify my mind. I would like others to continue to have the same opportunity. Therefore, let me give something for the benefit of others, according to my means.</q></i></b>
    <br><br>
    Thank you for your volition to help the Dhamma grow in the Bay Area through the Dhamma Halls and courses.
    <br><br>	
</p>
</article><br>
<p><a name="methods" id="methods"></a><b>There are several ways of supporting the Bay Area Vipassana Center:</b></p>

<br />


<script type='text/javascript'>

function fullNameForItem(shortname) {
  switch (shortname) {
    case 'ebvh':
      return 'East Bay Vipassana Hall';
    break;
    case 'sbvh':
      return 'South Bay Vipassana Hall';
    break;
    case 'sfvh':
      return 'San francisco Vipassana Hall';
    break;
    case 'ooc':
      return 'Occidental Course';
    break;
    case 'cc':
      return 'Childrens Courses';
    break;
    case 'naccc':
      return 'North America Childrens Course Committee (NACCC)';
    break;
    case 'centerfund':
      return 'Future Bay Area Center';
    break;
    default:
      return 'General Donations to BAVC';
    break;
  }
}

 $(document).ready(function() { 
   $('input[name=dana_category]').change(function() {
      var shortName = $('input[name=dana_category]:checked').val();
      $('#item_name').val(fullNameForItem(shortName));
   });
  });

</script>

<table id="donations-table" style="font: 15px arial; border: 0px solid;" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td valign="top" width="64"><a name="online" id="online"><img src="/Images/png/creditcard7.png" alt="" width="64" height="64"></a></td>
<!--td style="vertical-align: top;" width="90"><strong>Credit/Debit Card using PayPal:</strong></td-->
<td class="dana_table_heading">Credit/Debit Card using PayPal:</td>
</tr>
<tr>
<td colspan="2" style="vertical-align: top;">&#65279;
<div id="paypal-interface" class="paypal-interface">
  <p>
  Donation method:<br>
    <select id="method" onchange="methodChanged()" style="">
      <option value="one">One-time donation</option>
      <option value="multiple">Monthly pledge (with end date)</option>
      <option value="continuous" selected="selected">Monthly pledge</option>
    </select>
  </p>
  
  <p>
  Donation will go to:<br>
      <input type="radio" name="dana_category" id="rb8" value="centerfund"><label for="rb8"><b>Future Bay Area Center</b></label></input><br/>
      <input type="radio" name="dana_category" checked id="rb1" value="bavc"><label for="rb1">General Donations to BAVC</label></input><br/>
      <input type="radio" name="dana_category" id="rb2" value="ebvh"><label for="rb2">East Bay Vipassana Hall (EBVH)</label></input><br/>
      <input type="radio" name="dana_category" id="rb3" value="sbvh"><label for="rb3">South Bay Vipassana Hall (SBVH)</label></input><br/>
      <input type="radio" name="dana_category" id="rb4" value="sfvh"><label for="rb4">San Francisco Vipassana Hall</label></input><br/>
      <input type="radio" name="dana_category" id="rb5" value="ooc"><label for="rb5">Occidental Course</label></input><br/>
      <input type="radio" name="dana_category" id="rb6" value="cc"><label for="rb6">Children's Courses</label></input><br/>
      <input type="radio" name="dana_category" id="rb7" value="naccc"><label for="rb7">North America Children's Course Committee (NACCC)</label></input><br/>
  </p>

<form action="https://www.paypal.com/cgi-bin/webscr" id="pp" onsubmit="return checkform(this);" method="post">
  <input name="t3" type="hidden" value="M"> 
  <input name="p3" type="hidden" value="1"> 
  <input id="cmd" type="hidden" name="cmd" value="_donations">
    <p>
      <span class="formtext" id="sum" style="font-size: small">Donation amount (USD)</span><br>
      <input id="amount" name="amount" size="7" style="border-radius: 5px;">
    </p>
    <p>
      <span class="formtext multiple" style="display: none;">Number of months</span>
      <select id="months" name="srt" size="1" class="multiple" onchange="monthsChanged()" style="display: none;">
        <option value="1">Number of months</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
      </select>
    </p>
    <input type="hidden" name="item_name" id="item_name" value="General Donations to BAVC">
    <p style="text-align: left;">
      <input class="paypalcell" type="image" src="/Images/paypal_donate_eng.gif" id="submit" border="0" name="submit" onsubmit="return checkform(this);" alt="Donate by Paypal">
    </p>

  <input type="hidden" name="no_note" value="1">
  <input type="hidden" name="src" id="src" value="1">
  <input type="hidden" name="srt" id="srt" value="">
  <input type="hidden" name="business" value="bavc.treasurer@gmail.com">
  <input type="hidden" name="charset" value="utf-8">
  <input type="hidden" name="lc" value="US">
  <input type="hidden" name="country" value="US">
  <input type="hidden" name="currency_code" value="USD">
  <input type="hidden" name="cancel_return" value="http://www.sfbayarea.us.dhamma.org/os/donate/">
  <input type="hidden" name="return" value="http://www.sfbayarea.us.dhamma.org/os/donate#matching">
  <input type="hidden" name="page_style" value="primary">

 </form>

</div>
<br><hr>
</td>
</tr>

<tr>
<td valign="top"><img src="/Images/png/bank24.png" alt="Donate by check" width="64" height="64"></td>
<!--td style="vertical-align: center;"><span style="font-size:large; font-weight: bold;">Check:</span></td-->
<td class="dana_table_heading">Check:</td>
</tr>
<tr>
<td colspan="2" style="vertical-align: top;">You can write a check out to "<b>BAVC</b>" or "<b>Bay Area Vipassana Center</b>" and mail it to the address below. <b>Note:</b> this is a mailing address only, not a physical location:<br/><br/>
<strong>Bay Area Vipassana Center</strong><br>
530 Lawrence Expy, #365 <br/>
Sunnyvale, CA 94085 
<br><br><hr></td>
</tr>

<tr>
<td style="vertical-align: top;"><a name="matching" id="matching"><img src="/Images/png/uparrow95.png" alt="Matching donations" width="64" height="64" style="padding-right: 4px;"></a></td>
<td class="dana_table_heading">Matching donations:</td>
</tr>
<tr>
<td colspan="2" style="vertical-align: top;">
<br/>
<script>var DDCONF = { API_KEY: "YTk2NWIyZDktMmI4" };</script>

<script src="//doublethedonation.com/api/js/ddplugin.js"></script>
<link href="//doublethedonation.com/api/css/ddplugin.css" rel="stylesheet">
<div id="dd-container" ng-app="dd.plugin"><div class="well"><div ng-include="search_template"></div><p><center><a href="//doublethedonation.com/matching-grant-resources/matching-gift-basics/">Matching Gift</a> and <a href="//doublethedonation.com/matching-grant-resources/volunteer-grant-basics/">Volunteer Grant</a> information provided by <br><a href="//doublethedonation.com"><img alt="Powered by Double the Donation" src="//doublethedonation.com/api/img/powered-by.png" /></a></center></p></div></div>
<br><hr>
</td>
</tr>

<tr>
<td valign="top"><img src="/Images/png/money309.png" alt="Student Loans" width="64" height="64"></td>
<td class="dana_table_heading">Loans:</td>
</tr>
<tr>
<td colspan="2" style="vertical-align: top;">
  Please contact <a href="mailto:treasurer@sfbayarea.us.dhamma.org">treasurer@sfbayarea.us.dhamma.org</a>
  to discuss making a personal loan, either interest-free or with interest attached.
   The terms, length and other conditions of the loan will be agreed with you individually.
 The center welcomes offers of loans with both long and shorter terms.
<br><br><hr>
</td>
</tr>


<tr>
<td valign="top"><img src="/Images/png/help10.png" alt="Other ways to donate" width="64" height="64"></td>
<td class="dana_table_heading">Other ways to Donate:</td>
</tr>
<tr>
<td colspan="2" style="vertical-align: top;">Please contact <a href="mailto:treasurer@sfbayarea.us.dhamma.org">treasurer@sfbayarea.us.dhamma.org</a>&nbsp;to discuss other ways to donate, such as:
  <br><br>
  <ul>
    <li><strong>Electronic (ACH) transfer from Bank</strong></li>
    <li><strong>Stocks or Bonds</strong></li>
    <li><strong>Used Cars</strong></li>
    <li><strong>In-kind donations</strong></li>
    <li><strong>Charitable Will or Bequest</strong> (click here to see a 
      <a href="will_bequest.html">sample codicil</a>)</li>
  </ul>
  <br>
  Bay Area Vipassana Center is a <strong>501(c)3 tax exempt organization</strong>, donations are tax-deductible. Employee ID number is 47-0982918.

<br><hr></td>
</tr>

</tbody>
</table>


<!--==============================-->

<!--
<p><i>At this time donations can only be earmarked for the <a href="/os/sbvh">South Bay Vipassana Hall</a> and the <a href="/os/ebvh">East Bay Vipassana Hall</a>, as well as for specific projects at the <a href="http://www.mahavana.dhamma.org/" target="blank">California Vipassana Center</a>.  Please specify while donating.</i></p>
-->
</div>

<script>
function checkform(form) {
  var MIN_AMOUNT = 1;
  var MAX_AMOUNT = 10000;
  var amount = parseInt($('#amount').val());
  if (isNaN(amount)) {
    alert('Please enter donation amount');
    return false;
  }
  if (amount < MIN_AMOUNT) {
    alert('Minimum donation amount by Paypal is ' + MIN_AMOUNT + ' USD');
    return false;
  }
  if (amount > MAX_AMOUNT) {
    alert('Maximum donation amount by Paypal is ' + MAX_AMOUNT + ' USD');
    return false;
  }

  if( $('#method').val() == 'multiple') {
  	if( $('#months').val() == '1'){
  		alert('Please select number of months.');
  		return false;
  	}
  }
  return true;
}

function fundNameChanged() {
  $('#item_name').val(fullNameForItem($('#fundName').val()));
}

function methodChanged() {
  switch ($('#method').val()) {
    case 'one':
      $('.multiple').hide();
      $('#sum').text('Donation amount (USD)');
      $('#cmd').val('_donations');
      $('#amount').attr('name', 'amount');
      break;
    case 'multiple':
      $('.multiple').show();
      $('#sum').text('Monthly amount (USD)');
      $('#cmd').val('_xclick-subscriptions');
      $('#src').val(1);
      $('#srt').val($('#months').val());
      $('#amount').attr('name', 'a3');
      break;
    case 'continuous':
      $('.multiple').hide();
      $('#sum').text('Monthly amount (USD)');
      $('#cmd').val('_xclick-subscriptions');
      $('#src').val(1);
      $('#srt').val("");
      $('#amount').attr('name', 'a3');
      break;
  }
}

methodChanged();

function monthsChanged() {
  $('#srt').val($('#months').val());
}

$(document).ready(function(){
    $('article').readmore({
        collapsedHeight: 180,
        moreLink: '<a href="#" class="olivebutton" style="width: 200px; padding:3px 1px;">Read more... >>> </a>',
        lessLink: '<a href="#" class="olivebutton" style="width: 200px; padding:3px 1px;"><<< Close </a>'
    });
}); 
</script>

<?php include("../../footer.inc"); ?>

