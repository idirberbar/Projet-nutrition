<!DOCTYPE html>
<html lang="en">
  <head>
    
    <link rel="stylesheet" href="inscription.css" />
  </head>
<div id="content">

    <h2 class="title">Fitia</h2>

<div class="signup-box-form">
    <div class="login-form">
        <?php 
            if(isset($_GET['reg_err']))
            {
                $err = htmlspecialchars($_GET['reg_err']);

                switch($err)
                {
                    case 'success':
                    ?>
                        <div class="alert alert-success">
                            <strong>Succès</strong> inscription réussie !
                        </div>
                    <?php
                    break;

                    case 'password':
                    ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> mot de passe différent
                        </div>
                    <?php
                    break;

                    case 'email':
                    ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> email non valide
                        </div>
                    <?php
                    break;

                    case 'email_length':
                    ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> email trop long
                        </div>
                    <?php 
                    break;

                    case 'pseudo_length':
                    ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> nom trop long
                        </div>
                    <?php 
                    case 'already':
                    ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> compte deja existant
                        </div>
                    <?php 

                }
            }
            ?>

    <form action="inscription.php" method="post" id="Creation-compte" >

        <div align="center">
             
            <div class="container-raised account-info">
                <h3 class="container-title">Créé ton compte</h3>
                <div class="account-info-row">
                    <label class="typelabel">Nom</label>
                    <div class="typespan">
                        <input class="input-row text-box" type="text" name="nom" placeholder="Nom" size="48" required="" >
                    </div>
                </div>
                <div class="account-info-row">
                    <label class="typelabel">Adresse mail</label>
                    <div class="typespan">
                        <input class="input-row text-box" type="email" name="email" placeholder="Mail" size="48" required="">
                    </div>
                </div>
                <div class="account-info-row">
                    <label class="typelabel">Mot de passe</label>
                    <div class="typespan">
                        <input class="input-row text-box" type="password" name="mot_de_passe" placeholder="Mot de passe" size="48" required="">
                    </div>
                </div>
                <div class="account-info-row">
                    <label class="typelabel">Confirmer le mot de passe</label>
                    <div class="typespan">
                        <input class="input-row text-box" type="password" name="confirmer_mdp" placeholder="Confirmer le mot de passe" size="48" required="">
                        
                    </div>
                </div>
            </div>
            <!-- ********************************************************************************************************* -->
           
            <div class="container-raised body-form account-info">
                <h3 class="container-title">Details du profil</h3>
                <div>
                    <div class="body-form-row">
                        <label class="typelabel">Sexe</label>
                        <div class="typespan">
                            <div class="form-check input-large">
                                <input class="form-check-input" type="radio" id="Hommeradio" name="sexe" value="Homme" required="">
                                <label for="Hommeradio"> Homme </label> &nbsp;
                            </div>
                            <div class="form-check input-large">
                                <input class="form-check-input" type="radio" id="Femmeradio" name="sexe" value="Femme" required="">
                                <label for="Femmeradio"> Femme </label>
                            </div>
                
                        </div>
                    </div>

                    <div class="body-form-row">
                        <label class="typelabel">Date de naissance</label>
                        <div class="typespan">
                            <div class="dropdown">
                                <span class="sub-title">Jour</span>
                                <select class="text-box dropdown-toggle" style="font-size: 1rem;" name="jour" id="Jour">
                                    <option value="1">1</option>
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
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select></div>
                            <div class="dropdown">
                                <span class="sub-title">Mois</span>
                                <select class="text-box dropdown-toggle" style="font-size: 1rem;" id="Mois" name="mois">
                                    <option value="January" selected="selected">Janvier</option>
                                    <option value="February">Février</option>
                                    <option value="March">Mars</option>
                                    <option value="April">Avril</option>
                                    <option value="May">Mai</option>
                                    <option value="June">Juin</option>
                                    <option value="July">Juillet</option>
                                    <option value="August">Aout</option>
                                    <option value="September">Septembre</option>
                                    <option value="October">Octobre</option>
                                    <option value="November">Novembre</option>
                                    <option value="December">Decembre</option>
                                </select>
                            </div>
                            <div class="dropdown">
                                <span class="sub-title">Année</span>
                                <input class="num-box text-box" type="number" id="Annee" name="annee" maxlength="4" value="2000" max="2023" min="1923">
                            </div>
                        </div>
                    </div>
                    <div class="body-form-row">
                        <label class="typelabel">Taille</label>
                        <div class="typespan">
                            
                            <div class="dropdown">
                                <span class="sub-title">cm</span>
                                <input class="text-box num-box" id="Taille-cm" type="number" name="taille" min="1" max="300" maxlength="3" value="152">
                            </div>

                        </div>
                    </div>
                    <div class="body-form-row">
                        <label class="typelabel">Poids</label>
                        <div class="typespan">
                            <input class="text-box num-box" type="number" id="Poids" name="poids" min="1" max="2000" maxlength="4" value="50">
                            <div class="dropdown">
                                <select class="text-box dropdown-toggle" style="font-size: 1rem;" id="Poids-unite" name="Poids-unite">
                                    <option value="Kilograms">Kilogrammes</option>
                                    <option value="Pounds">Pounds</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
    


                    
            </div>



            <!-- ********************************************************************************************************* -->

            <div class="container-raised body-form account-info">
                <h3 class="container-title">Que recherchez-vous?</h3>
                <div>
                    

                    <div class="body-form-row">
                        <label class="typelabel">Objectifs</label>
                        <div class="typespan">
                            <div class="dropdown">
                                
                                <select class="text-box dropdown-toggle" style="font-size: 1rem;" name="objectifs" id="Objectifs">
                                    <option value="" selected="selected"></option>
                                <option value="Perdre du poids">Perdre du poids</option>
                                <option value="Prendre du poids">Prendre du poids</option>
                                <option value="Me muscler">Me muscler</option>
                                <option value="Maintenir poids">Maintenir poids</option>
                                <option value="Modifier mon regime alimentaire">Modifier mon regime alimentaire</option>
                                <option value="Gerer mon stress">Gerer mon stress</option>
                                </select></div>
                            
                           
                        </div>
                    </div>
                    <div class="body-form-row">
                        <label class="typelabel">Votre niveau d'activite de base</label>
                        <div class="typespan">
                            <div class="dropdown">
                            
                                <select class="text-box dropdown-toggle" style="font-size: 1rem;" id="activite" name="niveau_activite">
                                    <option value="" selected="selected"></option>
                                    <option value="Pas tres actif">Pas tres actif</option>
                                    <option value="Moderement actif">Moderement actif</option>
                                    <option value="Actif">Actif</option>
                                    <option value="Tres actif">Tres actif</option>
                                
                                </select>
                            </div>
                            

                           

                        </div>
                    </div>
                    <div class="body-form-row">
                        <label class="typelabel">Votre objectif de poids</label>
                        <div class="typespan">
                            <input class="text-box num-box" type="number" id="objpoids" name="objectif_poids" min="1" max="2000" maxlength="4" value="55">
                            <div class="dropdown">
                                <select class="text-box dropdown-toggle" style="font-size: 1rem;" id="Poids-unite" name="Poids-unite">
                                    <option value="Kilograms">Kilogrammes</option>
                                    <option value="Pounds">Pounds</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                </div><p class="semi-bold">
                    En cochant la case ci-dessous, vous indiquez que vous avez lu et accepté nos 
                    <a href="conditions.html" target="_blank" rel="noopener noreferrer" style="color:blue;">Conditions d'utilisation</a> et
                    <a href="politique.html" target="_blank" rel="noopener noreferrer" style="color: blue;">Politique de confidentialité</a>.</p>


    


                    <div>
                        <div class="form-check input-large">
                            <input id="conditionscheck" type="checkbox" class="form-check-input" name="agree">
                            <label class="form-check-label" for="conditionscheck">
                                J'accepte les conditions d'utilisation et la politique de confidentialité de Fitia.
                            </label>
                        </div>
                    </div>
            </div>
            <button><a href="seconnecter.html">Retour</a></button>
            <input type="submit" value="Valider">
           <!-- <button><a href="verifemail.html">S'inscrire</a></button>  -->
            
            <!-- ********************************************************************************************************* -->

            
               
           


           
        </div>
        </div>
    </form>
</div>
</html>
