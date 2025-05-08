<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AGBANDE - DOCUMENTATION</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="antialiased">
    <div class="container-fluid">
        <div class="row  shadow-lg bg-light fixed-top header">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand text-white bg-dark px-3" href="/"> <strong>AGBANDE</strong></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a href="#" class="nav-link" aria-current="page" href="#">Site Officiel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="/documentation">Documentation</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <img src="logo.png" class="shadow-lg p-3 bg-body rounded" alt="" srcset="">
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="container content">
                    <div class="row">
                        <div class="col-md-12 text-center sur l'accueil">
                            <a href="/" class="return">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg>
                                <strong>Retour</strong>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="title">bienvenus sur la documentation de l'API</h1>
                            <p class="text-dark">AGBANWA innove afin de garantir à ses clients une visibilité optimale sur leurs coûts logistiques tout en leur permettant de visualiser les possibilités d’optimisation, <br> en mutualisant les chargements, par exemple</p>
                        </div>
                    </div>
        
                    <!-- ################ TOUTES LES ROUTES RELATIVES AUX USERS ############### -->
                    <div class="bg-dark text-center mb-5">
                        <h1 class="text-white">TOUTES LES ROUTES RELATIVES AUX USERS</h1>
                    </div>
                    <div class="row" id="documenation">
                        <div class="col-md-12">
        
                            <!-- REGISTRATION -->
        
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ CREATION DE COMPTE ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/register </h5>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">DATA ::</strong></h5>
                                    <p class="">
                                    <ul>
                                        <li>data =
                                            <ul>
                                                <li>{</li>
                                                "name": "gogo", <br>
                                                "email": "christian@gmail.com", <br>
                                                "password": "mypassword", <br>
                                                "role": "is_admin",## is_admin,is_transporter,is_sender,is_supervisor,is_shipper,is_biller <br>
                                                "lastname": "gogo",##Facultatif <br>
                                                "phone": 23445757785,##Facultatif ## C'est Pour les transporteurs <br>
                                                "adresse": "cotonou",##Facultatif ## C'est Pour les transporteurs <br>
                                                "phone": 23445757785,##Facultatif ## C'est Pour les transporteurs <br>
                                                "phone": 23445757785,##Facultatif ## C'est Pour les transporteurs
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.POST(url,json=data)</h5>
                                </div>
                            </div>
        
                            <!-- LOGIN -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ LOGIN D'UN USER ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/login </h5>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">DATA ::</strong></h5>
                                    <p class="">
                                    <ul>
                                        <li>data =
                                            <ul>
                                                <li>{</li>
                                                "email": "christian@gmail.com", <br>
                                                "password": "mypassword",
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.POST(url,json=data)</h5>
                                </div>
                            </div>
        
                            <!-- LOGOUT -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ LOGOUT D'UN USER ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/logout </h5>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">DATA ::</strong></h5>
                                    <p class="">
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization",<br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQyODkzZWIwY",<br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.GET(url,option=header)</h5>
                                </div>
                            </div>
        
                            <!-- GET ALL USERS -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ RECUPERER TOUT LES USERS ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/users </h5>
        
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.GET(url)</h5>
                                </div>
                            </div>
        
                            <!-- GET A USER -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ RECUPERER UN USER ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/users/< user_id>
                                    </h5>
        
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.GET(url)</h5>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- ################ LES URLs RELATIFS AUX TYPES TRANSPORTS ############### -->
                    <div class="bg-dark text-center mt-5">
                        <h1 class="text-white">LES URLs RELATIFS AUX TYPES DE TRANSPORTS</h1>
                    </div>
                    <div class="row" id="documenation">
                        <div class="col-md-12">
        
                            <!-- AJOUT D'UN TYPE DE MOYEN DE TRANSPORT -->
        
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ AJOUT D'UN TYPE DE MOYEN DE TRANSPORT ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/transports/types/create </h5>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">DATA ::</strong></h5>
                                    <p class="">
                                    <ul>
                                        <li>data =
                                            <ul>
                                                <li>{</li>
                                                "name":'Type 1', <br>
                                                "image": "https://www.shutterstock.com/fr/image-photo/golden-swirl-artistic-design-painter-uses-1243121752"#L'URL de l'image stockée sur cloudinary
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQyODkzZWIwYzk1ZDAzOTAxM2NjZTEzN2U0OWNmNmUyYzVmNzZjMjIxMzBjMTdmNzg3Mm", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.POST(url,option=header,json=data)</h5>
                                </div>
                            </div>
        
                            <!-- RECUPERATION DE TOUT LES TYPES DE MOYENS DE TRANSPORT -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ RECUPERATION DE TOUT LES TYPES DE MOYENS DE TRANSPORT ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/transports/types </h5>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">DATA ::</strong></h5>
                                    <p class="">
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQyODkzZWIwYzk1ZDAzOTAxM2NjZTEzN2U0OWNmNmUyYzVmNzZjMjIxMzBjMTdmNzg3Mm", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.GET(url,json=header)</h5>
                                </div>
                            </div>
        
                            <!-- RECHERCHE D'UN TYPE DE MOYEN DE TRANSPORT -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ RECHERCHE D'UN TYPE DE MOYEN DE TRANSPORT ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/transports/types/search </h5>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">DATA ::</strong></h5>
                                    <p class="">
                                    <ul>
                                        <li>data =
                                            <ul>
                                                <li>{</li>
                                                "search":"searching..."#La recherche ici se fait en fonction du **name** du type de transport
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQyODkzZWIwYzk1ZDAzOTAxM2NjZTEzN2U0OWNmNmUyYzVmNzZjMjIxMzBjMTdmNzg3Mm", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.POST(url,option=header,json=data)</h5>
                                </div>
                            </div>
        
                            <!-- SUPPRESSION D'UN TYPE DE MOYEN DE TRANSPORT -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ SUPPRESSION D'UN TYPE DE MOYEN DE TRANSPORT ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/transports/types/< transportType_id>/delete </h5>
                                    <p class="">
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQyODkzZWIwYzk1ZDAzOTAxM2NjZTEzN2U0OWNmNmUyYzVmNzZjMjIxMzBjMTdmNzg3Mm", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.DELETE(url,option = header)</h5>
                                </div>
                            </div>
        
                            <!-- UPDATE D'UN TYPE DE MOYEN DE TRANSPORT -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ UPDATE D'UN TYPE DE MOYEN DE TRANSPORT ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/transports/types/< transportType_id>/update
                                    </h5>
                                    <p class="">
                                    <ul>
                                        <li>data =
                                            <ul>
                                                <li>{</li>
                                                "champ1":"Champ 1 modifié", <br>
                                                "champ2":"Champ 1 modifié",
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <p class="">
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjO0zZpxiOSBmpiTyom6a6EwuPzccmJ31eH5le4NLq-0i22qMv_GL3lQA", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
        
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.PATCH(url,option=header,json=data)</h5>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- ################ LES URLs RELATIFS AUX MOYENS DE TRANSPORTS ############### -->
                    <div class="bg-dark text-center mt-5">
                        <h1 class="text-white">LES URLs RELATIFS AUX MOYENS DE TRANSPORTS</h1>
                    </div>
                    <div class="row" id="documenation">
                        <div class="col-md-12">
        
                            <!-- AJOUT D'UN MOYEN DE TRANSPORT -->
        
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ AJOUT D'UN MOYEN DE TRANSPORT ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/transports/create </h5>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">DATA ::</strong></h5>
                                    <p class="">
                                    <ul>
                                        <li>data =
                                            <ul>
                                                <li>{</li>
                                                "user_id":2,#L'ID de l'utilisateur <br>
                                                "type_id":2,#L'ID du type de transport <br>
                                                "fabric_year": "13-06-199",#Année de fabrication <br>
                                                "circulation_year": "13-06-200",#Année de mise en circulation <br>
                                                "tech_visit_expire": "13-06-2999",#Année d'expiration de la voiste technique <br>
                                                "gris_card": "https://www.shutterstock.com/fr/image-photo/golden-swirl-artistic-design-painter-uses-1243121752"#L'URL de l'image stockée sur cloudinary <br>
                                                "tech_visit": "https://www.shutterstock.com/fr/image-photo/golden-swirl-artistic-design-painter-uses-1243121752" #L'URL de l'image stockée sur cloudinary <br>
                                                "assurance_card": "https://www.shutterstock.com/fr/image-photo/golden-swirl-artistic-design-painter-uses-1243121752"#L'URL de l'image stockée sur cloudinary
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQyODkzZWIwYzk1ZDAzOTAxM2NjZTEzN2U0OWNmNmUyYzVmNzZjMjIxMzBjMTdmNzg3Mm", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.POST(url,option=header,json=data)</h5>
                                </div>
                            </div>
        
                            <!-- RECUPERATION DE TOUT LES MOYENS DE TRANSPORT -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ RECUPERATION DE TOUT LES MOYENS DE TRANSPORT ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/transports </h5>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">DATA ::</strong></h5>
                                    <p class="">
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQyODkzZWIwYzk1ZDAzOTAxM2NjZTEzN2U0OWNmNmUyYzVmNzZjMjIxMzBjMTdmNzg3Mm", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.GET(url,json=header)</h5>
                                </div>
                            </div>
        
                            <!-- RECUPERATION DE TOUT LES MOYENS DE TRANSPORT D'UN USER(transporteur) -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ RECUPERATION DE TOUT LES MOYENS DE TRANSPORT D'UN USER(transporteur) ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/transports/user/<user_id>
                                    </h5>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">DATA ::</strong></h5>
                                    <p class="">
        
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQyODkzZWIwYzk1ZDAzOTAxM2NjZTEzN2U0OWNmNmUyYzVmNzZjMjIxMzBjMTdmNzg3Mm", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.GET(url,option=header)</h5>
                                </div>
                            </div>
        
                            <!--   RECUPERATION D'UN MOYEN DE TRANSPORT -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ RECUPERATION D'UN MOYEN DE TRANSPORT ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/transports/< transport_id>/retrieve
                                    </h5>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">DATA ::</strong></h5>
                                    <p class="">
        
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQyODkzZWIwYzk1ZDAzOTAxM2NjZTEzN2U0OWNmNmUyYzVmNzZjMjIxMzBjMTdmNzg3Mm", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.GET(url,option=header)</h5>
                                </div>
                            </div>
        
                            <!--   RECUPERATION DE TOUT LES MOYEN DE TRANSPORT VALIDES D'UN USER(transporteur) -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ RECUPERATION DE TOUT LES MOYEN DE TRANSPORT VALIDES D'UN USER(transporteur) ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/transports/user/< user_id>/validated
                                    </h5>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">DATA ::</strong></h5>
                                    <p class="">
        
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQyODkzZWIwYzk1ZDAzOTAxM2NjZTEzN2U0OWNmNmUyYzVmNzZjMjIxMzBjMTdmNzg3Mm", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.GET(url,option=header)</h5>
                                </div>
                            </div>
        
                            <!-- SUPPRESSION D'UN MOYEN DE TRANSPORT -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ SUPPRESSION D'UN MOYEN DE TRANSPORT ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/transports/< transport_id>/delete </h5>
                                    <p class="">
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQyODkzZWIwYzk1ZDAzOTAxM2NjZTEzN2U0OWNmNmUyYzVmNzZjMjIxMzBjMTdmNzg3Mm", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.DELETE(url,option = header)</h5>
                                </div>
                            </div>
        
                            <!-- UPDATE D'UN MOYEN DE TRANSPORT -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ UPDATE D'UN MOYEN DE TRANSPORT ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/transports/< transport_id>/update
                                    </h5>
                                    <p class="">
                                    <ul>
                                        <li>data =
                                            <ul>
                                                <li>{</li>
                                                "champ1":"Champ 1 modifié", <br>
                                                "champ2":"Champ 1 modifié",
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <p class="">
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjO0zZpxiOSBmpiTyom6a6EwuPzccmJ31eH5le4NLq-0i22qMv_GL3lQA", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
        
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.PATCH(url,option=header,json=data)</h5>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- ################ LES URLs RELATIFS AUX FRETS ############### -->
                    <div class="bg-dark text-center mt-5">
                        <h1 class="text-white">LES URLs RELATIFS AUX FRETS</h1>
                    </div>
                    <div class="row" id="documenation">
                        <div class="col-md-12">
        
                            <!-- AJOUT D'UN FRET  -->
        
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ AJOUT D'UN FRET ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/frets/create </h5>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">DATA ::</strong></h5>
                                    <p class="">
                                    <ul>
                                        <li>data =
                                            <ul>
                                                <li>{</li>
                                                "user_id":2,#L'ID de l'utilisateur <br>
                                                "name":2,#L'ID du type de transport <br>
                                                "nature": "13-06-199",#Année de fabrication <br>
                                                "vol_or_quant": 5,#Quantité ou volume <br>
                                                "gris_card": "13-06-2999","https://www.shutterstock.com/fr/image-photo/golden-swirl-artistic-design-painter-uses-1243121752" #L'URL de l'image stockée sur cloudinary <br>
                                                "charg_destination": "Cotonou" <br>
                                                "tech_visit": "https://www.shutterstock.com/fr/image-photo/golden-swirl-artistic-design-painter-uses-1243121752" #L'URL de l'image stockée sur cloudinary <br>
                                                "assurance_card": "https://www.shutterstock.com/fr/image-photo/golden-swirl-artistic-design-painter-uses-1243121752"#L'URL de l'image stockée sur cloudinary
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQyODkzZWIwYzk1ZDAzOTAxM2NjZTEzN2U0OWNmNmUyYzVmNzZjMjIxMzBjMTdmNzg3Mm", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.POST(url,option=header,json=data)</h5>
                                </div>
                            </div>
        
                            <!-- RECUPERATION DE TOUT LES FRETS -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ RECUPERATION DE TOUT LES FRETS ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/frets </h5>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">DATA ::</strong></h5>
                                    <p class="">
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQyODkzZWIwYzk1ZDAzOTAxM2NjZTEzN2U0OWNmNmUyYzVmNzZjMjIxMzBjMTdmNzg3Mm", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.GET(url,json=header)</h5>
                                </div>
                            </div>
        
                            <!-- RECUPERATION DE TOUT LES FRETS D'UN USER(Expéditeur) -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ RECUPERATION DE TOUT LES FRETS D'UN USER(Expéditeur) ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/frets/user/< user_id>
                                    </h5>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">DATA ::</strong></h5>
                                    <p class="">
        
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQyODkzZWIwYzk1ZDAzOTAxM2NjZTEzN2U0OWNmNmUyYzVmNzZjMjIxMzBjMTdmNzg3Mm", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.GET(url,option=header)</h5>
                                </div>
                            </div>
        
                            <!--   RECUPERATION D'UN FRET -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ RECUPERATION D'UN FRET ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/frets/< fret_id>/retrieve
                                    </h5>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">DATA ::</strong></h5>
                                    <p class="">
        
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQyODkzZWIwYzk1ZDAzOTAxM2N", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.GET(url,option=header)</h5>
                                </div>
                            </div>
        
                            <!--   RECUPERATION DE TOUT LES FRETS VALIDES D'UN USER(Expéditeur) -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ RECUPERATION DE TOUT LES FRETS VALIDES D'UN USER(Expéditeur) ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/frets/user/< user_id>/validated
                                    </h5>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">DATA ::</strong></h5>
                                    <p class="">
        
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQyODkzZWIwYzk1ZDAzO", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.GET(url,option=header)</h5>
                                </div>
                            </div>
        
                            <!-- SUPPRESSION D'UN FRET -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ SUPPRESSION D'UN FRET ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/frets/< fret_id>/delete </h5>
                                    <p class="">
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQyODkzZWIwYzk1ZDAzOTAxM2NjZTEzN2U0OWNmNmUyYzVmNzZjMjIxMzBjMTdmNzg3Mm", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.DELETE(url,option = header)</h5>
                                </div>
                            </div>
        
                            <!-- UPDATE D'UN FRET -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ UPDATE D'UN FRET ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/frets/< fret_id>/update
                                    </h5>
                                    <p class="">
                                    <ul>
                                        <li>data =
                                            <ul>
                                                <li>{</li>
                                                "champ1":"Champ 1 modifié", <br>
                                                "champ2":"Champ 1 modifié",
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <p class="">
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjO0zZpxiOSBmpiTyom6a6EwuPzccmJ31eH5le4NLq-0i22qMv_GL3lQA", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
        
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.PATCH(url,option=header,json=data)</h5>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- ################ LES URLs RELATIFS AUX NOTIFICATIONS ############### -->
                    <div class="bg-dark text-center mt-5">
                        <h1 class="text-white">LES URLs RELATIFS AUX NOTIFICATIONS</h1>
                    </div>
                    <div class="row" id="documenation">
                        <div class="col-md-12">
        
                            <!-- AJOUT D'UNE NOTIFICATION  -->
        
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ AJOUT D'UNE NOTIFICATION ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/notifications/create </h5>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">DATA ::</strong></h5>
                                    <p class="">
                                    <ul>
                                        <li>data =
                                            <ul>
                                                <li>{</li>
                                                "sender_id":2,#L'ID de l'utilisateur qui envoie la notification <br>
                                                "receiver_id":3#L'ID de l'utilisateur qui reçoit la notification <br>
                                                "message":"Contenu du message"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQyODkzZWIwYzk1ZDAzOTAxM2NjZTEzN2U0OWNmNmUyYzVmNzZjMjIxMzBjMTdmNzg3Mm", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.POST(url,option=header,json=data)</h5>
                                </div>
                            </div>
        
                            <!-- RECUPERATION DE TOUTE LES NOTIFICATIONS -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ RECUPERATION DE TOUTE LES NOTIFICATIONS ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/notifications </h5>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">DATA ::</strong></h5>
                                    <p class="">
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQyODkzZWIwYzk1ZDAzOTAxM2NjZTEzN2U0OWNmNmUyYzVmNzZjMjIxMzBjMTdmNzg3Mm", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.GET(url,json=header)</h5>
                                </div>
                            </div>
        
                            <!-- RECUPERATION DE TOUTES LES NOTIFICATIONS REçU PAR UN USER -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ RECUPERATION DE TOUTES LES NOTIFICATIONS REçU PAR UN USER ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/notifications/< user_id>/retreive
                                    </h5>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">DATA ::</strong></h5>
                                    <p class="">
        
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQyODkzZWIwYzk1ZDAzOTAxM2NjZTEzN2U0OWNmNmUyYzVmNzZjMjIxMzBjMTdmNzg3Mm", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.GET(url,option=header)</h5>
                                </div>
                            </div>
        
                            <!--   RECUPERATION D'UNE NOTIFICATION -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ RECUPERATION D'UNE NOTIFICATION ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/notifications/< user_id>/retreive
                                    </h5>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">DATA ::</strong></h5>
                                    <p class="">
        
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQyODkzZWIwYzk1ZDAzOTAxM2N", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.GET(url,option=header)</h5>
                                </div>
                            </div>
        
                            <!--   SUPPRESSION D'UNE NOTIFICATION -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ SUPPRESSION D'UNE NOTIFICATION ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/notifications/< notification_id>/delete
                                    </h5>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">DATA ::</strong></h5>
                                    <p class="">
        
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQyODkzZWIwYzk1ZDAzO", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </p>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.DELETE(url,option=header)</h5>
                                </div>
                            </div>
        
        
        
                            <!-- UPDATE D'UNE NOTIFICATION -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button disabled class="btn documentation ">##============ UPDATE D'UNE NOTIFICATION ==========##</button>
                                    </div>
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">URL ::</strong> BASE_URL/api/v1/notifications/< notification_id>/update
                                    </h5>
                                    <p class="">
                                    <ul>
                                        <li>data =
                                            <ul>
                                                <li>{</li>
                                                "champ1":"Champ 1 modifié", <br>
                                                "champ2":"Champ 1 modifié",
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <p class="">
                                    <ul>
                                        <li>header =
                                            <ul>
                                                <li>{</li>
                                                "key": "Authorization", <br>
                                                "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjO0zZpxiOSBmpiTyom6a6EwuPzccmJ31eH5le4NLq-0i22qMv_GL3lQA", <br>
                                                "type": "text"
                                                <li>}</li>
                                            </ul>
                                        </li>
                                    </ul>
        
                                    <h5 class="mt-5"> <strong class="bg-dark p-1 text-white ">EXEMPLE DE REQUEST::</strong> fetch.PATCH(url,option=header,json=data)</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-light shadow-lg py-3 footer fixed-bottom d-none d-md-block d-md-lg">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-dark text-center">© Copyright 2023 - Développé par HSMC</p>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-light shadow-lg py-3 footer d-none d-sm-block">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-dark text-center">© Copyright 2023 - Développé par HSMC</p>
                </div>
            </div>
        </div>

    </div>
</body>

</html>