<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('css/front/main_page_header.css') }}">
  
    <title>{{__('Logistic')}}</title>
</head>
<body>
                                <!-- MENU -->
    <header>
        <div class="nav-box">
            <img class="logotype" 
            src="{{ asset('storage/images/logotruck.jpg') }}" 
            alt="Logotype">
            <nav>
                <ul class="nav-links">
                    <li>
                        <a class="active" href="#ABOUT">{{__('About Us')}}</a>
                    </li>
                    <li>
                        <a class="active" href="#CAREER">{{__('Career')}}</a>
                    </li>
                    <li>
                        <a href="{{ route('front.trucks.index') }}">{{__('Trucks')}}</a>
                    </li>
                    <li>
                        <a href="#CONTACT" class="btn-contact" >{{__('Contact')}}</a>
                    </li>
                </ul>

            <img class="lang-en"
                src="{{ asset('storage/images/flagen.png') }}" 
                alt="lang">
                <a class="lang-en" href="/lang/en"></a>

            <img class="lang-lt" 
                src="{{ asset('storage/images/flaglt.png') }}" 
                alt="lang">
                <a class="lang-lt" href="/lang/lt"></a>
            </nav>
        </div>
        <div class="nav-line"></div>
    </header>
    <div class="nav-line"></div>
                                   <!-- ABOUT US -->
<section id="ABOUT">
    <main>
        <div class="header-box-about-us">
                <h1 class="about-us">{{__('ABOUT US')}}</h1>
        </div>
        <div class="header-box-first">
            <img
            src="{{ asset('storage/images/logistic.jpg') }}" 
            alt="about-us">
            <h2 class="header-box-first-text">{{__('Are you ready to to invest?')}}</h2>
            <h2 class="header-box-two-text">{{__('Maybe you would like to have partneship with us?')}}</h2>
            <h2 class="header-box-three-text">{{__('Or maybe you would like to buy a new truck?')}}</h2>
        </div>                               
        <div class="header-box">
            <div class="btn-box">
                <a href="{{ route('front.trucks.index') }}">
                    <button class="btn"></button>
                </a>
        </div>
            <h1 class="about-us-header">{{__('How we started?')}}</h1>
            <div class="header-line-one"></div>
            <div class="header-line-two"></div>
            <div class="header-line-three"></div>

            <p class="about-us-text-first-paragraph">{{__('Our company begins in 2018, with a single Volvo truck and myself as employer.')}}
            <br>{{__('Having a single truck with a refrigerated trailer, a chief executive/manager,')}}
            <br>{{__('a driver, and an accountant, the companys story began there and then, at a room of in ex-factory.')}}
            <br>{{__('Steadly growing over the years, our company has buyed more then 5 trucks over 2 years, 5 employees.')}}
            <br>{{__('We are strongest in Lithuania company for 2019-2023 and we are still growing.')}}
            </p>     
        </div>
    </section>

                    {{-- CAREER --}}

