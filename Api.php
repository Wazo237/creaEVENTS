    < lien  rel =" feuille de style " href =" https://cdn.linearicons.com/free/1.0.0/icon-font.min.css " >
    < lien  rel =" feuille de style " href =" https://use.fontawesome.com/releases/v5.8.1/css/all.css " intégrité =" sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf " crossorigin =" anonyme " >

    <!-- Modernizr JS pour la prise en charge d'IE8 des éléments HTML5 et des requêtes multimédias -->
    < script  src =" https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js " > </ script >

</ tête >
< body  data-spy =" scroll " data-target =" #navbar " class =" static-layout " >
	< nav  id =" header-navbar " class =" barre de navigation navbar-expand-lg py-4 " >
    < classe div  =" conteneur " >
        < a  class =" navbar-brand d-flex align-items-center text-white " href =" deconnexion.php " >
            < h3  class =" font-weight-bolder mb-0 " > Déconnexion </ h3 >
        </a> _ _
        < bouton  class =" navbar-toggler " type =" bouton " data-toggle =" réduire " data-target =" #navbar-nav-header " aria-controls =" navbar-nav-header " aria-expanded =" false " aria-label =" Basculer la navigation " >
            < span  class =" lnr lnr-menu " > </ span >
        </ bouton >
        < div  class =" réduire la barre de navigation-collapse " id =" barre de navigation-en-tête-nav " >
            < ul  class =" navbar-nav ml-auto " >
                < li  class =" élément-nav " >
                    < a  class =" nav-link " href =" portail.php " > Accueil </ a >
                </li> _ _
                < li  class =" élément-nav " >
                    < a  class =" nav-link " href =" about.php " > Statistiques </ a >
                </li> _ _
                < li  class =" élément-nav " >
                    < a  class =" nav-link " href =" blog.php " > Blog </ a >
                </li> _ _
                < li  class =" élément-nav " >
                    < a  class =" nav-link " href =" temoin.php " > Temoignages </ a >
                </li> _ _
                < li  class =" élément-nav " >
                    < a  id =" side-search-open " class =" nav-link " href =" # " >
                        < span  class =" lnr loupe-lnr " > </ span >
                    </a> _ _
                </li> _ _
                 < li  class =" nav-item only-desktop " >
                    < a  class =" nav-link " id =" side-nav-open " href =" # " >
                        < span  class =" lnr lnr-menu " > </ span >
                    </a> _ _
                </li> _ _
            </ul> _ _
        </div> _ _
    </div> _ _
</nav> _ _

< id div =  " side-nav " class =" sidenav " >
	< a  href =" javascript:void(0) " id =" side-nav-close " > × </a> _ _
	
	< div  class =" sidenav-content " >
		<p> _ _
			IAI Cameroun, Carrefour Awae-Escaliers NKOLANGA, Yaoundé
		</p> _ _
		<p> _ _
			< span  class =" fs-16 couleur primaire " > (+237) 242729957/242729958 </ span >
		</p> _ _
		< p > contact@iaicameroun.com </ p >
	</div> _ _
</ div > < div  id =" side-search " class =" sidenav " >
	< a  href =" javascript:void(0) " id =" side-search-close " > × </a> _ _
	< div  class =" sidenav-content " >
		< action de formulaire  ="" >

			< div  class =" input-group md-form form-sm form-2 pl-0 " >
			  < input  class =" form-control my-0 py-1 red-border " type =" text " placeholder =" Rechercher " aria-label =" Rechercher " >
			  < div  class =" input-group-append " >
			    < button  class =" input-group-text red lighten-3 " id =" basic-text1 " >
			    	< span  class =" lnr loupe-lnr " > </ span >
			    </ bouton >
			  </div> _ _
			</div> _ _

		</ formulaire >
	</div> _ _
	
