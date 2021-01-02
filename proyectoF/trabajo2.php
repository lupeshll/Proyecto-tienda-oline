<?php
echo "<u><br>CURSOS DEL PRIMER CICLO</br></u>";
$semestre1 = array(
    
        'pensamiento argediano' =>13,
        'matematica' =>14,
        'introduccion a la ing' =>12, 
        'realidad nacional y regional' =>15 
    
);
echo "<pre>";


    foreach($semestre1 as $curso => $nota)
        echo "$curso \t\t($nota)<br>";

echo "</pre>"; 
/* para el promedio del primer ciclo/*/
$prom1=array_sum($semestre1)/count($semestre1);

/*/ SEGUNDO CICLO*/

echo "<u><br>CURSOS DEL SEGUNDO CICLO</br></u>";
$semestre2 = array(
    
        'pensamiento argediano II' =>11,
        'matematica II' =>13,
        'metodologia a la programacion' =>15,
        'ingles' =>17 
    
);
echo "<pre>";


    foreach($semestre2 as $curso => $nota)
        echo "$curso \t\t($nota)<br>";

echo "</pre>";
/* para el promedio del segundo ciclo/*/
$prom2=array_sum($semestre2)/count($semestre2);

/**TERCER CICLO*/

echo "<u><br>CURSOS DEL TERCER CICLO</br></u>";
$semestre3 = array(
    
        'calculo inferencia' =>14, 
        'fisica' =>11,
        'diseño web' =>13,
        'teoria y diseño de base de datos' =>14
         
   
);
echo "<pre>";
                                              

    foreach($semestre3 as $curso => $nota)
        echo "$curso \t\t($nota)<br>";

echo "</pre>";
/* para el promedio del tercer ciclo/*/
$prom3=array_sum($semestre3)/count($semestre3);

/*  CUARTO CICLO*/

echo "<u><br>CURSOS DEL CUARTO CICLO</br></u>";
$semestre4 = array(
    
        'base de datos'=>14, 
        'estadistica'=>18,
        'electronica'=>13, 
        'computadores y sistemas operativos' =>14
    
     

    );

echo "<pre>";

    foreach($semestre4 as $curso => $nota)
        echo "$curso \t\t($nota)<br>";

echo "</pre>";
/* para el promedio caurto ciclo/*/
$prom4=array_sum($semestre4)/count($semestre4);

/*/ponderado para que lea/*/
echo "<u><br>PROMEDIO PONDERADO POR CADA CICLO</br></u>";
echo"PRIMER CICLO:\t\t(".$prom1.")<br>";
echo"SEGUNDO CICLO:\t\t(".$prom2.")<br>";
echo"TERCER CICLO:\t\t(".$prom3.")<br>";
echo"CUARTO CICLO:\t\t(".$prom4.")<br>";

/*/PROMEDIO PONDERADO/*/
echo "<u><br>PROMEDIO PONDERADO</br></u>";

echo"Mi promedio ponderado es:\t\t".($prom1+$prom2+$prom3+$prom4)/( 4 )."<br>";



?>


