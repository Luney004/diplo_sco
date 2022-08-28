@extends('layouts.layout.app')

@section('content')
<div>
    <div class="mt-3">
        <div class="d-flex flex-column flex-md-row d-none d-md-flex mb-3" aria-label="Fil d'Ariane">
            <div class="p-2" style="font-size: 14px">
                <a href="/">Accueil particulier</a>
            </div>
            <div class="p-2 fs-6">
                <i class="bi bi-chevron-right" aria-hidden="true"></i>
            </div>
            <div class="p-2 " style="font-size: 14px">
                <a href="/category/papiers-citoyennete/62197bd333c0179346497418">Papiers &amp; Citoyenneté</a>
            </div>
            <div class="p-2 fs-6">
                <i class="bi bi-chevron-right" aria-hidden="true"></i>
            </div>
            <div class="p-2 " style="font-size: 14px">
                <a href="/category/papiers-citoyennete/62197bd333c0179346497418">Citoyenneté</a>
            </div>
            <div class="p-2 fs-6">
                <i class="bi bi-chevron-right" aria-hidden="true"></i>
            </div>
            <div class="p-2 fw-bold" aria-current="page" style="font-size: 14px">
                <a href="/service/626aefee33c01793463730d5/papiers-citoyennete/carte-nationale-didentite-renouvellement">Carte nationale d'identité - Renouvellement</a>
            </div>
        </div>
    </div>
    <div class="mt-3 row">
        <div class="col-md-10">
            <div class="fs-2 fw-bold" tabindex="0">Carte nationale d'identité - Renouvellement</div>
            <div class="py-3 my-1" tabindex="0">Description de la procédure</div>
        </div>
    </div>
    <div class="d-flex flex-column flex-md-row justify-content-between">
        <div class="col-md-8">
            <div class="service-raw bg-white px-3 px-md-5 py-4 " tabindex="0">
                <div class="service-features">
                    <div class="bg-light-blue p-3 rounded-3 mb-2 mb-md-4">
                        <img src="/NIMBLE/svg/license.svg" height="50px" alt="">
                        <h4 class="fs-6 fw-bold mt-3">Délais d'exécution</h4>
                        <div class="">
                            <span>N/A</span>
                        </div>
                    </div>
                    <div class="bg-light-blue p-3 rounded-3 mb-2 mb-md-4">
                        <img src="/NIMBLE/svg/cash.svg" height="50px" alt="">
                        <h4 class="fs-6 fw-bold mt-3">Coût de la procédure</h4>
                        <div class="">
                            <span>N/A</span>
                        </div>
                    </div>
                    <div class="bg-light-blue p-3 rounded-3 mb-2 mb-md-4">
                        <img src="/NIMBLE/svg/agriculture.svg" height="50px" alt="">
                        <h4 class="fs-6 fw-bold mt-3">Durée de validité</h4>
                        <div class="">
                            <span>Cinq (05) ans.</span>
                        </div>
                    </div>
                </div>
                <div class="service-description">
                    <div> <h4>Description</h4>La carte nationale d'identité permet à son titulaire :
                        <ul>
                            <li>d'être identifié ;</li>
                            <li>de circuler librement dans le pays et dans l'espace UEMOA ;</li>
                            <li>et de pouvoir faire ses opérations bancaires ou autres formalités administratives.</li>
                        </ul>
                        Elle doit être renouvelée après expiration.
                    </div>
                    <hr>
                    <div>
                        <h4>Identification des personnes succeptibles / Légitimes à faire la demande</h4>
                        Tout citoyen togolais dont la carte a expiré.
                    </div>
                    <hr>
                    <div>
                        <h4>Pièces à fournir</h4>
                        <ul>
                            <li>L'original de l'acte de naissance;</li>
                            <li> L'original du certificat de nationalité;</li>
                            <li> La preuve de profession ou de diplôme;</li>
                            <li> Le résultat du test de groupage;</li>
                            <li> Un acte de mariage pour les femmes mariées;</li>
                            <li> Un certificat de divorce pour les divorcés;</li>
                            <li> Un acte de décès du conjoint pour les veuves.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="f-flex py-3 mb-5">
                <a href="/contact" type="button" class="btn btn-secondary bg-secondary-gray">
                    <span class=" fw-bold">Signaler une procédure inexacte</span>
                </a>
            </div>
        </div>
        <div style="max-width: 365px;" class="ms-md-2 mb-5">
            <div class="sticky-top" style="top: 130px">
                <div>
                    <p class="text-danger px-2">
                        <strong>Cette démarche n'est pas encore dématérialisée. Veuillez-vous adresser au guichet physique.</strong>
                    </p>
                </div>
                <div class="d-flex justify-content-between fixed-bottom d-md-none bg-white px-2 pt-2 pb-4"></div>
                <div id="contactWidget" class="mt-3">
                    <div class="d-flex flex-column justify-content-evenly bg-white border border-1 rounded-3 border-primary-gray px-4 py-4">
                        <div class="d-flex flex-column" tabindex="0">
                            <span class="fs-5 fw-bold mb-3">Fournisseur de service</span>
                            <span class="mb-4">Direction Générale de la Documentation Nationale (DGDN)</span>
                            <span>GTA, 322 R.P.T., Lomé</span>
                            <span>Tel: (+228) 22-50-78-56</span>
                            <a href="mailto:dgdn@documentation-togo.tg" class="overflow-hidden">dgdn@documentation-togo.tg</a>
                            <span>Fax: (+228) 22-50-78-57</span>
                            <a href="https://dgdn.gouv.tg" target="_blank" class="primary-link ">https://dgdn.gouv.tg</a>
                        </div>
                        <div class="bg-secondary-gray my-3" style="height:1px; "></div>
                        <div>
                            <span class="fs-5 fw-bold">Partager</span>
                            <div class="d-flex bg-white py-3 justify-content-between  rounded align-items-center" style=";height: 50px;">
                                <a class="primary-link" href="javascript:window.print()" aria-label="Imprimer">
                                    <i class="bi bi-printer-fill" aria-hidden="true"></i>
                                </a>
                                <a class="primary-link" href="mailto:?body=http://service-public.gouv.tg/service/626aefee33c01793463730d5/papiers-citoyennete/carte-nationale-didentite-renouvellement/" aria-label="E-mail" target="_blank">
                                    <i class="bi bi-envelope-fill" aria-hidden="true"></i>
                                </a>
                                <a class="primary-link" href="javascript:void(0)" data-sharer="linkedin" data-url="http://service-public.gouv.tg/service/626aefee33c01793463730d5/papiers-citoyennete/carte-nationale-didentite-renouvellement/" aria-label="linkedin">
                                    <i class="bi bi-linkedin" aria-hidden="true"></i>
                                </a>
                                <a class="primary-link" href="javascript:void(0)" data-sharer="facebook" data-url="http://service-public.gouv.tg/service/626aefee33c01793463730d5/papiers-citoyennete/carte-nationale-didentite-renouvellement/" aria-label="facebook">
                                    <i class="bi bi-facebook" aria-hidden="true"></i>
                                </a>
                                <a class="primary-link" href="javascript:void(0)" data-sharer="twitter" data-url="http://service-public.gouv.tg/service/626aefee33c01793463730d5/papiers-citoyennete/carte-nationale-didentite-renouvellement/" aria-label="twitter">
                                    <i class="bi bi-twitter" aria-hidden="true"></i>
                                </a>
                                <a class="primary-link" href="javascript:void(0)" data-sharer="whatsapp" data-url="http://service-public.gouv.tg/service/626aefee33c01793463730d5/papiers-citoyennete/carte-nationale-didentite-renouvellement/" aria-label="whatsapp">
                                    <i class="bi bi-whatsapp" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
