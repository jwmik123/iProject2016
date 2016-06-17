<!DOCTYPE html>
<html ng-app="schoolCheck">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Free Web tutorials">
        <meta name="author" content="Donovan Roubos, Joel Mik, Duco Drupsteen, Keven de Koning">
        <title>iProject - BST8</title>
        <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>
    <body>



        <div class="wrapper"  ng-controller="SchoolController as schools">

<!---POPUP--->
            <!--<div class="popup-wrapper">-->
            <!--	<div class="popup">-->
            <!--		<h2>Here i am</h2>-->
            <!--		<a class="close" href="">&times;</a>-->
            <!--		<div class="content">-->
            <!--			Thank to pop me out of that button, but now i'm done so you can close this window.-->
            <!--		</div>-->
            <!--	</div>-->
            <!--</div>-->

<!---LANDER--->
            <div class="lander">
                <div class="lander-wrapper">
                    <div class="lander-logo-wrapper">
                        <div class="lander-logo"><img src="assets/images/logo-name.png"></img></div>
                        <div class="lander-text">Check jouw school in 3 stappen!</div>
                    </div>
                    <div class="lander-steps-wrapper">
                        <div class="lander-steps-tekst">Doorloop de 3 stappen</div>
                        <a href="#first-step"><div class="lander-steps-icon"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></div></a>
                    </div>
                </div>

            </div>
<!---NAVIGATION--->
            <div class="navigation">
                <div class="navigation-wrapper">
                    <!--<div class="menu-burger-icon"><i class="fa fa-bars" aria-hidden="true"></i></div>-->
                    <div class="menu-logo"></div>
                    <!--<div class="menu-list-icon"><i class="fa fa-star-o" aria-hidden="true"></i></div>-->
                </div>
            </div>
<!---STEP 1--->
            <div class="step" id="first-step">
                <div class="step-wrapper">
                    <div class="step-head-wrapper">
                        <div class="step-number-wrapper">
                            <div class="step-number">Stap <span class="red-text">1</span></div>
                            <div class="step-head">Basisschool advies</div>
                        </div>
                        <div class="step-line red-line"></div>

                    </div>
                    <div class="advice-wrapper">
                        <div class="advice-tekst">Kies jouw basischool advies om een selectie te maken van de scholen.</div>
                        <div class="advice-buttons">
                            <ul>
                                <a href="#second-step"><li class="red-bg"><span class="noselect" ng-click="schools.searchQuery='vmbo-b'">VMBO-B</span></li></a>
                                <a href="#second-step"><li class="orange-bg"><span class="noselect" ng-click="schools.searchQuery='vmbo-k'">VMBO-K</span></li></a>
                                <a href="#second-step"><li class="yellow-bg"><span class="noselect" ng-click="schools.searchQuery='vmbo-t'">VMBO-T</span></li></a>
                                <a href="#second-step"><li class="green-bg"><span class="noselect" ng-click="schools.searchQuery='havo'">HAVO</span></li></a>
                                <a href="#second-step"><li class="blue-bg"><span class="noselect" ng-click="schools.searchQuery='vwo'">VWO</span></li></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
<!---STEP 2--->
            <div class="step" id="second-step">
                <div class="step-wrapper">
                    <div class="step-head-wrapper">
                        <div class="step-number-wrapper">
                            <div class="step-number">Stap <span class="orange-text">2</span></div>
                            <div class="step-head">Scholen checken</div>
                            <div class="step-backto">
                                <div class="step-backto-text">Terug naar stap 1</div>
                                <a href="#first-step"><div class="step-backto-icon"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></div></a>
                            </div>
                        </div>
                        <div class="step-line orange-line"></div>
                    </div>

                    <div class="search-criteria-wrapper">
                        <div class="search-criteria-field">
                            <ul>
                                <li>
                                    <div class="search-criteria">
                                        <div class="search-criteria-name">Stadsdeel</div>
                                        <div class="search-criteria-select">
                                             <select ng-model="filterDict['district']" ng-options="school.district as school.district for school in schoolCheck | unique: 'district'"  >
                                                 <option value="">-- Maak uw keuze --</option>
                                              {{school}}
                                            </select>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="search-criteria">
                                        <div class="search-criteria-name">Bijzonderheden</div>
                                        <div class="search-criteria-select">
                                             <select ng-model="filterDict['specials']"  ng-options="school.specials as school.specials for school in schoolCheck | unique: 'specials'">
                                               <option value="">-- Maak uw keuze --</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="search-criteria">
                                        <div class="search-criteria-name">Onderwijs Concept</div>
                                        <div class="search-criteria-select">
                                             <select ng-model="filterDict['concept']" ng-options="school.concept as school.concept for school in schoolCheck | unique: 'concept'" >
                                                 <option value="">-- Maak uw keuze --</option>
                                              {{school}}
                                            </select>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="search-criteria">
                                        <div class="search-criteria-name">Grondslag</div>
                                        <div class="search-criteria-select">
                                             <select ng-model="filterDict['basis']"  ng-options="school.basis as school.basis for school in schoolCheck | unique: 'basis'">
                                                 <option value="">-- Maak uw keuze --</option>
                                                <option>{{school}}</option>

                                            </select>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="school-list-wrapper">
                        <div class="school-list">
                            <ul>
                                <div class="center-li">
                                    <li class="pos-abs" ng-model="schools.searchQuery" ng-repeat="school in schoolCheck | filter: customFilter | filter:schools.searchQuery"  ng-class="{active:schools.school==school}">
                                        <div class="school-image"><img src="assets/images/school-logo.jpg"></img></div>
                                        <div class="school-mini-info">
                                            <div class="school-name">{{ school.schoolname }}</div>
                                            <div class="school-location">{{ school.address }}</div>
                                            <div ng-click="toggleFavorite(school)" class="school-favorite"> <i id="school-favorite-star" class="fa fa-star activeFavorites" ng-class="{isFavorite:favoriteSchool.indexOf(school)>-1}" aria-hidden="true"></i> </div>
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </div>
                        <div class="more-button"><i class="fa fa-plus-circle" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
