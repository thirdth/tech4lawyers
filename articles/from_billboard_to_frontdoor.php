<?php include 'header.php'; ?>
<div class="container-fluid">
  <main class="container">
    <div class="col-md-10 wrapper">
      <section class="row">
<div class="col-md-10 article">
  <div class="col-md-12">
<h2>More Than Just a Billboard:</h2>
<h2 class="mt-0"><small>Make your website work smarter.</small></h2>
<hr>
<p>
  I’m not an advertising guru, and I don’t know if Search Engine Optimization (SEO) is <a href="https://quickbooks.intuit.com/r/marketing/are-seo-services-worth-it-for-small-businesses/">worth the money</a>, or if <a href="https://www.forbes.com/sites/sujanpatel/2017/02/04/10-mistakes-newbies-make-with-paid-facebook-ads/#4f55309e2d2a">Facebook ads</a> will really drive clients to your doorstep. But I think that a singular focus on these two things can lead to attorneys neglecting the other benefits that come along with having a website - I’d like to see that change.
</p>
<p>
  The prevailing idea behind investing in a website is to increase your exposure to the public, and to cultivate an image of professionalism. While this is a start, much more can be done with your website once you imagine it as a dialogue with the public, rather than a monologue about your firm.
</p>
<p>
  In the “More Than Just a Billboard” series, I highlight some simple and underutilized ways for attorneys to make their web domains work harder for them. These methods range from setting up a simple online payment portal for your clients, to integrating your case management system into a web app, allowing you to securely interact with your files from anywhere.
</p>
<p>
  Let’s start with something relatively easy.
</p>
<hr>
<h4 class="text-center">On-line Payment Processing</h4>
<p>
  I'm sure you've thought about this one, and frankly, you’ve probably even looked into it at some point. But in our busy practices, it's hard to justify spending time enhancing something that seems to be working fine. But I would suggest that this doesn’t take that much time to set up. And your system, likely, isn’t working fine, or at the very least, it is not optimized. Incorporating a payment portal can be as easy as contacting a single vendor and it will allow you clients to settle their accounts on their schedule.
</p>

<h5 class="text-uppercase"><strong>Merchant Accounts:</strong></h5>
<p>
  The obvious first step in taking credit card payments online, is making sure that you can accept these payments in the first place. This is where merchant accounts come in. If you already have one for your onsite payments, you should contact your provider to determine what you need to do in order to take the process online. In some cases, you’ll need to setup a separate merchant account specifically for e-payments.
</p>
<p>
  If you don’t already have a merchant account somewhere, then you’ll need to get one. Although there are many options out there that offer all sorts of <a href="https://www.pcmag.com/roundup/354518/best-credit-card-processing-services">rates and benefits</a>, I’d recommend contacting the bank associated with your Trust account. It’s likely that they work with a vendor who can appropriately credit and debit your Trust and Operations accounts (more about this consideration later). Make sure to do your research, though, because although interchange fees are capped by the Federal Reserve<sup><a href="https://en.wikipedia.org/wiki/Durbin_amendment">4</a></sup> , your ultimate fee can vary significantly. The basic idea, though,  is that, like anything else, the more vendors you have between you and the source, the more expensive it is.
</p>
<h5 class="text-uppercase"><strong>PCI Compliance</strong></h5>
<p>
  Once you’ve selected a merchant account, you’ll need to turn your attention to Payment Card Industry (PCI) compliance. Although an in-depth treatment of PCI compliance is outside the scope of this article, it is also not necessary to understand the minutiae in order to maintain compliance.
</p>
<p>
  The easiest answer is to outsource your payments page to a PCI compliant third party. Basically, the user of your website, once they are ready to enter their credit card information, will be directed to your payment processor’s website to actually make the transaction. No credit card information will be transferred over your web server. After the transaction is completed, you can typically tell the system to return the user to your website. Most of the time, your merchant account provider will be able to make these accommodations.
</p>
<p>
  If you are unsure as to whether you are taking the proper precautions, more information about PCI compliance can be found on this <a href="https://www.pcicomplianceguide.org/faq/#2">website</a>.
