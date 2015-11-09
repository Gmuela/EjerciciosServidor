<?php

    echo "Introduce un dia: ";

    fscanf(STDIN, "%s\n", $dia);

    echo "Introduce un mes: ";

    fscanf(STDIN, "%s\n", $mes);

    echo "Introduce un anyo: ";

    fscanf(STDIN, "%s\n", $anyo);

    $fechaDada=strtotime("$dia-$mes-$anyo");

    $fechaActual=time();

    $fechaRes=$fechaActual-$fechaDada;

    const sPm= 60;

    const sPh=3600;

    const sPd=86400;

    const sPmes=2592000;

    const sPa=31536000;

    $anyoTrans=(int)($fechaRes/sPa);
    
    $resto=$fechaRes%sPa;

    $mesesTrans=(int)($resto/sPmes);

    $resto=$resto%sPmes;

    $diasTrans=(int)($resto/sPd);

    $resto=$resto%sPd;

    $horasTrans=(int)($resto/sPh);

    $resto=$resto%sPh;

    $minTrans=(int)($resto/sPm);

    $resto=$resto%sPm;

    echo "Tienes $anyoTrans anyos, $mesesTrans meses, $diasTrans dias, $horasTrans horas, $minTrans minutos y $resto segundos";


    

?>