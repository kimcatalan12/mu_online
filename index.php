<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ikigai MU</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
  <link rel="shortcut icon" href="image/logo-1.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header>
    <nav class="bg-body-tertiary fixed-top m-3 navbar navbar-expand px-3 rounded-4">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="image/logo-1.png" alt="logo" style="width: 60px; height: 50px;">
        </a>
        <div class="gap-2 hstack">
          <button class="btn btn-icon button_navbar_color toggle-button" type="button" id="menu-toggle">
            <i class="fa-solid fa-bars fa-xl"></i>
          </button>
          <ul class="align-items-center hstack mb-0 mb-lg-0 ms-auto ps-0" id="nav-menu">
            <div class="align-items-center navbar-nav">
              <li class="nav-item">
                <a class="link-offset-3 nav-link" href="#"><span class="fourth_color fs-4">ROADMAP</span></a>
              </li>
              <li class="nav-item">
                <a class="link-offset-3 nav-link" href="#" data-bs-toggle="modal" data-bs-target="#registermodal"><span class="fourth_color fs-4">REGISTER</span></a>
              </li>
              <li class="nav-item">
                <a class="link-offset-3 nav-link" href="#">
                  <span class="fourth_color fs-4">DOWNLOAD CLIENT</span>
                </a>
              </li>
              <li class="dropdown me-2 nav-item">
                <button class="btn fourth_color hstack gap-1" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="fs-4">RANKING</span>
                  <i class="fa-solid fa-chevron-down"></i>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="https://ikigai-mu.online/rankings/level/" target="_blank">Top Level</a></li>
                  <li><a class="dropdown-item disabled" href="#">TBD</a></li>
                  <li><a class="dropdown-item disabled" href="#">TBD</a></li>
                </ul>
              </li>
            </div>
          </ul>
          <a class="btn rounded-4 thirdb_color" href="#" data-bs-toggle="modal" data-bs-target="#loginmodal"><span class="fourth_color fs-4">LOGIN</span></a>
        </div>
      </div>
    </nav>
  </header>
  <main class="container" style="margin-top: 7rem;">
    <section class="carousel_section mb-5 position-relative">
      <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000">
            <img src="image/carousel_1.jpg" class="d-block w-100" alt="carousel image">
            <div class="carousel-caption d-md-block mx-auto text-start">
              <h5 class="third_color">DETAIL:</h5>
              <p class="fourth_color">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis. Ut commodo efficitur neque.</p>
              <a href="#" class="float-end nav-link"><span class="fourth_color">See More</span></a>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="image/carousel_2.jpg" class="d-block w-100" alt="carousel image">
            <div class="carousel-caption d-md-block mx-auto text-start">
              <h5 class="third_color">DETAIL:</h5>
              <p class="fourth_color">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis. Ut commodo efficitur neque.</p>
              <a href="#" class="float-end nav-link"><span class="fourth_color">See More</span></a>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="image/carousel_3.jpg" class="d-block w-100" alt="carousel image">
            <div class="carousel-caption d-md-block mx-auto text-start">
              <h5 class="third_color">DETAIL:</h5>
              <p class="fourth_color">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis. Ut commodo efficitur neque.</p>
              <a href="#" class="float-end nav-link"><span class="fourth_color">See More</span></a>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </section>

    <section class="information_section mb-5">
      <div class="mb-5 text-center">
        <span class="fs-1 third_color">INFORMATION</span>
      </div>
      <div class="gy-4 row row-cols-1 row-cols-lg-4 row-cols-md-2">
        <div class="col">
          <div class="align-items-center border-4 card flex-row h-100 hover-effect justify-content-between p-3 rounded-4 secondbc_color">
            <div>
              <span class="fs-5 fw-semibold third_color">SERVER STATUS</span>
              <div class="align-items-baseline gap-1 hstack">
                <i class="fa-circle fa-solid fa-xs text-success"></i>
                <span class="fs-6 fourth_color">ONLINE</span>
              </div>
            </div>
            <div>
              <i class="fa-solid fa-server fa-2xl second_color icon"></i>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="align-items-center border-4 card flex-row h-100 hover-effect justify-content-between p-3 rounded-4 secondbc_color">
            <div>
              <span class="fs-5 fw-semibold third_color">ONLINE COUNT</span>
              <div>
                <span class="fs-6 fourth_color">1412</span>
              </div>
            </div>
            <div>
              <i class="fa-solid fa-earth-asia fa-2xl icon second_color"></i>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="align-items-center border-4 card flex-row h-100 hover-effect justify-content-between p-3 rounded-4 secondbc_color">
            <div>
              <span class="fs-5 fw-semibold third_color">ACCOUNT COUNT</span>
              <div>
                <span class="fs-6 fourth_color">12759</span>
              </div>
            </div>
            <div>
              <i class="fa-solid fa-user-large fa-2xl icon second_color"></i>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="align-items-center border-4 card flex-row h-100 hover-effect justify-content-between p-3 rounded-4 secondbc_color">
            <div>
              <span class="fs-5 fw-semibold third_color">CHARACTER COUNT</span>
              <div>
                <span class="fs-6 fourth_color">25945</span>
              </div>
            </div>
            <div>
              <i class="fa-solid fa-users fa-2xl icon second_color"></i>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="stat_section mb-5">
      <div class="mb-5 text-center">
        <span class="fs-1 third_color">SERVER & ITEM STATS</span>
      </div>
      <div class="gy-4 row row-cols-1 row-cols-md-2 row-cols-lg-4">
        <div class="col">
          <div class="bg_card_body card h-100 rounded-3 shadow">
            <div class="card-body px-4">
              <h5 class="card-title mb-4 text-center">Jewel Count</h5>
              <div>
                <p class="card-text fs-6">Bless - 20097</p>
                <p class="card-text fs-6">Soul - 28320</p>
                <p class="card-text fs-6">Chaos - 265711</p>
                <p class="card-text fs-6">Life - 229</p>
                <p class="card-text fs-6">Creation - 376</p>
                <p class="card-text fs-6">Gemstone - 1036</p>
                <p class="card-text fs-6">Harmony - 281</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="bg_card_body card h-100 rounded-3 shadow">
            <div class="card-body px-4">
              <h5 class="card-title mb-4 text-center">1st Wing Count</h5>
              <div>
                <p class="card-text fs-6">Elf - 388</p>
                <p class="card-text fs-6">Angel - 302</p>
                <p class="card-text fs-6">Satan - 362</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="bg_card_body card h-100 rounded-3 shadow">
            <div class="card-body px-4">
              <h5 class="card-title mb-4 text-center">2nd Wing Count</h5>
              <div>
                <p class="card-text fs-6">Crest of Monarch - 8</p>
                <p class="card-text fs-6">Loch Feather - 5</p>
                <p class="card-text fs-6">Cape of Lord - 199</p>
                <p class="card-text fs-6">Wings of Spirit - 77</p>
                <p class="card-text fs-6">Wings of Soul - 65</p>
                <p class="card-text fs-6">Wings of Dragon - 69</p>
                <p class="card-text fs-6">Wings of Darkness - 71</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="bg_card_body card h-100 rounded-3 shadow">
            <div class="card-body px-4">
              <h5 class="card-title mb-4 text-center">Pet Count</h5>
              <div>
                <p class="card-text fs-6">Dark Horse (Spirit) - 0</p>
                <p class="card-text fs-6">Dark Raven (Spirit) - 2</p>
                <p class="card-text fs-6">Dark Horse - 41</p>
                <p class="card-text fs-6">Dark Raven - 33</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="bg_card_body card h-100 rounded-3 shadow">
            <div class="card-body px-4">
              <h5 class="card-title mb-4 text-center">Item +9 Count</h5>
              <div>
                <p class="card-text fs-6">Normal: 846</p>
                <p class="card-text fs-6">Excellent: 3496</p>
                <p class="card-text fs-6">1st Wing: 240</p>
                <p class="card-text fs-6">2nd Wing: 215</p>
                <p class="card-text fs-6">Cape: 118</p>
                <p class="card-text fs-6"></p>
                <p class="card-text fs-6"></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="bg_card_body card h-100 rounded-3 shadow">
            <div class="card-body px-4">
              <h5 class="card-title mb-4 text-center">Item +10 Count</h5>
              <div>
                <p class="card-text fs-6">Normal: 20</p>
                <p class="card-text fs-6">Excellent: 57</p>
                <p class="card-text fs-6">1st Wing: 2</p>
                <p class="card-text fs-6">2nd Wing: 0</p>
                <p class="card-text fs-6">Cape: 0</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="bg_card_body card h-100 rounded-3 shadow">
            <div class="card-body px-4">
              <h5 class="card-title mb-4 text-center">2nd Wing Count</h5>
              <div>
                <p class="card-text fs-6">Normal: 179</p>
                <p class="card-text fs-6">Excellent: 580</p>
                <p class="card-text fs-6">1st Wing: 48</p>
                <p class="card-text fs-6">2nd Wing: 7</p>
                <p class="card-text fs-6">Cape: 7</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="bg_card_body card h-100 rounded-3 shadow">
            <div class="card-body px-4">
              <h5 class="card-title mb-4 text-center">Item +12 Count</h5>
              <div>
                <p class="card-text fs-6">Normal: 28</p>
                <p class="card-text fs-6">Excellent: 127</p>
                <p class="card-text fs-6">1st Wing: 0</p>
                <p class="card-text fs-6">2nd Wing: 4</p>
                <p class="card-text fs-6">Cape: 2</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="bg_card_body card h-100 rounded-3 shadow">
            <div class="card-body px-4">
              <h5 class="card-title mb-4 text-center">Item +13 Count</h5>
              <div>
                <p class="card-text fs-6">Normal: 241</p>
                <p class="card-text fs-6">Excellent: 406</p>
                <p class="card-text fs-6">1st Wing: 10</p>
                <p class="card-text fs-6">2nd Wing: 10</p>
                <p class="card-text fs-6">Cape: 9</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="container">
    <div class="mb-5 row">
      <div class="col-6">
        <a href="#" class="footer_link fs-5 fw-semibold text-decoration-none">ABOUT US</a>
        <p class="fourth_color fs-6">We are group of MU Players that is passionate on bringing the old school gameplay to you</p>
      </div>
      <div class="col-md-3 col-lg-2">
        <a href="#" class="footer_link fs-5 fw-semibold text-decoration-none">CONTACT US</a>
      </div>
      <div class="col-md-3 col-lg-2">
        <a href="#" class="footer_link fs-5 fw-semibold text-decoration-none">EXTERNAL LINKS</a>
      </div>
      <div class="col-md-6 col-lg-2">
        <a href="#" class="footer_link fs-5 fw-semibold text-decoration-none">EXTERNAL LINKS</a>
      </div>
    </div>
    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-between mb-4">
      <div class="fourth_color">
        <i class="fa-regular fa-copyright"></i> <span id="policy_date"></span>
      </div>
      <div class="gap-3 hstack">
        <span class="fourth_color">FOLLOW US:</span>
        <a href="https://www.facebook.com/profile.php?id=61566423287724&mibextid=LQQJ4d" target="_blank" class="third_color"><i class="fa-brands fa-square-facebook fa-2xl "></i></a>
      </div>
    </div>
  </footer>
  <!-- all modal -->

  <!-- register modal -->
  <div class="modal fade" id="registermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">REGISTER A NEW ACCOUNT</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body fourth_color">
          <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
              <label for="username_reg" class="form-label">USERNAME</label>
              <input type="text" class="form-control" id="username_reg" placeholder="4 to 10 alphanumeric" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6">
              <label for="password_reg" class="form-label">PASSWORD</label>
              <input type="password" id="password_reg" class="form-control" placeholder="4 to 10 characters long" aria-describedby="passwordHelpBlock" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6">
              <label for="confirmpassword_reg" class="form-label">CONFIRM PASSWORD</label>
              <input type="password" id="confirmpassword_reg" class="form-control" placeholder="re-type your password" aria-describedby="passwordHelpBlock" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6">
              <label for="email_reg" class="form-label">EMAIL ADDRESS</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="email_reg" aria-describedby="inputGroupPrepend" placeholder="please use a valid email" required>
                <div class="invalid-feedback">
                  Please choose a valid email.
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">By registering you agree to our <a href="#tos" class="tos text-decoration-none" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="tos"><span class="third_color">Terms of Service.</span></a></label>
                <div class="collapse mt-3" id="tos">
                  <div class="border card card-body">
                    <div class="card-title fs-5">Terms of Service</div>
                    <p class="fourth_color fs-6">Legal Agreement:</p>
                    <p class="fourth_color" style="font-size: smaller;">Your use of the Site is subject at all times to these Terms of Service and our Privacy Policy. Any content, including but not limited to, user identities created on the Site or submitted to the Service is governed by these Terms. This includes, but is not limited to, proper in-game and out of game conduct. This Agreement is in addition to, and does in no way replace or supplant, the End User License Agreement (the "EULA") that accompanied the MuOnline software and to which the MuOnline software is subject. You also may be subject to additional terms and conditions that may apply when you use or purchase certain other MuOnline services, affiliate services, third-party content or software.</p>
                    <p class="fourth_color" style="font-size: smaller;">MuOnline recommends that all users periodically review these Terms since MuOnline is a live and evolving community. MuOnline reserves the right, at its sole and absolute discretion, to revise, amend, change, add to, delete, or update these terms and the Service, effective with or without prior notice by publishing the revised or updated Agreement on our website at MuOnline. The revised or updated Agreement is effective upon publication and your continued use of the Site and the Service following notice and publication of the revised or updated Agreement on the site will constitute your acceptance of the updated terms. If you do not agree with these revised or updated Terms, you are obligated to terminate your User ID immediately and cancel any services for which you have signed up.</p>
                    <p class="fourth_color fs-6">Eligibility and Age Requirements:</p>
                    <p class="fourth_color" style="font-size: smaller;">The Site and the Service are for users age 13 and over. In accordance with the Children's Online Privacy Protection Act of 2000, if you are under the age of 13, personal information cannot be collected from you and thus, you are prohibited from creating a membership account through the Service, shall not be eligible to enter any prize awarding events and/or promotions, and are asked not to provide any personal information of any kind on the Site, through the Service, or to us.</p>
                    <p class="fourth_color" style="font-size: smaller;">As noted, the Site and the Service are for users age 13 and over. While children of all ages may view the Site, only those 13 or older can use the Site and related games and services. We will not knowingly accept any applications or other submissions from anyone under the age of 13. If we learn that anyone under the age of 13 is attempting to make an application or place an order, we will terminate the transaction if it is feasible to do so and subsequently delete any personal information sent to us. Also, we do not knowingly accept, collect, maintain or use personal information regarding children under the age of 13 on this Site.</p>
                    <p class="fourth_color" style="font-size: smaller;">If a parent or legal guardian of a child discovers that their child under the age of 13 has provided us with personally identifiable information and would like MuOnline to stop collecting such information, or have the child's personal information deleted from our database records, they should contact us at contact@MuOnline.com. We will review, update, or remove the child's information as requested within reasonable time.</p>
                    <p class="fourth_color" style="font-size: smaller;">If you are over the age of 13, but still considered a minor under the law of the relevant state, we ask that you review these Terms as well as our Privacy Policy with your parent(s) or legal guardian(s) to ensure they understand and agree to them. We strongly encourage parents or legal guardians to be positive and active role models to their children and spend time together online with their children, familiarizing themselves with the Service and overseeing any communication between their children and any other Internet users. It is highly suggested that parents or legal guardians educate their children about online conduct, specifically including but not limited to, never revealing, distributing, or otherwise communicating their personal identifying information such as real names, images, addresses, or phone numbers without parental or guardian permission when using the Internet.</p>
                    <p class="fourth_color" style="font-size: smaller;">MuOnline is an ever-evolving community comprised of many different participants with different experiences and backgrounds. While we may choose to monitor and take action upon inappropriate player conduct, chat or links to the Service, it is possible that at any time there may be language or other material accessible on or through the Service that may be inappropriate for children or offensive to some users of any age. This agreement outlines rules of conduct for players accessing the Service. We cannot ensure that all players will adhere to these terms and not provide content or access to content that parents or guardians may find inappropriate or that any user may find objectionable. MuOnline does not pre-screen the content, the materials or the communications transmitted by each player. As such, it is highly encouraged that parents provide guidance to users under the age of majority and exercise their parental responsibility in restricting access of their children to such content.</p>
                    <p class="fourth_color fs-6">User Identity/Account Creation:</p>
                    <p class="fourth_color" style="font-size: smaller;">When creating a user identity ("User ID", "account") by completing and submitting the MuOnline registration form, you represent that you have reviewed, understand, and are in full compliance with the Terms. You must also provide truthful and accurate information in the registration process and be who you claim to be. If you are a minor, your parent(s) or guardian(s) must preside over your registration process and/or complete the registration process for you, in which case they will take full responsibility for all obligations under this Agreement and are completely liable for all activities conducted through the Account by you or any other party, whether authorized by the registered user or not.</p>
                    <p class="fourth_color" style="font-size: smaller;">During the registration process, you must select login information ("Login Information") comprised of a unique login name ("User ID," "account name") and a secure password ("password").</p>
                    <p class="fourth_color" style="font-size: smaller;">As creator of your User ID, you are completely responsible for your identity and MuOnline will not tolerate offensive, obscene, or otherwise inappropriate user identities. If a User ID violates any part of these Terms, determined at the sole and absolute discretion of MuOnline Support Staff, we may immediately, temporarily, or permanently ban such User ID from the Site or Service, with or without notice or prior warning.</p>
                    <p class="fourth_color fs-6">Account Security:</p>
                    <p class="fourth_color" style="font-size: smaller;">You, as the registered user of an account, are ultimately and completely responsible for maintaining confidentiality of your login information and computer system used to access the Site or Service. Further, you are solely responsible and liable for any and all uses of your Login Information, whether authorized by you or not. You may not directly or indirectly reveal your password to anyone for any reason at any time or allow anyone else to access the account. Sharing, trading, swapping, selling, buying, bartering, or otherwise distributing accounts or account/Login Information is strictly prohibited and subject to disciplinary action up to and possibly including service termination at the sole and absolute discretion of our support staff. MuOnline will NEVER ask for your account password and you should NEVER reveal it, EVER; even when contacting us about an account issue.</p>
                    <p class="fourth_color" style="font-size: smaller;">When creating a User ID, you agree to indemnify and hold MuOnline and its affiliates harmless for any improper use of such identity including, but not limited to, improper or illegal use by someone to whom you have revealed your password in any way. MuOnline is not responsible for any misuse of your User ID, whether such misuse is by you or by third parties. When interacting in any online community we strongly recommend that all players think before they click and engage in safe internet practices at all times.</p>
                    <p class="fourth_color" style="font-size: smaller;">If you discover that the confidentiality of your account Login Information may have been compromise, you are required to immediately and truthfully report this to MuOnline as soon as possible by emailing or submitting a request for help through the MuOnline Helpdesk. We will coordinate with proper investigating authorities to hold individuals perpetrating online crimes accountable for their actions, including those who submit fraudulent or false reports.</p>
                    <p class="fourth_color fs-6">Disciplinary Action and User ID Termination:</p>
                    <p class="fourth_color" style="font-size: smaller;">MuOnline can and does issue warnings and temporary suspensions and permanent terminations of user identities for user violations. We retain the sole discretion as to when and how to impose warnings, penalties and/or disciplinary actions. The severity of a violation and number of occurrences factor into the decisions, but they are not the only measures used. User identities may be banned, both temporarily and permanently, without prior warning.</p>
                    <p class="fourth_color" style="font-size: smaller;">To avoid any doubt, you acknowledge that MuOnline has sole discretion with respect to penalties and disciplinary actions even if there is a credit remaining on your account.</p>
                    <p class="fourth_color" style="font-size: smaller;">If you feel you or your User ID has been unfairly warned or disciplined, please submit a request for help at the MuOnline Helpdesk or send an email with pertinent detail to contact@MuOnline.com. All submitted account action disputes will be carefully reviewed yet MuOnline will only take action with valid claims in its determination.</p>
                    <p class="fourth_color fs-6">Payment Gateways:</p>
                    <p class="fourth_color" style="font-size: smaller;">MuOnline strives to provide free quality games via the Site and Service. Users are not required to purchase in-game items to fully enjoy the Service, however, Users may charge Virtual Money to their accounts using PaymentWall to acquire those charged Items. Before using either payment gateway, MuOnline recommends you to review their Terms of Service carefully and be sure you agree to their terms separate from this ToS. When you present payment gateway information to MuOnline, you represent to MuOnline that you are the authorized user of such payment gateway account being used to acquire Virtual Money. MuOnline is not affiliated with PaymentWall. If any payment is reversed, cancelled or charged back, your Account with us may be immediately suspended without notice or further be terminated if found fraud.</p>
                    <p class="fourth_color fs-6">Abuse of Exploits/Bugs:</p>
                    <p class="fourth_color" style="font-size: smaller;">Making use or abusing of any existing/known exploits and/or bugs is completely forbidden.</p>
                    <p class="fourth_color fs-6">Server Outages:</p>
                    <p class="fourth_color" style="font-size: smaller;">There will be regular periods of server maintenance as well as spot maintenance, usually coinciding with a new game or new service. MuOnline will do its best to limit server down time to twenty four hours. However, MuOnline is not liable for any loss of usage or data experienced as a result of maintenance or other down times and you agree to hold MuOnline harmless for any such loss.</p>
                    <p class="fourth_color" style="font-size: smaller;">MuOnline will not be responsible for a user's inability to access paid services during server maintenance.</p>
                    <p class="fourth_color" style="font-size: smaller;">MuOnline shall not be liable for any delay or failure to perform resulting from causes outside the reasonable control of MuOnline, including without limitation any failure to perform hereunder due to unforeseen circumstances or cause beyond MuOnline's control such as acts of God, war, terrorism, riots, embargoes, acts of civil or military authorities, fire, floods, accidents, strikes, or shortages of transportation facilities, fuel, energy, labor or materials.</p>
                    <p class="fourth_color" style="font-size: smaller;">Further, we cannot and do not promise or ensure that you will be able to access your Account whenever you want, and there may be extended periods of time when you cannot access your Account. You assume the entire risk as to the results and performance of the Software and the Game in connection with your hardware and software, and you assume the entire cost of all servicing, repair and/or correction of your hardware and software.</p>
                    <p class="fourth_color fs-6">Third Party Sites:</p>
                    <p class="fourth_color" style="font-size: smaller;">Clicking a hyperlink may direct you away from the Site. MuOnline does not endorse or control any third party linked sites, is not responsible for their content and has no association with the owners or operators of such sites. Also, other sites may have different terms of service and different privacy policies. MuOnline therefore strongly recommends that you inform yourself regarding the practices of third party websites.</p>
                    <p class="fourth_color fs-6">Liability:</p>
                    <p class="fourth_color" style="font-size: smaller;">Neither MuOnline nor its parent, subsidiaries, licensors or affiliates shall be liable in any way for damage or loss of any kind resulting from (a) the use of or inability to use the service including without limitation loss of goodwill, work stoppage, computer failure or malfunction; (b) the loss or damage to player characters, accounts, statistics, inventories, user profile information stored by associated games; or (c) interruptions of service including without limitation ISP disruptions, software or hardware failures or any other event which may result in a loss of data or disruption of service. In no event will MuOnline be liable to you or anyone else for any direct, indirect, incidental, special, exemplary or consequential damages.</p>
                    <p class="fourth_color fs-6">Indemnification:</p>
                    <p class="fourth_color" style="font-size: smaller;">You agree to indemnify and hold harmless MuOnline and its affiliates from and against any claim, loss, expense or damage resulting from or arising out of your failure to comply with these terms or any illegal action or inappropriate conduct by you in connection with your use of the Site or visits to the Site.</p>
                    <p class="fourth_color fs-6">Service Update or Notice of Change:</p>
                    <p class="fourth_color" style="font-size: smaller;">MuOnline reserves the right, at its sole and absolute discretion, to change, modify, add to, supplement or delete access policies, the availability of any feature of the Service, hours of availability, content, data, software or equipment needed to access the Service, effective with or without prior notice. However, material changes (as determined in MuOnline sole and absolute discretion) will be disclosed prior to or subsequent those changes.</p>
                    <p class="fourth_color" style="font-size: smaller;">MuOnline will provide you with notification of any such changes to the Service through a server maintenance, announcement, or by email. If any future changes to this Agreement are unacceptable to you or cause you to no longer be in compliance with this Agreement, you must terminate, and immediately stop using, the Service and the Account. Your continued use of the Service following any revision to this Agreement constitutes your complete and irrevocable acceptance of any and all such changes. MuOnline may change, modify, suspend, or discontinue any aspect of the Service at any time. MuOnline may also impose limits on certain features or restrict your access to parts or all of the Service without notice or liability.</p>
                    <p class="fourth_color fs-6">Additional Terms:</p>
                    <p class="fourth_color" style="font-size: smaller;">Void Where Prohibited. No purchase necessary to play games. The operators of this website reserve the right suspend or terminate Player's access to the website at any time for any reason or no reason. Points have no cash value.</p>
                    <p class="fourth_color fs-6">Closing:</p>
                    <p class="fourth_color" style="font-size: smaller;">Thank you again for visiting MuOnline. We hope you enjoy your stay and take full advantage of the online community we are developing. Please remember that you are a guest at the Site and act with the same courtesy and respect you expect from other guests. MuOnline always reserves the right to refuse or terminate service.</p>
                  </div>
                </div>
                <div class="invalid-feedback">You must agree before submitting.</div>
              </div>
              <div class="d-flex justify-content-sm-between mt-5">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn thirdb_color" type="submit"><span class="fourth_color">CREATE ACCOUNT</span></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- login modal -->
  <div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginmodallabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="loginmodallabel">LOGIN</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body fourth_color">
          <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-12">
              <label for="username_login" class="form-label">USERNAME</label>
              <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fa-regular fa-user second_color"></i></span>
                <input type="text" class="form-control" id="username_login" aria-describedby="inputGroupPrepend" required>
                <div class="valid-feedback">Looks good!</div>
              </div>
            </div>
            <div class="col-md-12">
              <label for="password_login" class="form-label">PASSWORD</label>
              <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fa-solid fa-lock second_color"></i></span>
                <input type="password" class="form-control" id="password_login" aria-describedby="inputGroupPrepend" required>
                <div class="valid-feedback">Looks good!</div>
              </div>
            </div>
            <div class="d-flex justify-content-sm-between mt-5">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button class="btn thirdb_color" type="submit"><span class="fourth_color">CREATE ACCOUNT</span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="index.js"></script>
</body>

</html>