@extends('layouts.web')

@push('stylesheets')
    <style>

    </style>
@endpush
@section('content')

<section class="main-header bg-primary">
    <div class="container pt-5">
        <div class="row">
          <div class="col-12 col-lg-7 align-self-center">
            <p class="font-weight-bold text-secodary">ProspectRoute</p>
            <h1 class="font-weight-bold my-4 text-secodary">High volume, pristine,<br> exclusive leads. </h1>
            <h5 class="text-secodary">Up to 50 web leads per day, exclusive and high quality.</h5>
            <div class="header-image"><img src="/assets/home-page/header-img.png" alt="" class=" mt-5 w-50 header-img"></div>
          </div>
          <div class="col-12 col-lg-5 px-0 p-4 desktop-view " style="background: rgba(255, 255, 255, 0.44); border-radius: 10px;">
              <div class="inner-col bg-white  pb-1" style="border-radius: 10px">
                  <h4 class="font-weight-bold p-3 text-secondary want-to-see-pricing" style="font-size: 28px">Want to see pricing?
                   <br> We’ll email it!</h4>
                    <form class=" ">
                        <div class="form-group  col-12 px-3">
                            <label for="firstname" class="text-secondary font-weight-bold">First Name</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Type...">
          <div class="col-12 col-lg-5 px-0 rounded " style="background: rgba(255, 255, 255, 0.44);">
              <div class="inner-col bg-white m-4 p-3 rounded">
                  <h4 class="font-weight-bold">Want to see pricing?
                    We’ll email it!</h4>
                    <form>
                        <div class="form-group  col-12 px-0">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" placeholder="Type...">
                           </div>

                        <div class="form-group col-12 px-3">
                          <label for="email" class="text-secondary font-weight-bold">Email address</label>
                          <input type="email" class="form-control form-control-lg" id="email" placeholder="Type...">
                        </div>

                        <div class="form-group  col-12 px-3">
                            <label for="mobile" class="text-secondary font-weight-bold">Mobile (used as password)</label>
                            <input type="text" class="form-control form-control-lg" id="mobile" placeholder="Type...">
                          </div>

                          <div class="form-group col-12 px-3">
                            <label for="agency-employees" class="text-secondary font-weight-bold">Agency employees</label>
                            <select class="form-control form-control-lg" id="agency-employees">
                                <option>Select...</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                          </div>
                          <hr class="m-0 p-0">
                        <div class="py-3 px-3 " style="background-color: #F7F8F9; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px;">
                            <button type="submit" class="btn btn-secondary w-100 py-2">Send Pricing!</button>
                        </div>
                      </form>
              </div>
          </div>

         <div class="col-12 mobile-view d-none">
            <div class="p-4" style="background: rgba(255, 255, 255, 0.44); border-radius: 10px;">
                <div class="inner-col bg-white wizard pb-1" style="border-radius: 10px">
                    <h4 class="font-weight-bold p-3 text-secondary want-to-see-pricing" style="font-size: 28px">Want to see pricing?
                     <br> We’ll email it!</h4>
                     <div class="wizard-inner">
                        <div class="connecting-line "></div>
                        <ul class="nav nav-tabs d-none" role="tablist">

                            <li role="presentation" class="active">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                    <span class="round-tab">

                                    </span>
                                </a>
                            </li>


                            <li role="presentation" class="disabled">
                                <a href="#step2" data-toggle="tab" aria-controls="step3" role="tab" title="Step 2">
                                    <span class="round-tab">

                                    </span>
                                </a>
                            </li>


                        </ul>
                    </div>
                     <form role="form">
                        <div class="tab-content px-0">
                            <div class="tab-pane active" role="tabpanel" id="step1">

                                <div class="form-group  col-12 px-3">
                                    <label for="firstname" class="text-secondary font-weight-bold">First Name</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="Type...">
                                   </div>

                                <div class="form-group col-12 px-3">
                                  <label for="email" class="text-secondary font-weight-bold">Email address</label>
                                  <input type="email" class="form-control form-control-lg" id="email" placeholder="Type...">
                                </div>

                                <hr class="m-0 p-0">
                                <div class="py-3 px-3 " style="background-color: #F7F8F9; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px;">
                                    <button type="button" class="btn btn-secondary w-100 py-2 next-step">Next</button>
                                </div>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step2">
                                <div class="form-group  col-12 px-3">
                                    <label for="mobile" class="text-secondary font-weight-bold">Mobile (used as password)</label>
                                    <input type="text" class="form-control form-control-lg" id="mobile" placeholder="Type...">
                                  </div>

                                  <div class="form-group col-12 px-3">
                                    <label for="agency-employees" class="text-secondary font-weight-bold">Agency employees</label>
                                    <select class="form-control form-control-lg" id="agency-employees">
                                        <option>Select...</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                  </div>
                                  <hr class="m-0 p-0">
                                  <div class="py-3 px-3 " style="background-color: #F7F8F9; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px;">
                                      <button type="submit" class="btn btn-secondary w-100 py-2">Send Pricing!</button>
                                  </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
         </div>

                        <div class="form-group col-12 px-0">
                          <label for="email">Email address</label>
                          <input type="email" class="form-control" id="email" placeholder="Type...">
                        </div>

                        <div class="form-group  col-12 px-0">
                            <label for="mobile">Mobile (used as password)</label>
                            <input type="text" class="form-control" id="mobile" placeholder="Type...">
                          </div>

                          <div class="form-group col-12 px-0">
                            <label for="agency-employees">Agency employees</label>
                            <select class="form-control" id="agency-employees">
                                <option>Select...</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                          </div>
                        <button type="submit" class="btn btn-secondary w-100 py-2 mt-4">Send Pricing!</button>
                      </form>
              </div>
          </div>
        </div>
    </div>
    <div class="container-fluid py-5 header-bottom"></div>
