<?php include("../../header.inc"); ?>
<head>
<script>
function checkform(form) {
  var MIN_AMOUNT = 10;
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
  return true;
}

function fundNameChanged() {
	switch ($('#fundName').val()) {
		case 'ebvh':
			$('#item_name').val('East Bay Vipassana Hall');
		break;
		case 'sbvh':
			$('#item_name').val('South Bay Vipassana Hall');
		break;
		case 'sfvh':
			$('#item_name').val('San francisco Vipassana Hall');
		break;
		case 'ooc':
			$('#item_name').val('Occidental Course');
		break;
		case 'cc':
			$('#item_name').val('Childrens Courses');
		break;
		case 'naccc':
			$('#item_name').val('North America Childrens Course Committee (NACCC)');
		break;
		default:
			$('#item_name').val('General Donations to BAVC');
		break;
	}
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
</script>

<style>
  #paypal-interface{
  background: #fff;
  -moz-border-radius: 3px;
  border-radius: 3px;
  border: solid 1px #bcbdc1;
  font-size: 1em;
  padding: 1em 1.3em;
  }
  #paypal-interface p{
  margin: 2em 0;
  }
  #paypal-interface span{
  padding-bottom: 5px;
  }
  #paypal-interface select{
  font-family: Arial;
  font-size: 1em;
  width: 14em;
  border: solid 1px #ddd;
  }
  #paypal-interface input{
  font-family: Arial;
  font-size: 1em;
  width: 13.7em;
  background: none;
  border: solid 1px #ddd;
  }
  #paypal-interface #submit{
  width: 92px;
  height: 26px;
  margin: 0 auto;
  border: 0;
  }
</style>

</head>
<div class="contentStory" style="padding-top: 15px">

<h2>Dāna - The Parami of Generosity</h2>
<br />

<p><img src="../../Images/DhammaSvcWheelbarrow.jpg"></img></p>
<br />

<p><b>According to the tradition of pure Dhamma</b>, courses are run solely on a donation basis. Donations are accepted only from old students, that is, those who have completed at least one course with S. N. Goenka or one of his assistant teachers.  Donations may be received only from people who have realized for themselves the benefits of Dhamma. Then, giving a donation becomes a part of the practice. Being an old student you may wish to share with others the benefits that you have received from Dhamma. Even a very small donation can reflect the proper understanding of wishing to give at least something for someone else. This understanding deepens when one realizes that not only is it important to give a donation, but it should be in line with one's capacity to give. This capacity will naturally be different for each person, but the wish to help others should be the same.</p>
<br />

<p><img src="../../Images/KitchenService.small.jpg"></img></p>
<br />

<p>These donations are the only source of funding for courses in this tradition around the world. There is no wealthy foundation or individual sponsoring them. Neither the teachers nor the organizers receive any kind of payment for their service. Thus, the spread of Dhamma is carried out with purity of purpose, free from any commercialism.</p>
<br />

<p>Therefore, whether your donation be large or small, let it be with the pure volition: <b><i><q>Because someone else has donated, I have been able to learn Dhamma to purify my mind. I would like others to continue to have the same opportunity.  Therefore, let me give something for the benefit of others, according to my means.</q></i></b></p>
<br />

<!--<p>If you are interested in supporting the Bay Area Vipassana Center with a donation, <a href="http://www.mahavana.dhamma.org/os/dana/contributions.htm" target="blank">donate here</a>.</p>
-->

<p>If you are interested in supporting the Bay Area Vipassana Center with a donation using PayPal:</p>

<br />

<div id="paypal-interface" style="background: #fff;">
  <p>
	Donation method:<br>
    <select id="method" onchange="methodChanged()" style="">
      <option value="one">One-time donation</option>
      <option value="multiple">Monthly recurring donation</option>
      <option value="continuous" selected="selected">Monthly pledge</option>
    </select>
  </p>
  
  <p>
	Donation will go to:<br>
    <select id="fundName" onchange="fundNameChanged()" style="">
      <option selected="selected" value="bavc">General Donations to BAVC</option>
	  <option value="ebvh">EBVH</option>
      <option value="sbvh">SBVH</option>
      <option value="sfvh">SFVH</option>
      <option value="ooc">Occidental Course</option>
      <option value="cc">Children's Courses</option>
      <option value="naccc">North America Children's Course Committee (NACCC)</option>
    </select>
  </p>

<form action="https://www.paypal.com/cgi-bin/webscr" id="pp" onsubmit="return checkform(this);" method="post">
	<input name="t3" type="hidden" value="D"> 
	<input name="p3" type="hidden" value="1"> 
	<input id="cmd" type="hidden" name="cmd" value="_donations">
    <p>
      <span class="formtext" id="sum" style="font-size: small">Donation amount (USD)</span><br>
      <input id="amount" name="amount" size="7">
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
    <input type="hidden" name="item_name" id="item_name" value="Center Development">
    <p style="text-align: center;">
      <input class="paypalcell" type="image" src="http://www.il.dhamma.org/Images/paypal_donate_eng.gif" id="submit" border="0" name="submit" onsubmit="return checkform(this);" alt="Donate by Paypal">
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
  <input type="hidden" name="return" value="http://www.sfbayarea.us.dhamma.org/os/donate/">
  <input type="hidden" name="page_style" value="primary">

 </form>

</div>
<!--
<p><i>At this time donations can only be earmarked for the <a href="/os/sbvh">South Bay Vipassana Hall</a> and the <a href="/os/ebvh">East Bay Vipassana Hall</a>, as well as for specific projects at the <a href="http://www.mahavana.dhamma.org/" target="blank">California Vipassana Center</a>.  Please specify while donating.</i></p>
-->
</div>

<?php include("../../footer.inc"); ?>

