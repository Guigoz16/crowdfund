@extends('layouts.frontend')
@section('content')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>FAQs</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">FAQs</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            How does crowdfundning works?
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong>You start your crowdfunding by telling your story and setting a goal.</strong> You will then receive a fundraising page to accept donations and share your campaign. Signing up is easy and every donation is yours to keep, whether or not you reach your goal. Crowdfunding makes it incredibly easy to raise money online for the things that matter to you most.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            What can i raise money for?
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            People use Crowdfunding to raise money for themselves, friends and family, or even complete strangers in random acts of kindness. People raise money for just about everything, including medical expenses, education costs, volunteer programs, youth sports, funerals and memorials, and even animals and pets.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            How do i get donations?
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            Crowdfunding provides an easy way to raise money from your friends, family, and online community. Our platform makes it simple to share your campaign in a variety of ways to bring in donations, track your progress, and post updates to engage your community.
        </div>
      </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            How will i receive the donated funds?
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            You can withdraw donation amount to your PayPal account or to your bank account.
          </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            can a friend withdraw the money i raise for them?
          </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>Yes.</strong> Crowdfunding makes it easy for another friend or family member to securely access the funds you have raised. Through Crowdfunding, they will receive direct access to the money you have raised.
          </div>
        </div>
    </div>
</div>
</div>