</section>

{{--how it works--}}
<section id="how-it-works "class="py-5 mb-5" >
    <div class="container">
        <div class="row">
            <div class="order-1 col-12 col-lg-6">
                <p >How it works</p>
                <h1 class="sub-heading mb-4">Hand-curated Auto/Home Leads - Delivered to you digitally, exclusively.</h1>
                <p>Most lead vendors fall into one of two categories: they either have high quality at an expensive low volume, or high volume and low quality. ProspectRoute has spent hundreds of thousands of dollars to develop the next generation in insurance marketing: a high volume system that delivers prospects that close.</p>
                <p class="works-hide">Most lead vendors fall into one of two categories: they either have high quality at an expensive low volume, or high volume and low quality. ProspectRoute has spent hundreds of thousands of dollars to develop the next generation in insurance marketing: a high volume system that delivers prospects that close.</p>
            </div>
            <div class="order-4 order-lg-2  col-12 col-lg-6 text-center">
                <img src="images/man-exploring-globe-2194231-0.svg" class="img-fluid" style="max-width: 80%" alt="">
            </div>
            <div class="order-2 col-12 row">
                <div class="col-12 col-lg-6"> <p class="works-hide">
                        ProspectRoute uses leads from several sources - social media, web, lead lists and more - and prequalifies each lead by phone to ensure it’s a perfect match for your agency. We collect essential information such as the address, location, driver information, vehicle information, driving history (self-reported) and more and if the lead matches your criteria we pass it along to you, digitally.
                        If you use our optional CRM, called the PR-CRM, to manage your leads the CRM instantly places a call to that lead and connects your producer with the opportunity. If no producer is available the CRM will connect the call immediately when the next producer is available.
                        PR’s position is that generating the lead is only half the battle. If you choose, you can receive the PR-CRM free with ProspectRoute when you’re enrolled to receive leads. PR-CRM’s technology is built on the Unifyy platform and helps automate sales from many lead vendors, not just ProspectRoute.
                    </p></div>
                <div class="col-12 col-lg-6"><p class="works-hide">
                        The PR-CRM prioritizes calls in many ways but what really makes it amazing when it’s used with ProspectRoute. This is because when PR generates a lead, the PR-CRM immediately connects your producer with the prospect by phone when it comes in. This means it’s the fastest way to get prospects on the phone. For each minute that passes from when a prospect expresses interest and a producer makes their first contact attempt, the likelihood of a sale decreases by 50%. Using PR with the PR-CRM.
                    </p>
                    <p class="works-hide">
                        You can connect any lead vendor with the PR-CRM so you can use it even when you’re not actively using ProspectRoute for your marketing. But between the volume of high quality leads we can produce and our award-winning PR-CRM, we don’t think you’ll want to use any other vendors.
                    </p>
                </div>
            </div>
            <div class="order-3 col-12">
                <button type="button" id="works-expand-btn" class="btn btn-primary mr-2 border-primary bg-white">Expand to read more <i class="fas fa-arrow-down"></i> <i class="fas fa-arrow-up"></i> </button>
                <button type="button" id="get-pricing-btn" class="btn btn-primary">Get pricing</button>
            </div>
        </div>
    </div>
