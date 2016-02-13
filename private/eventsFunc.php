<?php 
function getEventos($filtre){
    $resuladoAPaloSecoXD = array();
    for($i = 0; $i < 10; $i++){
        $evento['title'] = substr("Lorem Ipsum és un text de farciment usat per la indústria de la tipografia i la impremta. Lorem Ipsum ha estat el text estàndard de la indústria des de l'any 1500, quan un impressor desconegut va fer servir una galerada de text i la va mesclar per crear un llibre de mostres tipogràfiques. No només ha sobreviscut cinc segles, sinó que ha fet el salt cap a la creació de tipus de lletra electrònics, romanent essencialment sense canvis. Es va popularitzar l'any 1960 amb el llançament de fulls Letraset que contenien passatges de Lorem Ipsum, i més recentment amb programari d'autoedició com Aldus Pagemaker que inclou versions de Lorem Ipsum.", rand(0, strlen($caracteres)-10), 10);
        
        $evento['date'] = "13/02/2016";
        $evento['place'] = "Tarragona";
        $evento['description'] =  substr("Lorem Ipsum és un text de farciment usat per la indústria de la tipografia i la impremta. Lorem Ipsum ha estat el text estàndard de la indústria des de l'any 1500, quan un impressor desconegut va fer servir una galerada de text i la va mesclar per crear un llibre de mostres tipogràfiques. No només ha sobreviscut cinc segles, sinó que ha fet el salt cap a la creació de tipus de lletra electrònics, romanent essencialment sense canvis. Es va popularitzar l'any 1960 amb el llançament de fulls Letraset que contenien passatges de Lorem Ipsum, i més recentment amb programari d'autoedició com Aldus Pagemaker que inclou versions de Lorem Ipsum.", rand(0, strlen($caracteres)-10), 10);
        
        $evento['photo'] = "http://www.historia.urv.cat/media/upload/domain_285/gif/cache/urveditora289111020.JPG";
        $evento['interested'] = 23;
        $evento['assist'] = 21;
    }
    
}