</ div > 	< div  class =" jumbotron d-flex align-items-center " >
  < div  class =" centre de texte conteneur " >
    < section  id =" formulaire de contact " class ="" >
    < classe div  =" conteneur " >
        < classe div  ="" >
            
            < classe div  =" ligne " >
                <!-- Titulaire du formulaire de contact -->
                < div  class =" col-md-8 offset-md-2 contact-form-holder mt-4 " data-aos =" fade-up " >
                    < section  id =" fonctionnalités " class ="" >
    < form  method =" post " action =" api_post.php " enctype =" multipart/form-data " >
                        < classe div  =" ligne " >
                                < b > Client : </ b >   & nbsp < a href = " " > <  h4 > < ? php echo  $  _SESSION  [ ' Utilisateur ' ] ; ?> </ h4 > </ a >
                                <br> _ _
                                < b > Montant frais : </ b > & nbsp & nbsp < h4 > 5000 < / h4 > < a href =  " " > < h4 > FCFA </ h4 > </ a >
                            < div  class =" col-md-12 form-group " >
                              < br > < b > MODE DE PAIEMENT : </ b >
        <br> <br> _ _ _ _
        
         < input  type =" radio " name =" pay " required ="" >   < img  src =" img/om.png " alt =" portfolio-img " class =" portfolio-item " >
    < b > 655152679 </ b > (EYOUM ALOUMBE Yann)
        <br> <br> _ _ _ _
        
         < input  type =" radio " name =" pay " required ="" >   < img  src =" img/mtn.jpg " alt =" portfolio-img " class =" portfolio-item " >
    < b > 672449756 </ b > (KALDJOB Emmanuel Landry)
        <br> _ _
                            </div> _ _
                             < div  class =" col-md-12 form-group " >
                              < label  for =" fichier " >   Veuillez importer la capture d'écran de votre paiement </ label >
                                < type d'entrée  =" fichier " classe =" contrôle-formulaire " id =" fichier " nom =" fichier " requis ="" >
                            </div> _ _
                            < div  class =" centre-texte col-md-12 " >
                                < button  class =" btn btn-primary btn-shadow btn-lg " type =" submit " name =" submit " > Vérifier paiement </ button >
                            </div> _ _
                        </div> _ _
                    </ formulaire >
</section> _ _
                </div> _ _
                <!-- Fin du titulaire du formulaire de contact -->
            </div> _ _
        </div> _ _
        
    </div> _ _
</section> _ _
  </div> _ _
  < div  class =" rectangle-1 " > </ div >
  < div  class =" rectangle-2 " > </ div >
  < div  class =" rectangle-transparent-1 " > </ div >
  < div  class =" rectangle-transparent-2 " > </ div >
  < div  class =" cercle-1 " > </ div >
  < div  class =" cercle-2 " > </ div >
  < div  class =" cercle-3 " > </ div >
  < div  class =" triangle triangle-1 " >
  	< img  src =" img/obj_triangle.png " alt ="" >
  </div> _ _
  < div  class =" triangle triangle-2 " >
  	< img  src =" img/obj_triangle.png " alt ="" >
  </div> _ _
  < div  class =" triangle triangle-3 " >
  	< img  src =" img/obj_triangle.png " alt ="" >
  </div> _ _
  < div  class =" triangle triangle-4 " >
  	< img  src =" img/obj_triangle.png " alt ="" >
  </div> _ _
</div> _ _	
</div> _ _
< footer  class =" mastfoot my-3 " >
    < div  class =" conteneur intérieur " >
         < classe div  =" ligne " >
         	< div  class =" col-lg-4 col-md-12 d-flex align-items-center " >
         		
         	</div> _ _
         	< div  class =" col-lg-4 col-md-12 d-flex align-items-center " >
         		< p  class =" mx-auto text-center mb-0 " > © 2023 creaEVENTS Design by < a  href ="" target =" _blank " > IAI GL3B groupe 6 </ a > . </p> _ _
         	</div> _ _
           
            < div  class =" col-lg-4 col-md-12 " >
            	< nav  class =" nav nav-mastfoot justifier-content-center " >
	                < une  classe =" lien de navigation " href =" # " >
	                	< je  classe =" fab fa-facebook-f " > </ je >
	                </a> _ _
	                < une  classe =" lien de navigation " href =" # " >
	                	< je  classe =" fab fa-twitter " > </ je >
	                </a> _ _
	                < une  classe =" lien de navigation " href =" # " >
	                	< i  class =" fab fa-instagram " > </ i >
	                </a> _ _
	                < une  classe =" lien de navigation " href =" # " >
	                	< i  class =" fab fa-linkedin " > </ i >
	                </a> _ _
	                < une  classe =" lien de navigation " href =" # " >
	                	< je  classe =" fab fa-youtube " > </ je >
	                </a> _ _
	            </nav> _ _
            </div> _ _
            
        </div> _ _
    </div> _ _
</ footer > 	<!-- JS externe -->
	< type de script  =" text/javascript " src =" http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js " > </ script >
	< script  src =" fournisseur/bootstrap/popper.min.js " > </ script >
	< script  src =" fournisseur/bootstrap/bootstrap.min.js " > </ script >
	< script  src =" fournisseur/select2/select2.min.js " > </ script >
	< script  src =" vendeur/owlcarousel/owl.carousel.min.js " > </ script >
	< script  src =" fournisseur/stellar/jquery.stellar.js " type =" text/javascript " jeu de caractères =" utf-8 " > </ script >
	< script  src =" fournisseur/isotope/isotope.min.js " > </ script >
	< script  src =" fournisseur/lightcase/lightcase.js " > </ script >
	< script  src =" vendeur/waypoints/waypoint.min.js " > </ script >
	 < script  src =" https://unpkg.com/aos@next/dist/aos.js " > </ script >
	 
	<!-- JS principal -->
	< script  src =" js/app.min.js " > </ script >
	< script  src =" //localhost:35729/livereload.js " > </ script >
</ corps >
</html> _ 
