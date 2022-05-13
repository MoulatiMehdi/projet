<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- fonts-->
    <?php include 'elem_fonts.php' ?>
    <!-- icon -->
    <link rel="icon" href="img/logo/cropped-favicon-2.png" sizes="32x32">
    <!-- local CSS file-->
    <link rel="stylesheet" href="css/style.css">
    <title>politique de confidentialité - Myinterimo</title>
    <style>
        .politique section {
            margin: 35px 0;
        }

        a {
            font-size: 15px;
            color: var(--color-main);
        }

        h5, h3 {
            font-family: "Rubik", sans-serif;
            font-weight: 500;
        }

        h1 {
            font-family: "Rubik", sans-serif;
            font-size: 40px;
            font-weight: 700;
        }

        ul li {
            font-size: 15px !important;
            font-weight: 500;
            color: var(--color-text-description);
            /*text-align: center;*/
        }
    </style>
</head>
<body aria-live="polite" aria-atomic="true" class="position-relative ">
<div class="toast-container position-absolute top-50 start-50  p-3 "
     style="z-index:5">
    <!-- Position it: -->
    <!-- - `.toast-container` for spacing between toasts -->
    <!-- - `.position-absolute`, `top-0` & `end-0` to position the toasts in the upper right corner -->
    <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
    <?php

    if (!empty($_SESSION['error_phone'])) {
        msg_warning_toast($_SESSION['error_phone']);
        unset($_SESSION['error_phone']);
    }


    ?>
</div>