</section>
{{-- pc-crm & lead --}}
<section id="pc-crm-leads" class="py-5 mt-5">
    <div class="container">
        <div class="row move-top">
            <div class="col-12 col-lg-6 mb-5">
                <div class="col-12 py-5 px-3 bg-white rounded-lg pc-crm-lead-border">
                    <p>The PR-CRM</p>
                    <h1 class="sub-heading mb-4">Get double the return on your marketing dollars. Best of all, the PR-CRM is free.</h1>
                    <p>The ProspectRoute CRM is a very robust and effective tool created specifically and exclusively for insurance agents. PR-CRM automates and prioritizes calls, leads, emails, and SMS’s. It can be easily configured to run your entire agency, just a part of it, or to only work with ProspectRoute leads.
                    </p>
                    <p>
                        However, we’re positive that once you start using it, you’ll decide to use it for your entire agency and all your lead vendors.
                    </p>
                    <p>
                        What makes PR-CRM so good?
                    </p>
                    <div class="pr-crm-expanded-hide">
                        <p>
                            When used in agency mode PR-CRM enforces high contact rates and high outreach by your producers to all the leads you have loaded into it. Additionally, PR-CRM acts as air traffic control between new leads coming in (from web or live transfer), recent leads that need followup, old leads needing some love, and existing customer service calls.
                        </p>
                        <p>Producers and agency employees who use PR-CRM spend an average of 40% more talking to clients per day, make 60% more calls per day, and close 25% more business in a month than if they were using legacy insurance management products. This is what happens when you integrate and unify all communication methods.</p>
                        <p>If you want to limit PR-CRM’s role in your agency that works too. PR-CRM can be used by just a few producers or can be used as a communications-free system that just organizes your leads and tells your producers who should be called next. </p>
                        <p>
                            Worried about phone system stuff?
                            If you’re in a situation where you can’t have PR-CRM make its own phone calls then don’t worry. PR-CRM can integrate with your existing phone system with 0 interruption or configuration needed by anyone. The PR-CRM can route all of it’s inbound and outbound calls through your existing phone system regardless of who the provider is. Remember, PR-CRM is still pretty effective without any communication abilities.
                        </p>
                        <p>
                            The best part is it’s FREE.
                            When you buy leads from ProspectRoute you get PR-CRM free for any week where you have an active order. On weeks when you want to take a break PR-CRM is very reasonably priced.
                        </p>
                    </div>
                    <div class="col-12 p-0 btn-toolbar">
                        <button type="button" id="pr-crm-btn" class="btn btn-primary mr-2 mb-3 border-primary bg-white">Expand to read more <i class="fas fa-arrow-down"></i> <i class="fas fa-arrow-up"></i> </button>
                        <button type="button" id="get-pricing-btn" class="btn btn-primary mb-3">Get pricing</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="col-12 py-5 px-3 bg-white rounded-lg pc-crm-lead-border">
                    <p>OUR LEADS</p>
                    <h1 class="sub-heading mb-4">WARNING: Our leads may cause a sense of euphoria, relief, or satisfaction. Seek medical attention.</h1>
                    <p>ProspectRoute can deliver as many leads as you want per day. It has the ability to keep all of your producers busy all day long. They will go home tired, but satisfied their commissions are increasing. </p>
                    <p>
                        We turn over rocks looking for leads and sources. We contact web leads old and new that our system predicts your underwriting will be competitive with. We have a nice but quick conversation with them to collect just enough information to make it a quality lead. We do this to lessen the friction of having the lead repeat information to you.
                    </p>
                    <div class="our-leads-expanded-hide">
                        <p>
                            Typically we collect the primary's name, email, phone, address or partial address, basic vehicle information, and homeowner status and information. If our system believes this information is a match for your carrier(s), it will send it This information is passed to you to call and close.
                        </p>
                        <p>When paired with the PR-CRM leads are twice as likely to close.</p>

                    </div>
                    <div class="col-12 p-0 btn-toolbar">
                        <button type="button" id="our-lead-btn" class="btn btn-primary mr-2 mb-3 border-primary bg-white">Expand to read more <i class="fas fa-arrow-down"></i> <i class="fas fa-arrow-up"></i> </button>
                        <button type="button" id="get-pricing-btn" class="btn btn-primary mb-3">Get pricing</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container choose-your-package  my-5">
    <div class="col w-50 mx-auto text-center pricing-text">
        <p class="text-primary font-weight-bold">Pricing</p>
        <h2 class="font-weight-bold">Choose your package</h2>
        <h5>No contracts. No commitments. Pay as you go each week.</h5>

    </div>


        <div class="col-12 col-lg-5 px-0 p-4 w-50 my-4 mx-auto desktop-view pricing-form " id="pricing-form"  style="background: rgba(255, 255, 255, 0.44); border-radius: 10px;">
            <div class="inner-col bg-white  pb-1" style="border-radius: 10px">
                <h4 class="font-weight-bold p-3 text-secondary want-to-see-pricing" style="font-size: 28px">Want to see pricing?
                <br> We’ll email it!</h4>
                <form class=" ">
                    <div class="form-group  col-12 px-3">
                        <label for="firstname" class="text-secondary font-weight-bold">First Name</label>
                        <input type="text" class="form-control form-control-lg" placeholder="Type...">
                        </div>

                    <div class="form-group col-12 px-3">
                        <label for="email" class="text-secondary font-weight-bold">Email address</label>
                        <input type="email" class="form-control form-control-lg" id="email" placeholder="Type...">
                    </div>

                    <div class="form-group  col-12 px-3">
                        <label for="mobile" class="text-secondary font-weight-bold">Mobile (used as password)</label>
                        <input type="text" class="form-control form-control-lg" id="mobile" placeholder="Type...">
                        </div>

                        <div class="form-group col-12 px-3">
                        <label for="agency-employees" class="text-secondary font-weight-bold">Agency employees</label>
                        <select class="form-control form-control-lg" id="agency-employees">
                            <option>Select...</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            </select>
                        </div>
                        <hr class="m-0 p-0">
                    <div class="py-3 px-3 " style="background-color: #F7F8F9; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px;">
                        <button type="button" class="btn btn-secondary w-100 py-2" id="sendPricing">Send Pricing!</button>
                    </div>
                    </form>
            </div>
        </div>

        <div class="col-12 px-0 mobile-view d-none">
            <div class="p-4" style="background: rgba(255, 255, 255, 0.44); border-radius: 10px;">
                <div class="inner-col bg-white wizard pb-1" style="border-radius: 10px">
                    <h4 class="font-weight-bold p-3 text-secondary want-to-see-pricing" style="font-size: 28px">Want to see pricing?
                    <br> We’ll email it!</h4>
                    <div class="wizard-inner">
                        <div class="connecting-line "></div>
                        <ul class="nav nav-tabs d-none" role="tablist">

                            <li role="presentation" class="active">
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                    <span class="round-tab">

                                    </span>
                                </a>
                            </li>


                            <li role="presentation" class="disabled">
                                <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 4">
                                    <span class="round-tab">

                                    </span>
                                </a>
                            </li>


                        </ul>
                    </div>
                    <form role="form">
                        <div class="tab-content px-0">
                            <div class="tab-pane active" role="tabpanel" id="step3">

                                <div class="form-group  col-12 px-3">
                                    <label for="firstname" class="text-secondary font-weight-bold">First Name</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="Type...">
                                    </div>

                                <div class="form-group col-12 px-3">
                                    <label for="email" class="text-secondary font-weight-bold">Email address</label>
                                    <input type="email" class="form-control form-control-lg" id="email" placeholder="Type...">
                                </div>

                                <hr class="m-0 p-0">
                                <div class="py-3 px-3 " style="background-color: #F7F8F9; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px;">
                                    <button type="button" class="btn btn-secondary w-100 py-2 next-step">Next</button>
                                </div>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step4">
                                <div class="form-group  col-12 px-3">
                                    <label for="mobile" class="text-secondary font-weight-bold">Mobile (used as password)</label>
                                    <input type="text" class="form-control form-control-lg" id="mobile" placeholder="Type...">
                                    </div>

                                    <div class="form-group col-12 px-3">
                                    <label for="agency-employees" class="text-secondary font-weight-bold">Agency employees</label>
                                    <select class="form-control form-control-lg" id="agency-employees">
                                        <option>Select...</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        </select>
                                    </div>
                                    <hr class="m-0 p-0">
                                    <div class="py-3 px-3 " style="background-color: #F7F8F9; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px;">
                                        <button type="button" class="btn btn-secondary w-100 py-2" id="sendPricing">Send Pricing!</button>
                                    </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <div class="col-12 px-0 rounded p-4 w-50 mx-auto pricing-form " id="pricing-form" style="background: rgba(255, 255, 255, 0.44);">
        <div class="inner-col bg-white  p-3 rounded">
            <h4 class="font-weight-bold">Want to see pricing?
                We’ll email it!</h4>
            <form>
                <div class="form-group  col-12 px-0">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" placeholder="Type...">
                </div>

                <div class="form-group col-12 px-0">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Type...">
                </div>

                <div class="form-group  col-12 px-0">
                    <label for="mobile">Mobile (used as password)</label>
                    <input type="text" class="form-control" id="mobile" placeholder="Type...">
                </div>

                <div class="form-group col-12 px-0">
                    <label for="agency-employees">Agency employees</label>
                    <select class="form-control" id="agency-employees">
                        <option>Select...</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <button type="submit" id="sendPricing" class="btn btn-secondary w-100 py-2 mt-4">Send Pricing!</button>
            </form>
        </div>
    </div>

        <div class="container packges my-4 px-0 d-none" id="packges">
            <div class="row ">
                <div class="col-12 col-lg-4 my-3">
                    <div class="card">
                            <h1 class="text-center pt-3 font-weight-bold">45-55</h1>
                            <p class="mb-0 text-center"  style="font-size: 18px; color: #6485A8; font-weight: 400">Calls/Week</p>
                            <hr>
                            <div class="px-4 packges-list">
                                <ul class="list-unstyled">
                                    <li> Talamarketers <span class="float-right">2</span></li>
                                    <li> Hours/Day <span class="float-right">8</span></li>
                                    <li> Days/Week <span class="float-right">5</span></li>
                                    <li> Includes homeowners <span class="float-right">Yes!</span></li>
                                    <li> 100% exclusive <span class="float-right">Yes!</span></li>
                                    <li> Post to Velocify <span class="float-right">Yes!</span></li>
                                    <li> Dedicated reps <span class="float-right">Yes!</span></li>

                                </ul>
                            </div>

                            <div class="px-0" style="background-color: #F7F8F9; border-top: 1px solid #C6D7EA ">
                                <div class="px-0 text-center p-4">
                                 <h4 class="font-weight-bold">$915 <span class="mx-2" style="font-size: 20px; color: #6485A8; font-weight: 400">Per Week</span></h4>
                                 <a href="" class="btn border-primary bg-white w-100 mt-3 py-2 font-weight-bold">Sign up</a>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 my-3">
                 <div class="card">
                         <h1 class="text-center pt-3 font-weight-bold">75-85</h1>
                         <p class="mb-0 text-center"  style="font-size: 18px; color: #6485A8; font-weight: 400">Calls/Week</p>
                         <hr>
                         <div class="px-4 packges-list">
                             <ul class="list-unstyled">
                                 <li> Talamarketers <span class="float-right">3</span></li>
                                 <li> Hours/Day <span class="float-right">8</span></li>
                                 <li> Days/Week <span class="float-right">5</span></li>
                                 <li> Includes homeowners <span class="float-right">Yes!</span></li>
                                 <li> 100% exclusive <span class="float-right">Yes!</span></li>
                                 <li> Post to Velocify <span class="float-right">Yes!</span></li>
                                 <li> Dedicated reps <span class="float-right">Yes!</span></li>

                             </ul>
                         </div>

                         <div class="px-0" style="background-color: #F7F8F9; border-top: 1px solid #C6D7EA ">
                             <div class="px-0 text-center p-4">
                              <h4 class="font-weight-bold">$1169 <span class="mx-2" style="font-size: 20px; color: #6485A8; font-weight: 400">Per Week</span></h4>
                              <a href="" class="btn bg-primary w-100 mt-3 py-2 font-weight-bold">Sign up</a>
                             </div>
                         </div>
                 </div>
                 </div>
                 <div class="col-12 col-lg-4 my-3">
                 <div class="card">
                         <h1 class="text-center pt-3 font-weight-bold">90-110</h1>
                         <p class="mb-0 text-center" style="font-size: 18px; color: #6485A8; font-weight: 400">Calls/Week</p>
                         <hr>
                         <div class="px-4 packges-list">
                             <ul class="list-unstyled">
                                 <li> Talamarketers <span class="float-right">2</span></li>
                                 <li> Hours/Day <span class="float-right">8</span></li>
                                 <li> Days/Week <span class="float-right">5</span></li>
                                 <li> Includes homeowners <span class="float-right">Yes!</span></li>
                                 <li> 100% exclusive <span class="float-right">Yes!</span></li>
                                 <li> Post to Velocify <span class="float-right">Yes!</span></li>
                                 <li> Dedicated reps <span class="float-right">Yes!</span></li>

                             </ul>
                         </div>

                         <div class="px-0" style="background-color: #F7F8F9; border-top: 1px solid #C6D7EA ">
                             <div class="px-0 text-center p-4">
                              <h4 class="font-weight-bold">$1627 <span class="mx-2" style="font-size: 20px; color: #6485A8; font-weight: 400">Per Week</span></h4>
                              <a href="" class="btn border-primary bg-white w-100 mt-3 py-2 font-weight-bold">Sign up</a>
                             </div>
                         </div>
                 </div>
               </div>
             </div>
        </div>

    <div class=" row" id="packges" class="packges">
        <div class="col-12 col-lg-4 my-3">
            <div class="card">
                <h1 class="text-center pt-3">45-55</h1>
                <p class="mb-0 text-center">Calls/Week</p>
                <hr>
                <div class="px-4 packges-list">
                    <ul class="list-unstyled">
                        <li> Talamarketers <span class="float-right">2</span></li>
                        <li> Hours/Day <span class="float-right">8</span></li>
                        <li> Days/Week <span class="float-right">5</span></li>
                        <li> Includes homeowners <span class="float-right">Yes!</span></li>
                        <li> 100% exclusive <span class="float-right">Yes!</span></li>
                        <li> Post to Velocify <span class="float-right">Yes!</span></li>
                        <li> Dedicated reps <span class="float-right">Yes!</span></li>

                    </ul>
                </div>

                <div class="px-0" style="background-color: #F7F8F9; border-top: 1px solid #C6D7EA ">
                    <div class="px-0 text-center p-4">
                        <h4 class="font-weight-bold">$915 <span>Per Week</span></h4>
                        <a href="" class="btn border-primary bg-white w-100 mt-3">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 my-3">
            <div class="card">
                <h1 class="text-center pt-3">75-85</h1>
                <p class="mb-0 text-center">Calls/Week</p>
                <hr>
                <div class="px-4 packges-list">
                    <ul class="list-unstyled">
                        <li> Talamarketers <span class="float-right">3</span></li>
                        <li> Hours/Day <span class="float-right">8</span></li>
                        <li> Days/Week <span class="float-right">5</span></li>
                        <li> Includes homeowners <span class="float-right">Yes!</span></li>
                        <li> 100% exclusive <span class="float-right">Yes!</span></li>
                        <li> Post to Velocify <span class="float-right">Yes!</span></li>
                        <li> Dedicated reps <span class="float-right">Yes!</span></li>

                    </ul>
                </div>

                <div class="px-0" style="background-color: #F7F8F9; border-top: 1px solid #C6D7EA ">
                    <div class="px-0 text-center p-4">
                        <h4 class="font-weight-bold">$1169 <span>Per Week</span></h4>
                        <a href="" class="btn bg-primary w-100 mt-3">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 my-3">
            <div class="card">
                <h1 class="text-center pt-3">90-110</h1>
                <p class="mb-0 text-center">Calls/Week</p>
                <hr>
                <div class="px-4 packges-list">
                    <ul class="list-unstyled">
                        <li> Talamarketers <span class="float-right">2</span></li>
                        <li> Hours/Day <span class="float-right">8</span></li>
                        <li> Days/Week <span class="float-right">5</span></li>
                        <li> Includes homeowners <span class="float-right">Yes!</span></li>
                        <li> 100% exclusive <span class="float-right">Yes!</span></li>
                        <li> Post to Velocify <span class="float-right">Yes!</span></li>
                        <li> Dedicated reps <span class="float-right">Yes!</span></li>

                    </ul>
                </div>

                <div class="px-0" style="background-color: #F7F8F9; border-top: 1px solid #C6D7EA ">
                    <div class="px-0 text-center p-4">
                        <h4 class="font-weight-bold">$1627 <span>Per Week</span></h4>
                        <a href="" class="btn border-primary bg-white w-100 mt-3">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection

@push('scripts')

<script>



</script>
@endpush