<section id="CAREER">
    <div class="career-box-text">
        <h1 class="career-h1">{{__('CAREER')}}</h1>
    </div>

    <div class="career-box">
        <div class="career-line-one"></div>
        <div class="career-line-two"></div>
        <div class="career-line-three"></div>
        <div class="career-line-four"></div>

        <img class="career-first-photo" src="{{ asset('storage/images/career-first.jpg') }}" alt="career-first-photo">
        <div class="career-first-text">{{__('We dream big. We strive to be amongst the TOP 10 Transport & Logistics companies in Europe. It is not an easy goal. However, the opportunity to take the lead and build a truly international company drives us to new heights. By joining us, you can make an impact on European logistics, create changes that influence business results, participate in the modernization and digitalization journey, learn from involvement in various projects and association with different professionals, meet people who inspire you, enjoy an international environment, foster team spirit, celebrate success, and enjoy recognition. It is this invaluable experience that enriches us and helps us to grow.')}}</div>
        
        <div class="career-line-second-picture-one"></div>
        <div class="career-line-second-picture-two"></div>
        <div class="career-line-second-picture-three"></div>
        <div class="career-line-second-picture-four"></div>
        <img class="career-second-photo" src="{{ asset('storage/images/career-second.jpg') }}" alt="career-second-photo">
        <div class="career-second-text">{{__('We believe that we are most successful when we are empowered to take the lead. This approach means that with us you will meet supportive leaders who will guide you in making the right decisions which will help in achieving your career and business success. However, you, and only you, will be in charge of your own growth as well as the environment which you create. Here we deliver opportunities for everyone, and everyone is free to choose what opportunities work best for them, make decisions, project their own career path, and constantly grow. Led by our values, this approach helps us create a winning culture which supports working together in a meaningful way to accomplish us strategic dreams and your personal career success.')}}
        </div>

        <div class="career-line-third-picture-one"></div>
        <div class="career-line-third-picture-two"></div>
        <div class="career-line-third-picture-three"></div>
        <div class="career-line-third-picture-four"></div>
        <img class="career-third-photo" src="{{ asset('storage/images/career-third.jpg') }}" alt="career-third-photo">
        <div class="career-third-text">{{__('Surpass yourself: Internal and external training, Mentorship programmes, internal career opportunities, and hackathons. Stay healthy: enjoy health insurance, a gym, as much fruit as you like, walking challenges, subsidised breakfast and lunch and an ergonomic work place. Rest more: Enjoy your birthday with a day off. Volunteer: Take a paid day off for volunteering, access a good deeds budget. Be entertained: Enjoy our corporate events, team-building activities, traditional Christmas and Easter breakfasts. Get what you deserve: Feel special with our loyalty programme perks, be recognised for value-based behavior. Enjoy flexibility: a hybrid working model, 30-day work-ation from the EU or Schengen area, work and rest areas in the office.')}}
        </div>
    </div>
    </section>
                                       <!-- CONTACT -->
<section id="CONTACT">
    <div class="contact-box-line">
        <h1 class="contact-text">{{__('CONTACT')}}</h1>
    </div>
        <div class="contact-box">
            <div class ="get-line"></div>
            <h1 class="get-in-touch">{{__('Get in Touch')}}</h1>
        <div class="feel-free-to-contact">
            {{__('Feel free to contact us!')}}
        </div>
    <div class="contact-text-field">
<form id="form" action="main.js" method="POST" autocomplete="off" onsubmit="return false">
            <label class="field-h1-text">{{__('Name')}}<span class="field-h1-text-cross"> *</span></label>
        <br><br>
        <div class="text-field">
            <input class="name" type="text" name="name" id="firstName" placeholder=" " >
            <label class="name-label">{{__('Name')}}</label>
            <p id="error"></p>
        </div>
            <label class="field-h1-text">{{__('Email')}}<span class="field-h1-text-cross"> *</span></label>
        <br><br>
        <div class="text-field">
            <input class="email" id="emailz" type="email" name="email" placeholder=" " > 
            <label class="email-label">{{__('Email')}}</label>
            <p id="error"></p>
        </div>
        <br>
        <label class="field-h1-textarea">{{__('Message')}}</label>
        <div class="text-field">
            <div class="msg">
            <textarea class="textA" placeholder=" " name="textarea" id="textarea" ></textarea>
            <label class="textA-label">{{__('Message')}}</label>
            </div>
        </div> 
    </div>
    <button type="submit" name="submit" class="contact-box-button">{{__('Submit')}}</button>
</form>
</section>
</main> 

                                <!-- FOOOTER -->
                                <footer>
                                    <div class="contact-box-line">
                                        <div class="navigation-footer">
                                            <nav>
                                                <ul class="nav-links">
                                                    <li>
                                                        <a class="active" href="#ABOUT">{{__('About Us')}}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#CAREER">{{__('Career')}}</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('front.trucks.index') }}">{{__('Trucks')}}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#CONTACT" class="btn-contact">{{__('Contact')}}</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="footer-text">
                                            <p>{{__('©2023 Copyrights  | All Rights Reserved')}}</p>
                                        </div>
                                    </div>
                                </footer>
                                <script src="{{asset ('js/front/main.js') }}"></script>
                                </body>
                                </html>