<!---STEP 3--->
            <div class="step">
                <div class="step-wrapper">
                    <div class="step-head-wrapper">
                        <div class="step-number-wrapper">
                            <div class="step-number">Stap <span class="yellow-text">3</span></div>
                            <div class="step-head">Jouw voorkeurlijst</div>
                            <div class="step-backto">
                                <div class="step-backto-text">Terug naar stap 2</div>
                                <a href="#second-step"><div class="step-backto-icon"><i  class="fa fa-arrow-circle-up" aria-hidden="true"></i></div></a>
                            </div>
                        </div>
                        <div class="step-line yellow-line"></div>

                    </div>

                    <div class="school-list-wrapper">
                        <div class="school-list" id="special-height">
                            <ul  class="school-list-ul">
                                <div class="center-li" id="result">
                                    <li class="pos-abs" ng-repeat="school in favoriteSchool">
                                        <div class="school-image"><img src="assets/images/school-logo.jpg"></img></div>
                                        <div class="school-mini-info">
                                            <div class="school-name">{{ school.schoolname }}</div>
                                            <div class="school-location">{{ school.address }}</div>
                                        </div>
                                    </li>
                                </div>
                            </ul>
                        </div>

                        <div class="school-list-email-wrapper">
                          <?php
                            function runMyFunction() {
                              echo 'I just ran a php function';

                              $to  = 'joelmik123@gmail.com';

                          	// subject
                          	$subject = 'Test Email';

                          	// message
                          	$message = "
                          	<html>
                          	<head>
                          	  <title>Test email</title>
                          	</head>
                          	<body style='background-color: red; color: white;' ng-repeat='school in favoriteSchool'>
                          	  <p>Mijn voorkeurslijst</p>
                          	  <table>
                          	    <tr>
                          	      <th>Schoolnaam</th><th>locatie</th><th>opendag</th><th>idk</th>
                          	    </tr>g
                          	    <tr>
                          	      <td></td>{{school.schoolname}}<td>{{school.schooladdress}}</td><td>21 mei</td><td>1970</td>
                          	    </tr>
                          	    <tr>
                          	      <td>Bindelmeer College</td><td>Amsterdam Oost, straat 7</td><td>3 Augustus</td><td>1973</td>
                          	    </tr>
                          	  </table>
                          	</body>
                          	</html>
                          	";

                          	// To send HTML mail, the Content-type header must be set
                          	$headers  = 'MIME-Version: 1.0' . "\r\n";
                          	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                          	// Additional headers
                          	$headers .= 'To: joelmik123@gmail.com' . "\r\n";
                          	$headers .= 'From: Joel Mik<joelmik123@live.nl>' . "\r\n";
                          	$headers .= 'Cc: iemand@example.com' . "\r\n";
                          	$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

                          	// Mail it
                          	mail($to, $subject, $message, $headers);
                            }

                            if (isset($_GET['hello'])) {
                              runMyFunction();
                            }
                          ?>
                            Stuur hier je lijst naar jouw e-mail!
                            <div class="school-list-email-icon">
                              <a href='index.php?hello=true'>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                              </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
<!---SCRIPTS--->
    <script type="text/javascript" src="assets/javascript/jquery/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="https://opensource.keycdn.com/angularjs/1.5.5/angular.min.js "></script>
    <script type="text/javascript" src="assets/javascript/node_modules/angular-cookies/angular-cookies.js"></script>
    <script type="text/javascript" src="assets/javascript/node_modules/ngstorage/ngStorage.min.js"></script>
    <script type="text/javascript" src="assets/javascript/app.js"></script>
    <script type="text/javascript" src="assets/javascript/school-favorite.js"></script>
    <script type="text/javascript" src="assets/javascript/controller/schoolController.js"></script>
    <script type="text/javascript" src="assets/javascript/controller/unique.js"></script>
    <script type="text/javascript" src="assets/javascript/navigation.js"></script>
    <script type="text/javascript" src="https://raw.githubusercontent.com/ganeshmax/jcarousellite/master/jquery.jcarousellite.js"></script>
    <script type="text/javascript" src="assets/javascript/school-list.js"></script>
    <script type="text/javascript" src="assets/javascript/school-list-more.js"></script>
    <script type="text/javascript" src="assets/javascript/smooth-scroll.js"></script>
    <script type="text/javascript" src="assets/javascript/button-click.js"></script>
    <script type="text/javascript" src="assets/javascript/school-list-popup.js"></script>
    </body>
</html>