<?php include 'elem_menu.php' ?>
<div class="container ">

    <!-- grab some space to replace the fixed navbar -->
    <section class=" my-5 py-3"></section>
    <section class="politique">
        <section>
            <p>Date d’entrée en vigueur : 12 janvier 2022</p>
            <h1>Conditions Générales d’Utilisation</h1>
            <p>Site <a href="index.php">www.myinterimo.com</a> et l’application mobile MyInterimo</p>
            <p class="description">
                La société <b> ESPACEO SARL </b> est l’éditeur d’un site internet accessible à l’adresse suivante :
                <a href="index.php">www.myinterimo.com</a>, ainsi que d’une application mobile exploitée sous le nom
                MyInterimo. La société
                ESAPACEO SARL a rassemblé et organisé les données reçues sur son site au sein d’une base de données,
                originale qu’elle met à jour régulièrement. L’Utilisateur est informé que le Site Internet
                <a href="index.php"><a href="index.php">www.myinterimo.com</a></a> ainsi que l’application mobile
                MyInterimo sont proposés
                par la société :
                <b> ESPACEO SARL </b>

                Société à Responsabilité Limité au capital de 20 000 CHF <br>
                Registre du Commerce et des Sociétés de Genève N°824 524 599 <br>
                TVA Intracommunautaire : FR89 824524599 <br>
                Siège social : 1 Rue Pécolat, 1201 GENÈVE <br>
                L’hébergeur du site Internet étant : LEASEWEB <br>

            </p>
        </section>
        <section>
            <h1>Profil utilisateur</h1>
            <p class="description">
                La publication et la lecture des annonces sont strictement réservées aux professionnels de la
                transaction Immobilière, titulaires d’une carte T. ou affiliés.

            </p>
            <p class="description"> En publiant ou en lisant une annonce sur le site Internet <a href="index.php">www.myinterimo.com</a>
                ou sur l’application
                MyInterimo, l’Utilisateur s’engage sur l’honneur à être un professionnel de la transaction.</p>
            <p class="description"> La Société peut demander à l’Utilisateur, à n’importe quel moment, de justifier de
                la copie de sa carte
                T, de son extrait K-BIS ou de sa carte d’agent commercial affiliée à une carte T.</p>
            <p class="description"> A défaut de présentation de la carte T, l’Utilisateur devra justifier d’une activité
                règlementée
                d’avocat mandataire ou de Notaire.</p>
            <p class="description"> L’Utilisateur devra impérativement signaler tout changement de statut, de
                coordonnées et d’affiliation à
                une autre carte T dans les 15 jours du changement par lettre recommandée avec accusée réception à
                l’adresse indiquée à l’article ci-dessus, ou par courrier électronique à l’adresse
                <a href="mailto:contact@myinterimo.com">contact@myinterimo.com</a>.</p>
        </section>
        <section>
            <h1>Champ d’application, acceptation des conditions générales</h1>
            <p class="description">
                Les présentes ont pour objet de définir les conditions dans lesquelles l’Utilisateur bénéficie des
                Services fournis par la Société au travers de son Site Internet et de son application mobile.

            </p>
            <p class="description"> L’ensemble des Services fournis par la Société et mis à disposition de l’Utilisateur
                est détaillé sur le
                Site Internet de la Société à l’adresse <a href="index.php">www.myinterimo.com</a>, ainsi que sur
                l’application mobile
                MyInterimo.</p>
            <p class="description"> L’application mobile est disponible en téléchargement depuis l’App store et Google
                Play.
            </p>
            <p class="description">La souscription, l’accès ou l’utilisation des Services implique l’acceptation sans
                restriction ni
                réserves des présentes.</p>
        </section>
        <section>
            <h1>Modification des conditions générales d’utilisation</h1>
            <p class="description">
                Il est expressément précisé que les présentes conditions générales pourront faire l’objet de
                modifications par la société <b> ESPACEO SARL </b> qui s’appliqueront immédiatement à tout utilisateur.

            </p>
            <p class="description"> Les Utilisateurs sont donc invités à consulter de manière régulière l’application
                MyInterimo afin de
                prendre connaissance des éventuelles modifications des Conditions Générales d’Utilisation.</p>
        </section>
        <section>
            <h1>Accès aux services</h1>
            <p class="description">
                Les Services sont exclusivement accessibles en ligne sur le Site Internet : <a href="index.php">www.myinterimo.com</a>,
                et sur
                l’application mobile MyInterimo.

                Pour utiliser les services proposés sur l’application mobile MyInterimo, l’Utilisateur devra avoir un
                accès à internet et disposer d’un support compatible (smartphone, tablette tactile…).
            </p>
            <p class="description"> Les services sont accessibles par l’Utilisateur depuis l’application MyInterimo, de
                manière illimitée et
                gratuite.</p>
            <p class="description">La Société fait ses meilleurs efforts afin de rendre ses Services disponibles 24
                heures sur 24 et 7
                jours sur 7, indépendamment des opérations de maintenance desdits Services et/ou Serveurs et/ou du Site
                Internet.</p>
            <p class="description">La Société se réserve toutefois la possibilité de modifier, interrompre, à tout
                moment, temporairement
                ou de manière permanente tout ou partie des Services sans information préalable des Utilisateurs et sans
                droit à indemnités. </p>
        </section>
        <section>
            <h1>Durée abonnement et annulation</h1>
            <p class="description">
                MyInterimo est un outil gratuit accessible à tous les professionnels de la transaction immobilière et
                la version gratuite donne accès à tous les services de l’application mobile Myinterimo.
            </p>
        </section>
        <section>
            <h1>Identifiants et volume de connexion</h1>
            <p class="description">
                Chaque Utilisateur éditera son mot de passe et son identifiant, (ci-après désignés : Identifiants de
                connexion). Il devra par ailleurs ajouter une photo personnelle et récente sans quoi la société ESPACEO
                SARL se réserve le droit de refuser la validation du profil de l’Utilisateur.

                Tous les Identifiants de connexion sont strictement personnels.

                L’Utilisateur désignera une personne habilitée à recevoir et gérer ces identifiants et veillera à ce que
                ceux-ci ne soient pas communiqués à des tiers.

                L’Utilisateur reste seul responsable des Identifiants de connexion et de toute utilisation frauduleuse
                de ceux-ci.

                En cas de perte, de vol ou de divulgation accidentelle, l’Utilisateur devra immédiatement en informer la
                société <b> ESPACEO SARL </b> et devra modifier ses identifiants de connexion.

                Il devra également mettre immédiatement en œuvre les mesures nécessaires afin d’empêcher toute connexion
                à partir des Identifiants divulgués.
            </p>
        </section>
        <section>
            <h1>Garantie de l’utilisation</h1>
            <p class="description">
                En accédant au Site Internet de la Société ou en téléchargeant l’application mobile MyInterimo,
                l’Utilisateur déclare, garantit et s’engage à :
            </p>
            <ul>
                <li> Accéder aux services en toute bonne foi, de manière raisonnable, et non contraire aux termes des
                    présentes ; Les commentaires des Utilisateurs devront en tout état de cause toujours être modérés,
                    courtois, et polis,
                </li>
                <li> Ne pas commercialiser directement ou indirectement les Services et/ou l’accès aux Services,
                </li>
                <li> Ne pas réutiliser tout ou partie des Services qu’elle contient, en particulier à des fins
                    commerciales
                    et/ou collectives et/ou à des fins personnelles sous une forme et/ou un média non autorisé par la
                    Société.
                </li>

            </ul>
            <p class="description">
                En cas de manquement à l’une ou l’autre de ces obligations et, sans que cette liste soit limitative,
                l’Utilisateur reconnaît et accepte que la Société aura la faculté de lui refuser, unilatéralement et
                sans notification préalable, l’accès à tout ou partie du Site Internet.

            </p>
        </section>
        <section>
            <h1> Garantie de la société
            </h1>
            <p class="description">
                La Société met à la disposition de l’Utilisateur, au travers de son Site Internet et de son application
                mobile, une base de données ainsi que l’accès à un certain nombre de Services.


            </p>
            <p class="description"> L’Utilisateur est parfaitement conscient que la Société ne peut notamment garantir
                les suites données
                :</p>
            <ul>


                <li> Aux annonces de vente de biens immobiliers qu’il a souhaité consulter sur l’application mobile ou
                    sur
                    le site Internet MyInterimo;
                </li>
                <li> Aux réponses qui lui ont été apportées suite à ses demandes de mises en relation avec les autres
                    Utilisateurs ayant diffusé des annonces de vente de biens immobiliers.

                </li>
            </ul>
            <p class="description"> En tout état de cause, la société <b> ESPACEO SARL </b> ne sera pas responsable
                vis-à-vis de l’Utilisateur ou des
                clients de ce dernier de toute perte ou dommage de quelque sorte que ce soit résultant :
            </p>
            <ul>


                <li> De l’utilisation de la base de données de la société <b> ESPACEO SARL </b>;
                </li>
                <li> De toute autre circonstance survenant sur le fondement de la base de données de la société
                    <b> ESPACEO SARL </b>.
                </li>
            </ul>
            <p class="description">Par ailleurs, la société <b> ESPACEO SARL </b> ne garantit pas que les informations
                fournies sont exemptes
                d’erreurs et ne garantit, entre autres, ni la pertinence, ni l’exhaustivité ni l’exactitude des
                informations.
            </p>
            <p class="description"> En conséquence, l’Utilisateur reconnaît qu’il utilise la base de données à ses
                risques et périls et
                qu’il réalise une vérification sous sa propre responsabilité.
            </p>
            <p class="description"> La société <b> ESPACEO SARL </b> ne saurait être tenue pour responsable d’évènements
                pouvant résulter de
                l’interprétation et de l’utilisation par l’Utilisateur de la base de données.
            </p>
            <p class="description">
                La société <b> ESPACEO SARL </b> ne sera en aucun cas responsable des dommages directs ou indirects tels
                que
                perte de marchés, perte de clientèle et, plus généralement, tout trouble commercial quel qu’il soit qui
                pourrait résulter de l’utilisation de la base de données
            </p>
        </section>
        <section>
            <h1> Annonces</h1>
            <p class="description">L’utilisateur qui entend passer une annonce, autorise la société <b> ESPACEO
                    SARL </b> à
                récupérer sur son site internet ou sur tous sites de diffusion toutes ses annonces ainsi diffusées.
                L’utilisateur donne donc l’autorisation express à la société <b> ESPACEO SARL </b>, sans limites ni
                contestation
                possible, de récupérer par extraction des données (textes et photos), ses annonces diffusées sur le web.

            </p>
            <p class="description">Tout Utilisateur qui entend publier sur le site Internet ou sur l’application une
                offre de vente doit
                être titulaire d’un mandat de vente ou d’une délégation en bonne et due forme.
            </p>
            <p class="description"> S’agissant de professionnels, l’établissement d’une délégation de mandat est
                obligatoire, et ce, afin de
                protéger l’agence déléguée et l’agence délégante.
            </p>
            <p class="description">La Société peut demander à l’Utilisateur, à n’importe quel moment, de justifier de la
                copie de son
                mandat de vente ou de sa délégation.</p>
            <p class="description">Les Utilisateurs ne devront pas faire de publicité, quelle qu’en soit la nature, dans
                une annonce ou
                dans un message privé.</p>
            <p class="description">
                En tout état de cause, la société <b> ESPACEO SARL </b> se réserve le droit de refuser toute annonce
                dont le
                caractère pourrait être contraire à l’esprit et à la vocation du site.
            </p>
            <p class="description">
                En cas de vente réalisée en inter-agence via l’application MyInterimo, le Client s’engage à mettre à
                jour ses Annonces partagées, en signalant ledit bien vendu à vendu@espaceo.net.
            </p>
        </section>
        <section>
            <h1>Droit de correction</h1>
            <p class="description">
                La société <b> ESPACEO SARL </b> se réserve le droit de corriger les erreurs susceptibles d’affecter la
                Base de
                données sans que cela implique pour lui un engagement de fournir une quelconque assistance, maintenance
                ou des services associés à la base de données.

            </p>
        </section>
        <section>
            <h1>Dysfonctionnements du réseau internet</h1>
            <p class="description">
                L’Utilisateur reconnaît et accepte que le réseau Internet ou données mobiles, et plus généralement tout
                réseau télématique utilisé à des fins de transmission de données, peut connaître des périodes de
                saturation en raison de l’encombrement de la bande passante, des coupures dues à des incidents
                techniques ou à des interventions de maintenance, de décisions des sociétés gérant lesdits réseaux ou
                tous autres évènements indépendants de la volonté de la société <b> ESPACEO SARL </b>.


            </p>
            <p class="description">En conséquence, la responsabilité de la société <b> ESPACEO SARL </b> est écartée en
                cas de dysfonctionnement ou
                d’interruption des prestations incombant à ce dernier trouvant leur origine dans des évènements
                affectant les réseaux de communication et, plus généralement, tout évènement indépendant de la volonté
                de la société <b> ESPACEO SARL </b> et échappant à son contrôle.</p>
            <p class="description">
                La société <b> ESPACEO SARL </b> ne saurait pas plus être responsable du fait de détérioration ou perte
                de
                données dues à un dysfonctionnement des réseaux ou toute autre raison indépendante de sa volonté et
                échappant à son contrôle et, d’une façon générale, de toute détérioration ou dysfonctionnement.

            </p>
        </section>
        <section>
            <h1> Propriété application mobile</h1>
            <p class="description">
                La société <b> ESPACEO SARL </b> est titulaire des droits d’auteurs sur le site Internet <a
                        href="index.php">www.myinterimo.com</a> ainsi
                que sur l’application mobile MyInterimo, notamment en application de l’article L. 111-1 du code de la
                propriété intellectuelle.
            </p>
            <p class="description"> La société <b> ESPACEO SARL </b> dispose en outre, en sa qualité d’auteur de ladite
                application mobile
                MyInterimo, du droit sui generis au sens des articles L.122-6 du Code de la propriété intellectuelle
                d’effectuer ou d’autoriser la reproduction, l’adaptation et la mise sur le marché par vente ou location.

            </p>
        </section>
        <section>


            <h1>Données personnelles</h1>
            <p class="description">
                Conformément à la Loi n° 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux
                libertés, les utilisateurs disposent d’un droit d’opposition, d’accès, de rectification et de
                suppression de leurs données personnelles.
            </p>
            <p class="description"> L’utilisateur pourra adresser un courrier simple en précisant sa demande et ses
                coordonnées.
            </p>
        </section>
        <section>
            <h1>Droit applicable et règlement des litiges</h1>
            <p class="description">
                Les présentes sont soumises au droit français. En cas de litige relatif à l’application,
                l’interprétation, la validité et l’exécution des présentes, et à défaut d’accord amiable entre les
                parties, compétence expresse est donnée aux tribunaux français.

            </p>
            <div>
                <h5 style="text-decoration: underline">RGPD–ESPACEO SARL</h5>
                <p class="description">

                    <b> ESPACEO SARL </b> est engagée dans le respect de la réglementation en vigueur applicable au
                    traitement de
                    données à caractère personnel et, en particulier, le règlement (UE) 2016/679 du Parlement européen
                    et du
                    Conseil du 27 avril 2016, ou RGPD.L

                </p>
                <p class="description">Les données étant le cœur de notre métier, <b> ESPACEO SARL </b> atteste depuis
                    2021, être
                    en conformité avec le
                    RGPD, et traite vos données de façon pertinente, non excessive et strictement nécessaire à
                    l’atteinte de
                    nos finalités.</p>
                <p class="description"> Dans le cadre de leurs relations contractuelles, les parties s’engagent à
                    respecter la réglementation en
                    vigueur applicable au traitement de données à caractère personnel et, en particulier, le règlement
                    (UE)
                    2016/679 du Parlement européen et du Conseil du 27 avril 2016 applicable à compter du 25 mai 2018
                    (ci-après, « le règlement européen sur la protection des données »).
                </p>
                <p class="description"> Les parties reconnaissent que <b> ESPACEO SARL </b> et le client sont
                    coresponsables de
                    la détermination des
                    finalités et moyens relatifs au traitement des données personnelles et qu’ils interviennent entant
                    que
                    responsables de traitement au sens de la loi 78-17 du 6 janvier 1978 modifiée et du règlement (UE)
                    2016/679 du parlement européen et du conseil du 27 avril 2016.

                </p>
                <p class="description"><b> ESPACEO SARL </b> attire l’attention du client sur les obligations qui
                    incombent aux
                    responsables de
                    traitement au titre des dispositions légales et réglementaires précitées et consistant notamment à:
                </p>
                <ul>
                    <li> Informer et, le cas échéant, recueillir le consentement implicite et explicite des personnes
                        concernées via l’envoi d’un sms;
                    </li>
                    <li> S’assurer du respect des droits d’accès, de rectification, d’effacement, de limitation de
                        portabilité
                        et d’opposition au traitement des données et de permettre aux personnes la possibilité de
                        définir des
                        directives anticipées sur le devenir des données après le décès via une interface en ligne, mais
                        également directement auprès de nos services commerciaux, administratifs ou techniques;
                    </li>
                    <li> Définir une durée de conservation des données adéquate et pertinente de 1 an à compter de la
                        relève
                        de l’annonce pour les données à caractère personnel comme le numéro de téléphone et le pseudo,
                        et de 3
                        ans pour les données n’ayant pas un caractère personnel;
                    </li>

                    <li> Assurer la protection, la confidentialité, l’intégrité et la sécurité des données à caractère
                        personnel collectées notamment grâce à des moyens permettant de garantir la confidentialité,
                        l’intégrité, la disponibilité et la résilience constantes des systèmes et des services de
                        traitement.
                        Des moyens permettant de rétablir la disponibilité des données à caractère personnel et l’accès
                        à
                        celle-ci dans des délais appropriés en cas d’incident physique ou technique.
                    </li>
                </ul>
                <p class="description"><b> ESPACEO SARL </b> met également en place des procédures permettant de tester,
                    analyser et évaluer
                    régulièrement l’efficacité des mesures techniques et organisationnelles pour assurer la sécurité du
                    traitement.
                </p>
                <p class="description">La génération d’une clé API est disponible, le responsable du traitement restera
                    le même étant donné que
                    les données seront hébergées et récoltées par la même entité.

                </p>
                <p class="description">Registres de traitements 30.1 et Mentions Légales 13.1 déclarées en conformité
                    par le Délégué à la
                    Protection des Données et le Responsable de traitement en 2021 selon la réglementation (UE) 2016/679
                    du
                    Parlement européen et du Conseil du 27 avril 2016, ou RGPD.</p>
            </div>
            <div>
                <h5 style="text-decoration: underline"> AVENANT RGPD</h5>
                <p class="description">
                    1. OBJET DE L’AVENANT <br>

                    Dans le cadre de leurs relations contractuelles, les parties s’engagent à respecter la
                    réglementation en
                    vigueur applicable au traitement des données à caractère personnel et, en particulier, le règlement
                    (UE)
                    2016/679 de Parlement européen et du Conseil du 27 avril 2016 applicable RGPD »).

                    Cet avenant a pour objectif de définir les rôles et responsabilités de chacun.

                </p>
                <p class="description"> 2. RESPONSABLES DE TRAITEMENT <br>

                    La société <b> ESPACEO SARL </b> est le Responsable de Traitement des Données Personnelles au sens
                    du RGPD
                    pour
                    toutes les prestations concernées par le contrat, y compris la collecte des données personnelles des
                    internautes via leur inscription en ligne sur l’application MyInterimo et via le formulaire en ligne
                    sur
                    le site web <a href="index.php">www.myinterimo.com</a>.

                </p>
                <p class="description"> 3. La société <br>
                    <b> ESPACEO SARL </b> est exclusivement responsable des obligations légales, techniques,
                    procédurales et autres qui lui incombent au titre de la mise en place de ses traitements et de son
                    utilisation des données personnelles des internautes. La société <b> ESPACEO SARL </b> s’engage à
                    prendre
                    toutes
                    les mesures propres à assurer la sécurité, l’intégrité et la confidentialité de ces données
                    personnelles
                    conformément à la loi et aux règles de l’art.

                    Ainsi, <b> ESPACEO SARL </b> a identifié et mis en conformité :

                    Les traitements opérés par celle-ci par finalité principale et les types de données traitées,
                    Les sous-traitants qui interviennent sur chaque traitement,
                    Les destinataires de ces données,
                    Les lieux de stockage de ces données,
                    Les durées de conservation de ces données,
                    Les bases légales (contrat, consentement éclairé, intérêt légitime) pour chaque traitement mis en
                    œuvre,

                    <b> ESPACEO SARL </b> a également documenté sa conformité et accentué l’information des personnes
                    concernées.

                    Enfin, <b> ESPACEO SARL </b> a renforcé les mesures utiles pour protéger les personnes concernées
                    par nos
                    traitements et les mesures permettant de répondre aux principaux risques et menaces qui pèsent sur
                    la
                    vie privée des personnes concernées par nos traitements et mis en place un processus de sécurité en
                    cas
                    d’incident/fuite de données.

                </p>
                <p class="description">4. Le client a également la qualité de Responsable de Traitement des Données
                    Personnelles au sens du
                    RGPD au titre de la mise en place de ses propres traitements des données personnelles des abonnés
                    internautes issus de ce contrat dont la finalité est l’échange de biens et de recherches sur
                    l’application MyInterimo.

                </p>
                <p class="description"> 5. À ce titre, la société <b> ESPACEO SARL </b> autorise le client à effectuer
                    tous traitements sur les
                    données
                    personnelles des internautes qu’elle lui transmet, dans le respect de la finalité suivante :
                    répondre
                    aux offres et demandes de l’internaute prospect sur un bien immobilier/lot précis ou une demande de
                    documentation sur ce bien immobilier/lot.

                    Les données personnelles des internautes transmises par <b> ESPACEO SARL </b> au client sont les
                    suivantes :

                    Nom et Prénom,
                    Adresse email,
                    Numéro de téléphone,
                    Code postal,
                    Demande d’information sur un bien immobilier,

                    <b> ESPACEO SARL </b> ne saurait donc être responsable de toute utilisation des données par le
                    Client dans la
                    poursuite de finalités autres que celle définie au présent avenant.

                    Ainsi, les Parties conviennent que, si le Client souhaite effectuer des actions de communication ou
                    de
                    prospection ultérieure à destination de l’internaute prospect sur tout autre sujet ou mettre en
                    place un
                    traitement à finalité différente, il lui appartiendra d’obtenir ce consentement supplémentaire une
                    fois
                    la mise en relation effectuée avec l’internaute.

                    Ainsi, si le Client va au-delà de la finalité précisée au présent contrat, il sera seul responsable
                    envers tout tiers ou toute autorité de contrôle.

                </p>
                <p class="description"> 6. DURÉE DE VALIDITÉ DE L’AVENANT <br>

                    Le présent avenant a une durée de validité identique à celle du contrat.

                </p>
                <p class="description"> 7. RÉPONSES AUX DEMANDES DES INTERNAUTES FORMULÉES AU CLIENT <br>

                    Conformément au RGPD, la société <b> ESPACEO SARL </b> agissant en tant que Responsable de
                    traitement
                    s’engage à
                    répondre positivement, dans un délai de 20 (vingt) jours ouvrés maximum, à toute demande du client
                    si ce
                    dernier venait à être saisi d’une demande d’exercice de ses droits par un internaute prospect
                    figurant
                    dans les bases de <b> ESPACEO SARL </b>.
                </p>

            </div>


        </section>

    </section>

</div>
<?php include 'elem_footer.php' ?>

</body>
<!-- fontAwesome Script -->
<script src="./js/fontAwesome.js"></script>

<!-- JavaScript Bundle with Popper(Boostrap) -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


</html>