</p>
<h5 class="text-uppercase"><strong>Trust Account Separation</strong></h5>
<p>
  As you know, business expenses can't be paid from our Trust accounts. However, we likely need to deposit the funds collected through our payment portal into that account. The trouble is that, normally, a merchant account would debit the fees from the same account that it is crediting (i.e your Trust account). Which would be an ethical problem for us.
  We know we’re not allowed to just put in money to “cover” the expenses that would be debited from the Trust account. And these charges vary based on the transactions, so we wouldn’t be able to put the exact amount in prior to the charge anyway, even if it were allowed.
</p>
<p>
  So what do we do?
</p>
<p>
  Well, luckily, you aren’t the first lawyer to encounter this problem. There are plenty of merchant account providers who will credit your Trust account while debiting the fees from your Operations (or whatever you choose) account. But, as I said, these fees vary, so you will want to make sure you carry enough of a balance to cover these as they are charged. It’s not generally considered a good idea to go through the effort of setting up a merchant account, only to have it suspended for non-payment of fees.
</p>
<h5 class="text-uppercase"><strong>Service Fees</strong></h5>
<p>
  There are two basic questions you need to answer when it comes to service fees: 1) can you charge them, and 2) even if you can, should you? I can’t really help with the latter. That’s a personal business decision that will likely depend on what type of law you are practicing and what relationship you have with the payor. By way of example, though, a debt collections attorney may want to pass on the transaction fee to consumers who have accounts with them, while a Family Law attorney may want to bake the charge into their fees.
</p>
<p>
  The big question, though, is whether or not you can pass the transaction fees on to the consumer in the first place. The short answer -- it depends (c’mon, we’re lawyers, what did you expect).
</p>
<p>
  Although there may be state laws out there that limit your ability to pass on the transaction charges, the main hindrance for merchants are their agreements with Visa and Mastercard. Ultimately, the answer depends on those agreements. But, in 2013, Visa and Mastercard reached a <a href="https://www.paymentcardsettlement.com/Content/Documents/Final%20Approval.pdf">settlement</a> in an anti-trust class action lawsuit where they agreed to rescind those restrictions (among other things). However, in 2016, the Second Circuit Court of Appeals <a href="https://www.paymentcardsettlement.com/Content/Documents/Second%20Circuit%20Opinion.pdf">reversed and remanded</a> approval of the settlement. So, we’re in a bit of a gray area now. You can get more information on this <a href="https://www.paymentcardsettlement.com/en">here</a>, at the court-authorized settlement website.
</p>
<p>
  Long story short. Before 2013, the agreements that merchants had with Visa and Mastercard prohibited the practice. In 2013, the class and the credit card companies agreed to a settlement that disallowed the prohibition. Then, in 2016, the class was de-certified and the settlement vacated, and now the prohibition is likely allowed again. But, your agreement may not have that prohibition in it.
</p>
<p>
  Clear as mud? Yeah, now we’re back to the first question. Do you want to charge the fee in the first place? If you can, you may be better off incorporating the expense into your standard fee model. Alternatively, your merchant services account representative may be able to give you some guidance as to where Visa and Mastercard stand on your specific agreement.
<p>
<h5 class="text-uppercase"><strong>Conclusion</strong></h5>
<p>
  Although creating an online payment portal does require some initial effort, once you are done, your office can process payments from clients day or night without any processing effort on behalf of your office. Now, your process of incorporating those payments into your bookkeeping system will vary depending on the processor you choose, and the bookkeeping software you use. If your provider does not provide out of the box integration with your chosen software, you may find value in contacting your programmer to see if he or she can offer some third party integration.
</p>
<h4 class="text-center">Further Reading:</h4>
<ol>
  <li><a href="https://www.paymentcardsettlement.com/en/Home/Contact">Visa/Mastercard settlement website</a></li>
  <li><a href="https://www.paymentcardsettlement.com/Content/Documents/Final%20Approval.pdf">2013 Visa/Mastercard anti-trust class action settlement</a></li>
  <li><a href="https://www.paymentcardsettlement.com/Content/Documents/Second%20Circuit%20Opinion.pdf">2016 2d Circuit Court of Appeals Opinion</a></li>
</ol>
  </div>
</div>

</section>
</div>
</main>
<?php include 'footer.php'; ?>
